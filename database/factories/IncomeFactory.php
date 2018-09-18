<?php

use Faker\Generator as Faker;

$factory->define(App\Income::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
        'name' => $faker->name,
        'value' => $faker->randomNumber(9),
        'description' => $faker->randomNumber(1) % 2 == 1 ? $faker->sentence : NULL,
        'created_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
    ];
});
