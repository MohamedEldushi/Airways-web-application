<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'booking_id',
        'title',
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'nationality',
        'passport_number',
        'passport_expiry_date',
        'email', // Ensure this is fillable
        'phone_number', // Ensure this is fillable
        // Include other fields as necessary

    ];
    protected $casts = [
        'birth_date' => 'date',
    ];
    // Define relationships
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}

