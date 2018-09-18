<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(App\Product::class, function (Faker $faker) {
    $supplier = DB::table('suppliers')->inRandomOrder()->first();
    $category = DB::table('categories')->inRandomOrder()->first();
    $size = DB::table('sizes')->inRandomOrder()->first();
    $color = DB::table('colors')->inRandomOrder()->first();
    return [
        'supplier_id' => $supplier->id,
        'category_id' => $category->id,
        'size_id' => $size->id,
        'color_id' => $color->id,
        'code' => $supplier->code . sprintf("%04d", $faker->randomNumber(4)) . $size->code . $color->code,
        'name' => $faker->words(3, TRUE),
    ];
});
