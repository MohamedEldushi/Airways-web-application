<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmed;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBookingRequest; // Ensure this request validates your form data correctly


use Illuminate\Http\Request;
// Make sure to use your actual model for a Booking or Ticket
use App\Models\Booking;

class PaymentController extends Controller
{
    // public function process($bookingId)
    // {
    //     $booking = Booking::findOrFail($bookingId);

    //     // Display the payment page, passing the booking information
    //     return view('payment.process', compact('booking'));
    // }


    // public function showPaymentPage($bookingId)
    // {
    //     $booking = Booking::with(['departureFlight', 'returnFlight'])->findOrFail($bookingId);

    //     // Calculate the total price. Adjust this logic based on how your pricing is set up.
    //     $totalPrice = $booking->departureFlight->price;
    //     if ($booking->returnFlight) {
    //         $totalPrice += $booking->returnFlight->price;
    //     }

    //     return view('payment.process', compact('totalPrice'));
    // }
//     public function showPaymentPage($bookingId)
// {
//     $booking = Booking::with(['departureFlight', 'returnFlight'])->findOrFail($bookingId);
//     $totalPrice = 0;
//     $classType = $booking->class; // Assuming 'class' is a column in your 'bookings' table.
//     $numberOfPassengers = count($booking->passengers); // Assuming you want to multiply by the number of passengers.

//     // Adjust this logic based on your pricing structure and flight model attributes.
//     if ($classType == 'Economy') {
//         $totalPrice += $booking->departureFlight->price_economy * $numberOfPassengers;
//         if ($booking->returnFlight) {
//             $totalPrice += $booking->returnFlight->price_economy * $numberOfPassengers;
//         }
//     } elseif ($classType == 'Business') {
//         $totalPrice += $booking->departureFlight->price_business * $numberOfPassengers;
//         if ($booking->returnFlight) {
//             $totalPrice += $booking->returnFlight->price_business * $numberOfPassengers;
//         }

//     }
//     // Mail::to($booking->email)->send(new BookingConfirmed($booking, $totalPrice));


//     // return view('payment.process', compact('totalPrice'));
//     // return view('payment.process', compact('totalPrice', 'booking'));
//     return view('payment.process', compact('totalPrice', 'booking', 'bookingId'));


// }













// public function confirmBooking(Request $request, $bookingId)
// {
    // $booking = Booking::with(['departureFlight', 'returnFlight', 'passengers'])->findOrFail($bookingId);
    // $totalPrice = 0;
    // $numberOfPassengers = count($booking->passengers);

//     // Assuming 'price_economy' and 'price_business' are columns in your flights table
    // if ($booking->class == 'Economy') {
    //     $totalPrice += $booking->departureFlight->price_economy * $numberOfPassengers;
    //     if ($booking->returnFlight) {
    //         $totalPrice += $booking->returnFlight->price_economy * $numberOfPassengers;
    //     }
    // } elseif ($booking->class == 'Business') {
    //     $totalPrice += $booking->departureFlight->price_business * $numberOfPassengers;
    //     if ($booking->returnFlight) {
    //         $totalPrice += $booking->returnFlight->price_business * $numberOfPassengers;
    //     }
    // }

//     $passengerDetails = $booking->passengers->map(function($passenger) {
//         return "{$passenger->title} {$passenger->first_name} {$passenger->last_name}, Gender: {$passenger->gender}, Passport No: {$passenger->passport_number}, Birth Date: {$passenger->birth_date->format('Y-m-d')}";
//     })->toArray();

//     // Send confirmation email
//     Mail::to($booking->email)->send(new BookingConfirmed($booking, $totalPrice, $passengerDetails));

//     // Mail::to($booking->email)->send(new BookingConfirmed($booking, $totalPrice));

//     return redirect()->route('booking.success')->with('success', 'Successfully booked! Check your email for ticket details.');
// }
// public function booked(StoreBookingRequest $request)
// {
//     // Start transaction
//     DB::beginTransaction();

//     try {
//         // Since we're using StoreBookingRequest, the data is already validated
//         $validatedData = $request->validated();

//         // Create the booking record
//         $booking = new Booking($validatedData);
//         $booking->user_id = auth()->id(); // Set the authenticated user's ID
//         $booking->save();

//         // Prepare the data for the email
//         $bookingInfo = [
//             'booking' => $booking,
//             'passengerDetails' => $request->input('passengers', []), // Assuming passengers are provided in the correct format
//             'totalPrice' => $validatedData['totalPrice'] // Ensure this field is validated in StoreBookingRequest
//         ];

//         // Send confirmation email using SendGrid
//         Mail::to($validatedData['email'])->send(new BookingConfirmed($bookingInfo));

//         // Commit the transaction
//         DB::commit();

//         // Redirect to the success page
//         return redirect()->route('booking.success')->with('success', 'Successfully booked! Check your email for ticket details.');
//     } catch (\Exception $e) {
//         // Rollback the transaction
//         DB::rollback();

//         // Log the exception message for debugging
//         Log::error("Booking failed: " . $e->getMessage());

//         // Redirect back with an error message
//         return back()->withErrors('There was a problem with the booking. Please try again.')->withInput();
//     }
// }

// public function confirmBooking(Request $request, $bookingId) {
//     $booking = Booking::findOrFail($bookingId);
//     // Logic to process payment here (if any)

//     // Send confirmation email
//     $totalPrice = 0; // Define $totalPrice variable
//     Mail::to($booking->email)->send(new BookingConfirmed($booking, $totalPrice)); // Ensure $totalPrice is defined
//     $this->sendEmail($booking); // Call the sendEmail method

//     // Redirect with success message
//     // return redirect()->route('booking.success')->with('success', 'Successfully booked! Check your email for ticket details.');
//     return redirect()->route('booking.success')->with('success', 'Successfully booked! Check your email for ticket details.');

// }

// public function sendEmail($booking)
// {


// }

}
