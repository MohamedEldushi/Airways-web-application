<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



use App\Models\User;
use App\Models\Booking;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails; // Correct namespace






class AuthController extends Controller
{
    use SendsPasswordResetEmails;
    //
    public function login()
    {

        return view('auth.login');
    }
      public function post_login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('admin')) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home.index');
            }
        } else {
            return redirect()->back()->with('error', "Wrong Email or Password");
        }
    }

    public function register () {
        $nationalities = config('nationalities');
        $countries = config('countries');
        $cities = config('cities');

        return view('auth.register', compact('nationalities', 'countries', 'cities'));
    }
// In AuthController.php

public function showRegister2Form()
{
    return view('auth.register2'); // assuming your Blade file is in the resources/views/auth directory
}

    public function post_register (Request $request) {
        $request->validate(
            [
                // 'name' => 'required',
                // 'email' =>'required|email|unique:users',
                // 'password' => 'required|min:8'
            //    title

            'title' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'nationality' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'area_code' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:8'
            ],);


            $user = User::create([
            'title' => $request->title,
            'firstname' => $request->firstname,
            'surname' => $request->surname,
            'nationality' => $request->nationality,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'country' => $request->country,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'email' => $request->email,
            'area_code' => $request->area_code,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            ]);
            $userRole = Role::firstOrCreate(['name' => $request->firstname]);

            // Assign the 'user' role to the newly registered user
            $user->assignRole($userRole);

            // Log in the user after registration
            Auth::login($user);

        return redirect()->route('auth.login')->with('success', 'Registration successful! You are now logged in.');

        // return redirect()->route('auth.login');

    }
    // In your controller

    public function editProfile()
    {
        $data['user'] = auth()->user();

        // Attempt to fetch countries from cache; if not available, fetch from API and cache the result.
        $data['countries'] = Cache::remember('countries', now()->addDay(), function () {
            $client = new Client();
            $response = $client->request('GET', 'https://restcountries.com/v3.1/all');
            $countries = json_decode($response->getBody()->getContents(), true);

            // Extracting names of the countries
            return array_map(function ($country) {
                return $country['name']['common'];
            }, $countries);
        });

        return view('applicant.edit-profile', $data);
    }


    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());

        return redirect()->route('dashboard.profile')->with('success', 'Profile updated successfully');
    }



    public function editAddress()
    {
        $user = auth()->user();
        return view('applicant.edit-address', compact('user'));
    }

    public function updateAddress(Request $request)
    {
        $user = auth()->user();
        $user->update($request->all());
        return redirect()->route('dashboard.profile')->with('success', 'Address updated successfully.');
    }



    // public function showBookings()
    // {
    //     $user = Auth::user(); // Ensure the user is authenticated

    //     if ($user) {
    //         $bookings = $user->bookings()->with(['departureFlight', 'returnFlight'])->get();
    //         return view('applicant.my-flights', compact('bookings'));
    //     } else {
    //         // Handle cases where the user is not authenticated
    //         return redirect()->route('login')->with('error', 'You must be logged in to view bookings.');
    //     }
    // }



}
