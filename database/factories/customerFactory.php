<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
      'fullName'=>$faker->name,
      'user'=>$faker->userName,
      'birthdate'=>$faker->date("Y-m-d", "now"),
      'email'=>$faker->unique()->safeEmail,
      'password'=>$faker->password,
      'country'=>$faker->country,
      'avatar'=>$faker->imageUrl(640,480),


    ];
});
