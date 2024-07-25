<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Flight;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['flight.departureAirport', 'flight.arrivalAirport'])->get();
        $flights = Flight::all();

        return view('schedules.index', compact('schedules','flights'));
    }
    public function create()
    {
        $flights = Flight::with('departureAirport', 'arrivalAirport')->get();
        return view('schedules.create', compact('flights'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'day_of_week' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'departure_time' => 'required|date_format:H:i',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
    }

    public function edit(Schedule $schedule)
    {
        $flights = Flight::all();
        return view('schedules.edit', compact('schedule', 'flights'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $validatedData = $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'day_of_week' => 'required|in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
            'departure_time' => 'required|date_format:H:i',
        ]);

        $schedule->update($validatedData);

        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully.');
    }


    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully.');
    }

}
