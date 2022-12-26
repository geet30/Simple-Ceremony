<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageCertificateNumber extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'certificate_prefix',
        'certificate_suffix',
        'first_certificate_no',
        'no_of_certificates',
        'status',
        'details',
        'date_of_use'
    ];
   
}
