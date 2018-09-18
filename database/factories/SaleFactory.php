<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Sale::class, function (Faker $faker) {
    return [
        'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
        'created_at' => $faker->dateTimeBetween('-1 month', 'now', 'Asia/Jakarta'),
        'price_total' => $faker->randomNumber(7),
        'cost_total' => $faker->randomNumber(6),
        'discount_total' => $faker->randomNumber(1) % 2 == 0 ? $faker->randomNumber(6) : 0,
        'qty_total' => $faker->randomNumber(2),
        'money_paid' => $faker->randomNumber(7),
        'invoice_printed' => $faker->randomNumber(1) % 2,
    ];
});
