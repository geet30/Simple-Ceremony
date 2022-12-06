<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Location\{Methods, Relationship};
use Illuminate\Database\Eloquent\Casts\Attribute;

class Locations extends Model
{
    use HasFactory, Methods, Relationship;

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
        'status',
        'latitude',
        'longitude'
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
    protected $appends = [
        'package_price'
    ];
    public function booking()
    {
        return $this->hasMany('App\Models\Booking', 'locationId', 'id');
    }
    public function location_images()
    {
        return $this->hasMany('App\Models\LocationImages', 'location_id', 'id');
    }
    public function location_packages()
    {
        return $this->hasMany('App\Models\LocationPackages', 'location_id', 'id');
    }
   
    public function location_advantages()
    {
        return $this->hasMany('App\Models\LocationKeyAdvantages', 'location_id', 'id');
    }
    public function location_celebrants()
    {
        return $this->hasMany('App\Models\CelebrantLocations', 'location_id', 'id');
    }
    public function location_criteria()
    {
        return $this->hasMany('App\Models\LocationFilterCriterias', 'location_id', 'id');
    }
    public function request_location()
    {
        return $this->hasOne(RequestLocations::class,'id','custom_location_id');
    }
    public function active_slots()
    {
        return $this->hasMany(CelebrantDaySlot::class,'location_id');
    }
    public function packagePrice() : Attribute
    {
        $price = 0;
        try {
            $get_location_addons =  LocationPackages::with('get_packages')->where('location_id',$this->id)->get()->each(function($data){
                $data->package_price = $data->get_packages->total_fee ?? 0;
            });
            $price = ($get_location_addons) ? $get_location_addons->sum('package_price') : 0;
        } catch (\Throwable $th) {
            //throw $th;
        }
        return Attribute::make(
            get: fn ($value) => $price,
        );
    }
    
}
