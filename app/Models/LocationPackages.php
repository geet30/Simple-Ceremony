<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationPackages extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'request_location_id',
        'location_type',
        'location_category',
        'partner_id',
        'package_id',
    ];
    public function packages()
    {
        return $this->hasMany('App\Models\PartnerPackages','id','package_id');
    }
}
