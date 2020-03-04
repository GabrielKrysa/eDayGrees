<?php

use Illuminate\Database\Seeder;

class CultivarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cultivares')->insert([[
                'cultivar' => 'Isabel/420 A',
            'ciclo' => 'medio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 72.2,
            'brotacao' => 92.8,
            'florescimento' => 319.3,
            'aparecimentoInflorescencia' => 109.3,
            'inicioMaturacao' => 817.1,
            'colheita' => 1260.8,
        ], [
            'cultivar' => 'Isabel/IAC 766',
            'ciclo' => 'medio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 72.2,
            'brotacao' => 92.8,
            'florescimento' => 319.3,
            'aparecimentoInflorescencia' => 109.3,
            'inicioMaturacao' => 817.1,
            'colheita' => 1260.8,
        ], [
            'cultivar' => 'Isabel/IAC 572',
            'ciclo' => 'medio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 72.2,
            'brotacao' => 96.7,
            'florescimento' => 309.1,
            'aparecimentoInflorescencia' => 117.7,
            'inicioMaturacao' => 817.1,
            'colheita' => 1260.8,
        ], [
            'cultivar' => 'Rubea/IAC 766',
            'ciclo' => 'precoce',
            'temperatura_base' => 10,
            'gemaAlgodao' => 98,
            'brotacao' => 117.7,
            'florescimento' => 342.7,
            'aparecimentoInflorescencia' => 162.3,
            'inicioMaturacao' => 817,
            'colheita' => 1003.7,
        ], [
            'cultivar' => 'Rubea/IAC 572',
            'ciclo' => 'precoce',
            'temperatura_base' => 10,
            'gemaAlgodao' => 98,
            'brotacao' => 117.7,
            'florescimento' => 319.5,
            'aparecimentoInflorescencia' => 162.3,
            'inicioMaturacao' => 817,
            'colheita' => 1003.7,
        ], [
            'cultivar' => 'Chardonnay',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 98,
            'brotacao' => 127,
            'florescimento' => 315,
            'aparecimentoInflorescencia' => 142,
            'inicioMaturacao' => 813,
            'colheita' => 1201,
        ], [
            'cultivar' => 'Merlot',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 98,
            'brotacao' => 127,
            'florescimento' => 315,
            'aparecimentoInflorescencia' => 142,
            'inicioMaturacao' => 813,
            'colheita' => 1201,
        ], [
            'cultivar' => 'Pinot Noir',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 103,
            'brotacao' => 122,
            'florescimento' => 329,
            'aparecimentoInflorescencia' => 156,
            'inicioMaturacao' => 801,
            'colheita' => 1235,
        ], [
            'cultivar' => 'Tannat',
            'ciclo' => 'tardio',
            'temperatura_base' => 10,
            'gemaAlgodao' => 92,
            'brotacao' => 127,
            'florescimento' => 313,
            'aparecimentoInflorescencia' => 129,
            'inicioMaturacao' => 819,
            'colheita' => 1209,
        ]]);
    }
}
