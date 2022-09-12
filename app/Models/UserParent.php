<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserParent extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'user_noim_id', 'current_name', 'first_name', 'other_name', 'birth_name', 'birth_first_name', 'birth_other_name', 'birth_place'];
}
