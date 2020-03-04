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
            $table->integer('id_cidade')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->string('nome_propriedade');
            $table->unsignedInteger('id_proprietario');
            $table->unsignedInteger('id_cultivar');
            $table->string('status');
            $table->double('Acumulo_graus');

            $table->foreign('id_proprietario')->references('id')->on('users');
            $table->foreign('id_cultivar')->references('id')->on('cultivares');
            $table->foreign('id_cidade')->references('id')->on('cidades');
            $table->foreign('id_estado')->references('id')->on('estados');

            $table->softDeletes();
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
        Schema::dropIfExists('propriedade');
    }
}
