<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'day_of_week',
        'departure_time',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
