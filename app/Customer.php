<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['fullName', 'user', 'birthdate', 'email', 'password', 'country', 'avatar'];

    // Se aclara la relación (AGREGUE las y cambie en nombre del modelo que estaba mal Mati)
    public function shoppingCarts(){
      return $this->hasMany(shoppingCart::class);
  }

}
