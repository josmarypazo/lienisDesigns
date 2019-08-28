<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['fullName', 'user', 'birthdate', 'email', 'password', 'country', 'state', 'avatar'];

    // Se aclara la relación (AGREGUE las y cambie en nombre del modelo que estaba mal Mati)
    public function shoppingCarts(){
      return $this->hasMany(shoppingCart::class);
  }

  /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin () {
            return $this->is_admin === 1;
        }
}
