{{-- resources/views/booking/review.blade.php --}}
 {{-- Assume you have a main layout file --}}

<div class="container">
    <h1>Review Your Booking</h1>
    <div class="booking-summary">
        <h2>Flight Details</h2>
        <p><strong>Departure Flight:</strong> {{ $departureFlight->name }} ({{ $departureClassType }} Class)</p>
        <p><strong>Price:</strong> ${{ number_format($departurePrice, 2) }}</p>
        @if($returnFlight)
            <p><strong>Return Flight:</strong> {{ $returnFlight->name }} ({{ $returnClassType }} Class)</p>
            <p><strong>Price:</strong> ${{ number_format($returnPrice, 2) }}</p>
        @endif
        <h2>Passenger Details</h2>
        @foreach($passengers as $index => $passenger)
            <div class="passenger">
                <p><strong>Passenger {{ $index + 1 }}:</strong> {{ $passenger['title'] }} {{ $passenger['first_name'] }} {{ $passenger['last_name'] }}</p>
                <p><strong>Gender:</strong> {{ $passenger['gender'] }}</p>
                <!-- Add more passenger details as needed -->
            </div>
        @endforeach
        <h2>Total Price: ${{ number_format($totalPrice, 2) }}</h2>
    </div>
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        {{-- Include hidden fields for all data needed to create the booking --}}
        <button type="submit" class="btn btn-primary">Confirm Booking</button>
    </form>
</div>
