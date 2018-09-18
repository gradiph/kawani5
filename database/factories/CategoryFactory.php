<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'code' => $faker->randomNumber(1),
        'name' => $faker->word,
    ];
});
