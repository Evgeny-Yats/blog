<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->realText($faker->numberBetween(15,45));
    return [
        'name' => $name,
        //'image' => $faker->imageUrl(400, 200),
        //'description' => $faker->realText(200, 2)
        'slug'=>Str::slug($name)
    ];
});
