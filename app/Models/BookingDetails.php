<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Booking\{Methods, Relationship};

class BookingDetails extends Model
{
    use HasFactory, Methods, Relationship;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'booking_id', 'notes', 'checked', 'marriage_certificate_number', 'registry_number', 'have_you_ordered_certificate', 'event_comment'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
