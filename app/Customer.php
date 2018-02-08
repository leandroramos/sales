<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sale()
    {
    	return $this->hasOne(App\Sale);
    }
}
