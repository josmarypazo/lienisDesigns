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
  protected $fillable = ['quantity','shopping_cart_id','product_id'];

  // Se aclara la relación con product
  public function product(){
    return $this->belongsTo("App\Product", "product_id");
  }

  // Se aclara la relación con shoppingCart
  public function shoppingCart(){
    return $this->belongsTo("App\shoppingCart", "shopping_cart_id");
  }
}
