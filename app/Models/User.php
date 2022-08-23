<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use App\Traits\User\{Methods, Relationship};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Methods, Relationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'image', 'name', 'email', 'password', 'username', 'other_name', 'surname', 'contact_name', 'abn_number', 'a_number', 'bank', 'bsb', 'account_no', 'business_category', 'partner_type', 'country_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function addon()
    {
        return $this->belongsTo('App\Models\Addons', 'business_category', 'id');
    }

    public function celebrantLocations()
    {
        return $this->hasMany(CelebrantLocations::class, 'celebrant_id', 'id');
    }

    public function celebrant()
    {
        return $this->hasOne(CelebrantDetail::class, 'celebrant_id', 'id');
    }
}
