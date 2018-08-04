<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
       public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
   public function shop()
    {
        return $this->belongsTo('App\Model\Shop');
    }

}
  
