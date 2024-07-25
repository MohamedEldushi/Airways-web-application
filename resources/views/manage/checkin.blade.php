@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Check-In</h2>
    <form action="{{ route('booking.check-in') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="bookingReference" class="form-label">Booking Reference</label>
            <input type="text" class="form-control" id="bookingReference" name="booking_reference" required>
        </div>
        <div class="mb-3">
            <label for="passengerName" class="form-label">Passenger Name</label>
            <input type="text" class="form-control" id="passengerName" name="passenger_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Check-In</button>
    </form>
</div>
@endsection
