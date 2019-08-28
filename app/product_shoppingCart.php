<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_shoppingCart extends Model
{
  //La clase se llama product_shopping_cart (AGREGUE Mati)
  protected $table = "product_shopping_cart";
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['quantity', 'total_purchase', 'shopping_cart_id', 'product_id'];



  // Se aclara la relación con product
  // public function products(){
  //   return $this->belongsToMany("App\Product", "shopping_lists", "shopping_cart_id", "product_id");
  // }
  //
  // public function shoppingCarts(){
  //   return $this->belongsToMany("App\shoppingCart", "shopping_lists", "product_id", "shopping_cart_id");
  // }

}
