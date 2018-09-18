<?php

use Illuminate\Database\Seeder;

class ProductStockOpnameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductStockOpname::class, 10)->create();
    }
}
