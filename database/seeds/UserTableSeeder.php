<?php

use Illuminate\Database\Seeder;
Use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'role' => 'user' 
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin' 
        ]);

        User::create([
            'name' => 'manajer',
            'email' => 'manajer@gmail.com',
            'password' => bcrypt('manajer'),
            'role' => 'manajer' 
        ]);


    }
}
