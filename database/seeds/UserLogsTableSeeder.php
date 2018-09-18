<?php

use Illuminate\Database\Seeder;

class UserLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserLog::class, 10)->create();
    }
}
