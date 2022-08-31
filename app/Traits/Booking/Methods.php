<?php

namespace App\Traits\Booking;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,Locations,Booking,BookingPayments,Cart,RequestLocations,LocationPackages};
use Illuminate\Support\Facades\Cache;
use Stripe\Stripe;
use Str;
use Carbon\Carbon;
use App\Mail\{RegisterUserMail,ContactUsMail,RequestLocationEmail};
use Illuminate\Support\Facades\Auth; 
trait Methods
{

    static function calculateTimeslotsPrice(){
        $booking_start_time = \Carbon\Carbon::parse(Cache::get('booking')->booking_start_time);
        $booking_end_time = \Carbon\Carbon::parse(Cache::get('booking')->booking_end_time);
        $interval = $booking_start_time->diff($booking_end_time);
        $duration = $interval->format('%h') * 60 + $interval->format('%i');

        $check_count_of_timeslots = $duration /30;
        return $check_count_of_timeslots;
       
    }
    static function getBookingPrice($id=null){
        $getLocationPackages =  LocationPackages::with([
            'packages' => function($query){               
                $query->select('package_name','id','total_fee');
            }          
        ])->select('id','package_id');
        if($id != ''){
            $getLocationPackages =$getLocationPackages->where('location_id',$id);
        }
        $getLocationPackages = $getLocationPackages->get()->toArray();
        $total_fee =0;
        foreach($getLocationPackages as $key=>$packages){
            
            foreach($packages['packages'] as $key=>$package){
                $total_fee += number_format($package['total_fee']);
            }
        } 
        return $total_fee;
    }
    static function getLocationDetail(){
        try{
         
            $locationId = Cache::get('booking')->locationId;
            $data = Locations::with([
                'location_images' => function($query){
                    $query->select('location_id','image');
                }
            ])->select('name','id','price')->where('id',$locationId)->first()->toArray();
            $img ='';
            if(isset($data['location_images']) && !empty($data['location_images']))  {
                foreach($data['location_images'] as $images){
                
                    if(isset($images) && !empty($images))  {
                    
                        $img = asset('/uploads/images/locations/'.$images['image']);
                    }
                }
            }
            $addons_price = Cache::get('booking')->package_price;
            $check_count_of_timeslots = self::calculateTimeslotsPrice();
            $price = $data['price'] * $check_count_of_timeslots;
            $total_price = $addons_price + $price;
            $send_paramter = [
                'name' => $data['name'],
                'price' => $total_price,
                'img' => $img,
                'locationId' => $locationId,

            ];
            return self::stripePayment($send_paramter);
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }        
    }
    static function requestLocationEmail($data){
        $when = now()->addMinutes(1);
        $dataMail  = $data;
        // dd($dataMail);

        $mail_id = config('env.CONTACTUS_EMAIL');
        $sendMail = new RequestLocationEmail($dataMail);
        return \Mail::to($mail_id)->later($when, $sendMail); 
    }
    static function contactUsEmail($data){
      
        $when = now()->addMinutes(1);
        $dataMail  = array(
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'phone' => $data['phone'],
            'country_code' => $data['country_code'],
            'description' => $data['description']
        );
        // dd($dataMail);

        $mail_id = config('env.CONTACTUS_EMAIL');
        $sendMail = new ContactUsMail($dataMail);
        return \Mail::to($mail_id)->later($when, $sendMail);

    }
    static function addtoCart($data){
      
        foreach($data as $key=>$cart){
          
            $cart_inputs['name'] = $cart->package_name;
            $cart_inputs['price'] = $cart->price;
            $cart_inputs['package_id'] = $cart->package_id;
            $cart_inputs['user_id'] = Auth::user()->id;
            Cart::create($cart_inputs);
        }
    }
    static function addBookingDetailToDB($sessionId,$data){
        try{
            $user_inputs['email'] = $data->email;
            $user_inputs['phone'] = $data->phone;
            $user_inputs['country_code'] = $data->country_code;
            $random_password = Str::random(8);
            $user_inputs['password'] = Hash::make($random_password );
        
        
            $user =User::create($user_inputs);
            $user->assignRole('User');
            $when = now()->addMinutes(1);
            $dataMail  = array(
                'email' => $user_inputs['email'],
                'password' => $random_password ,
            );

            $mail_id = $user_inputs['email'];
            $sendMail = new RegisterUserMail($dataMail);
            $mail = \Mail::to($mail_id)->later($when, $sendMail);

            $booking['userId'] = $user->id;

            if(Cache::has('booking')){
                $booking = Cache::get('booking');
                $booking['userId'] = $user->id;
                Cache::put('booking',$booking);
    
            }
            $booking_inputs['user_id']  = $user->id; 
            $booking_inputs['locationId']  = $data->locationId; 
            $booking_inputs['booking_date']  = $data->booking_date; 
            $booking_inputs['booking_start_time']  = $data->booking_start_time; 
            $booking_inputs['booking_end_time']  = $data->booking_end_time; 
            $booking_inputs['first_couple_name']  = $data->first_couple_name; 
            $booking_inputs['second_couple_name']  = $data->second_couple_name; 
            $booking_inputs['ceremony_type']  = $data->ceremony_type;   
            $booking_inputs['status']  = config('ceremonyStatus.status.Booked');     

            $booking = Booking::create($booking_inputs);
            self::savePaymentDetail($sessionId,$user->id);

            return true;
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }

    }
    static function savePaymentDetail($sessionId,$userId){
              
        $stripe = new \Stripe\StripeClient(
            config('env.STRIPE_SECRET')
        );
        $response = $stripe->checkout->sessions->retrieve(
            $sessionId,
            []
        );
        bcscale(2);
        $booking_payment_inputs['user_id']  = $userId; 
        $booking_payment_inputs['amount']  = bcdiv($response->amount_total, '100');
        $booking_payment_inputs['currency']  = $response->currency;
        $booking_payment_inputs['customerId']  = $response->customer;
        $booking_payment_inputs['payment_status']  = $response->payment_status;
        $booking_payment_inputs['payment_method_types']  = $response->payment_method_types[0];
        $booking_payment_inputs['status']  = $response->status;
        $booking_payment_inputs['checkoutSessionID']  = $sessionId;

        
        return BookingPayments::create($booking_payment_inputs);

    }
    static function stripePayment($data) {
      
        try { 
            
            Stripe::setApiKey(config('env.STRIPE_SECRET'));       
            $DOMAIN = config('env.WEBSITE');
            $amount = bcmul($data['price'], 100);
            $checkout_session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => $amount,
                    'product_data' => [
                        'name' => $data['name'],
                        'description' => $data['name'],
                        'images' => [$data['img']],
                    ]
                    ],
                    'quantity' => 1
                ]],
                'mode' => 'payment',
                
                // 'success_url' => $DOMAIN . '/get-booking-calender/'.$data['locationId'].'?userId='.$data["userId"].'&session_id={CHECKOUT_SESSION_ID}',
                'success_url' => $DOMAIN . '/get-booking-calender/'.$data['locationId'].'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $DOMAIN . '/payment-cancel',
            ]);
            return redirect($checkout_session->url);
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }
    }
    static function requestLocation($data){
        return RequestLocations::create($data);

    }
    static function searchBooking($request){             
        if($request->has('id') && $request->filled('id')){
            $get_result = Booking::with([
                'location' => function($query){
                    $query->select('name','id','price');
                },
                'location.location_images' => function($query){
                    $query->select('location_id','image');
                }
            ]);
            $booking = (clone $get_result);
           
            if($request->has('id')){
                $booking->where('locationId',$request->id);
            }           
            if($request->has('booking_date') && $request->booking_date !=''){
                $booking->where('booking_date',$request->booking_date);
            }
            if($request->has('booking_start_time') && $request->booking_start_time !=''){
                $booking->where('booking_start_time',$request->booking_start_time);
            }
            if($request->has('booking_end_time') && $request->booking_end_time !=''){
                $booking->where('booking_end_time',$request->booking_end_time);
            }
           return $booking->select('booking_date','id','locationId')->get();
                            
        }else{
            return Booking::with([
                'location' => function($query){
                    $query->select('name','id','price');
                },
                'location.location_images' => function($query){
                    $query->select('location_id','image');
                }
            ])->select('booking_date','id','locationId')->get();
                          
        }
    }
    static function marriages(){
        return  Booking::with([
            'location' => function($query){
                $query->select('name','id','price');
            }
        ]);
    }
    static function checkIfBookingExist($data,$locationId){
        $get_result = Booking::with([
            'location' => function($query){
                $query->select('name','id','price');
            },
            'location.location_images' => function($query){
                $query->select('location_id','image');
            }
        ]);
        $booking = (clone $get_result);
           
        if($locationId !=''){
            $booking->where('locationId',$locationId);
        }           
        if(isset($data['booking_date']) && $data['booking_date']!=''){
            $booking->where('booking_date',$data['booking_date']);
        }
        if(isset($data['booking_start_time']) && $data['booking_start_time']!=''){
            $booking->where('booking_start_time',$data['booking_start_time']);
        }
        if(isset($data['booking_end_time']) && $data['booking_end_time']!=''){
            $booking->where('booking_end_time',$data['booking_end_time']);
        }
        return $booking->select('booking_date','id','locationId')->first();
    }
   
}