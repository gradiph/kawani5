<?php

use Illuminate\Database\Seeder;

class PaymentSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PaymentSale::class, 5)->create();
    }
}
