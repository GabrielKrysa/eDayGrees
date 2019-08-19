<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('descricao');
            $table->string('oQueFazer');
            $table->BigInteger('propriedade_id')->unsigned();
            $table->foreign('propriedade_id')->references('id')->on('propriedade');
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
