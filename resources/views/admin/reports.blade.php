{{-- resources/views/admin/reports.blade.php --}}
<x-dashboard-admin>



<style>/* Body and background */
    body {
        background-color: #f4f7fa;
        font-family: 'Open Sans', sans-serif;
    }

    /* Heading */
    h1.font-weight-bold {
        font-size: 2.5rem;
    }

    /* Button styles */
    .btn-outline-info {
        border-color: #17a2b8;
        color: #17a2b8;
    }
    .btn-outline-info:hover {
        background-color: #17a2b8;
        color: #fff;
    }

    /* Card styles */
    .card {
        border-radius: 0.5rem;
        overflow: hidden; /* Ensures no overflow from the child elements */
    }

    /* Table styles */
    .table-hover tbody tr:hover {
        background-color: #f4f7fa; /* Subtle hover effect */
    }

    /* Table header */
    thead.bg-primary {
        background-color: #007bff;
    }

    /* Additional Media Queries for responsiveness */
    @media (max-width: 768px) {
        .mb-4 {
            margin-bottom: 1.5rem!important;
        }
    }

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
<h2 class="card-title mb-4">Report</h2>

<div class="container py-5">
    <!-- Main Heading -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="font-weight-bold text-primary">Flight Booking Reports</h1>
        <!-- Export Buttons -->
    <!-- Export Buttons -->
    <div>
        <a href="{{ route('admin.reports.export.csv') }}" class="btn btn-outline-info me-2">Export CSV</a>
        <a href="{{ route('admin.reports.export.pdf') }}" class="btn btn-outline-info">Export PDF</a>
    </div>


    </div>

    <!-- Card for Table -->
    <div class="card border-0 shadow">
        <div class="card-body p-0">
            <!-- Booking Data Table -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Status</th>
                            <th>Total Bookings</th>
                            <th>Revenue</th>
                            <!-- Add other columns as necessary -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through booking data -->
                        @foreach($bookingsData as $data)
                            <tr>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->total }}</td>
                                <td>${{ number_format($data->revenue, 2) }}</td>
                                <!-- Output other data points here -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- Custom Scripts -->
<script>
    // Scripts for charts or additional features
</script>
@endpush


</x-dashboard-admin>
