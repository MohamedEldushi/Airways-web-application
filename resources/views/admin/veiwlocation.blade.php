<x-dashboard-admin>

    <style>
        /* .table {
            margin-bottom: 0;
            border-radius: 0.25rem;
            overflow: hidden;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        .thead-dark th {
            background-color: #343a40;
            color: #fff;
        }
        .btn-outline-primary, .btn-outline-danger {
            margin-right: 5px;
        }
        .fas {
            margin-right: 5px;
        }
        /* Tooltip styling */
        .tooltip-inner {
            background-color: #212529;
            color: #fff;
        }
        .tooltip.bs-tooltip-top .arrow::before, .tooltip.bs-tooltip-auto[data-popper-placement^=top] .arrow::before {
            border-top-color: #212529;
        } */
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
<h2 class="card-title mb-4">Available locations</h2>

    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Location ID</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Country</th>
                <th scope="col">City</th>
                <th  scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->name }}</td>
                <td>{{ $location->code }}</td>
                <td>{{ $location->country }}</td>
                <td>{{ $location->city }}</td>
                <td>
                    <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>

                    <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteLocationModal{{ $location->id }}" data-bs-placement="top" title="Delete">
                            <i class="fas fa-trash-alt"></i>
                        </button>                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
    </script>

            </x-dashboard-admin>
