<?php
namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [



        'flight_number',
        'departure_airport_id',
        'arrival_airport_id',



        // 'from_location_id',
        // 'to_location_id',
        'departure_time',
        // 'return_time',

        'arrival_time',
        'price_economy',
        'price_business',
        'status',
        'total_seats',
        'booked_seats',
        'days_of_operation'


        //  'passenger_class',
        //   'one_way',
        //   'price_economy' => 'float',
        // 'price_business' => 'float','status',
    ];
    public function remainingSeats()
    {
        return $this->total_seats - $this->booked_seats;
    }


    protected $casts = [
        'departure_time' => 'datetime', // Ensures departure_time is treated as a Carbon instance
    'return_time' => 'datetime', // Ensures return_time is treated as a Carbon instance
    'arrival_time' => 'datetime',
    'price_economy' => 'float',
    'price_business' => 'float',
];
protected static function boot()
{
    parent::boot();

    static::updated(function ($flight) {
        event(new \App\Events\FlightUpdated($flight));
    });
}

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function departureAirport()
    {
        return $this->belongsTo(Location::class, 'departure_airport_id');
    }
    public function departureBookings()
    {
        // Relationship for bookings where this flight is the departure flight
        return $this->hasMany(Booking::class, 'departure_flight_id');
    }// Add this method to your Flight model

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }



    public function returnBookings()
    {
        // Relationship for bookings where this flight is the return flight
        return $this->hasMany(Booking::class, 'return_flight_id');
    }

    public function arrivalAirport()
    {
        return $this->belongsTo(Location::class, 'arrival_airport_id');
    }
    public function bookingAsReturn()
    {
        return $this->hasOne(Booking::class, 'return_flight_id');
    }
    // Add any additional relationships or methods below this comment

    public function flightDuration()
    {
        // Assuming 'departure_time' and 'arrival_time' are columns in your flights table
        $departure = Carbon::parse($this->departure_time);
        $arrival = Carbon::parse($this->arrival_time);

        // Calculate the duration
        $duration = $departure->diff($arrival);

        // Format and return the duration as a string, e.g., "2 hours 15 minutes"
        return $duration->format('%h hours %i minutes');
    }
    public function getPriceAttribute()
{
    // Example: return the economy price by default
    return $this->price_economy;
}

}



