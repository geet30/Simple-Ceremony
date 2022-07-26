<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\EmailSetting;
use Auth;

class RegisterUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $from_mail = !empty(Auth::user()->email) ? Auth::user()->email : 'admin@gmail.com' ;
        $from_mail = config('env.FROM_EMAIL');
       
        return $this->from($from_mail)->subject('Account Registered')
                    ->view('emails.new-user')->with('data', $this->data);
    }

}
