<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Doctor extends Authenticatable
{
    use HasFactory;
    // protected $with = ['major'];     لو محتاج اجبهم في سلكتايه واحده
    protected $fillable = [
        'name', 'city', 'email', 'password', 'image', 'major_id'
    ];

    function major()
    {
        return $this->belongsTo(Major::class);
    }
    function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
