<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class CelebrantDaySlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'celebrant_date_id',
        'user_id',
        'day',
        'dayText',
        'start_time',
        'end_time',
        'booking_length',
        'your_fee',
        'admin_fee',
        'location_id',
        'location_fee',
        'type'
    ];
    protected $appends = ['override'];
    public function dates()
    {
        return $this->belongsTo(CelebrantDate::class,'celebrant_date_id');
    }
    public function availabilitydates()
    {
        return $this->belongsTo(CelebrantDate::class,'celebrant_date_id');
    }
    public function location()
    {
        return $this->belongsTo(Locations::class);
    }
    public function override(): Attribute
    {
        try{
            $celbrantdates = CelebrantDate::find($this->celebrant_date_id);
            $over_ride = CelebrantDateOverRide::where('user_id',$celbrantdates->user_id)
            ->whereDate('override_date','>=',$celbrantdates->start_date)
            ->whereDate('override_date','<=',$celbrantdates->end_date)
            ->where('day',$this->day)->get();
        }catch(\Exception $ex){
            $over_ride = $ex->getMessage();
            // dd($over_ride);
        }
        return Attribute::make(
            get: fn ($value) => $over_ride,
        );
    }  
    public function calendardayslots()
    {
        return $this->belongsTo(Booking::class, 'id','calendar_dayslot_id');
    }
    public function overrideSearch($date)
    {
        try{
            $celbrantdates = CelebrantDate::find($this->celebrant_date_id);
            $over_ride = CelebrantDateOverRide::where('user_id',$celbrantdates->user_id)
            ->whereDate('override_date','>=',$celbrantdates->start_date)
            ->whereDate('override_date','<=',$celbrantdates->end_date)
            ->whereDate('override_date','=',$date)
            ->where('day',$this->day)->get();
        }catch(\Exception $ex){
            $over_ride = $ex->getMessage();
            // dd($over_ride);
        }
        return $over_ride;
       
    }  
    
}
