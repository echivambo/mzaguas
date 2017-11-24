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
            'email' => 'edsonchivambo@gmail.com',
            'fontenaria_id' => 1,
            'password' => bcrypt('002523'),
        ]);


         DB::table('users')->insert([
            'name' => 'Osvaldo Ricardo',
            'email' => 'osvaldo.machava95@gmail.com',
            'fontenaria_id' => 1,
            'password' => bcrypt('002525'),
        ]);
    }
}
