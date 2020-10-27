<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','name','email','image','address','contact'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
