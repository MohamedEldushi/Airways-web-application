    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet"> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5Jz6P1C5F5SL5r5M" crossorigin="anonymous"> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA5Jz6P1C5F5SL5r5M" crossorigin="anonymous"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css' rel='stylesheet' />






    </head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: #F2F3FA;
        }
    /* Add this CSS to your stylesheet or <style> block */
    .icon {
        transition: transform 0.2s;

        color: #c4f3fa; /* Initial icon color */
    }

    .icon:hover {
        transform: rotate(45deg);
        color: #f4d1369f; /* New color on hover */
    }

    /* Style the menu list items and their hover effects */
    .menu .nav-link {
    text-decoration: none;
    position: relative;
    color: #fff; /* Default text color */
    transition: color 0.3s;
    }

    .menu .nav-link:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;

    background-color: #f4d1369f; /* Underline color */
    transform: scaleX(0); /* Initial underline scale (hidden) */
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
    }
    #aa {
    color: white;
    position: relative;
    transition: color 0.3s;
    }

    #aa::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: transparent;
    /* transition: background 0.3s, width 0.3s; */
    }

    #aa:hover {
    color: #f4d1369f;
    }

    #aa:hover::after {
    background: #f4d1369f; /* Underline color */
    width: 100%;
    }


    .menu .nav-link:hover:after {
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left;
    color: #799498
    }

    /* login sign up */



    /* footer css */



    /* Style the list items and their hover effects */
    .nav.flex-column li {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    transition: color 0.3s; /* Smooth transition for text color */
    }

    .nav.flex-column a {
    position: relative;
    color: #ffffffb3; /* Default text color */
    text-decoration: none;
    transition: transform 0.3s;
    }

    .nav.flex-column a:hover {
    color: #f4d1369f; /* Text color on hover */
    text-decoration: underline; /* Underline the text on hover */
    }


    .last{
        color: rgba(220, 220, 225, 0.538);
    }



  /* Custom CSS to adjust margins and padding */
  .image-container {
  position: relative;

  width: 100%;
  height: 500px;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.46);
  opacity: 0.7; /* Adjust the opacity to your liking */
}

/* .image-container {
    position: relative;
  } */

  /* .milestone {
    position: absolute;
    left: 20px;
    right: 20px;
  } */
  #back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #F9CC36;
        color: #fff;
        border: none;
        border-radius: 30%;
        cursor: pointer;
      }

/* On screens with a maximum width of 768px (adjust as needed) */
@media (max-width: 768px) {
  img {
    height: auto; /* Allow the height to adjust according to the image's aspect ratio */
    max-height: 300px; /* Set a maximum height for smaller screens */
  }
  .image-container {
    width: 100%;
  height: 100%;

  }
  /* .container {
      left: 10%;
      right: 10%;
    } */
}

body{
        margin: 0px;
        padding: 0px;
        background-color: #F2F3FA;
    }
    h3{
        color: #FFF;


font-size: 2rem;
font-style: normal;
font-weight: 400;
line-height: normal;
text-align: center
    }


    .header{
        margin-top:8% ;
            padding:3% 0px ;

            color: #FFF;
background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }
/* Add this CSS to your stylesheet or <style> block */
.icon {
    transition: transform 0.2s;

    color: #ffffff; /* Initial icon color */
}
.icon:hover {
        transform: rotate(45deg);
        color: #f4d1369f; /* New color on hover */
    }

    /* Style the menu list items and their hover effects */
    .menu .nav-link {
    text-decoration: none;
    position: relative;
    color: #fff; /* Default text color */
    transition: color 0.3s;
    }

    .menu .nav-link:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;

    background-color: #f4d1369f; /* Underline color */
    transform: scaleX(0); /* Initial underline scale (hidden) */
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
    }
    #aa {
    color: white;
    position: relative;
    transition: color 0.3s;
    }

    #aa::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: transparent;
    /* transition: background 0.3s, width 0.3s; */
    }

    #aa:hover {
    color: #f4d1369f;
    }

    #aa:hover::after {
    background: #f4d1369f; /* Underline color */
    width: 100%;
    }


    .menu .nav-link:hover:after {
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left;
    color: #799498
    }
    /* Style the list items and their hover effects */
    .nav.flex-column li {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    transition: color 0.3s; /* Smooth transition for text color */
    }

    .nav.flex-column a {
    position: relative;
    color: #ffffffb3; /* Default text color */
    text-decoration: none;
    transition: transform 0.3s;
    }

    .nav.flex-column a:hover {
    color: #f4d1369f; /* Text color on hover */
    text-decoration: underline; /* Underline the text on hover */
    }


    .last{
        color: rgba(220, 220, 225, 0.538);
    }
    #back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #F9CC36;
        color: #fff;
        border: none;
        border-radius: 30%;
        cursor: pointer;
      }

      .header {
            text-align: center; /* Center-align the text within the div */
        }

        .header h1 {
            text-align: left;
            margin-left: 310px; /* Align the h1 element to the left */
        }
        h4{
            text-align: left;
            margin-left: 310px;
            color: #f4d1369f;

        }
        .list-group-item-button:hover {
    transition: background-color 0.3s;
}

body{
        margin: 0px;
        padding: 0px;
        background-color: #F2F3FA;
    }
    h3{
        color: #FFF;


font-size: 2rem;
font-style: normal;
font-weight: 400;
line-height: normal;
text-align: center
    }


    .header{
        margin-top:8% ;
            padding:3% 0px ;

            color: #FFF;
background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }
/* Add this CSS to your stylesheet or <style> block */
.icon {
    transition: transform 0.2s;

    color: #ffffff; /* Initial icon color */
}
.icon:hover {
        transform: rotate(45deg);
        color: #f4d1369f; /* New color on hover */
    }

    /* Style the menu list items and their hover effects */
    .menu .nav-link {
    text-decoration: none;
    position: relative;
    color: #fff; /* Default text color */
    transition: color 0.3s;
    }

    .menu .nav-link:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;

    background-color: #f4d1369f; /* Underline color */
    transform: scaleX(0); /* Initial underline scale (hidden) */
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
    }
    #aa {
    color: white;
    position: relative;
    transition: color 0.3s;
    }

    #aa::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: transparent;
    /* transition: background 0.3s, width 0.3s; */
    }

    #aa:hover {
    color: #f4d1369f;
    }

    #aa:hover::after {
    background: #f4d1369f; /* Underline color */
    width: 100%;
    }


    .menu .nav-link:hover:after {
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left;
    color: #799498
    }
    /* Style the list items and their hover effects */
    .nav.flex-column li {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    transition: color 0.3s; /* Smooth transition for text color */
    }

    .nav.flex-column a {
    position: relative;
    color: #ffffffb3; /* Default text color */
    text-decoration: none;
    transition: transform 0.3s;
    }

    .nav.flex-column a:hover {
    color: #f4d1369f; /* Text color on hover */
    text-decoration: underline; /* Underline the text on hover */
    }


    .last{
        color: rgba(220, 220, 225, 0.538);
    }
    #back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #F9CC36;
        color: #fff;
        border: none;
        border-radius: 30%;
        cursor: pointer;
      }

      .header {
            text-align: center; /* Center-align the text within the div */
        }

        .header h1 {
            text-align: left;
            margin-left: 310px; /* Align the h1 element to the left */
        }
        h4{
            text-align: left;
            margin-left: 310px;
            color: #f4d1369f;

        }
        .list-group-item-button:hover {
    transition: background-color 0.3s;
}

    body{
        margin: 0px;
        padding: 0px;
        background-color: #F2F3FA;
    }
    h3{
        color: #FFF;


font-size: 2rem;
font-style: normal;
font-weight: 400;
line-height: normal;
text-align: center
    }


    .header{
        margin-top:8% ;
            padding:3% 0px ;

            color: #FFF;
background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
    }
/* Add this CSS to your stylesheet or <style> block */
.icon {
    transition: transform 0.2s;

    color: #ffffff; /* Initial icon color */
}
.icon:hover {
        transform: rotate(45deg);
        color: #f4d1369f; /* New color on hover */
    }

    /* Style the menu list items and their hover effects */
    .menu .nav-link {
    text-decoration: none;
    position: relative;
    color: #fff; /* Default text color */
    transition: color 0.3s;
    }

    .menu .nav-link:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 100%;
    height: 2px;

    background-color: #f4d1369f; /* Underline color */
    transform: scaleX(0); /* Initial underline scale (hidden) */
    transform-origin: right;
    transition: transform 0.3s ease-in-out;
    }
    #aa {
    color: white;
    position: relative;
    transition: color 0.3s;
    }

    #aa::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: transparent;
    /* transition: background 0.3s, width 0.3s; */
    }

    #aa:hover {
    color: #f4d1369f;
    }

    #aa:hover::after {
    background: #f4d1369f; /* Underline color */
    width: 100%;
    }


    .menu .nav-link:hover:after {
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left;
    color: #799498
    }
    /* Style the list items and their hover effects */
    .nav.flex-column li {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
    transition: color 0.3s; /* Smooth transition for text color */
    }

    .nav.flex-column a {
    position: relative;
    color: #ffffffb3; /* Default text color */
    text-decoration: none;
    transition: transform 0.3s;
    }

    .nav.flex-column a:hover {
    color: #f4d1369f; /* Text color on hover */
    text-decoration: underline; /* Underline the text on hover */
    }


    .last{
        color: rgba(220, 220, 225, 0.538);
    }
    #back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 15px;
        background-color: #F9CC36;
        color: #fff;
        border: none;
        border-radius: 30%;
        cursor: pointer;
      }

      .header {
            text-align: center; /* Center-align the text within the div */
        }

        .header h1 {
            text-align: left;
            margin-left: 310px; /* Align the h1 element to the left */
        }
        h4{
            text-align: left;
            margin-left: 310px;
            color: #f4d1369f;

        }
        .list-group-item-button:hover {
    transition: background-color 0.3s;
}
.list-group-item-button:hover {
    transition: background-color 0.3s;
}
.list-group-item-button:hover {
        background-color: #7df6f439; /* Background color on hover */
    }



    .list-group-item-button:hover . {
        color: #ffffff; /* Change the color of the text on hover */
    }

    .background-image {
    position: relative; /* Position relative to allow z-index to take effect */
    z-index: 1; /* Lower than the container */
    /* Your image styling */
}
    </style>
    <body>

<!-- Modal Structure -->
{{-- <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Flight Status Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Notification Sign-Up Form -->
                <div class="notification-signup-container">
                    <form id="notificationSignupForm" action="{{ route('notifications.signup') }}" method="POST">
                         @csrf
                        <div class="form-group mb-3">
                            <label for="flightNumber">Flight Number</label>
                            <input type="text" class="form-control" id="flightNumber" name="flight_number" placeholder="Enter Flight Number" required>
                        </div>
                         <div class="form-group mb-3">
                            <label for="contactEmail">Email Address</label>
                            <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Enter Email Address" required>
                        </div>
                         <div class="form-group mb-3">
                            <label for="contactNumber">Phone Number (for SMS)</label>
                            <input type="tel" class="form-control" id="contactNumber" name="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <input type="checkbox" id="emailNotification" name="email_notification" value="1">
                            <label for="emailNotification">Email Notifications</label>
                        </div>
                        <div class="form-group mb-3">
                            <input type="checkbox" id="smsNotification" name="sms_notification" value="1">
                            <label for="smsNotification">SMS Notifications</label>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="notificationSignupForm" class="btn btn-primary">Sign Up</button>

            </div>
        </div>
    </div>
</div> --}}
        {{-- navbar --}}


            <nav style="background-color: #262d61; border-radius:0 0px 5px 5px; " class="navbar navbar-expand-lg fixed-top navbar-light  p-2 ">

            <div class="container-fluid mx-4">
                <div class="background-image">

            <a href="{{ url('/') }}">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="90" alt=""></a>
        </div>

            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">



                    <ul class="navbar-nav me-auto mx-5  px-5 my-2 my-lg-1 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="menu nav-item mt-1 mx-2 px-3 ">
                        <a id="aa" class=" nav-link active   fs-6" aria-current="page" href="{{ url('/') }}">Home<span class="highlight"></span></a>
                        </li>
                        <li class="menu nav-item mt-1  mx-2 px-3">
                        <a id="aa" class=" nav-link active  fs-6" aria-current="page" href="{{ url('/') }}">About<span class="highlight"></span></a>
                        </li>
                        <li class="menu nav-item mt-1  mx-2 px-3">
                        <a id="aa" class="nav-link active  fs-6" aria-current="page" href="{{ url('/') }}">Services<span class="highlight"></span></a>
                        </li>
                        <li class="menu nav-item mt-1  mx-2 px-3">
                        <a id="aa" class="nav-link active  fs-6" aria-current="page" href="{{ url('/') }}">Contact us<span class="highlight"></span></a>
                        </li>

                    </ul>



                    <form class="d-flex">
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 px-5 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                                @guest
                           <!-- Display login and signup links for guests -->
<li class="menu nav-item">
    <a id="aa" class="nav-link btn btn-sm mt-1 p-1 fs-6 btn-outline" aria-current="page" href="{{ url('auth/login') }}">
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px; margin-top: -3px" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>Login
    </a>
</li>
<div class="col-md-1">
    <div style="border-left: 2px solid #ffffff74; height: 60%; margin: 11px; padding: 0;" class="vertical-line"></div>
</div>
<li class="menu nav-item mt-1">
    <a id="aa" class="nav-link btn btn-sm mx-2 fs-6 p-1 btn-outline" aria-current="page" href="{{ url('auth/register') }}">Sign-up</a>
</li>
<!-- Notification Icon that triggers modal -->
{{-- <li class="nav-item">
    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#notificationModal">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C13.1 22 14 21.1 14 20H10C10 21.1 10.89 22 12 22ZM18 16V11C18 7.93 16.36 5.36 13.5 4.68V4C13.5 3.17 12.83 2.5 12 2.5C11.17 2.5 10.5 3.17 10.5 4V4.68C7.63 5.36 6 7.92 6 11V16L4 18V19H20V18L18 16Z" fill="currentColor"/>
        </svg>
        Notifications
    </a>
</li> --}}



                                @else
                                    <!-- Display welcome message and logout link for authenticated users -->
                                    <!-- Existing dropdown for authenticated users -->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#notificationModal">
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22C13.1 22 14 21.1 14 20H10C10 21.1 10.89 22 12 22ZM18 16V11C18 7.93 16.36 5.36 13.5 4.68V4C13.5 3.17 12.83 2.5 12 2.5C11.17 2.5 10.5 3.17 10.5 4V4.68C7.63 5.36 6 7.92 6 11V16L4 18V19H20V18L18 16Z" fill="currentColor"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li style="width: 11rem; " class="menu nav-item mt-1 dropdown ">
                                        <div class="dropdown">
                                            <button style=" font-size: 18px; cursor: pointer;" class=" border-bottom  btn btn-sm mx-2 btn-outline  text-white dropdown-toggle  " type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="  text-warning">Hello</span>,{{auth()->user()->title}} {{ auth()->user()->firstname }}
                                            </button>

                                            <div  style="width: 16rem;" class="dropdown-menu  mt-3 shadow-sm rounded-2 py-0 me-5">  <div style="background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);" class="card-header p-4 text-light rounded-top-2">
                                                    <p class="fw-light mb-0 text-warning">Welcome!</p>
                                                    <h5>{{ Auth::user()->firstname }}</h5>
                                                </div>
                                                <ul class="list-group  rounded-bottom-2">
                                                    <li class="list-group-item list-group-item-button  p-2">
                                                        <svg style="margin-right: 10px; margin-left:8px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                                        </svg>
                                                        <a style="font-size: 15px" href="{{route('dashboard.profile')}}" class="btn btn-link text-dark text-decoration-none px-0 ">
                                                            My personal details
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item list-group-item-button p-2">
                                                        <svg style="margin-right: 10px; margin-left:8px" xmlns="http://w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                                                            <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"/>
                                                        </svg>
                                                        <a style="font-size: 15px" href="{{route('dashboard.my-flights')}}" class="text-dark text-decoration-none  ">
                                                            My flights
                                                        </a>
                                                    </li>

  <!-- Notification Icon that triggers modal -->
  <li class="list-group-item list-group-item-button p-2" data-bs-toggle="modal" data-bs-target="#notificationModal">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 22C13.1 22 14 21.1 14 20H10C10 21.1 10.89 22 12 22ZM18 16V11C18 7.93 16.36 5.36 13.5 4.68V4C13.5 3.17 12.83 2.5 12 2.5C11.17 2.5 10.5 3.17 10.5 4V4.68C7.63 5.36 6 7.92 6 11V16L4 18V19H20V18L18 16Z" fill="currentColor"/>
    </svg>
    <a style="font-size: 15px"   class="btn btn-link text-dark text-decoration-none px-0">
        Notifications
    </a>
</li>

<!-- Feedback Button -->
<li class="list-group-item list-group-item-button p-2" data-bs-toggle="modal" data-bs-target="#feedbackModal">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20ZM11 7H13V11H11V7ZM11 13H13V15H11V13Z" fill="currentColor"/>
    </svg>
    <a class="btn btn-link text-dark text-decoration-none px-0">Feedback</a>

</li>



                                                    <li class="list-group-item list-group-item-button  p-2">
                                                        <svg style="margin-right: 10px; margin-left:8px" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                                        </svg>
                                                        <a style="font-size: 15px" href="{{url('auth/logout') }}" class="btn btn-link text-dark text-decoration-none px-0">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>





                                @endguest
                            </ul>

                        </div>

                    </form>




            </div>

            </div>

        </nav>




{{-- style="position: relative;" --}}


<div style="position: relative" id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="10000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 600px" src="images/pexels-jaime-reimer-2662116.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="images/pexels-fanilo-randria-2592537.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="images/pexels-stein-egil-liland-3573603.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="images/Medsky-adds-second-Airbus-320-to-its-fleet-131122.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="images/pexels-shoval-zonnis-3769532.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="images/pexels-vincent-albos-3856701.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header  ">
                <h5 class="modal-title" id="feedbackModalLabel">Submit Your Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="feedbackContent" class="form-label">Your Feedback</label>
                        <textarea name="content" id="feedbackContent" required class="form-control" placeholder="Enter your feedback" rows="4"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Success Modal -->
 <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ session('success') }}
        </div>

      </div>
    </div>

  </div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Flight Status Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Notification Sign-Up Form -->
                <div class="notification-signup-container">
                    <form id="notificationSignupForm" action="{{ route('notifications.signup') }}" method="POST">
                         @csrf
                        <div class="form-group mb-3">
                            <label for="flightNumber">Flight Number</label>
                            <input type="text" class="form-control" id="flightNumber" name="flight_number" placeholder="Enter Flight Number" required>
                        </div>
                         <div class="form-group mb-3">
                            <label for="contactEmail">Email Address</label>
                            <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Enter Email Address" required>
                        </div>
                         <div class="form-group mb-3">
                            <label for="contactNumber">Phone Number (for SMS)</label>
                            <input type="tel" class="form-control" id="contactNumber" name="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group mb-3">
                            <input type="checkbox" id="emailNotification" name="email_notification" value="1">
                            <label for="emailNotification">Email Notifications</label>
                        </div>
                        <div class="form-group mb-3">
                            <input type="checkbox" id="smsNotification" name="sms_notification" value="1">
                            <label for="smsNotification">SMS Notifications</label>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="notificationSignupForm" class="btn btn-primary">Sign Up</button>

            </div>
        </form>
        </div>
    </div>
</div>
    {{-- content --}}
    <div class="container">


        {{ $slot}}
    </div>
          {{-- style="position:absolute;left:8%;top:57%" --}}


{{--
          <div class="container mt-4">
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




        {{-- three boxs --}}

        <div class="p-5 mt-5 mb-5 text-center  rounded-3">
            <h4 class="text-warning">HELLO</h4>
            <h1 style="color: #262d61;" class="">
                Where do you want to explore?</h1>
            <p class="lead">
              This is a simple Bootstrap jumbotron that sits within a <code>.container</code>, recreated with built-in utility classes.
            </p>
            <div class="container">
                <div class="row mx-4 mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="card p-4 rounded-4" >
                            {{-- <div class="card-body">

                                <h5 class="card-title">
                                    <a href="#">Manage My Booking </a>
                                </h5>
                                <p class="card-text">     Make changes to your travel plans, and view your booking details</p>
                            </div> --}}<div class="card-body">
    <h5 class="card-title">
        <a href="{{ route('flight-schedules.index') }}">Flight Schedules</a>
    </h5>
    <p class="card-text">Make changes to your travel plans, and view your booking details.</p>
</div>

                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card p-4 rounded-4">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#">Online Check-in
                                       </a>
                                </h5>
                                <p class="card-text"> Online check-in opens 24 hours before your flight departs</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card p-4 rounded-4">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#">Flight Status
                                       </a>
                                </h5>
                                <p class="card-text"> Check the latest status of our flights over the next 10 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>















    </div>

{{-- three images --}}

<div class="container px-4 py-5 " id="custom-cards">
    <h2 style="color: #262d61" class="pb-2 border-bottom">Discover Our Unique Cards</h2>
    <p>Explore our exclusive collection of beautifully crafted cards, each with its own story and charm.</p>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/shutterstock_2328132995-1.avif'); background-size: cover;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Elegant Simplicity</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                            <small>5 days ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/3f9f727ca7e7729b972ccdb58cc3acc8.png'); background-size: cover;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Captivating Beauty</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                            <small>4 days ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/Medsky-adds-second-Airbus-320-to-its-fleet-131122.jpg'); background-size: cover;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Unparalleled Luxury</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                            <small>5 days ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- image --}}


        <div class="d-flex align-items-center ">
            <hr style="background-color: #b3b3b3"  class="bg- border-0 flex-grow-1 p-2  mt-5" style="height: 2px;">
            <div style="color: #262D61" class="px-3 fs-3 mt-4">Welcome to Medsky Airline</div>
            <hr style="background-color: #b3b3b3" class=" border-0 flex-grow-1 p-2 mt-5" style="height: 2px;">
        </div>
    <div class="image-container" >
        <img src="{{ url('images/3f9f727ca7e7729b972ccdb58cc3acc8.png') }}" alt="Responsive Image">
        {{-- <div class="overlay"></div> --}}
      </div>
      <div class="d-flex align-items-center">
        <hr style="background-color: #b3b3b3"  class="bg- border-0 flex-grow-1 p-2 mb-0" style="height: 2px;">
        <div style="color: #262D61" class="px-3 fs-3 mb-4">Welcome to Medsky Airline</div>
        <hr style="background-color: #b3b3b3"  class="bg- border-0 flex-grow-1 p-2 mb-0 " style="height: 2px;">
    </div>





{{-- cards --}}








{{--

            <style>
                .card {
                    transition: transform 0.2s;
                }

                .card:hover {
                    transform: scale(1.05);
                }
                </style> --}}

<div class="container px-4 py-5" id="custom-cards">
    <h6 class="text-warning text-center">Membership</h6>
    <h2 class="text-center" style="color: #262d61;">An Elevated Experience Awaits</h2>
    <p class="text-center">Sign up to become a Cathay member and discover exclusive benefits and rewards that elevate your everyday, whether you’re on the ground or in the air.</p>
    <div class="row justify-content-center my-5">
        <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="card border-0 mx-2 shadow">
                <img src="images/iStock-507710364.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Exclusive Access</h5>
                    <p class="card-text">Unlock exclusive lounges and amenities with Cathay membership.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12  text-center">
            <div class="card border-0 mx-2 shadow">
                <img src="images/pexels-luciann-photography-3566187.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Travel Rewards</h5>
                    <p class="card-text">Earn points and enjoy travel rewards for your loyalty.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-5 text-center">
            <div class="card border-0 mx-2 shadow">
                <img src="images/iStock-1249649565.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Personalized Service</h5>
                    <p class="card-text">Receive personalized assistance and support on your journey.</p>
                </div>
            </div>
        </div>
    </div>
</div>














                <div id="cardSlider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner my-5">
                        <h6 class="text-warning text-center">Membership</h6>
                        <h2 class="text-center mb-4" style="color: #262d61;">Complete your journey</h2>
                        <p class="text-center">To make your trip even more memorable, save up to 20% by purchasing excess baggage allowance, lounge access or welcome and assistance services online.

                        </p>

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4 m-1 mb-5 mt-4">
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 1</h5>
                                                <p class="card-text">This is the content for card 1.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 2</h5>
                                                <p class="card-text">This is the content for card 2.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 3</h5>
                                                <p class="card-text">This is the content for card 3.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more cards here as needed -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-md-3 g-4 m-1 my-5">
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 1</h5>
                                                <p class="card-text">This is the content for card 1.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 2</h5>
                                                <p class="card-text">This is the content for card 2.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card rounded-4">
                                            <img src="images/pexels-vincent-gerbouin-1179156.jpg" class="card-img-top rounded-top-4" alt="Image 1">
                                            <div class="card-body">
                                                <h5 class="card-title">Card 3</h5>
                                                <p class="card-text">This is the content for card 3.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more cards here as needed -->
                                </div>
                            </div>
                        </div>
                        <!-- Add more carousel items as needed -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

{{-- subscription --}}

                <div class="card my-5 rounded-5 border-0 shadow-sm mx-auto " style="max-width: 1190px; background-color: #0a060607;">
                    <div class="row g-0  ">
                        <div class="col-md-4">
                            <img src="images/Medsky-adds-second-Airbus-320-to-its-fleet-131122.jpg" style="background-size: cover;" class="img-fluid rounded-start rounded-5 rounded-start-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-3 px-4">
                                <h5 class="card-title p-1">Never miss an offer</h5>
                                <p class="card-text p-1">Subscribe and be the first to receive our exclusive offers.</p>
                                <div class="form-floating p-1 ">
                                    <input type="email" class="form-control shadow-sm border border-1" id="floatingInput" placeholder="name@example.com" style="background-color: white;">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <button type="button" class=" shadow-sm p-3 mx-1 mt-3 rounded-5 px-5 btn btn-outline-primary">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- card with two col --}}

                <div class="container py-5">
                    <div class="containera m-5 ">
                        <h1 style="color: #262d61" class="mb-3">let's fly together
                        </h1>
                           <p class="mb-5 fs-5">Discover the latest offers and news. Let's plan your next trip together.</p>
                    <div class="row">
                        <div class="col-md-6 py-1">
                            <div class="card mb-3 border rounded-5">
                                <img src="images/pexels-fanilo-randria-2592537.jpg" class="border rounded-top-5 card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a class="icon-link icon-link-hover" href="#">
                                        Sign up now
                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                             <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                         </svg>
                                     </a>                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="card mb-1  border rounded-5" style="max-width: 540px;">
                                <div class="row g-0 rounded-5">
                                    <div class="col-md-6">
                                        <img src="images/pexels-stein-egil-liland-3573603.jpg" style="background-size: cover; width: 100%; height: 100%;" class="rounded-start-5 img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p>We are resuming flights to Penang, Malaysia via Phuket. Book now.</p>
                                            <a class="icon-link icon-link-hover" href="#">
                                               More Information
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 p-0 border rounded-5" style="max-width: 540px;">
                                <div class="row g-0 rounded-5">
                                    <div class="col-md-6">
                                        <img src="images/pexels-stein-egil-liland-3573603.jpg" style="background-size: cover; width: 100%; height: 100%;" class="rounded-start-5 img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p>We are resuming flights to Penang, Malaysia via Phuket. Book now.</p>
                                            <a class="icon-link icon-link-hover" href="#">
                                               Discover
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 p-0 border rounded-5" style="max-width: 540px;">
                                <div class="row g-0 rounded-5">
                                    <div class="col-md-6">
                                        <img src="images/pexels-stein-egil-liland-3573603.jpg" style="background-size: cover; width: 100%; height: 100%;" class="rounded-start-5 img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p>We are resuming flights to Penang, Malaysia via Phuket. Book now.</p>
                                            <a class="icon-link icon-link-hover" href="#">
                                                Discover Seychelles
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{-- back to top --}}
        <footer class="text-body-secondary py-5">
            <div class="container">
              <p class="float-end mb-1 shadow">
                <a id="back-to-top" href="#top">     <i class="fas fa-arrow-up"></i></a>
              </p>
            </div>
          </footer>



    {{-- foooter --}}



        <footer style="background-color: #262D61 ;border:5px solid rgba(197, 48, 48, 0);border-radius: 60px 60px 0px 0px;"class="text-light py-5 pb-0">
    <div class="container">
            <div class=" row">

                <div class="container">
                    <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <h5>Medsky Airways</h5>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item mb-2">
                                <div class="effect-one"><a href="#" class="nav-link p-0 ">About us</a></div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="effect-one"><a href="#" class="nav-link p-0 ">Features</a></div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="effect-one"><a href="#" class="nav-link p-0 ">Careers</a></div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="effect-one"><a href="#" class="nav-link p-0 ">Travel Agents</a></div>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="effect-one"><a href="#" class="nav-link p-0 ">Our commitment to you</a></div>
                            </li>
                        </ul>

                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <h5>Site Support</h5>
                        <ul class="nav flex-column mt-4 ">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Login Help</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Booking Information</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Accessibility</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Site Map</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <h5>Help</h5>
                        <ul class="nav flex-column mt-4  ">
                        <li class="nav-item mb-2"><a   href="#" class=" nav-link p-0 ">Contact us</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">Comment/Complaint</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mb-3 mt-3 ">
                        <div class="d-flex justify-content-end " >

                        <a href="">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="220" alt=""></a>

                    </div>


                    </div>
                    </div>
                </div>



                <div class="container pb-0 mt-5">

                    {{-- <p class="fw-light   ">© Medsky Airways Limited. All rights reserved.</p>
                    {{-- <h5 class="d-inline d-flex justify-content-end d-inline">Contact with us</h5>
                    <p class=" d-inline d-flex justify-content-end">Share your experience.</p> --}}
                    {{-- <div class="d-inline d-flex justify-content-end">
                        <ul class="list-unstyled d-flex">
                            <li class="ms-0"><a class="link-dark" href="#"><i class="fab fa-instagram fa-2x text-light"></i></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-facebook fa-2x text-light"></i></a></li>
                            <li class="ms-3"><a class "link-dark" href="#"><i class="fab fa-linkedin fa-2x text-light"></i></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><i class="fab fa-twitter fa-2x text-gray"></i></a></li>
                        </ul>
                    </div>  --}}

                    <div  class="d-flex flex-column flex-sm-row justify-content-between ">
                        <p style="color: rgba(255, 255, 255, 0.589);" class="fw-light">© Medsky Airways Limited. All rights reserved.</p>
                        <ul  class="list-unstyled d-flex  ">
                            <li class="ms-0 "><a class="link-dark" href="#"><i class="fab fa-instagram fa-2x  icon   "></i></a></li>
                            <li style="padding-left:30px" class="  "><a class="link-dark" href="#"><i class="fab fa-facebook fa-2x  icon"></i></a></li>
                            <li style="padding-left:30px" class="  "><a class "link-dark" href="#"><i class="fab fa-linkedin fa-2x  icon"></i></a></li>
                            <li style="padding-left:30px" class=" "><a class="link-dark" href="#"><i class="fab fa-twitter fa-2x  icon"></i></a></li>
                        </ul>
                    </div>






                <div class="d-flex flex-column flex-md-row justify-content-md-between py-4 my-2 border-top">
                    <div  class="last d-flex flex-wrap text-light">
                        <div  class=" last fw-light order-3 order-md-1 p-2">Cookie policy</div>
                        <div  class="last fw-light order-2 order-md-2 p-2">Accessibility</div>
                        <div class="last fw-light order-1 order-md-3 p-2">Privacy</div>
                        <div class="last fw-light order-1 order-md-4 p-2">Customer service commitment</div>
                        <div class="last fw-light order-1 order-md-5 p-2">Conditions for carriage</div>
                        <div class="last fw-light order-1 order-md-6 p-2">Legal</div>
                        <div class="last fw-light order-1 order-md-8 p-2">Optional services and fees</div>
                        <div class="last fw-light order-1 order-md-7 p-2">Tarmac delay plan</div>
                    </div>
                    </div>
                </div>



        </div>
        </footer>
        </div>
        </div>



<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/interaction.min.js"></script> <!-- for draggable events -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/daygrid.min.js"></script> <!-- for dayGrid view -->

<!-- Bootstrap JS (Include all compiled plugins) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>// Get the button element
        var backButton = document.getElementById("back-to-top");

        // When the user scrolls down 20px from the top, show the button
        window.onscroll = function () {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backButton.style.display = "block";
          } else {
            backButton.style.display = "none";
          }
        };

        // Scroll back to the top when the button is clicked
        backButton.addEventListener("click", function () {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        });
        </script>
  <script>
    @if(session('success'))
      $(document).ready(function() {
        $('#successModal').modal('show');

      });


    @endif

  </script>
@if($errors->any())
<script>
    $(document).ready(function() {
        $('#errorModal').modal('show');
    });
</script>
@endif
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth', // You can change this to 'timeGridWeek', 'listWeek', etc.
            events: '/api/flights', // Assuming you have set up this route to return JSON data
            eventClick: function(info) {
                // This is a function to handle click events on calendar entries
                alert('Event: ' + info.event.title);
                // You can also open a modal to show more details
            }
        });
        calendar.render();
    });
    </script> --}}
    </body>
    </html>
