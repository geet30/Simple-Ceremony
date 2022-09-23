<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMarriageDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'booking_id',
        'is_document_electronically_signed',
        'how_did_you_have_noim_witnessed',
        'authorization_code',
        'person_1_witness_name',
        'who_signed_person_1_witness',
        'person_1_witness_occupation_name',
        'person_2_witness_name',
        'signed_noim_document',
        'who_signed_person_2_witness',
        'person_2_witness_occupation_name',
        'party_not_speak_english',
        "language_speak",
        "interpreter_full_name",
        "interpreter_address",
        "interpreter_occupation"
    ];
}
