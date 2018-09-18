<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\SupplierReturn::class, function (Faker $faker) {
    return [
        'stock_id' => DB::table('stocks')->inRandomOrder()->first()->id,
        'created_at' => $faker->dateTimeBetween('-1 month', 'now'),
        'qty' => $faker->randomNumber(1),
        'description' => $faker->sentence,
    ];
});
