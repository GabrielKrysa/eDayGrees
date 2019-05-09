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
            $table->bigIncrements('id');
            $table->double('temperaturaMaxima');
            $table->double('temperaturaMinima');
            $table->double('precipitacao');
            $table->double('temperaturaMedia');
            $table->double('umidadeRelativa');
            $table->date('data');

        });
    }

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
