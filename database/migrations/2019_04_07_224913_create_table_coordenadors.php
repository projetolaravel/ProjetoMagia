<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoordenadors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordenadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_depart')->unsigned();
            $table->string('nome');
            $table->string('sexo');
            $table->string('endereco');
            $table->string('rub');
            $table->string('nick');
            $table->string('senha');
            $table->string('foto');
            $table->foreign('id_depart')->references('id')->on('departamentos');
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
        Schema::dropIfExists('coordenadors');
    }
}
