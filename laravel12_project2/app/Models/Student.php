<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['nmae','gender','email','district'];
    // protected $table ="table name";
}
