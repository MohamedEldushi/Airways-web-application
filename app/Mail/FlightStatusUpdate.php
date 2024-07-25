<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
// flight model
// notification model
use App\Models\FlightNotification;


use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Flight;



class FlightStatusUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $flight;

    /**
     * Create a new message instance.
     *
     */

public function __construct(Flight $flight)
{
    $this->flight = $flight;
}
    public function build()
    {
        return $this->from('mohamed.eldushi@gmail.com', 'MedSky')
                    ->subject('Flight Status Update for ' . $this->flight->flight_number)
                    ->markdown('emails.booking.flightStatusUpdate', [
                        'flightNumber' => $this->flight->flight_number,
                        'status' => $this->flight->status,
                        // Ensure you're passing all needed data here
                    ]);
    }


}
