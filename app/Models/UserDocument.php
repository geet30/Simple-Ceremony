<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'user_noim_id', 'first_document_name', 'second_document_name', 'document_path', 'document_extension'];
}
