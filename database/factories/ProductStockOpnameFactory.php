<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\ProductStockOpname::class, function (Faker $faker) {
    return [
        'product_id' => DB::table('products')->inRandomOrder()->first()->id,
        'stock_opname_id' => DB::table('stock_opnames')->inRandomOrder()->first()->id,
        'qty' => $faker->randomNumber(2),
        'price' => $faker->randomNumber(9),
        'cost' => $faker->randomNumber(8),
        'description' => $faker->sentence,
    ];
});
