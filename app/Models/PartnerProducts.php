<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerProducts extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_name','business_category', 'status'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function addon()
    {
        return $this->belongsTo('App\Models\Addons', 'business_category','id');
    }
    public function package()
    {
        return $this->hasMany('App\Models\PartnerPackages','product_id','id');
    }

    public function rejected()
    {
        return $this->belongsTo('App\Models\RejectedProducts','id','product_id');
    }
    public function product_location()
    {
        return $this->hasMany('App\Models\PackageLocations','product_id','id');
    }
}
