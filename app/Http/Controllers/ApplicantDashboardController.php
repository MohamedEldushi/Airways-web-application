<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\User;


class ApplicantDashboardController extends Controller
{
    //
    public function index() {

        $data['applications'] = auth()->user()->applications;
        return view('applicant.index', $data);
    }

    public function profile () {
        $data['user'] = auth()->user();
        return view('applicant.profile', $data);
    }
        public function editProfile()
        {
            $data['user']=auth()->user();
            return view('applicant.edit-profile',$data);
        }

    // public function myflights(){
    //     return view ('applicant.my-flights');
    // }

    public function myflights()
    {
        $user = Auth::user(); // Ensure the user is authenticated

        if ($user) {
            // Explicitly specify the columns to load from the flights table to ensure 'price' is included
            $bookings = $user->bookings()->with(['departureFlight.departureAirport', 'departureFlight.arrivalAirport', 'returnFlight.departureAirport', 'returnFlight.arrivalAirport'])->get();

            return view('applicant.my-flights', compact('bookings'));
        } else {
            // Handle cases where the user is not authenticated
            return redirect()->route('login')->with('error', 'You must be logged in to view bookings.');
        }
    }


    public function application() {
        return view('applicant.form');
    }

    public function post_application (Request $request) {
        $user = auth()->user();

        $request->validate([
            'university' => 'required',
            'major' => 'required',
            'year' => 'required',
        ]);

        $application = new Application();
        $application->university = $request->input('university');
        $application->major = $request->input('major');
        $application->year = $request->input('year');


        $application->applicant()->associate($user);
        $application->save();

        return redirect()->route('dashboard.index');
    }

}
