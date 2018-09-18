<?php

use Illuminate\Database\Seeder;

class MutationStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MutationStock::class, 3)->create();
    }
}
