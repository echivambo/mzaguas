<?php

use Illuminate\Database\Seeder;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distritos')->insert([
            'nome' => 'Matola',
            'provincia' => 'Maputo',
            'user_id' => 1,
        ]);
    }
}