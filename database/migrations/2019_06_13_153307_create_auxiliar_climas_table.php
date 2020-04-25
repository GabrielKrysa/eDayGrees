<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliarClimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliar_climas', function (Blueprint $table) {
            $table->string('temperatura');
            $table->string('umidade');
            $table->string('condicao');
            $table->integer('estado')->unsigned();
            $table->integer('cidade')->unsigned();
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('cidade')->references('id')->on('cidades');
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
        Schema::dropIfExists('auxiliar_clima');
    }
}
