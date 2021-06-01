<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        User::create([
        	'username' => 'gerard',
        	'first_name' => 'Gerard',
        	'last_name' => 'Ampaguey',
        	'password' => bcrypt('gerard')
        ]);
    }
}
