<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'request_location_id',
        'location_type',
        'image',
    ];
}
