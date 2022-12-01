<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrantDaySlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'celebrant_date_id',
        'day',
        'dayText',
        'start_time',
        'end_time',
        'booking_length',
        'your_fee',
        'admin_fee',
        'location_id',
        'location_fee',
        'type'
    ];
    
    public function dates()
    {
        return $this->belongsTo(CelebrantDate::class,'celebrant_date_id');
    }
    public function location()
    {
        return $this->belongsTo(Locations::class);
    }
}
