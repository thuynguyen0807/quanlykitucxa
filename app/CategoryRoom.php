<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryRoom extends Model
{
    protected $table = "category_room";
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;

    public function room() {
    	return $this->hasMany('App\Room', 'category_room', 'id');
    }
    public function bed() {
    	//  model con, model con, foreign key of Room, foreign key of Bed, primary ley of Category
    	return $this->hasManyThrough('App\Bed', 'App\Room', 'category_room', 'id_room', 'id');

    }
}
