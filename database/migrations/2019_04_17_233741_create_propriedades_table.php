<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropriedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_propriedade');
            $table->string('nome');
            $table->integer('id_Cultivar')->unsigned();
            $table->foreign('id_Cultivar')->references('id')->on('uvas');
            $table->integer('AcumuloAtualizado');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propriedades');
    }
}
