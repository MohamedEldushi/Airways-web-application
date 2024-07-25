<?php
namespace App\Listeners;

use App\Events\FlightUpdated;
use App\Models\FlightNotification;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FlightStatusChanged;

class SendFlightUpdateNotification
{
    public function handle(FlightUpdated $event)
    {
        $subscribers = FlightNotification::where('flight_id', $event->flight->id)->get();

        foreach ($subscribers as $subscriber) {
            if ($subscriber->notification_type == 'email') {
                Notification::route('mail', $subscriber->email)
                    ->notify(new FlightStatusChanged($event->flight));
            }

            if ($subscriber->notification_type == 'sms' && $subscriber->phone_number) {
                // Assuming you have SMS notification setup
                Notification::route('nexmo', $subscriber->phone_number)
                    ->notify(new FlightStatusChanged($event->flight));
            }
        }
    }
}
