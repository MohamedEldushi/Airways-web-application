<x-ticket>



    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style>.card {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border: none;
    border-radius: 0.25rem;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 1rem;
}

.card-title {
    font-size: 1rem;
    color: #007bff;
}

.card-text {
    font-size: 1.25rem;
    color: #333;
}
</style>

  <div class="container">

    <h1 style="width: 40rem;
    font-size: 50px;
    font-style: normal;
    font-weight: 400;
    line-height: normal; margin-top:100px ;margin-bottom:60px"  class="mx-5  ">Select your departure flight from <span style="color: #374294">{{ $fromLocationName }}</span>  to <span style="color: #374294">{{ $toLocationName }}</span>
     </h1>



<div class="row mt-5">
    @foreach($flights as $flight)

    <div class="col-md-2">
        <div class="d-flex flex-column align-items-center">
            <h6>{{ $flight->departure_time->format('D, d M Y') }}</h6>
            <p>${{ $flight->price }}</p>
        </div>
    </div>
    @endforeach


    <div class="col-md-2">
        <div class="d-flex flex-column align-items-center">
            <h6>Thu, 23 Nov</h6>
            <p>$500</p>
        </div>
    </div>

    <div class="col-md-2">
        <div class="d-flex flex-column align-items-center">
            <h6>Thu, 23 Nov</h6>
            <p>$500</p>
        </div>
    </div>
    <div class="col-md-2">
        <div class="d-flex flex-column align-items-center">
            <h6>Thu, 23 Nov</h6>
            <p>$500</p>
        </div>
    </div>
    <div class="col-md-2">
        <div class="d-flex flex-column align-items-center">
            <h6>Thu, 23 Nov</h6>
            <p>$500</p>
        </div>
    </div>




    <hr class="mx-5 my-0">

    <div class="mx-5 my-3 mt-5 d-flex flex-column align-items-left">
        <h6 style="color: #374294">{{ $flights->count() }} results</h6>
        <p>Fares displayed are for all passengers.</p>
    </div>


{{-- from && to  --}}
{{-- @foreach($flights as $flight)
<div class="row text-center shadow-sm rounded-3 m-3 mx-5 p-2 border bg-light">
    <!-- Departure Details -->
    <div class="col-md-1 d-flex flex-column align-items-center mt-3">
        <h6>{{ $flight->departure_time->format('H:i') }}</h6>
        <p class="badge bg-primary mt-1">{{ $flight->departureAirport->code }}</p>
        <h6 style="color: #374294">{{ $flight->departureAirport->city }}</h6>
    </div>

        <!-- Flight Icon -->
        <div class="col-md-2 d-flex justify-content-center align-items-center mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 49 50" fill="none">
                <path d="M43.9843 21.0838H32.2668C31.7474 21.0838 31.2647 20.8162 30.9894 20.3758L19.3221 1.70795C19.0467 1.26754 18.564 1 18.0448 1L15.7879 1C14.8078 1 14.0888 1.92092 14.3266 2.87161L18.4116 19.2122C18.6493 20.163 17.9303 21.0838 16.9502 21.0838H9.52126C9.08669 21.0838 8.67347 20.8963 8.38752 20.5694L3.64223 15.146C2.63528 13.9955 0.752922 14.9032 1.02656 16.4074L2.51251 24.5801C2.5449 24.7581 2.5449 24.9409 2.51251 25.1189L1.02656 33.2917C0.752922 34.7957 2.63528 35.7035 3.64223 34.553L8.38752 29.1296C8.67347 28.8027 9.08669 28.6152 9.52126 28.6152H16.9502C17.9303 28.6152 18.6493 29.5361 18.4116 30.4868L14.3266 46.8274C14.0888 47.7782 14.8078 48.699 15.7879 48.699H18.0448C18.564 48.699 19.0467 48.4314 19.3221 47.9911L30.9894 29.3232C31.2647 28.8828 31.7474 28.6152 32.2668 28.6152H43.9843C46.064 28.6152 47.75 26.9292 47.75 24.8495C47.75 22.7698 46.064 21.0838 43.9843 21.0838Z" stroke="black" stroke-opacity="0.85" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>        </div>

        <!-- Arrival Details -->
    <div class="col-md-2 d-flex flex-column align-items-center mt-3">
        <h6>{{ $flight->arrival_time->format('H:i') }}</h6>
        <p  class="badge bg-primary mt-1">{{ $flight->arrivalAirport->code }}</p>
        {{-- <span>{{ optional($booking->departureFlight->departureAirport)->code ?? 'N/A' }}</span> --}}

        {{-- <h6 style="color: #374294">{{ $flight->arrivalAirport->city }}</h6>
    </div> --}}

    <!-- Flight Duration -->
    {{-- <div class="col-md-2 me-5 d-flex flex-column align-items-center mt-3">
        <p>Flight duration</p>
        @php
            $duration = $flight->departure_time->diff($flight->arrival_time);
            $formattedDuration = $duration->format('%Hh %Im');
        @endphp
        <h6 style="color: #374294">{{ $formattedDuration }}</h6>
       <!-- Corrected Flight Details Link -->
<a data-bs-toggle="offcanvas" data-bs-target="#offcanvasDetails{{ $loop->index }}" aria-controls="offcanvasDetails{{ $loop->index }}" href="javascript:void(0);" style="">Flight details</a>

<!-- Offcanvas Details -->
<div class="offcanvas offcanvas-end" id="offcanvasDetails{{ $loop->index }}" aria-labelledby="offcanvasDetailsLabel{{ $loop->index }}">
    <div class="offcanvas-header">
        <h5 style="color: #374294; margin-top:20px" id="offcanvasDetailsLabel{{ $loop->index }}">Flight Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

                <h4 style="color: #374294; margin-top:70px ;" class="offcanvas-title  " id="offcanvasWithBothOptionsLabel">Departure Ticket</h4>
                <h5 style="color: rgb(197, 174, 57) ; margin-top:70px" class="text-start mb-3">{{ $flight->departureAirport->city }} to {{ $flight->arrivalAirport->city }}</h5>

              <p class="text-start fw-light ">{{ $flight->departure_time->format('D, d M Y') }}</p>
         <div class="d-flex ">

                <p >{{ $flight->departure_time->format('H:i') }}</p>
                <p style="font-size: 15px" class="text-start mx-3 ">{{ $flight->departureAirport->city }}<br>{{ $flight->departureAirport->name }} ({{ $flight->arrivalAirport->code }})</p>

         </div>

        <div style="  height: 100px;
              width: 1px;
              background-color: black;
              margin-bottom:30px" class="vertical-line mx-3">
              </div>


            <div class="d-flex justify-content-between">

                <p>{{ $flight->arrival_time->format('H:i') }}</p>
                <p style="font-size: 15px" class="text-start me-3 ">{{ $flight->arrivalAirport->city }}  <br> {{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->code }})</p>

            </div>


               <hr class="mx-0 my-0">


        </div>
    </div>



    </div> --}}

    <!-- Flight Details Button -->




    {{-- <a href="{{ route('select.departure', ['flightId' => $flight->id, 'classType' => 'economy']) }}">Economy</a> --}}

 <!-- Economy Class -->
 {{-- <a href="{{ route('select.departure', ['flightId' => $flight->id, 'classType' => 'economy']) }}" class="col-md-2 pt-2 pb-1 me-2 mx-4 border rounded-4 shadow-sm d-flex flex-column align-items-center custom-card text-decoration-none text-dark">
    <i class="fas fa-plane fa-2x"></i>
    <p class="mt-2">Economy</p>
    <h3 style="color: #287ba7;">${{ $flight->price_economy }}</h3>
</a>



<a href="{{ route('select.departure', ['flightId' => $flight->id, 'classType' => 'business']) }}" class="col-md-2 pt-2 pb-1 border  rounded-4 shadow-sm d-flex flex-column align-items-center custom-card text-decoration-none text-dark">
    <i class="fas fa-business-time fa-2x"></i>
    <p class="mt-2">Business</p>
    <h3 style="color: #c01b1b;">${{ $flight->price_business }}</h3>
</a>
</div>
@endforeach
 --}}







<style>.flight-ticket {
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
}

.offcanvas-header {
    background-color: #0057b383;
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
}

.flight-info {
    flex-grow: 1;
}

.flight-info.departure, .flight-info.arrival {
    padding: 20px;
}

.flight-info-line {
    height: 2px;
    width: 100%;
    background-color: #ddd;
    margin: 20px 0;
}

.btn-outline-primary {
    border-color: #0056b3;
    color: #0056b3;
}

.btn-outline-primary:hover {
    background-color: #0056b3;
    color: #fff;
}
</style>








{{-- Ensure you link to your external CSS and FontAwesome in your <head> --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

    <style>
        .flight-ticket {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.flight-info {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.time-location h6 {
    color: #374294;
}

.badge-primary {
    background-color: #007bff;
}

.flight-icon {
    text-align: center;
    padding: 0 20px;
}

.flight-duration, .flight-details {
    text-align: center;
}

.flight-details a {

    margin: 5px;
    text-decoration: none;
    color: #fff;
}

.flight-details .btn-primary {
    background-color: #287ba7;
    border-color: #287ba7;
}

.flight-details .btn-secondary {
    background-color: #c01b1b;
    border-color: #c01b1b;
}
.class-option.economy {
    background-color: #28a745;
}

.class-option.business {
    background-color: #dc3545;
}

.flight-details-button {
    display: block;
    text-align: center;
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #6c757d;
    color: white;
    border-radius: 5px;
    text-decoration: none;
}
.flight-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}
@media (max-width: 768px) {
    .flight-info, .flight-duration, .flight-details {
        text-align: center;
        margin: 10px 0;
    }

}

    </style>
    @foreach($flights as $flight)
    <div class="flight-ticket row shadow-sm rounded-4 border-1 m-3 mx-5 p-3 border bg-light">
        <div class="col-12 col-md-3 d-flex flight-info">
            <div class="time-location ">
                <h6 class="departure-time">{{ $flight->departure_time->format('H:i') }}</h6>
                <p class="badge badge-primary">{{ $flight->departureAirport->code }}</p>
                <h6>{{ $flight->departureAirport->city }}</h6>
            </div>
            <div class="flight-icon  ">
                <i class="fas fa-plane-departure fa-2x"></i>
            </div>
            <div class="time-location ">
                <h6 class="arrival-time">{{ $flight->arrival_time->format('H:i') }}</h6>
                <p class="badge badge-primary">{{ $flight->arrivalAirport->code }}</p>
                <h6>{{ $flight->arrivalAirport->city }}</h6>
            </div>
        </div>
        <div class="col-sm-2 text-center ">
            <span class="badge bg-info text-white">Duration</span>
            @php
                $duration = $flight->departure_time->diff($flight->arrival_time);
                $formattedDuration = $duration->format('%Hh %Im');
            @endphp
            <h6 class="mt-2">{{ $formattedDuration }}</h6>
        </div>
<!-- Flight Details Link -->
{{-- <a class="col-sm-1 btn  flight-details-link" data-bs-togg
le="offcanvas" data-bs-target="#offcanvasDetails{{ $loop->index }}" aria-controls="offcanvasDetails{{ $loop->index }}">Flight Details</a> --}}
<!-- Combined Column for Details and Remaining Seats -->
<div class="col-sm-2 text-center">
    <!-- Flight Details Link -->
    <a style="color: #0056b3;" class="btn flight-details-link text-decoration-underline mb-2"
       data-bs-toggle="offcanvas" data-bs-target="#offcanvasDetails{{ $loop->index }}"
       aria-controls="offcanvasDetails{{ $loop->index }}" href="javascript:void(0);">
        Flight details
    </a>

    <!-- Remaining Seats Display -->
    <div>
        <span class="badge bg-warning text-dark">Remaining Seats</span>
        <h6>{{ $flight->remainingSeats() }}</h6>
    </div>
</div>
<!-- Offcanvas Details -->
<div class="offcanvas offcanvas-end" id="offcanvasDetails{{ $loop->index }}" aria-labelledby="offcanvasDetailsLabel{{ $loop->index }}">
    <div class="offcanvas-header">
        <h5 style="color: #374294; margin-top:20px" id="offcanvasDetailsLabel{{ $loop->index }}">Flight Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

                <h4 style="color: #374294; margin-top:70px ;" class="offcanvas-title  " id="offcanvasWithBothOptionsLabel">Departure Ticket</h4>
                <h5 style="color: rgb(197, 174, 57) ; margin-top:70px" class="text-start mb-3">{{ $flight->departureAirport->city }} to {{ $flight->arrivalAirport->city }}</h5>

              <p class="text-start fw-light ">{{ $flight->departure_time->format('D, d M Y') }}</p>
         <div class="d-flex ">

                <p >{{ $flight->departure_time->format('H:i') }}</p>
                <p style="font-size: 15px" class="text-start mx-3 ">{{ $flight->departureAirport->city }}<br>{{ $flight->departureAirport->name }} ({{ $flight->arrivalAirport->code }})</p>

         </div>

        <div style="  height: 100px;
              width: 1px;
              background-color: black;
              margin-bottom:30px" class="vertical-line mx-3">
              </div>


            <div class="d-flex justify-content-between">

                <p>{{ $flight->arrival_time->format('H:i') }}</p>
                <p style="font-size: 15px" class="text-start me-3 ">{{ $flight->arrivalAirport->city }}  <br> {{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->code }})</p>

            </div>



               <hr class="mx-0 my-0">


        </div>
    </div>

        <div class="col-sm-4 text-center flight-details  mt-2 mx-3">
            <a href="{{ route('select.departure', ['flightId' => $flight->id, 'classType' => 'economy']) }}" class="btn  btn-primary rounded-4">Single Economy - ${{ $flight->price_economy }}</a>
            <a href="{{ route('select.departure', ['flightId' => $flight->id, 'classType' => 'business']) }}" class="btn btn-secondary rounded-4">Single Business - ${{ $flight->price_business }}</a>
        </div>
    </div>
    @endforeach













































































    {{-- <div class="collapse" id="businessCollapse{{ $loop->index }}">
        <div class="card card-body">
            <ul class="list-unstyled">
                <li><i class="fas fa-bed"></i> Lie-flat seats</li>
                <li><i class="fas fa-lounge"></i> Access to business lounges</li>
                <li><i class="fas fa-plane-departure"></i> Priority boarding</li>
                <!-- Add more business features as needed -->
            </ul>
            <button class="btn btn-primary border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'">Select this flight</button>
        </div>

</div> --}}


      <!-- Economy Class -->
      {{-- <div class="col-md-2 p-3 py-4 border rounded-4 shadow-sm d-flex flex-column align-items-center custom-card" data-bs-toggle="collapse" href="#economyCollapse{{ $loop->index }}" role="button" aria-expanded="false" aria-controls="economyCollapse{{ $loop->index }}">
        <p>Economy</p>
        <h3>${{ $flight->price_economy }}</h3>
    </div>

    <div class="collapse" id="economyCollapse{{ $loop->index }}">
        <div>
            <!-- Economy class details -->
            <button class="border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'">Select this flight</button>
        </div>
    </div>

    <!-- Business Class -->
    <div class="col-md-2 p-3 py-4 border rounded-4 shadow-sm d-flex flex-column align-items-center custom-card" data-bs-toggle="collapse" href="#businessCollapse{{ $loop->index }}" role="button" aria-expanded="false" aria-controls="businessCollapse{{ $loop->index }}">
        <p>Business</p>
        <h3>${{ $flight->price_business }}</h3>
    </div>

    <div class="collapse" id="businessCollapse{{ $loop->index }}">
        <div>
            <!-- Business class details -->
            <button class="border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'">Select this flight</button>
        </div>
    </div>
    </div>
    </div>--}}




     <!-- Include Bootstrap CSS, JS, and jQuery in your project -->

<!-- Add the following HTML code to your page -->





{{-- <div class="collapse" id="businessCollapse">
    <!-- Your collapsible content goes here -->
    <p>Collapsible content for Business</p>
    <!-- Add more content as needed -->
</div>

    </div>
    <div class="row text-center  shadow-sm rounded-4 m-3 mx-5 p-2 bg-light">
        <div class="col-md-1 mt-3 me-md-4 d-flex flex-column align-items-center">
            <h6>20:10</h6>
            <p>IST</p>
            <h6 style="color: #374294">Istanbul</h6>
        </div>
        <div class="col-md-2 mt-md-0 d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
                <path d="M43.9843 21.0838H32.2668C31.7474 21.0838 31.2647 20.8162 30.9894 20.3758L19.3221 1.70795C19.0467 1.26754 18.564 1 18.0448 1L15.7879 1C14.8078 1 14.0888 1.92092 14.3266 2.87161L18.4116 19.2122C18.6493 20.163 17.9303 21.0838 16.9502 21.0838H9.52126C9.08669 21.0838 8.67347 20.8963 8.38752 20.5694L3.64223 15.146C2.63528 13.9955 0.752922 14.9032 1.02656 16.4074L2.51251 24.5801C2.5449 24.7581 2.5449 24.9409 2.51251 25.1189L1.02656 33.2917C0.752922 34.7957 2.63528 35.7035 3.64223 34.553L8.38752 29.1296C8.67347 28.8027 9.08669 28.6152 9.52126 28.6152H16.9502C17.9303 28.6152 18.6493 29.5361 18.4116 30.4868L14.3266 46.8274C14.0888 47.7782 14.8078 48.699 15.7879 48.699H18.0448C18.564 48.699 19.0467 48.4314 19.3221 47.9911L30.9894 29.3232C31.2647 28.8828 31.7474 28.6152 32.2668 28.6152H43.9843C46.064 28.6152 47.75 26.9292 47.75 24.8495C47.75 22.7698 46.064 21.0838 43.9843 21.0838Z" stroke="black" stroke-opacity="0.85" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="col-md-1 mt-3 ms-md-3 d-flex flex-column align-items-center">
            <h6>11:10</h6>
            <p>JFK</p>
            <h6 style="color: #374294">New York</h6>
        </div>

        <div class="col-md-3 mt-4 d-md-flex flex-md-column align-md-items-center">
            <p>Flight duration</p>
            <h6 style="color: #374294">1 Stop, 20h 5m</h6>
            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"Enable both scrolling & backdrop style=" " href="">flights details</a>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

                <div class="offcanvas-header ">
                      <h5 style="color: #374294" class="offcanvas-title " id="offcanvasWithBothOptionsLabel">Flight details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h4 style="color: #374294" class="offcanvas-title text-align-center" id="offcanvasWithBothOptionsLabel">Flight details</h4>
                        <h5 style="color: rgb(197, 174, 57)" class="text-start mt-5">Istanbul to New York</h5>

                      <p class="text-start fw-light ">Fri, 10 Nov 2023</p>
                      <div class="d-flex justify-content-between">



                        <p class="mb-0">20:10</p>
                        <p class="text-start mb-0   ">Istanbul <br>Sabiha Gokcen International Airport (SAW)</p>

                      </div>
                      <div style="  height: 50px;
                      width: 1px;
                      background-color: black;
                      margin-bottom:30px" class="vertical-line mx-3"></div>


                      <div class="d-flex justify-content-between">

                        <p>01:25</p>
                        <p class="text-start me-5">Doha <br> Hamad International Airport (DOH)</p>

                      </div>


                      <hr class="mx-0 my-0">
    <p class="text-start fw-light mt-3  ">12h 55m transit in Doha</p>
    <h6 class="text-start  ">Hamad International Airport</h6>
    <p class="text-start fw-light ">Fri, 10 Nov 2023</p>
                      <div class="d-flex justify-content-between">



                        <p class="mb-0">20:10</p>
                        <p class="text-start mb-0   ">Istanbul <br>Sabiha Gokcen International Airport (SAW)</p>

                      </div>
                      <div style="  height: 50px;
                      width: 1px;
                      background-color: black;
                      margin-bottom:30px" class="vertical-line mx-3"></div>


                      <div class="d-flex justify-content-between">

                        <p>01:25</p>
                        <p class="text-start me-5">Doha <br> Hamad International Airport (DOH)</p>

                      </div>

                    </div>
                  </div>
        </div>
        <style>

        </style>

<div class="col-md-2 p-3 py-4 border rounded-4 me-md-0 shadow-sm d-flex flex-column ms-3  text-decoration-none text-dark items-center custom-card" data-bs-toggle="collapse" href="#businessCollapse" role="button" aria-expanded="false" aria-controls="businessCollapse">
    <p>Economy</p>
    <h3>$1,382</h3>
</div>

<div class="collapse" id="businessCollapse">

</div>



<div class="col-md-2 p-3 py-4 border rounded-4 me-md-0 shadow-sm d-flex flex-column ms-3 text-decoration-none text-dark items-center custom-card" data-bs-toggle="collapse" href="#businessCollapse" role="button" aria-expanded="false" aria-controls="businessCollapse">
    <p>Business</p>
    <h3>$1,382</h3>
</div>




        <div class="collapse text-start" id="businessCollapse">
            <div class="container">
                <div class="row mx-0  ">
                  <div  class="card rounded-4   col-md-4  px-0">
                    <div style="background-color: rgb(245, 245, 245)" class="rounded-4 rounded-bottom-0 card-header d-flex">
                      <div class="col-md-6">
                        <h4 style="color:#2d379b">Great flexibility</h4>
                        <p>Economy Convenience</p>
                      </div>
                      <div class="col-md-6 text-md-end mt-3">
                        <h3>$1,457</h3>
                      </div>
                    </div>
                    <div class="card-body rounded-bottom-4 bg-light pb-0 ">
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                        </svg> Flexibility to make 2 changes</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-luggage-fill" viewBox="0 0 16 16">
                            <path d="M2 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V5h.5A1.5 1.5 0 0 1 8 6.5V7H7v-.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4v1H2.5v.25a.75.75 0 0 1-1.5 0v-.335A1.5 1.5 0 0 1 0 13.5v-7A1.5 1.5 0 0 1 1.5 5H2V1.5ZM3 5h2V2H3v3Z"/>
                            <path d="M2.5 7a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm10 1v-.5A1.5 1.5 0 0 0 11 6h-1a1.5 1.5 0 0 0-1.5 1.5V8H8v8h5V8h-.5ZM10 7h1a.5.5 0 0 1 .5.5V8h-2v-.5A.5.5 0 0 1 10 7ZM5 9.5A1.5 1.5 0 0 1 6.5 8H7v8h-.5A1.5 1.5 0 0 1 5 14.5v-5Zm9 6.5V8h.5A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5H14Z"/>
                        </svg> 2 pieces x 23 kg baggage allowance</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M7 18C7 18 4 10 4 6C4 2 6 2 6 2H7C7 2 8 2 8 3C8 4 7 4 7 6C7 8 10 10 10 13C10 16 7 18 7 18ZM12 17C11 17 8 19.5 8 19.5C7.7 19.7 7.8 20 8 20.3C8 20.3 9 22.1 11 22.1H17C18.1 22.1 19 21.2 19 20.1V19.1C19 18 18.1 17.1 17 17.1H12V17Z" fill="black"/>
                        </svg> Standard seat selection</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-0 me-2" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg> 3648.00 TRY change fee + class fare difference</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg> Refund with a 7296.00 TRY deduction</p>
                        <p class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" width="16" height="16" viewBox="0 0 31 31" fill="none">
                            <path d="M14.7803 1.24091C14.7803 1.24091 15.565 1.64136 16.3489 2.23109C16.7408 2.52595 17.1375 2.86804 17.4511 3.26202C17.7648 3.65594 18.0204 4.12372 17.9815 4.6707C17.9383 5.27859 17.5262 5.7313 17.0866 6.00274C16.6471 6.27411 16.148 6.43831 15.678 6.60027C15.2079 6.76224 14.7668 6.92196 14.4869 7.09482C14.207 7.26762 14.1205 7.37957 14.1065 7.57695C14.1049 7.59936 14.1318 7.719 14.2647 7.88592C14.3976 8.05285 14.6114 8.24497 14.8351 8.41329C15.2824 8.74975 15.749 8.99091 15.749 8.99091L15.2519 9.96062C15.2519 9.96062 14.7176 9.68853 14.1799 9.28407C13.9111 9.08185 13.6364 8.8465 13.4121 8.56478C13.1878 8.28293 12.9887 7.93267 13.0195 7.49958C13.0627 6.89168 13.4748 6.43898 13.9143 6.16754C14.3538 5.89611 14.8529 5.73197 15.323 5.57001C15.793 5.40804 16.2342 5.24832 16.514 5.07546C16.7939 4.9026 16.8805 4.79071 16.8945 4.59333C16.9041 4.45697 16.8208 4.21987 16.5986 3.94081C16.3764 3.66169 16.0405 3.36265 15.6937 3.10175C15.0002 2.58002 14.2832 2.21062 14.2832 2.21062L14.7803 1.24091ZM22.5303 4.14716C22.5303 4.14716 23.315 4.54761 24.0989 5.13734C24.4908 5.4322 24.8875 5.77429 25.2011 6.16827C25.5148 6.56219 25.7704 7.02997 25.7315 7.57695C25.6883 8.18484 25.2762 8.63755 24.8366 8.90899C24.3971 9.18036 23.898 9.34456 23.428 9.50652C22.9579 9.66849 22.5168 9.82821 22.2369 10.0011C21.957 10.1739 21.8705 10.2858 21.8565 10.4832C21.8549 10.5056 21.8818 10.6252 22.0147 10.7922C22.1476 10.9591 22.3614 11.1512 22.5851 11.3195C23.0324 11.656 23.499 11.8972 23.499 11.8972L23.0019 12.8669C23.0019 12.8669 22.4676 12.5948 21.9299 12.1903C21.6611 11.9881 21.3864 11.7528 21.1621 11.471C20.9378 11.1892 20.7387 10.8389 20.7695 10.4058C20.8127 9.79794 21.2248 9.34523 21.6643 9.07379C22.1038 8.80236 22.6029 8.63822 23.073 8.47626C23.543 8.31429 23.9842 8.15457 24.264 7.98171C24.5439 7.80885 24.6305 7.69696 24.6445 7.49958C24.6541 7.36322 24.5708 7.12612 24.3486 6.84706C24.1264 6.56794 23.7905 6.2689 23.4437 6.008C22.7502 5.48627 22.0332 5.11687 22.0332 5.11687L22.5303 4.14716ZM7.03028 4.14716C7.03028 4.14716 7.81496 4.54761 8.59886 5.13734C8.99078 5.4322 9.38749 5.77429 9.70112 6.16827C10.0148 6.56219 10.2704 7.02997 10.2315 7.57695C10.1883 8.18484 9.7762 8.63755 9.33663 8.90899C8.89712 9.18036 8.39803 9.34456 7.92801 9.50652C7.45792 9.66849 7.01678 9.82821 6.73693 10.0011C6.45702 10.1739 6.3705 10.2858 6.35651 10.4832C6.35488 10.5056 6.38182 10.6252 6.51472 10.7922C6.64762 10.9591 6.86141 11.1512 7.08507 11.3195C7.53239 11.656 7.99903 11.8972 7.99903 11.8972L7.50194 12.8669C7.50194 12.8669 6.96755 12.5948 6.42989 12.1903C6.16107 11.9881 5.88643 11.7528 5.6621 11.471C5.43777 11.1892 5.2387 10.8389 5.26945 10.4058C5.31268 9.79794 5.72477 9.34523 6.16434 9.07379C6.60385 8.80236 7.10293 8.63822 7.57296 8.47626C8.04304 8.31429 8.48419 8.15457 8.76404 7.98171C9.04394 7.80885 9.13047 7.69696 9.14445 7.49958C9.15414 7.36322 9.07077 7.12612 8.84862 6.84706C8.62641 6.56794 8.2905 6.2689 7.94369 6.008C7.25018 5.48627 6.53319 5.11687 6.53319 5.11687L7.03028 4.14716ZM15.5005 11.3526C16.2876 11.3526 16.8199 11.7107 17.2268 12.321C17.3952 12.5736 17.5312 12.872 17.6334 13.1968C16.948 13.0995 16.2366 13.0482 15.5005 13.0482C14.7644 13.0482 14.053 13.0995 13.3676 13.1968C13.4698 12.872 13.6057 12.5736 13.7742 12.321C14.181 11.7107 14.7134 11.3526 15.5005 11.3526ZM15.5005 14.1378C22.7314 14.1378 27.2316 19.3471 27.5215 24.6732H3.4795C3.76946 19.3471 8.26961 14.1377 15.5005 14.1377V14.1378ZM29.6465 24.9538L30.417 25.7243C29.3199 26.8215 28.0942 26.8526 27.1255 26.8526H3.87548C2.90673 26.8526 1.68114 26.8215 0.583972 25.7243L1.35449 24.9538C2.19488 25.7941 2.90673 25.763 3.87548 25.763H27.1255C28.0942 25.763 28.8061 25.7941 29.6465 24.9538ZM24.1699 27.9424L22.9589 29.7591H8.04208L6.83102 27.9424H24.1699Z" fill="black"/>
                        </svg> Meal service</p>
                    </div>
                    <button class="border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'" >Select this flight</button>

                  </div>

                  <div class="card rounded-4 col-md-4 me-0 px-0">
                    <div style="background-color: rgb(245, 245, 245)" class="rounded-4 rounded-bottom-0 card-header d-flex">
                      <div class="col-md-6">
                        <h4 style="color:#2d379b">Great flexibility</h4>
                        <p>Economy Convenience</p>
                      </div>
                      <div class="col-md-6 text-md-end mt-3">
                        <h3>$1,457</h3>
                      </div>
                    </div>

                    <div class="card-body rounded-bottom-4 bg-light ">
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                        </svg> Flexibility to make 2 changes</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-luggage-fill" viewBox="0 0 16 16">
                            <path d="M2 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V5h.5A1.5 1.5 0 0 1 8 6.5V7H7v-.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4v1H2.5v.25a.75.75 0 0 1-1.5 0v-.335A1.5 1.5 0 0 1 0 13.5v-7A1.5 1.5 0 0 1 1.5 5H2V1.5ZM3 5h2V2H3v3Z"/>
                            <path d="M2.5 7a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm10 1v-.5A1.5 1.5 0 0 0 11 6h-1a1.5 1.5 0 0 0-1.5 1.5V8H8v8h5V8h-.5ZM10 7h1a.5.5 0 0 1 .5.5V8h-2v-.5A.5.5 0 0 1 10 7ZM5 9.5A1.5 1.5 0 0 1 6.5 8H7v8h-.5A1.5 1.5 0 0 1 5 14.5v-5Zm9 6.5V8h.5A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5H14Z"/>
                        </svg> 2 pieces x 23 kg baggage allowance</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M7 18C7 18 4 10 4 6C4 2 6 2 6 2H7C7 2 8 2 8 3C8 4 7 4 7 6C7 8 10 10 10 13C10 16 7 18 7 18ZM12 17C11 17 8 19.5 8 19.5C7.7 19.7 7.8 20 8 20.3C8 20.3 9 22.1 11 22.1H17C18.1 22.1 19 21.2 19 20.1V19.1C19 18 18.1 17.1 17 17.1H12V17Z" fill="black"/>
                        </svg> Standard seat selection</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-0 me-2" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg> 3648.00 TRY change fee + class fare difference</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg> Refund with a 7296.00 TRY deduction</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" width="16" height="16" viewBox="0 0 31 31" fill="none">
                            <path d="M14.7803 1.24091C14.7803 1.24091 15.565 1.64136 16.3489 2.23109C16.7408 2.52595 17.1375 2.86804 17.4511 3.26202C17.7648 3.65594 18.0204 4.12372 17.9815 4.6707C17.9383 5.27859 17.5262 5.7313 17.0866 6.00274C16.6471 6.27411 16.148 6.43831 15.678 6.60027C15.2079 6.76224 14.7668 6.92196 14.4869 7.09482C14.207 7.26762 14.1205 7.37957 14.1065 7.57695C14.1049 7.59936 14.1318 7.719 14.2647 7.88592C14.3976 8.05285 14.6114 8.24497 14.8351 8.41329C15.2824 8.74975 15.749 8.99091 15.749 8.99091L15.2519 9.96062C15.2519 9.96062 14.7176 9.68853 14.1799 9.28407C13.9111 9.08185 13.6364 8.8465 13.4121 8.56478C13.1878 8.28293 12.9887 7.93267 13.0195 7.49958C13.0627 6.89168 13.4748 6.43898 13.9143 6.16754C14.3538 5.89611 14.8529 5.73197 15.323 5.57001C15.793 5.40804 16.2342 5.24832 16.514 5.07546C16.7939 4.9026 16.8805 4.79071 16.8945 4.59333C16.9041 4.45697 16.8208 4.21987 16.5986 3.94081C16.3764 3.66169 16.0405 3.36265 15.6937 3.10175C15.0002 2.58002 14.2832 2.21062 14.2832 2.21062L14.7803 1.24091ZM22.5303 4.14716C22.5303 4.14716 23.315 4.54761 24.0989 5.13734C24.4908 5.4322 24.8875 5.77429 25.2011 6.16827C25.5148 6.56219 25.7704 7.02997 25.7315 7.57695C25.6883 8.18484 25.2762 8.63755 24.8366 8.90899C24.3971 9.18036 23.898 9.34456 23.428 9.50652C22.9579 9.66849 22.5168 9.82821 22.2369 10.0011C21.957 10.1739 21.8705 10.2858 21.8565 10.4832C21.8549 10.5056 21.8818 10.6252 22.0147 10.7922C22.1476 10.9591 22.3614 11.1512 22.5851 11.3195C23.0324 11.656 23.499 11.8972 23.499 11.8972L23.0019 12.8669C23.0019 12.8669 22.4676 12.5948 21.9299 12.1903C21.6611 11.9881 21.3864 11.7528 21.1621 11.471C20.9378 11.1892 20.7387 10.8389 20.7695 10.4058C20.8127 9.79794 21.2248 9.34523 21.6643 9.07379C22.1038 8.80236 22.6029 8.63822 23.073 8.47626C23.543 8.31429 23.9842 8.15457 24.264 7.98171C24.5439 7.80885 24.6305 7.69696 24.6445 7.49958C24.6541 7.36322 24.5708 7.12612 24.3486 6.84706C24.1264 6.56794 23.7905 6.2689 23.4437 6.008C22.7502 5.48627 22.0332 5.11687 22.0332 5.11687L22.5303 4.14716ZM7.03028 4.14716C7.03028 4.14716 7.81496 4.54761 8.59886 5.13734C8.99078 5.4322 9.38749 5.77429 9.70112 6.16827C10.0148 6.56219 10.2704 7.02997 10.2315 7.57695C10.1883 8.18484 9.7762 8.63755 9.33663 8.90899C8.89712 9.18036 8.39803 9.34456 7.92801 9.50652C7.45792 9.66849 7.01678 9.82821 6.73693 10.0011C6.45702 10.1739 6.3705 10.2858 6.35651 10.4832C6.35488 10.5056 6.38182 10.6252 6.51472 10.7922C6.64762 10.9591 6.86141 11.1512 7.08507 11.3195C7.53239 11.656 7.99903 11.8972 7.99903 11.8972L7.50194 12.8669C7.50194 12.8669 6.96755 12.5948 6.42989 12.1903C6.16107 11.9881 5.88643 11.7528 5.6621 11.471C5.43777 11.1892 5.2387 10.8389 5.26945 10.4058C5.31268 9.79794 5.72477 9.34523 6.16434 9.07379C6.60385 8.80236 7.10293 8.63822 7.57296 8.47626C8.04304 8.31429 8.48419 8.15457 8.76404 7.98171C9.04394 7.80885 9.13047 7.69696 9.14445 7.49958C9.15414 7.36322 9.07077 7.12612 8.84862 6.84706C8.62641 6.56794 8.2905 6.2689 7.94369 6.008C7.25018 5.48627 6.53319 5.11687 6.53319 5.11687L7.03028 4.14716ZM15.5005 11.3526C16.2876 11.3526 16.8199 11.7107 17.2268 12.321C17.3952 12.5736 17.5312 12.872 17.6334 13.1968C16.948 13.0995 16.2366 13.0482 15.5005 13.0482C14.7644 13.0482 14.053 13.0995 13.3676 13.1968C13.4698 12.872 13.6057 12.5736 13.7742 12.321C14.181 11.7107 14.7134 11.3526 15.5005 11.3526ZM15.5005 14.1378C22.7314 14.1378 27.2316 19.3471 27.5215 24.6732H3.4795C3.76946 19.3471 8.26961 14.1377 15.5005 14.1377V14.1378ZM29.6465 24.9538L30.417 25.7243C29.3199 26.8215 28.0942 26.8526 27.1255 26.8526H3.87548C2.90673 26.8526 1.68114 26.8215 0.583972 25.7243L1.35449 24.9538C2.19488 25.7941 2.90673 25.763 3.87548 25.763H27.1255C28.0942 25.763 28.8061 25.7941 29.6465 24.9538ZM24.1699 27.9424L22.9589 29.7591H8.04208L6.83102 27.9424H24.1699Z" fill="black"/>
                        </svg> Meal service</p>
                    </div>
                    <button class="border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'">Select this flight</button>

                  </div>

                  <div class="card rounded-4 col-md-4  px-0">
                    <div style="background-color: rgb(245, 245, 245)" class="rounded-4 rounded-bottom-0 card-header d-flex">
                      <div class="col-md-6">
                        <h4 style="color:#2d379b">Great flexibility</h4>
                        <p>Economy Convenience</p>
                      </div>
                      <div class="col-md-6 text-md-end mt-3">
                        <h3>$1,457</h3>
                      </div>
                    </div>

                    <div class="card-body rounded-bottom-4 bg-light ">
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
                            <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                        </svg> Flexibility to make 2 changes</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-luggage-fill" viewBox="0 0 16 16">
                            <path d="M2 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V5h.5A1.5 1.5 0 0 1 8 6.5V7H7v-.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5H4v1H2.5v.25a.75.75 0 0 1-1.5 0v-.335A1.5 1.5 0 0 1 0 13.5v-7A1.5 1.5 0 0 1 1.5 5H2V1.5ZM3 5h2V2H3v3Z"/>
                            <path d="M2.5 7a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5Zm10 1v-.5A1.5 1.5 0 0 0 11 6h-1a1.5 1.5 0 0 0-1.5 1.5V8H8v8h5V8h-.5ZM10 7h1a.5.5 0 0 1 .5.5V8h-2v-.5A.5.5 0 0 1 10 7ZM5 9.5A1.5 1.5 0 0 1 6.5 8H7v8h-.5A1.5 1.5 0 0 1 5 14.5v-5Zm9 6.5V8h.5A1.5 1.5 0 0 1 16 9.5v5a1.5 1.5 0 0 1-1.5 1.5H14Z"/>
                        </svg> 2 pieces x 23 kg baggage allowance</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2 " width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M7 18C7 18 4 10 4 6C4 2 6 2 6 2H7C7 2 8 2 8 3C8 4 7 4 7 6C7 8 10 10 10 13C10 16 7 18 7 18ZM12 17C11 17 8 19.5 8 19.5C7.7 19.7 7.8 20 8 20.3C8 20.3 9 22.1 11 22.1H17C18.1 22.1 19 21.2 19 20.1V19.1C19 18 18.1 17.1 17 17.1H12V17Z" fill="black"/>
                        </svg> Standard seat selection</p>
                        <p> <svg xmlns="http://www.w3.org/2000/svg"class="mb-0 me-2" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg> 3648.00 TRY change fee + class fare difference</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg"class="mb-1 me-2" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                        </svg> Refund with a 7296.00 TRY deduction</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" width="16" height="16" viewBox="0 0 31 31" fill="none">
                            <path d="M14.7803 1.24091C14.7803 1.24091 15.565 1.64136 16.3489 2.23109C16.7408 2.52595 17.1375 2.86804 17.4511 3.26202C17.7648 3.65594 18.0204 4.12372 17.9815 4.6707C17.9383 5.27859 17.5262 5.7313 17.0866 6.00274C16.6471 6.27411 16.148 6.43831 15.678 6.60027C15.2079 6.76224 14.7668 6.92196 14.4869 7.09482C14.207 7.26762 14.1205 7.37957 14.1065 7.57695C14.1049 7.59936 14.1318 7.719 14.2647 7.88592C14.3976 8.05285 14.6114 8.24497 14.8351 8.41329C15.2824 8.74975 15.749 8.99091 15.749 8.99091L15.2519 9.96062C15.2519 9.96062 14.7176 9.68853 14.1799 9.28407C13.9111 9.08185 13.6364 8.8465 13.4121 8.56478C13.1878 8.28293 12.9887 7.93267 13.0195 7.49958C13.0627 6.89168 13.4748 6.43898 13.9143 6.16754C14.3538 5.89611 14.8529 5.73197 15.323 5.57001C15.793 5.40804 16.2342 5.24832 16.514 5.07546C16.7939 4.9026 16.8805 4.79071 16.8945 4.59333C16.9041 4.45697 16.8208 4.21987 16.5986 3.94081C16.3764 3.66169 16.0405 3.36265 15.6937 3.10175C15.0002 2.58002 14.2832 2.21062 14.2832 2.21062L14.7803 1.24091ZM22.5303 4.14716C22.5303 4.14716 23.315 4.54761 24.0989 5.13734C24.4908 5.4322 24.8875 5.77429 25.2011 6.16827C25.5148 6.56219 25.7704 7.02997 25.7315 7.57695C25.6883 8.18484 25.2762 8.63755 24.8366 8.90899C24.3971 9.18036 23.898 9.34456 23.428 9.50652C22.9579 9.66849 22.5168 9.82821 22.2369 10.0011C21.957 10.1739 21.8705 10.2858 21.8565 10.4832C21.8549 10.5056 21.8818 10.6252 22.0147 10.7922C22.1476 10.9591 22.3614 11.1512 22.5851 11.3195C23.0324 11.656 23.499 11.8972 23.499 11.8972L23.0019 12.8669C23.0019 12.8669 22.4676 12.5948 21.9299 12.1903C21.6611 11.9881 21.3864 11.7528 21.1621 11.471C20.9378 11.1892 20.7387 10.8389 20.7695 10.4058C20.8127 9.79794 21.2248 9.34523 21.6643 9.07379C22.1038 8.80236 22.6029 8.63822 23.073 8.47626C23.543 8.31429 23.9842 8.15457 24.264 7.98171C24.5439 7.80885 24.6305 7.69696 24.6445 7.49958C24.6541 7.36322 24.5708 7.12612 24.3486 6.84706C24.1264 6.56794 23.7905 6.2689 23.4437 6.008C22.7502 5.48627 22.0332 5.11687 22.0332 5.11687L22.5303 4.14716ZM7.03028 4.14716C7.03028 4.14716 7.81496 4.54761 8.59886 5.13734C8.99078 5.4322 9.38749 5.77429 9.70112 6.16827C10.0148 6.56219 10.2704 7.02997 10.2315 7.57695C10.1883 8.18484 9.7762 8.63755 9.33663 8.90899C8.89712 9.18036 8.39803 9.34456 7.92801 9.50652C7.45792 9.66849 7.01678 9.82821 6.73693 10.0011C6.45702 10.1739 6.3705 10.2858 6.35651 10.4832C6.35488 10.5056 6.38182 10.6252 6.51472 10.7922C6.64762 10.9591 6.86141 11.1512 7.08507 11.3195C7.53239 11.656 7.99903 11.8972 7.99903 11.8972L7.50194 12.8669C7.50194 12.8669 6.96755 12.5948 6.42989 12.1903C6.16107 11.9881 5.88643 11.7528 5.6621 11.471C5.43777 11.1892 5.2387 10.8389 5.26945 10.4058C5.31268 9.79794 5.72477 9.34523 6.16434 9.07379C6.60385 8.80236 7.10293 8.63822 7.57296 8.47626C8.04304 8.31429 8.48419 8.15457 8.76404 7.98171C9.04394 7.80885 9.13047 7.69696 9.14445 7.49958C9.15414 7.36322 9.07077 7.12612 8.84862 6.84706C8.62641 6.56794 8.2905 6.2689 7.94369 6.008C7.25018 5.48627 6.53319 5.11687 6.53319 5.11687L7.03028 4.14716ZM15.5005 11.3526C16.2876 11.3526 16.8199 11.7107 17.2268 12.321C17.3952 12.5736 17.5312 12.872 17.6334 13.1968C16.948 13.0995 16.2366 13.0482 15.5005 13.0482C14.7644 13.0482 14.053 13.0995 13.3676 13.1968C13.4698 12.872 13.6057 12.5736 13.7742 12.321C14.181 11.7107 14.7134 11.3526 15.5005 11.3526ZM15.5005 14.1378C22.7314 14.1378 27.2316 19.3471 27.5215 24.6732H3.4795C3.76946 19.3471 8.26961 14.1377 15.5005 14.1377V14.1378ZM29.6465 24.9538L30.417 25.7243C29.3199 26.8215 28.0942 26.8526 27.1255 26.8526H3.87548C2.90673 26.8526 1.68114 26.8215 0.583972 25.7243L1.35449 24.9538C2.19488 25.7941 2.90673 25.763 3.87548 25.763H27.1255C28.0942 25.763 28.8061 25.7941 29.6465 24.9538ZM24.1699 27.9424L22.9589 29.7591H8.04208L6.83102 27.9424H24.1699Z" fill="black"/>
                        </svg> Meal service</p>
                    </div>
                    <button class="border-0 rounded-bottom-4 mt-2 text-center custom-hover" onclick="window.location.href='{{ url('departure') }}'" >Select this flight</button>

                  </div>
                  </div>
                </div>

        </div>
    </div>

 --}}



</div>




{{--@section('content')
<div class="container">
    <h2>Search Results</h2>
    @if($flights->isEmpty())
        <p>No flights found matching your criteria.</p>
    @else
        <div class="row">
            @foreach($flights as $flight)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $flight->flight_number }}</h5>
                            <p class="card-text">From: {{ $flight->departureAirport->name }} ({{ $flight->departureAirport->city }})</p>
                            <p class="card-text">To: {{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->city }})</p>
                            <p class="card-text">Departure: {{ $flight->departure_time }}</p>
                            <p class="card-text">Arrival: {{ $flight->arrival_time }}</p>
                            <p class="card-text">Class: {{ $class }}</p> {{-- Assuming $class is passed correctly
                            <!-- Add more flight details as needed -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div> --}}


</x-ticket>
  {{-- Page Title
  <div class="container">
    <h1 class="mt-5 mb-5 text-start fs-3 fw-normal">
        Review your trip from <span style="color: #374294">{{ $departureFlight->departureAirport->city }}</span> to <span style="color: #374294">{{ $departureFlight->arrivalAirport->city }}</span>
    </h1>
</div>

{{-- Departure Flight Details --}}
{{-- <div class="container mt-3">
    <div class="card mb-3">
        <div class="card-header">
            Departure Flight
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $departureFlight->departureAirport->city }} to {{ $departureFlight->arrivalAirport->city }}</h5>
            <p class="card-text">Departure: {{ $departureFlight->departure_time->format('D, d M Y H:i') }}</p>
            <p class="card-text">Arrival: {{ $departureFlight->arrival_time->format('D, d M Y H:i') }}</p>
            <p class="card-text">Class: {{ session('classType', 'N/A') }}</p>
            {{-- Add more details as needed --}}
        {{-- </div>
    </div>
</div>  --}}

{{-- Return Flight Details --}}
{{-- <div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Return Flight
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $returnFlight->departureAirport->city }} to {{ $returnFlight->arrivalAirport->city }}</h5>
            <p class="card-text">Departure: {{ $returnFlight->departure_time->format('D, d M Y H:i') }}</p>
            <p class="card-text">Arrival: {{ $returnFlight->arrival_time->format('D, d M Y H:i') }}</p>
            <p class="card-text">Class: {{ session('classType', 'N/A') }}</p>
            {{-- Add more details as needed --}}
        {{-- </div>
    </div>
</div>

Booking Information Form (simplified example)
<div class="container">
    <h2 class="mt-5">Enter Booking Information</h2>
    <form>
        <div class="mb-3">
            <label for="passengerName" class="form-label">Passenger Name</label>
            <input type="text" class="form-control" id="passengerName" name="passengerName">
        </div>
        <button type="submit" class="btn btn-primary">Book Flight</button>
    </form>
</div>  --}}
