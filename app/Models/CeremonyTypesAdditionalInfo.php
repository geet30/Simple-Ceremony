<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CeremonyType\ { Methods,Relationship };
class CeremonyTypesAdditionalInfo extends Model
{
    use HasFactory,Methods,Relationship;
    protected $table ='ceremony_types_additional_info';
    protected $fillable = [
        'type_id', 'additional_info'
    ];
}
