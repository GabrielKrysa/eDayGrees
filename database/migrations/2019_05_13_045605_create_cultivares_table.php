<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivares', function (Blueprint $table) {
            $table->increments('id'); // chave primária dentro do sistema
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
