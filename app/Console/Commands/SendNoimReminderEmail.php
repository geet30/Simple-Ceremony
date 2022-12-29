<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Booking,User};
use App\Mail\SendNoimReminderMail;
use Illuminate\Http\Request;
use Exception;
Use Mail;
class SendNoimReminderEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noimReminder:emails';

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
            $booking = Booking::with(['user','user_noim','location','celebrant'])->get();
            $when = now()->addMinutes(1);
            foreach($booking as $send){

                $carbon_date = \Carbon\Carbon::parse($send->booking_date);
                $one_month_calendar_date = $carbon_date->subMonth();
                $date = today()->format('Y-m-d H:i:s');
                $today_date = \Carbon\Carbon::parse($date);
                
                if($today_date == $one_month_calendar_date){
                    
                    if($send->user_noim == null){
                        $sendMail = new SendNoimReminderMail($send);
                        \Mail::to($send->user->email)->later($when, $sendMail);
                    }  
                }         
                
            }
  
            dd('Mail Sent Successfully.');
  
        }catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }

    }
}
