<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'details' => $faker->country,
        'project_id' => rand(1,20),
        'category_id' => rand(1,4),
    ];
});
