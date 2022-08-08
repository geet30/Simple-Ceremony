<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLocations extends Model
{
    use HasFactory;
    // protected $table = 'rejected_products';
    protected $fillable = ['name','phone','country_code','email','event_date','event_start_time','location_name','street_address','suburb','post_code','state','specific_location','coordinates','parking_details','parking_cost','status'];

    public function setEventDateAttribute($value){    
        $this->attributes['event_date'] =  date("Y-m-d H:i:s", strtotime($value));
    }
}
