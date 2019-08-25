<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
  //La clase se llama shopping_cart (AGREGUE Mati)
  protected $table = "shopping_carts";
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['customer_id'];

  // Se aclara la relación con customer
  public function customer(){
    return $this->belongsTo(Customer::class);
  }

  // Se aclara la relación con shoppingLists (AGREGUE la s Mati)
  public function products(){
    return $this->belongsToMany(Product::class)
    //->withPivot($this->quantity, $this->total_purchase)
    ->withTimestamps();
  }

}
