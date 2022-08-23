<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrantLocations extends Model
{
    use HasFactory;
    protected $fillable = [
        'celebrant_id', 'location_id'
    ];

    public function location()
    {
        return $this->hasOne(Locations::class, 'id', 'location_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'celebrant_id', 'id');
    }
}
