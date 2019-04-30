<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $title = rtrim($faker->realText($faker->numberBetween(15,45)),".");
    return [
        'title' => $title,
        'image' => $faker->imageUrl(400, 200),
        'price' => $faker->text(),
//        'body' => $faker->realText(rand(800, 2000)),
    ];
});
/*
запустить vagrant ssh
факторис
шаблон*/