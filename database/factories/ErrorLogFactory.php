<?php

use Faker\Generator as Faker;

$factory->define(App\ErrorLog::class, function (Faker $faker) {
    return [
        'user_id' => NULL,
        'ip_address' => $faker->randomNumber(1) % 2 == 1 ? $faker->ipv4 : $faker->ipv6,
        'description' => $faker->sentence,
        'action' => 'Controller@method',
        'errorThrown' => $faker->text,
        'status' => $faker->randomNumber(1) % 3 == 1 ? 'Waiting' : ($faker->randomNumber(1) % 3 == 0 ? 'Process' : 'Clear'),
        'created_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
        'updated_at' => $faker->dateTimeBetween('-1 year', 'now', 'Asia/Jakarta'),
    ];
});
