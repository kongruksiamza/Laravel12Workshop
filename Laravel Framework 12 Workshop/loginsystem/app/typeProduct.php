<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeProduct extends Model
{
    protected $table='typeproducts';
    public function product(){
          return $this->hasMany(Product::class);
    }
}
