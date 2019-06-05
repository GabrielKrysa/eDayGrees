<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivar', function (Blueprint $table) {
            $table->bigIncrements('id'); // chave primária dentro do sistema
            $table->string('cultivar');  // nome da cultiva para cadastro
            $table->string('ciclo'); // clide de cada cultivar
            $table->double('temperatura_base'); // temperatura base da minha cultivar que está sendo cadastrada
            $table->Integer('gemaAlgodao'); // temperatura cadastrada dentro do sistema para cada cultivar, usada para fazer verificacoes para possiveis mudancas de estadios fenologicos
            $table->Integer('brotacao'); // ||
            $table->Integer('florescimento'); // ||
            $table->Integer('aparecimentoInflorescencia'); // ||
            $table->Integer('inicioMaturacao'); // ||
            $table->Integer('colheita'); // ||

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultivar');
    }
}
