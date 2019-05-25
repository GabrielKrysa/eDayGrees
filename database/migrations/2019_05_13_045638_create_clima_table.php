<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
        Schema::create('clima', function (Blueprint $table) {
            $table->double('temperaturaMaxima');
            $table->double('temperaturaMinima');
            $table->double('temperaturaMedia');
            $table->double('precipitacao');
            $table->double('umidadeRelativa');
            $table->date('data');
            $table->string('cidade');
            $table->string('estado');
            $table->timestamps();
        });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clima');
    }
}
