<?php

use Illuminate\Database\Seeder;

class MutationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mutation::class, 3)->create();
    }
}
