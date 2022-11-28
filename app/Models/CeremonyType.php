<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\CeremonyType\ { Methods,Relationship };
class CeremonyType extends Model
{
    use HasFactory,Methods,Relationship;
    protected $fillable = [
        'ceremony_name', 'fee_adjustment', 'hyperlink_url', 'hyperlink_title', 'conditions'
    ];
    public function additonal_info()
    {
        return $this->hasMany('App\Models\CeremonyTypesAdditionalInfo', 'type_id', 'id');
        
    }
}
