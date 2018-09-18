<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\PromoStock::class, function (Faker $faker) {
    return [
        'promo_id' => DB::table('promos')->inRandomOrder()->first()->id,
        'stock_id' => DB::table('stocks')->inRandomOrder()->first()->id,
        'type' => $faker->randomNumber(1) % 3,
        'value' => $faker->randomNumber(1) % 2 == 0 ? $faker->randomFloat(0, 0, 999999) : $faker->randomFloat(2, 0, 99),
        'qty' => $faker->randomNumber(2),
    ];
});
