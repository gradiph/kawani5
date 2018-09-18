<?php

use Faker\Generator as Faker;

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        'code' => sprintf("%03d", $faker->randomNumber(3)),
        'name' => $faker->company,
    ];
});
