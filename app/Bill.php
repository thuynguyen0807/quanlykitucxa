<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
     protected $table = "bill";

     public function room() {
     	return $this->hasMany('App\room', 'id_bill', 'id_bill');
     }

     public function price_list() {
     	return $this->has('App\price_list', 'id_bill', 'id_bill');
     }

}
