<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Status</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet"> --}}


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


</style>
<body>
    <nav style="background-color: #262d61; border-radius:0 0px 5px 5px; " class="navbar navbar-expand-lg fixed-top navbar-light  p-2 ">

        <div class="container-fluid mx-4">
        <a href="{{ url('/') }}">  <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="90" alt=""></a>

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
                            @else
                                <!-- Display welcome message and logout link for authenticated users -->
                                <!-- Existing dropdown for authenticated users -->
                                <li style="width: 11rem;" class="menu nav-item mt-1 dropdown">
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







 {{-- content --}}
 <div class="container">

    {{$slot}}
</div>



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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JS (Include all compiled plugins) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>// Get the button element
</body>
</html>
