<x-dashboard-admin>

<style>body {
    background-color: #f8f9fa;
}

.container {
    max-width: 800px;
}



.form-control, .form-select {
    border-radius: 0.375rem;
    border: 1px solid #ced4da;
}

.form-control:focus, .form-select:focus {
    border-color: #184e9a;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

.form-label {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
}

.btn-primary {
    font-size: 1.1rem;
    border-radius: 0.375rem;
    padding: 0.75rem 1rem;
    box-shadow: 0 2px 2px 0 rgba(0, 123, 255, 0.25);
}

.btn-primary:hover {
    background-color: #134d8a;
    border-color: #004495;
}

.alert-danger {
    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
}

.alert ul {
    margin-bottom: 0;
}
</style>
<style>body {
    background-color: #f8f9fa;
}

.container {
    max-width: 800px;
}


.form-control, .form-select {
    border-radius: 0.375rem;
    border: 1px solid #ced4da;
}

.form-control:focus, .form-select:focus {
    border-color: #184e9a;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

.form-label {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #495057;
}

.btn-primary {
    font-size: 1.1rem;
    border-radius: 0.375rem;
    padding: 0.75rem 1rem;
    box-shadow: 0 2px 2px 0 rgba(0, 123, 255, 0.25);
}

.btn-primary:hover {
    background-color: #134d8a;
    border-color: #004495;
}

.alert-danger {
    color: #842029;
    background-color: #f8d7da;
    border-color: #f5c2c7;
}

.alert ul {
    margin-bottom: 0;
}

</style>
<h2 class="card-title mb-4">Add flight</h2>

<div class="container">
    <h2 style=" font-weight: 700;
    color: #333;" class="text-center  mb-4 mt-4">Add New Flight</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route('admin.store') }}" method="POST" class="card p-4 shadow rounded">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label for="flight_number" class="form-label">Flight Number</label>
                <input type="text" class="form-control" id="flight_number" name="flight_number" required>
            </div>
            <div class="col-md-6">
                <label for="total_seats" class="form-label">Total Seats</label>
                <input type="number" class="form-control" id="total_seats" name="total_seats" required min="1">
            </div>
            <div class="col-md-6">
                <label for="departure_airport_id" class="form-label">Departure Airport</label>
                <select class="form-select" id="departure_airport_id" name="departure_airport_id">
                    @foreach($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="arrival_airport_id" class="form-label">Arrival Airport</label>
                <select class="form-select" id="arrival_airport_id" name="arrival_airport_id">
                    @foreach($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="departure_time" class="form-label">Departure Time</label>
                <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" required>
            </div>
            <div class="col-md-6">
                <label for="arrival_time" class="form-label">Arrival Time</label>
                <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" required>
            </div>
            <div class="col-md-6">
                <label for="price_economy" class="form-label">Economy Price</label>
                <input type="number" class="form-control" id="price_economy" name="price_economy" required>
            </div>
            <div class="col-md-6">
                <label for="price_business" class="form-label">Business Price</label>
                <input type="number" class="form-control" id="price_business" name="price_business" required>
            </div>
            <div class="col-md-6">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="scheduled">Scheduled</option>
                    <option value="cancelled">Cancelled</option>
                    <option value="delayed">Delayed</option>
                </select>
            </div>
            {{-- Select multiple days of operation --}}
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
        <button type="submit" class="btn btn-primary mt-4 w-100">Add Flight</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function() {
        try {
            $('.select2-multiple').select2({
                placeholder: "Select days of operation",
                allowClear: true,
                width: '100%'
            });
            console.log("Select2 initialized.");
        } catch (error) {
            console.error("Error initializing Select2: ", error);
        }
    });
    </script>




</x-dashboard-admin>
