<x-dashboard-admin>


<style>.form-container {
    background-color: #ffffff;
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}
.card-header {
    background-color: #102f50;
    color: #ffffff;
    font-size: 24px;
    font-weight: bold;
}</style>

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
<h2 class="card-title mb-4">Edit location</h2>

<div class="form-container shadow mt-5">
    <h2 style="    color: #161313;
    font-size: 24px;
    font-weight: bold;">Edit Location</h2>
    <form action="{{ route('locations.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Laravel requires PUT/PATCH for update operations --}}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}" required>
        </div>

        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $location->code }}" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $location->country }}" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $location->city }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Location</button>
    </form>
</div>

</x-dashboard-admin>
