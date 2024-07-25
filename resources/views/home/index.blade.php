<x-home>


<style>
    .custom-button {
        background-color: #262D61 ;
        padding: 15px 70px;
            color: white;
            transition: background 0.3s ease-in-out;

        }

        .custom-button:hover {
            background: #cb9e23;
            color: white;}


            .milestone {
                background-color: #fffffff2;
    position: relative; /* Ensure this container is positioned relative to its normal position */
    z-index: 10; /* Higher than the image to sit on top */
    margin-top: -260px; /* Pulls the container up by 100px */
    /* Rest of your styling */
}
    </style>


<form action="{{ route('search.flights') }}" method="POST">
        @csrf

        <div class="row align-items-center py-5">





            </div>





   {{-- search section --}}
   <div   class="container  col-md-11 ">
    <div   class=" milestone shadow p-0 mx-5 mb-5 pb-2 col-md-11 mx-auto   rounded-5 text-center text-md-start ">
        <div class="d-flex flex-wrap ">
            <a style="background-color: #262d6100 ;border-radius:32px 0px 0px 0px" href="{{url('home/index')}}" class="btn p-3 rounded-5 text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-plane mx-2"></i> Book a flight
            </a>
            <a style="background-color: #262d61" href="{{ route('checkin') }}" class="text-light btn p-2 rounded-0 px-4 text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-check-circle mx-2"></i> Manage / Check in
            </a>

            <a style="background-color: #262d61 ;border-radius:0px 32px 0px 0px" href="{{ route('flightstatus') }}" class="text-light btn p-2 text-center col-12 col-md-4">
                <i class="fas fa-plane-arrival  mx-2 "></i> Flight status
            </a>
        </div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Booking Cancelled</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your booking has been cancelled successfully.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @if(session('success'))
  <script>
    $(document).ready(function() {
      $('#successModal').modal('show');
    });
  </script>
  @endif



    {{-- <div class="d-flex mt-4 mx-4 mb-4 p-0">
        <div class="form-check form-check-inline mx-4">
            <input class="fs-6 border-2 form-check-input" type="radio" name="trip_type" id="return_trip" value="return">
            <label class="fs-6 form-check-label" for="return_trip">Return</label>
        </div>
        <div class="form-check form-check-inline mx-3 col-sm-3">
            <input class="fs-6 form-check-input border-2" type="radio" name="trip_type" id="one_way_trip" value="one_way">
            <label class="fs-6 form-check-label" for="one_way_trip">One way</label>
        </div>

    </div> --}}

    <div class="d-flex mt-4 mx-4 mb-4 p-0">
        <div class="form-check form-check-inline mx-4">

        <input class="fs-6 border-2 form-check-input"  type="radio" name="trip_type" value="return" onchange="this.form.submit();" {{ session('trip_type') === 'return' ? 'checked' : '' }}>
        <label class="fs-6 form-check-label"  for="return">Return</label>
    </div>
    <div class="form-check form-check-inline mx-3 col-sm-3">

        <input class="fs-6 form-check-input border-2"  type="radio" name="trip_type" value="one_way" onchange="this.form.submit();" {{ session('trip_type') === 'one_way' ? 'checked' : '' }}>
        <label class="fs-6 form-check-label" for="one_way">One way</label>
    </div>
    </div>







    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-12 d-flex flex-wrap">
                <div class="form-floating mb-3 col-md-3 col-12">
                    <select class="form-select rounded-1 rounded-end-0 border-end-0" id="from_location_id" name="from_location_id">
                        <option value="" selected> Select</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }} - {{ $location->airport }}</option>
                        @endforeach
                    </select>

                    <label for="from_location_id">From</label>
                </div>
                <div class="form-floating mb-3 col-md-2 col-12">
                    <select class="form-select rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0"  id="to_location_id" name="to_location_id">
                        <option value="" selected>Select To</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }} - {{ $location->airport }}</option>
                        @endforeach
                    </select>
                    <label for="to_location_id">To</label>
                </div>

                <div class="col-md-2 col-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0" id="departureDate" name="departure_date" placeholder="Select departure date">
                        <label for="departureDate">Departure Date</label>
                    </div>
                </div>

                <div class="col-md-2 col-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-1 border-end-0 rounded-end-0 rounded-start-0 border-start-0" id="returnDate" name="return_date" placeholder="Select return date">
                        <label for="returnDate">Return Date</label>
                    </div>
                </div>

                <input type="hidden" name="adult_count" id="adultCountInput" value="1">
                <input type="hidden" name="child_count" id="childCountInput" value="0">
                <input type="hidden" name="infant_count" id="infantCountInput" value="0">
                <input type="hidden" name="class" id="classInput" value="economy">

                <div class="form-floating col-md-3   col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control dropdown-toggle rounded-1 border-end-1 rounded-start-0 border-start-0" id="passengerDropdown" data-bs-toggle="dropdown" aria-expanded="false" readonly>
                        <div class="dropdown-menu shadow border-0 rounded-4 my-2" style="height: 430px; width: 290px; background-color:#FFFFFF;" aria-labelledby="passengerDropdown">
                            <div class="passenger container">
                                <div class="row">
                                    <div class="pt-3 px-4">
                                        <h5 style="color: #262D61">Passenger</h5>
                                        <hr>
                                  <!-- Passenger Section for Adults -->
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div>
                                                    <h6 class="mb-0">Adults</h6>
                                                    <small>12+ years</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('adult', -1,event)">-</button>
                                                    <span class="mx-2" id="adultCount">1</span>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('adult', 1,event)">+</button>
                                                </div>
                                            </div>

                                            <!-- Passenger Section for Children -->
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div>
                                                    <h6 class="mb-0">Children</h6>
                                                    <small>2-11 years</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('child', -1,event)">-</button>
                                                    <span class="mx-2" id="childCount">0</span>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('child', 1,event)">+</button>
                                                </div>
                                            </div>

                                            <!-- Passenger Section for Infants -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="mb-0">Infants</h6>
                                                    <small>Under 2 years</small>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('infant', -1,event)">-</button>
                                                    <span class="mx-2" id="infantCount">0</span>
                                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="updatePassengerCount('infant', 1 ,event)">+</button>
                                                </div>
                                            </div>


                                        <h5 style="color: #262D61" class="mt-3">Class</h5>
                                        <hr>
                                        <!-- Class Selection -->
                                        <div class="mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="economy" checked onclick="updateClassSelection('economy')">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Economy Class
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="business" onclick="updateClassSelection('business')">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Business Class
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Confirm Button -->
                                        <div class="d-flex justify-content-center col-12">
                                            <button type="button" class="btn" style="background-color: #DAB03C; padding: 10px 75px; color: white;" id="confirmPassengerSelection" onclick="event.stopPropagation();">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="passengerDropdown">Passenger / Class</label>
                    </div>
                </div>






            </div>

        </div>
        <div class="d-flex col-sm-12 justify-content-end">
            <button class=" shadow  mx-1 my-1 rounded-5 text-light btn custom-button" type="submit">Search flights</button>

        </div>

    </div>
</div>
<!-- resources/views/home.blade.php -->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Rest of your home page content -->

{{-- <div class="container mt-4">
    <h2>Flight Schedules</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Flight Number</th>
                <th>Departure City</th>
                <th>Arrival City</th>
                <th>Day of Week</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->flight->flight_number }}</td>
                    <td>{{ optional($schedule->flight->departureAirport)->city ?? 'N/A' }}</td>
                    <td>{{ optional($schedule->flight->arrivalAirport)->city ?? 'N/A' }}</td>
                    <td>{{ $schedule->day_of_week }}</td>
                    <td>{{ $schedule->departure_time }}</td>
                    <td>{{ $schedule->flight->arrival_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
  {{-- <!-- FullCalendar CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css">

  <!-- jQuery and FullCalendar JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>

  <div class="container mt-4">
      <h2>Flight Schedules</h2>

      <div class="row mb-3">
          <div class="col-md-3">
              <label for="departureCityFilter">Filter by Departure City</label>
              <select id="departureCityFilter" class="form-control">
                  <option value="">All</option>
                  @foreach($departureCities as $city)
                      <option value="{{ $city }}">{{ $city }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3">
              <label for="arrivalCityFilter">Filter by Arrival City</label>
              <select id="arrivalCityFilter" class="form-control">
                  <option value="">All</option>
                  @foreach($arrivalCities as $city)
                      <option value="{{ $city }}">{{ $city }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-3">
              <label for="dayOfWeekFilter">Filter by Day of Week</label>
              <select id="dayOfWeekFilter" class="form-control">
                  <option value="">All</option>
                  <option value="Sunday">Sunday</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
              </select>
          </div>
          <div class="col-md-3 align-self-end">
              <button id="filterButton" class="btn btn-primary">Filter</button>
          </div>
      </div>

      <table id="schedulesTable" class="display">
          <thead>
              <tr>
                  <th>Flight Number</th>
                  <th>Departure City</th>
                  <th>Arrival City</th>
                  <th>Day of Week</th>
                  <th>Departure Time</th>
                  <th>Arrival Time</th>
              </tr>
          </thead>
          <tbody>
              @foreach($schedules as $schedule)
              <tr>
                  <td>{{ $schedule->flight->flight_number }}</td>
                  <td>{{ optional($schedule->flight->departureAirport)->city ?? 'N/A' }}</td>
                  <td>{{ optional($schedule->flight->arrivalAirport)->city ?? 'N/A' }}</td>
                  <td>{{ $schedule->day_of_week }}</td>
                  <td>{{ $schedule->departure_time }}</td>
                  <td>{{ $schedule->flight->arrival_time }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>

      <!-- Container for the calendar -->
      <div class="container my-4">
          <div id='calendar'></div>
      </div>
  </div>

  @push('scripts')
  <script>
      $(document).ready(function() {
          var table = $('#schedulesTable').DataTable();

          // Filter button click event
          $('#filterButton').on('click', function() {
              filterTable();
          });

          // Filter function
          function filterTable() {
              var departureCity = $('#departureCityFilter').val();
              var arrivalCity = $('#arrivalCityFilter').val();
              var dayOfWeek = $('#dayOfWeekFilter').val();

              // Apply filters
              table.columns(1).search(departureCity).draw();
              table.columns(2).search(arrivalCity).draw();
              table.columns(3).search(dayOfWeek).draw();
          }

          // Initialize FullCalendar
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'dayGridMonth',
              events: '/api/flights', // Ensure this endpoint is correct and returning data
              eventColor: '#378006', // Sets the default color for events
              height: 600, // Set a fixed height for the calendar
              headerToolbar: {
                  left: 'prev,next today',
                  center: 'title',
                  right: 'dayGridMonth,timeGridWeek,timeGridDay'
              }
          });
          calendar.render();
      });
  </script>
  @endpush --}}
{{-- <div class="container">
    <h1>Welcome to the Airline Reservation System</h1>
    <a href="{{ route('flight-schedules.index') }}" class="btn btn-primary">View Flight Schedules</a>
</div> --}}

{{-- resources/views/sendgrid_test_form.blade.php --}}



<script>
// document.addEventListener("DOMContentLoaded", function() {
//     const selectedTripType = document.querySelector('input[name="trip_type"]:checked');
//     if (selectedTripType) {
//         adjustDepartureDateColumn(selectedTripType.value);
//     }

//     document.querySelectorAll('input[name="trip_type"]').forEach((input) => {
//         input.addEventListener('change', function(event) {
//             adjustDepartureDateColumn(event.target.value);
//         });
//     });

//     function adjustDepartureDateColumn(tripType) {
//         const departureDateDiv = document.getElementById('departureDate').closest('.col-12');
//         const returnDateDiv = document.getElementById('returnDate').closest('.col-12');
//         const to_location_id = document.getElementById('to_location_id').closest('.col-12');

//         if (tripType === 'return') {
//             departureDateDiv.classList.remove('col-md-3');
//             departureDateDiv.classList.add('col-md-1');
//             to_location_id.classList.remove('col-md-3');
//             returnDateDiv.style.display = ''; // Show return date
//         } else {
//             departureDateDiv.classList.remove('col-md-1');
//             departureDateDiv.classList.add('col-md-3');
//             to_location_id.classList.add('col-md-3');

//             returnDateDiv.style.display = 'none'; // Hide return date
//         }
//     }
// });

document.addEventListener("DOMContentLoaded", function() {
    const selectedTripType = document.querySelector('input[name="trip_type"]:checked');
    if (selectedTripType) {
        adjustDepartureDateColumn(selectedTripType.value);
    }

    document.querySelectorAll('input[name="trip_type"]').forEach((input) => {
        input.addEventListener('change', function(event) {
            adjustDepartureDateColumn(event.target.value);
        });
    });

    function adjustDepartureDateColumn(tripType) {
        const departureDateDiv = document.getElementById('departureDate').closest('.col-12');
        const returnDateDiv = document.getElementById('returnDate').closest('.col-12');
        const returnFlightsContainer = document.getElementById('returnFlightsContainer'); // Get the return flights container
        const to_location_id = document.getElementById('to_location_id').closest('.col-12');

        // Show or hide the return date and return flights based on the trip type
        if (tripType === 'return') {
            departureDateDiv.classList.remove('col-md-3');
            departureDateDiv.classList.add('col-md-1');
            to_location_id.classList.remove('col-md-3');
            returnDateDiv.style.display = ''; // Show return date
            if (returnFlightsContainer) {
                returnFlightsContainer.style.display = ''; // Show return flights
            }
        } else {
            departureDateDiv.classList.remove('col-md-1');
            departureDateDiv.classList.add('col-md-3');
            to_location_id.classList.add('col-md-3');
            returnDateDiv.style.display = 'none'; // Hide return date
            if (returnFlightsContainer) {
                returnFlightsContainer.style.display = 'none'; // Hide return flights
            }
        }
    }
});







   function updatePassengerCount(passengerType, delta, event) {
    event.stopPropagation(); // Prevent the click event from closing the dropdown

    const countElementId = `${passengerType}Count`;
    const inputElementId = `${passengerType}CountInput`; // Reference to the hidden input
    let countElement = document.getElementById(countElementId);
    let inputElement = document.getElementById(inputElementId); // Get the hidden input
    let count = parseInt(countElement.innerText, 10) + delta;

    count = Math.max(count, 0); // Ensure count never goes below 0

    countElement.innerText = count;
    inputElement.value = count; // Update the hidden input's value
}

function updateClassSelection(selectedClass) {
    // No need to stop propagation here as it's handled by your existing code
    document.getElementById('classInput').value = selectedClass; // Update the hidden input's value for class
}
document.getElementById('confirmPassengerSelection').addEventListener('click', function() {
    // Close the dropdown
    let dropdownElement = document.querySelector('.dropdown-toggle'); // Adjust the selector as needed
    let dropdownInstance = bootstrap.Dropdown.getInstance(dropdownElement);
    if (dropdownInstance) {
        dropdownInstance.hide();
    }
});


    </script>






</x-home>
