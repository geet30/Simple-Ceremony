<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageLocations extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'location'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function locations()
    {
        return $this->hasMany('App\Models\Locations', 'id', 'location');
    }
    // public function product()
    // {
    //     return $this->belongsTo('App\Models\PartnerProducts','product_id','id');
    // }
}
