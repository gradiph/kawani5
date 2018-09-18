<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Visitor::class, function (Faker $faker) {
    return [
        'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
        'date' => $faker->date,
        'qty' => $faker->randomNumber(2),
    ];
});
