<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationKeyAdvantages extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'key_advantages',
        'request_location_id',
        'location_type',
    ];
}
