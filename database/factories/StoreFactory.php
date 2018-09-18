<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'type' => $faker->randomNumber(1) % 4 == 0 ? 'Kawani' : ($faker->randomNumber(1) % 4 == 1 ? 'Rei' : ($faker->randomNumber(1) % 4 == 2 ? 'Consina' : 'Gudang')),
        'name' => $faker->company,
        'address' => $faker->streetAddress,
        'phone' => $faker->tollFreePhoneNumber,
    ];
});
