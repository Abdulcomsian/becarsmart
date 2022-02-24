<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailTemplate8 extends Mailable
{
    use Queueable, SerializesModels;
    public $email_template8;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_template8)
    {
        $this->email_template8 = $email_template8;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->subject('BecarSmart Found Car For You')->view('frontend.mails.email_template8');
    }
}
