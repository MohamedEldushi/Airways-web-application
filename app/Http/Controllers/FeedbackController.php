<?php

namespace App\Http\Controllers;
// model
use App\Models\Feedback;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'booking_id' => 'nullable|exists:bookings,id',
        ]);

        $feedback = new Feedback();
        $feedback->user_id = auth()->id(); // Ensure there's a logged-in user
        $feedback->content = $request->content;
        $feedback->booking_id = $request->booking_id;
        $feedback->save();

        return back()->with('success', 'Thank you for your feedback!');
    }

    public function index()
    {
        $generalFeedbacks = Feedback::whereNull('booking_id')->with('user')->get();
        $ticketFeedbacks = Feedback::whereNotNull('booking_id')->with(['user', 'booking.departureFlight.departureAirport', 'booking.departureFlight.arrivalAirport'])->get();

        return view('admin.feedback', compact('generalFeedbacks', 'ticketFeedbacks'));
    }
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->back()->with('success', 'Feedback deleted successfully.');
    }
    // In FeedbackController
// public function store(Request $request) {
//     $request->validate([
//         'content' => 'required|string',
//     ]);

//     $feedback = new Feedback();
//     $feedback->user_id = auth()->id(); // ensure there's a logged-in user
//     $feedback->content = $request->content;
//     $feedback->save();

//     return back()->with('success', 'Thank you for your feedback!');
// }


// public function index() {
//     $feedbacks = Feedback::with('user')->get();
//     return view('admin.feedback', compact('feedbacks'));
// }

}
