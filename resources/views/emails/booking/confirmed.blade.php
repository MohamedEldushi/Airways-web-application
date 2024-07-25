 {{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
{{-- resources/views/emails/booking/confirmed.blade.php --}}
{{-- @component('mail::message')
# Booking Confirmation

Your booking has been successfully confirmed.

@component('mail::button', ['url' => ''])
View Booking
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}




{{-- resources/views/emails/booking/confirmed.blade.php --}}
{{-- <div class="container">
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <a href="{{ url('/') }}" class="btn btn-primary">Go Home</a>
</div> --}}
{{-- @component('mail::message')
--}}
{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>

@component('mail::message')
# Booking Confirmation

Thank you for booking with us. Here are the details of your ticket:

@component('mail::table')
| Booking ID    | {{ $booking->id }} |
| Booking reference    | {{$booking->booking_reference}} |
|:------------- |:-------------------|
| **From**      | {{ $booking->departureFlight->departureAirport->name }} ({{ $booking->departureFlight->departureAirport->code }}) |
| **To**        | {{ $booking->departureFlight->arrivalAirport->name }} ({{ $booking->departureFlight->arrivalAirport->code }}) |
| **Departure** | {{ $booking->departureFlight->departure_time->format('d M Y, H:i') }} |
| **Arrival** | {{ $booking->departureFlight->arrival_time->format('d M Y, H:i') }} |
| **Departure Class**       | {{ $booking->departure_class }} |
| **Departure price** | ${{ $booking->departure_price }} |
@if($booking->returnFlight)
| **Return From** | {{ $booking->returnFlight->departureAirport->name }} ({{ $booking->returnFlight->departureAirport->code }}) |
| **Return To**   | {{ $booking->returnFlight->arrivalAirport->name }} ({{ $booking->returnFlight->arrivalAirport->code }}) |
| **Return**      | {{ $booking->returnFlight->departure_time->format('d M Y, H:i') }} |
| **Return Class**       | {{ $booking->return_class }} |
| **Return price** | ${{ $booking->return_price }} |
@endif
| **Class**       | {{ $booking->departure_class }} |
| **Total Price** | ${{ $totalPrice }} |
@endcomponent
@php $passengerCount = 0; @endphp

@component('mail::table')
| Passenger | Title | First Name | Last Name | Gender | Passport Number | Birth Date |
|:---------:|:-----:|:----------:|:---------:|:------:|:---------------:|:----------:|
@foreach($booking->passengers as $passenger)
    @php $passengerCount++; @endphp
    | {{ $passengerCount }} | {{ $passenger->title }} | {{ $passenger->first_name }} | {{ $passenger->last_name }} | {{ $passenger->gender }} | {{ $passenger->passport_number }} | {{ $passenger->birth_date->format('Y-m-d') }} |
@endforeach
@endcomponent



@component('mail::button', ['url' => url('/bookings/' . $booking->id)])
View Booking
@endcomponent

If you have any questions or need further assistance, please do not hesitate to contact us.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #0046ad;
            color: #ffffff;
            padding: 10px 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
        }
        h1 {
            color: #0046ad;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .button {
            display: block;
            width: max-content;
            background-color: #22b14c;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px auto 0;
        }
        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 class="text-center">Booking Confirmation</h2>
        </div>
        <div class="content">
            <p>Thank you for booking with us. Here are the details of your ticket:</p>
            <!-- Booking Details Here -->

        <table>
            <tr><th>Booking ID</th><td>{{ $booking->id }}</td></tr>
            <tr><th>Booking Reference</th><td>{{$booking->booking_reference}}</td></tr>
            <tr><th>From</th><td>{{ $booking->departureFlight->departureAirport->name }} ({{ $booking->departureFlight->departureAirport->code }})</td></tr>
            <tr><th>To</th><td>{{ $booking->departureFlight->arrivalAirport->name }} ({{ $booking->departureFlight->arrivalAirport->code }})</td></tr>
            <tr><th>Departure</th><td>{{ $booking->departureFlight->departure_time->format('d M Y, H:i') }}</td></tr>
            <tr><th>Arrival</th><td>{{ $booking->departureFlight->arrival_time->format('d M Y, H:i') }}</td></tr>
            <tr><th>Departure Class</th><td>{{ $booking->departure_class }}</td></tr>
            <tr><th>Departure Price</th><td>${{ $booking->departure_price }}</td></tr>
            <!-- Return Flight Details -->
@if($booking->returnFlight)

    <tr>
        <th>Return From</th>
        <td>{{ $booking->returnFlight->departureAirport->name }} ({{ $booking->returnFlight->departureAirport->code }})</td>
    </tr>
    <tr>
        <th>Return To</th>
        <td>{{ $booking->returnFlight->arrivalAirport->name }} ({{ $booking->returnFlight->arrivalAirport->code }})</td>
    </tr>
    <tr>
        <th>Return Departure</th>
        <td>{{ $booking->returnFlight->departure_time->format('d M Y, H:i') }}</td>
    </tr>
    <tr>
        <th>Return Arrival</th>
        <td>{{ $booking->returnFlight->arrival_time->format('d M Y, H:i') }}</td>
    </tr>
    <tr>
        <th>Return Class</th>
        <td>{{ $booking->return_class }}</td>
    </tr>
    <tr>
        <th>Return Price</th>
        <td>${{ $booking->return_price }}</td>
    </tr>
@endif

            <!-- Include Return details if available -->
            <tr><th>Total Price</th><td>${{ $totalPrice }}</td></tr>
        </table>

        <table>
            <tr>
                <th>Passenger</th>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Passport Number</th>
                <th>Birth Date</th>
            </tr>
            @foreach($booking->passengers as $index => $passenger)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $passenger->title }}</td>
                <td>{{ $passenger->first_name }}</td>
                <td>{{ $passenger->last_name }}</td>
                <td>{{ $passenger->gender }}</td>
                <td>{{ $passenger->passport_number }}</td>
                <td>{{ $passenger->birth_date->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </table>

        <a href="{{url( '/' . $booking->id) }}" class="button">View Booking</a>
        <div class="footer">
            If you have any questions or need further assistance, please do not hesitate to contact us.<br>
            Thanks,<br>
            {{ config('app.name') }}
        </div>
    </div>
</body>
</html>
