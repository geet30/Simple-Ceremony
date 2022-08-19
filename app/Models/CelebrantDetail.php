<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrantDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'celebrant_id','address','admin_fee','standard_fee', 'description'
    ];
}
