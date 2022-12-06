<?php

namespace App\Traits\Booking;

use Illuminate\Support\Facades\{View, Storage, DB, Hash};
use App\Models\{User, CelebrantDaySlot,Invoices,Locations, Booking,UserBookingAddon, BookingPayments, Cart, RequestLocations, LocationPackages};
use Illuminate\Support\Facades\Cache;
use Stripe\Stripe;
use Str;
use Carbon\Carbon;
use App\Mail\{RegisterUserMail, ContactUsMail, RequestLocationEmail};
use Illuminate\Support\Facades\Auth;

trait Methods
{

    static function calculateTimeslotsPrice()
    {
        $booking_start_time = \Carbon\Carbon::parse(Cache::get('booking')->booking_start_time);
        $booking_end_time = \Carbon\Carbon::parse(Cache::get('booking')->booking_end_time);
        $interval = $booking_start_time->diff($booking_end_time);
        $duration = $interval->format('%h') * 60 + $interval->format('%i');

        $check_count_of_timeslots = $duration / 30;
        return $check_count_of_timeslots;
    }
    static function getBookingPrice($id = null)
    {
        $getLocationPackages =  LocationPackages::with([
            'packages' => function ($query) {
                $query->select('package_name', 'id', 'total_fee');
            }
        ])->select('id', 'package_id');
        if ($id != '') {
            $getLocationPackages = $getLocationPackages->where('location_id', $id);
        }
        $getLocationPackages = $getLocationPackages->get()->toArray();
        $total_fee = 0;
        foreach ($getLocationPackages as $key => $packages) {

            foreach ($packages['packages'] as $key => $package) {
                $total_fee += round($package['total_fee'],0);
            }
        }
        return $total_fee;
    }
    static function getLocationDetail()
    {
        try {

            $locationId = Cache::get('booking')->locationId;
            $data = Locations::with([
                'location_images' => function ($query) {
                    $query->select('location_id', 'image');
                }
            ])->select('name', 'id', 'price')->where('id', $locationId)->first()->toArray();
            $img = '';
            if (isset($data['location_images']) && !empty($data['location_images'])) {
                foreach ($data['location_images'] as $images) {

                    if (isset($images) && !empty($images)) {

                        $img = asset('/uploads/images/locations/' . $images['image']);
                    }
                }
            }
            // dd(Cache::get('booking'));
            // $addons_price = Cache::get('booking')->package_price;
            // $check_count_of_timeslots = self::calculateTimeslotsPrice();
            // $price = $data['price'] * $check_count_of_timeslots;
            // $total_price = $addons_price + $price;
            $DOMAIN = config('env.WEBSITE');
            $send_paramter = [
                'name' => $data['name'],
                'price' => Cache::get('booking')->price,
                'img' => $img,
                'locationId' => $locationId,

            ];
           
            $success_url = $DOMAIN . '/get-booking-calender/'.$locationId.'?session_id={CHECKOUT_SESSION_ID}';
            $cancel_url = $DOMAIN . '/payment-cancel';
            return self::stripePayment($send_paramter,$success_url,$cancel_url);
        } catch (\Exception $ex) {
            
            return $ex->getMessage();
        }
    }
    static function requestLocationEmail($data)
    {
        $when = now()->addMinutes(1);
        $dataMail  = $data;

        $mail_id = config('env.CONTACTUS_EMAIL');
        $sendMail = new RequestLocationEmail($dataMail);
        return \Mail::to($mail_id)->later($when, $sendMail);
    }
    static function contactUsEmail($data)
    {

        $when = now()->addMinutes(1);
        $dataMail  = array(
            'email' => $data['email'],
            'first_name' => $data['couple_one'],
            'phone' => $data['phone'],
            'country_code' => $data['phone_code'],
            'description' => $data['enquiry']
        );
        // dd($dataMail);

        $mail_id = config('env.CONTACTUS_EMAIL');
        $sendMail = new ContactUsMail($dataMail);
        return \Mail::to($mail_id)->later($when, $sendMail);
    }
    static function addtoBookingAddon($data,$booking_id)
    {
        if($booking_id){
            
            foreach($data as $package){
                $userBookingAddon['booking_id']= $booking_id;
                $userBookingAddon['package_id']= $package->package_id;
                $userBookingAddon['partner_id']= $package->partner_id;
                $userBookingAddon['addon_type']= 2;
                
                UserBookingAddon::create($userBookingAddon);
            }
            return true;
        }

    }
    static function addBookingDetailToDB($sessionId, $data)
    {
        dd($data);
        try {           

            $user_inputs['email'] = $data->email;
            $user_inputs['phone'] = $data->phone;
            $user_inputs['country_code'] = $data->country_code;
            $user_inputs['user_type'] =  config('env.userType.User');
            $random_password = Str::random(8);
            $user_inputs['password'] = Hash::make($random_password);


            $user = User::create($user_inputs);
            $user->assignRole('User');
            $when = now()->addMinutes(1);
            $dataMail  = array(
                'email' => $user_inputs['email'],
                'password' => $random_password,
            );

            $mail_id = $user_inputs['email'];
            $sendMail = new RegisterUserMail($dataMail);
            $mail = \Mail::to($mail_id)->later($when, $sendMail);

            $booking['userId'] = $user->id;

            if (Cache::has('booking')) {
                $booking = Cache::get('booking');
                $booking['userId'] = $user->id;
                Cache::put('booking', $booking);
            }
            $booking_inputs['user_id']  = $user->id;
            $booking_inputs['locationId']  = $data->locationId;
            $booking_inputs['celebrant_id']  = $data->celebrant_id; // will be done
            $booking_inputs['booking_date']  = $data->booking_date;
            $booking_inputs['booking_start_time']  = $data->booking_start_time;
            // $booking_inputs['booking_end_time']  = $data->booking_end_time;
            $booking_inputs['first_couple_name']  = $data->first_couple_name;
            $booking_inputs['second_couple_name']  = $data->second_couple_name;
            $booking_inputs['ceremony_type']  = $data->ceremony_type;
            $booking_inputs['location_name']  = $data->location_name;
            $booking_inputs['full_name_of_person_1']  = $data->full_name_of_person_1;
            $booking_inputs['full_name_of_person_2']  = $data->full_name_of_person_2;
            $booking_inputs['full_name_of_witness_1']  = $data->full_name_of_witness_1;
            $booking_inputs['full_name_of_witness_2']  = $data->full_name_of_witness_2;
            $booking_inputs['full_name_of_child']  = $data->full_name_of_child;
            $booking_inputs['full_name_of_parent_1']  = $data->full_name_of_parent_1;
            $booking_inputs['full_name_of_parent_2']  = $data->full_name_of_parent_2;
            $booking_inputs['full_name_of_sponsor_1']  = $data->full_name_of_sponsor_1;
            $booking_inputs['full_name_of_sponsor_2']  = $data->full_name_of_sponsor_2;
            $booking_inputs['status']  = config('ceremonyStatus.status.Booked');

            $booking = Booking::create($booking_inputs);
            self::saveAddonDetail($data->locationId,$booking->id);
            self::savePaymentDetail($sessionId, $user->id,$booking->id);
            self::createInvoice($booking->id);

            return true;
        } catch (\Exception $ex) {
            echo "<pre>";
            print_r($ex->getMessage());
            die;
            return $ex->getMessage();
        }
    }
    static function createInvoice($booking_id){
        $booking =  Booking::where('id',$booking_id)->first();
              
        $invoices_data['user_id']  = $booking->user_id;
        $invoices_data['booking_id']  = $booking->id;
        if(isset($booking->celebrant_id) && !empty($booking->celebrant_id)){
            $celebrant_details =User::where('id',$booking->celebrant_id)->with('celebrant')->first();
           
            $invoices_data['celebrant_id']  = $booking->celebrant_id;
            $invoices_data['recipient_name']  = $celebrant_details->first_name;//celebrant name;
            $invoices_data['abn_number']  =$celebrant_details->abn_number;
            $invoices_data['bank_name']  = $celebrant_details->bank;
            $invoices_data['bank_number']  = $celebrant_details->account_no;
            $invoices_data['user_type']  =  config('env.userType.Celebrant');
        }

        $invoices_data['invoice_number']  = 1111;       
        $invoices_data['amount']  = $booking->price;
        $invoices_data['status']  = config('ceremonyStatus.status.Booked');
        $invoices_data['notes'] = 'New Invoice Created';
        Invoices::create($invoices_data);
        return true;

    }
    static function saveAddonDetail($locationId,$booking_id){
        $locations_packages =  Locations::with([
            'location_packages' => function($query){
                $query->select('location_id','partner_id','package_id');
            }           
        ])->where('id',$locationId)->first();
        if(!empty($locations_packages['location_packages'])){
            //insert to table
            foreach($locations_packages['location_packages'] as $package){
                
                $userBookingAddon['booking_id']= $booking_id;
                $userBookingAddon['package_id']= $package['package_id'];
                $userBookingAddon['partner_id']= $package['partner_id'];
                UserBookingAddon::create($userBookingAddon);
            }
        }
        return true;
    }
    static function savePaymentDetail($sessionId, $userId,$booking_id)
    {

        $stripe = new \Stripe\StripeClient(
            config('env.STRIPE_SECRET')
        );
        $response = $stripe->checkout->sessions->retrieve(
            $sessionId,
            []
        );
        bcscale(2);
        $booking_payment_inputs['user_id']  = $userId;
        $booking_payment_inputs['booking_id']  = $booking_id;
        $booking_payment_inputs['amount']  = bcdiv($response->amount_total, '100');
        $booking_payment_inputs['currency']  = $response->currency;
        $booking_payment_inputs['customerId']  = $response->customer;
        $booking_payment_inputs['payment_status']  = $response->payment_status;
        $booking_payment_inputs['payment_method_types']  = $response->payment_method_types[0];
        $booking_payment_inputs['status']  = $response->status;
        $booking_payment_inputs['checkoutSessionID']  = $sessionId;


        return BookingPayments::create($booking_payment_inputs);
    }
    static function stripePayment($data,$success_url,$cancel_url)
    {
        
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
                'success_url' => $success_url,
                'cancel_url' => $cancel_url,
            ]);
            return redirect($checkout_session->url);
        } catch (\Exception $ex) {
            return redirect('/payment-cancel')->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    static function requestLocation($data)
    {
        return RequestLocations::create($data);
    }
    static function searchBooking($request)
    {
        if ($request->has('id') && $request->filled('id')) {
            $get_result = Booking::with([
                'location' => function ($query) {
                    $query->select('name', 'id', 'price');
                },
                'location.location_images' => function ($query) {
                    $query->select('location_id', 'image');
                }
            ]);
            $booking = (clone $get_result);

            if ($request->has('id')) {
                $booking->where('locationId', $request->id);
            }
            if ($request->has('booking_date') && $request->booking_date != '') {
                $booking->where('booking_date', $request->booking_date);
            }
            if ($request->has('booking_start_time') && $request->booking_start_time != '') {
                $booking->where('booking_start_time', $request->booking_start_time);
            }
            if ($request->has('booking_end_time') && $request->booking_end_time != '') {
                $booking->where('booking_end_time', $request->booking_end_time);
            }
            return $booking->select('booking_date', 'id', 'locationId')->get();
        } else {
            return Booking::with([
                'location' => function ($query) {
                    $query->select('name', 'id', 'price');
                },
                'location.location_images' => function ($query) {
                    $query->select('location_id', 'image');
                }
            ])->select('booking_date', 'id', 'locationId')->get();
        }
    }
    static function marriages()
    {
        return  Booking::with([
            'location' => function ($query) {
                $query->select('name', 'id', 'price','address','town','post_code');
            },
            'celebrant' => function ($query) {
                $query->select('first_name', 'id');
            },
           
            'booking_addons.packages'=>function ($query) {
                $query->select('package_name','id','total_fee','user_id','product_id');
            },
            'booking_addons.packages.user'=>function ($query) {
                $query->select('name','id');
            },
        ]);
    }
    static function checkIfBookingExist($data, $locationId)
    {
       
        $get_result = Booking::with([
            'location' => function ($query) {
                $query->select('name', 'id', 'price');
            },
            'location.location_images' => function ($query) {
                $query->select('location_id', 'image');
            }
        ]);
        $booking = (clone $get_result);

        if ($locationId != '') {
            $booking->where('locationId', $locationId);
        }
        if (isset($data['booking_date']) && $data['booking_date'] != '') {
            $booking->where('booking_date', $data['booking_date']);
        }
        if (isset($data['booking_start_time']) && $data['booking_start_time'] != '') {
            $booking->where('booking_start_time', $data['booking_start_time']);
        }
        if (isset($data['booking_end_time']) && $data['booking_end_time'] != '') {
            $booking->where('booking_end_time', $data['booking_end_time']);
        }
        return $booking->select('booking_date', 'id', 'locationId')->first();
    }
    static function change_booking_status($request){
        // dd($request->all());
        $input['status'] = $request->status;
        $body = '';
        if ($request->status == 2) {
            $body = 'Marriage status changed to Lodged by celebrant';
        } else if ($request->status == 3) {
            $body = 'Marriage status changed to Lodged Pending by celebrant';
        } else if ($request->status == 4) {
            $body = 'Marriage status changed to Non Legal by celebrant';
        }
        else if ($request->status == 5) {
            $body = 'Marriage status changed to Registered by celebrant';
        }
        else if ($request->status == 8) {
            $body = 'Marriage status changed to Cancelled by celebrant';
        }
        // send notification to admin for add-ons list
        $title = 'Ceremony Status';
        $redirection_url = 'user/overview';
        $type = 'Ceremony status updated';
        $authId = Auth::user()->id;
        Booking::where('id', $request->id)->update($input);
        $booking = Booking::where('id', $request->id)->first();
        notificationSave($authId, $booking->user_id, $title, $body, $redirection_url, $type);
        $admin = User::role('Admin')->first();
        $redirection_url_admin = 'marriages/all-records-tab';
        notificationSave($authId, $admin->id, $title, $body, $redirection_url_admin, $type);
        return true;


    }
    static function getRescheduleInfo($id){
       
        return Locations::where('id',$id)->value('price');
        // dd($location_detail);
    }
          
    static function getCalendarAvailability($request){
        try{
            
            return CelebrantDaySlot::with('location','dates')->whereHas('dates',function($qr) use($request){
                $qr->whereDate('start_date','<=',$request->search)
                ->whereDate('end_date','>=',$request->search);
        
            })->where('day',strtolower($request->day))->where('location_id',$request->locationId)->get(); //  need to add condition to show only those slots which are not booked
            
        }catch (\Exception $ex) {
            dd($ex);
        }
       
    }
}
