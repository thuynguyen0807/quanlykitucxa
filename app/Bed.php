<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $table = "bed";

    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;

    public function room() {
    	return $this->belongsTo('App\Room', 'id_room', 'id');
    }
    public function students() {
    	return $this->hasOne('App\Students', 'id_bed', 'id');
    }
}
