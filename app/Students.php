<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = "students";

    // protected $primaryKey = 'students_id';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;
    
    public function relative() {
    	return $this->hasOne('App\Relative', 'id_student', 'id');
    }

    public function room() {
    	return $this->belongsTo('App\Room', 'id_room', 'id'); 
    }

    public function bed() {
        return $this->belongsTo('App\Bed', 'id_bed', 'id');
    }
}
