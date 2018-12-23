<?php

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
        \App\User::create([
        	'name'		=>	'Inocêncio Cardoso',
        	'email'		=>	'inocenciocardoso19@gmail.com',
        	'password'	=>	bcrypt('twl767'),
        ]);
    }
}
