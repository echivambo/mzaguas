<?php

use Illuminate\Database\Seeder;

class FontenariaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fontenarias')->insert([
            'id'=>1
            'nome' => 'Aguas da vida',
            'email' => 'avida@gmail.com',
            'endereco' => 'Bairro T3, Rua das Maotas 215',
            'tel1' => '845552151',
            'tel2' => '825552151',
            'distrito_id' => 1,
        ]);
    }
}