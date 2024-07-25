<x-dashboard-applicant>

    <style></style>
    {{-- <h1>Name: {{ $user->name }}</h1>
    <h1>E-mail: {{ $user->email }}</h1> --}}

        <!-- Include Bootstrap CSS -->

        <div class="container ">
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
            <nav style="margin-left: 20px" aria-label="breadcrumb ">
                <ol class="breadcrumb mt-3 mx-5">
                  <li class="breadcrumb-item mx-2"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Details</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Address</li>
                </ol>
              </nav>

        <div style="width:90%" class="row mx-auto  align-items-left mb-4 mx-5">
            <div class="row   mt-5 justify-content-center">
                <div class="col-md-12 ">
                    <div class="card  shadow rounded-4">
                        <div style="background-color: #262D61" class="card-header rounded-top-4 text-light text-left  p-3 ">
                            <h5>Personal Details</h5>
                        </div>
                        <div class="card-body py-0">
                            <div class="row mx-auto my-5">
                                <div class="col-md-2">
                                    <p class="mb-1 fw-light">Academic title</p>
                                    <h5 class="fw-semibold"> {{$user->title}}</h5>
                                </div>

                                <div class="col-md-4">
                                <p class="mb-1 fw-light">Name</p>
                                <h5 class="fw-semibold"> {{ $user->firstname }}</h5>
                            </div>
                            <div class="col-md-4"> <p class="mb-1 fw-light">Surname</p>
                                <h5 class="card-title "> {{ $user->surname }}</h5></div>
                                <div class="col-md-2"> <p class="mb-1 fw-light">birthday</p>
                                    <h5 class="card-title fw-semibold ">{{$user->birthday}}</h5></div>


                            </div>
                            <div class="row my-4">
                                <div class="col-md-4 mx-3 ">
                                    <p class="mb-1 fw-light">Nationality</p>
                                    <h5 class="fw-semibold"> {{$user->nationality}}</h5>
                                </div>
                                <div   class="col">
                                    <p class="mb-1 fw-light">Email</p>
                                    <h5 class="fw-semibold"> {{ $user->email }}</h5>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('edit-profile')}}" >        <a style="margin-top: 25px; margin-left: 15px;" class="icon-link icon-link-hover fw-semibold" href="{{route('edit-profile')}}">
                                            Edit passenger details
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right fw-semibold" viewBox="0 0 16 16">
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





            <div  class="row align-items-start pb-5 mx-5">
                <div style="margin-left: 5px"  class="row mb-0=5 justify-content-start">
                    <div class="col-md-5">
                        <div class="card shadow rounded-4">
                            <div style="background-color: #262D61" class=" card-header rounded-top-4 text-light text-start p-3">
                                <h5>Preferred address</h5>
                            </div>
                            <div class="row mx-3 my-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">Address type</p>
                                    <h5 class="fw-semibold"> Home</h5>
                                </div>
                            </div>
                            <div class="row mx-3 mb-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">Zip/Postal code</p>
                                    <h5 class="fw-semibold"> {{$user->zip_code}}</h5>
                                </div>
                            </div>
                            <div class="row mx-3 mb-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">Country / Region</p>
                                    <h5 class="fw-semibold"> {{$user->country}}</h5>
                                </div>
                            </div>
                            <div class="row mx-3 mb-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">City</p>
                                    <h5 class="fw-semibold"> {{$user->city}}</h5>
                                </div>
                            </div>
                            {{-- <div class="row mx-3 mb-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">Area</p>
                                    <h5 class="fw-normal"> {{$user->area_code}}</h5>
                                </div>
                            </div> --}}
                            <div class="row mx-3 mb-3">
                                <div class="col">
                                    <p class="mb-2 fw-light">Mobile number</p>
                                    <h5 class="fw-normal"> {{$user->phone_number}}</h5>
                                </div>
                            </div>
                            <div class="row mx-5 mb-3">
                                <div class="col text-end">
                                    <a href="{{ route('edit-address') }}">

                                        <h6 class="icon-link icon-link-hover ">Edit
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
            </div>


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
                                    <a href="#">
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
            </div>

 --}}


        </div>



</x-dashboard-applicant>
