<?php

use Faker\Generator as Faker;

$factory->define(App\Size::class, function (Faker $faker) {
    return [
        'code' => sprintf("%02d", $faker->randomNumber(2)),
        'name' => $faker->word,
    ];
});
