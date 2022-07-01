<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'added_by',
        'name',
        'address',
        'town',
        'post_code',
        'coordinates',
        'direction',
        'general_location',
        'loc_number',
        'price',
        'cover_image',
        'custom_terms',
        'why_this_location',
        'weather_option',
        'getting_there',
        'custom_location',
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
}
