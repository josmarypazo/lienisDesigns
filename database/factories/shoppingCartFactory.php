<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\shoppingCart;
use Faker\Generator as Faker;

$factory->define(shoppingCart::class, function (Faker $faker) {
    return [
      "purchase_amount"=>$faker->randomFloat(2, 100, 99999),
    ];
});
