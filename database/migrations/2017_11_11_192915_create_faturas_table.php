<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('leitura');
            $table->double('consumo_registado');
             $table->double('valor_pagar');
              $table->date('data_leitura');
             $table->date('data_limite');
               $table->integer('user_id')->references('id')->on('users');
                 $table->integer('contrato_id')->references('id')->on('contrato');
            $table->integer('taxa_id')->references('id')->on('taxa_por_metros');
             $table->double('multa');
               $table->boolean('status')->default(1);
            $table->timestamps('data_reg');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faturas');
    }
}
