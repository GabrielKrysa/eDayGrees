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
            'id_proprietario' => 1,
            'id_cultivar' => 1,
            'status' => 'OK',
            'Acumulo_graus' => 152.2
        ], [
            'cidade' => 'Santo Augusto',
            'estado' => 'RS',
            'id_proprietario' => 1,
            'id_cultivar' => 3,
            'status' => 'OK',
            'Acumulo_graus' => 856.2
        ],[
            'cidade' => 'Guarapuava',
            'estado' => 'PR',
            'id_proprietario' => 1,
            'id_cultivar' => 5,
            'status' => 'OK',
            'Acumulo_graus' => 369.2
        ]]);
    }
}
