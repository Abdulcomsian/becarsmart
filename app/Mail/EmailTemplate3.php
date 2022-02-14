<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailTemplate3 extends Mailable
{
    use Queueable, SerializesModels;
    public $email_template3;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_template3)
    {
        $this->email_template3 = $email_template3;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('BeCarSmart Accepting Quotes')->view('frontend.mails.email_template3');
    }
}
