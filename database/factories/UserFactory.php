<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'role_id' => DB::table('roles')->inRandomOrder()->first()->id,
        'store_id' => DB::table('stores')->inRandomOrder()->first()->id,
        'username' => $faker->userName,
        'password' => Hash::make('secret'),
    ];
});
