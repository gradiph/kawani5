<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\PaymentSale::class, function (Faker $faker) {
    return [
        'payment_id' => DB::table('payments')->inRandomOrder()->first()->id,
        'sale_id' => DB::table('sales')->inRandomOrder()->first()->id,
        'value' => $faker->randomNumber(9),
    ];
});
