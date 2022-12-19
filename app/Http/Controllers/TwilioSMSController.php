<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use Carbon\Carbon;
use App\Models\{Booking};

class TwilioSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        try {
  
            $date = today()->format('Y-m-d H:i:s');
       
            $carbon_date = Carbon::parse($date);
            $check_date = $carbon_date->addHours(48);
            
            $account_sid = getenv("TWILIO_SID");  
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
            $message = " Hi {Person 1 Preferred Name} and {Person 2 Preferred Name}, All set for your ceremony at {Start time and Date} at {Location} - Google Pin {Locatin google pin}. Click here to log in to your portal to ensure all is set - [Link to sign in to Portal]. If you have any questions on the day please call me on {marriage celebrants phone number}. See you soon, {Marriage celebrants name}.";

            $booking = Booking::with('user')->where('booking_date', '=', $check_date)->get();
            $count = 0;
            $client = new Client($account_sid, $auth_token);
            foreach($booking as $sendSms){
                $phone_number = "+918699569925";
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
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}