<?php

use Illuminate\Database\Seeder;

class CustomerReturnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CustomerReturn::class, 3)->create();
    }
}
