<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWitness extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'family_name', 'first_name', 'other_name'];
}
