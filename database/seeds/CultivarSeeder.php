<?php

use Illuminate\Database\Seeder;

class CultivarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *  $table->Integer('gemaAlgodao'); // temperatura cadastrada dentro do sistema para cada cultivar, usada para fazer verificacoes para possiveis mudancas de estadios fenologicos
     * $table->Integer('brotacao'); // ||
     * $table->Integer('florescimento'); // ||
     * $table->Integer('aparecimentoInflorescencia'); // ||
     * $table->Integer('inicioMaturacao'); // ||
     * $table->Integer('colheita'); // ||
     */
    public function run()
    {
        DB::table('cultivar')->insert([[
            'cultivar' => 'Isabel/IAC 766',
            'ciclo' => 'medio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,

        ], [
            'cultivar' => 'Isabel/IAC 572',
            'ciclo' => 'medio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Rubea/IAC 766',
            'ciclo' => 'precoce',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Rubea/IAC 572',
            'ciclo' => 'precoce',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Rubea/420-A',
            'ciclo' => 'precoce',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Chardonnay',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Merlot',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Pinot Noir',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ], [
            'cultivar' => 'Tannat',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 0,
            'brotacao' => 0,
            'florescimento' => 0,
            'aparecimentoInflorescencia' => 0,
            'inicioMaturacao' => 0,
            'colheita' => 0,
        ]]);
    }
}
