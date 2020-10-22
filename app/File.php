<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['title','description','file','roomKey','user_id','room_id'];
}
