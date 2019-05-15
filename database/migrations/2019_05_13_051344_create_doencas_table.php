<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doencas', function (Blueprint $table) {
            $table->string('estado_fenologico'); // estado fenologico para verificar em qual a cultivar se encontra 
            $table->double('temperatura'); // temperatura do dia 
            $table->double('umidade'); // umidade de verificação para doeças
            $table->integer('periodo_de_molhamento'); // periodo de molhamento em horas sem o apararecimento de sol para verificar doenças que pode estar propicias a ocorre na videira
            $table->string('condicao_secundaria'); // verificação secundária que usamos em determinado caso que possa acontecer
            $table->string('nome_doenca'); // nome da doença que pode ser que aconteça com determinado caso de verificação 
            $table->string('aviso_usuario'); // string de aviso que mostramos no relatório caso algum caso de doença bata de acordo com nossa tabela 

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
        Schema::dropIfExists('doencas');
    }
}
