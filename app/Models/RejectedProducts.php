<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedProducts extends Model
{
    use HasFactory;
    protected $table = 'rejected_products';
    protected $fillable = ['product_id','feedback'];
}
