<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login')->unique();
            $table->string('senha');
            $table->string('nome');
            $table->string('ultimo_nome');
            $table->string('email')->unique();
            $table->string('cpf',11);
            $table->string('cidade');
            $table->string('estado');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.3
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
