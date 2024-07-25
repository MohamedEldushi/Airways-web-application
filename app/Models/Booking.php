<?php

// Booking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;


class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'departure_flight_id',
        'return_flight_id',
        'departure_class',
        'return_class',
        'departure_price',
        'return_price',
        'status',
        'payment_status',
        'booking_date',
        'email',
        'country_code',
        'phone_number',
        'additional_baggage',
        'seat_selection',
        'booking_reference', // Make sure this line is present





    ];



    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function returnFlight()
    {
        return $this->belongsTo(Flight::class, 'return_flight_id');
    }
    public function departureFlight()
    {
        return $this->belongsTo(Flight::class, 'departure_flight_id');
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}

