<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      /**
     * Get the products for the shop.
     */
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
       public function shop()
    {
        return $this->belongsTo('App\Model\Shop');
    }


}
