<x-home>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Flight Schedules</h2>

        <!-- Filter Form -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="GET" action="{{ route('flight-schedules.index') }}">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <select name="arrival_city" class="form-select" aria-label="Filter by Destination City">
                                <option value="">Select Destination City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city }}" {{ request('arrival_city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button style="background-color: #7cb3e9" type="submit" class="btn text-white w-100">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Schedule Table -->
        <div class="card shadow">
            <div style="background-color: #7cb3e9" class="card-header  ">
                <h4 class="mb-0 text-white ">Flight Schedules</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Flight Number</th>
                                <th>Departure City</th>
                                <th>Arrival City</th>
                                <th>Day of Week</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>{{ $schedule->flight->flight_number }}</td>
                                    <td>{{ optional($schedule->flight->departureAirport)->city ?? 'N/A' }}</td>
                                    <td>{{ optional($schedule->flight->arrivalAirport)->city ?? 'N/A' }}</td>
                                    <td>{{ $schedule->day_of_week }}</td>
                                    <td>{{ $schedule->departure_time }}</td>
                                    <td>{{ $schedule->flight->arrival_time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Optional: Bootstrap 5 CSS (if not already included) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            max-width: 1200px;
        }
        .card-header h4 {
            margin-bottom: 0;
        }
        .table thead th {
            background-color: #f8f9fa;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</x-home>
