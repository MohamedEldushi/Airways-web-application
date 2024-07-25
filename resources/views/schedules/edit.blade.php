<x-dashboard-admin>

    <div class="container">
        <h1>Edit Schedule</h1>
        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="flight_id">Flight</label>
                <select name="flight_id" id="flight_id" class="form-control">
                    @foreach($flights as $flight)
                    <option value="{{ $flight->id }}" {{ $schedule->flight_id == $flight->id ? 'selected' : '' }}>
                        {{ $flight->flight_number }} -
                        {{ optional($flight->departureAirport)->city ?? 'N/A' }} to
                        {{ optional($flight->arrivalAirport)->city ?? 'N/A' }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="day_of_week">Day of Week</label>
                <select name="day_of_week" id="day_of_week" class="form-control">
                    <option value="Sunday" {{ $schedule->day_of_week == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                    <option value="Monday" {{ $schedule->day_of_week == 'Monday' ? 'selected' : '' }}>Monday</option>
                    <option value="Tuesday" {{ $schedule->day_of_week == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                    <option value="Wednesday" {{ $schedule->day_of_week == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                    <option value="Thursday" {{ $schedule->day_of_week == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                    <option value="Friday" {{ $schedule->day_of_week == 'Friday' ? 'selected' : '' }}>Friday</option>
                    <option value="Saturday" {{ $schedule->day_of_week == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                </select>
            </div>
            <div class="form-group">
                <label for="departure_time">Departure Time</label>
                <input type="time" name="departure_time" id="departure_time" class="form-control" value="{{ $schedule->departure_time }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Schedule</button>
        </form>
    </div>
</x-dashboard-admin>

