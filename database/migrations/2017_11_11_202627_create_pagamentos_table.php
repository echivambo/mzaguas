<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nr_comprovativo',30);
            $table->date('data_pagamento');
            $table->string('tipo_pagamento',30);
            $table->double('valor');
            $table->integer('idfaturas')->references('id')->on('faturas');
            $table->integer('user_id')->references('id')->on('users');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('pagamentos');
    }
}
