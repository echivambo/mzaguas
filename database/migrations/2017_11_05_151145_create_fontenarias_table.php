<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFontenariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fontenarias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',45)->unique();
            $table->string('endereco',100);
            $table->string('email',45)->unique();
            $table->string('tel1',15);
            $table->string('tel2',15);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->integer('empresa_id')->references('id')->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fontenarias');
    }
}
