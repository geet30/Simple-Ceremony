<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class SendNoimReminderMsgAtEightPm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noimReminderAtEight:msg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Complete your Noim -Reminder Msg at 8pm';

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
            foreach($booking as $send){

                $carbon_date = \Carbon\Carbon::parse($send->booking_date);
                $one_month_calendar_date = $carbon_date->subMonth();

                $dt = new \DateTime(date('Y-m-d H:i'));
                
                $tz = new \DateTimeZone(config('env.TIMEZONE'));
                $dt= $dt->setTimezone($tz);

               
                $sentTime = date('Y-m-d').' 20:00';

                $date = today()->format('Y-m-d H:i:s');
                $today_date = \Carbon\Carbon::parse($date);
               
                if($today_date == $one_month_calendar_date){
                    if(strtotime($dt->format('Y-m-d H:i')) == strtotime($sentTime)){
                        if($send->user_noim == null){
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
                    }
                }                
                    
                
            }
  
            dd('SMS Sent Successfully.');
  
        }catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }

    }
}
