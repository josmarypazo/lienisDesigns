<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product_shoppingCart;
use Faker\Generator as Faker;

$factory->define(product_shoppingCart::class, function (Faker $faker) {
    return [
        "quantity"=>$faker->randomDigitNotNull,
        "total_purchase"=>$faker->randomFloat(2, 100, 999999),
    ];
});
