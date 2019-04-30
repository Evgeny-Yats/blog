<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    $title = rtrim($faker->realText($faker->numberBetween(15,45)),".");
    return [
        'title' => $title,
        'image' => $faker->imageUrl(300, 300),
        'intro' => $faker->text(rand(50, 120)),
        'view' => $faker->text(rand(1)),
        'body' => $faker->realText(rand(10, 20)),
        'facebook' => $faker->char(),
        'pinterest' => $faker->char(),
        'twitter' => $faker->char(),
//        'body' => $faker->realText(rand(800, 2000)),
    ];
});