<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class FlightStatus extends Model
{
    use HasFactory;


    protected $fillable = [
        'flight_id',
        'status',
        'message',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

}
