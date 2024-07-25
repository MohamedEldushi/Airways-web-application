

<x-dashboard-admin>


{{--
 @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif




    <h1>Flights</h1>




    @foreach ($flights as $flight)
    <tr>
        <td>{{ $flight->flight_number }}</td>
        <td>{{ $flight->status }}</td>
        <td>
<a href="{{ route('admin.flights.edit', $flight->id) }}" class="btn btn-primary">Edit</a>
        </td>
    </tr>
@endforeach --}}
{{-- success massage --}}
{{-- @if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Flights Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/svg-with-js.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/v4-shims.min.css">


    <style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,.1);
    }
    .btn-outline-secondary {
        transition: all .2s ease-in-out;
    }
    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
    }
    .table {
        margin-top: 20px;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
    .table-dark {
        background-color: #343a40;
        color: #fff;
    }
    .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }
    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: none;
    }
</style>
</head> --}}
{{-- <body>

<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h2>Flights Management</h2>
        <div>
            <!-- Admin Profile Section -->
            <a href="#" class="btn btn-outline-secondary">Admin Profile</a>
        </div>
    </div>
    <div class="my-3">
        <a href="{{ route('admin.create') }}" class="btn btn-success mb-2 me-2">Add New Flight</a>
        <a href="{{ route('locations.create') }}" class="btn btn-primary mb-2 me-2">Add Location</a>
        <a href="{{ route('admin.reports') }}" class="btn btn-info mb-2 me-2" role="button">View Booking Reports</a>
        <a href="{{ route('admin.flight-passengers') }}" class="btn btn-primary mb-2">View Flight Passengers</a>
    </div>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Flight Number</th>
                <th>From</th>
                <th>To</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
            <tr>
                <td>{{ $flight->flight_number }}</td>
                <td>{{ $flight->departureAirport->name }}</td>
                <td>{{ $flight->arrivalAirport->name }}</td>
                <td>{{ $flight->departure_time }}</td>
                <td>{{ $flight->arrival_time }}</td>
                <td>{{ $flight->status }}</td>
                <td>
                    <a href="{{ route('admin.edit', $flight->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.destroy', $flight->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}





            <!-- Main content here -->
                {{-- <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">Add New Flight</a> --}}

                <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<style>
    .table-container {
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    .table {
        margin-bottom: 0; /* Remove default margin for seamless integration with collapse detail */
    }
    .status-badge {
        display: inline-block;
        padding: 0.25em 0.6em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.375rem;
    }
    .status-scheduled { background-color: #28a745; color: white; }
    .status-cancelled { background-color: #dc3545; color: white; }
    .status-delayed { background-color: #ffc107; color: black; }
    .action-dropdown .dropdown-toggle {
        color: #495057;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
    }
    .action-dropdown .dropdown-menu {
        min-width: 4rem; /* Ensure consistent width for action dropdown */
    }
    .dropdown-menu a:hover {
        background-color: #f8f9fa; /* Subtle hover effect for dropdown items */
    }
    .table-hover tbody tr:hover {
        background-color: #f5f5f5;
    }
    .table-responsive {
        border-radius: 0.5rem;
        overflow: hidden; /* Ensures rounded corners for both table and shadow */
    }
</style>

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
<h2 class="card-title mb-4">Available flights</h2>
<!-- Assuming you're using Bootstrap 5 -->
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Flight Number</th>
                <th>From</th>
                <th>To</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Total Seats</th>  <!-- New Header -->
                <th>Booked Seats</th> <!-- New Header -->
                <th>Available Seats</th> <!-- New Header -->
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
            <tr>
                <td>{{ $flight->flight_number }}</td>
                <td>{{ $flight->departureAirport->name }}</td>
                <td>{{ $flight->arrivalAirport->name }}</td>
                <td>{{ $flight->departure_time->format('Y-m-d H:i') }}</td>
                <td>{{ $flight->arrival_time->format('Y-m-d H:i') }}</td>
                <td>{{ $flight->total_seats }}</td> <!-- Display total seats -->
                <td>{{ $flight->booked_seats }}</td> <!-- Display booked seats -->
                <td>{{ $flight->remainingSeats() }}</td> <!-- Display remaining seats -->
                <td>
                    <span class="status-badge status-{{ strtolower($flight->status) }}">
                        {{ ucfirst($flight->status) }}
                    </span>
                </td>
                <td>
                    <div class="d-inline-flex align-items-center">
                        <a href="{{ route('admin.edit', $flight->id) }}" class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.destroy', $flight->id) }}" method="POST" style="margin-bottom: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $flight->id }}" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script>
document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
});
</script>


                <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>




</x-dashboard-admin>
