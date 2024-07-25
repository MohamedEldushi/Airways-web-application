<x-home>

<style> .custom-button1 {
   background-color: #262D61; margin-left:0px;padding:15px 54px;

    transition: background 0.3s ease-in-out;
}

.custom-button1:hover {
    background: #DAB03C;
    color: white;
/* Change the color on hover */
}
.custom-button2 {

    background-color: #262D61;
    margin-left:50px;padding:15px 74px;

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
}
</style>
{{-- search section --}}
<div class="container  ">
    <div class=" milestone shadow p-0 mx-5 mb-5 pb-2 col-md-11 mx-auto  bg-body rounded-5 text-center text-md-start">
        <div class="d-flex flex-wrap ">
            <a style="background-color: #262d61 ;border-radius:32px 0px 0px 0px" href="{{url('/')}}" class="text-light btn p-3  text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-plane mx-2"></i> Book a flight
            </a>

            <a style="background-color: #262d6100" href="{{ route('checkin') }}" class="text-dark    btn p-2 rounded-0 px-4 text-center mb-3 mb-md-0 col-12 col-md-4">
                <i class="fas fa-check-circle mx-2"></i> Manage / Check in
            </a>

            <a style="background-color: #262d61 ;border-radius:0px 32px 0px 0px" href="{{ route('flightstatus') }}" class="text-light btn p-2 text-center col-12 col-md-4">
                <i class="fas fa-plane-arrival  mx-2 "></i> Flight status
            </a>
        </div>




        <div class="d-flex mt-4 mx-4 mb-4 p-0 pb-2 border-bottom">
            <a id="manageBookingTab" class="btn text-primary mx-4 fs-6 manage-booking-tab">Manage Booking</a>
            <a id="checkInTab" class="btn fs-6" href="javascript:void(0);">Check in</a>
        </div>
        <form id="manageBookingForm" action="{{ route('booking.retrieve') }}" method="POST" class="container mt-3">
            @csrf
            <div  class="container mt-3">
                <div class="row">
                    <div class="col-md-12 col-12 d-flex flex-wrap">
                        <div class="form-floating mb-3 col-md-5 col-12">
                            <input type="text" class="form-control rounded-1 rounded-end-0 border-end-0" id="floatingInput1" name="booking_reference" placeholder="Booking Reference">
                            <label for="floatingInput1">Booking Reference</label>
                        </div>
                        <div class="form-floating mb-3 col-md-4 col-12">
                            <input type="text" class="form-control rounded-1 rounded-end-1 rounded-start-0 border-start-0" id="floatingInput2" name="first_name" placeholder="First Name">
                            <label for="floatingInput2">First Name</label>
                        </div>
                        <div class="col-md-3 col-12 mt-3 mt-md-0 ml-auto">
                            <button type="submit"  class="btn custom-button1 shadow ms-5 rounded-5 text-light ">Retrieve Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>




        <form id="checkInForm" action="{{ route('booking.check-in') }}" method="POST" class="container mt-3" style="display: none;">
            @csrf
<div class="container mt-3" >
    <div class="row">
        <div class="col-md-12 col-12 d-flex flex-wrap">

            <div class="form-floating mb-3 col-md-5 col-12 ">
                <input type="text" class="form-control rounded-1  rounded-end-0 border-end-0" id="floatingInput1" placeholder="name@example.com">
                <label for="floatingInput1">Booking  reference  &nbsp;&nbsp; </label>
            </div>
            <div class="form-floating mb-3 col-md-4 col-12 ">
                <input type="text" class="form-control  rounded-1 rounded-end-1 rounded-start-0 border-start-0" id="floatingInput2" placeholder="name@example.com">
                <label for "floatingInput2">passenger name</label>
            </div>
            <div class="col-md-3 col-12 mt-3 mt-md-0 ml-auto">
                <button type="submit" id="checkInButton"  class=" btn custom-button2  shadow rounded-5 text-light btn">Check-in</button>
            </div>
        </div>
</div>
</div>
</form>

    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var manageBookingTab = document.getElementById('manageBookingTab');
    var checkInTab = document.getElementById('checkInTab');
    var manageBookingForm = document.querySelector('form[action="{{ route("booking.retrieve") }}"]');
    var checkInForm = document.querySelector('form[action="{{ route("booking.check-in") }}"]');
    var checkInButton = document.querySelector('form[action="{{ route("booking.check-in") }}"] button[type="submit"]');

    manageBookingTab.addEventListener('click', function() {
        manageBookingForm.style.display = 'block';
        checkInForm.style.display = 'none';
        manageBookingTab.classList.add('text-primary');
        checkInTab.classList.remove('text-primary');
        console.log('Manage booking form should be visible.');
    });

    checkInTab.addEventListener('click', function() {
        manageBookingForm.style.display = 'none';
        checkInForm.style.display = 'block';
        checkInButton.style.display = 'block'; // Make sure this matches your CSS for the button to be visible
        checkInTab.classList.add('text-primary');
        manageBookingTab.classList.remove('text-primary');
        console.log('Check-in form should be visible.');
    });

    // Click the manageBookingTab to initialize the view
    manageBookingTab.click();
});

        </script>



</x-home>
