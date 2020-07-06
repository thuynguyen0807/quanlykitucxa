<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $incrementing = false;
    protected $primaryKey = 'login_name';
    protected $keyType = 'string';
}
