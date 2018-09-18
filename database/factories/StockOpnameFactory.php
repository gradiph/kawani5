<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\StockOpname::class, function (Faker $faker) {
    return [
        'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
        'description' => $faker->randomNumber(1) % 2 == 0 ? $faker->sentence : NULL,
        'started_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'finished_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'can_edit' => $faker->randomNumber(1) % 2,
    ];
});
