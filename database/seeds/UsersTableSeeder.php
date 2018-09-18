<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'role_id' => '1',
            'store_id' => NULL,
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        factory(App\User::class, 10)->create();
    }
}
