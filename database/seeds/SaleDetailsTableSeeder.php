<?php

use Illuminate\Database\Seeder;

class SaleDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SaleDetail::class, 10)->create();
    }
}
