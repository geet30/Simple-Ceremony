<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeremonyFeedback extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id','feedback'];
}
