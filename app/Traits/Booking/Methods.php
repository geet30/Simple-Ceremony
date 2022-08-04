<?php

namespace App\Traits\Booking;

use Illuminate\Support\Facades\{View, Storage, DB,Hash};
use App\Models\{User,Locations,Booking,BookingPayments,Cart};
use Illuminate\Support\Facades\Cache;
use Stripe\Stripe;
use Str;
use App\Mail\{RegisterUserMail,ContactUsMail};
use Illuminate\Support\Facades\Auth; 
trait Methods
{
   static function getLocationDetail(){
  
        try{
            // dd(Cache::get('booking'));
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
            // $Booking= self::addBookingDetailToDB(Cache::get('booking'));
            $send_paramter = [
                'name' => $data['name'],
                'price' => $data['price'],
                'img' => $img,
                'locationId' => $locationId,
                // 'userId' => Cache::get('booking')->userId,

            ];
            return self::stripePayment($send_paramter);
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }
        
    }
    static function contactUsEmail($data){
      
        $when = now()->addMinutes(1);
        $dataMail  = array(
            // 'email' => $data['email'],
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
            // dd($data);
            $booking_inputs['user_id']  = $user->id; 
            $booking_inputs['locationId']  = $data->locationId; 
            $booking_inputs['booking_date']  = $data->booking_date; 
            $booking_inputs['booking_time']  = $data->booking_time; 
            $booking_inputs['first_couple_name']  = $data->first_couple_name; 
            $booking_inputs['second_couple_name']  = $data->second_couple_name; 
            $booking_inputs['ceremony_type']  = $data->ceremony_type;     
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
    
   
}