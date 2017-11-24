<?php

use Illuminate\Database\Seeder;

class ContractoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contratos')->insert([
         	'id'=>1,
            'bairro' =>'Patrice Lumumba',
            'casa' => 'N.4',
            'rua' => 'Monte_Binga',
             'nome_cliente' => 'Matola',
            'cliente_id' => 1,
			 'user_id' => 1,
        ]);
    



     DB::table('contratos')->insert([
     	 	'id'=>2,
            'bairro' =>'Patrice Lumumba',
            'casa' => 'N.5',
            'rua' => 'Monte_Binga',
             'nome_cliente' => 'Sidney',
            'cliente_id' => 2,
			 'user_id' => 1,
        ]);

DB::table('contratos')->insert([
	 	'id'=>3,
            'bairro' =>'Patrice Lumumba',
            'casa' => 'N.6',
            'rua' => 'Monte_Binga',
             'nome_cliente' => 'Zlatan',
            'cliente_id' => 3,
			 'user_id' => 1,
        ]);

DB::table('contratos')->insert([
	 	'id'=>4,
            'bairro' =>'Patrice Lumumba',
            'casa' => 'N.7',
            'rua' => 'Monte_Binga',
             'nome_cliente' => 'Manhica',
            'cliente_id' => 4,
			 'user_id' => 1,
        ]);

DB::table('contratos')->insert([
	 	'id'=>4,
            'bairro' =>'Patrice Lumumba',
            'casa' => 'N.8',
            'rua' => 'Monte_Binga',
             'nome_cliente' => 'sssss',
            'cliente_id' => 5,
			 'user_id' => 1,
        ]);


}

}

