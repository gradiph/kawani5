<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Mutation::class, function (Faker $faker) {
    return [
        'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        'from' => DB::table('stores')->inRandomOrder()->first()->id,
        'to' => DB::table('stores')->inRandomOrder()->first()->id,
        'date' => $faker->date,
    ];
});
