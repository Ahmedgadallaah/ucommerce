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
        App\User::create([

        	'name' => 'Ahmed Gadallah',
        	'email' => 'ahmedgadallah1899@gmail.com',
        	'password' => bcrypt('Milan1899')
        ]);
    }
}
