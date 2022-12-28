<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use App\Mail\SendNoimReminderMail;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
Use Mail;
class SendNoimReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noimreminder:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Complete your Noim -Reminder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
  
            $date = today()->format('Y-m-d H:i:s');
       
            $carbon_date = \Carbon\Carbon::parse($date);
            $check_date = $carbon_date->addDays(30);
            
            $account_sid = getenv("TWILIO_SID");  
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $booking = Booking::with(['user','user_noim','location','celebrant'])->where('booking_date', '=', $check_date)->get();
            

           
            $count = 0;
            $client = new Client($account_sid, $auth_token);
            $when = now()->addMinutes(1);
            foreach($booking as $send){

                if($send->user_noim == null){
                    $sendMail = new SendNoimReminderMail($send);
                    \Mail::to($send->user->email)->later($when, $sendMail);
                }                 
                $website_url = config('env.WEBSITE');             
                
                $message ='CRITICAL. Your NoIM is due today!Hi '.$send->first_couple_name.' & '.$send->second_couple_name.', please urgently log onto your Simple Ceremonies Portal '.$website_url.' and complete your NoIM & upload it before midnight tonight. Cheers Ange and Michael';

               
                $phone_number = '+'.$send->user->country_code.$send->user->phone;
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
