<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // Your model code here
//use HasFactory;
 protected $table = 'tasks';
    protected $fillable = ['title', 'description'];
}
