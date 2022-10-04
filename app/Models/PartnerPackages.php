<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerPackages extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'package_name',
        'partner_fee',
        'admin_fee',
        'total_fee',
        'deposit',
        'simulation_partner_fee',
        'simulation_admin_fee',
        'simulation_total_fee',
        'location_description',
        'title_term',
        'terms',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function gallery()
    {
        return $this->hasMany('App\Models\PackageImages','package_id','id');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\PartnerProducts','product_id','id');
    }
   
}
