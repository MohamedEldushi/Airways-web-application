<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/svg-with-js.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/v4-shims.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">



    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            min-height: 100vh;
        }
        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #ffffff;
        }
        .page-content {
            padding: 20px;
        }
        .navbar {
            background-color: #babec1;
            padding: 10px;
        }
        .navbar .navbar-brand {
            color: #ffffff;
        }



. .nav-pills .nav-link.active {
        color: #fff;
        background-color: #0d6efd; /* Bootstrap primary blue, change as needed */
    }    body, html {
        height: 100%;
        margin: 0;
    }
    .content {
        padding: 1rem;
        height: 100vh;
        overflow-y: auto;
    }


#sign-out-link:hover svg {
    color: #c5cad0; /* or any color you prefer */
}
#sign-out-link:hover{
    color: #c5cad0; /* or any color you prefer */
}
    </style>
</head>
<body>
    {{-- <nav style="background-color: #262D61" class="navbar navbar-expand-lg fixed-top navbar-light  p-2">

        <div class="container-fluid">
          <a href="">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="90" alt=""></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">

            <ul class="navbar-nav me-auto  px-5  my-2 my-lg-1 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Services</a>
              </li>
              <li class="nav-item mt-1 px-3">
                <a class="nav-link active text-white" aria-current="page" href="#">Contact us</a>
              </li>

            </ul>
            <form class="d-flex">
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 px-4 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a  class="btn btn-sm mt-1 p-1   btn-outline text-white"aria-current="page" href="#"></i><svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>Sign up</a>


                      </li>

                      <div class="col-md-1">
                        <div style="  border-left: 2px solid #ffffff74;
                        height: 60%;
                        margin: 13px;
                        padding: 0;
                      " class="vertical-line"></div>
                      </div>

                      <li class="nav-item mt-1 ">
                        <a class="btn btn-sm  mx-2 p-1 btn-outline text-white"aria-current="page" href="#">Login </a>           </ul>
                    </div>

            </form>
          </div>
        </div>
      </nav> --}}
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30"class=" text-primary my-2 mx-2" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6ZM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1H2Z"/>
              </svg>
            <a class="navbar-brand fw-bold display-4 " href="{{url('dashboard')}}">IMS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex pt-3 pb-3 ">
                <ul class="navbar-nav text-primary  my-2 fw-bold ">
                    <li class="nav-item  p-2 mx-2">Hello, {{ auth()->user()->name }}</li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('admin/') }}" style="text-decoration: none" class="text-black">Dashboard</a></li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('admin/profile') }}" style="text-decoration: none" class="text-black">Profile</a></li>
                    <li class="nav-item  p-2 mx-2"><a href="{{ url('auth/logout') }}" style="text-decoration: none" class="text-black">Logout</a></li>
                </ul>
            </form>
          </div>
        </div>
      </nav> --}}

      {{-- sucess massege --}}

@php
    // You can set this variable based on the current route name
    $currentRouteName = Route::currentRouteName();
@endphp


    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark shadow-lg" style="width: 280px; height: 100vh; position: fixed;">
            <a href="{{ route('flights.view') }}" style="color: #0d6efd"  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i style="color: #0d6efd" class="fas fa-plane fs-3 me-1 ms-3"></i>
                <span class="fs-4 mx-3 ">Admin Panel</span>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('flights.view') }}" class="nav-link  {{ $currentRouteName === 'flights.view' ? 'active' : 'text-white' }}">
                        <i class="fas fa-tachometer-alt me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.create') }}" class="nav-link {{ $currentRouteName === 'admin.create' ? 'active' : 'text-white' }}">
                        <i class="fas fa-plane me-2"></i>
                        Add New Flight
                    </a>
                </li>
                <li>
                    <a href="{{ route('locations.create') }}" class="nav-link {{ $currentRouteName === 'locations.create' ? 'active' : 'text-white' }}">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Add Location
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.reports') }}" class="nav-link {{ $currentRouteName === 'admin.reports' ? 'active' : 'text-white' }}">
                        <i class="fas fa-chart-line me-2"></i>
                        View Booking Reports
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.flight-passengers')}}" class="nav-link {{ $currentRouteName === 'admin.flight-pasengers' ? 'active' : 'text-white' }}">
                        <i class="fas fa-link me-2"></i>
                        View Flight Passengers
                    </a>
                </li>

                {{-- a list for feedback --}}
                <li>
                    <a href="{{route('admin.feedbacks')}}" class="nav-link {{ $currentRouteName === 'admin.feedbacks' ? 'active' : 'text-white' }}">
                        <i class="fas fa-comment me-2"></i>
                        View Feedback
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->routeIs('admin.profile') ? 'active' : 'text-white' }}">
                        <i class="fas fa-users me-2"></i>
                        My profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('schedules.index') }}" class="nav-link {{ request()->routeIs('schedules.index') ? 'active' : 'text-white' }}">
                        <i class="fas fa-users me-2"></i>
                        Schedule
                    </a>
                </li>

            </ul>
            <hr>

            <a  id="sign-out-link" href="{{ url('auth/logout') }}" class="d-flex align-items-center  text-decoration-none text-center mx-5  mb-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left me-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg>
                Sign out
            </a>


        </div>
        <div class="content" style="margin-left: 280px; flex-grow: 1;">
            <div class="d-flex justify-content-between mb-4">
                    <button class="btn btn-primary" onclick="location.href='{{ route('flights.view') }}'">View Flights</button>
                    <button class="btn btn-secondary" onclick="location.href='{{ route('locations.view') }}'">View Locations</button>
                </div>
                {{ $slot }}
              </div>
             </div>




<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</html>
