<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Http\Requests\StoreBookingRequest; // Ensure this request validates your form data correctly
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmed;
use GuzzleHttp\Client;
use App\Models\Location;
use App\Models\Passenger;
use Carbon\Carbon;


// str

use App\Mail\BookingCancelled;
use Illuminate\Support\Str;
// map
use Illuminate\Support\Collection;



use Illuminate\Support\Facades\Auth;




class BookingController extends Controller
{

    public function index(){
        return view('ticket.return');
    }

    // app/Http/Controllers/BookingController.php





    public function edit($id)
    {
        $booking = Booking::with(['departureFlight', 'returnFlight'])->findOrFail($id);

        // Fetching departure flights
        $availableDepartureFlights = Flight::where('departure_airport_id', $booking->departureFlight->departure_airport_id)
                                           ->where('arrival_airport_id', $booking->departureFlight->arrival_airport_id)
                                           ->where('departure_time', '>', now())
                                           ->get();

        // Initialize $availableReturnFlights as an empty collection
        $availableReturnFlights = collect();
        if ($booking->returnFlight) {
            $availableReturnFlights = Flight::where('departure_airport_id', $booking->returnFlight->departure_airport_id)
                                            ->where('arrival_airport_id', $booking->returnFlight->arrival_airport_id)
                                            ->where('departure_time', '>', now())
                                            ->get();
        }

        // Pass both collections to the view
        return view('bookings.edit', compact('booking', 'availableDepartureFlights', 'availableReturnFlights'));
    }






    public function update(Request $request, $id)
{
    $request->validate([
        'departure_flight_id' => 'required|exists:flights,id',
        'return_flight_id' => 'nullable|exists:flights,id',
        'departure_class' => 'required',
    ]);

    $booking = Booking::findOrFail($id);
    $booking->departure_flight_id = $request->departure_flight_id;
    $booking->return_flight_id = $request->return_flight_id;
    $booking->departure_class = $request->departure_class;
    $booking->save();

    return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
}



// public function showSummary($bookingId)
// {
//     $booking = Booking::with(['passengers', 'departureFlight', 'returnFlight'])->findOrFail($bookingId);
//     $classType = $booking->class; // Assuming 'class' is a column in your 'bookings' table.
//     $totalPrice = 0;
//     $numberOfPassengers = count($booking->passengers);


//     // Assuming 'price_economy' and 'price_business' are attributes of your flight model
//     if ($booking->class == 'Economy') {
//         $totalPrice += $booking->departureFlight->price_economy * $numberOfPassengers;
//         if ($booking->returnFlight) {
//             $totalPrice += $booking->returnFlight->price_economy * $numberOfPassengers;
//         }
//     } elseif ($booking->class == 'Business') {
//         $totalPrice += $booking->departureFlight->price_business * $numberOfPassengers;
//         if ($booking->returnFlight) {
//             $totalPrice += $booking->returnFlight->price_business * $numberOfPassengers;
//         }
//     }


//     // return view('ticket.trip-summary', compact('booking'));
// // Inside your showSummary method
// return view('ticket.trip-summary', compact('booking', 'classType', 'totalPrice', 'numberOfPassengers', 'bookingId'));

// }


    public function generalSummary()
    {
        // Handle a general summary view, maybe for users who haven't made a booking yet or a landing page
        return view('ticket.general-summary');
    }

//     public function showTripSummary()
// {
//     $departureFlightId = session('departureFlightId');
//     $returnFlightId = session('returnFlightId'); // Assuming you also store the return flight ID in the session
//     $classType = session('classType') ?? 'DefaultClass'; // Replace 'DefaultClass' with your default value if needed

//     $tripType = session('trip_type', 'one_way');

//     $departureFlight = Flight::findOrFail($departureFlightId);
//     $returnFlight = null;

//     if ($tripType === 'return' && $returnFlightId) {
//         $returnFlight = Flight::findOrFail($returnFlightId);
//     }

//     return view('trip-summary', compact('departureFlight', 'returnFlight', 'classType', 'tripType'));
// }




// public function review(Request $request)
// {
//     // Retrieve flight IDs and class types from the request or session
//     $departureFlightId = session('departureFlightId', $request->input('departure_flight_id'));
//     $returnFlightId = $request->input('returnFlightId', session('returnFlightId'));

//     $departureClassType = $request->input('departureClassType', session('departureClassType'));

//     $returnClassType = $request->input('returnClassType', session('returnClassType'));

//     // Retrieve passenger and contact details from the request
//     $passengerDetails = $request->input('passengers', []);
//     $numberOfPassengers = count($passengerDetails);
//     $mobileNumber = $request->input('mobileNumber');
//     $emailAddress = $request->input('emailAddress');

//     // Fetch flights details
//     $departureFlight = Flight::find($departureFlightId);
//     $returnFlight = $returnFlightId ? Flight::find($returnFlightId) : null;

//     // Initialize totalPrice
//     $totalPrice = 0;

//     // Calculate total price based on class type and number of passengers
//     if ($departureFlight) {
//         $departurePrice = $departureClassType == 'Economy' ? $departureFlight->price_economy : $departureFlight->price_business;
//         $totalPrice += $departurePrice * $numberOfPassengers;
//     }
//     if ($returnFlight) {
//         $returnPrice = $returnClassType == 'Economy' ? $returnFlight->price_economy : $returnFlight->price_business;
//         $totalPrice += $returnPrice * $numberOfPassengers;
//     }
//     $passengers = $request->input('passengers', []);

//     // Pass all data to the view
//     return view('ticket.trip-summary', compact('departureFlight', 'returnFlight', 'departureClassType', 'returnClassType', 'passengers', 'mobileNumber', 'emailAddress', 'numberOfPassengers', 'totalPrice', 'returnPrice', 'departurePrice'));
// }


// public function review(Request $request)
// {
//     // Retrieve flight IDs from the session or request
//     $departureFlightId = session('departureFlightId', $request->input('departure_flight_id'));
//     $returnFlightId = session('returnFlightId', $request->input('return_flight_id'));

//     // Retrieve class types from the session
//     $departureClassType = session('departureClassType');
//     $returnClassType = session('returnClassType');


//     // Retrieve passenger and contact details from the request
//     $passengers = $request->input('passengers', []);
//     $numberOfPassengers = count( $passengers);
//     $mobileNumber = $request->input('mobileNumber');
//     $emailAddress = $request->input('emailAddress');

//      // Fetch flights details
//     $departureFlight = Flight::find($departureFlightId);
//     $returnFlight = $returnFlightId ? Flight::find($returnFlightId) : null;

//     // Initialize prices
//     $departurePrice = $departureClassType == 'economy' ? $departureFlight->price_economy : $departureFlight->price_business;
//     $returnPrice = $returnFlight ? ($returnClassType == 'economy' ? $returnFlight->price_economy : $returnFlight->price_business) : 0;

//     $totalPrice = 0;

//     $totalPrice = ($departurePrice + $returnPrice) * $numberOfPassengers;


//     // $passengers = $request->input('passengers', []);
//     // Pass all data to the view
//     return view('ticket.trip-summary', compact(
//         'departureFlight',
//         'returnFlight',
//         'departureClassType',
//         'returnClassType',
//         'passengers',
//         'mobileNumber',
//         'emailAddress',
//         'numberOfPassengers',
//         'totalPrice',
//         'departurePrice',
//          'returnPrice'
//     ));
// }

































// last change




// public function storePassengerDetails(Request $request)
// {
//     $departureFlightId = session('departureFlightId', $request->input('departure_flight_id'));
//     $returnFlightId = session('returnFlightId', $request->input('return_flight_id'));
//     // / Storing the entire request data
//     session(['passengerDetails' => $request->all()]);

//     // Later on, overwriting 'passengerDetails' with just the passengers' data
//     session(['passengerDetails' => $request->input('passengers')]);
//     // Fetch flights details
//     $departureFlight = Flight::find($departureFlightId);
//     $returnFlight = $returnFlightId ? Flight::find($returnFlightId) : null;

//     // Assuming you have methods to calculate prices based on flight and class
//     $departurePrice = $departureFlight ? $this->calculatePrice($departureFlight, session('departureClassType')) : 0;
//     $returnPrice = $returnFlight ? $this->calculatePrice($returnFlight, session('returnClassType')) : 0;
//     $totalPrice = $departurePrice + $returnPrice;

//     $contactDetails = [
//         'email' => $request->input('emailAddress'),
//         'mobileNumber' => $request->input('mobileNumber'),
//         // countryCode
//         'countryCode' => $request->input('countryCode'),


//         // Include additional contact detail fields as necessary
//     ];
//     // Store details in session
//     session([
//         'passengerDetails' => $request->all(), // Passenger details from form
//         'departureFlightId' => $departureFlightId, // Storing IDs instead of full models
//         'returnFlightId' => $returnFlightId,
//         'totalPrice' => $totalPrice,
//         'departurePrice' => $departurePrice, // Store departure price
//         'returnPrice' => $returnPrice, // Store return price
//         'passengers' => $request->input('passengers'),
//         'contactDetails' => $contactDetails,
//     ]);

//     // Redirect to the trip-summary page
//     return redirect()->route('trip.summary');
// }

// private function calculatePrice($flight, $classType)
// {
//     return $classType === 'economy' ? $flight->price_economy : $flight->price_business;
// }








public function storePassengerDetails(Request $request)
{
    $validatedData = $request->validate([
        'emailAddress' => 'required|email',
        'mobileNumber' => 'required',
        'countryCode' => 'required',
        // Add validation rules for other fields as necessary
        'passengers.*.title' => 'required',
        'passengers.*.first_name' => 'required',
        'passengers.*.last_name' => 'required',
        'passengers.*.gender' => 'required|in:Male,Female',
        'passengers.*.passport_number' => 'required',
        'passengers.*.passport_expiry_date' => 'required|date', // Ensure this matches your input format
        // birth date
        'passengers.*.birth_date' => 'required|date', // Ensure this matches your input format
        // nationality
        'passengers.*.nationality' => 'required',


        // Include additional validation rules as necessary
    ]);
// Example of capturing detailed passenger information from the request
$passengers = $request->input('passengers'); // Assuming 'passengers' is an array of passenger details

// Example of structuring each passenger's info including type
foreach ($request->input('passengers', []) as $index => $passenger) {
    $passengerDetails[] = [
        'title' => $passenger['title'] ?? null,
        'first_name' => $passenger['first_name'] ?? null,
        'last_name' => $passenger['last_name'] ?? null,
        'passport_number' => $passenger['passport_number'] ?? null,
        'gender' => $passenger['gender'] ?? null,
        'passport_expiry_date' => $passenger['passport_expiry_date'] ?? null,
        'birth_date' => $passenger['birth_date'] ?? null,
        'nationality' => $passenger['nationality'] ?? null,
        // Add other fields as necessary

    ];
}

session(['passengerDetails' => $validatedData['passengers']]);

// Store the structured passenger details in the session
session(['passenger_details' => $passengerDetails]);
    // Retrieve flight details and calculate individual prices
    $departureFlightId = session('departureFlightId', $request->input('departure_flight_id'));
    $returnFlightId = session('returnFlightId', $request->input('return_flight_id'));
    $departureFlight = Flight::find($departureFlightId);
    $returnFlight = $returnFlightId ? Flight::find($returnFlightId) : null;

    $departurePrice = $departureFlight ? $this->calculatePrice($departureFlight, session('departureClassType')) : 0;
    $returnPrice = $returnFlight ? $this->calculatePrice($returnFlight, session('returnClassType')) : 0;

    // Calculate total price based on the number of passengers
    $numberOfPassengers = count($validatedData['passengers']);
    $totalPrice = ($departurePrice + $returnPrice) * $numberOfPassengers;

    // Store booking and passenger details in session
    session([
        'passengerDetails' => $validatedData['passengers'],
        'contactDetails' => [
            'email' => $validatedData['emailAddress'],
            'mobileNumber' => $validatedData['mobileNumber'],
            'countryCode' => $validatedData['countryCode'],
        ],
        'departureFlightId' => $departureFlightId,
        'returnFlightId' => $returnFlightId,
        'totalPrice' => $totalPrice,
        'departurePrice' => $departurePrice,
        'returnPrice' => $returnPrice,
    ]);

    // Redirect to the trip-summary page with booking and passenger details
    return redirect()->route('trip.summary');
}

private function calculatePrice($flight, $classType)
{
    // Assume this method calculates and returns the price based on the flight and class type
    // This is a placeholder implementation
    return $classType === 'economy' ? $flight->price_economy : $flight->price_business;
}




















public function showTripSummary()
{
    // Retrieve passenger details and count
    $passengers = session('passengers', []);

    $numberOfPassengers = count($passengers);
    $isUserLoggedIn = Auth::check(); // true if user is logged in, false otherwise




    // Retrieve contact details
    $contactDetails = session('contactDetails', []);
    $mobileNumber = $contactDetails['mobileNumber'] ?? '';
    $emailAddress = $contactDetails['email'] ?? '';
    $countryCode = $contactDetails['countryCode'] ?? '';

       // Retrieve class types and prices from the session
    $departureClassType = session('departureClassType');
    $returnClassType = session('returnClassType');
    $totalPrice = session('totalPrice', 0);
    $departurePrice = session('departurePrice', 0);
    $returnPrice = session('returnPrice', 0);



        // Fetch flight details again from the database using IDs stored in the session
    $departureFlightId = session('departureFlightId');
    $returnFlightId = session('returnFlightId');
    $departureFlight = Flight::find($departureFlightId);
    $returnFlight = Flight::find($returnFlightId);




    // Pass all the necessary variables to the view
    return view('ticket.trip-summary', compact(
        'passengers', 'departureFlight', 'returnFlight', 'totalPrice',
        'departureClassType', 'returnClassType', 'departurePrice', 'returnPrice',
        'mobileNumber', 'emailAddress', 'numberOfPassengers','isUserLoggedIn',
    ));
}
public function showProcessPage()
{
    // Since the data is the same, you can retrieve it from the session just like in showTripSummary
    $passengers = session('passengers', []);
    $numberOfPassengers = count($passengers);
    $contactDetails = session('contactDetails', []);
    $countryCode = $contactDetails['countryCode'] ?? '';
    $mobileNumber = $contactDetails['mobileNumber'] ?? '';
    $emailAddress = $contactDetails['email'] ?? '';
    $departureClassType = session('departureClassType');
    $returnClassType = session('returnClassType');
    $totalPrice = session('totalPrice', 0);
    $departurePrice = session('departurePrice', 0);
    $returnPrice = session('returnPrice', 0);
    $departureFlightId = session('departureFlightId');
    $returnFlightId = session('returnFlightId');
    $departureFlight = Flight::find($departureFlightId);
    $returnFlight = Flight::find($returnFlightId);

    // Redirect to the 'process' page with the necessary data
    return view('payment.process', compact(
        'passengers', 'departureFlight', 'returnFlight', 'totalPrice',
        'departureClassType', 'returnClassType', 'departurePrice', 'returnPrice',
        'mobileNumber', 'emailAddress', 'numberOfPassengers','countryCode'
    ));
}



// public function processBooking(Request $request)
// {
//     // Retrieve session data similarly to how it's done in showTripSummary
//     $passengers = session('passengerDetails.passengers', []);
//     $numberOfPassengers = count($passengers);
//     $mobileNumber = session('passengerDetails.mobileNumber', '');
//     $emailAddress = session('passengerDetails.emailAddress', '');
//     $departureClassType = session('departureClassType');
//     $returnClassType = session('returnClassType');
//     $totalPrice = session('totalPrice', 0);
//     $departurePrice = session('departurePrice', 0);
//     $returnPrice = session('returnPrice', 0);
//     $departureFlightId = session('departureFlightId');
//     $returnFlightId = session('returnFlightId');
//     $departureFlight = Flight::find($departureFlightId);
//     $returnFlight = Flight::find($returnFlightId);

//     // Compile all necessary data to pass to the process view
//     $data = [
//         'passengers' => $passengers,
//         'numberOfPassengers' => $numberOfPassengers,
//         'mobileNumber' => $mobileNumber,
//         'emailAddress' => $emailAddress,
//         'departureClassType' => $departureClassType,
//         'returnClassType' => $returnClassType,
//         'totalPrice' => $totalPrice,
//         'departurePrice' => $departurePrice,
//         'returnPrice' => $returnPrice,
//         'departureFlight' => $departureFlight,
//         'returnFlight' => $returnFlight,
//     ];

//     // Redirect to the 'process' view with the compiled data
//     return view('payment.process', [

//     ]);
// }
public function confirmBooking(Request $request)
{
 // Generate a booking reference
$bookingReference = Str::upper(Str::random(4)) . rand(100, 999);

    // Retrieve data from the request or session
    // ...
    $phoneNumber = $request->input('phone_number');
    $countryCode = $request->input('countryCode');


    $booking = Booking::create([
        'user_id' => auth()->id(), // Assuming the user is authenticated
        'booking_reference' => $bookingReference, // Use the generated booking reference

        'departure_flight_id' => session('departureFlightId'),
        'return_flight_id' => session('returnFlightId'),
        'departure_class' => session('departureClassType'),
        'return_class' => session('returnClassType'),
        'departure_price' => session('departurePrice'),
        'return_price' => session('returnPrice'),
        'status' => 'confirmed', // Set an appropriate status
        'payment_status' => 'paid', // Update this based on your payment flow
        'booking_date' => now(), // Set the current date or another date if needed
        'email' => session('contactDetails.email'),
        'country_code' => $countryCode,
        'phone_number' => $phoneNumber,

    ]);

    // Save the booking
    $booking->save();


              // After creating a booking...
$bookingId = $booking->id; // Get the ID of the newly created booking.

// Retrieve passenger details from the session.
$passengers = session('passengerDetails', []);
$passengerCount = count(session('passengerDetails', []));

// Iterate over each passenger and store their details.
foreach ($passengers as $passengerData) {
    Passenger::create([
        'booking_id' => $bookingId,
        'title' => $passengerData['title'] ?? 'N/A', // Provide a default or handle null appropriately.
        'first_name' => $passengerData['first_name'] ?? 'N/A',
        'last_name' => $passengerData['last_name'] ?? 'N/A',
        'gender' => $passengerData['gender'] ?? 'N/A',
        'birth_date' => $passengerData['birth_date'] ?? null, // Assuming birth_date can be null.
        'nationality' => $passengerData['nationality'] ?? null, // Assuming nationality can be null.
        'passport_number' => $passengerData['passport_number'] ?? null, // Assuming passport_number can be null.
        'passport_expiry_date' => $passengerData['passport_expiry_date'] ?? null, // Assuming passport_expiry_date can be null.
        // Add any additional fields required for your passengers table.
    ]);

}
        // $passengertable->save();

         $departureFlightId = session('departureFlightId', $request->input('departure_flight_id'));
        $returnFlightId = session('returnFlightId', $request->input('return_flight_id'));

        $departureFlight = Flight::find($departureFlightId);
        $returnFlight = $returnFlightId ? Flight::find($returnFlightId) : null;
        $departurePrice = $departureFlight ? $this->calculatePrice($departureFlight, session('departureClassType')) : 0;
        $returnPrice = $returnFlight ? $this->calculatePrice($returnFlight, session('returnClassType')) : 0;
        $totalPrice = $departurePrice + $returnPrice;



        // Retrieve and update the departure flight
    $departureFlight = Flight::find(session('departureFlightId'));
    if ($departureFlight) {
        $departureFlight->booked_seats += $passengerCount;  // Increment booked seats by the number of passengers
        $departureFlight->save();
    }

    // Check if there is a return flight and update it
    if (session('returnFlightId')) {
        $returnFlight = Flight::find(session('returnFlightId'));
        if ($returnFlight) {
            $returnFlight->booked_seats += $passengerCount;  // Increment booked seats by the number of passengers
            $returnFlight->save();
        }
    }
        Mail::to($booking->email)->send(new BookingConfirmed($booking, $totalPrice));

        return redirect()->route('home.index')->with('success', 'Your booking was successful!');

    }}
    // Redirect to the success page


// return view('payment.process');


// }


// public function confirmBooking(Request $request)
// {
//     // Start a transaction
//     DB::beginTransaction();

//     try {
//         // Create a new booking entry with the request/session data
        // $booking = Booking::create([
        //     'user_id' => auth()->id(), // Assuming the user is authenticated
        //     'departure_flight_id' => session('departureFlightId'),
        //     'return_flight_id' => session('returnFlightId'),
        //     'departure_class' => session('departureClassType'),
        //     'return_class' => session('returnClassType'),
        //     'departure_price' => session('departurePrice'),
        //     'return_price' => session('returnPrice'),
        //     'status' => 'confirmed', // Set an appropriate status
        //     'payment_status' => 'paid', // Update this based on your payment flow
        //     'booking_date' => now(), // Set the current date or another date if needed
        //     'email' => session('contactDetails.email'),
        //     'country_code' => session('contactDetails.country_code'),
        //     'phone_number' => session('contactDetails.phone_number'),
        // ]);
//         $booking->save();


//         // Retrieve passenger details from session
        // $passengers = session('passengers', []);

//         // Store each passenger's details
        // foreach ($passengers as $passengerData) {
        //     Passenger::create([
        //         'booking_id' => $booking->id,
        //         'title' => $passengerData['title'],
        //         'first_name' => $passengerData['first_name'],
        //         'last_name' => $passengerData['last_name'],
        //         'gender' => $passengerData['gender'],
        //         'birth_date' => $passengerData['birth_date'],
        //         'nationality' => $passengerData['nationality'],
        //         'passport_number' => $passengerData['passport_number'],
        //         'passport_expiry_date' => $passengerData['passport_expiry_date'],
//                 // You may need to add email and phone number here if required

// ]);
// }    // Commit the transaction
// DB::commit();

// // Redirect to the success page with a success message
// return redirect()->route('booking.success')->with('success', 'Your booking has been confirmed.');

// } catch (\Exception $e) {
// // Rollback the transaction on error
// DB::rollback();

// // Log the error or handle it as per your application's error handling policy
// // Log::error($e->getMessage());

// // Redirect back with an error message
// return back()->with('error', 'An error occurred while confirming the booking.');
// }

// }

// public function store(StoreBookingRequest $request)
// {
//     // Start a database transaction
//     $booking = DB::transaction(function () use ($request) {
//         // Create the booking with validated data from the request
//         $booking = Booking::create([
//             'user_id' => auth()->id(), // Or however you get the current user's ID
//             'departure_flight_id' => $request->departure_flight_id,
//             'return_flight_id' => $request->return_flight_id,
//             'departure_price' => $request->departure_price,
//             'return_price' => $request->return_price,
//             // ... other necessary fields from the request
//             // Ensure these fields are fillable in the Booking model
//         ]);

//         // Create passengers records associated with the booking
//         foreach ($request->passengers as $passenger) {
//             // Ensure your passenger data is structured correctly
//             $booking->passengers()->create($passenger);
//         }

//         return $booking;
//     });

//     // Check if the booking was created successfully
//     if ($booking) {
//         // Redirect to the payment page with the booking ID
//         return redirect()->route('payment.process', ['bookingId' => $booking->id]);
//     } else {
//         // Handle the case where the booking could not be created
//         return back()->withErrors(['msg' => 'Failed to create booking'])->withInput();
//     }
// }

// File: BookingController.php
// public function process(Request $request)
// {
//     // Retrieve flight and class information from session
//     $departureFlightId = session('departureFlightId');
//     $returnFlightId = session('returnFlightId');
//     $departureClassType = session('departureClassType');
//     $returnClassType = session('returnClassType');

//     // Fetch flight details
//     $departureFlight = Flight::find($departureFlightId);
//     $returnFlight = Flight::find($returnFlightId);

//     // Calculate the prices based on class type
//     $departurePrice = $departureClassType == 'economy' ? $departureFlight->price_economy : $departureFlight->price_business;
//     $returnPrice = $returnClassType == 'economy' && $returnFlight ? $returnFlight->price_economy : ($returnFlight ? $returnFlight->price_business : 0);

//     // Retrieve passenger and contact details from session
//     $passengers = $request->input('passengers', []);
//     $mobileNumber = $request->input('mobileNumber');
//     $emailAddress = $request->input('emailAddress');

//     // Calculate the total price
//     $totalPrice = ($departurePrice + $returnPrice) ;

//     // Pass all data to the view
//     return view('payment.process', [
//         'departureFlight' => $departureFlight,
//         'returnFlight' => $returnFlight,
//         'departureClassType' => $departureClassType,
//         'returnClassType' => $returnClassType,
//         'passengers' => $passengers,
//         'mobileNumber' => $mobileNumber,
//         'emailAddress' => $emailAddress,
//         'totalPrice' => $totalPrice
//     ]);
// }









// File: BookingController.php

// Assuming StoreBookingRequest is a form request with the appropriate rules defined




// public function store(StoreBookingRequest $request)
// {
//     // Retrieve necessary data from session and request
//     $departureFlightId = session('departureFlightId');
//     $returnFlightId = session('returnFlightId', null); // Default to null if not set
//     $departurePrice = session('departurePrice'); // This should be set when selecting the flight
//     $returnPrice = session('returnPrice', 0); // Default to 0 for one-way trips

//     $booking = DB::transaction(function () use ($request, $departureFlightId, $returnFlightId, $departurePrice, $returnPrice) {
//         $validated = $request->validated();

//         // Create the booking record
//         $booking = Booking::create([
//             'user_id' => auth()->id(),
//             'departure_flight_id' => $departureFlightId,
//             'return_flight_id' => $returnFlightId,
//             'departure_price' => $departurePrice,
//             'return_price' => $returnPrice,
//             'status' => 'Pending',
//             'payment_status' => 'Unpaid',
//             'booking_date' => now(),
//             'email' => $validated['emailAddress'],
//             'phone_number' => $validated['mobileNumber'],
//         ]);

//         // Store passenger details for this booking
//         foreach ($validated['passengers'] as $passengerData) {
//             $booking->passengers()->create($passengerData);
//         }

//         return $booking;
//     });

//     if ($booking && $booking->id) {
//         // Redirect to a confirmation page or payment processing page with booking ID
//         return redirect()->route('payment.process', ['bookingId' => $booking->id]);


//     } else {
//         // Handle failure case
//         return back()->withErrors(['msg' => 'Failed to create booking.'])->withInput();
//     }
// }





