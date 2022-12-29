<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use Exception;
use Carbon\Carbon;
use App\Mail\SendTwentyHourMail;
Use Mail;

class SendTwentyFourHoursPriorEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twentyfourHours:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'twenty four prior hours mail';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            
            $booking = Booking::with(['user','user_noim','location','celebrant'])->get();
            $when = now()->addMinutes(1);
            foreach($booking as $send){
                // dd($send["booking_date"]);
                $carbon_date = \Carbon\Carbon::parse($send->booking_date);
                $twenty_four_prior = $carbon_date->subHour(24);
                

                $date = today()->format('Y-m-d H:i:s');
                $today_date = \Carbon\Carbon::parse($date);
                if($today_date == $twenty_four_prior){

                    $mailArray= [];
                    $couple_subject ='”Important information about your wedding” with a link to the portal.
                    Click here to go to your portal. This opens the following message in their portal.';
            
                    $celebrant_subject = 'New Booking: '.date("M d, Y",strtotime($send["booking_date"])).' at '.$send["location_name"].' Fee $'.$price_your_fee;
            
                    $mailArray[$send->user->email] = ['emails.booking-confirmation.couple-email','Confirmation of your ceremony booking'];
                    $mailArray[$send->celebrant->email] = ['emails.booking-confirmation.celebrant-email',$celebrant_subject];
                    $mailArray[config('env.FROM_EMAIL')] = ['emails.booking-confirmation.admin-email',$admin_subject];
                  
                
                    foreach($mailArray as $mail => $view){                      
                        $sendMail = new SendTwentyHourMail($dataMail,$view[0],$view[1]);
                        \Mail::to($mail)->later($when, $sendMail);
                    }
                   
                    
                } 
                
            }
  
            dd('Mail Sent Successfully.');
  
        }catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
