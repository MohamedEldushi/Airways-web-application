<!-- admin/feedbacks/index.blade.php -->
<x-dashboard-admin>

<style>.container {
    max-width: 800px;
    margin: auto;
}
.list-group-item {
    background-color: #f8f9fa; /* light grey background */
    border: 1px solid #ccc; /* subtle borders */
    border-radius: 5px; /* rounded corners */
    margin-bottom: 10px; /* space between items */
}
.list-group-item h5 {
    color: #007bff; /* Bootstrap primary color for names */
}
.list-group-item small {
    color: #6c757d; /* Bootstrap secondary text color */
}
h2{
    color: #0d447f;



}
</style>

    {{-- <div class="container mt-4">
        <h2>Feedbacks</h2>
        <div class="list-group ">
            @foreach ($feedbacks as $feedback)
                <div class="list-group-item list-group-item-action flex-column align-items-start shadow-sm">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $feedback->user->firstname }} {{ $feedback->user->surname }}</h5>
                        <small>{{ $feedback->created_at->format('d M Y') }}</small> <!-- Format date as you like -->
                    </div>
                    <p class="mb-1">{{ $feedback->content }}</p>
                    <small>Email: {{ $feedback->user->email }}</small>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container mt-4">
        <div class="row">
            <!-- General Feedbacks Column -->
            <div class="col-md-6">
                <h2>General Feedbacks</h2>
                <div class="list-group mb-5">
                    @foreach ($generalFeedbacks as $feedback)
                        <div class="list-group-item list-group-item-action flex-column align-items-start shadow-sm">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $feedback->user->firstname }} {{ $feedback->user->surname }}</h5>
                                <small>{{ $feedback->created_at->format('d M Y') }}</small>
                            </div>
                            <p class="mb-1">{{ $feedback->content }}</p>
                            <small>Email: {{ $feedback->user->email }}</small>
                            <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Ticket Feedbacks Column -->
            <div class="col-md-6">
                <h2>Ticket Feedbacks</h2>
                <div class="list-group">
                    @foreach ($ticketFeedbacks as $feedback)
                        <div class="list-group-item list-group-item-action flex-column align-items-start shadow-sm">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $feedback->user->firstname }} {{ $feedback->user->surname }}</h5>
                                <small>{{ $feedback->created_at->format('d M Y') }}</small>
                            </div>
                            <p class="mb-1"><strong>Flight:</strong> {{ $feedback->booking->departureFlight->flight_number }}</p>
                            <p class="mb-1"><strong>From:</strong> {{ optional($feedback->booking->departureFlight->departureAirport)->city ?? 'N/A' }} to {{ optional($feedback->booking->departureFlight->arrivalAirport)->city ?? 'N/A' }}</p>
                            <p class="mb-1"><strong>Departure:</strong> {{ $feedback->booking->departureFlight->departure_time ? $feedback->booking->departureFlight->departure_time->format('D, d M Y H:i') : 'N/A' }}</p>
                            <p class="mb-1">{{ $feedback->content }}</p>
                            <small>Email: {{ $feedback->user->email }}</small>
                            <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</x-dashboard-admin>
