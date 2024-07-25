{{-- @if($booking->returnFlight)
    <div>
        <h3>Return Flight Details:</h3>
        <p>Flight Number: {{ $booking->returnFlight->flight_number }}</p>
        <p>Departure Airport: {{ $booking->returnFlight->departureAirport->name }}</p>
        <p>Arrival Airport: {{ $booking->returnFlight->arrivalAirport->name }}</p>
        <!-- Add more details as needed -->
    </div>
@endif --}}
{{-- <div class="container">
    <div class="alert alert-success" role="alert">
        Successfully booked! Check your email for ticket details.
    </div>
    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
</div> --}}

<div class="container">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <a href="/" class="btn btn-primary">Go Home</a>
</div>

