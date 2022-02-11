<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailTemplate6 extends Mailable
{
    use Queueable, SerializesModels;
    public $email_template6;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email_template6)
    {
        $this->email_template6 = $email_template6;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('This is Testing Mail')->view('frontend.mails.email_template6');
    }
}
