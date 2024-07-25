<x-dashboard-admin>

    <div class="container">
        <h1>Schedules</h1>
        <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-4">Add Schedule</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Flight</th>
                    <th>Day of Week</th>
                    <th>Departure Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->flight->flight_number }}</td>
                    <td>{{ $schedule->day_of_week }}</td>
                    <td>{{ $schedule->departure_time }}</td>
                    <td>
                        <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-dashboard-admin>
