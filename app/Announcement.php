<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
