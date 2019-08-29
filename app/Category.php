<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['name'];

    //Se aclara la relación 
    public function products() {
      return $this->hasMany(Product::class);
    }
}
