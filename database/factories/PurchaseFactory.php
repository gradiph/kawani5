<?php

use Faker\Generator as Faker;

$factory->define(App\Purchase::class, function (Faker $faker) {
    return [
        'invoice_number' => $faker->randomNumber,
        'from' => $faker->company,
        'image' => $faker->word . '.jpg',
        'created_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
    ];
});
