<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBookingAddon extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'booking_id','partner_id'];
    
    public function packages()
    {
        return $this->hasMany('App\Models\PartnerPackages','id','package_id');
    }
}
