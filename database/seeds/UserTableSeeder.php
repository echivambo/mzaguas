<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Edson Chivambo',
            'email' => 'edsonchivabo@gmail.com',
            'fontenaria_id' => 1,
            'password' => bcrypt('002523'),
        ]);
    }
}