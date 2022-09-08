<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationFilterCriterias extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_category', 'location_id','request_location_id',
        'location_type',
    ];
}
