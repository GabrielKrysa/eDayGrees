<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('descricao')->nullable();
            $table->string('oQueFazer')->nullable();
            $table->BigInteger('cultivar_cadastrado_id')->unsigned()->nullable();
            $table->foreign('cultivar_cadastrado_id')->references('id')->on('cadastro_cultivares');
            $table->string('data');
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
        Schema::dropIfExists('relatorio');
    }
}
