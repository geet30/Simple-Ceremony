<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNoimReferrers extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'booking_id', 'further_help', 'how_did_you_find_us', 'when_did_you_hear_about_us', 'process_feedback', 'need_interpreter', 'read_google_review_before_booking', 'interpreter_full_name', 'interpreter_occupation', 'interpreter_address', 'language_speak'];
}
