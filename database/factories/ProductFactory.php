<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(),
        'price' => $faker->randomFloat(2, 100, 1000),
        'amount' => $faker->numberBetween(0, 100),
        'system' => $faker->boolean()
    ];
});
