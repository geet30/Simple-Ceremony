<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPayments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','booking_id','payment_type','amount','currency','customerId','payment_status','payment_method_types','status','checkoutSessionID'
    ];
}
