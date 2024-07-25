<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingCancelled;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;



class CheckinController extends Controller
{
    //



// CheckinController.php
public function index()
{
    return view('home.checkin');
}




// public function retrieveBooking(Request $request) {
//     $validatedData = $request->validate([
//         'booking_reference' => 'required|string|max:255',
//         'first_name' => 'required|string|max:255',
//     ]);

//     $booking = Booking::with(['passengers', 'departureFlight', 'returnFlight'])
//                       ->where('booking_reference', $validatedData['booking_reference'])
//                       ->whereHas('passengers', function ($query) use ($validatedData) {
//                           $query->where('first_name', 'like', "%{$validatedData['first_name']}%");
//                       })->first();
// // added here
//     if (!$booking) {
//         return redirect()->back()->withErrors(['msg' => 'Booking not found.']);
//     }


//     return view('manage.booking', compact('booking'));
// }

public function retrieveBooking(Request $request) {
    $validatedData = $request->validate([
        'booking_reference' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
    ]);

    $booking = Booking::where('booking_reference', $validatedData['booking_reference'])
                      ->whereHas('passengers', function ($query) use ($validatedData) {
                          $query->where('first_name', 'like', "%{$validatedData['first_name']}%");
                      })->first();

    if (!$booking) {
        return redirect()->back()->withErrors(['msg' => 'Booking not found.']);
    }

    // Redirect to the booking view method with the found booking ID
    return redirect()->route('booking.view', $booking->id);
}
public function viewBooking($bookingId) {
    $booking = Booking::with(['passengers', 'departureFlight', 'returnFlight'])
                      ->findOrFail($bookingId);

    return view('manage.booking', compact('booking'));
}



public function cancelBooking(Request $request, $bookingId) {
    $booking = Booking::findOrFail($bookingId);
    $booking->update(['status' => 'cancelled']);

    $passenger = $booking->passengers->first();
    $flight = $booking->departureFlight;


    // Send cancellation email

      Mail::to($booking->email)->send(new BookingCancelled($booking));

        // Mail::to('mohamed.aldoshi@yahoo.com')->send(new BookingCancelled($booking));


        // Mail::to('mohamed.aldoshi@yahoo.com')->send(new BookingCancelled($booking));


    return redirect('/')->with('success', 'Your booking has been cancelled successfully.');
}





public function checkIn(Request $request) {
    $request->validate([
        'booking_reference' => 'required|string|max:255',
        'first_name' => 'required|string|max:255', // Use first_name
    ]);

    $booking = Booking::with('passengers')
                      ->where('booking_reference', $request->booking_reference)
                      ->whereHas('passengers', function ($query) use ($request) {
                          $query->where('first_name', 'like', "%{$request->first_name}%"); // Adjust to first_name
                      })->firstOrFail();

    $booking->passengers()->where('first_name', 'like', "%{$request->first_name}%")
             ->update(['checked_in' => true]);

    return redirect()->route('booking.confirmation', ['booking' => $booking->id])
                     ->with('success', 'Check-in successful.');
}

}
