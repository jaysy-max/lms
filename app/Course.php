<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Degree;

class Course extends Model
{

    protected $fillable = ['courseCode','courseDesc','degree'];

}
