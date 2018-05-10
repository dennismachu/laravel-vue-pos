<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FrontPageMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$email,$message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $plan)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.static.frontpage');
    }
}