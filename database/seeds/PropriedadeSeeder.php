<?php

use Illuminate\Database\Seeder;

class PropriedadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propriedade')->insert([[
            'cidade' => 'Taió',
            'estado' => 'SC',
            'nome_propriedade' => 'ADMIN',
            'id_proprietario' => 1,
            'id_cultivar' => 1,
            'status' => 'OK',
            'Acumulo_graus' => 152.2
        ],[
            'cidade' => 'Guarapuava',
            'estado' => 'PR',
            'nome_propriedade' => 'ADMIN1',
            'id_proprietario' => 1,
            'id_cultivar' => 2,
            'status' => 'OK',
            'Acumulo_graus' => 153.2
        ]]);
    }
}
