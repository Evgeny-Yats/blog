<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    $title = rtrim($faker->realText($faker->numberBetween(15,45)),".");
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'image' => $faker->imageUrl(856, 493),
        'intro' => $faker->text(rand(150, 300)),
        'body' => $faker->realText(rand(800, 2000)),
    ];
});
