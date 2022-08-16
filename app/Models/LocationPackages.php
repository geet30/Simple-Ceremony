<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationPackages extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'location_category',
        'partner_id',
        'package_id',
    ];
}