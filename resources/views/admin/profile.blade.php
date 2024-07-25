<x-dashboard-admin>

    <h2>Edit Profile</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="container mt-5 ">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title mb-4">My Profile</h2>
<div class="row">
                <div class="col-md-4 mb-3">
                    <strong>Title:</strong>
                    <span class="text-secondary">{{ $user->title }}</span>
                </div>

                <div class="col-md-4  mb-3">
                    <strong>First Name:</strong>
                    <span class="text-secondary">{{ $user->firstname }}</span>
                </div>

                <div class="col-md-4  mb-3">
                    <strong>Surname:</strong>
                    <span class="text-secondary">{{ $user->surname }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <strong>Email:</strong>
                    <span class="text-secondary">{{ $user->email }}</span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Nationality:</strong>
                    <span class="text-secondary">{{ $user->nationality }}</span>
                </div>

                <div class="col-md-4 mb-3">
                    <strong>Birthday:</strong>
                    <span class="text-secondary">{{$user->birthday}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <strong>Gender:</strong>
                    <span class="text-secondary">{{$user->birthday}}</span>
                </div>
                <!-- Add the rest of the fields in a similar manner -->
                <div class="col-md-4 mb-3">
                    <strong>City:</strong>
                    <span class="text-secondary">{{ $user->city }}</span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Zip Code:</strong>
                    <span class="text-secondary">{{ $user->zip_code }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <strong>Address:</strong>
                    <span class="text-secondary">{{ $user->address }}</span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Area Code:</strong>
                    <span class="text-secondary"> {{ $user->area_code }}</span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Phone Number:</strong>
                    <span class="text-secondary">{{ $user->phone_number }}</span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Country:</strong>
                    <span class="text-secondary">{{ $user->gender }}</span>
                </div>
            </div>
                <!-- ... other fields ... -->

                <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary mt-4 w-100">Edit Profile</a>
            </div>
        </div>
    </div>








</x-dashboard-admin>
