<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordReset extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    protected $resetLink; // It's better to use a protected property and pass it explicitly

    public function __construct($token)
    {
        $this->token = $token;

        $this->resetLink = url('reset-password/' . $token); // Adjusted as per your named route

    }

    public function build()
    {
        return $this->view('emails.booking.password')
                    ->with(['resetLink' => $this->resetLink]); // Pass the reset link to the view
    }
}





