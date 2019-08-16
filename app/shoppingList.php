<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingList extends Model
{
  //La clase se llama shopping_list (AGREGUE Mati)
  protected $table = "shopping_lists";
  //Cómo no tiene primaryKey "ID" se pone null (AGREGUE Mati)
  // protected $primaryKey = null;
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['quantity','shopping_cart_id','product_id', 'total_purchase'];

  // Se aclara la relación con product
  public function products(){
    return $this->belongsToMany("App\Product", "product_id");
  }

  // Se aclara la relación con shoppingCart
  public function shoppingCarts(){
    return $this->belongsToMany("App\shoppingCart", "shopping_cart_id");
  }
}
