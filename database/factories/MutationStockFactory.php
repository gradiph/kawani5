<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\MutationStock::class, function (Faker $faker) {
    return [
        'mutation_id' => DB::table('mutations')->inRandomOrder()->first()->id,
        'stock_id' => DB::table('stocks')->inRandomOrder()->first()->id,
        'qty' => $faker->randomNumber(2),
        'packed_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'picked_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'delivered_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
    ];
});
