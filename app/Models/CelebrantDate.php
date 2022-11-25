<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrantDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'start_date',
        'end_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function day_slots()
    {
        return $this->hasMany(CelebrantDaySlot::class);
    }
}
