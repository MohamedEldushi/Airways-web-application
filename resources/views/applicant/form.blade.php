    <x-dashboard-applicant>
        <div class="row justify-content-center mt-5 mx-auto ">
            <div class="col-md-10 mt-5 p-5">
        <div class="form-group">
            @error ('university')
                <div class="  alert alert-danger">{{ $message }}</div>
            @enderror
            @error ('major')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error ('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <form class="p-4 p-md-5 m-4 border rounded-3 bg-body-tertiary" action="{{ route('dashboard.post-application') }}" method="POST">
                @csrf
                <h3 class="mx-auto col-lg-2 col-md-1 col-sm-1 mb-4">Apply now</h3>


                    <label class="fw-bold fs-5 mx-1" for="university">University</label>
                    <input type="text" name="university"id="university" class="form-control p-3 mt-3 mb-3 "placeholder="University">


                    <label class="fw-bold fs-5 mx-1" for="major">Major</label>
                    <input type="text" name="major" id="major" class="form-control p-3 mt-3 mb-3" placeholder="Major">


                    <label class="fw-bold fs-5 mx-1" for="year">Year</label>
                    <input type="text" name="year" id="year" class="form-control p-3 mt-3 mb-3" placeholder="Year">






                <button type="submit" class="w-100 p-3  btn btn-primary">Submit</button>
            </form>
        </div>
        </div>


    </x-dashboard-applicant>
