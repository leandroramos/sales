<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function seller()
    {
    	return $this->belongsTo('App\Seller');
    	return $this->hasOne('App\Customer');
    }
}
