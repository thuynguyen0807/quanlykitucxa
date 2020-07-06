<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $table = "equipment";

    public function room() {
    	return $this->belongsTo('App\room', 'id_room', 'id_equipment');
    }
}
