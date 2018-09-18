<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\CustomerReturn::class, function (Faker $faker) {
    return [
        'stock_id' => DB::table('stocks')->inRandomOrder()->first()->id,
        'sale_detail_id' => DB::table('sale_details')->inRandomOrder()->first()->id,
        'created_at' => $faker->dateTimeBetween('-1 month', 'now', 'Asia/Jakarta'),
        'qty' => $faker->randomNumber(1),
        'description' => $faker->sentence,
        'back_to_store' => $faker->randomNumber(1) % 2,
    ];
});
