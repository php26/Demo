<?php

use Illuminate\Database\Seeder;
use App\User;

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
        	'name' => 'admin',
        	'email' => 'hhhh@gmail.com',
        	'password' => bcrypt('12345'),
        	'is_admin' => true
        ]);

        User::create([
        	'name' => 'user1',
        	'email' => 'gggg@gmail.com',
        	'password' => bcrypt('12345'),
        	'is_admin' => false
        ]);
    }
}
