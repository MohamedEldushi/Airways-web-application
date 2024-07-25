<x-auth>
    <style>
        body{
            margin: 0%;
            padding: 0%;
            background: #eeeffa;;
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
            margin-top:7% ;
                padding: 20px ;


    background: linear-gradient(183deg, rgba(62, 239, 228, 0.85) -93.41%, rgba(42, 48, 96, 0.89) 103.36%, rgba(38, 45, 97, 0.85) 103.38%);

    box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.30);
        }

        .custom-button{
            border: 1px solid #242b65;
            background: #2F387F;
            padding:10px
        }
        .custom-button:hover {
            background: #38449f;
        }
    </style>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> --}}


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- CSRF token is required for form security -->



    <div style="
        background: #ffffff00;

        border:1px solid rgba(166, 166, 166, 0.412);
        border-radius: 8px;
        margin:50px 0px;
        background-color: #f4f5ff;
    "  class="container mt-3 ">

        <div class="row">
            <div class="col-10 mx-auto">
                <h2 class="mb-5 mt-5">Miles & Smiles Membership Enrollment Details</h2>
{{-- error massage  --}}
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ route('auth.post-register') }}" method="POST">
    @csrf

                <!-- Enrollment Details -->
                <div class="row g-3">
                    <div class="col-md-6 form-floating">
                        <input  type="text" name="firstname" class="shadow-sm form-control" id="firstname" placeholder="firstname"required >
                        <label class="text-secondary" for="firstname">First name (as per passport)</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text"name="surname" class="shadow-sm form-control" id="Surname" placeholder="Surname"required >
                        <label class="text-secondary"  for="Surname">Surname (as per passport)</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <select class="shadow-sm form-select"name="nationality" id="nationality" aria-label="Floating label select example" required >
                            <option class="text-secondary" selected>Select</option>
                            <option value="American">American</option>
                            <option value="Canadian">Canadian</option>
                            <option value="British">British</option>
                            <option value="French">French</option>
                            <option value="German">German</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Indian">Indian</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Brazilian">Brazilian</option>
                            <!-- Add more nationalities here -->
                        </select>
                        <label for="nationality">Nationality</label>
                    </div>

                    <div class="col-md-3 form-floating">
                        <input type="date" class="shadow-sm form-control" name="birthday" id="Birthday" placeholder="Birthday"required  >
                        <label class="text-primary" for="Birthday">Birthday DD/MM/YYYY</label>
                    </div>
                    <div class="col-md-3 form-floating">


                        <select class="shadow-sm form-select"name="title" id="title"  aria-label="Floating label select example" required >
                            <option class="text-secondary" selected>Select</option>
                            <option value="Mr">Mr.</option>
                            <option value="Ms">Ms.</option>
                            <option value="Mrs">Mrs.</option>
                            <option value="Dr">Dr.</option>
                            <!-- Add more options as needed -->
                        </select>
                        <label class="text-primary" for="title">Title</label>
                    </div>


                </div>
                <div class="col-md-4 form-floating mt-3">
                    <select class="shadow-sm form-select"name="gender"  id="gender" aria-label="Floating label select example" required >
                        <option class="text-secondary" selected>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <!-- Add more gender options here if necessary -->
                    </select>
                    <label for="gender">Gender</label>
                </div>

                <hr class="mt-5 ">
                <!-- Contact Details -->
                <h2 class="mt-4 mb-4">Contact details</h2>
                <div class="row g-3">
                    <div class="col-md-3 form-floating">
                        <select class="shadow-sm form-select" name="country" id="country" aria-label="Floating label select example" required>

                            <option class="text-secondary" selected>Select</option>
                            <option value="USA">USA</option>
                            <option value="Canada">Canada</option>
                            <option value="UK">UK</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                        </select>
                        <label for="country">Country / Region</label>
                    </div>

                    <div class="col-md-3 form-floating">
                        <select class="shadow-sm form-select" name="city" id="city" aria-label="Floating label select example" required>
                            <option selected>Select</option>
                            <!-- Cities will be added dynamically based on the country selection -->
                        </select>
                        <label for="city">City</label>
                    </div>

                    <div class="col-md-3 form-floating">
                        <input type="text" class="shadow-sm form-control" name="zip_code" id="zip_code" placeholder="Zip / Postal code" required>
                        <label class="text-secondary"  for="zip_code">Zip / Postal  code</label>
                    </div>
                    <div class="col-md-12 form-floating">
                        <input type="text" class="shadow-sm form-control" name="address" id="address" placeholder="Address" required>
                        <label class="text-secondary"  for="address">Address</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="shadow-sm form-control" name="email" id="email" placeholder="Email address" required>
                        <label class="text-secondary"  for="email">Email address</label>
                    </div>
                    <div class="col-md-2 form-floating">
                        <select class="shadow-sm form-select" name="area_code" id="area_code" required>
                            <option class="text-secondary" selected>Select</option>
                            <option value="+1">+1 </option>
                            <option value="+44">+44 </option>
                            <option value="+33">+33 </option>
                            <option value="+49">+49 </option>
                            <option value="+81">+81 </option>
                            <!-- Add more area codes here -->
                        </select>
                        <label for="area_code">Area Code</label>
                    </div>

                    <div class="col-md-4 form-floating">
                        <input type="text" class="shadow-sm form-control" name="phone_number" id="phone_number" placeholder="Mobile number" required>
                        <label class="text-secondary" for="phone_number">Mobile number</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="password" class="shadow-sm form-control" name="password" id="password" placeholder="Password" required>
                        <label class="text-secondary" for="password">Create password</label>
                    </div>

                </div>

                <hr class="mt-5 mb-4">

                <!-- Sign Up for News -->
                <div class="mt-4 mb-4">
                    <h2 style="color: #262D61">Sign up for our news and offers</h2>
                    <!-- Newsletter and Terms Checkboxes -->
                    <p class="mt-4">I would like to receive news and offers from:</p>

                    <div class="form-check my-3">
                        <input class="form-check-input p-2" type="checkbox" >
                        <label style="color: #262D61" class="form-check-label" >
                            Privilege Club partners                        </label>
                      </div>
                      <div class="form-check my-3">
                        <input class="form-check-input p-2" type="checkbox" value="" >
                        <label style="color: #262D61"  class="form-check-label" >
                            Other Medsky alrways group entities                        </label>
                      </div>

                </div>
                <hr class="mt-5">
                <div class="form-check my-3">
                    <input class="form-check-input p-2" type="checkbox" value="" id="">
                    <label style="color: #262D61 ;width:50%"  class="form-check-label" for="">
                        agree to the Privilege Club Terms and Conditions, and understand that my information will be processed in accordance with the Medsky Airways Privacy Notice                    </label>
                  </div>

                  <div class="d-flex justify-content-center mb-5 mt-5">
                    <button class= "shadow w-50 btn btn-lg btn-primary p-3 rounded-1 custom-button mb-5" type="submit">Create an account</button>
                </div>
    </form>

                </div>
        </div>
    </div>

      <script>
// Example country to city mapping

// Example country to city mapping
var countryCities = {
    "USA": ["New York", "Los Angeles", "Chicago", "Houston", "Phoenix"],
    "Canada": ["Toronto", "Montreal", "Vancouver", "Calgary", "Edmonton"],
    "UK": ["London", "Birmingham", "Leeds", "Glasgow", "Sheffield"],
    "France": ["Paris", "Marseille", "Lyon", "Toulouse", "Nice"],
    "Germany": ["Berlin", "Hamburg", "Munich", "Cologne", "Frankfurt"],
    // Add more countries and their cities here
};

document.getElementById('country').addEventListener('change', function() {
    var selectedCountry = this.value;
    var citySelect = document.getElementById('city');
    citySelect.innerHTML = '<option selected>Select</option>'; // Reset and add the default option

    if (selectedCountry in countryCities) {
        citySelect.disabled = false;
        countryCities[selectedCountry].forEach(function(city) {
            var newOption = document.createElement('option');
            newOption.value = city;
            newOption.text = city;
            citySelect.appendChild(newOption);
        });
    } else {
        citySelect.disabled = true;
    }
});
</script>




</x-auth>
