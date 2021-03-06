<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $rawpassword;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $rawpassword)
    {
        $this->user = $user;
        $this->rawpassword = $rawpassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome');
    }
}
