<x-dashboard-applicant>


<div class="container">
  <!-- Include Bootstrap CSS -->
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
@if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <form action="{{ route('update-profile') }}" method="POST" style="width:90%" class="mx-auto">
        @csrf
        @method('PUT')

        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card shadow rounded-4">
                    <div style="background-color: #262D61" class="card-header rounded-top-4 text-light text-left p-3">
                        <h5>Personal Details</h5>
                    </div>
                    <div class="card-body py-0">
                       <!-- Academic Title Dropdown -->
            <div class="mb-3">
                <label for="academicTitle" class="form-label fw-semibold mt-3">Academic Title</label>
                <select class="form-select" id="academicTitle" name="title">
                    <option value="">Select your title</option>
                    <option value="Dr." {{ old('title', $user->title ?? '') == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                    <option value="Mr." {{ old('title', $user->title ?? '') == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                    <option value="Ms." {{ old('title', $user->title ?? '') == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label fw-semibold">Firstame</label>
                            <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name" value="{{ old('firstname', $user->firstname ?? '') }}">
                        </div>

                        <!-- Surname -->
                        <div class="mb-3">
                            <label for="surname" class="form-label fw-semibold">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" value="{{ old('surname', $user->surname ?? '') }}">
                        </div>

                        <!-- Birthday -->
                        <div class="mb-3">
                            <label for="birthday" class="form-label fw-semibold">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="billingCountry" class="form-label">Country</label>
                            <select id="billingCountry" name="country" class="form-select">
                                <option value="">Choose...</option>
                                <option value="Libya" {{ old('country', $user->country ?? '') == 'Libya' ? 'selected' : '' }}>Libya</option>
                                <option value="Country2" {{ old('country', $user->country ?? '') == 'Country2' ? 'selected' : '' }}>Country2</option>
                                <!-- Add more countries as needed -->

                                {{-- @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach --}}
                            </select>
                        </div>




                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email ?? '') }}">
                        </div>

                        <!-- Save Button -->
                        <div class="mb-3  text-center">
                            <button style="padding:12px; border-radius:11px;  background-color:#CEB70D;color:white" type="submit" class="btn   py-2 px-5 mx-auto rounded-3 w-30">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>















    {{-- <div class="row align-items-left py-5">
        <div class="row  mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card ">
                    <div style="background-color: #262D61" class="card-header text-light text-left  p-3 ">
                        <h5>Personal details</h5>
                    </div>
                    <div class="card-body py-4">
                        <div class="row mx-auto my-5">
                            <div class="col-md-2">
                                <p class="mb-1 fw-light">Academic title</p>
                                <h5 class="fw-normal"> Dr.</h5>
                            </div>

                            <div class="col-md-4">
                            <p class="mb-1 fw-light">Name</p>
                            <h5 class="fw-normal">{{ auth()->user()->name }} </h5>
                        </div>
                        <div class="col-md-4"> <p class="mb-1 fw-light">Surname</p>
                        <h5 class="card-title fw-normal"> Eldushi</h5></div>
                        <div class="col-md-2"> <p class="mb-1 fw-light">Birth of date</p>




                     <h5 class="card-title fw-normal">04.03.2001</h5></div>


                        </div>
                        <div class="row my-4">
                            <div class="col-md-4 mx-3 ">
                                <p class="mb-1 fw-light">Nationality</p>
                                <h5 class="fw-normal"> Libay</h5>
                            </div>
                            <div   class="col">
                                <p class="mb-1 fw-light">Email</p>
                                <h5 class="fw-normal">{{ auth()->user()->email }}</h5>
                            </div>
                            <div class="col-md-3">
                                <a href="{{url('profile')}}" >        <a style="margin-top: 25px; margin-left: 15px;" class="icon-link icon-link-hover" href="#">
                                        Edit passenger details
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

        </div> --}}





        {{-- <div class="row align-items-start pb-5">






            <div class="row mb-0=5 justify-content-start">
        <div class="col-md-5">
            <div class="card">
                <div style="background-color: #262D61" class="card-header text-light text-start p-3">
                    <h5>Preferred address</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row mx-3">
                            <label for="addressType" class="col-sm-12  col-form-label fw-light">Address type</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control p-2" id="addressType" value="Home">
                            </div>
                        </div>
                        <div class="mb-3 row mx-3">
                            <label for="postalCode" class="col-sm-12 col-form-label fw-light">Zip/Postal code</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="postalCode" value="43530">
                            </div>
                        </div>
                        <div class="mb-3 row mx-3">
                            <label for="countryRegion" class="col-sm-12 col-form-label fw-light">Country / Region</label>
                            <div class="col-sm-12">
                                <select class="form-select" id="countryRegion">
                                    <option value="Libya">Libya</option>
                                    <option value="Country2">Country2</option>
                                    <!-- Add more countries/regions as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row mx-3">
                            <label for="city" class="col-sm-12 col-form-label fw-light">City</label>
                            <div class="col-sm-12">
                                <select class="form-select" id="city">
                                    <option value="Misrata">Misrata</option>
                                    <option value="City2">City2</option>
                                    <!-- Add more cities as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row mx-3">
                            <label for="area" class="col-sm-12 col-form-label fw-light">Area</label>
                            <div class="col-sm-12">
                                <select class="form-select" id="area">
                                    <option value="Yeidir">Yeidir</option>
                                    <option value="Area2">Area2</option>
                                    <!-- Add more areas as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row mx-3">
                            <label for="mobileNumber" class="col-sm-12 col-form-label fw-light">Mobile number</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <select class="form-select" id="areaCode">
                                        <option value="053">053</option>
                                        <option value="054">054</option>
                                        <!-- Add more area codes as needed -->
                                    </select>
                                    <input type="text" class="form-control" id="phoneNumber" value="92213481">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mx-5 mb-3">
                    <div class="col text-end">
                        <a href="{{url('profile')}}">
                            <h6 class="icon-link icon-link-hover">Save
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</div>

</x-dashboard-applicant>
