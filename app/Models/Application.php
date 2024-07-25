<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'university',
        'major',
        'year'
    ];


    public function applicant () {
        return $this->belongsTo(User::class, 'applicant_id');
    }
}
