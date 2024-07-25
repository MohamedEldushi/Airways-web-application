<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">


</head>

<style>
       body{
            margin: 0px;
            padding: 0px;
            background-color: #F2F3FA;
        }
        h5{
            color: #262D61
        }
        input{
            border-radius:50px;
        }
        .custom-button {
            background: #343D7E;
            color: white;
            transition: background 0.3s ease-in-out;
        }

        .custom-button:hover {
            background: #5b6ed8; /* Change the color on hover */
        }
        .visa { color: #1A1F71; }
.mastercard { color: #EB001B; }
.amex { color: #2D9FD9; }
.discover { color: #FF6000; }


        .custom-button {
            background:#262D61;
            color: white;
            transition: background 0.3s ease-in-out;
        }
        .custom-button:hover{
            background-color: #DAB03C
        }


        .back-button i{
            color: white
        }
        .back-button:hover i  {
            color: #f4d136be/* Change the color on hover */
        }
        .back-button:hover i  {
    transition: background-color 0.3s;
}
.btn-cancel-hover{
    color: #262D61;
}
.back-button:hover i {
    transition: background-color 0.3s;
}
.btn-cancel-hover:hover {
        background-color: #4451b2e3; /* Change to desired hover background color */
        color: #ffffff; /* Change text color on hover */
        border-color: #DAB03C; /* Change border color on hover */
    }
</style>
<body>
    {{-- <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  mx-5">
        <div class="col-md-0 ms-5 mb-2 mb-md-0    ">
            <a class="shadow-sm"  href="{{ url('/') }}">  <img src="{{url('images/logo 1.png')}}" width="90" alt=""></a>

        </div>
    </header> --}}
    <nav style="background-color: #262d61; border-radius:0 0px 5px 5px;margin-bottom:50px" class="navbar navbar-expand-lg fixed-top navbar-light p-2">
        <div class="container-fluid d-flex justify-content-start align-items-center mx-5">
            <a href="{{ url('/summary') }}" class="btn btn-sm me-2 back-button" style="padding: 0; border: none; ">
                <i class="bi bi-arrow-left " style=" font-size: 35px;"></i>
            </a>


            <!-- Logo Image -->
            <a  style="margin-left: 100px" href="{{ url('/') }}">
                <img src="{{url('images/Screenshot 2023-11-01 012013.png')}}" width="108" alt="">
            </a>
        </div>
    </nav>


    <div class="container mt-5 ">
        {{-- <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4  mx-5">
        <div class="col-md-0 ms-5 mb-2 mb-md-0 mb-5   ">
            <a class="shadow-sm mb-5 "  href="{{ url('/') }}">  <img src="{{url('images/logo 1.png')}}" width="100" alt=""></a>

        </div>
        </header> --}}

        <div  style="border-radius:20px; margin-top:120px" class=" card mb-4    border-0 shadow-sm ">
            <div class="card-body rounded-5 ">
                <h5 class="card-title">
                    Pay in your card's currency
                </h5>
                <p>As a Visa or Mastercard credit card holder, you can pay in the currency of the country where your card was issued.
                </p>
{{-- ... HTML and data display like in trip-summary ... --}}




{{--  --}}




<form action="{{ route('booking.confirm') }}" method="post">
    @csrf
    {{-- Example hidden inputs for booking details --}}

    {{-- Assuming you're not storing these details in the session, or you want them directly from the form --}}
    <input type="hidden" name="departureFlightId" value="{{ session('departureFlightId') }}">
    <input type="hidden" name="returnFlightId" value="{{ session('returnFlightId') }}">
    <input type="hidden" name="departureClassType" value="{{ session('departureClassType') }}">
    <input type="hidden" name="returnClassType" value="{{ session('returnClassType') }}">
    <input type="hidden" name="departurePrice" value="{{ session('departurePrice') }}">
    <input type="hidden" name="returnPrice" value="{{ session('returnPrice') }}">
    <input type="hidden" name="totalPrice" value="{{ session('totalPrice') }}">
    <input type="hidden" name="email" value="{{ session('contactDetails.email') }}">
    <input type="hidden" name="countryCode" value="{{ $countryCode }}">
    <input type="hidden" name="phone_number" value="{{ $mobileNumber }}">

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

{{-- Contact details, assuming they're singular and not per passenger --}}
<input type="hidden" name="contactDetails[email]" value="{{ $contactDetails['email'] ?? 'N/A' }}">
<input type="hidden" name="contactDetails[countryCode]" value="{{ $contactDetails['countryCode'] ?? 'N/A' }}">
<input type="hidden" name="contactDetails[mobileNumber]" value="{{ $contactDetails['mobileNumber'] ?? 'N/A' }}">


    <button type="submit" class="btn btn-success">Confirm Booking</button>
</form>


            </div>
        </div>

            <div class="row  mx-1 justify-content-between ">


                <!-- Payment Form -->
            <div style="border-radius:20px;"class="card col-md-8  border-0 shadow mb-5   ">
                <div  class="card-body">
                    <h5 class="card-title mb-5 mt-2">Payment Details</h5>
                    <form>
                        <!-- Cardholder Name -->
                        <div class="form-group">
                            <label for="cardName">Cardholder Name</label>
                            <input type="text" class="form-control" id="cardName" placeholder="Name as it appears on your card">
                        </div>

                        <!-- Card Number -->
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid card number">
                        </div>

                        <!-- Expiry Date -->
                        <div class="form-row">
                            <div class="col">
                                <label for="expiryMonth">Expiry Month</label>
                                <select class="form-control" id="expiryMonth">
                                    <!-- Populate months here -->
                                </select>
                            </div>
                            <div class="col">
                                <label for="expiryYear">Expiry Year</label>
                                <select class="form-control" id="expiryYear">
                                    <!-- Populate years here -->
                                </select>
                            </div>
                        </div>

                        <!-- CVV -->
                        <div class="form-group mt-2">
                            <label for="cvv">CVV</label>
                            <input  type="text" class="form-control" id="cvv" placeholder="Security code">
                        </div>
                <!-- Billing Address Section -->
                <h5 style="color: #262D61" class="mt-4 mb-5  mt-5">Billing Address</h5>
                <div class="mb-3">
                    <label for="billingAddress1" class="form-label">Address Line 1</label>
                    <input type="text" class="form-control" id="billingAddress1" placeholder="1234 Main St">
                </div>
                <div class="mb-3">
                    <label for="billingAddress2" class="form-label">Address Line 2 (optional)</label>
                    <input type="text" class="form-control" id="billingAddress2" placeholder="Apartment, studio, or floor">
                </div>


                <div class="form-row g-3">
                    <!-- Country Dropdown -->
                    <div class="col-md-6">
                        <label for="billingCountry" class="form-label">Country</label>
                        <select class="form-control" id="billingCountry" required="">
                            <option value="">Choose...</option>
                            <option value="USA">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="UK">United Kingdom</option>
                            <!-- Add more countries as options here -->
                        </select>
                    </div>

                    <!-- City Dropdown (Assuming static list for the example) -->
                    <div class="col-md-6">
                        <label for="billingCity" class="form-label">City</label>
                        <select class="form-control" id="billingCity" required="">
                            <option value="">Choose...</option>
                            <option value="New York">New York</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="Chicago">Chicago</option>
                            <!-- Add more cities as options here -->
                        </select>
                    </div>

                    <!-- Zip Code Input -->
                    <div class="col-md-6 mt-3 mb-4">
                        <label for="billingZip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="billingZip" placeholder="Zip Code" required="">
                    </div>
                </div>




              <!-- Terms and Conditions Checkbox -->
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input mt-2 " id="termsAndConditions" style="transform: scale(1.5);">
    <label class="form-check-label " for="termsAndConditions" style="margin-left: 8px;">
        I accept the <a href="#" target="_blank">Terms and Conditions</a> of Medsky Airways regarding payment and ticketing.
    </label>
</div>

                <!-- Submit Button -->
                <button style="padding:15px ;border-radius:11px" class=" custom-button w-100 btn btn-primary btn-lg  border-0" type="submit" fdprocessedid="mtd1p">Confirm payment</button>            </form>

                <button style="padding:12px; border-radius:11px; border-color: #1A1F71; " class="w-100 btn btn-outline-primary btn-lg mt-1 btn-cancel-hover" type="button" onclick="window.location.href='{{ url('ticket.addEventListener-summary') }}'">Cancel</button>

                </div>
            </div>

            <div  class="col-md-4  ">
                <!-- Reservation Summary Card -->
                <div  style="border-radius:20px;" class="card border-0 shadow pb-4 pt-3  ">
                    <div class="card-body rounded-5">
                        <h5 class="card-title mb-4">Reservation Summary</h5>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="font-weight-bold fs-5 mb-0">Total:</span>
                            <span style="color: #262D61" class="font-weight-bold text-end fw-bold fs-5">USD {{ $totalPrice }}</span>
                        </div>
                        <p class="mt-3 ">The payment was recorded by...</p>
                        <div class="payment-icons mt-3 ">
                            <i style="font-size: 40px;margin-left:30px;margin-right:5px" class="   fab fa-cc-visa visa"></i>
                            <i style="font-size: 40px" class="mx-2  fab fa-cc-mastercard  mastercard"></i>
                            <i style="font-size: 40px" class=" mx-2 fab fa-cc-amex  amex"></i>
                            <i style="font-size: 40px" class=" mx-2 fab fa-cc-discover  discover"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHj6NBt9H3ob7C4wIft4ynx8W9g5rib8Rv1LMIdDkECQ6KSsIXqj5fN" crossorigin="anonymous"></script>

    <script>
        document.getElementById('termsAndConditions').addEventListener('change', function(e) {
            document.getElementById('confirmPaymentButton').disabled = !e.target.checked;
        });
        document.getElementById('confirmPayment').addEventListener('click', function() {
    // Get the flight price value
    var flightPrice = document.getElementById('flightPrice').value;

    // Here you would normally handle the payment processing
    // For example, sending a request to your server or a payment gateway
    // Since we can't do this in this environment, we'll just mock this step

    // Mock payment processing
    setTimeout(function() {
      // Mock email sending
      alert('Payment of USD ' + flightPrice + ' confirmed. A confirmation email has been sent to you.');

      // Redirect to another page if needed
      window.location.href = '{{ url('confirmation') }}'; // Replace with the correct URL
    }, 1000);
  });

        $(document).ready(function() {
    $('#billingCountry').change(function() {
        var country = $(this).val();
        var cities = [];
        $('#billingCity').empty(); // Clear the city dropdown
        $('#billingCity').append('<option selected>Choose...</option>'); // Add default option

        if(country == "USA") {
            cities = ['New York', 'Los Angeles', 'Chicago'];
        } else if(country == "Canada") {
            cities = ['Toronto', 'Vancouver', 'Montreal'];
        } // Add more conditions for other countries

        // Populate the city dropdown
        $.each(cities, function(index, city) {
            $('#billingCity').append('<option value="' + city + '">' + city + '</option>');
        });
    });
});
    </script>

</body>
</html>
