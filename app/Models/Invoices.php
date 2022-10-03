<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'status','user_type','amount','celebrant_id','booking_id', 'invoice_number', 'recipient_name', 'abn_number', 'bank_name', 'bank_number', 'notes'
    ];
    public function booking()
    {
        return $this->belongsTo('App\Models\Booking', 'booking_id', 'id');
    }
}
