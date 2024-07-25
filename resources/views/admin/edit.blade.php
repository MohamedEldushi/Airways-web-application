<x-dashboard-admin>
<style>   body {
    background-color: #f8f9fa;
}
.container {
    padding-top: 20px;
}
.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.card-header {
    /* background-color: #102f50; */
    color: #161313;
    font-size: 24px;
    font-weight: bold;
}
.form-label {
    font-weight: 600;
}
.form-control, .form-select {
    border-radius: 0.375rem;
}
.form-control:focus, .form-select:focus {
    border-color: #4d90fe;
    box-shadow: 0 0 0 0.2rem rgba(77, 144, 254, 0.25);
}
.btn-primary {
    font-size: 18px;
    padding: 10px 30px;
    border-radius: 0.375rem;
    background-color: #0069d9;
    border-color: #0062cc;
}
.btn-primary:hover {
    background-color: #005cbf;
    border-color: #0056b3;
}
.mb-3 {
    margin-bottom: 1rem!important;
}
.text-center {
    text-align: center!important;
}
</style>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header  ">
                    Edit Flight Details
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update', $flight->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="flight_number" class="form-label">Flight Number</label>
                                <input type="text" class="form-control" id="flight_number" name="flight_number" value="{{ $flight->flight_number }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="total_seats" class="form-label">Total Seats</label>
                                <input type="number" class="form-control" id="total_seats" name="total_seats" value="{{ $flight->total_seats }}" required min="1">
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="departure_airport_id" class="form-label">Departure Airport</label>
                                <select class="form-select" id="departure_airport_id" name="departure_airport_id">
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}" {{ $flight->departureAirport->id == $airport->id ? 'selected' : '' }}>{{ $airport->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="arrival_airport_id" class="form-label">Arrival Airport</label>
                                <select class="form-select" id="arrival_airport_id" name="arrival_airport_id">
                                    @foreach($airports as $airport)
                                        <option value="{{ $airport->id }}" {{ $flight->arrivalAirport->id == $airport->id ? 'selected' : '' }}>{{ $airport->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="departure_time" class="form-label">Departure Time</label>
                                <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" value="{{ $flight->departure_time->format('Y-m-d\TH:i') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="arrival_time" class="form-label">Arrival Time</label>
                                <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" value="{{ $flight->arrival_time ? $flight->arrival_time->format('Y-m-d\TH:i') : '' }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price_economy" class="form-label">Economy Price</label>
                                <input type="number" class="form-control" id="price_economy" name="price_economy" value="{{ $flight->price_economy }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="price_business" class="form-label">Business Price</label>
                                <input type="number" class="form-control" id="price_business" name="price_business" value="{{ $flight->price_business }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="scheduled" {{ $flight->status == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                    <option value="cancelled" {{ $flight->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    <option value="delayed" {{ $flight->status == 'delayed' ? 'selected' : '' }}>Delayed</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="days_of_operation">Days of Operation</label>
                                <select id="days_of_operation" name="days_of_operation[]" class="form-control select2-multiple " multiple="multiple">
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                </select>

                            </div>
                        </div>


                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Update Flight</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>











{{--
<form action="{{ route('admin.flights.update', $flight->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Flight Status Field -->
    <div class="form-group">
        <label for="status">Flight Status:</label>
        <select name="status" id="status" class="form-control">
            <option value="On Time" {{ $flight->status == 'On Time' ? 'selected' : '' }}>On Time</option>
            <option value="Delayed" {{ $flight->status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
            <option value="Cancelled" {{ $flight->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Update Status</button>
</form>

 --}}


</x-dashboard-admin>
