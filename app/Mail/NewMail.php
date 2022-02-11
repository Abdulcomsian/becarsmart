<?php
namespace App\Mail;
   
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
  
class NewMail extends Mailable{

    use Queueable, SerializesModels;

    public $email_template2;

    public function __construct($email_template2){

        $this->email_template2 = $email_template2;

    }

    public function build(){  
        return $this->subject('This is Testing Mail')->view('frontend.mails.email_template2');
    }
}