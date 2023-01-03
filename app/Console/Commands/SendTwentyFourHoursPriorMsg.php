<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use Carbon\Carbon;
class SendTwentyFourHoursPriorMsg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twentyfourHours:msg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'twenty four prior hours msg';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            
            $account_sid = getenv("TWILIO_SID");  
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $booking = Booking::with(['user','user_noim','location','celebrant'])->get();
           
            $count = 0;
            $client = new Client($account_sid, $auth_token);
            
            foreach($booking as $sendSms){
                $carbon_date = \Carbon\Carbon::parse($sendSms->booking_date);
                $twenty_four_prior = $carbon_date->subHour(24);
                

                $date = today()->format('Y-m-d H:i:s');
                $today_date = \Carbon\Carbon::parse($date);
               if($today_date == $twenty_four_prior){
                    $first_couple_name = $sendSms->first_couple_name;
                    $second_couple_name = $sendSms->second_couple_name;
                    $booking_start_time = date('H:i',strtotime($sendSms->booking_start_time));
                    $booking_date = date('M d, Y',strtotime($sendSms->booking_date));
                    $location_name =  $sendSms->location_name;
                    $website_url = config('env.WEBSITE');
                    $celebrant_details = User::where('id',$sendSms->celebrant_id)->select('country_code','phone','name')->first();               
                    
                    $celebrant_phone_number = '+'.$celebrant_details->country_code.$celebrant_details->phone;
                    $celebrant_name = $celebrant_details->name;

                    $phone_number = '+'.$sendSms->user->country_code.$sendSms->user->phone;
                    $count++;


                    $celebrant_message = "Excited. Simple Ceremony ".$booking_start_time." on ".$booking_date." @ ".$location_name.". Hi ".$first_couple_name." &  ".$second_couple_name.". Phone ".$phone_number;
                    
                    $message = "Critical  information about your wedding”

                    “Hi ".$first_couple_name." and ".$second_couple_name.", not long now. 

                    Your ceremony will be at ".$booking_start_time." on ".$booking_date." at ".$location_name."

                    1. Please  click here - ".$website_url." to check all details, particularly your Witnesses full legal names. (Link to their portal, this takes them to their Portal page 10/37.)
                    2. Do you want us to order your registered Certificate of Marriage - click here - ".$website_url."
                    3. ".$celebrant_name." is your celebrant ( Phone ".$celebrant_phone_number.")

                    Cheers

                    Ange,  Michael & SC Team #Do not reply to Txt, use your portal";
                    // dd($message);

                    $client->messages->create(
                        $celebrant_phone_number,
                        [
                            'from' => $twilio_number,
                            'body' => $celebrant_message,
                        ]
                    );
                    $client->messages->create(
                        $phone_number,
                        [
                            'from' => $twilio_number,
                            'body' => $message,
                        ]
                    );
                }
                
            }
  
            dd('SMS Sent Successfully.');
  
        }catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
