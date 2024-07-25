<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'country', 'city'
    ];

 // Airport has many departing flights
 public function departingFlights()
 {
     return $this->hasMany(Flight::class, 'departure_airport_id');
 }

 // Airport has many arriving flights
 public function arrivingFlights()
 {
     return $this->hasMany(Flight::class, 'arrival_airport_id');
 }
}
