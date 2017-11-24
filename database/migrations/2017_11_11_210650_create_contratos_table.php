<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bairro',60);
            $table->string('casa',30);
            $table->string('rua',60);
            $table->date('data',60);
			$table->integer('leitura_inicial');
            $table->string('nome_cliente',60);
            $table->string('nr_contador',30);
            $table->boolean('status')->default(1);
            $table->integer('cliente_id')->references('id')->on('clientes');
            $table->integer('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
