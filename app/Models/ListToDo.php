<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListToDo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'status','name', 'description', 'due_date'
    ];
}
