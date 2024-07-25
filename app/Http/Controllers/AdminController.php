<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\FlightNotification;
use App\Mail\FlightStatusUpdate;
use Illuminate\Support\Facades\Mail;
use App\Models\Location;
// booking model
use App\Models\Booking;
use App\Models\Passenger;
use App\Exports\BookingsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\App;
use PDF;
use App\Events\FlightUpdated;




use League\Csv\Writer;
use SplTempFileObject;



class AdminController extends Controller
{
    //
    // public function index() {
    //     $data['applications'] = Application::all();
    //     return view('admin.index', $data);
    // }

    // public function profile () {
    //     $data['user'] = auth()->user();
    //     return view('admin.profile', $data);
    // }

    // public function approve ($id) {
    //     $application = Application::find($id);

    //     if ($application->status == 'pending') {
    //         $application->status = "accepted";
    //         $application->save();
    //         return redirect()->back()->with('success', 'Application Approved');
    //     } else {
    //         return redirect()->back()->with('error', 'Application Already Approved');
    //     }
    // }

    // public function reject ($id) {
    //     $application = Application::find($id);

    //     if ($application->status == 'pending') {
    //         $application->status = "rejected";
    //         $application->save();
    //         return redirect()->back()->with('success', 'Application Rejected');
    //     } else {
    //         return redirect()->back()->with('error', 'Application Already Rejected');
    //     }
    // }
    public function index()
    {
        $flights = Flight::all();
        return view('admin.index', compact('flights'));
    }

    public function create()
    {
        $airports = Location::all(); // Assuming Location stores airport data
        return view('admin.create', compact('airports'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'flight_number' => 'required|string|unique:flights',
            'departure_airport_id' => 'required|exists:locations,id',
            'arrival_airport_id' => 'required|exists:locations,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date|after:departure_time',
            'price_economy' => 'required|numeric',
            'price_business' => 'required|numeric',

            'status' => 'required|in:scheduled,cancelled,delayed',

        'days_of_operation' => 'required|array',
        'days_of_operation.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
        ]);

        // Flight::create($request->all());
        $flightData = $request->all();
        if (is_array($request->days_of_operation)) {
            $flightData['days_of_operation'] = implode(',', $request->days_of_operation); // store as comma-separated values
        }

        Flight::create($flightData);

        return redirect()->route('admin.index')->with('success', 'Flight added successfully!');
    }


    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        $airports = Location::all(); // Assuming you have a Location model for airports

        return view('admin.edit', compact('flight', 'airports'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'flight_number' => 'required|string|unique:flights,flight_number,' . $id,
            'departure_airport_id' => 'required|integer|exists:locations,id',
            'arrival_airport_id' => 'required|integer|exists:locations,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date|after:departure_time',
            'price_economy' => 'required|numeric',
            'price_business' => 'required|numeric',
            'status' => 'required|string',
            // existing validations...
        'days_of_operation' => 'required|array',
        'days_of_operation.*' => 'in:Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday',
    ]);



        $flight = Flight::findOrFail($id);
        $flight->update($request->only([
            'flight_number',
            'departure_airport_id',
            'arrival_airport_id',
            'departure_time',
            'arrival_time',
            'price_economy',
            'price_business',
            'status',
            'total_seats' => 'required|integer|min:1' // Ensure there's at least one seat
           , 'total_seats' // Include total_seats in the update


        ]));
        if (is_array($request->days_of_operation)) {
            $flightData['days_of_operation'] = implode(',', $request->days_of_operation); // Convert array to comma-separated
        }

        $flight->update($flightData);

        event(new FlightUpdated($flight));

        return redirect()->route('admin.index')->with('success', 'Flight updated successfully.');
    }


public function destroy(Flight $flight)
{
    $flight->delete();
    return redirect()->route('admin.index')->with('success', 'Flight deleted successfully');
}

public function bookingReports()
{
    // Retrieve your bookings data
    $bookingsData = $this->getBookingsReportData();

    // Return the view with the bookings data
    return view('admin.reports', compact('bookingsData'));
}

// You might want to create a separate method to handle the retrieval of report data
private function getBookingsReportData()
{
    // This is a placeholder, replace this with your actual logic to retrieve report data
    // This could involve complex queries with aggregates, groupings, etc.

    $bookingsData = Booking::selectRaw('status, COUNT(*) as total, SUM(departure_price + return_price) as revenue')
    ->groupBy('status')
    ->get();


    return $bookingsData;
}

public function flightPassengersPage()
{
    $flights = Flight::all(); // Assuming you have a Flight model
    $passengers = Passenger::with('booking', 'booking.departureFlight', 'booking.returnFlight')->get();

    return view('admin.flight-passengers', compact('flights','passengers'));
}

public function listFlightPassengers(Request $request)
{
    $search = $request->input('search');
    $flightId = $request->input('flight_id');

    $query = Passenger::query();

    if ($flightId) {
        $query->whereHas('booking', function ($query) use ($flightId) {
            $query->where('departure_flight_id', $flightId)
                  ->orWhere('return_flight_id', $flightId);
        });
    }

    // If the search term is provided, filter the passengers by the search criteria
    if ($search) {
        $query->where(function ($query) use ($search) {
            $query->where('first_name', 'LIKE', "%{$search}%")
                  ->orWhere('last_name', 'LIKE', "%{$search}%")
                  ->orWhereHas('booking', function ($subquery) use ($search) {
                      $subquery->where('email', 'LIKE', "%{$search}%")
                               ->orWhere('phone_number', 'LIKE', "%{$search}%");
                  });
        });
    }

    $passengers = $query->with('booking')->get();
    $flights = Flight::all();

    return view('admin.flight-passengers', compact('passengers', 'flights', 'search', 'flightId'));
}
















// Inside ReportController.php

public function exportCSV()
{
    $bookings = Booking::all(); // Or however you wish to retrieve the bookings
    $csv = Writer::createFromFileObject(new \SplTempFileObject());

    // Insert CSV header
    $csv->insertOne(['Booking ID', 'User ID', 'Departure flight ','Return flight', 'Status', 'Payment Status', 'Booking Date', '...']);

    // Insert bookings data
    foreach ($bookings as $booking) {
        $csv->insertOne([
            $booking->id,
            $booking->user_id,

            $booking->departureFlight ? $booking->departureFlight->flight_number : 'N/A',
            $booking->returnFlight ? $booking->returnFlight->flight_number : 'N/A',





            $booking->status,
            $booking->payment_status,
            // $booking->booking_date->format('Y-m-d H:i:s'),
            // ... Add more fields as necessary
        ]);
    }

    $csv->output('bookings.csv');
    exit;
}

public function exportPDF()
{
    $bookings = Booking::all(); // Or however you wish to retrieve the bookings

    $pdf = PDF::loadView('reports.booking_pdf', ['bookings' => $bookings]);
    return $pdf->download('bookings-report.pdf');
}





public function location()
{
    return view('admin.locations');
}
public function storelocation(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required',
        'code' => 'required',
        'country' => 'required',
        'city' => 'required',
    ]);

    // Create a new location
    Location::create($request->all());

    // Redirect back or to another page with a success message
    return redirect()->route('admin.index')->with('success', 'Location added successfully!');
}



public function indexlocation()
{
    $locations = \App\Models\Location::all(); // Replace \App\Models\Location with your actual Location model namespace
    return view('admin.veiwlocation', compact('locations'));
}



public function editlocation($locationId)
{
    $location = \App\Models\Location::findOrFail($locationId);
    return view('admin.locationedit', compact('location'));
}


public function updatelocation(Request $request, $locationId)
{
    $request->validate([
        'name' => 'required',
        'code' => 'required',
        'country' => 'required',
        'city' => 'required',
    ]);

    $location = \App\Models\Location::findOrFail($locationId);
    $location->update($request->all());

    return redirect()->route('locations.view')->with('success', 'Location updated successfully!');
}
public function destroylocation($locationId)
{
    $location = \App\Models\Location::findOrFail($locationId);
    $location->delete();

    return redirect()->route('locations.view')->with('success', 'Location deleted successfully!');
}

public function editProfile()
{
    $user = auth()->user(); // Get the currently authenticated user
    return view('admin.editprofile', compact('user'));
}

public function updateProfile(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'firstname' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'title' => 'nullable|string|max:10',
        'nationality' => 'nullable|string|max:255',
        'birthday' => 'nullable|date',
        'gender' => 'nullable|string|in:male,female,other',
        'country' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'zip_code' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:255',
        'area_code' => 'nullable|string|max:20',
        'phone_number' => 'nullable|string|max:20',
    ]);

    $user = auth()->user();

    // Excluding password from the $request->all() array
    $userData = $request->except(['password']);
    $user->update($userData);

    return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
}
public function showProfile()
{
    $user = auth()->user(); // Assuming the admin is the authenticated user
    return view('admin.profile', compact('user'));
}


// public function flightsList(Request $request)
// {
//     $query = Flight::query();

//     // Optional: Implement filtering logic here based on flight number or ID if provided
//     if ($request->has('flightNumber')) {
//         $query->where('flight_number', $request->flightNumber);
//     }

//     $flights = $query->withCount('bookings')->get(); // Fetch flights with total bookings count

//     return view('admin.flightsList', compact('flights'));
// }

// public function viewFlightBookings($flightId)
// {
//     $flight = Flight::findOrFail($flightId);
//     $bookings = Booking::where('departure_flight_id', $flightId)
//                         ->orWhere('return_flight_id', $flightId)
//                         ->with('passengers')

//                         ->get();

//     return view('admin.flightReservations', compact('flight', 'bookings'));
// }




    // public function edit(Flight $flight)
    // {
    //     return view('admin.edit', compact('flight'));
    // }

    // public function update(Request $request, Flight $flight)
    // {
    //     $flight->update($request->all());
    //     return redirect()->route('admin.index')->with('success', 'Flight status updated successfully.');
    // }



































    // public function sendFlightStatusUpdate($flightId)
    // {
    //     $flight = Flight::findOrFail($flightId);
    //     $notifications = FlightNotification::where('flight_id', $flight->id)->get();

    //     foreach ($notifications as $notification) {
    //         Mail::to($notification->email)->send(new FlightStatusUpdate($flight));
    //     }

    //     return redirect()->back()->with('success', 'Flight status updates have been sent.');
    // }


}
