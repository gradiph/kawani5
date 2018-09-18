<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\UserLog::class, function (Faker $faker) {
    return [
        'user_id' => DB::table('users')->inRandomOrder()->first()->id,
        'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
        'description' => $faker->sentence,
        'queryable_id' => $faker->randomNumber(1),
        'queryable_type' => $faker->randomNumber(1) % 2 == 0 ? 'local_queries' : 'cloud_queries',
    ];
});
