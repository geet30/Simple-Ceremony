<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerProducts extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_name','business_category', 'status'];

}
