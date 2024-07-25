<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest; // Ensure this request validates your form data correctly
use App\Models\Booking;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Flight;
use App\Models\Location;

class PassengerController extends Controller
{
    public function create()
    {
        // Assuming you pass necessary data for the form, like flights
        return view('passengers.create');
    }
    // public function index(Request $request) {
    //     // Retrieve the departure flight ID from the session.
    //     $flightId = session('departureFlightId');
    //     $classType = session('classType'); // Retrieve classType from session if needed
    //     $tripType = session('trip_type', 'one_way');


    //     // Fetch the departure flight from the database using the retrieved flight ID.
    //     $departureFlight = Flight::findOrFail($flightId);

    //     // Now, pass the $departureFlight to the view along with any other necessary data.
    //     // Make sure to include 'classType' if your view depends on it.
    //     return view('ticket.return', compact('departureFlight', 'classType','tripType'));
    // }


    public function index(Request $request) {
        // Check if the necessary session variables are set

        // Retrieve the departure flight ID and class type from the session.
        $flightId = session('departureFlightId');
        $classType = session('classType');
        $tripType = session('trip_type', 'one_way');
$returnFlight= session('returnFlightId');

        // Fetch the departure flight from the database using the retrieved flight ID.
        $departureFlight = Flight::findOrFail($flightId);

        // Now, pass the $departureFlight and other variables to the view.
        return view('ticket.return', compact('departureFlight', 'classType', 'tripType','returnFlight'));
    }






    // public function store(StoreBookingRequest $request)
    // {
    //     // Log::debug('Booking Data:', [
    //     //     'return_flight_id' => $request->return_flight_id, // or however you're retrieving it
    //     //     // include other relevant data here
    //     // ]);

    //     // Check user authentication first
    //     // if (!auth()->check()) {
    //     //     return redirect()->route('auth.login')->with('error', 'You must be logged in to make a booking.');
    //     // }

        // $booking = DB::transaction(function () use ($request) {
        //     $validated = $request->validated();

        //     $classType = session('selectedClassType', 'Economy'); // Default to 'Economy' if not set
        //     $returnFlightId = $validated['return_flight_id'] ?? $request->input('return_flight_id', null);

        //     // Create booking with both departure and return flight IDs
        //     $booking = Booking::create([
        //         'user_id' => auth()->id(),
        //         // 'return_flight_id' => $request->input('return_flight_id', null),


        //         'departure_flight_id' => $validated['departure_flight_id'],
        //         // 'return_flight_id' => $validated['return_flight_id'] ?? null, // Handle nullable return_flight_id
        //         'return_flight_id' => $returnFlightId, // Corrected to use validated or directly from request

        //         'class' => $classType,
        //         'status' => 'Pending',
        //         'payment_status' => 'Unpaid',
        //         'booking_date' => now(),
        //         'email' => $validated['emailAddress'],
        //         'country_code' => $validated['countryCode'],
        //         'phone_number' => $validated['mobileNumber'], // Removed extra spaces
        //     ]);

        //     foreach ($validated['passengers'] as $passengerData) {
        //         $booking->passengers()->create([
        //             'title' => $passengerData['title'],
        //             'first_name' => $passengerData['first_name'],
        //             'last_name' => $passengerData['last_name'],
        //             'gender' => $passengerData['gender'],
        //             'birth_date' => $passengerData['birthDate'],
        //         'nationality' => $passengerData['nationality'],
        //         'passport_number' => $passengerData['passportNumber'],
        //         'passport_expiry_date' => $passengerData['expiryDate'],

        //         ]);
        //     }

        //     return $booking;
        // });

    //     if ($booking && $booking->id) {
    //         return redirect()->route('booking.summary', ['bookingId' => $booking->id]);
    //     } else {
    //         return back()->withErrors(['msg' => 'Failed to create booking.'])->withInput();
    //     }
    // }


    // public function store(StoreBookingRequest $request)
    // {
    //     $departureFlightId = session('departureFlightId');
    //     $returnFlightId = session('returnFlightId', null); // Default to null if not set
    //     $departureClass = session('departureClass'); // Assuming you store this in the session
    //     $returnClass = session('returnClass', null); // Default to null if not set, assuming you store this in the session
    //     // $departurePrice = session('departurePrice'); // Assuming you store this in the session
    //     // $returnPrice = session('returnPrice', null); // Default to null if not set, assuming you store this in the session
    //     $departurePrice = session('departurePrice'); // This needs to be set based on flight selection
    //     $returnPrice = session('returnPrice', null); // Can be null for one-way trips

    //     $booking = DB::transaction(function () use ($request, $departureFlightId, $returnFlightId, $departureClass, $returnClass, $departurePrice, $returnPrice) {
    //         $validated = $request->validated();

    //         $booking = Booking::create([
    //             'user_id' => auth()->id(),
    //             'departure_flight_id' => $departureFlightId,
    //             'return_flight_id' => $returnFlightId,
    //             'departure_class' => $departureClass,
    //             'return_class' => $returnClass,
    //             'departure_price' => $departurePrice,
    //             'return_price' => $returnPrice,
    //             'status' => 'Pending',
    //             'payment_status' => 'Unpaid',
    //             'booking_date' => now(),
    //             'email' => $validated['emailAddress'],
    //             'phone_number' => $validated['mobileNumber'],
    //         ]);

    //         foreach ($validated['passengers'] as $passengerData) {
    //             $booking->passengers()->create([
    //                 'title' => $passengerData['title'],
    //                 'first_name' => $passengerData['first_name'],
    //                 'last_name' => $passengerData['last_name'],
    //                 'gender' => $passengerData['gender'],
    //                 'birth_date' => $passengerData['birthDate'],
    //                 'nationality' => $passengerData['nationality'],
    //                 'passport_number' => $passengerData['passportNumber'],
    //                 'passport_expiry_date' => $passengerData['expiryDate'],
    //             ]);
    //         }

    //         return $booking;
    //     });

    //     if ($booking && $booking->id) {
    //         // Fetch departure and return flight details for summary
    //         $departureFlight = Flight::with(['departureAirport', 'arrivalAirport'])->findOrFail($departureFlightId);
    //         $returnFlight = $returnFlightId ? Flight::with(['departureAirport', 'arrivalAirport'])->findOrFail($returnFlightId) : null;

    //         // Redirect to the booking summary page with booking ID and pass flight details
    //         return redirect()->route('booking.summary', ['bookingId' => $booking->id])
    //             ->with(['departureFlight' => $departureFlight, 'returnFlight' => $returnFlight, 'departureClass' => $departureClass, 'returnClass' => $returnClass]);
    //     } else {
    //         return back()->withErrors(['msg' => 'Failed to create booking.'])->withInput();
    //     }
    // }




}
