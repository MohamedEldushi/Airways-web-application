<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//database/seeders/LocationSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LocationSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'Tripoli International Airport', 'city' => 'Tripoli', 'country' => 'Libya', 'code' => 'TIP'],
            ['name' => 'Tunis-Carthage International Airport', 'city' => 'Tunis', 'country' => 'Tunisia', 'code' => 'TUN'],

            ['name' => 'Istanbul Airport', 'city' => 'Istanbul', 'country' => 'Turkey', 'code' => 'IST'],
            ['name' => 'Heathrow Airport', 'city' => 'London', 'country' => 'UK', 'code' => 'LHR'],

            ['name' => 'John F. Kennedy International Airport', 'city' => 'New York', 'country' => 'USA', 'code' => 'JFK'],
            ['name' => 'Los Angeles International Airport', 'city' => 'Los Angeles', 'country' => 'USA', 'code' => 'LAX'],
            ['name' => 'Hartsfield-Jackson Atlanta International Airport', 'city' => 'Atlanta', 'country' => 'USA', 'code' => 'ATL'],
            ['name' => 'O\'Hare International Airport', 'city' => 'Chicago', 'country' => 'USA', 'code' => 'ORD'],
            ['name' => 'London Heathrow Airport', 'city' => 'London', 'country' => 'UK', 'code' => 'LHR'],
            ['name' => 'Shanghai Pudong International Airport', 'city' => 'Shanghai', 'country' => 'China', 'code' => 'PVG'],
            ['name' => 'Charles de Gaulle Airport', 'city' => 'Paris', 'country' => 'France', 'code' => 'CDG'],
            ['name' => 'Frankfurt Airport', 'city' => 'Frankfurt', 'country' => 'Germany', 'code' => 'FRA'],
            ['name' => 'Amsterdam Airport Schiphol', 'city' => 'Amsterdam', 'country' => 'Netherlands', 'code' => 'AMS'],
            ['name' => 'Dubai International Airport', 'city' => 'Dubai', 'country' => 'UAE', 'code' => 'DXB'],
            ['name' => 'Singapore Changi Airport', 'city' => 'Singapore', 'country' => 'Singapore', 'code' => 'SIN'],
            ['name' => 'Sydney Kingsford Smith Airport', 'city' => 'Sydney', 'country' => 'Australia', 'code' => 'SYD'],
            ['name' => 'Narita International Airport', 'city' => 'Tokyo', 'country' => 'Japan', 'code' => 'NRT'],
            ['name' => 'Incheon International Airport', 'city' => 'Seoul', 'country' => 'South Korea', 'code' => 'ICN'],
            ['name' => 'Suvarnabhumi Airport', 'city' => 'Bangkok', 'country' => 'Thailand', 'code' => 'BKK'],
            ['name' => 'Kuala Lumpur International Airport', 'city' => 'Kuala Lumpur', 'country' => 'Malaysia', 'code' => 'KUL'],


            // Add more airports as needed
        ]);
    }
}
