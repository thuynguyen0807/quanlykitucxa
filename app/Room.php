<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "room";

    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;
    
    public function category_room() {
        // model, foreign key of room, primary key of room 
    	return $this->belongsTo('App\CategoryRoom', 'category_room', 'id');
    }

    public function bed() {
        // model, foreign key of bed, primary key of bed
        return $this->hasMany('App\Bed', 'id_room', 'id');
    }

    public function student() {
        return $this->hasMany('App\Students', 'id_room', 'id');
    }
}