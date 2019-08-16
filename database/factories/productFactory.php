<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "name"=>$faker->name,
        "rating"=>$faker->randomFloat(2,1,10),
        "description"=>$faker->paragraph(3),
        "price"=>$faker->randomFloat(2, 100, 9999),
        "stock"=>$faker->randomDigitNotNull,
        "image"=>$faker->imageUrl(640,480),
    ];
});
