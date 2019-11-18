<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroCultivaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_cultivares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cidade');
            $table->string('estado');
            $table->string('nome_propriedade');
            $table->unsignedInteger('id_proprietario');
            $table->unsignedInteger('id_cultivar');
            $table->string('status');
            $table->foreign('id_proprietario')->references('id')->on('users');
            $table->foreign('id_cultivar')->references('id')->on('cultivares');
            $table->double('Acumulo_graus');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propriedade');
    }
}
