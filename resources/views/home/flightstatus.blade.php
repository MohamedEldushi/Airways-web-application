<x-home>

<style>.custom-button1 {
background-color: #262D61; margin-left:60px;padding:16px 80px;
     transition: background 0.3s ease-in-out;
 }

 .custom-button1:hover {
     background: #DAB03C;
     color: white;
 /* Change the color on hover */
 }
 .custom-button2 {
    background-color: #262D61; margin-left:70px;padding:16px 100px;

     transition: background 0.3s ease-in-out;
 }

 .custom-button2:hover {
     background: #DAB03C;
     color: white;
 /* Change the color on hover */
 }
 .milestone {
                background-color: #fffffff2;
    position: relative; /* Ensure this container is positioned relative to its normal position */
    z-index: 10; /* Higher than the image to sit on top */
    margin-top: -130px; /* Pulls the container up by 100px */
    /* Rest of your styling */
}</style>

    {{-- search section --}}
    <div class="container  ">
        <div class=" milestone shadow p-0 mx-5 mb-5 pb-2 col-md-11 mx-auto  bg-body rounded-5 text-center text-md-start">
            <div class="d-flex flex-wrap ">
                <a style="background-color: #262d61 ;border-radius:32px 0px 0px 0px" href="{{url('/')}}" class="text-light btn p-3  text-center mb-3 mb-md-0 col-12 col-md-4">
                    <i class="fas fa-plane mx-2"></i> Book a flight
                </a>

                <a style="background-color: #262d61" href="{{ route('checkin') }}" class="text-light    btn p-2 rounded-0 px-4 text-center mb-3 mb-md-0 col-12 col-md-4">
                    <i class="fas fa-check-circle mx-2"></i> Manage / Check in
                </a>

                <a style="background-color: #262d6100 ;border-radius:0px 32px 0px 0px" href="{{ route('flightstatus') }}" class="text-dark btn p-2 text-center col-12 col-md-4">
                    <i class="fas fa-plane-arrival  mx-2 "></i> Flight status
                </a>
            </div>




            <div class="d-flex mt-4 mx-4 mb-4 p-0 pb-2 border-bottom">
                <a id="searchByLocation" class="btn text-primary mx-4 fs-6" href="#">Location</a>
    <a id="searchByFlightNumber" class="btn fs-6" href="#">Flight Number</a>
            </div>

<form action="{{ route('flights.status') }}" method="get">

            <div id="locationForm" class="container mt-3">
                <div class="row">
                    <div class="col-md-12 col-12 d-flex flex-wrap">
                        <div class="form-floating mb-3 col-md-3 col-12">
                            <select class="form-select rounded-1 rounded-end-0 border-end-0" id="from_location_id" name="from" required>
                                <option value="" selected>Select From</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->code }}">{{ $location->name }} - {{ $location->airport }}</option>
                                @endforeach
                            </select>
                            <label for="from_location_id">From</label>

                        </div>
                        <div class="form-floating mb-3 col-md-3 col-12">
                            <select class="form-select rounded-1 rounded-end-0 border-end-0 rounded-start-0 border-start-0" id="to_location_id" name="to" required>
                                <option value="" selected>Select To</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->code }}">{{ $location->name }} - {{ $location->airport }}</option>
                                @endforeach
                            </select>
                            <label for="to_location_id">To</label>
                        </div>

                        <div class="col-md-3 col-12">
                            <div class="form-floating mb-3">
                                <input type="date"name="date" required class="form-control rounded-1  rounded-start-0 border-start-0" id="departureDate" placeholder="Select departure date">
                                <label for="departureDate"> Date</label>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 mt-3 mt-md-0 ml-auto">
                            <button type="submit" id="searchFlightStatusBtn"id="flightStatus"    class="custom-button1 shadow  ms-5 rounded-5 text-light btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
                </form>

                <div id="flightNumberForm" class="container mt-3">
                    <div class="row">
                        <form action="{{ route('flights.status') }}" method="get">
                        <div class="col-md-12 col-12 d-flex flex-wrap">
                            <div class="form-floating mb-3 col-md-8 col-12">
                                <input type="text" name="flight_number" class="form-control" id="flightNumberInput" placeholder="Flight Number" required>
                                <label for="flightNumberInput">Flight Number</label>
                            </div>
                            <div class="col-md-4 col-12 mt-3 mt-md-0 ml-auto">
                                <button type="submit"   class="custom-button2 shadow   rounded-5 text-light btn">Search</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>







        </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchByLocation = document.getElementById('searchByLocation');
    var searchByFlightNumber = document.getElementById('searchByFlightNumber');
    var locationForm = document.getElementById('locationForm');
    var flightNumberForm = document.getElementById('flightNumberForm');

    // Function to toggle form display and button styling
    function toggleForms(showLocation) {
        if (showLocation) {
            locationForm.style.display = 'block';
            flightNumberForm.style.display = 'none';
            searchByLocation.classList.add('text-primary');
            searchByFlightNumber.classList.remove('text-primary');
        } else {
            locationForm.style.display = 'none';
            flightNumberForm.style.display = 'block';
            searchByFlightNumber.classList.add('text-primary');
            searchByLocation.classList.remove('text-primary');
        }
    }

    // Initially show location form and set location button to primary
    toggleForms(true);

    searchByLocation.addEventListener('click', function() {
        toggleForms(true);
    });

    searchByFlightNumber.addEventListener('click', function() {
        toggleForms(false);
    });

    // Assuming 'flightStatus' is the id of your flight status tab
    document.getElementById('flightStatus').addEventListener('click', function() {
        // Show location form by default when the flight status is clicked
        toggleForms(true);
    });
});


</script>


            {{-- <script>
                document.getElementById('flight-status-form').addEventListener('submit', function(event) {
    event.preventDefault();

    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let date = document.getElementById('departureDate').value;

    fetch('/flight-status', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ from, to, date })
    })
    .then(response => response.json())
    .then(flights => {
        // Update the page with the new flights information
        // You will need to write the code that updates the HTML with the flight information
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

            </script> --}}


    </x-home>
