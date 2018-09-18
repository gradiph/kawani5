<?php

use Faker\Generator as Faker;

$factory->define(App\Promo::class, function (Faker $faker) {
    return [
        'code' => $faker->randomNumber(1) % 2 == 1 ? $faker->postcode : NULL,
        'name' => $faker->words(2, TRUE),
        'started_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'ended_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
    ];
});
