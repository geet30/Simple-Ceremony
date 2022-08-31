<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Booking\{Methods, Relationship};

class Booking extends Model
{
    use HasFactory, Methods, Relationship;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'locationId', 'booking_date', 'celebrant_id', 'booking_start_time', 'booking_end_time', 'status', 'first_couple_name', 'second_couple_name', 'ceremony_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function location()
    {
        return $this->belongsTo('App\Models\Locations', 'locationId', 'id');
    }
    public function celebrant()
    {
        return $this->belongsTo('App\Models\User', 'celebrant_id', 'id');
    }
<<<<<<< HEAD
=======

>>>>>>> 3c1ee358dbca3e73c2854c8d7d65de368e56a3fa
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
