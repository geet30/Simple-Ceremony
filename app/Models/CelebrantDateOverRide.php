<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrantDateOverRide extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_available',
        'override_date_start',
        'override_date_end',
        'override_date',
        'day',
        'dayText',
        'start_time',
        'end_time',
        'booking_length',
        'your_fee',
        'admin_fee',
        'location_id',
        'location_fee'
    ];
    public function location()
    {
        return $this->belongsTo(Locations::class);
    }
}
