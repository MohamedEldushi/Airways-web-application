<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tripoliId = DB::table('locations')->where('code', 'TIP')->first()->id;
        $tunisId = DB::table('locations')->where('code', 'TUN')->first()->id;

        DB::table('flights')->insert([
            [
                'flight_number' => 'TK1983',
                'departure_airport_id' => 1, // Replace with actual ID for Istanbul Airport if different
                'arrival_airport_id' => 2, // Replace with actual ID for Heathrow Airport if different
                'departure_time' => '2023-12-01 10:00:00',
                'arrival_time' => '2023-12-01 12:00:00',
                'price_economy' => 300,
                'price_business' => 800,
                'status' => 'Scheduled',
            ],
            [
                'flight_number' => 'LY123',
                'departure_airport_id' => $tripoliId,
                'arrival_airport_id' => $tunisId,
                'departure_time' => '2024-05-01 08:00:00',
                'arrival_time' => '2024-05-01 09:30:00',
                'price_economy' => 150,
                'price_business' => 300,
                'status' => 'Scheduled',
            ],
            [
                'flight_number' => 'LY456',
                'departure_airport_id' => $tunisId,
                'arrival_airport_id' => $tripoliId,
                'departure_time' => '2024-05-06 17:00:00',
                'arrival_time' => '2024-05-06 18:30:00',
                'price_economy' => 150,
                'price_business' => 300,
                'status' => 'Scheduled',
            ],
            // Example of an additional flight
            [
                'flight_number' => 'TK2024',
                'departure_airport_id' => 2, // Assuming this is Heathrow Airport
                'arrival_airport_id' => 1, // Assuming this is Istanbul Airport
                'departure_time' => '2024-01-15 14:00:00',
                'arrival_time' => '2024-01-15 18:00:00',
                'price_economy' => 350,
                'price_business' => 900,
                'status' => 'Scheduled',
            ],
            [
                'flight_number' => 'TU123',
                'departure_airport_id' => $tripoliId,
                'arrival_airport_id' => $tunisId,
                'departure_time' => '2024-02-25 09:00:00',
                'arrival_time' => '2024-02-25 10:30:00',
                'price_economy' => 200,
                'price_business' => 400,
                'status' => 'Scheduled',
            ],
            [
                'flight_number' => 'TU456',
                'departure_airport_id' => $tunisId,
                'arrival_airport_id' => $tripoliId,
                'departure_time' => '2024-02-28 15:00:00',
                'arrival_time' => '2024-02-28 16:30:00',
                'price_economy' => 200,
                'price_business' => 400,
                'status' => 'Scheduled',
            ],
            [
                'flight_number' => 'FL123',
                'departure_airport_id' => 1,
                'arrival_airport_id' => 2,
                'departure_time' => '2024-05-15 08:00:00',
                'arrival_time' => '2024-05-15 10:00:00',
                'price_economy' => 100.00,
                'price_business' => 200.00,
                'status' => 'Scheduled',
                'total_seats' => 150,
                'booked_seats' => 0,
                'days_of_operation' => 'Monday, Wednesday, Friday'
            ],
            [
                'flight_number' => 'FL456',
                'departure_airport_id' => 2,
                'arrival_airport_id' => 1,
                'departure_time' => '2024-05-16 08:00:00',
                'arrival_time' => '2024-05-16 10:00:00',
                'price_economy' => 100.00,
                'price_business' => 200.00,
                'status' => 'Scheduled',
                'total_seats' => 150,
                'booked_seats' => 0,
                'days_of_operation' => 'Tuesday, Thursday, Saturday'
            ],
            [
                'flight_number' => 'FL789',
                'departure_airport_id' => 1,
                'arrival_airport_id' => 2,
                'departure_time' => '2024-05-17 08:00:00',
                'arrival_time' => '2024-05-17 10:00:00',
                'price_economy' => 100.00,
                'price_business' => 200.00,
                'status' => 'Scheduled',
                'total_seats' => 150,
                'booked_seats' => 0,
                'days_of_operation' => 'Sunday'
            ],
            // You can add more flights as needed for comprehensive testing.
        ]);
    }
}
