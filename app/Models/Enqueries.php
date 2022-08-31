<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enqueries extends Model
{
    use HasFactory;

    protected $fillable = [
        'couple_one', 'couple_two', 'marriage_date', 'enquiry_date', 'phone', 'status', 'reffer_by', 'enquiry', 'phone_code'
    ];
}
