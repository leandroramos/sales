<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sale()
    {
    	return $this->belongsTo('App\Sale');
    }
}
