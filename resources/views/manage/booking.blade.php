<x-status>


{{--
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Manage Booking</h2>
    @if($booking)
        <div class="card">
            <div class="card-header">
                Booking Reference: {{ $booking->booking_reference }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Passenger Information</h5>
                @foreach($booking->passengers as $passenger)
                    <p>Passenger Name: {{ $passenger->first_name }} {{ $passenger->last_name }}</p>
                    <!-- Adjust above as per your passenger's table columns -->
                @endforeach
                <p>Email: {{ $booking->email }}</p>
                <p>Phone Number: {{ $booking->phone_number }}</p>
                <h5>Flight Information</h5>
                <p>Departure Flight: {{ $booking->departureFlight->flight_number ?? 'N/A' }}</p>
                <p>Return Flight: {{ $booking->returnFlight->flight_number ?? 'N/A' }}</p>
                <!-- Add more details as needed -->

                <!-- Cancellation Button -->
                <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Cancel Booking</button>
                </form>

            </div>
        </div>
    @endif
    --}}
   {{-- <style>
   .containerx {
    padding: 0 15px;
    margin-top: 60px;
    margin-bottom: 60px;

}
h2{
    margin-top: 80px;
}

.alert {
    border-radius: 0.25rem;
}

.card {
    overflow: hidden; /* Ensures children do not overflow the rounded corners */
    margin-top: 2rem;
}

.card-header {
    font-size: 1.25rem;
    font-weight: 500;
}

.card-body {
    padding: 2rem;
    background-color: #f9f9f9; /* Light background to differentiate from the header */
}

.card-title {
    font-size: 1.2rem;
    font-weight: 500;
    color: #333;
}

.btn-danger {
    font-weight: 500;
    padding: 0.75rem 1.5rem;
}

/* Enhanced button styles for actions */
.btn-danger {
    background-color: #dc3545;
    border: none;
    transition: background-color 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #c82333;
}

@media (max-width: 768px) {
    .card-header, .card-title {
        font-size: 1rem;
    }
    .card-body {
        padding: 1rem;
    }
}

</style>
<div class="containerx  mx-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="text-center mb-4 ">Manage Your Booking</h2>

            <!-- Booking Information -->
            @if($booking)
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        Booking Reference: <strong>{{ $booking->booking_reference }}</strong>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title mb-4">Passenger Information</h5>
                            </div>
                        </div>
                        @foreach($booking->passengers as $passenger)
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p><strong>Passenger Name:</strong> {{ $passenger->first_name }} {{ $passenger->last_name }}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Email:</strong> {{ $booking->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Phone Number:</strong> {{ $booking->phone_number }}</p>
                            </div>
                        </div>

                        <h5 class="card-title mb-4">Flight Information</h5>
                        <p><strong>Departure Flight:</strong> {{ $booking->departureFlight->flight_number ?? 'N/A' }}</p>
                        <p><strong>Return Flight:</strong> {{ $booking->returnFlight->flight_number ?? 'N/A' }}</p>

                        <!-- Cancellation Button -->
                        <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-4">Cancel Booking</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="alert alert-warning text-center">
                    No booking information found. Please check your booking reference and try again.
                </div>
            @endif
        </div>
    </div>
</div> --}}







{{-- <style>.container {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.card-header {
    font-size: 1.5rem;
    font-weight: 600;
}

.card {
    border-radius: 0.75rem;
    overflow: hidden;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 500;
}

h6 {
    font-size: 1rem;
    color: #333;
    font-weight: 500;
}

.btn-danger {
    font-weight: 500;
    padding: 0.75rem 1.25rem;
}

.alert-success {
    border-radius: 0.5rem;
}

/* Add a transition for hover effects */
.btn-danger {
    transition: background-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.btn-danger:hover {
    background-color: #c82333; /* Darken button on hover */
    box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.5);
}

@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }

    .card-header {
        font-size: 1.25rem;
    }
}
</style>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
            @endif

            <div class="card border-0 shadow-lg">
                <div class="card-header bg-primary text-white">
                    Manage Your Booking
                </div>
                @if($booking)
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Booking Reference: {{ $booking->booking_reference }}</h5>
                    <div class="card-text">
                        <div class="mb-3">
                            <h6>Passenger Information</h6>
                            @foreach($booking->passengers as $passenger)
                            <p>{{ $passenger->first_name }} {{ $passenger->last_name }}</p>
                            @endforeach
                        </div>
                        <div class="mb-3">
                            <h6>Flight Information</h6>
                            <p>Departure: {{ $booking->departureFlight->flight_number ?? 'N/A' }}</p>
                            <p>Return: {{ $booking->returnFlight->flight_number ?? 'N/A' }}</p>
                        </div>
                        <div class="mb-3">
                            <h6>Contact Information</h6>
                            <p>Email: {{ $booking->email }}</p>
                            <p>Phone: {{ $booking->phone_number }}</p>
                        </div>
                        <div class="text-center mt-4">
                            <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancel Booking</button>
                            </form>
                                               </div>
                    </div>
                </div>
                @else
                <div class="card-body p-4 text-center">
                    <p class="mb-0">No booking information found. Please check your booking reference and try again.</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

--}}
<style>.containerx {
    max-width: 800px;
    margin: auto;
    margin-top: 60px;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

/* h2 {
    color: #495057;
}

h5 {
    color: #495057;
} */

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
}
</style>
<div class="containerx py-5">
    <!-- Success Message Alert -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Manage Booking Section -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="bg-light shadow rounded-3 ">
                <div class="p-4 p-md-5">
                    <h2 style="color: #495057" class="text-center mb-4 fw-bold">Manage Your Booking</h2>

                    @if($booking)
                    <div class="border-top pt-4 mt-4">
                        <h5 style="color: #495057" class="fw-bold">Booking Reference:</h5>
                        <p class="mb-2 text-primary">{{ $booking->booking_reference }}</p>

                        <h5 style="color: #495057" class="fw-bold">Passenger Information:</h5>
                        <ul class="list-unstyled">
                            @foreach($booking->passengers as $passenger)
                            <li class="mb-1">{{$passenger->title}}, {{ $passenger->first_name }} {{ $passenger->last_name }}</li>
                            @endforeach
                        </ul>

                        <h5 style="color: #495057" class="fw-bold">Flight Information: <span class="fw-normal ">from <span class="text-primary">{{$booking->departureFlight->departureAirport->city}}</span> to  <span class="text-primary">{{$booking->departureFlight->ArrivalAirport->city}}</span></span></h5>
                        <p>Flight Number: {{ $booking->departureFlight->flight_number ?? 'N/A' }}</p>
                        {{-- <p><strong>Departure Flight:</strong> {{ $booking->departureFlight->flight_number ?? 'N/A' }}</p>
                        <p><strong>Departure Airport:</strong> {{ $booking->departureFlight->departureAirport->name ?? 'N/A' }}</p> --}}
                       <p>Departure Time:  {{ $booking->departureFlight->departure_time->format('d M Y H:i') ?? 'N/A' }}</p>
                        {{-- <p><strong>Arrival Airport:</strong> {{ $booking->departureFlight->arrivalAirport->name ?? 'N/A' }}</p> --}}
                        <p>Arrival Time: {{ $booking->departureFlight->arrival_time->format('d M Y H:i') ?? 'N/A' }}</p>
                       {{-- <p><strong>Gate:</strong> {{ $booking->departureFlight->gate ?? 'N/A' }}</p>
                        <p><strong>Seat:</strong> {{ $booking->departureFlight->seat ?? 'N/A' }}</p> --}}
                        @if($booking->returnFlight)
                        <div class="flight-detail">
                            <h5 style="color: #495057" class="fw-bold">Return Flight Information: <span class="fw-normal ">from <span class="text-primary">{{$booking->returnFlight->departureAirport->city}}</span> to  <span class="text-primary">{{$booking->returnFlight->ArrivalAirport->city}}</span></span></h5>
                            <p>Flight Number: {{ $booking->returnFlight->flight_number }}</p>
                            <p>Departure Time:  {{ $booking->returnFlight->departure_time->format('d M Y H:i') }}</p>
                            <p>Arrival Time: {{ $booking->returnFlight->arrival_time->format('d M Y H:i') }}</p>
                            <!-- More return flight details... -->
                        </div>
                    @endif
                        <h5 style="color: #495057" class="fw-bold">Contact Information:</h5>
                        <p>Email: {{ $booking->email }}</p>
                        <p>Phone: {{ $booking->phone_number }}</p>
                    </div>

                    <div class="text-center mt-4">
                        <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancel Booking</button>
                        </form>                    </div>
                    @else
                    <div class="text-center mt-4">
                        <p>No booking information found. Please check your details and try again.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



</x-status>
