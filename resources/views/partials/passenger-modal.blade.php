{{-- resources/views/admin/partials/passenger-modal.blade.php --}}
<div class="modal fade" id="passengerModal{{ $passenger->id }}" tabindex="-1" aria-labelledby="passengerModalLabel{{ $passenger->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="passengerModalLabel{{ $passenger->id }}">Passenger Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> {{ $passenger->first_name }} {{ $passenger->last_name }}</p>
                <p><strong>Flight Number:</strong> {{ $passenger->flight->flight_number ?? 'N/A' }}</p>
                {{-- Add more passenger details here --}}
            </div>
        </div>
    </div>
</div>
