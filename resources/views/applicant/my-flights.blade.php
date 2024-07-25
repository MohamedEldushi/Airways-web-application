


<x-dashboard-applicant>




<div class="container">
    <nav style="margin-left: 90px" aria-label="breadcrumb ">
        <ol class="breadcrumb mt-3 mx-5">
          <li class="breadcrumb-item mx-2"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Details</a></li>
          <li class="breadcrumb-item active" aria-current="page">Address</li>
        </ol>
      </nav>

    <div style="width: 80%" class="row mx-auto  align-items-left py-3">
        <div class="row   mt-5 justify-content-center">
            <div class="col-md-12 ">
                <div class="card  shadow rounded-4">
                    <div style="background-color: #262D61" class="card-header  rounded-top-4 text-light text-left  p-3 ">
                        <h5>My flights</h5>
                    </div>
                   <div class="card-body py-4 text-center">
                    {{--      <div class="table-responsive">
                            <h6 class="text-dark text-start "><span style="color: #374296">Istanbul</span> to <span style="color: #374296">New York</span> on Saturday, November 21</h6>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>

                                        <td>


                                            <p class="fw-normal">20:10</p>
                                            <p class="fw-light">IST</p>
                                            <p class="fw-light">Istanbul</p>
                                        </td>
                                        <td>


                                            <p class="fw-normal">11:10</p>
                                            <p class="fw-light">JFK</p>
                                            <p class="fw-light">New York</p>
                                        </td>
                                        <td >
                                            <p class="fw-normal mt-3">Flight duration</p>
                                            <p class="fw-light">20h 5m</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mt-3">Date</p>
                                            <p class="fw-light">21/11/2023</p>
                                        </td>
                                        <td>
                                            <p style="font-size: 14px" class="fw-normal mt-5">ECONOMY Economy Semi-Flexible</p>
                                        </td>
                                        <td>
                                            <p class="fw-normal mt-3">Price</p>
                                            <p class="fw-light">$1,382</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                        {{-- <div class="container mt-4">
                            <h5 class="card-title mb-4" style="color: #374296;">Istanbul > New York <span class="text-muted">Sat, 24 Nov 2023</span></h5>

                            <div class="card shadow-sm ">
                                <div class="card-body">
                                    <div class="row">
                                        <div style="margin-left:-25px" class="col-md-2 text-center">
                                            <h6>20:10</h6>
                                            <span class="badge bg-primary">IST</span>
                                            <div>Istanbul</div>
                                        </div>
                                        <div class="col-md-1 text-center">
                                            <svg class="bi bi-arrow-right-short" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1H.5A.5.5 0 0 1 0 8z"/>
                                            </svg>
                                        </div>
                                        <div  class="col-md-2 text-center">
                                            <h6>11:10</h6>
                                            <span class="badge bg-primary">JFK</span>
                                            <div>New York</div>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div>Flight duration</div>
                                            <strong>20h 5m</strong>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div>Date</div>
                                            <strong>21/11/2023</strong>
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div>Class</div>
                                            <strong>Economy Semi-Flexible</strong>
                                        </div>

                                    <div class="col-md-1   text-center">
                                            <div>Price</div>
                                            <strong>$1,382</strong>
                                        </div>
                                    </div>
                                        {{-- <div class="col text-start">
                                            <button class="btn btn-outline-primary">Change Flight</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="container mt-4">
                            @if($flights->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    There are no flight tickets booked.
                                </div>
                            @else
                                @foreach($flights as $flight)
                                    <h5 class="card-title mb-4" style="color: #374296;">{{ $flight->departureCity }} > {{ $flight->arrivalCity }} <span class="text-muted">{{ $flight->date }}</span></h5>

                                    <div class="card shadow-sm ">
                                        <div class="card-body">
                                            <div class="row">
                                                <div style="margin-left:-25px" class="col-md-2 text-center">
                                                    <h6>{{ $flight->departureTime }}</h6>
                                                    <span class="badge bg-primary">{{ $flight->departureCode }}</span>
                                                    <div>{{ $flight->departureCity }}</div>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <!-- Your SVG arrow here -->
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <h6>{{ $flight->arrivalTime }}</h6>
                                                    <span class="badge bg-primary">{{ $flight->arrivalCode }}</span>
                                                    <div>{{ $flight->arrivalCity }}</div>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Flight duration</div>
                                                    <strong>{{ $flight->duration }}</strong>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Date</div>
                                                    <strong>{{ $flight->date }}</strong>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Class</div>
                                                    <strong>{{ $flight->class }}</strong>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <div>Price</div>
                                                    <strong>${{ $flight->price }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div> --}}
<style>
.booking-cancelled {
    background-color: #f8d7da8c; /* A lighter shade of red */
    border-left: 5px solid #dc3545; /* A strong red border on the left */
    color: #721c24; /* Dark red text for better readability */
}
.booking-confirmed {
    background-color: #d7e9f855; /* A lighter shade of red */
    border-left: 5px solid #4e35dc; /* A strong red border on the left */
    color: #010002; /* Dark red text for better readability */
}
.offcanvas-header {
    /* background-color: #0057b383; */
    color: #fff;
}

.offcanvas-title {
    margin: 0;
    color: #fff;
}

.offcanvas-body {
    font-size: 14px;
}

.flight-info-container {
    display: flex;
    align-items: center;
    justify-content: space-around;
    text-align: center;
}.btn-link {
    font-size: 14px; /* Ensures the font size is consistent */
    padding: 0; /* Removes padding for a cleaner look */
    margin-left: 10px; /* Adds space between 'View Details' and 'Edit Flight' */
}

</style>
                        <div class="container mt-4  ">
                            @foreach($bookings as $booking)
                                <h5 class="card-title mb-2 mt-5" style="color: #374296;">
                                    {{-- if booking returnflight --}}



                                    {{ optional($booking->departureFlight->departureAirport)->city ?? 'N/A' }} >
                                    {{ optional($booking->departureFlight->arrivalAirport)->city ?? 'N/A' }}
                                    <span class="text-muted small">
                                        {{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('D, d M Y') : 'N/A' }}
                                        <a href="#" class="btn btn-link btn-sm p-0" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFlightDetails{{ $booking->id }}" aria-controls="offcanvasFlightDetails">
                                            View Details
                                        </a>

                                        <a href="#" class="btn btn-link btn-sm p-0" role="button" data-bs-toggle="modal" data-bs-target="#feedbackModal{{ $booking->id }}">
                                            Leave Feedback
                                        </a>

<!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal{{ $booking->id }}" tabindex="-1" aria-labelledby="feedbackModalLabel{{ $booking->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel{{ $booking->id }}">Leave Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Flight: {{ $booking->departureFlight->flight_number }}</p>
                <p>From: {{ optional($booking->departureFlight->departureAirport)->city ?? 'N/A' }} to {{ optional($booking->departureFlight->arrivalAirport)->city ?? 'N/A' }}</p>
                <p>Departure: {{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('D, d M Y H:i') : 'N/A' }}</p>
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Feedback</label>
                        <textarea class="form-control" id="feedback" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{--
                                        <div class="container">
                                            <h2>Edit Booking</h2>
                                            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                @if(isset($availableDepartureFlights) && !$availableDepartureFlights->isEmpty())
                                                <div class="mb-3">
                                                    <label for="departure_flight_id" class="form-label">Departure Flight</label>
                                                    <select class="form-select" id="departure_flight_id" name="departure_flight_id">
                                                        @foreach($availableDepartureFlights as $flight)
                                                            <option value="{{ $flight->id }}" {{ $flight->id == $booking->departure_flight_id ? 'selected' : '' }}>
                                                                {{ $flight->departure_time->format('Y-m-d H:i') }} - {{ $flight->arrival_time->format('Y-m-d H:i') }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif

                                        @if(isset($availableReturnFlights) && !$availableReturnFlights->isEmpty())
                                        <div class="mb-3">
                                            <label for="return_flight_id" class="form-label">Return Flight</label>
                                            <select class="form-select" id="return_flight_id" name="return_flight_id">
                                                @foreach($availableReturnFlights as $flight)
                                                    <option value="{{ $flight->id }}" {{ ($booking->return_flight_id == $flight->id) ? 'selected' : '' }}>
                                                        {{ $flight->departure_time->format('Y-m-d H:i') }} - {{ $flight->arrival_time->format('Y-m-d H:i') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    {{-- @else
                                        <div class="mb-3">
                                            <label for="return_flight_id" class="form-label">Return Flight</label>
                                            <select class="form-select" id="return_flight_id" disabled>
                                                <option>No return flights available</option>
                                            </select>
                                        </div>
                                    @endif



                                                <!-- Departure Class -->
                                                <div class="mb-3">
                                                    <label for="departure_class" class="form-label">Class</label>
                                                    <select class="form-select" id="departure_class" name="departure_class">
                                                        <option value="economy" {{ $booking->departure_class == 'economy' ? 'selected' : '' }}>Economy</option>
                                                        <option value="business" {{ $booking->departure_class == 'business' ? 'selected' : '' }}>Business</option>
                                                        <option value="first" {{ $booking->departure_class == 'first' ? 'selected' : '' }}>First Class</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Booking</button>
                                            </form>
                                        </div> --}}

                                     {{-- <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            var editButtons = document.querySelectorAll('button[data-bs-toggle="modal"]');
                                            editButtons.forEach(function (button) {
                                                button.addEventListener('click', function () {
                                                    var bookingId = this.getAttribute('data-bs-target').replace('#editFlightModal', '');
                                                    var url = `/api/flights/getTimes/${bookingId}`;
                                                    fetch(url)
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        var departureSelect = document.querySelector('#departureTime' + bookingId);
                                                        departureSelect.innerHTML = '';  // Clear previous options
                                                        data.departureTimes.forEach(function (time) {
                                                            var option = new Option(time.time, time.id);
                                                            departureSelect.appendChild(option);
                                                        });
                                                    })
                                                    .catch(error => console.error('Error loading flight times:', error));
                                                });
                                            });
                                        });
                                        </script> --}}





</span>

                                </h5>

                                <div class="card shadow-sm {{ $booking->status == 'cancelled' ? 'booking-cancelled' : 'booking-confirmed' }}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div style="margin-left:-25px" class="col-md-2 text-center">
                                                <h6>{{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('H:i') : 'N/A' }}</h6>
                                                <span class="badge bg-primary">{{ optional($booking->departureFlight->departureAirport)->code ?? 'N/A' }}</span>
                                                <div>{{ optional($booking->departureFlight->departureAirport)->city ?? 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <svg class="bi bi-arrow-right-short" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                                    <path fill-rule="evenodd" d="M0 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1H.5A.5.5 0 0 1 0 8z"/>
                                                </svg>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <h6>{{ $booking->departureFlight->arrival_time ? $booking->departureFlight->arrival_time->format('H:i') : 'N/A' }}</h6>
                                                <span class="badge bg-primary">{{ optional($booking->departureFlight->arrivalAirport)->code ?? 'N/A' }}</span>
                                                <div>{{ optional($booking->departureFlight->arrivalAirport)->city ?? 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div>Flight duration</div>
                                                <strong>{{ $booking->departureFlight->flightDuration() ?? 'N/A' }}</strong>
                                            </div>
                                            <!-- Trigger Button -->


                                            <div class="col-md-2 text-center">
                                                <div>Date</div>
                                                <strong>{{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('d/m/Y') : 'N/A' }}</strong>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <div>Class</div>
                                                <strong>
                                                    @if(!is_null($booking->departure_class))
                                                        {{ $booking->departure_class }}
                                                    @elseif(!is_null($booking->return_class))
                                                        {{ $booking->return_class }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </strong>
                                            </div>





                                            <div class="col-md-1 text-center">
                                                <div>Price</div>
                                                <strong>${{ $booking->departureFlight->price ?? 'N/A' }}</strong>
                                            </div>

                                          {{-- Show status --}}
<div class="col-md-1 text-center">
    <div>Status</div>
    {{-- Status with different color based on status --}}
    @if($booking->status == 'cancelled')
        <span class="badge bg-danger p-2  text-light text-center    ">{{ $booking->status }}</span>
    @elseif($booking->status == 'confirmed')
        <span class="badge bg-success p-2 text-light">{{ $booking->status }}</span>
    @elseif($booking->status == 'pending')
        <span class="badge bg-warning p-2 text-dark">{{ $booking->status }}</span>
    @elseif($booking->status == 'checked_in')
        <span class="badge bg-info text-light">{{ $booking->status }}</span>
    @else {{-- Default case for any other status --}}
        <span class="badge bg-secondary p-2 text-light">{{ $booking->status }}</span>
    @endif
</div>




<style></style>

<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFlightDetails{{ $booking->id }}" aria-labelledby="offcanvasFlightDetailsLabel">
    <div class="offcanvas-header">
        <h5 style="color: #374294; margin-top:20px" id="offcanvasFlightDetailsLabel" class="offcanvas-title">Flight Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">


                <h4 style="color: #374294; margin-top:50px ;font-size:30px;" class="offcanvas-title  " id="offcanvasWithBothOptionsLabel">Departure Ticket</h4>
                <h5 style="color: rgb(197, 174, 57) ; margin-top:30px" class="text-start mb-3">{{ $booking->departureFlight->departureAirport->city }} to {{ $booking->departureFlight->arrivalAirport->city }}</h5>


                 <p class="text-start fw-light "> {{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('D, d M Y') : 'N/A' }}</p>

        <div class="d-flex ">

            <p >{{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('H:i') : 'N/A' }}</p>

            {{-- <p style="font-size: 15px" class="text-start mx-3 ">{{ $$booking->flight->departureAirport->city }}<br>{{ $$booking->flight->departureAirport->name }} ({{ $$booking->departureFlight->arrivalAirport->code }})</p> --}}

            {{--show departure city --}}
            {{-- departure airport --}}
            <p style="font-size: 15px" class="text-start
            mx-3 ">{{ $booking->departureFlight->departureAirport->city }}<br>{{ $booking->departureFlight->departureAirport->name }} ({{ $booking->departureFlight->departureAirport->code }})</p>



        </div>







     <div style="  height: 100px;
     width: 1px;
     background-color: black;
     margin-bottom:30px" class="vertical-line mx-3">
     </div>


   <div class="d-flex justify-content-between">

       <p>{{ $booking->departureFlight->arrival_time->format('H:i') }}</p>

         <p style="font-size: 15px" class="text-start mx-3">{{ $booking->departureFlight->arrivalAirport->city }}  <br> {{ $booking->departureFlight->arrivalAirport->name }} ({{ $booking->departureFlight->arrivalAirport->code }})</p>

   </div>


      <hr class="mx-0 my-0 mt-4">


        @if($booking->returnFlight)
        <h4 style="color: #374294; margin-top:30px ; font-size:30px;" class="offcanvas-title  " id="offcanvasWithBothOptionsLabel">Return Ticket</h4>
        <h5 style="color: rgb(197, 174, 57) ; margin-top:30px" class="text-start mb-3">{{ optional($booking->returnFlight->departureAirport)->city ?? 'N/A' }} to {{ optional($booking->returnFlight->arrivalAirport)->city ?? 'N/A' }}</h5>


                 <p class="text-start fw-light "> {{ $booking->departureFlight->departure_time ? $booking->departureFlight->departure_time->format('D, d M Y') : 'N/A' }}</p>

                                <div class="d-flex ">

                                    <p >{{ $booking->returnFlight->departure_time ? $booking->returnFlight->departure_time->format('H:i') : 'N/A' }}</p>
                                    {{-- <p style="font-size: 15px" class="text-start mx-3 ">{{ $$booking->returnFlight->departureAirport->city }}<br>{{$booking->returnFlight->departureAirport->name }} ({{ $booking->returnFlight->arrivalAirport->code }})</p> --}}


                                        {{--show departure city --}}
                                        {{-- departure airport --}}
                                        <p style="font-size: 15px" class="text-start
                                        mx-4 ">{{ $booking->returnFlight->departureAirport->city }}<br>{{ $booking->returnFlight->departureAirport->name }} ({{ $booking->returnFlight->departureAirport->code }})</p>

                            </div>


                <div style="  height: 100px;
                width: 1px;
                background-color: black;
                margin-bottom:30px" class="vertical-line mx-3">
                </div>


                <div class="d-flex justify-content-between">

                    <p>{{ $booking->returnFlight->arrival_time->format('H:i') }}</p>
                    {{-- <p style="font-size: 15px" class="text-start me-3 ">{{ $$booking->returnFlight->arrivalAirport->city }}  <br> {{ $$booking->returnFlight->arrivalAirport->name }} ({{ $$booking->returnFlight->arrivalAirport->code }})</p> --}}


                        <p style="font-size: 15px" class="text-start me-5">{{ $booking->returnFlight->arrivalAirport->city }}  <br> {{ $booking->returnFlight->arrivalAirport->name }} ({{ $booking->returnFlight->arrivalAirport->code }})</p>


                </div>

                @endif

             <hr class="mx-0 my-0 mt-4 mb-1">
    <!-- Passenger Information -->
                <div class="passenger-information mb-4">
                    <h6 style="color: #374294; margin-top:20px ; font-size:20px;" class="offcanvas-title  " class="mb-3">Passenger Information</h6>
                            @foreach($booking->passengers as $passenger)
                            <h6 style=" font-size:15px;margin-top:30px" class="text-start mb-3" >Passenger Name: <span style="color: rgb(0, 0, 0) ;" class="fw-normal">{{ $passenger->first_name }} {{ $passenger->last_name }} </span></h6>
                            <h6 style=" font-size:15px;margin-top:30px" class="text-start mb-3">Passport Number: <span style="color: rgb(0, 0, 0) ;" class="fw-normal">{{ $passenger->passport_number }}</span></h6>
                            @endforeach
                            <!-- Add more passenger details as needed -->
                </div>
            <hr class="mx-0 my-0 ">

                <!-- Other Information -->
                <div class="other-information ">
                    <h6 style="color: #374294; margin-top:20px ; font-size:20px;" class="offcanvas-title  " >Additional Information</h6>
                    <h6 style=" font-size:15px;margin-top:30px" class="text-start mb-3">Email: <span style="color: rgb(0, 0, 0) ;" class="fw-normal"> {{ $booking->email }}</span></h6>
                    <h6 style=" font-size:15px;margin-top:30px" class="text-start mb-3">Phone Number: <span style="color: rgb(0, 0, 0) ;" class="fw-normal">{{ $booking->phone_number }}</span></h6>
                    <!-- Additional details and possibly a cancellation button -->
                </div>

</div>
</div>


                                        </div>
                                    </div>
                                </div>









                                {{-- <div class="modal fade" id="editFlightModal{{ $booking->id }}" tabindex="-1" aria-labelledby="editFlightModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editFlightModalLabel">Edit Flight Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <!-- Departure Time Dropdown -->
                                                    <div class="form-group">
                                                        <label for="departureTime{{ $booking->id }}">Departure Time</label>
                                                        <select class="form-control" id="departureTime{{ $booking->id }}">
                                                            <!-- Options will be loaded dynamically -->
                                                        </select>
                                                    </div>
                                                    <!-- Return Time Dropdown -->
                                                    <div class="form-group">
                                                        <label for="returnTime{{ $booking->id }}">Return Time</label>
                                                        <select class="form-control" id="returnTime{{ $booking->id }}">
                                                            <!-- Options will be loaded dynamically -->
                                                        </select>
                                                    </div>
                                                    <!-- Class Type Dropdown -->
                                                    <div class="form-group">
                                                        <label for="class{{ $booking->id }}">Class</label>
                                                        <select class="form-control" id="class{{ $booking->id }}">
                                                            <option>Economy</option>
                                                            <option>Business</option>
                                                            <option>First Class</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            @endforeach



                        </div>

















                                    {{-- @if($booking->returnFlight)

                                    {{ $booking->returnFlight->departureAirport->name }} ({{ $booking->returnFlight->departureAirport->code }}) >
                                    {{ $booking->returnFlight->arrivalAirport->name }} ({{ $booking->returnFlight->arrivalAirport->code }})
                                    {{ optional($booking->departureFlight->departureAirport)->city ?? 'N/A' }} >
                                    {{ optional($booking->departureFlight->arrivalAirport)->city ?? 'N/A' }}
                                    <span class="text-muted
                                    ">{{ $booking->returnFlight->departure_time->format('D, d M Y') }}</span>
                                </h5>

                                    @endif --}}









































                        {{-- <div class="container mt-4  ">
                            @foreach($bookings as $booking)
                                <h5 class="card-title mb-2 mt-5" style="color: #374296;">
                                    {{ optional($booking->returnFlight->departureAirport)->city ?? 'N/A' }} >
                                    {{ optional($booking->returnFlight->arrivalAirport)->city ?? 'N/A' }}
                                    <span class="text-muted">
                                        {{ $booking->returnFlight->departure_time ? $booking->returnFlight->departure_time->format('D, d M Y') : 'N/A' }}
                                             <a style="font-size: 14px" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFlightDetails{{ $booking->id }}" aria-controls="offcanvasFlightDetails">
                                                View Details
                                            </a>
                                    </span>
                                </h5>

                                <div class="card shadow-sm {{ $booking->status == 'cancelled' ? 'booking-cancelled' : 'booking-confirmed' }}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div style="margin-left:-25px" class="col-md-2 text-center">
                                                <h6>{{ $booking->returnFlight->departure_time ? $booking->returnFlight->departure_time->format('H:i') : 'N/A' }}</h6>
                                                <span class="badge bg-primary">{{ optional($booking->returnFlight->departureAirport)->code ?? 'N/A' }}</span>
                                                <div>{{ optional($booking->returnFlight->departureAirport)->city ?? 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <svg class="bi bi-arrow-right-short" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                                    <path fill-rule="evenodd" d="M0 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1H.5A.5.5 0 0 1 0 8z"/>
                                                </svg>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <h6>{{ $booking->returnFlight->arrival_time ? $booking->returnFlight->arrival_time->format('H:i') : 'N/A' }}</h6>
                                                <span class="badge bg-primary">{{ optional($booking->returnFlight->arrivalAirport)->code ?? 'N/A' }}</span>
                                                <div>{{ optional($booking->returnFlight->arrivalAirport)->city ?? 'N/A' }}</div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div>Flight duration</div>
                                                <strong>{{ $booking->returnFlight->flightDuration() ?? 'N/A' }}</strong>
                                            </div>
                                            <!-- Trigger Button -->


                                            <div class="col-md-2 text-center">
                                                <div>Date</div>
                                                <strong>{{ $booking->returnFlight->departure_time ? $booking->returnFlight->departure_time->format('d/m/Y') : 'N/A' }}</strong>
                                            </div>
                                            <div class="col-md-1 text-center">
                                                <div>Class</div>
                                                <strong>
                                                    @if(!is_null($booking->departure_class))
                                                        {{ $booking->departure_class }}
                                                    @elseif(!is_null($booking->return_class))
                                                        {{ $booking->return_class }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </strong>
                                            </div>





                                            <div class="col-md-1 text-center">
                                                <div>Price</div>
                                                <strong>${{ $booking->returnFlight->price ?? 'N/A' }}</strong>
                                            </div>
                                          {{-- Show status --}}






                        {{-- <div class="container mt-4">
                            @if($bookings->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    There are no tickets booked.
                                </div>
                            @else
                                @foreach($bookings as $booking)
                                    <h5 class="card-title mb-4" style="color: #374296;">
                                        {{ $booking->departureFlight->departureAirport->city }} >
                                        {{ $booking->departureFlight->arrivalAirport->city }}
                                        <span class="text-muted">{{ $booking->departureFlight->departure_time->format('D, d M Y') }}</span>
                                    </h5>

                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <div class="row">
                                                <div style="margin-left:-25px" class="col-md-2 text-center">
                                                    <h6>{{ $booking->departureFlight->departure_time->format('H:i') }}</h6>
                                                    <span class="badge bg-primary">{{ $booking->departureFlight->departureAirport->code }}</span>
                                                    <div>{{ $booking->departureFlight->departureAirport->city }}</div>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <svg class="bi bi-arrow-right-short" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 0 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                                        <path fill-rule="evenodd" d="M0 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1H.5A.5.5 0 0 1 0 8z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <h6>{{ $booking->departureFlight->arrival_time->format('H:i') }}</h6>
                                                    <span class="badge bg-primary">{{ $booking->departureFlight->arrivalAirport->code }}</span>
                                                    <div>{{ $booking->departureFlight->arrivalAirport->city }}</div>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Flight duration</div>
                                                    {{-- <strong>{{ $booking->departureFlight->flightDuration() }}</strong> --}}
                                                {{-- </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Date</div>
                                                    <strong>{{ $booking->departureFlight->departure_time->format('d/m/Y') }}</strong>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                    <div>Class</div>
                                                    <strong>{{ $booking->class }}</strong>
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <div>Price</div>
                                                    <strong>${{ $booking->price }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>  --}}


                        {{-- <h6 class="fw-bold text-center mt-2 mb-3">New York to Istanbul <span class="fw-light">Saturday, November 21</span></h6> --}}


                            {{-- <div class="row border rounded mx-1">

                                <div class="col-md-2 ">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Duration</h6>
                                            <p class="fw-light">20h 5m</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0 ">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Departure</h6>
                                            <p class="fw-light">20:10</p>
                                            <p class="fw-light">IST (Istanbul)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Arrival</h6>
                                            <p class="fw-light">11:10</p>
                                            <p class "fw-light">JFK (New York)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Date</h6>
                                            <p class="fw-light">21/11/2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <h6 class="fw-bold">Ticket Class</h6>
                                            <p class="fw-light">ECONOMY Economy Semi-Flexible</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <div class="card border-0">
                                        <div class="card-body text-center">
                                            <h6 class="fw-bold">Price</h6>
                                            <p class="fw-light">$1,382</p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

{{--
                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col-md-12 text-center">
                                        <h4 class="mb-4">Flight Details</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-bold">New York to Istanbul</h6>
                                                <p class="fw-light">Saturday, November 21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-normal">Departure</h6>
                                                <p class="fw-light">20:10</p>
                                                <p class="fw-light">IST (Istanbul)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-normal">Arrival</h6>
                                                <p class="fw-light">11:10</p>
                                                <p class="fw-light">JFK (New York)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-normal">Flight Duration</h6>
                                                <p class="fw-light">20h 5m</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-normal">Date</h6>
                                                <p class="fw-light">21/11/2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="fw-normal">Ticket Class</h6>
                                                <p class="fw-light">ECONOMY Economy Semi-Flexible</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h6 class="fw-normal">Price</h6>
                                                <p class="fw-light">$1,382</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}



                        </div>




                    </div>


                </div>
            </div>
        </div>
    </div>
</div>



</x-dashboard-applicant>
