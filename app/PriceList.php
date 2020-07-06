<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $table = "price_list";

    public function bill() {
    	return $this->belongsTo('App\bill', 'id_bill', 'id_price_list');
    }
}
