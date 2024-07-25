<x-status>

    <div class="containers mt-5">

<!-- Main Container -->
<div class="containera mb-5">
    <!-- Page Title -->
    <div class="flight-status-header text-center my-5 ">
        <h1 class="flight-status-title ">Flight Status</h1>
        @if(session('status'))
            <div class="alert alert-info mt-4">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <!-- Flight Status Display -->
    @if($flights->isEmpty())
        <div class="text-center no-flights-found">
            No flights found for the specified criteria.
        </div>
    @else
        <div class="flight-status-table-wrapper">
            <table class="flight-status-table">
                <thead>
                    <tr>
                        <th>Flight Number</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->flight_number }}</td>
                            <td>{{ $flight->departureAirport->name }}</td>
                            <td>{{ $flight->arrivalAirport->name }}</td>
                            <td>{{ $flight->departure_time->format('d M Y H:i') }}</td>
                            <td>{{ $flight->arrival_time->format('d M Y H:i') }}</td>
                            <td class="flight-status {{ strtolower($flight->status) }}">{{ $flight->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</div>

<style>
.containers{

    margin-bottom: 220px;
    /* Ensures the table rounds at the container's corners */
}
.containera {
    max-width: 1000px;
    margin: auto;
    margin-top: 150px;




}

.flight-status-header {
    margin-bottom: 50px;
}

.flight-status-title {
    font-size: 2.5rem;
    color: #333;
    font-weight: 600;
}

.alert {
    font-size: 1rem;
    font-weight: 400;
}

.no-flights-found {
    font-size: 1.2rem;
    color: #666;
    margin-top: 50px;
}

.flight-status-table-wrapper {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    overflow: hidden;
}

.flight-status-table {
    width: 100%;
    border-collapse: collapse;
    margin: 0;
}

.flight-status-table thead {
    background: #004085;
    color: #fff;
}

.flight-status-table th,
.flight-status-table td {
    text-align: left;
    padding: 12px 15px;
}

.flight-status-table tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}

.flight-status-table tbody tr:hover {
    background-color: #eaeaea;
}

.flight-status.on-time {
    color: #28a745;
}

.flight-status.delayed {
    color: #dc3545;
}
.flight-status.cancelled {
    color: #dc3545;
}
.flight-status.in-flight {
    color: #17a2b8;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    .flight-status-header {
        margin-bottom: 30px;
    }

    .flight-status-title {
        font-size: 2rem;
    }

    .no-flights-found {
        font-size: 1rem;
    }

    .flight-status-table th,
    .flight-status-table td {
        padding: 8px 10px;
        font-size: 0.9rem;
    }
}
</style>

{{-- <div class="container my-5 col-md-9 mb-5">
    <h1 class="text-center mb-4">Flight Status</h1>

    @if(session('status'))
        <div class="alert alert-info text-center">
            {{ session('status') }}
        </div>
    @endif

    @if($flights->isEmpty())
        <p class="text-center">No flights found for the specified criteria.</p>
    @else
        <div class="table-responsive py-3 ">
            <table class="table align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Flight Number</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Arrival</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->flight_number }}</td>
                            <td>{{ $flight->departureAirport->name }}</td>
                            <td>{{ $flight->arrivalAirport->name }}</td>
                            <td>{{ $flight->departure_time->format('d M Y H:i') }}</td>
                            <td>{{ $flight->arrival_time->format('d M Y H:i') }}</td>
                            <td class="{{ $flight->status == 'Delayed' ? 'text-danger' : ($flight->status == 'On Time' ? 'text-success' : '') }}">
                                {{ $flight->status }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
<style>.container {
    background-color:#262d61; /* Or any color that fits your design */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    margin-bottom: 1000px;
 /* Ensures the table rounds at the container's corners */
}

h1 {
    color: #ffffff;
    font-size: 2rem;
    font-weight: bold;
    margin-top: 10rem; /* Adjusted for better spacing */
    padding-top: 40px
}

.alert {
    border-radius: 0.375rem;
}

.table {
    margin-bottom: 10px; /* Remove default margin-bottom */

}

.table thead th {
    background-color: #f8f9fa; /* Light background for the header */
    color: #495057; /* Dark color for text */
    border-bottom: 2px solid #e9e9e9; /* Solid line for a clean separation */
}

.table tbody td {
    color: #495057; /* Dark color for text */
    border-bottom: 1px solid #dee2e6; /* Light line for separation between rows */
}

.text-danger {
    color: #dc3545; /* Bootstrap's default danger color */
}

.text-success {
    color: #28a745; /* Bootstrap's default success color */
}

.text-center {
    text-align: center;
}

@media (max-width: 768px) {
    /* Responsive design adjustments */
    .container {
        padding: 1rem; /* Smaller padding on smaller screens */
    }

    .table-responsive {
        margin-bottom: 1rem; /* Spacing after the table on smaller screens */
    }

    h1 {
        font-size: 1.5rem; /* Smaller heading on smaller screens */
    }
}
</style>


 --}}










    {{-- foooter --}}



</x-status>
