<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Flight;
use App\Models\Location;
use Illuminate\Http\Request;

class FlightScheduleController extends Controller
{
    public function index(Request $request)
    {
        $query = Schedule::with(['flight.departureAirport', 'flight.arrivalAirport']);

        if ($request->has('arrival_city')) {
            $arrivalCity = $request->input('arrival_city');
            $query->whereHas('flight.arrivalAirport', function($q) use ($arrivalCity) {
                $q->where('city', 'like', '%' . $arrivalCity . '%');
            });
        }

        $schedules = $query->get();

        $cities = Location::pluck('city')->unique();

        return view('flight-schedules.index', compact('schedules', 'cities'));
    }


    // Other methods...
}

