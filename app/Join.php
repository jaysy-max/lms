<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $fillable = ['user_id','name','roomKey','room_id'];
}
