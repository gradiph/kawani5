<?php

use Illuminate\Database\Seeder;

class PromoStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PromoStock::class, 5)->create();
    }
}
