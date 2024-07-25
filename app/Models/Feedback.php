<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{   use HasFactory;
    protected $table = 'feedbacks'; // Ensure this matches your database table name

    protected $fillable = ['user_id', 'booking_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
