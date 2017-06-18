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
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@example.com',
        	'password' => bcrypt('password'),
        	'gender' => 'M',
        	]);

        DB::table('users')->insert([
        	'name' => 'manusia',
        	'email' => 'human@example.com',
        	'password' => bcrypt('apaanya'),
        	'gender' => 'Otherworldly',
        	]);
    }
}
