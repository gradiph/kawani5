<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Payment::create([
            'name' => 'Tunai',
        ]);

        App\Payment::create([
            'name' => 'BCA Debit',
        ]);
    }
}
