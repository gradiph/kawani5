<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Stock::class, function (Faker $faker) {
    return [
        'product_id' => DB::table('products')->inRandomOrder()->first()->id,
        'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
        'stock_opname_id' => $faker->randomNumber(1) % 2 == 0 ? DB::table('stock_opnames')->inRandomOrder()->first()->id : NULL,
        'qty' => $faker->randomNumber(2),
        'price' => $faker->randomNumber(9),
        'cost' => $faker->randomNumber(9),
        'description' => $faker->randomNumber(1) % 2 == 0 ? $faker->sentence : NULL,
    ];
});
