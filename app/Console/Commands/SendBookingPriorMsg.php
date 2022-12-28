<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use Carbon\Carbon;
class SendBookingPriorMsg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fortyeighthours:msg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'forty eight prior hours msg';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
  
            $date = today()->format('Y-m-d H:i:s');
       
            $carbon_date = Carbon::parse($date);
            $check_date = $carbon_date->addHours(48);
            
            $account_sid = getenv("TWILIO_SID");  
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
           

            $booking = Booking::with('user')->where('booking_date', '=', $check_date)->get();
           
            $count = 0;
            $client = new Client($account_sid, $auth_token);
            
            foreach($booking as $sendSms){
                $first_couple_name = $sendSms->first_couple_name;
                $second_couple_name = $sendSms->second_couple_name;
                $booking_start_time = date('H:i',strtotime($sendSms->booking_start_time));
                $booking_date = date('M d, Y',strtotime($sendSms->booking_date));
                $location_name =  $sendSms->location_name;
                $website_url = config('env.WEBSITE');
                $celebrant_details = User::where('id',$sendSms->celebrant_id)->select('country_code','phone','name')->first();               
                   
                $celebrant_phone_number = '+'.$celebrant_details->country_code.$celebrant_details->phone;
                $celebrant_name = $celebrant_details->name;
                
                $message = " Hi ".$first_couple_name." and ".$second_couple_name.", All set for your ceremony at ".$booking_start_time." and ".$booking_date."  at ".$location_name.". Click here to log in to your portal to ensure all is set - ".$website_url.". If you have any questions on the day please call me on ".$celebrant_phone_number.". See you soon, ".$celebrant_name;

               
                $phone_number = '+'.$sendSms->user->country_code.$sendSms->user->phone;
                $count++;

                $client->messages->create(
                    $phone_number,
                    [
                        'from' => $twilio_number,
                        'body' => $message,
                    ]
                );
                
            }
  
            dd('SMS Sent Successfully.');
  
        }catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
