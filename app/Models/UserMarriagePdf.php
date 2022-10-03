<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMarriagePdf extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'document_name', 'person1_signature', 'person2_signature', 'person1witness_signature', 'person2witness_signature', 'celebrant_signature', 'new_celebrant_signature'];
}
