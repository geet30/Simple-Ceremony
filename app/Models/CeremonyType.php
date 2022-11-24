<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CeremonyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'ceremony_name', 'fee_adjustment', 'hyperlink_url', 'hyperlink_title', 'conditions', 'additional_info'
    ];
}
