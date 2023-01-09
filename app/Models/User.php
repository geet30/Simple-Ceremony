<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\User\{Methods, Relationship};
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Methods, Relationship;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       'user_type', 'first_name', 'last_name', 'phone', 'image', 'name', 'email', 'password', 'username', 'other_name', 'surname', 'contact_name', 'abn_number', 'a_number', 'bank', 'bsb', 'account_no', 'partner_type', 'country_code'
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

    /** for send reset email with custom template */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    
    public function celebrantLocations()
    {
        return $this->hasMany(CelebrantLocations::class, 'celebrant_id', 'id');
    }
    public function partnerProducts()
    {
        return $this->hasMany(PartnerProducts::class, 'user_id', 'id');
    }
    public function celebrant()
    {
        return $this->hasOne(CelebrantDetail::class, 'celebrant_id', 'id');
    }
    public function taxDetail()
    {
        return $this->hasOne(AdminTax::class, 'admin_id', 'id');
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'receiver_id', 'id')->orderBy('id', 'DESC');
    }
    public function unreadNotifications()
    {
        return $this->hasMany(Notification::class, 'receiver_id', 'id')->where('status', 0)->orderBy('id', 'DESC');
    }
    public function booking()
    {
        return $this->hasOne(Booking::class, 'user_id', 'id');
    }
    public function booking_user()
    {
        return $this->hasOne(UserPersonalDetail::class, 'user_id', 'id');
    }
}
