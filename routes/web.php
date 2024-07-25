<?php

use App\Http\Controllers\ApplicantDashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\FlightStatusController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\FlightNotificationController;

// noteficationcontroller


use App\Mail\FlightStatusUpdate;
use App\Models\Flight;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\ResetPasswordController;



use App\Http\Controllers\ScheduleController;


use App\Http\Controllers\FlightScheduleController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home.index');
// })->name('home.index');

// Route::post('ticket', [FlightController::class, 'search'])->name('search.flights');
// Route::get('/flights/create', [FlightController::class, 'create'])->name('flights.create');
// Route::post('ticket/search', [FlightController::class, 'search'])->name('search.flights');

// Route::get('/home', [FlightController::class, 'someMethod'])->name('home.index');






// Route::get('/', [FlightController::class, 'create'])->name('home.index');
// Route::post('/search-flights', [FlightController::class, 'searchFlights'])->name('search.flights');
// // After selecting a departure flight
// Route::get('/select-departure/{flightId}/{classType}', [FlightController::class, 'selectDepartureFlight'])->name('select.departure');
// // Route::get('/select-departure', [FlightController::class, 'selectDepartureFlight'])->name('select.departure');

// // Add these routes in your web.php file

// // Route for selecting a departure flight
// Route::get('/select-departure/{flightId}/{classType}', [FlightController::class, 'selectDepartureFlight'])->name('select.departure');

// // Placeholder route for creating a booking (adjust according to your actual controller and method)
// // Route::get('/booking/create/{flightId}/{classType}', [PassengerController::class, 'create'])->name('ticket.return');

// // Placeholder route for showing booking page or return flights
// Route::post('/finalize-booking', [PassengerController::class, 'store'])->name('ticket.return');


// // Placeholder route for showing return flights
// Route::get('/return-flights/{flightId}', [FlightController::class, 'showReturnFlights'])->name('ticket.departure');






// Home page or initial search page
Route::get('/', [FlightController::class, 'create'])->name('home.index');
Route::post('/search-flights', [FlightController::class, 'searchFlights'])->name('search.flights');

// Route::post('/select-departure', [FlightController::class, 'selectDepartureFlight'])->name('select.departure');

// Handling the selection of departure flights
Route::get('/select-departure/{flightId}/{classType}', [FlightController::class, 'selectDepartureFlight'])->name('select.departure');


// // Route for showing return flights (optional, based on trip type)
// Route::get('/return-flights/{flightId}', [FlightController::class, 'showReturnFlights'])->name('flights.return');
// // Route for showing return flights based on a selected departure flight
// Route for showing return flights based on a selected departure flight
Route::get('/return-flights/{departureFlightId}/{classType}', [FlightController::class, 'showReturnFlights'])->name('flights.return');


// Final booking process
// Route::post('/finalize-booking', [PassengerController::class, 'store'])->name('finalize.booking');


// Route for finalizing booking (shown after selecting a departure flight)
// Web.php
Route::get('/finalize-booking/{flightId}/{classType}', [PassengerController::class, 'index'])->name('booking.finalize');






Route::post('post-login', [AuthController::class, 'post_login'])->name('post-login');


// Route::post('/tickets/index', [TicketController::class, 'index']);
// Route::get('ticket/index', [FlightController::class, 'create'])->name('ticket.index');
// Route::post('ticket/search', [FlightController::class, 'search'])->name('ticket.search');

// Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard');
 Route::get('checkin',[CheckinController::class, 'index'])->name('checkin');
Route::get('flightstatus',[FlightStatusController::class, 'index'])->name('flightstatus');

// Route::get('manage-checkin', 'CheckinController@index')->name('checkin');
Route::get('/auth/register2', [AuthController::class, 'showRegister2Form'])->name('auth.register2');

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('post-login', [AuthController::class, 'post_login'])->name('post-login');

    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('post-register', [AuthController::class, 'post_register'])->name('post-register');
    Route::get('logout', function () {
        Auth::logout();
        return redirect('auth/login');
    })->name('logout');


    // Route::get('/my-bookings', [AuthController::class, 'showBookings'])->name('my-bookings')->middleware('auth');


    // Route::get('/my-flights', [AuthController::class, 'showBookings'])->name('my-flights')->middleware('auth');




    // Route::put('/update-profile', [AuthController::class, 'updateProfile'])->name('update-profile');
    // Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');


    // Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('/edit-profile', [AuthController::class, 'editProfile'])->name('edit-profile');
// Route::get('/dashboard/profile', [AuthController::class, 'profile'])->name('dashboard.profile');
// Route::put('/update-profile', [AuthController::class, 'updateProfile'])->name('update-profile');

Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('update-profile');


Route::get('/edit-address', [AuthController::class, 'editAddress'])->name('edit-address');
Route::put('/update-address', [AuthController::class, 'updateAddress'])->name('update-address');




Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'can:user-access'])->group(function () {
    Route::get('/', [ApplicantDashboardController::class, 'index'])->name('index');
    Route::get('application', [ApplicantDashboardController::class, 'application'])->name('application');
    Route::post('post-application', [ApplicantDashboardController::class, 'post_application'])->name('post-application');

    // Route::get('profile', [ApplicantDashboardController::class, 'profile'])->name('profile');
    // Route::get('edit-profile', [ApplicantDashboardController::class, 'editProfile'])->name('edit-profile');
    // Route::get('my-flights', [ApplicantDashboardController::class,'myflights'])->name('my-flights');
    // Route::get('/applicants/my-flights', [ApplicantDashboardController::class, 'myflights'])->name('applicants.my-flights');
    // Route::get('/dashboard/profile', [ApplicantDashboardController::class, 'profile'])->name('dashboard.profile');
    // Route::get('/dashboard/edit-profile', [ApplicantDashboardController::class, 'editProfile'])->name('dashboard.edit-profile');
    // Route::get('/dashboard/my-flights', [ApplicantDashboardController::class, 'myflights'])->name('dashboard.my-flights');



});
// Assuming these routes are within a group that prefixes 'dashboard' for URL
Route::get('/profile', [ApplicantDashboardController::class, 'profile'])->name('dashboard.profile');
Route::get('/my-flights', [ApplicantDashboardController::class, 'myflights'])->name('dashboard.my-flights');


Route::get('edit-profile', [ApplicantDashboardController::class, 'editProfile'])->name('edit-profile');

Route::get('/departure', [TicketController::class, 'departurePage'])->name('departure');
Route::get('/return',[TicketController::class,'departure2'])->name('return');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/summary',[TicketController::class, 'summary'])->name('summary');




// Route::post('/book-flight', [TicketController::class, 'store'])->name('book.flight');
Route::post('/select-return', [TicketController::class, 'selectReturnFlight'])->name('select.return');
Route::get('/return', [TicketController::class, 'showReturnFlights'])->name('return');
// Define a route for showing the return flight selection
// Route::get('/return-flight-selection', [TicketController::class, 'showReturnFlightSelection'])->name('showReturnFlightSelection');
Route::get('/return-flight-selection', [TicketController::class, 'showReturnFlightSelection'])->name('return-flight-selection');


// To show return flights
// Route::get('/show-return-flights', [TicketController::class, 'showReturnFlights'])->name('showReturnFlights');

// passenger controller methods

// payment methods
// Route::get('/payment-process', [PaymentController::class, 'showPaymentPage'])->name('payment.process');
// Route::get('/payment/{bookingId}', [PaymentController::class, 'showPaymentPage'])->name('payment.show');
// Route::get('/payment/{bookingId}', [PaymentController::class, 'showPaymentPage'])->name('payment.process');


// Route to show the review page
// Route::get('/booking/review', [BookingController::class, 'showReviewForm'])->name('booking.review');

// Route to handle the submission and store the booking


// // General summary page without a specific booking ID
// Route::get('/trip-summary', [BookingController::class, 'generalSummary'])->name('summary.general');



// Route for showing the form
// Route::get('/booking', [PassengerController::class, 'create'])->name('booking.create');

// Route for processing the form submission
// Route::post('/passengers/store', [PassengerController::class, 'store'])->name('passenger.store');

// Route for showing the booking summary
// Route::get('/booking-summary/{bookingId}', [BookingController::class, 'showSummary'])->name('booking.summary');
// Route::post('/path/to/booking', [BookingController::class, 'store'])->name('booking.store')->middleware('auth');

// Assuming this handles the actual payment confirmation


// Route::get('edit-profile', [ApplicantDashboardController::class, 'editProfile'])->name('edit-profile');

// Route::prefix('admin')->middleware(['auth', 'can:admin-access'])->group(function () {
//     // Flight management routes
//     Route::get('/flights', [AdminController::class, 'index'])->name('admin.flights.index');
//     Route::get('/flights/create', [AdminController::class, 'create'])->name('admin.flights.create');
//     Route::post('/flights', [AdminController::class, 'store'])->name('admin.flights.store');
//     Route::get('/flights/{flight}/edit', [AdminController::class, 'edit'])->name('admin.flights.edit');
//     Route::put('/flights/{flight}', [AdminController::class, 'update'])->name('admin.flights.update');
//     Route::delete('/flights/{flight}', [AdminController::class, 'destroy'])->name('admin.flights.destroy');
// });

Route::get('/flights/create', [AdminController::class, 'create'])->name('admin.create');
// Route::get('/flights/{flight}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('admin/flights/{flight}/edit', [AdminController::class, 'edit'])->name('admin.edit');


// Route::put('admin/flights/{flight}', [AdminController::class, 'update'])->name('admin.update');
Route::put('admin/flights/{flight}', [AdminController::class, 'update'])->name('admin.update');

Route::delete('admin/flights/{flight}', [AdminController::class, 'destroy'])->name('admin.destroy');
// Route::get('admin/flights/create', [AdminController::class, 'create'])->name('admin.flights.create');
Route::get('admin/flights/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('admin/flights', [AdminController::class, 'store'])->name('admin.store');


    Route::post('/flights', [AdminController::class, 'store'])->name('admin.store');

    Route::delete('/flights/{flight}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/reports', [AdminController::class, 'bookingReports'])->name('admin.reports');
    Route::get('/admin/flights', [AdminController::class, 'flightsList'])->name('admin.flightsList');

    // Route::get('/admin/flights/{flightId}/bookings', [AdminController::class, 'viewFlightBookings'])->name('admin.viewFlightBookings');
    // Route::get('/admin/flights', [AdminController::class, 'flightsList'])->name('admin.flightsList');
    // Route::get('/admin/flights/{flightId}/bookings', [AdminController::class, 'viewFlightBookings'])->name('admin.viewFlightBookings');

// Route definition using the controller class syntax
Route::get('/admin/flight-passengers', [AdminController::class, 'flightPassengersPage'])->name('admin.flight-passengers');
Route::post('/admin/flight-passengers/list', [AdminController::class, 'listFlightPassengers'])->name('admin.flight-passengers.list');
Route::get('/admin/flight-passengers/list', [AdminController::class, 'listFlightPassengers'])->name('admin.flight-passengers.list');

// For CSV Export
Route::get('/admin/reports/export/csv', [AdminController::class, 'exportCSV'])->name('admin.reports.export.csv');

// For PDF Export
Route::get('/admin/reports/export/pdf', [AdminController::class, 'exportPDF'])->name('admin.reports.export.pdf');
Route::get('/admin/bookings/{flight}', [AdminController::class, 'getFlightBookings'])->name('admin.getFlightBookings');
Route::get('/admin/locations/create', [AdminController::class, 'location'])->name('locations.create');
Route::post('/admin/locations', [AdminController::class, 'storelocation'])->name('locations.store');
Route::get('/locations/view', [AdminController::class, 'indexlocation'])->name('locations.view');
Route::get('/flights/view', [AdminController::class, 'index'])->name('flights.view');

// Edit location form
Route::get('/locations/{location}/edit', [AdminController::class, 'editlocation'])->name('locations.edit');
// Update location
Route::put('/locations/{location}', [AdminController::class, 'updatelocation'])->name('locations.update');
// Delete location
Route::delete('/locations/{location}', [AdminController::class, 'destroylocation'])->name('locations.destroy');
// Display the profile form
// Route::get('/admin/profile', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

// Handle profile update
Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

Route::name('admin.')->prefix('admin')->middleware(['auth', 'can:admin-access'])->group(function () {
    Route::get('/flights', [AdminController::class, 'index'])->name('index');


    // // Route::get('/', [AdminController::class, 'index'])->name('flights.index');
    // Route::get('/', [AdminController::class, 'index'])->name('index'); // This defines the 'admin.index' route
    // Route::get('/flights/{flight}/edit', [AdminController::class, 'edit'])->name('flights.edit');
    // Route::put('/flights/{flight}', [AdminController::class, 'update'])->name('flights.update');
});



// Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:admin-access'])->group(function () {
//     Route::get('/flights', [AdminController::class, 'index'])->name('flights.index');
//     Route::get('/flights/{flight}/edit', [AdminController::class, 'edit'])->name('flights.edit');
//     Route::put('/flights/{flight}', [AdminController::class, 'update'])->name('flights.update');
// });








// Route::post('/booking/review', [BookingController::class, 'review'])->name('booking.review');
Route::post('/passenger/details/store', [BookingController::class, 'storePassengerDetails'])->name('passenger.details.store');
Route::get('/trip-summary', [BookingController::class, 'showTripSummary'])->name('trip.summary');
Route::get('/booking/process', [BookingController::class, 'showProcessPage'])->name('booking.process');
Route::post('/booking/confirm', [BookingController::class, 'confirmBooking'])->name('booking.confirm');

Route::get('/flights-by-date/{date}', [FlightController::class, 'getFlightsByDate']);


// Route::post('/booking/process', [BookingController::class, 'processBooking'])->name('booking.process');


// Route::get('/booking/process', function () {
//     return view('payment.process', ['data' => session('bookingData')]);
// })->name('booking.process.view');
// This route handles the final booking confirmation and storage


Route::get('/booking/success', function () {
    return view('booking.success'); // Make sure you have a success.blade.php view
})->name('booking.success');


// File: /routes/web.php

// Route::post('/booking/process', [BookingController::class, 'process'])->name('booking.process');
// Route::get('/booking/hi', [BookingController::class, 'hi'])->name('booking.process');
// Route::get('/booking/process', [BookingController::class, 'hi'])->name('booking.process');



// Route::post('/booking/booked', [BookingController::class, 'booked'])->name('booking.booked');
// Route::get('/booking/success', function () {
//     return view('booking.success');
// })->name('booking.success');


// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
// Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

// Route::get('/booking/review', [BookingController::class, 'showReviewPage'])->name('booking.review');

// Route to display the payment page
// Route::get('/payment/{bookingId}', [PaymentController::class, 'showPaymentPage'])->name('payment.process');




// Assuming this shows the payment form

// sending an email notification about booking tickets
// Route::post('/booking/{bookingId}/confirm', [PaymentController::class, 'confirmBooking'])->name('confirm.booking');
// Route::get('/booking/success', function () {
//     return view('booking.success');
// })->name('booking.success');

// Route::post('/booking/{bookingId}/confirm', [PaymentController::class, 'confirmBooking'])->name('confirm.booking');

// // Route::get('/booking/success', function () {
// //     return view('booking.success'); // Ensure you have a success view
// // })->name('booking.success');
// Route::get('/booking/success', function () {
//     return 'Booking success route is working.';
// })->name('booking.success');

// Make sure this route is a POST route since it performs an action (confirming a booking)
// Route::post('/booking/{bookingId}/confirm', [PaymentController::class, 'confirmBooking'])->name('confirm.booking');
// Route::get('/booking/success', function () {
//     return view('booking.success');
// })->name('booking.success');





// Route::get('/api/flight-status', [FlightStatusController::class, 'searchFlightStatus'])->name('api.flights.status');

// Route::get('flightstatus',[FlightStatusController::class, 'searchFlightStatus'])->name('flightstatus');
Route::get('/flight-status', [FlightStatusController::class, 'searchFlightStatus'])->name('flights.status');
// Route::get('/flight-by-number', [FlightStatusController::class, 'searchFlightByNumber'])->name('flights.by_number');
// // sendFlightStatusUpdate
// Route::get('/flight-status-update/{flight}', [AdminController::class, 'sendFlightStatusUpdate'])->name('flights.status.update');

// Route::post('/notifications/signup',[FlightStatusController::class , 'signup'])->name('notifications.signup');
// Route::get('/flight-status-update/{flightId}', [AdminController::class, 'sendFlightStatusUpdate'])->name('flights.status.update');

// Route::get('/send-test-email', function() {
//     $flight = Flight::first(); // Get a flight for testing
//     Mail::to('test@example.com')->send(new FlightStatusUpdate($flight)); // Replace with your email
//     return 'Test email sent.';
// });
Route::post('/flights/{flight}/status', [FlightStatusController::class, 'updateFlightStatus'])->name('flights.update.status');
Route::post('/notifications/signup', [FlightStatusController::class, 'signup'])->name('notifications.signup');


// booking update booking
    // Route::post('/booking/retrieve', [CheckinController::class, 'retrieveBooking'])->name('booking.retrieve');
Route::post('/booking/check-in', [CheckinController::class, 'checkIn'])->name('booking.check-in');
// view booking details
// Route::get('/booking/{booking}', [CheckinController::class, 'viewBooking'])->name('booking.view');
// Route::delete('/booking/{booking}/cancel', [CheckinController::class, 'cancel'])->name('booking.cancel');

Route::post('/booking/retrieve', [CheckinController::class, 'retrieveBooking'])->name('booking.retrieve');
Route::get('/booking/{booking}', [CheckinController::class, 'viewBooking'])->name('booking.view');
Route::post('/booking/{booking}/cancel', [CheckinController::class, 'cancelBooking'])->name('booking.cancel');
Route::get('/bookings/cancelled', function () {
    return view('booking.cancelled');
})->name('booking.cancelled');





// Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot.password.get');
// Route::post('forgot-password', [ForgotPasswordController::class, 'sendTestEmail'])->name('forgot.password.post');

// // Reset Password
// Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
// Route::get('/test-email-view', function () {
//     return view('emails.booking.password', ['resetLink' => 'http://example.test/reset-link']);
// });
// Display the password reset request form (email input form)
// Route::get('/sendgrid-test-form', function () {
//     return view('sendgrid_test_form');
// })->name('sendgrid.test.form');

// Route::post('/sendgrid-test-email', [ForgotPasswordController::class, 'sendTestEmail'])->name('sendgrid.test.email');
// / Display the password reset request form
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Handle the form submission for sending the reset link email
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('password.update');








    // feedback routes
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/admin/feedbacks', [FeedbackController::class, 'index'])->name('admin.feedbacks');

// In your web.php


Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
Route::put('/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');

    // Route::put('/bookings/{booking}/update', [BookingController::class, 'update'])->name('bookings.update');

    Route::post('/notifications/subscribe', [FlightNotificationController::class, 'subscribe'])->name('notifications.signup');

// Using web.php
// // Route::get('/api/flights', [FlightController::class, 'apiIndex']);
// Route::get('/calendar', function() {
//     return view('home.calendar');
// });
Route::resource('flights', FlightController::class);
// Route::resource('schedules', ScheduleController::class);
Route::get('admin/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
Route::get('admin/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
Route::post('admin/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
Route::get('admin/schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
Route::put('admin/schedules/{schedule}', [ScheduleController::class, 'update'])->name('schedules.update');
Route::delete('admin/schedules/{schedule}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');
// Route::get('flight-schedules', [FlightScheduleController::class, 'index']);

// Route to display the flight schedules filter form
// Route::get('flight-schedules', [FlightScheduleController::class, 'index'])->name('flight-schedules.index');

// // Route to filter and display the flight schedules
// Route::post('flight-schedules/filter', [FlightScheduleController::class, 'filter'])->name('flight-schedules.filter');

Route::delete('feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
// Route::get('schedules/json', [ScheduleController::class, 'schedulesJson'])->name('schedules.json');
// Route::get('schedules', [FlightScheduleController::class, 'userSchedules'])->name('schedules.user');
// Route::get('/api/flights', [FlightScheduleController::class, 'apiIndex']);
// Route::get('/calendar', [FlightScheduleController::class, 'index'])->name('calendar.index');
// Schedule routes
// Route::get('/schedules', [FlightScheduleController::class, 'index'])->name('schedules.index');
// Route::get('/', [ScheduleController::class, 'showHome'])->name('home');
Route::get('/schedul', [FlightScheduleController::class, 'index'])->name('flight-schedules.index');
Route::get('/', [FlightController::class, 'create'])->name('home.index');
