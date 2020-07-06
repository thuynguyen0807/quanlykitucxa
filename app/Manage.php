<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $table = "manage";

    public function room() {
    	return $this->hasMany('App\room', 'id_manage', 'id_manage');
    }

    public function students() {
    	return $this->hasManyThough('App\students', 'App\room', 'id_manage', 'id_room', 'id_manage');
    }

    public function equipment() {
    	return $this->hasManyThough('App\equipment', 'App\room', 'id_manage', 'id_room', 'id_manage');
    }

    public function employees() {
    	return $this->hasMany('App\employees', 'id_employee', 'id_manage');
    }
}
