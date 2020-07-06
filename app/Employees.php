<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = "employees";

    public function manage() {
    	return $this->belongsTo('App\manage', 'id_manage', 'id_employee');
    }
}
