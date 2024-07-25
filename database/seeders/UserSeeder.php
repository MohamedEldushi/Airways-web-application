<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        User::create([
            'firstname' => 'Admin',
            'surname' => 'medsky',
            'nationality' => 'CountryName',
            'birthday' => '1990-01-01',
            'gender' => 'Male',
            'country' => 'CountryName',
            'city' => 'CityName',
            'zip_code' => '3949',
            'address' => 'Full Address',
            'email' => 'admin@gmail.com',
            'area_code' => '+1',
            'phone_number' => '1234567890',
            'password' => Hash::make('adminPassword'), // Replace 'adminPassword' with a real password or use env('ADMIN_PASSWORD')
        ]);

        // Assign the 'admin' role to the user after creation if you are using a role management package like Spatie's Laravel Permission.
        // Ensure the role exists before assigning it.
        $adminUser = User::where('email', 'admin@gmail.com')->first();
        if ($adminUser && method_exists($adminUser, 'assignRole')) {
            $adminUser->assignRole('admin');
        }

        //
        // User::create([
        //     'firstname' => 'Admin',
        //     'surname' => 'medsky',
        //     'nationality' => 'CountryName',
        //     'birthday' => '1990-01-01', // Use a specific date format
        //     'gender' => 'Male', // or 'Male' / 'Female'
        //     'country' => 'CountryName',
        //     'city' => 'CityName',
        //     'zip_code' => '3949',
        //     'address' => 'Full Address',
        //     'email' => 'admin@example.com',
        //     'area_code' => '+1', // Example area code
        //     'phone_number' => '1234567890',
        //     'password' => Hash::make(env('ADMIN_PASSWORD')),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ])->assignRole('admin');


    }

}

