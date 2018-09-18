<?php

use Illuminate\Database\Seeder;

class ErrorLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ErrorLog::class, 10)->create();
    }
}
