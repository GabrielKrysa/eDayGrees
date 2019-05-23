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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // chave primária 
            $table->string('username')->unique(); // unico dentro do sistema de cada produtor
            $table->string('password');
            $table->string('nome'); // nome unico dentro do sistema de cada produtor
            $table->string('sobrenome'); 
            $table->string('email')->unique();
            $table->string('CPF')->unique(); // devemos deixar cadastrar somente um usuario com o mesmo cpf eu acho, mas depois caso esqueça o login, deverá entrar em contato
            $table->string('estado');
            $table->string('cidade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
