<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Flight;

class FlightStatusChanged extends Notification
{
    use Queueable;

    public $flight;

    public function __construct(Flight $flight)
    {
        $this->flight = $flight;
    }

    public function via($notifiable)
    {
        return ['mail']; // add 'nexmo' for SMS if configured
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('There has been an update to your flight.')
                    ->line('Flight Number: ' . $this->flight->flight_number)
                    ->line('New Status: ' . $this->flight->status)
                    ->action('View Flight', url('/flights/' . $this->flight->id))
                    ->line('Thank you for using our application!');
    }
}
