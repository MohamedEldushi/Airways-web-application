<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookings Report</title>
    <!-- Include any required styles -->
</head>
<body>
    <h1>Bookings Report</h1>
    <table>
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>User ID</th>
                {{-- departure flight number --}}
                <th>Departure flight </th>
                <th>Return flight </th>



                <th>Status</th>
                <th>Payment Status</th>
                <th>Booking Date</th>
                <!-- ... More headers if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->user_id }}</td>
                <td>{{ $booking->departureFlight ? $booking->departureFlight->flight_number : 'N/A' }}</td>
                <td>{{ $booking->returnFlight ? $booking->returnFlight->flight_number : 'N/A' }}</td>

                <td>{{ $booking->status }}</td>
                <td>{{ $booking->payment_status }}</td>
                <td>{{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d H:i:s') }}</td>
                <!-- ... More data cells if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
