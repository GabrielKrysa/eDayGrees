<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropriedadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedade', function (Blueprint $table) {
            $table->bigIncrements('id'); // id para cada propriedade cadastrada 
            $table->bigInteger('id_proprietario')->unsigned(); // id do proprietario que e dono da propriedade
            $table->bigInteger('id_cultivar')->unsigned(); // id da cultivar que tem na propriedade cadastrada
            $table->string('status'); // status da minha uva dentro da propriedade, no caso faz verificaçãoes com outras tabelas e mostra o estado fenológico que ela se encontra
            $table->foreign('id_proprietario')->references('id')->on('proprietario'); // chave estrangeira que liga minha propriedade com o dono para pegar os dados e jogar em relatório
            $table->foreign('id_cultivar')->references('id')->on('cultivar'); // chave estrangeira que liga os dados da cultivar da minha propriedade com a cultivar original cadastrada, para pegar alguns dados como temperatura base
            $table->double('Acumulo_graus'); // acumulo de graus sempre atualizado por dia, assim podemos verificar com o id da minha cultivar em qual estado fenológico ela pode estar, com isso atualizamos o status e auxilia a fazer as verificações para doenças
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
