{{-- partials/flightBookingsPartial.blade.php --}}

@if(isset($flight))
    <h3>Bookings for Flight {{ $flight->flight_number }}</h3>
    <p>Total Bookings: {{ $flight->bookings->count() }}</p>

    {{-- Display all bookings and passengers here --}}
    {{-- ... --}}
@endif
