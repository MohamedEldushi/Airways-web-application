
<x-dashboard-admin>


<style>

    .form-container {
        background-color: #ffffff;
        max-width: 500px;
        margin: 40px auto;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
        font-weight: 600;
        margin-bottom: 20px;
        text-align: center;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-label {
        display: block;
        color: #555;
        margin-bottom: .5rem;
        font-weight: 600;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #0056b3;
        border-color: #004085;
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
<h2 class="card-title mb-4">Add location</h2>

<div class="form-container">
    <h1>Add Location</h1>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Airport name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter location name" required>
        </div>
        <div class="form-group">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Enter location code" required>
        </div>
        <div class="form-group">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Enter country name" required>
        </div>
        <div class="form-group">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Location</button>
    </form>
</div>
<!-- resources/views/locations/index.blade.php -->




</x-dashboard-admin>
