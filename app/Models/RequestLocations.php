<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLocations extends Model
{
    use HasFactory;
    protected $fillable = ['username','type','celebrant_id','name','phone','country_code','email','event_date','event_start_time','name','address','town','post_code','state','general_location','direction','parking_details','parking_cost','status','celebrant_id','loc_number','key_advances','price','cover_image','custom_terms','why_this_location','weather_option','getting_there','custom_location','custom_location_id','latitude','longitude'];

    public function setEventDateAttribute($value){    
        $this->attributes['event_date'] =  date("Y-m-d H:i:s", strtotime($value));
    }
    public function request_location_images()
    {
        return $this->hasMany('App\Models\LocationImages', 'request_location_id', 'id')->where('location_type',2);
    }
    public function request_location_packages()
    {
        return $this->hasMany('App\Models\LocationPackages', 'request_location_id', 'id')->where('location_type',2);
    }  
    public function request_location_advantages()
    {
        return $this->hasMany('App\Models\LocationKeyAdvantages', 'request_location_id', 'id')->where('location_type',2);
    }
    public function request_location_criteria()
    {
        return $this->hasMany('App\Models\LocationFilterCriterias', 'request_location_id', 'id')->where('location_type',2);
    }
    public function location()
    {
        return $this->hasOne(Locations::class,'custom_location_id','id');
    }
}
