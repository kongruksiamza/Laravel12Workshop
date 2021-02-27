<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeProduct extends Model
{
  protected $table='type_products';

  public function product(){
        return $this->hasMany(Product::class);
  }

}
