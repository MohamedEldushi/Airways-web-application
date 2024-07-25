<x-dashboard-admin>
    <h2 class="card-title mb-4">Edit flight</h2>

<div class="container">
    <h2>Edit Profile</h2>

    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Title, Firstname, Surname -->
            <div class="col-md-4 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $user->title) }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname', $user->firstname) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $user->surname) }}" required>
            </div>
        </div>

        <div class="row">
            <!-- Email, Nationality, Birthday -->
            <div class="col-md-4 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality', $user->nationality) }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday ?? '') }}">
            </div>
        </div>

        <!-- More input fields grouped as needed... -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            {{-- Country --}}
            <div class="col-md-4 mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $user->country) }}">
            </div>

            {{-- City --}}
            <div class="col-md-4 mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $user->city) }}">
            </div>
        </div>
        <div class="row">
            {{-- Zip Code --}}
        <div class="col-md-4 mb-3">
            <label for="zip_code" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code', $user->zip_code) }}">
        </div>

        {{-- Address --}}
        <div class="col-md-4 mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}">
        </div>

        {{-- Area Code --}}
        <div class="col-md-4 mb-3">
            <label for="area_code" class="form-label">Area Code</label>
            <input type="text" class="form-control" id="area_code" name="area_code" value="{{ old('area_code', $user->area_code) }}">
        </div>
        </div>
        {{-- Phone Number --}}
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
        </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>
</x-dashboard-admin>
