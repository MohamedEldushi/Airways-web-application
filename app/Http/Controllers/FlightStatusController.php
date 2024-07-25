<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\FlightNotification;
use App\Mail\FlightStatusUpdate;









class FlightStatusController extends Controller
{
    //
    public function index(){
        $locations = Location::all();

        return view('home.flightstatus',compact('locations'));
    }

    // public function updateFlightStatus(Request $request, Flight $flight)
    // {
    //     $validatedData = $request->validate([
    //         'status' => 'required|in:scheduled,delayed,boarding,in_air,landed,cancelled,diverted',
    //     ]);

    //     $flight->status = $validatedData['status'];
    //     $flight->save();

    //     return back()->with('status', 'Flight status updated successfully!');
    // }
    public function updateFlightStatus(Request $request, Flight $flight)
{
    $validatedData = $request->validate([
        'status' => 'required|in:scheduled,delayed,boarding,in_air,landed,cancelled,diverted',
    ]);

    $flight->status = $validatedData['status'];
    $flight->save();

    // After saving the status, send the email to all subscribers
    $this->sendFlightStatusUpdate($flight);

    return back()->with('status', 'Flight status updated successfully!');
}

public function sendFlightStatusUpdate(Flight $flight) {
    $notifications = FlightNotification::where('flight_id', $flight->id)->get();

    foreach ($notifications as $notification) {
        Mail::to($notification->email)->send(new FlightStatusUpdate($flight));
    }
}




    public function getFlightStatus(Request $request)
    {
        $flightNumber = $request->input('flight_number');
        $date = Carbon::parse($request->input('date'))->startOfDay();

        $flight = Flight::where('flight_number', $flightNumber)
                        ->whereDate('departure_time', $date)
                        ->firstOrFail();

        return view('flight_status', ['flight' => $flight]);
    }
    public function searchFlightStatus(Request $request)
    {
        $request->validate([
            'from' => 'sometimes',
            'to' => 'sometimes',
            'date' => 'sometimes',
            'flight_number' => 'sometimes',
        ]);

        $flights = collect();

        if ($request->has('from') && $request->has('to') && $request->has('date')) {
            $flights = Flight::whereHas('departureAirport', function ($query) use ($request) {
                                $query->where('code', $request->from);
                            })
                            ->whereHas('arrivalAirport', function ($query) use ($request) {
                                $query->where('code', $request->to);
                            })
                            ->whereDate('departure_time', $request->date)
                            ->get();
        } elseif ($request->has('flight_number')) {
            $flight = Flight::where('flight_number', $request->flight_number)->first();
            if ($flight) {
                $flights->push($flight);
            }
        }

        // Return the view with the flight statuses
        return view('flightstatus.flight_status', compact('flights'));
    }



    public function signup(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'flight_number' => 'required|exists:flights,flight_number',
        ]);

        $flight = Flight::where('flight_number', $validated['flight_number'])->first();

        FlightNotification::create([
            'email' => $validated['email'],
            'flight_id' => $flight->id,
        ]);

        return redirect()->back()->with('success', 'You have successfully signed up for flight status notifications.');
    }





    // public function searchFlightByNumber(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'flight_number' => 'required|exists:flights,flight_number',
    //     ]);

    //     $flight = Flight::where('flight_number', $validatedData['flight_number'])->first();

    //     // If you're using AJAX, return a JSON response
    //     // Otherwise, return a view with the flight information
    //     return view('flightstatus.flight_status', compact('flight'));
    // }

}
