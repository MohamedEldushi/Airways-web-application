<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\FlightNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlightNotificationController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'flight_number' => 'required|exists:flights,flight_number',
            'email' => 'required_without:phone_number|email',
            'phone_number' => 'required_without:email',
            'email_notification' => 'sometimes|accepted',
            'sms_notification' => 'sometimes|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $flight = Flight::where('flight_number', $request->flight_number)->first();

        FlightNotification::create([
            'email' => $request->email,
            'flight_id' => $flight->id,
            'notification_type' => $this->determineNotificationType($request)
        ]);

        return back()->with('success', 'You have successfully subscribed to notifications.');
    }

    private function determineNotificationType($request)
    {
        if ($request->has('email_notification') && $request->has('sms_notification')) {
            return 'both';
        } elseif ($request->has('email_notification')) {
            return 'email';
        } elseif ($request->has('sms_notification')) {
            return 'sms';
        }

        return 'none'; // default, though you should prevent this situation
    }
}
