<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    Protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}
