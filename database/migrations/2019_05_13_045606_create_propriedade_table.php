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
            $table->bigIncrements('id');
            $table->bigInteger('id_proprietario')->unsigned();
            $table->bigInteger('id_cultivar')->unsigned();
            $table->foreign('id_proprietario')->references('id')->on('proprietario');
            $table->foreign('id_cultivar')->references('id')->on('cultivar');
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
