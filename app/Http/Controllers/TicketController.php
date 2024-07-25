<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;
use App\Models\Location;


class TicketController extends Controller
{
    //

    public function index()
{
    // // Retrieve flights from your database or any other source
    // $flights = Flight::all(); // Assuming you have a Flight model
    // $locations = Location::all();

    // Pass the $flights variable to the view
      //  return view('ticket.index', ['flights' => $flights, 'locations' => $locations]);
}
public function departurePage(Request $request)
{
    // Retrieve the flight ID and class type from the query parameters
    $flightId = $request->query('flightId');
    $classType = $request->query('class');

    // Fetch the flight from the database
    $flight = Flight::findOrFail($flightId);

    // Pass the flight and classType to the view
    return view('ticket.departure', compact('flight', 'classType'));
}


    public function departure2(){

        return view('ticket.return');

    }

    public function summary(){
        return view('ticket.trip-summary');
    }

    public function show($id)
    {
        // Logic for displaying a specific ticket based on $id
    }

    public function create()
    {
        // Logic for displaying the ticket creation form
    }

    public function store(Request $request)
    {

    }

    // public function showReturnFlights() {
    //     $departureFlightId = session('departureFlightId');
    //     $classType = session('classType'); // If you need to use this in your view
    //     $departureFlight = Flight::findOrFail($departureFlightId);
    //     $returnFlights = Flight::where('departure_airport_id', $departureFlight->arrival_airport_id)
    //                             ->where('arrival_airport_id', $departureFlight->departure_airport_id)
    //                             ->where('departure_time', '>', $departureFlight->departure_time)
    //                             ->get();
    //                 // Assuming you have 'city' as a field on your locations
    //                  $departureCity = $departureFlight->arrivalAirport->city; // For return flight, departure city is the original arrival city
    //                  $arrivalCity = $departureFlight->departureAirport->city; // And the arrival city is the original departure city
    //     return view('ticket.departure', compact('departureFlight', 'returnFlights', 'classType','departureCity', 'arrivalCity'));
    // }


    public function showReturnFlights() {
        $departureFlightId = session('departureFlightId');
        $classType = session('classType'); // If needed in your view
        $departureFlight = Flight::findOrFail($departureFlightId);

        $returnFlights = collect(); // Initialize as an empty collection
        $tripType = session('trip_type'); // Assuming you've stored the trip type in the session

        if ($tripType === 'return') {
            $returnFlights = Flight::where('departure_airport_id', $departureFlight->arrival_airport_id)
                                   ->where('arrival_airport_id', $departureFlight->departure_airport_id)
                                   ->where('departure_time', '>', $departureFlight->departure_time)
                                   ->get();
        }

        // Other code...

        return view('ticket.departure', compact('departureFlight', 'returnFlights', 'classType'));
    }

























    // public function showReturnFlightSelection(Request $request)
    // {
    //     $returnFlightId = $request->query('returnFlightId');
    //     $classType = $request->query('classType');

    //     // Check if the departure flight ID is stored in the session
    //     $departureFlightId = session('departureFlightId');
    //     if (!$departureFlightId) {
    //         // If no departure flight ID is found in the session, redirect back with an error message
    //         return redirect()->route('search.flights')->withErrors(['departureFlight' => 'Please select a departure flight before choosing a return flight.']);
    //     }

    //     $departureFlight = Flight::findOrFail($departureFlightId);
    //     $returnFlight = Flight::findOrFail($returnFlightId);

    //     // Pass both flights to the view along with the class type
    //     return view('ticket.return', compact('departureFlight', 'returnFlight', 'classType'));
    // }





    // public function showReturnFlightSelection(Request $request)
    // {
    //     $returnFlightId = $request->query('returnFlightId');
    //     $classType = $request->query('classType');

    //     // Check if the departure flight ID is stored in the session
    //     $departureFlightId = session('departureFlightId');
    //     if (!$departureFlightId) {
    //         // If no departure flight ID is found in the session, redirect back with an error message
    //         return redirect()->route('search.flights')->withErrors(['departureFlight' => 'Please select a departure flight before choosing a return flight.']);
    //     }

    //     $departureFlight = Flight::findOrFail($departureFlightId);
    //     $returnFlight = Flight::findOrFail($returnFlightId);
    //     $tripType = session('trip_type', 'one_way'); // Assuming default trip type is 'one_way'.

    //     // Pass both flights to the view along with the class type
    //     return view('ticket.return', compact('departureFlight', 'returnFlight', 'classType', 'departureFlightId', 'returnFlightId','tripType'));
    // }

    public function showReturnFlightSelection(Request $request)
    {
        $returnFlightId = $request->query('returnFlightId');
        $returnClassType = $request->query('classType'); // This now represents the return flight's class type

        // session([
        //     'returnFlightId' => $returnFlightId,
        //     'returnClassType' => $returnClassType,
        // ]);
        session([
            'returnFlightId' => $returnFlightId,
            'returnClassType' => $returnClassType,
        ]);
        $departureFlightId = session('departureFlightId');
        $departureClassType = session('classType'); // Assuming this represents the departure flight's class type

        if (!$departureFlightId) {
            return redirect()->route('search.flights')->withErrors(['departureFlight' => 'Please select a departure flight before choosing a return flight.']);
        }

        $departureFlight = Flight::findOrFail($departureFlightId);
        $returnFlight = Flight::findOrFail($returnFlightId);
        $tripType = session('trip_type', 'one_way'); // Assuming default trip type is 'one_way'.

        // Pass both flights to the view along with their respective class types
        return view('ticket.return', compact('departureFlight', 'returnFlight', 'departureClassType', 'returnClassType','tripType'));
    }






















 // $request->validate([
        //     // Update validation rules to include return_flight_id if necessary
        //     'flight_id' => 'required|exists:flights,id',
        //     'return_flight_id' => 'nullable|exists:flights,id', // Ensure this is optional
        //     // Add other validation rules as needed
        // ]);

        // // Assuming you have a Booking model
        // $booking = new Booking([
        //     'user_id' => auth()->id(),
        //     'flight_id' => $request->flight_id,
        //     'return_flight_id' => $request->return_flight_id, // This might be null for one-way trips
        //     'class' => $request->class,
        //     'status' => 'booked', // Example status
        //     'payment_status' => 'pending', // Example payment status
        //     'booking_date' => now(),
        //     // Set other attributes as needed
        // ]);
        // $booking->save();
        // $booking = Booking::with(['flight', 'returnFlight'])->find($bookingId);
        // return redirect()->route('booking.summary', $booking->id)->with('success', 'Booking successfully created.');



        // Redirect or return response as needed




// public function finalizeBooking(Request $request)
// {
//     // Assuming user authentication is in place and a logged-in user is making the booking
//     $userId = auth()->id(); // Get the authenticated user's ID
//     $departureFlightId = session('departureFlightId');
//     $classType = session('classType');
//     $returnFlightId = $request->input('returnFlightId'); // Assuming this is passed from the form

//     // Validate the input
//     $validated = $request->validate([
//         'returnFlightId' => 'nullable|exists:flights,id', // Ensure returnFlightId is valid if provided
//         // Add other validation rules as needed
//     ]);

//     // Create the booking record
//     $booking = new Booking();
//     $booking->user_id = $userId;
//     $booking->flight_id = $departureFlightId; // or however you've structured your Booking model
//     $booking->return_flight_id = $returnFlightId; // This can be null if no return flight is selected
//     $booking->class = $classType; // Assuming you're storing class type in the booking
//     $booking->status = 'confirmed'; // Example status
//     $booking->payment_status = 'paid'; // Example payment status, adjust as needed
//     $booking->booking_date = now();
//     // Add any additional booking details here
//     $booking->save();

//     // Clear the session variables related to the booking process
//     $request->session()->forget(['departureFlightId', 'classType']);

//     // Redirect to a confirmation page with the booking ID for reference
//     return redirect()->route('booking.confirmation', ['bookingId' => $booking->id])->with('success', 'Booking successfully completed.');
// }
// public function showReturnFlights(Request $request)
// {
//     // Assume $departureFlightId is stored in session after selecting the departure flight
//     $departureFlightId = session('departureFlightId');
//     if (!$departureFlightId) {
//         return redirect()->route('some.route')->withErrors('Departure flight not selected.');
//     }

//     $departureFlight = Flight::findOrFail($departureFlightId);
//     $returnFlights = Flight::where('departure_airport_id', $departureFlight->arrival_airport_id)
//                             ->where('arrival_airport_id', $departureFlight->departure_airport_id)
//                             ->whereDate('departure_time', '>', $departureFlight->departure_time)
//                             ->get();

//     return view('ticket.return', compact('returnFlights'));
// }
}
