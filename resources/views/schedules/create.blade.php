<x-dashboard-admin>

    <div class="container mt-4">
        <h2>Add Flight Schedule</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="flight_id" class="form-label">Select Flight</label>
                <select id="flight_id" name="flight_id" class="form-control" required>
                    <option value="">Select a flight</option>
                    @foreach($flights as $flight)
                        <option value="{{ $flight->id }}">
                            {{ $flight->flight_number }} -
                            {{ optional($flight->departureAirport)->city ?? 'N/A' }} to
                            {{ optional($flight->arrivalAirport)->city ?? 'N/A' }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="day_of_week" class="form-label">Day of Week</label>
                <select id="day_of_week" name="day_of_week" class="form-control" required>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="departure_time" class="form-label">Departure Time</label>
                <input type="time" id="departure_time" name="departure_time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Schedule</button>
        </form>
    </div>
</x-dashboard-admin>
