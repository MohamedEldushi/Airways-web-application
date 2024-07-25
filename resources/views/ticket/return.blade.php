

<x-ticket>

    <style>


        .row{
            background: rgba(255, 255, 255, 0.69);
        }
        .return{
                    background: rgba(255, 255, 255, 0.69);
                }

    .underline {
        text-decoration: underline;
    }
    .custom-button {
            background: #343D7E;
            color: white;
            transition: background 0.3s ease-in-out;
        }

        .custom-button:hover {
            background: #DAB03C;
            color: white;
 /* Change the color on hover */
        }

    </style>

  {{-- Page Title --}}
  <div class="container">
    <h1 class="mx-2 mx-md-5 mt-5 mb-5 text-start fs-3 fw-normal  ">
        Review your trip from <span style="color: #374294">{{ $departureFlight->departureAirport->city }}</span> to <span style="color: #374294">{{ $departureFlight->arrivalAirport->city }}</span>
    </h1>
    {{-- <hr class="mx-5 mt-5 mb-5" > --}}

</div>
<div class="container">
{{-- <form action="{{ route('booking.review') }}" method="POST">
    {{-- @csrf --}}
<form action="{{ route('passenger.details.store') }}" method="POST">
    @csrf
<input type="hidden" name="departure_flight_id" value="{{ session('departureFlightId') }}">
<input type="hidden" name="return_flight_id" value="{{ session('returnFlightId') }}">


{{-- <input type="hidden" name="flight_id" value="{{ session('selectedFlightId') }}"> --}}
<input type="hidden" name="departureClassType" value="{{ session('departureClassType') }}">

<input type="hidden" name="return_class" value="{{ session('returnClass') }}">
{{-- if statment if returnflight --}}
{{-- @if($tripType === 'return' && isset($returnFlight)) --}}
<input type="hidden" name="returnFlightId" value="{{ $returnFlight->id }}">
<input type="hidden" name="returnClassType" value="{{ session('returnClassType') }}">
{{-- end if --}}



{{-- countryCode --}}
{{-- mobileNumber --}}

{{-- Departure Flight Details --}}
<div class="container mt-3">
    <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:250px; left:190px" class="mx-auto " width="45" height="45" viewBox="0 0 55 55" fill="none">
        <path opacity="0.4" d="M27.5 55C42.6877 55 55 42.6877 55 27.5C55 12.3122 42.6877 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6877 12.3122 55 27.5 55Z" fill="#006F12"/>
        <path d="M23.5931 37.3453C23.0431 37.3453 22.5206 37.1253 22.1356 36.7403L14.353 28.9578C13.5555 28.1603 13.5555 26.8403 14.353 26.0428C15.1505 25.2453 16.4705 25.2453 17.268 26.0428L23.5931 32.3678L37.7281 18.2328C38.5256 17.4353 39.8456 17.4353 40.6431 18.2328C41.4406 19.0303 41.4406 20.3503 40.6431 21.1478L25.0506 36.7403C24.6656 37.1253 24.1431 37.3453 23.5931 37.3453Z" fill="#006F12"/>
    </svg>

    <div class=" departure row g-3 mx-2 mx-md-5  shadow bg-body-tertiary rounded-3 border    mb-2 border-opacity-25">
                <div class="col-md-1 p-0 pb-0 pt-3 mt-0  text-center">
                {{-- Departure Time and Location --}}
                    <h6>{{ $departureFlight->departure_time->format('H:i') }}</h6>
                    <p class="mb-0">{{ $departureFlight->departureAirport->code }}</p>
                    <p style="color: #374294 "  class="fw-semibold">{{ $departureFlight->departureAirport->city }}</p>
                </div>

                <div class="col-md-2 p-0 py-0 mt-0 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 38px ;" class="me-2 text-primary " width="174" height="31" viewBox="0 0 174 31" fill="none">
                            <path d="M103.008 13.0901H93.273C92.8415 13.0901 92.4405 12.93 92.2118 12.6667L82.5184 1.50205C82.2896 1.23865 81.8885 1.07864 81.4572 1.07864H79.5821C78.7678 1.07864 78.1705 1.62941 78.368 2.19799L81.7619 11.9707C81.9594 12.5394 81.3621 13.0901 80.5478 13.0901H74.3757C74.0146 13.0901 73.6713 12.9779 73.4338 12.7824L69.4913 9.53892C68.6547 8.8508 67.0908 9.39368 67.3182 10.2933L68.5527 15.1811C68.5796 15.2876 68.5796 15.3969 68.5527 15.5033L67.3182 20.3912C67.0908 21.2907 68.6547 21.8337 69.4913 21.1456L73.4338 17.902C73.6713 17.7065 74.0146 17.5944 74.3757 17.5944H80.5478C81.3621 17.5944 81.9594 18.1451 81.7619 18.7137L78.368 28.4865C78.1705 29.0551 78.7678 29.6058 79.5821 29.6058H81.4572C81.8885 29.6058 82.2896 29.4458 82.5184 29.1824L92.2118 18.0178C92.4405 17.7544 92.8415 17.5944 93.273 17.5944H103.008C104.736 17.5944 106.137 16.586 106.137 15.3422C106.137 14.0984 104.736 13.0901 103.008 13.0901Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <line  x1="106.344" y1="15.6088" x2="170.64" y2="15.6088" stroke="black"/>
                            <line y1="15.6088" x2="67.2961" y2="15.6088"x1="0" stroke="black"/>
                        </svg>
                </div>
                  {{-- Arrival Time and Location --}}
                <div class="col-md-1 p-0 py-0 pt-3 mt-0  text-center">
                    <h6>{{ $departureFlight->arrival_time->format('H:i') }}</h6>
                    <p  class="mb-0">{{ $departureFlight->arrivalAirport->code }}</p>
                    <p style="color: #374294 " class="fw-semibold">{{ $departureFlight->arrivalAirport->city }}</p>
                </div>
                 {{-- Flight Duration --}}
                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                    <div class="border-start border-secondary" style="height: 80px; ">

                    <p class="pt-2">Flight duration</p>
                    @php
                    $duration = $departureFlight->departure_time->diff($departureFlight->arrival_time);
                    $formattedDuration = $duration->format('%Hh %Im');
                    @endphp
                    <p  class="fw-semibold" >{{ $formattedDuration }}</p></div>
                </div>
                {{-- Date --}}
                <div class="col-md-2 p-0 py-0 pt-3 mt-0 text-center">
                    <div class="border-start border-secondary" style="height: 80px; ">

                    <p class="pt-2">Date</p>
                    <p  class="fw-semibold">{{ $departureFlight->departure_time->format('d/m/Y') }}</p></div>

                </div>

                  {{-- Class Type --}}
                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center ">
                    <div class="border-start border-secondary pb-5" style="height: 80px; ">

                        <h6 class="pt-4">{{ strtoupper(session('departureClassType', 'Default')) }}  Class</h6>
                    </div>
                </div>

                  {{-- Change Flight Button --}}
                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                    <div class="border-start border-secondary" style="height: 80px;">

                        <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                            <p class="my-auto pt-4 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-gear mb-1 me-1  fw-semibold" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                                Change flight
                            </p>
                        </a>

                </div>
            </div>



         </div>





{{-- Check if trip type is "return" and if a returnFlight is set --}}
@if($tripType === 'return' && isset($returnFlight))
    <hr class="col-md-11  mx-auto mt-5 mb-5" >


        <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:440px; left:190px" class="mx-auto " width="45" height="45" viewBox="0 0 55 55" fill="none">
            <path opacity="0.4" d="M27.5 55C42.6877 55 55 42.6877 55 27.5C55 12.3122 42.6877 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6877 12.3122 55 27.5 55Z" fill="#006F12"/>
            <path d="M23.5931 37.3453C23.0431 37.3453 22.5206 37.1253 22.1356 36.7403L14.353 28.9578C13.5555 28.1603 13.5555 26.8403 14.353 26.0428C15.1505 25.2453 16.4705 25.2453 17.268 26.0428L23.5931 32.3678L37.7281 18.2328C38.5256 17.4353 39.8456 17.4353 40.6431 18.2328C41.4406 19.0303 41.4406 20.3503 40.6431 21.1478L25.0506 36.7403C24.6656 37.1253 24.1431 37.3453 23.5931 37.3453Z" fill="#006F12"/>
        </svg>


        <div class=" departure  row g-3 mx-2 mx-md-5  shadow rounded-3 border   mb-2 border-opacity-25 ">
                    <div class="col-md-1 p-0 pb-0 pt-3 mt-0  text-center">
                    {{-- Departure Time and Location --}}
                        <h6>{{ $returnFlight->departure_time->format('H:i') }}</h6>
                        <p class="mb-0">{{ $returnFlight->departureAirport->code }}</p>
                        <p style="color: #374294 "  class="fw-semibold">{{ $returnFlight->departureAirport->city }}</p>
                    </div>

                    <div class="col-md-2 p-0 py-0 mt-0 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 38px" class="me-2  " width="174" height="31" viewBox="0 0 174 31" fill="none">
                                <path d="M103.008 13.0901H93.273C92.8415 13.0901 92.4405 12.93 92.2118 12.6667L82.5184 1.50205C82.2896 1.23865 81.8885 1.07864 81.4572 1.07864H79.5821C78.7678 1.07864 78.1705 1.62941 78.368 2.19799L81.7619 11.9707C81.9594 12.5394 81.3621 13.0901 80.5478 13.0901H74.3757C74.0146 13.0901 73.6713 12.9779 73.4338 12.7824L69.4913 9.53892C68.6547 8.8508 67.0908 9.39368 67.3182 10.2933L68.5527 15.1811C68.5796 15.2876 68.5796 15.3969 68.5527 15.5033L67.3182 20.3912C67.0908 21.2907 68.6547 21.8337 69.4913 21.1456L73.4338 17.902C73.6713 17.7065 74.0146 17.5944 74.3757 17.5944H80.5478C81.3621 17.5944 81.9594 18.1451 81.7619 18.7137L78.368 28.4865C78.1705 29.0551 78.7678 29.6058 79.5821 29.6058H81.4572C81.8885 29.6058 82.2896 29.4458 82.5184 29.1824L92.2118 18.0178C92.4405 17.7544 92.8415 17.5944 93.273 17.5944H103.008C104.736 17.5944 106.137 16.586 106.137 15.3422C106.137 14.0984 104.736 13.0901 103.008 13.0901Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                <line x1="106.344" y1="15.6088" x2="170.64" y2="15.6088" stroke="black"/>
                                <line y1="15.6088" x2="67.2961" y2="15.6088"x1="0" stroke="black"/>
                            </svg>
                    </div>
                      {{-- Arrival Time and Location --}}
                    <div class="col-md-1 p-0 py-0 pt-3 mt-0  text-center">
                        <h6>{{ $returnFlight->arrival_time->format('H:i') }}</h6>
                        <p  class="mb-0">{{ $returnFlight->arrivalAirport->code }}</p>
                        <p style="color: #374294 " class="fw-semibold">{{ $returnFlight->arrivalAirport->city }}</p>
                    </div>
                     {{-- Flight Duration --}}
                    <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                        <div class="border-start border-secondary" style="height: 80px; ">

                        <p class="pt-2">Flight duration</p>
                        @php
                        $duration = $returnFlight->departure_time->diff($returnFlight->arrival_time);
                        $formattedDuration = $duration->format('%Hh %Im');
                        @endphp
                        <p  class="fw-semibold" >{{ $formattedDuration }}</p></div>
                    </div>
                    {{-- Date --}}
                    <div class="col-md-2 p-0 py-0 pt-3 mt-0 text-center">
                        <div class="border-start border-secondary" style="height: 80px; ">

                        <p class="pt-2">Date</p>
                        <p  class="fw-semibold">{{ $returnFlight->departure_time->format('d/m/Y') }}</p></div>

                    </div>

                      {{-- Class Type --}}
                    <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center ">
                        <div class="border-start border-secondary pb-5" style="height: 80px; ">

                            <h6 class="pt-4">{{ strtoupper($returnClassType) }} Class</h6>
                        </div>
                    </div>

                      {{-- Change Flight Button --}}
                    <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                        <div class="border-start border-secondary" style="height: 80px;">

                            <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                                <p class="my-auto pt-4 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-gear mb-1 me-1  fw-semibold" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                    Change flight
                                </p>
                            </a>

                    </div>
                </div>



             </div>




             @endif

            </div>


























                    <style>
                        body {
                            background-color: #f5f5f5;
                        }
                        #sum {
                            background: #ffffff;
                            border-radius: 10px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                            margin-top: 2rem;
                            padding: 2rem;
                            color: #374294;
                        }

                        .form-label {
                            color: #374294;
                            font-weight: 600;
                        }
                        .form-control, .form-select {
                            border-radius: .5rem;
                        }
                        .custom-header {
                            font-size: 1.5rem;
                            color: #374294;
                            margin-bottom: 1rem;
                        }
                        .highlight {
                            color: #3348E7;
                        }
                        .information-notice {
                            color: #333;
                            font-size: .875rem;
                        }
                        .underline {
                            text-decoration: underline;
                            color: #031490
                        }
                    </style>
 {{-- <hr class="col-md-11  mx-auto mt-5"> --}}

 {{-- @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif --}}
                    <div class="container  col-md-11 mt-5">

                            {{-- <form action="{{ route('passenger.store') }}" method="POST">

                            @csrf --}}
                            <!-- Hidden Inputs for Flight IDs -->
                            {{-- <input type="hidden" name="departure_flight_id" value="{{ $departureFlightId }}">
                            <input type="hidden" name="return_flight_id" value="{{ session('returnFlightId') }}">
                            <input type="hidden" name="flight_id" value="{{ session('selectedFlightId') }}">
 --}}


{{-- <input type="hidden" name="return_flight_id" value="{{ session('returnFlightId') }}"> --}}


   <h3 class="mt-5">Who's travelling?</h3>
   {{-- <div id="sum" class="custom-card ">
    <h4 class="custom-header">Passenger details</h4>
    <div class="row">
   @php
   $passengerInfo = session('passenger_info', ['adult_count' => 1, 'child_count' => 0, 'infant_count' => 0]); // Default values for demonstration
   @endphp

   @foreach(['adult' => 'Adult', 'child' => 'Child', 'infant' => 'Infant'] as $typeKey => $typeName)
       @for($i = 0; $i < $passengerInfo[$typeKey . '_count']; $i++)
           <div class="custom-card">
               <h4 class="custom-header">{{ $typeName }} Passenger Details ({{ $i + 1 }})</h4>
               <div class="row">
                   <!-- First Name -->
                   <div class="col-md-4 mb-3">
                       <label for="firstName{{$typeKey.$i}}" class="form-label">First Name</label>
                       <input type="text" class="form-control" name="passengers[{{$typeKey}}][{{$i}}][first_name]" id="firstName{{$typeKey.$i}}" placeholder="First name" required>
                   </div>
                   <!-- Surname -->
                   <div class="col-md-4 mb-3">
                       <label for="lastName{{$typeKey.$i}}" class="form-label">Surname</label>
                       <input type="text" class="form-control" name="passengers[{{$typeKey}}][{{$i}}][surname]" id="lastName{{$typeKey.$i}}" placeholder="Surname" required>
                   </div>
                   <!-- Passport Number -->
                   <div class="col-md-4 mb-3">
                       <label for="passportNumber{{$typeKey.$i}}" class="form-label">Passport Number</label>
                       <input type="text" class="form-control" name="passengers[{{$typeKey}}][{{$i}}][passport_number]" id="passportNumber{{$typeKey.$i}}" placeholder="Passport number" required>
                   </div>
               </div>
           </div>
       @endfor
   @endforeach

   </div></div>
                      --}}



   <!-- Personal Details Section -->
                        {{-- <div id="sum" class="custom-card ">
                            <h4 class="custom-header">Passenger details</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="titleSelect" class="form-label">Title</label>
                                    <select class="form-select"name="passengers[0][title]"  id="titleSelect">
                                        <option selected>Title</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="passengers[0][gender]" id="maleGender" value="Male">
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="passengers[0][gender]" id="femaleGender" value="Female">
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label   id="floatingInput" class="form-label">First name</label>
                                    <input type="text"  name="passengers[0][first_name]"   class="form-control" id="firstName" placeholder="First name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last name</label>
                                    <input type="text"name="passengers[0][last_name]" class="form-control" id="lastName" placeholder="Last name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="birthDate" class="form-label">Birthday</label>
                                    <input type="date"name="passengers[0][birthDate]"  class="form-control" id="birthDate">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <select class="form-select"name="passengers[0][nationality]" id="nationality">
                                        <option selected>Select nationality</option>
                                        <option value="Afghan">Afghan</option>
                                        <option value="Albanian">Albanian</option>
                                        <option value="Algerian">Algerian</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Passport Details Section -->
                        <div id="sum" class="custom-card">
                            <h4 class="custom-header">Passport details</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="passportNumber" class="form-label">Passport number</label>
                                    <input type="text" class="form-control"name="passengers[0][passportNumber]"  id="passportNumber" placeholder="Passport number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Date of expiry</label>
                                    <input type="date"name="passengers[0][expiryDate]"  class="form-control" id="expiryDate">
                                </div>
                            </div>
                            <p class="information-notice">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.706c.89 0 1.438-.99.982-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                It is not possible to change the name and surname information after completing the reservation process.
                            </p>
                        </div> --}}
                        @php
                        $passengerInfo = session('passenger_info');
                        @endphp

                        @foreach(['adult' => 'Adult', 'child' => 'Child', 'infant' => 'Infant'] as $typeKey => $typeName)
                            @for($i = 0; $i < $passengerInfo[$typeKey . '_count']; $i++)
                            <div id="sum" class="custom-card ">
                                                                    <h4 class="custom-header">{{ ucfirst($typeName) }} Passenger Details ({{ $i + 1 }})</h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="titleSelect{{$typeKey.$i}}" class="form-label">Title</label>
                                            <select class="form-select" name="passengers[{{$i}}][title]" id="titleSelect{{$typeKey.$i}}">
                                                <option selected>Title</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Dr">Dr</option>
                                            </select>
                                        </div>
                                        <!-- Gender -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Gender</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="passengers[{{$i}}][gender]" id="maleGender{{$typeKey.$i}}" value="Male">
                                                    <label class="form-check-label" for="maleGender{{$typeKey.$i}}">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="passengers[{{$i}}][gender]" id="femaleGender{{$typeKey.$i}}" value="Female">
                                                    <label class="form-check-label" for="femaleGender{{$typeKey.$i}}">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- First Name -->
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName{{$typeKey.$i}}" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="passengers[{{$i}}][first_name]" id="firstName{{$typeKey.$i}}" placeholder="First name" required>
                                        </div>
                                        <!-- Surname -->
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName{{$typeKey.$i}}" class="form-label">Surname</label>
                                            <input type="text" class="form-control" name="passengers[{{$i}}][last_name]" id="lastName{{$typeKey.$i}}" placeholder="Surname" required>
                                        </div>
                                    </div>
                                    <div class="row"><div class="col-md-6 mb-3">
                                        <label for="nationalitySelect{{$typeKey.$i}}" class="form-label">Nationality</label>
                                        <select class="form-select" name="passengers[{{$i}}][nationality]" id="nationalitySelect{{$typeKey.$i}}">
                                            <option selected>Select Nationality</option>
                                            <option value="American">American</option>
                                            <option value="British">British</option>
                                            <option value="Canadian">Canadian</option>
                                            <!-- Add more nationality options as needed -->
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="birthDate{{$typeKey.$i}}" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="passengers[{{$i}}][birth_date]" id="birthDate{{$typeKey.$i}}">
                                    </div>

                                    </div>
                                    <div class="row">
                                        <!-- Passport Number -->
                                        <div class="col-md-6 mb-3">
                                            <label for="passportNumber{{$typeKey.$i}}" class="form-label">Passport Number</label>
                                            <input type="text" class="form-control" name="passengers[{{$i}}][passport_number]" id="passportNumber{{$typeKey.$i}}" placeholder="Passport number" required>
                                        </div>
                                        <!-- Date of Expiry -->
                                        <div class="col-md-6 mb-3">
                                            <label for="expiryDate{{$typeKey.$i}}" class="form-label">Date of Expiry</label>
                                            <input type="date" class="form-control" name="passengers[{{$i}}][passport_expiry_date]" id="expiryDate{{$typeKey.$i}}">
                                        </div>
                                    </div>
                                    <p class="information-notice">
                                        <svg style="color: #DAB03C" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.706c.89 0 1.438-.99.982-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        It is not possible to change the name and surname information after completing the reservation process.
                                    </p>
                                </div>
                            @endfor
                        @endforeach


                        <!-- Contact Details Section -->
                        <div id="sum" class="custom-card mb-4">
                            <h4 class="custom-header">Contact details</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="emailAddress" class="form-label">Email address</label>
                                    <input type="email" name="emailAddress"class="form-control" id="emailAddress" placeholder="Enter email">

                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="countryCode" class="form-label">Country code</label>
                                    <select class="form-select"name="countryCode" id="countryCode">
                                        <option selected>Area code</option>
                                        <option value="+44">+44 (United Kingdom)</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="mobileNumber" class="form-label">Mobile number</label>
                                    <input type="text"name="mobileNumber" class="form-control" id="mobileNumber" placeholder="Enter number">
                                </div>
                            </div>
                        </div>
                        <p class=" mx-2">The information provided above will be processed according to <span class="underline">Medsky Airways Privacy Notice</span></p>


<!-- Change button type to submit and ensure it's within <form> tags -->
    <button type="submit" class="btn custom-button mb-5 mx-2 mt-3 p-3 rounded-5 px-5">Review and pay</button>
</form>















{{--
<h3 class="mx-5 mt-5">Who's travelling?</h3>

<div class="personal details">



<div style="border-radius: 10px;
            background: rgba(255, 255, 255, 0.83);
                   box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.184);" class="row p-5 mt-5 mx-5">
    <h4 style="color: #374294">Passenger details</h4>
 <div class="col-md-6 mb-4 mt-4">
     <h6>Title</h6>
    <div class="form-floating  ">
        <select class="form-select " id="floatingSelect" aria-label="Floating label select example">
          <option selected>Title</option>
          <option value="1">Mr</option>
          <option value="2">Mrs</option>
          <option value="3">Miss</option>
          <option value="4">Ms</option>

          <option value="5">Dr</option>

        </select>
        <label for="floatingSelect">Works with selects</label>
      </div>
    </div>

    <div class="col-md-6 mb-4 mt-4">
        {{-- <h6>Gender</h6> --}}
      {{-- <div class="row mt-0">
        <div class="col-md-5  p-0 mx-0 mt-4 ms-4 p-2 ">
            <div class="form-check mx-4 p-2 px-4 border rounded-2">
                <input class="form-check-input p-3  border-2 ms-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label ms-3 mt-1  mb-1 fs-5" for="flexRadioDefault1 ">
                Male                </label>
            </div>
        </div>

        <div class="col-md-6 mt-4  ">
            <div class="form-check  mx-4 p-2 px-4 border mt-2 rounded-2 ">
                <input class="form-check-input  p-3 border-2     ms-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label ms-3 mt-1  mb-1 fs-5 " fo r="flexRadioDefault2">
                Famale                </label>
            </div>
        </div>

        </div>
    </div>


    <div class="row mt-3 ">
        <div class="col-md-6 mb-3">
            <h6>First name</h6>

            <div class="form-floating mb-3">
                <input type="text" class="form-control py-0" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">First name</label>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <h6>Last name</h6>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Last name</label>
            </div>
        </div>
        </div>

        <div class="row mt-3">

                <!-- Year Dropdown -->
                <div class="col-md-2  ">

                    <h6>Birthday    </h6>

                    <select class="form-select py-3 " id="year" name="year">

                        // Get the current year
                        // $currentYear = date("Y");

                        // Generate options for the next 10 years
                        // for ($i = 0; $i < 20; $i++) {
                        //     $year = $currentYear + $i;
                        //     echo "<option value=\"$year\">$year</option>";
                        // }
                        ?>
                    </select>
                </div>

                <!-- Month Dropdown -->
                <div style="margin-top: 27px" class="col-md-2 ">
                    <select  class="form-select py-3 " id="month" name="month">
                        // Generate options for months
                        $monthNames = [
                            'January', 'February', 'March', 'April', 'May', 'June',
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ];

                        foreach ($monthNames as $index => $monthName) {
                            $monthValue = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                            echo "<option value=\"$monthValue\">$monthName</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Day Dropdown -->
                <div  style="margin-top: 27px" class="col-md-2">
                    <select class="form-select py-3" id="day" name="day" placeholder="day">
                        // Generate options for days (1 to 31)
                        for ($i = 1; $i <= 31; $i++) {
                            $day = str_pad($i, 2, '0', STR_PAD_LEFT);
                            echo "<option value=\"$day\">$day</option>";
                        }
                        ?>
                    </select>
                </div>

                <div   class="col-md-6  ">
                    <h6> Nationality  </h6>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Select nationality</option>
                            <option value="afghan">Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <!-- Add more options for different nationalities -->
                        </select>
                        <label for="floatingSelect">Nationality</label>
                    </div>

                </div>
            </div>


        </div>
    </div>


<div class="passport-details">
    <div style="border-radius: 10px;
            background: rgba(255, 255, 255, 0.83);
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.184);" class="row p-5 mt-5 mx-5">
                <h4 style="color: #374294">Passport details</h4>
            <div class="col-md-6 mb-4 mt-4">
                <h6>Passport number</h6>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Passport number</label>
                  </div>
            </div>
            <div style="margin-left: 100px ;
          " class="col-md-4  mt-5">
                <svg style="position: absolute;top:1510px; left:850px" xmlns="http://www.w3.org/2000/svg" width="40 " height="40" viewBox="0 0 44 44" fill="none">
                    <path opacity="0.4" d="M22 44C34.1502 44 44 34.1502 44 22C44 9.84973 34.1502 0 22 0C9.84973 0 0 9.84973 0 22C0 34.1502 9.84973 44 22 44Z" fill="#3348E7"/>
                    <path d="M21.9996 25.8499C22.9016 25.8499 23.6496 25.1019 23.6496 24.1999V13.1999C23.6496 12.2979 22.9016 11.5499 21.9996 11.5499C21.0976 11.5499 20.3496 12.2979 20.3496 13.1999V24.1999C20.3496 25.1019 21.0976 25.8499 21.9996 25.8499Z" fill="#3348E7"/>
                    <path d="M24.0228 29.9637C23.9128 29.6997 23.7588 29.4577 23.5608 29.2377C23.3408 29.0397 23.0988 28.8857 22.8348 28.7757C22.3068 28.5557 21.6908 28.5557 21.1628 28.7757C20.8988 28.8857 20.6568 29.0397 20.4368 29.2377C20.2388 29.4577 20.0848 29.6997 19.9748 29.9637C19.8648 30.2277 19.7988 30.5137 19.7988 30.7997C19.7988 31.0857 19.8648 31.3717 19.9748 31.6357C20.0848 31.9217 20.2388 32.1417 20.4368 32.3617C20.6568 32.5597 20.8988 32.7137 21.1628 32.8237C21.4268 32.9337 21.7128 32.9997 21.9988 32.9997C22.2848 32.9997 22.5708 32.9337 22.8348 32.8237C23.0988 32.7137 23.3408 32.5597 23.5608 32.3617C23.7588 32.1417 23.9128 31.9217 24.0228 31.6357C24.1328 31.3717 24.1988 31.0857 24.1988 30.7997C24.1988 30.5137 24.1328 30.2277 24.0228 29.9637Z" fill="#3348E7"/>
                  </svg><h6 class="ms-5 mt-5 ">  It is not possible to change the name and surname
                     information after completing the reservation process.</h6>
            </div>
            <div class="row">

                <!-- Year Dropdown -->
                <div class="col-md-2 ">

                    <h6 >Date of expiry    </h6>

                    <select class="form-select py-3 " id="year" name="year">
                        // Get the current year
                        $currentYear = date("Y");

                        // Generate options for the next 10 years
                        for ($i = 0; $i < 20; $i++) {
                            $year = $currentYear + $i;
                            echo "<option value=\"$year\">$year</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Month Dropdown -->
                <div style="margin-top: 27px" class="col-md-2 ">
                    <select  class="form-select py-3 " id="month" name="month">
                        // Generate options for months
                        $monthNames = [
                            'January', 'February', 'March', 'April', 'May', 'June',
                            'July', 'August', 'September', 'October', 'November', 'December'
                        ];

                        foreach ($monthNames as $index => $monthName) {
                            $monthValue = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                            echo "<option value=\"$monthValue\">$monthName</option>";
                        }
                        ?>


                    </select>
                </div>

                <!-- Day Dropdown -->
                <div  style="margin-top: 27px" class="col-md-2">
                    <select class="form-select py-3" id="day" name="day" placeholder="day">
                        // Generate options for days (1 to 31)
                        for ($i = 1; $i <= 31; $i++) {
                            $day = str_pad($i, 2, '0', STR_PAD_LEFT);
                            echo "<option value=\"$day\">$day</option>";
                        }
                        ?>
                    </select>
                </div>

   </div>

 </div>
</div>
<div class="passport-details">
    <div style="border-radius: 10px;
            background: rgba(255, 255, 255, 0.83);
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.184);" class="row p-5 mt-5 mx-5">
               <h4 style="color: #374294">Contact details</h4>

               <div class="col-md-6 mb-4 mt-4">
                <h6>Email address</h6>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput"> Enter email</label>
                  </div>


            </div> --}}

            {{-- <div class="row">
                <div class="col-md-6">
                    <h6 >Country code</h6>
                    <select class="form-select py-3" id="countryCode" name="countryCode">
                        <!-- Replace these options with the desired country codes -->
                        <option value="1">Area code</option>
                        <option value="44">+44 (United Kingdom)</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="col-md-6">
                    <h6>Mobile number</h6>
                    <div class="form-floating mb-3" >
                        <input  type="email" class="form-control border-1 " id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"> Enter number</label>
                      </div>

                    </div>
            </div>



    </div> --}}
{{-- </div> --}}


</x-ticket>
