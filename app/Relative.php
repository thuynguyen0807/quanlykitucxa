<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $table = "relative";

    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;
    
    public function students() {
    	return $this->belongsTo('App\Students', 'id_student', 'id');
    }
}
