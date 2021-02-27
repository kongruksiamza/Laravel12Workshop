<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table='products';
  protected $fillable=['name','price','type_id'];

  public function typeProduct(){
      return $this->belongsTo(typeProduct::class,'type_id');
  }

}
