<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    public function sales()
    {
    	return $this->hasMany('App\Sale');
    }

    /* 
     * Seller has many customers through sales
	 * table, although Seller does not have a
	 * direct relationship with customers
	 */
    public function customers()
    {
        return $this->hasManyThrough('App\Customer', 'App\Sale');
    }
}
