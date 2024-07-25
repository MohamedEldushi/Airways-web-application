<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['flight.departureAirport', 'flight.arrivalAirport'])->get();
        return view('home.index', compact('schedules'));
    }
}
