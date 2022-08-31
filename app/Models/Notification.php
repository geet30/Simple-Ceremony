<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'receiver_id', 'sender_id', 'title', 'body', 'redirection_url', 'status', 'type'
    ];
}
