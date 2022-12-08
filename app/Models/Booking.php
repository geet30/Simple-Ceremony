<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Booking\{Methods, Relationship};

class Booking extends Model
{
    use HasFactory, Methods, Relationship;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id', 'locationId', 'booking_date','price', 'celebrant_id', 'booking_start_time', 'booking_end_time', 'status', 'first_couple_name', 'second_couple_name', 'ceremony_type',
        'location_name', 'full_name_of_person_1' ,'full_name_of_person_2' ,'full_name_of_witness_1' ,'full_name_of_witness_2' ,'full_name_of_child' ,
        'full_name_of_parent_1' ,'full_name_of_parent_2','full_name_of_sponsor_1','full_name_of_sponsor_2','calendar_dayslot_id'
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
    public function location()
    {
        return $this->belongsTo('App\Models\Locations', 'locationId', 'id');
    }
    public function celebrant()
    {
        return $this->belongsTo('App\Models\User', 'celebrant_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function user_noim()
    {
        return $this->belongsTo('App\Models\UserNoim', 'id', 'booking_id');
    }
    public function booking_details()
    {
        return $this->belongsTo('App\Models\BookingDetails', 'id', 'booking_id');
    }
    public function booking_details_docs()
    {
        return $this->hasMany('App\Models\BookingDetailsDocs', 'booking_id', 'id');
    }
    public function booking_feedback()
    {
        return $this->hasMany('App\Models\CeremonyFeedback', 'booking_id', 'id');
    }
    public function booking_addons()
    {
        return $this->hasMany('App\Models\UserBookingAddon', 'booking_id', 'id');
    }
    
    public function booking_payments()
    {
       
        return $this->hasMany('App\Models\BookingPayments', 'booking_id', 'id');
    }
    public function celebrant_details()
    {
        return $this->belongsTo(CelebrantDetail::class, 'celebrant_id', 'celebrant_id');
    }
   
}
