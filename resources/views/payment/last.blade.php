{{-- Display Flight Details --}}
<p>Departure Flight: {{ $departureFlight->flight_number }} from {{ $departureFlight->departureAirport->name }} to {{ $departureFlight->arrivalAirport->name }}</p>
@if($returnFlight)
    <p>Return Flight: {{ $returnFlight->flight_number }} from {{ $returnFlight->departureAirport->name }} to {{ $returnFlight->arrivalAirport->name }}</p>
@endif

{{-- Display Passenger Details --}}
@foreach ($passengers as $passenger)
    <p>Passenger Name: {{ $passenger['title'] }} {{ $passenger['first_name'] }} {{ $passenger['last_name'] }}</p>
    {{-- Include other passenger details --}}
@endforeach

{{-- Display Contact Details --}}
<p>Phone Number: {{ $mobileNumber }}</p>
<p>Email Address: {{ $emailAddress }}</p>

{{-- Display Total Price --}}
<p>Total Price: ${{ number_format($totalPrice, 2) }}</p>
