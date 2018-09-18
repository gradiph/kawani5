<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\SaleDetail::class, function (Faker $faker) {
    return [
        'promo_id' => DB::table('promos')->inRandomOrder()->first()->id,
        'stock_id' => DB::table('stocks')->inRandomOrder()->first()->id,
        'sale_id' => DB::table('sales')->inRandomOrder()->first()->id,
        'price' => $faker->randomNumber(9),
        'cost' => $faker->randomNumber(9),
        'discount' => $faker->randomNumber(1) % 2 == 0 ? $faker->randomNumber(8) : 0,
        'qty' => $faker->randomNumber(2),
    ];
});
