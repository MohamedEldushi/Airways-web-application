

    {{-- <h2>Bookings for Flight: {{ $flight->flight_number }}</h2>
    @foreach($bookings as $booking)
        <p>Booking ID: {{ $booking->id }}</p>
        <p>Departure: {{ $booking->departureFlight->departureAirport->name }} - Arrival: {{ $booking->departureFlight->arrivalAirport->name }}</p>
        <p>Class: {{ $booking->departure_class }} - Price: ${{ $booking->departure_price }}</p>
        @if($booking->returnFlight)
            <p>Return Departure: {{ $booking->returnFlight->departureAirport->name }} - Arrival: {{ $booking->returnFlight->arrivalAirport->name }}</p>
            <p>Return Class: {{ $booking->return_class }} - Return Price: ${{ $booking->return_price }}</p>
        @endif
        <h4>Passengers:</h4>
        @foreach($booking->passengers as $passenger)
            <div>Name: {{ $passenger->title }}, {{$passenger->first_name}} {{$passenger->last_name}}</div>
            <div>Passport Number: {{ $passenger->passport_number }}</div>
            <!-- Include other passenger details as needed -->
        @endforeach
        <hr>
    @endforeach --}}
    {{-- admin/bookings.blade.php --}}


    {{-- flightReservations.blade.php --}}



    <!-- flight-passengers.blade.php -->
    <x-dashboard-admin>





        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"> --}}


<style>/* Base Modal Enhancements */
    .modal-content {
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        border: none;
    }

    .modal-header {
        background-color: #495057; /* Darker shade for a more professional look */
        color: #fff;
        border-bottom: none;
        border-radius: 15px 15px 0 0;
    }

    .modal-header .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
        background-color: #343a40;
        border-radius: 50%;
        padding: 2px 6px;
    }
    .btn-close {
    background: none;
    border: none;
    font-size: 1.4rem; /* Adjust the size as needed */
    color: #fff; /* White color to stand out on the primary background */
    opacity: 1; /* Remove the default opacity */
}

.btn-close:hover {
    color: #adb5bd; /* Lighten the color on hover for a nice effect */
}

/* Close button position adjustment for better alignment */
.modal-header .btn-close {
    position: absolute;
    right: 1rem; /* Adjust as necessary for proper alignment */
    top: 1rem;
    z-index: 2; /* Ensure it's above other elements */
}

    /* Card Enhancements with Neumorphism */
    .card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 15px;
        box-shadow: 8px 8px 15px #bebebe,
                    -8px -8px 15px #ffffff;
        overflow: hidden;
    }

    .card-body {
        padding: 20px;
        transition: background-color 0.3s ease;
    }

    .card:hover .card-body {
        background-color: #e9ecef;
    }

    .card-subtitle {
        color: #6c757d; /* Subdued text color */
        font-weight: 600;
    }

    .card-text strong {
        color: #343a40; /* Strong contrast for key details */
    }

    /* Neumorphism for Flight Information Card */
    .card.border-left-0.border-right-0.border-top-0 {
        background-color: #e2e6ea; /* Lighter shade for distinction */
        box-shadow: inset 5px 5px 10px #c8ccd0,
                    inset -5px -5px 10px #fcffff;
    }

    /* Enhanced Modal Dialog Appearance */
    .modal-dialog.modal-lg {
        max-width: 800px;
    }

    /* Custom Animations */
    .modal-header {
        animation: slideInDown 0.5s ease-out;
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-100%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }/* Close button styling */
    .passenger-count {
    font-size: 1.75rem; /* Sets the size of the font */
    color: #333; /* Dark grey color for the text */
    text-align: center; /* Centers the text */
    margin-top: 40px; /* Adds space to the top */
    margin-bottom: 20px; /* Adds space to the bottom */
}

.passenger-count .count {
    font-weight: bold; /* Makes the passenger count bold */
    background-color: #007bff; /* Sets the background color */
    color: #fff; /* Sets the text color */
    padding: 5px 10px; /* Adds padding inside the background */
    border-radius: 5px; /* Rounds the corners of the background */
    box-shadow: 0 2px 4px rgba(0,0,0,0.2); /* Adds a subtle shadow to the background */
}

/* General styling for input groups */
.input-group {
    padding: 0.5rem;
    border-radius: 0.375rem;
    border: 1px solid #ced4da;
    background-color: #ffffff;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
}

/* Style for the form-select */
.form-select {
    border: none;
    box-shadow: none;
    border-radius: 0.375rem;
}

.form-select:focus {
    box-shadow: none;
    border-color: #80bdff;
}

/* Button styling */
.btn-primary {
    color: #ffffff;
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 0.375rem;
    padding: 0.375rem 0.75rem;
}

.btn-outline-primary {
    border-color: #007bff;
    color: #007bff;
    border-radius: 0.375rem;
    padding: 0.375rem 0.75rem;
}

.btn-outline-primary:hover {
    background-color: #007bff;
    color: #ffffff;
}

/* Icon styles for input group text */
.input-group-text {
    background-color: #e9ecef;
    border: none;
    border-radius: 0.375rem 0 0 0.375rem;
}

.bi-airplane, .bi-search {
    color: #495057;
}

/* Responsive margin adjustments */
@media (max-width: 768px) {
    .input-group {
        margin-bottom: 1rem;
    }
}


    </style>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
               <h2 class="card-title mb-4">Booking details</h2>

    <div class="container mt-5 col-md-11">
        {{-- <h2 class="text-center mb-4">Booking information</h2> --}}

        <div class="container my-5">
            <!-- Filter and Search Row -->
            <div class="container my-4">
                <div class="row align-items-end mb-3">
                    <!-- Flight Selection Form -->
                    <div class="col-md">
                        <form action="{{ route('admin.flight-passengers.list') }}" method="POST">
                            @csrf
                            <label for="flight" class="form-label">Select Flight:</label>
                            <div class="input-group">
                                <select name="flight_id" id="flight" class="form-select">
                                    <option selected>Choose a city...</option>
                                    {{-- <select name="flight_id" id="flight" class="form-select">
                                    <option selected>Choose...</option>
                                    @foreach($flights as $flight)
                                        <option value="{{ $flight->id }}">{{ $flight->flight_number }}</option>
                                    @endforeach
                                </select> --}}
                                    @foreach($flights as $flight)
                                        <!-- Assuming you have access to a city property that you want to display -->
                                        <option value="{{ $flight->id }}">{{ $flight->departureAirport->city }}</option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary">View Passengers</button>
                            </div>
                        </form>
                    </div>
                    <!-- Passenger Search Form -->
                    <div class="col-md">
                        <form action="{{ route('admin.flight-passengers.list') }}" method="GET">
                            <label for="search" class="form-label">Search Passengers:</label>
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" id="search" placeholder="Search by name, email...">
                                <button type="submit" class="btn btn-outline-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>



        @if(isset($passengers) && $passengers->count() > 0)
        <h3 class="passenger-count">Total Passengers: <span class="count">{{ $passengers->count() }}</span></h3>

        <ul class="list-group ">
            @foreach($passengers as $passenger)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $passenger->title }} {{ $passenger->first_name }} {{ $passenger->last_name }}
                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#passengerModal{{ $passenger->id }}">View Details</button>
                </li>
            @endforeach
        </ul>

        @foreach($passengers as $passenger)
        <div class="modal fade" id="passengerModal{{ $passenger->id }}" tabindex="-1" aria-labelledby="passengerModalLabel{{ $passenger->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="passengerModalLabel{{ $passenger->id }}">Passenger Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 card border-0">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-gray-500">Personal Information</h6>
                                <p class="card-text"><strong>Name:</strong> {{ $passenger->title }} {{ $passenger->first_name }} {{ $passenger->last_name }}</p>
                                <p class="card-text"><strong>Email:</strong> {{ $passenger->booking->email }}</p>
                                <p class="card-text"><strong>Phone Number:</strong> {{ $passenger->booking->phone_number }}</p>
                            </div>
                        </div>
                        <div class="mb-3 card border-0 bg-gray-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-gray-500">Flight Information</h6>
                                <p class="card-text"><strong>Flight Number:</strong> {{ optional($passenger->booking->departureFlight)->flight_number }}
                                    @if($passenger->booking->returnFlight)
                                        / {{ $passenger->booking->returnFlight->flight_number }}
                                    @endif
                                </p>
                                <p class="card-text"><strong>Departure:</strong> {{ optional($passenger->booking->departureFlight->departureAirport)->name }} at {{ optional($passenger->booking->departureFlight)->departure_time }}</p>
                                <p class="card-text"><strong>Arrival:</strong> {{ optional($passenger->booking->departureFlight->arrivalAirport)->name }} at {{ optional($passenger->booking->departureFlight)->arrival_time }}</p>
                                @if($passenger->booking->returnFlight)
                                    <p class="card-text"><strong>Return Flight Ticket:</strong> {{ $passenger->booking->returnFlight->flight_number }}</p>
                                    <p class="card-text"><strong>Departure (Return):</strong> {{ optional($passenger->booking->returnFlight->departureAirport)->name }} at {{ optional($passenger->booking->returnFlight)->departure_time }}</p>
                                    <p class="card-text"><strong>Arrival (Return):</strong> {{ optional($passenger->booking->returnFlight->arrivalAirport)->name }} at {{ optional($passenger->booking->returnFlight)->arrival_time }}</p>
                                @else
                                    <p class="card-text"><strong>Return Flight Ticket:</strong> No return flight booked</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <div class="alert alert-warning">No passengers found.</div>
    @endif

    </div>
{{--
    <script type="text/javascript">
        $(document).ready(function() {
            // This event triggers before the modal is shown
            $('.modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes

                // Update the modal's content for email and phone number
                var email = $('#email' + id).val();
                var phone = $('#phone' + id).val();

                $('#modalEmail' + id).text(email);
                $('#modalPhone' + id).text(phone);
            });
        });
        </script> --}}

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS for Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom scripts -->
    <script type="text/javascript">
 $(document).ready(function() {
            // This event triggers before the modal is shown
            $('.modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes

                // Update the modal's content for email and phone number
                var email = $('#email' + id).val();
                var phone = $('#phone' + id).val();

                $('#modalEmail' + id).text(email);
                $('#modalPhone' + id).text(phone);
            });
        });    </script>




</x-dashboard-admin>



