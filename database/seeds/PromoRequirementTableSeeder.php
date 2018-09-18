<?php

use Illuminate\Database\Seeder;

class PromoRequirementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PromoRequirement::class, 5)->create();
    }
}
