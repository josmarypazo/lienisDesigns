<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\shoppingList;
use Faker\Generator as Faker;

$factory->define(shoppingList::class, function (Faker $faker) {
    return [
        "quantity"=>$faker->randomDigitNotNull,
    ];
});
