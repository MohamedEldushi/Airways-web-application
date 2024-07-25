<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.20.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yw6PTrMlP6n6wyOfclv9B1kQ/lzPQXal+lXVBn8" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS (from Bootstrap CDN) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">



   <title>Document</title>

    <style>

        body{
            background: #F2F3FA;
        }

    .vertical-line {
        border-left: 1px solid #000; /* Color and width of the vertical line */
        height: 35px; /* Height of the line */
        margin: 0px 20px; /* Spacing on each side of the line */
        margin-top: 5px;
    }

    .last:hover {
    text-decoration: underline;
    color:#DAB03C;
}

#loginButton {
        transition: background-color 0.3s, color 0.3s;
    }


    .custom-hover{
        background-color: #262D61;
         padding: 12px 0px;
         color: white;
    }
    .custom-hover:hover {
    }
    .custom-hover:hover {
        background-color: #2d379b; /* Change the color to your desired hover color */
        color: white;
    }

    /* Define the animation styles */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Apply the animation to the button */
    .fade-in-animation {
        animation: fadeIn 0.5s ease;
    }
    /* .custom-card {
                transition: transform 0.3s ease-in-out;

            } */

            /* .custom-card:hover {
                background-color:#DAB03C;

                transform: scale(1.05);
            } */
            #login1{
                background-color: white;
                 padding: 20px 20px;
                 color:#000;
            }
           #login1:hover {
        background-color:#262D61;
        color: white;
    }

    </style>
</head>
<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
        <div class="col-md-0 ms-5 mb-2 mb-md-0    ">
            <a class="shadow-sm"  href="{{ url('/') }}">  <img src="{{url('images/logo 1.png')}}" width="90" alt=""></a>

        </div>

        <ul  class="nav btn btn-outline-light     p-2 shadow     col-12 col-md-auto mb-5 justify-content-center mb-md-0 border-1 border-secondary rounded-5  px-5">
            <li><a href="#" class="nav-link px-2 text-dark">IST</a></li>
            <li><a href="#" class="nav-link px-2 mx-5 "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 35" fill="none">
                <path d="M31.0004 23.6442L22.1592 33.9781" stroke="#292D32" stroke-opacity="0.8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 23.6442H31" stroke="#292D32" stroke-opacity="0.8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1 11.334L9.84118 1" stroke="#292D32" stroke-opacity="0.8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M31 11.334H1" stroke="#292D32" stroke-opacity="0.8" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li>
            <li><a href="#" class="nav-link px-2 my-0 me-3 text-dark">JFK</a></li>




            <hr class="vertical-line">

            <li><a href="#" class="nav-link px-2 mb-0 pb-0 ms-3  text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar2-check mb-1 me-4" viewBox="0 0 16 16">
                <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
              </svg>Friday </a>
              <a style="font-size:14px" href="#" class="nav-link p-0   ms-5 text-primary">21 MAR </a>


            </li>
            <li><a href="#" class="nav-link px-2 pb-0 mx-5 me-3 text-dark">Monday </a>
                <a style="margin-left: 40px;  font-size:14px" href="#" class="nav-link px-2 pb-0 me-3 p-0 text-primary ">18 NOV </a>
                </li>

            <hr class="vertical-line">

            <li><a href="#" class="nav-link px-2 mx-3 text-dark"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person mb-1" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg> 1 Passenger</a></li>
            <hr class="vertical-line">



            <li><a class="icon-link icon-link-hover nav-link px-2 ms-3 mt-1 " href="#">
                Modify search
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right mt-1    " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
              </a></li>

          </ul>



          <div class="col-md-0 text-end">
            @if(auth()->check())
            {{-- <a href="#" id="dropdownMenuButton" class="d-inline-flex align-items-center text-wrap text-light p-3 me-5 btn btn-outline-light rounded-5 border border-secondary shadow-sm" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1rem; background-color:#262D61;">
                {{-- <i class="bi bi-person-circle  text-light me-1 mb-1"></i> --}}
                {{-- Hello, {{ auth()->user()->title }} {{ auth()->user()->firstname }}
            </a>  --}}
            <div class="dropdown" style="position: relative;">
                <a href="#" id="dropdownMenuButton" class="d-flex align-items-center text-wrap text-light p-3 btn btn-outline-light  rounded-5 border border-secondary shadow-sm me-5" data-bs-toggle="dropdown" aria-expanded="false"style="font-size: 1rem; background-color:#262D61;">
                    Hello, {{ auth()->user()->title }} {{ auth()->user()->firstname }}
                </a>
                <ul class="dropdown-menu position-absolute shadow-sm rounded-5 mt-1 p-2  py-4" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item mb-2 mt-1 py-2 border-bottom" href="{{route('dashboard.profile')}}">
                            <i style="color:#287BA7" class="bi bi-person-lines-fill me-2  "></i> My personal details
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2 py-2 border-bottom"  href="{{route('dashboard.my-flights')}}" >
                            <i  style="color:#287BA7" class="bi bi-briefcase-fill me-2 "></i> My flights
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2 py-2 border-bottom" href="#">
                            <i  style="color:#287BA7" class="bi bi-bell-fill me-2 "></i> Notification
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item mb-2 py-2 border-bottom" href="#" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                            <i style="color:#287BA7" class="bi bi-chat-fill me-2"></i> Feedback
                        </a>
                    </li>


                    {{-- feadback list --}}









                    <!-- Feedback Button -->


                    <li>
                        <a class="dropdown-item" href="{{url('auth/logout') }}">
                            <i  style="color:#287BA7" class="bi bi-box-arrow-right me-2"></i> Log out
                        </a>
                    </li>
                </ul>

            </div>
            {{-- <ul class="dropdown-menu position-static mx-0 rounded-5 shadow" aria-labelledby="dropdownMenuButton" data-bs-theme="light">
                <li><a class="dropdown-item" href="#"> My personal details</a></li>
                <li><a class="dropdown-item" href="#">My flights</a></li>
                <li><a class="dropdown-item" href="#">Notification</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
        </div> --}}



            @else
                <button id="login1" type="button" class="btn btn-outline-secondary shadow-sm me-5 rounded-5  " onclick="window.location.href='{{ url('auth/login') }}'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle me-1 mb-1" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg> Log in
                </button>
            @endif
        </div>




      </header>
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



 {{-- content --}}
 <div class="container">

     {{$slot}}
 </div>








 <footer>
<div class="container">

    <hr class="mx-5">

    <div class="d-flex flex-column flex-md-row justify-content-md-between py-0 my-2 mx-5">
        <p style="color: rgb(14, 10, 10);" class="fw-light">© Medsky Airways Limited. All rights reserved.</p>

        <div  class="last d-flex flex-wrap text-dark text-decoration-underline ">
            <div  class=" last  order-3 order-md-1 px-2 ">Cookie policy</div>
            <div  class="last f order-2 order-md-2 px-2">Accessibility</div>
            <div class="last  order-1 order-md-3 px-2">Privacy</div>
            <div class="last  order-1 order-md-4 px-2">Conditions fo carriage</div>
            <div class="last  order-1 order-md-6 px-2">Legal</div>
        </div>
        </div>
</div>

 </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Include Bootstrap JS, jQuery, and additional script at the end of your page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS Bundle with Popper (from Bootstrap CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

    $(document).ready(function () {
        // Add an event listener for the show.bs.collapse event
        $('.collapse').on('show.bs.collapse', function () {
            // Hide other collapsible elements when one is shown
            $('.collapse.show').not($(this)).collapse('hide');
        });
    });
</script>
</body>
</html>
