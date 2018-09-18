<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Discount::class, function (Faker $faker) {
    return [
        'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        'sale_detail_id' => $faker->randomNumber(1) % 2 == 0 ? DB::table('sale_details')->inRandomOrder()->first()->id : NULL,
        'type' => $faker->randomNumber(1) % 3,
        'value' => $faker->randomNumber(1) % 2 == 0 ? $faker->randomFloat(0, 0, 999999) : $faker->randomFloat(2, 0, 99),
        'created_at' => $faker->dateTimeBetween('-1 month', 'now', 'Asia/Jakarta'),
    ];
});
