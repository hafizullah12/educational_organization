<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','degisnation','feature_image','address','ssc','hsc','honours','joing_date'];
}
