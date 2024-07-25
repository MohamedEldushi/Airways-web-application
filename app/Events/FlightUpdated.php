<?php

namespace App\Events;

use App\Models\Flight;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FlightUpdated
{
    use Dispatchable, SerializesModels;

    public $flight;

    public function __construct(Flight $flight)
    {
        $this->flight = $flight;
    }
}
