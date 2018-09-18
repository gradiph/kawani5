<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\ProductPurchase::class, function (Faker $faker) {
    return [
        'product_id' => DB::table('products')->inRandomOrder()->first()->id,
        'purchase_id' => DB::table('purchases')->inRandomOrder()->first()->id,
        'qty' => $faker->randomNumber(2),
        'price' => $faker->randomNumber(9),
        'cost' => $faker->randomNumber(8),
        'description' => $faker->sentence,
    ];
});
