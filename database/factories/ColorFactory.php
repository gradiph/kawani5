<?php

use Faker\Generator as Faker;

$factory->define(App\Color::class, function (Faker $faker) {
    return [
        'code' => sprintf("%02d", $faker->randomNumber(2)),
        'name' => $faker->word,
    ];
});
