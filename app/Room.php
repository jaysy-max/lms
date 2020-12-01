<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    	'name', 
    	'course',
    	'year',
    	'block',
    	'roomKey',
    	'user_id'
    ];

    public function students()
    {
    	return $this->belongsToMany(User::class, 'user_id')->withTimestamps();
    }

    public function announcements()
    {
    	return $this->hasMany(Announcement::class);
    }
}

