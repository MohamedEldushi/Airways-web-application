<x-ticket><style>
        .first{
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
            background: #5b6ed8; /* Change the color on hover */
        }
    h3{
    color:#2d379b;
    }
    .custom-button {
            background: #343D7E;
            color: white;
            transition: background 0.3s ease-in-out;
        }

        .custom-button:hover {
            background: #5b6ed8;
            color: white/* Change the color on hover */
        }
        .btn-cancel {
            border-color: #343D7E; /* Default border color */
            color: #343D7E; /* Default text color */
        }

        .btn-cancel:hover {
            background-color: #5b6ed8;
            color: #fff;
        }
     /* .custom-width {
            width: 200px;} */
            @media (min-width: 768px) {
            /* Apply custom width only for screens larger than 768px */
            .custom-width {
                width: 200px;
            }
        }
</style>
{{-- @if($departureFlight)
    <div>Departure Flight: {{ strtoupper($departureClass) }} Class</div>
@endif

@if($returnFlight)
    <div>Return Flight: {{ strtoupper($returnClass) }} Class</div>
@endif --}}


<div class="contianer mt-5 ">

<div  class="contaier mx-5 pt-5 ">



    {{-- Departure Flight Details --}}
    <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:220px; left:183px" class="mx-auto " width="45" height="45" viewBox="0 0 55 55" fill="none">
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
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 38px" class="me-2  " width="174" height="31" viewBox="0 0 174 31" fill="none">
                            <path d="M103.008 13.0901H93.273C92.8415 13.0901 92.4405 12.93 92.2118 12.6667L82.5184 1.50205C82.2896 1.23865 81.8885 1.07864 81.4572 1.07864H79.5821C78.7678 1.07864 78.1705 1.62941 78.368 2.19799L81.7619 11.9707C81.9594 12.5394 81.3621 13.0901 80.5478 13.0901H74.3757C74.0146 13.0901 73.6713 12.9779 73.4338 12.7824L69.4913 9.53892C68.6547 8.8508 67.0908 9.39368 67.3182 10.2933L68.5527 15.1811C68.5796 15.2876 68.5796 15.3969 68.5527 15.5033L67.3182 20.3912C67.0908 21.2907 68.6547 21.8337 69.4913 21.1456L73.4338 17.902C73.6713 17.7065 74.0146 17.5944 74.3757 17.5944H80.5478C81.3621 17.5944 81.9594 18.1451 81.7619 18.7137L78.368 28.4865C78.1705 29.0551 78.7678 29.6058 79.5821 29.6058H81.4572C81.8885 29.6058 82.2896 29.4458 82.5184 29.1824L92.2118 18.0178C92.4405 17.7544 92.8415 17.5944 93.273 17.5944H103.008C104.736 17.5944 106.137 16.586 106.137 15.3422C106.137 14.0984 104.736 13.0901 103.008 13.0901Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="106.344" y1="15.6088" x2="170.64" y2="15.6088" stroke="black"/>
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

                        {{-- <h6 class="pt-4">{{ strtoupper($departureClassType) }}   Class</h6> --}}
                    </div>
                </div>

                  {{-- Change Flight Button --}}
                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                    <div class="border-start border-secondary" style="height: 80px;">

                        <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                            <p class="my-auto pt-4 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear mb-1 me-1  fw-semibold" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                                Change flight
                            </p>
                        </a>
                        {{-- <p>{{$booking->departureFlight->id}}</p> --}}

                        {{-- <p>{{$booking->returnFlight->return_flight_id}}</p> --}}
                </div>
            </div>
            {{-- <p class="mb-0">{{ $booking->returnFlight->departureAirport->city }}</p> --}}


            {{-- <P>{{$booking->returnFlight->flight_number}}</P> --}}

         </div>

         <hr class="col-md-11  mx-auto mt-5 mb-5" >
         {{-- <p>{{$booking->return_flight_id}}</p> --}}



{{-- <p>{{$returnFlight->id}}</p> --}}
{{-- @if($returnFlight) --}}

@if(isset($returnFlight))

         <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:410px; left:184px" class="mx-auto " width="45" height="45" viewBox="0 0 55 55" fill="none">
             <path opacity="0.4" d="M27.5 55C42.6877 55 55 42.6877 55 27.5C55 12.3122 42.6877 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6877 12.3122 55 27.5 55Z" fill="#006F12"/>
             <path d="M23.5931 37.3453C23.0431 37.3453 22.5206 37.1253 22.1356 36.7403L14.353 28.9578C13.5555 28.1603 13.5555 26.8403 14.353 26.0428C15.1505 25.2453 16.4705 25.2453 17.268 26.0428L23.5931 32.3678L37.7281 18.2328C38.5256 17.4353 39.8456 17.4353 40.6431 18.2328C41.4406 19.0303 41.4406 20.3503 40.6431 21.1478L25.0506 36.7403C24.6656 37.1253 24.1431 37.3453 23.5931 37.3453Z" fill="#006F12"/>
         </svg>

         <div class=" departure  row g-3 mx-2 mx-md-5  shadow rounded-3 border bg-light  mb-2 border-opacity-25 ">
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

                         <h6 class="pt-4">{{ strtoupper(session('returnClassType')) }}  Class</h6>
                         </div>
                     </div>

                       {{-- Change Flight Button --}}
                     <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                         <div class="border-start border-secondary" style="height: 80px;">

                             <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                                 <p class="my-auto pt-4 fw-semibold">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear mb-1 me-1  fw-semibold" viewBox="0 0 16 16">
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


    {{-- <h1 class="mx-2 mx-md-5 mt-5 mb-5 text-start fs-3 fw-normal  ">
        <span style="color: #374294 ">New York</span> to <span style="color: #374294">Istanbul</span> on Saturday, November 21
    </h1>


    <div class=" first row g-3 mx-2  mx-md-5 border shadow-sm border-start-0 rounded-3">
                <div class="col-md-1 p-0 pb-0 pt-3 mt-0  text-center">

                    <h6>11:10</h6>
                    <p class="mb-0">JFK</p>
                    <p>New York</p>
                </div>

                <div class="col-md-2 p-0 py-0 mt-0 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 38px" class="me-2  " width="174" height="31" viewBox="0 0 174 31" fill="none">
                            <path d="M103.008 13.0901H93.273C92.8415 13.0901 92.4405 12.93 92.2118 12.6667L82.5184 1.50205C82.2896 1.23865 81.8885 1.07864 81.4572 1.07864H79.5821C78.7678 1.07864 78.1705 1.62941 78.368 2.19799L81.7619 11.9707C81.9594 12.5394 81.3621 13.0901 80.5478 13.0901H74.3757C74.0146 13.0901 73.6713 12.9779 73.4338 12.7824L69.4913 9.53892C68.6547 8.8508 67.0908 9.39368 67.3182 10.2933L68.5527 15.1811C68.5796 15.2876 68.5796 15.3969 68.5527 15.5033L67.3182 20.3912C67.0908 21.2907 68.6547 21.8337 69.4913 21.1456L73.4338 17.902C73.6713 17.7065 74.0146 17.5944 74.3757 17.5944H80.5478C81.3621 17.5944 81.9594 18.1451 81.7619 18.7137L78.368 28.4865C78.1705 29.0551 78.7678 29.6058 79.5821 29.6058H81.4572C81.8885 29.6058 82.2896 29.4458 82.5184 29.1824L92.2118 18.0178C92.4405 17.7544 92.8415 17.5944 93.273 17.5944H103.008C104.736 17.5944 106.137 16.586 106.137 15.3422C106.137 14.0984 104.736 13.0901 103.008 13.0901Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="106.344" y1="15.6088" x2="170.64" y2="15.6088" stroke="black"/>
                            <line y1="15.6088" x2="67.2961" y2="15.6088"x1="0" stroke="black"/>
                        </svg>
                </div>

                <div class="col-md-1 p-0 py-0 pt-3 mt-0  text-center">
                    <h6>20:10</h6>
                    <p  class="mb-0">IST</p>
                    <p>Istanbul</p>
                </div>

                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                    <div class="border-start border-secondary" style="height: 80px; ">

                    <p>Flight duration</p>
                    <h6>20h 5m</h6></div>
                </div>

                <div class="col-md-2 p-0 py-0 pt-3 mt-0 text-center">
                    <div class="border-start border-secondary" style="height: 80px; ">

                    <p>Date</p>
                    <h6>21/11/2023</h6></div>

                </div>


                <div class="col-md-2 p-0 py-0 pt-4 mt-0  text-center ">
                    <div class="border-start border-secondary" style="height: 69px; ">

                    <h6 class="pt-2">ECONOMY Economy Semi-Flexible</h6>
                    </div>
                </div>

                <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                    <div class="border-start border-secondary" style="height: 80px;">

                        <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                            <p class="my-auto pt-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear mb-1 me-1" viewBox="0 0 16 16">
                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                </svg>
                                Change flight
                            </p>
                        </a>

                </div>
            </div>



            </div>

            <hr class="mx-5 mt-5 ">
            <h1 class="mx-2 mx-md-5 mt-5 mb-5  text-start fs-3 fw-normal  ">
                <span style="color: #374294 ">Istanbul</span> to <span style="color: #374294">New York</span> on Saturday, November 21
            </h1>

            {{-- <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:250px; left:148px" class="mx-auto " width="45" height="45" viewBox="0 0 55 55" fill="none">
                <path opacity="0.4" d="M27.5 55C42.6877 55 55 42.6877 55 27.5C55 12.3122 42.6877 0 27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6877 12.3122 55 27.5 55Z" fill="#006F12"/>
                <path d="M23.5931 37.3453C23.0431 37.3453 22.5206 37.1253 22.1356 36.7403L14.353 28.9578C13.5555 28.1603 13.5555 26.8403 14.353 26.0428C15.1505 25.2453 16.4705 25.2453 17.268 26.0428L23.5931 32.3678L37.7281 18.2328C38.5256 17.4353 39.8456 17.4353 40.6431 18.2328C41.4406 19.0303 41.4406 20.3503 40.6431 21.1478L25.0506 36.7403C24.6656 37.1253 24.1431 37.3453 23.5931 37.3453Z" fill="#006F12"/>
            </svg> --}}

            {{-- <div class=" first row g-3 mx-2 mx-md-5 mb-5   border shadow-sm border-start-0 rounded-3">
                        <div class="col-md-1 p-0 pb-0 pt-3 mt-0  text-center">

                            <h6>11:10</h6>
                            <p class="mb-0">JFK</p>
                            <p>New York</p>
                        </div>

                        <div class="col-md-2 p-0 py-0 mt-0 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: 38px" class="me-2  " width="174" height="31" viewBox="0 0 174 31" fill="none">
                                    <path d="M103.008 13.0901H93.273C92.8415 13.0901 92.4405 12.93 92.2118 12.6667L82.5184 1.50205C82.2896 1.23865 81.8885 1.07864 81.4572 1.07864H79.5821C78.7678 1.07864 78.1705 1.62941 78.368 2.19799L81.7619 11.9707C81.9594 12.5394 81.3621 13.0901 80.5478 13.0901H74.3757C74.0146 13.0901 73.6713 12.9779 73.4338 12.7824L69.4913 9.53892C68.6547 8.8508 67.0908 9.39368 67.3182 10.2933L68.5527 15.1811C68.5796 15.2876 68.5796 15.3969 68.5527 15.5033L67.3182 20.3912C67.0908 21.2907 68.6547 21.8337 69.4913 21.1456L73.4338 17.902C73.6713 17.7065 74.0146 17.5944 74.3757 17.5944H80.5478C81.3621 17.5944 81.9594 18.1451 81.7619 18.7137L78.368 28.4865C78.1705 29.0551 78.7678 29.6058 79.5821 29.6058H81.4572C81.8885 29.6058 82.2896 29.4458 82.5184 29.1824L92.2118 18.0178C92.4405 17.7544 92.8415 17.5944 93.273 17.5944H103.008C104.736 17.5944 106.137 16.586 106.137 15.3422C106.137 14.0984 104.736 13.0901 103.008 13.0901Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="106.344" y1="15.6088" x2="170.64" y2="15.6088" stroke="black"/>
                                    <line y1="15.6088" x2="67.2961" y2="15.6088"x1="0" stroke="black"/>
                                </svg>
                        </div>

                        <div class="col-md-1 p-0 py-0 pt-3 mt-0  text-center">
                            <h6>20:10</h6>
                            <p  class="mb-0">IST</p>
                            <p>Istanbul</p>
                        </div>

                        <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                            <div class="border-start border-secondary" style="height: 80px; ">

                            <p>Flight duration</p>
                            <h6>20h 5m</h6></div>
                        </div>

                        <div class="col-md-2 p-0 py-0 pt-3 mt-0 text-center">
                            <div class="border-start border-secondary" style="height: 80px; ">

                            <p>Date</p>
                            <h6>21/11/2023</h6></div>

                        </div>


                        <div class="col-md-2 p-0 py-0 pt-4 mt-0  text-center ">
                            <div class="border-start border-secondary" style="height: 69px; ">

                            <h6 class="pt-2">ECONOMY Economy Semi-Flexible</h6>
                            </div>
                        </div>

                        <div class="col-md-2 p-0 py-0 pt-3 mt-0  text-center">
                            <div class="border-start border-secondary" style="height: 80px;">

                                <a href='{{ url('tickets') }}'class=" text-decoration-none ">
                                    <p class="my-auto pt-4 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear mb-1 me-1" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                        </svg>
                                        Change flight
                                    </p>
                                </a>

                        </div>
                    </div>



            </div>  --}}



<div style="border-radius: 10px;
border: 1px solid rgba(0, 0, 0, 0.16);
background: rgba(255, 255, 255, 0.69);" class="container mt-5">

<h3  class="mx-5 mt-4">Trip summary</h3>
<hr class="mx-5 mb-5 mt-4">

<h3 class="mx-5 ">{{ $departureFlight->departureAirport->city }} > {{ $departureFlight->arrivalAirport->code }} <span class="fw-light fs-6"> {{ $departureFlight->departure_time->format('d/m/Y') }} </span></h3>
    <hr class="mx-5  mb-2">

        <div class=" first row mx-5">

            <div class="col">
                <h6  class="fw-normal">Departure</h6>
            </div>
            <div class="col">
                <h6  class="fw-normal">Arrival</h6>
            </div>
            <div class="col ">
                <h6 class="fw-normal">Checked Baggage Allowance</h6>
            </div>
            <div class="col-md-1 ">
                <h6 class="fw-normal">Price</h6>
            </div>

        </div>
     <hr class="mx-5 mt-1">
     <div style="margin-bottom: 90px" class="row  mx-5 ">
        <div class="col">
            <h6>{{ $departureFlight->departure_time->format('H:i') }}  <span  class="fw-light">{{ $departureFlight->departureAirport->code }}</span></h6>
                <p class="fw-light  custom-width">{{ $departureFlight->departureAirport->name }}</p>

    </div>
        <div class="col">
            <h6 >{{ $departureFlight->arrival_time->format('H:i') }}  <span  class="fw-light">{{ $departureFlight->arrivalAirport->code }}</span></h6>
            <p class="fw-light custom-width">{{ $departureFlight->arrivalAirport->name }}</p>

    </div>
    <div class="col ">
        <p class="fw-light   custom-width">{{ strtoupper(session('departureClassType')) }}   (H) class
            Adult: 2 piece(s), up to 23 kg each</p>

</div>
<div class="col-md-1">
    {{-- <h6 class="fw-light"> USD {{ number_format($departurePrice, 2) }}</h6> --}}
</div>
</div>

@if($returnFlight)

<h3 class="mx-5  mt-5">{{ $returnFlight->departureAirport->city }} > {{ $returnFlight->arrivalAirport->city }} <span class="fw-light fs-6">Sat, 24 Nov 2023</span></h3>
    <hr class="mx-5  mb-2">

        <div class="row mx-5 ">

            <div class="col">
                <h6  class="fw-normal">Departure</h6>
            </div>
            <div class="col">
                <h6  class="fw-normal">Arrival</h6>
            </div>
            <div class="col ">
                <h6 class="fw-normal">Checked Baggage Allowance</h6>
            </div>
            <div class="col-md-1 ">
                <h6 class="fw-normal">Price</h6>
            </div>
        </div>
     <hr class="mx-5 mt-1">
     <div style="margin-bottom: 90px"  class="row  mx-5">
        <div class="col">
            <h6>{{ $returnFlight->departure_time->format('H:i') }}  <span  class="fw-light">{{ $returnFlight->departureAirport->code }}</span></h6>
                <p class="fw-light  custom-width">{{ $returnFlight->departureAirport->name }}</p>

    </div>
        <div class="col">
            <h6 >{{ $returnFlight->arrival_time->format('H:i') }}   <span  class="fw-light">{{ $returnFlight->arrivalAirport->code }}</span></h6>
            <p class="fw-light custom-width">{{ $returnFlight->arrivalAirport->name }}</p>

    </div>
    <div class="col">
        <p class="fw-light  custom-width">{{ strtoupper(session('returnClassType')) }} (H)
            Adult: 2 piece(s), up to 23 kg each</p>

</div>
<div class="col-md-1">
    <h6 class="fw-light">USD {{ number_format($returnPrice, 2) }}</h6>
</div>
</div>

@endif






{{-- <h3 class="mx-5 mt-5">Passenger details</h3>
<hr class="mx-5 mb-2">

<div class="row mx-5 ">
    <div class="col">
        <h6 class="fw-normal">Passenger name</h6>
    </div>
    <div class="col">
        <h6 class="fw-normal">Passport</h6>
    </div>
    <div class="col ">
        <h6 class="fw-normal">Date of birth</h6>
    </div>
    <div class="col">
        <h6 class="fw-normal">Type</h6>
    </div>
</div>
<hr class="mx-5 mt-1">

@foreach($passengers as $passenger)
    <div style="margin-bottom: 90px" class="row mx-5">
        <div class="col">
            <h6>{{ $passenger['title']}} {{ $passenger['first_name']}} {{ $passenger['last_name'] }}</h6>
        </div>
        <div class="col">
            <h6>{{ $passenger['passportNumber'] }}<</h6>
        </div>
        <div class="col">
            <h6>{{ (new DateTime($passenger['expiryDate']))->format('d M Y') }}</h6>
        </div>

        <div class="col">
            <h6>{{ $passenger->type ?? 'Adult' }}</h6>

        </div>
    </div>
@endforeach --}}

<h3 style="margin-top: -30px" class="mx-5 mb-4">Passenger Details</h3>
<hr class="mx-5 mb-2">

<div class="row mx-5 ">
    <div class="col">
        <h6 class="fw-normal">Passenger Name</h6>
    </div>
    <div class="col">
        <h6 class="fw-normal">Passport Number</h6>
    </div>
    <div class="col">
        <h6 class="fw-normal">Date of expire</h6>
    </div>
    <div class="col justify-content-end col-md-1">
        <h6 class="fw-normal">Gender</h6>
    </div>
    {{-- <div class="col">
        <h6 class="fw-normal">Type</h6>
    </div> --}}
</div>
<hr class="mx-5 mt-1">

@php
// Assuming $passengers is fetched from the session or passed to the view
$passengers = session('passengerDetails', []);
@endphp


@foreach($passengers as $index => $passenger)
    <div style="margin-bottom: 20px" class="row mx-5">
        <div class="col">
            <h6>{{ $passenger['title'] ?? 'N/A' }} {{ $passenger['first_name'] ?? 'N/A' }} {{ $passenger['last_name'] ?? 'N/A' }}</h6>
        </div>
        <div class="col">
            <h6>{{ $passenger['passport_number'] ?? 'N/A' }}</h6> {{-- nationality --}}
            {{-- birth_date --}}
        </div>
        {{-- birthday --}}
        <div class="col">
            <h6>{{ $passenger['passport_expiry_date'] ?? 'N/A' }}</h6>

        </div>
        <div class="col col-md-1">
            <h6>{{ $passenger['gender'] ?? 'N/A' }}</h6>
        </div>

    </div>
@endforeach


<h3 style="margin-top: 70px" class="mx-5 ">Contact details</h3>
<hr class="mx-5 mb-2">

<div class="row mx-5 ">
    <div class="col">
        <h6 class="fw-normal">Passenger name</h6>
    </div>
    <div class="col">
        <h6 class="fw-normal">Number</h6>
    </div>
    <div class="col-md-3 ">
        <h6 class="fw-normal">E-mail</h6>
    </div>

</div>
<hr class="mx-5 mt-1">

{{-- @foreach($passengers as $passenger)
    <div style="margin-bottom: 90px" class="row mx-5">
        <div class="col">
            <h6>{{ $passenger['title']}} {{ $passenger['first_name']}} {{ $passenger['last_name'] }}</h6>
        </div>
        <div class="col">


            @php
            $contactDetails = session('contactDetails', []);
            $countryCode = $contactDetails['countryCode'] ?? 'N/A';
            $mobileNumber = $contactDetails['mobileNumber'] ?? 'N/A';
            @endphp

            <h6>{{ $countryCode }} {{ $mobileNumber }}</h6>

        </div>
        <div class="col">
=            <h6>{{ $emailAddress }}</h6>
        </div>
    </div>
@endforeach --}}
@php
$passengers = session('passenger_details', []); // Assuming you're storing passenger details in the session
$contactDetails = session('contactDetails', []);
@endphp

    <div style="margin-bottom: 50px" class="row mx-5 "> <!-- Adjusted margin for consistency -->
        {{-- @foreach($passengers as $passenger) --}}

        <div class="col">
            @php
            $firstPassenger = $passengers[0] ?? null;
            @endphp

            <h6>{{ $firstPassenger['title'] ?? 'N/A' }} {{ $firstPassenger['first_name'] ?? 'N/A' }} {{ $firstPassenger['last_name'] ?? 'N/A' }}</h6>
        </div>

        {{-- @endforeach --}}

        <div class="col">
            {{-- Displaying contact details from session --}}
            <h6>{{ $contactDetails['countryCode'] ?? 'N/A' }} {{ $contactDetails['mobileNumber'] ?? 'N/A' }}</h6>
        </div>
        <div class="col-md-3">
            {{-- If email address is unique per passenger, ensure it's included in the passenger details; otherwise, fetch from contactDetails --}}
            <h6>{{ $passenger['email'] ?? ($contactDetails['email'] ?? 'N/A') }}</h6>
        </div>
    </div>


</div>









<div style="border-radius: 10px;
border: 1px solid rgba(0, 0, 0, 0.16);
background: rgba(255, 255, 255, 0.69); " class="container bg-light mt-5  me-0 col-md-6 justify-content-end   ">
    <h3 class="mx-3 mt-3">Total price</h3>



        <div class="row mx-3 ">
            @php
$adultCount = session('passenger_info.adult_count', 0);
$childCount = session('passenger_info.child_count', 0);
$infantCount = session('passenger_info.infant_count', 0);
$totalCount = $adultCount + $childCount + $infantCount;
@endphp

<p class="fw-light ">

</p>
      <!-- First column for "Trip price" and "(1 Adult)" -->
      <div class="col mt-5 me-5" >
        <p class="mb-0 fw-bold ">Trip price</p>
        <p class="fw-light "> ({{ $totalCount }} {{ Str::plural('passenger', $totalCount) }}:
            {{-- {{ $adultCount }} {{ Str::plural('Adult', $adultCount) }},
            {{ $childCount }} {{ Str::plural('Child', $childCount) }},
            {{ $infantCount }} {{ Str::plural('Infant', $infantCount) }} --}}
            )</p>
    </div>

    <div class="col-md-1"></div>

    <div class="col mt-5 ms-5">
        <p class="fw-bold mt-2 ms-5">USD {{ number_format($totalPrice, 2) }}  </p>
    </div>

</div>
<hr class=" mt-0 mx-4 mb-2">
<div class="row mx-3         mb-3">

    <div class="col me-5 ">
        <p class=" fs-5 mb-0 fw-bold ">Payable amount:</p>
    </div>

    <div class="col-md-1"></div>

    <div class="col  ms-3">
        <p class="fs-5 fw-bold ms-5">USD {{ number_format($totalPrice, 2) }} </p>
    </div>


</div>






</div>





<div class="form-check mt-5">
    <input class="form-check-input  p-2" type="checkbox" value="" id="flexCheckDefault">
    <label class="form-check-label " for="flexCheckDefault">
        I have read and accept the terms and conditions as stated above and general conditions of carriage applicable to my flight.
    </label>
  </div>

  <div class="row mb-5">
    <div class="container mt-5 col d-flex justify-content-between">
        <button type="button"  class="btn btn-outline-primary btn-cancel mb-5 p-3 rounded-5 px-5">Cancel</button>

        {{-- <form action="{{ route('booking.process') }}" method="GET">
            @csrf --}}
        {{-- <form action="{{ route('booking.process') }}" method="POST">
            @csrf--}}

                 {{-- <input type="hidden" name="departure_flight_id" value="{{ session('departureFlightId') }}">
                <input type="hidden" name="returnFlightId" value="{{ $returnFlight->id }}">

                <input type="hidden" name="return_flight_id" value="{{ session('returnFlightId') }}">
                <input type="hidden" name="departure_price" value="{{ $departurePrice }}">
                <input type="hidden" name="return_price" value="{{ $returnPrice }}">
                <input type="hidden" name="totalPrice" value="{{ $totalPrice }}"> --}}

                 {{-- Hidden fields for contact details  --}}
                {{-- <input type="hidden" name="mobile_number" value="{{ $mobileNumber }}">
                <input type="hidden" name="email_address" value="{{ $emailAddress }}"> --}}
 {{-- Hidden fields for passenger details  --}}
                {{-- @foreach ($passengers as $index => $passenger)
                    <input type="hidden" name="passengers[{{ $index }}][title]" value="{{ $passenger['title'] }}">
                    <input type="hidden" name="passengers[{{ $index }}][first_name]" value="{{ $passenger['first_name'] }}">
                    <input type="hidden" name="passengers[{{ $index }}][last_name]" value="{{ $passenger['last_name'] }}">
                    <input type="hidden" name="passengers[{{ $index }}][gender]" value="{{ $passenger['gender'] }}">
                    <input type="hidden" name="passengers[{{ $index }}][nationality]" value="{{ $passenger['nationality'] }}">
                    <input type="hidden" name="passengers[{{ $index }}][birth_date]" value="{{ $passenger['birth_date'] ?? '' }}">
                    <input type="hidden" name="passengers[{{ $index }}][passport_number]" value="{{ $passenger['passport_number'] ?? '' }}">
                    <input type="hidden" name="passengers[{{ $index }}][passport_expiry_date]" value="{{ $passenger['passport_expiry_date'] ?? '' }}">

                @endforeach --}}
                <form action="{{ route('booking.process') }}" method="GET">
                    @csrf
                    <input type="hidden" name="totalPrice" value="{{ $totalPrice }}">
    <input type="hidden" name="departureClassType" value="{{ $departureClassType }}">
    <input type="hidden" name="returnClassType" value="{{ $returnClassType }}">
    <input type="hidden" name="departurePrice" value="{{ $departurePrice }}">
    <input type="hidden" name="returnPrice" value="{{ $returnPrice }}">
    {{-- countryCode --}}
    {{-- <input type="hidden" name="countryCode" value="{{ $countryCode }}"> --}}
    <input type="hidden" name="mobileNumber" value="{{ $mobileNumber }}">
    <input type="hidden" name="emailAddress" value="{{ $emailAddress }}">
    <input type="hidden" name="numberOfPassengers" value="{{ $numberOfPassengers }}">

    {{-- @foreach($passengers as $index => $passenger)
    <input type="hidden" name="passengers[{{ $index }}][title]" value="{{ $passenger['title'] ?? '' }}">
    <input type="hidden" name="passengers[{{ $index }}][first_name]" value="{{ $passenger['first_name'] ?? '' }}">
    <input type="hidden" name="passengers[{{ $index }}][last_name]" value="{{ $passenger['last_name'] ?? '' }}">
    <input type="hidden" name="passengers[{{ $index }}][passportNumber]" value="{{ $passenger['passportNumber'] ?? '' }}">
    <input type="hidden" name="passengers[{{ $index }}][birthDate]" value="{{ $passenger['birthDate'] ?? '' }}">
    <input type="hidden" name="passengers[{{ $index }}][gender]" value="{{ $passenger['gender'] ?? '' }}">
@endforeach --}}

{{-- If you have passenger details that need to be sent through the form --}}
@foreach(session('passengers', []) as $index => $passenger)
<input type="hidden" name="passengers[{{ $index }}][title]" value="{{ $passenger['title'] }}">

{{-- <input type="hidden" name="passengers[{{ $index }}][title]" value="{{ $passenger['title'] ?? 'N/A' }}"> --}}
<input type="hidden" name="passengers[{{ $index }}][first_name]" value="{{ $passenger['first_name'] ?? 'N/A' }}">
<input type="hidden" name="passengers[{{ $index }}][last_name]" value="{{ $passenger['last_name'] ?? 'N/A' }}">
<input type="hidden" name="passengers[{{ $index }}][gender]" value="{{ $passenger['gender'] ?? 'N/A' }}">
{{-- <input type="hidden" name="passengers[{{ $index }}][date_birth]" value="{{ $passenger['date_birth'] ?? 'N/A' }}"> --}}
<input type="hidden" name="passengers[{{ $index }}][birth_date]" value="{{ $passenger['birth_date'] ?? 'DefaultDate' }}">

{{-- nationality --}} <input type="hidden" name="passengers[{{ $index }}][nationality]" value="{{ $passenger['nationality'] ?? 'DefaultNationality' }}">
{{-- <input type="hidden" name="passengers[{{ $index }}][nationality]" value="{{ $passenger['nationality'] ?? 'N/A' }}"> --}}
{{-- passport details --}}
<input type="hidden" name="passengers[{{ $index }}][passport_number]" value="{{ $passenger['passport_number'] ?? '' }}">
<input type="hidden" name="passengers[{{ $index }}][passport_expiry_date]" value="{{ $passenger['passport_expiry_date'] ?? '' }}">

{{-- Include other passenger fields as necessary --}}
@endforeach


    <!-- Assuming departureFlight and returnFlight are objects with an id attribute -->
    @if($departureFlight)
        <input type="hidden" name="departureFlightId" value="{{ $departureFlight->id }}">
    @endif
    @if($returnFlight)
        <input type="hidden" name="returnFlightId" value="{{ $returnFlight->id }}">
    @endif

    <button type="submit" id="purchaseButton" class="btn custom-button mb-5 p-3 rounded-5 px-5">Purchase</button>
</form>
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          To complete your purchase, please log in to your account.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <a href="{{ route('auth.login') }}" class="btn btn-primary">Login</a>
        </div>
      </div>
    </div>
  </div>



    </div>
</div>

</div>
</div>

</div>
<script>
    var isUserLoggedIn = {{ json_encode($isUserLoggedIn) }};
  </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      @if(!auth()->check()) // If user is not authenticated
        var myModal = new bootstrap.Modal(document.getElementById('loginModal'), {});
        document.getElementById('purchaseButton').addEventListener('click', function (event) {
          event.preventDefault(); // Prevent form submission or button default action
          myModal.show(); // Show the login modal
        });
      @endif
    });
    </script>


</x-ticket>
