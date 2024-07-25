<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordReset;

class FlightController extends Controller
{
    public function create()
    {
        $locations = Location::all();
        return view('home.index', compact('locations'));
    }




    public function someMethod()
    {
        return $this->create();
    }

    public function getFlightsByDate($date)
    {
        $flights = Flight::whereDate('departure_time', $date)->get();

        // Transform your flights into a JSON-friendly format if needed
        // Or you can simply return the flights collection if it's already in a good shape to be sent as JSON
        return response()->json($flights);
    }



    // public function update(Request $request, $id)
    // {
    //     $booking = Booking::findOrFail($id);


    //     $booking->update({
    //         'departure_time' => $request->departureTime,
    //         'return_time' => $request->returnTime,
    //         'class' => $request->class,
    //     });

    //     // Redirect or return response
    //     return redirect()->back()->with('success', 'Flight details updated successfully.');
    // }

//     public function searchFlights(Request $request)


//     {

//         $fromLocationId = $request->input('from_location_id');
//         $toLocationId = $request->input('to_location_id');
//         $departureDate = $request->input('departure_date');
//         $returnDate = $request->input('return_date'); // Handle conditionally based on trip type
//         $adultCount = $request->input('adult_count');
//         $childCount = $request->input('child_count');
//         $infantCount = $request->input('infant_count');
//         $class = $request->input('class');
//         $criteria = [
//             'from_location_id' => $request->from_location_id,
//             'to_location_id' => $request->to_location_id,
//             'departure_date' => $request->departure_date,
//             'return_date' => $request->return_date,
//             // Add other criteria as necessary
//         ];



//         $flights = Flight::where('departure_airport_id', $request->input('from_location_id'))
//         ->where('arrival_airport_id', $request->input('to_location_id'))
//         ->whereDate('departure_time', $request->input('departure_date'))
//         ->get();

// // Fetch the location names
// $fromLocation = Location::find($request->input('from_location_id'));
// $toLocation = Location::find($request->input('to_location_id'));
// $fromLocationName = $fromLocation ? $fromLocation->city : 'Unknown Location';
// $toLocationName = $toLocation ? $toLocation->city : 'Unknown Location';

// // Pass everything to the view
// return view('ticket.index', compact('flights', 'fromLocationName', 'toLocationName'));
// }
// public function selectDepartureFlight(Request $request, $flightId, $classType) {
//     session(['departureFlightId' => $flightId, 'classType' => $classType]);
//     return redirect()->route('return');
// }
public function searchFlights(Request $request)
{
            $fromLocationId = $request->input('from_location_id');
            $toLocationId = $request->input('to_location_id');
            $departureDate = $request->input('departure_date');
            $returnDate = $request->input('return_date'); // Handle conditionally based on trip type
            $tripType = session('trip_type', 'one_way'); // Assuming default trip type is 'one_way'.
            $adultCount = $request->input('adult_count');
            $childCount = $request->input('child_count');
            $infantCount = $request->input('infant_count');
            $class = $request->input('class');
            $criteria = [
                'from_location_id' => $request->from_location_id,
                'to_location_id' => $request->to_location_id,
                'departure_date' => $request->departure_date,
                'return_date' => $request->return_date,
                // Add other criteria as necessary
            ];
            $passengerInfo = [
                'adult_count' => $request->input('adult_count'),
                'child_count' => $request->input('child_count'),
                'infant_count' => $request->input('infant_count'),
                // Include any other information necessary
            ];
            session(['passenger_info' => $passengerInfo]);


    // Handle trip type selection
    $tripType = $request->input('trip_type', 'one_way'); // Default to 'one_way' if not provided
    session(['trip_type' => $tripType]); // Store trip type in session

    // Continue with search logic for departure flights
    $flights = Flight::where('departure_airport_id', $request->input('from_location_id'))
                     ->where('arrival_airport_id', $request->input('to_location_id'))
                     ->whereDate('departure_time', $request->input('departure_date'))
                     ->get();
                      // Fetch the location names. Ensure variables are defined.
    $fromLocation = Location::find($fromLocationId);
    $toLocation = Location::find($toLocationId);
    $fromLocationName = $fromLocation ? $fromLocation->city : 'Unknown Location';
    $toLocationName = $toLocation ? $toLocation->city : 'Unknown Location';

    $returnFlights = collect();
    if ($tripType === 'return' && !empty($returnDate)) {
        $returnFlights = Flight::where('departure_airport_id', $toLocationId)
                               ->where('arrival_airport_id', $fromLocationId)
                               ->whereDate('departure_time', '>=', $returnDate)
                               ->get();
    }

    // Fetch location names...
    // Return to the view with both departure and return flights if applicable
    return view('ticket.index', compact('flights', 'returnFlights', 'fromLocationName', 'toLocationName', 'tripType', 'returnFlights','fromLocationId','toLocationId','departureDate','returnDate','adultCount','childCount','infantCount','class'));


}


public function selectDepartureFlight(Request $request, $flightId, $classType) {
    // session(['departureFlightId' => $flightId   ]);
    // session(['classType' => $classType]);
    session([
        'departureFlightId' => $flightId,
        'departureClassType' => $classType,
    ]);
    // Check the trip type from session
    $tripType = session('trip_type', 'one_way'); // Default to 'one_way'

    if ($tripType === 'one_way') {
        // Redirect to the booking page immediately for one-way trips
        return redirect()->route('booking.finalize', ['flightId' => $flightId,  'classType' => $classType]);
    } else {


        return redirect()->route('flights.return', ['departureFlightId' => $flightId,'classType' => $classType]);


    }
}
// public function selectDepartureFlight(Request $request, $flightId, $classType) {
//     $departureFlight = Flight::findOrFail($flightId);
//     $departurePrice = $classType == 'economy' ? $departureFlight->price_economy : $departureFlight->price_business;

//     session([
//         'departureFlightId' => $flightId,
//         'departureClass' => $classType, // Changed from 'classType' to 'departureClass'
//         'departurePrice' => $departurePrice, // Store the price
//     ]);

//     $tripType = session('trip_type', 'one_way');

//     if ($tripType === 'one_way') {
//         return redirect()->route('booking.finalize', ['flightId' => $flightId, 'classType' => $classType]);
//     } else {
//         return redirect()->route('flights.return', ['departureFlightId' => $flightId, 'classType' => $classType]);
//     }
// }


    public function showReturnFlights() {
        $departureFlightId = session('departureFlightId');
        $classType = session('classType');
        $departureFlight = Flight::findOrFail($departureFlightId);

        $departureCity = $departureFlight->arrivalAirport->city;
        $arrivalCity = $departureFlight->departureAirport->city;

        $returnFlights = collect();
        $tripType = session('trip_type', 'one_way');

        if ($tripType === 'return') {
            $returnFlights = Flight::where('departure_airport_id', $departureFlight->arrival_airport_id)
                                ->where('arrival_airport_id', $departureFlight->departure_airport_id)
                                ->where('departure_time', '>', $departureFlight->departure_time)
                                ->get();
        }

        return view('ticket.departure', compact('departureFlight', 'returnFlights', 'classType', 'departureCity', 'arrivalCity', 'tripType'));
    }



// public function handleTripTypeSelection(Request $request) {
//     session(['trip_type' => $request->trip_type]);

//     // Redirect to the appropriate view based on trip type selection
//     if ($request->trip_type === 'return') {
//         // Redirect to the view that lists the departure flights
//         return redirect()->route('ticket.departure'); // Replace with your actual route name for departure flights
//     } else {
//         // Redirect to the view that lists the one-way flights (which may be the same as departure flights)
//         return redirect()->route('ticket.departure'); // Use the same or a different route if needed
//     }
// }


















// public function apiIndex(Request $request)
// {
//     $flights = Flight::with('departureAirport', 'arrivalAirport')->get();

//     return $flights->map(function ($flight) {
//         return [
//             'title' => $flight->flight_number . " - " . $flight->departureAirport->city . " to " . $flight->arrivalAirport->city,
//             'start' => $flight->departure_time->format('Y-m-d'),
//             'end' => $flight->arrival_time->format('Y-m-d'),
//             'allDay' => true
//         ];
//     });

// }


















// public function selectDepartureFlight(Request $request)
// {
//     $flightId = $request->input('flightId');
//     $classType = $request->input('class');

//     // Validate the flightId here
//     $flight = Flight::find($flightId);
//     if (!$flight) {
//         // Handle invalid flight ID scenario
//         return redirect()->back()->withErrors(['msg' => 'Invalid flight selected.']);
//     }

//     // Store in session
//     session([
//         'departureFlightId' => $flightId,
//         'classType' => $classType,
//     ]);

//     // Redirect to the page where the user selects the return flight
//     return redirect()->route('ticket.departure2'); // Make sure to replace 'ticket.departure2' with the actual route name
// }




    // public function store(Request $request, Flight $flight)
    // {
    //     $request->validate([
    //         // Add validation rules here based on your form fields
    //     ]);
    //     $flight = Flight::create([
    //         'from_location_id' => $request->from_location_id,
    //         'to_location_id' => $request->to_location_id,
    //         'departure_time' => $request->departure_time,
    //         'return_time' => $request->return_time,
    //         'passenger_class' => $request->passenger_class,
    //         'one_way' => $request->one_way,
    //     ]);
    //     return redirect()->route('ticket.index')->with('success', 'Flight created successfully.');



    // }
    }
