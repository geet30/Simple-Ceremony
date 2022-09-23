<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'booking_id', 'invoice_number', 'recipient_name', 'abn_number', 'bank_name', 'bank_number', 'notes'
    ];
}
