<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Location\ { Methods,Relationship };
class Locations extends Model
{
    use HasFactory,Methods,Relationship ;

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
        'custom_location_id',
        'location_category',
        'status'
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
    public function location_images()
    {
        return $this->hasMany('App\Models\LocationImages','location_id','id');
    }
}
