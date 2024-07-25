<x-dashboard-applicant>
 @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- <table class="table my-5">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Date Submitted</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->created_at }}</td>
                    @if ($application->status == 'pending')
                        <td class="text-warning">Pending</td>
                    @elseif ($application->status == 'accepted')
                        <td class="text-success">Accepted</td>
                    @else
                        <td class="text-danger">Rejected</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table> --}}


</x-dashboard-applicant>
