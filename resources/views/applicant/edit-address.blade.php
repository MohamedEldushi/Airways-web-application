<x-dashboard-applicant>
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
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card shadow rounded-4">
                    <div style="background-color: #262D61" class="card-header rounded-top-4 text-light text-left p-3">
                        <h5>Preferred Address</h5>
                    </div>
                    <div class="card-body py-0">
                        <form action="{{ route('update-address') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Address Type Dropdown -->
                            <div class="mb-3">
                                <label for="addressType" class="form-label fw-semibold mt-3">Address Type</label>
                                <select class="form-select" id="addressType" name="address_type">
                                    <option value="Home" {{ old('address_type', $user->address_type ?? '') == 'Home' ? 'selected' : '' }}>Home</option>
                                    <option value="Work" {{ old('address_type', $user->address_type ?? '') == 'Work' ? 'selected' : '' }}>Work</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                            <!-- Zip/Postal Code -->
                            <div class="mb-3">
                                <label for="zipCode" class="form-label fw-semibold">Zip/Postal Code</label>
                                <input type="text" class="form-control" id="zipCode" name="zip_code" value="{{ old('zip_code', $user->zip_code ?? '') }}">
                            </div>

                            <!-- Country Dropdown -->
                            <div class="mb-3">
                                <label for="billingCountry" class="form-label fw-semibold">Country / Region</label>
                                <select id="billingCountry" name="country" class="form-select">
                                    <option value="">Choose...</option>
                                    {{-- show one country--}}
                                    <option value="Nigeria" {{ old('country', $user->country ?? '') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                    {{-- Add more countries as needed --}}







                                    {{-- @foreach ($countries as $country)
                                        <option value="{{ $country }}" {{ old('country', $user->country ?? '') == $country ? 'selected' : '' }}>{{ $country }}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <!-- City Input -->
                            <div class="mb-3">
                                <label for="city" class="form-label fw-semibold">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $user->city ?? '') }}">
                            </div>

                            <!-- Mobile Number -->
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label fw-semibold">Mobile Number</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phone_number" value="{{ old('phone_number', $user->phone_number ?? '') }}">
                            </div>

                            <!-- Save Button -->
                            <div class="mb-3 text-center">
                                <button style="padding:12px; border-radius:11px; background-color:#CEB70D; color:white" type="submit" class="btn py-2 px-5 rounded-3 w-40">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Inside your Blade view --}}


</x-dashboard-applicant>
