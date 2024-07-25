<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FlightNotification extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'phone_number', 'flight_id', 'notification_type'];

    // Add any necessary relationships, for example:
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
