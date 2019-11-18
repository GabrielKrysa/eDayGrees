<?php

use Illuminate\Database\Seeder;

class CultivarCadastradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cadastro_cultivares')->insert([
            'cidade' => 'Taió',
            'estado' => 'SC',
            'id_proprietario' => 1,
            'id_cultivar' => 1,
            'status' => 'OK',
            'Acumulo_graus' => 152.2
        ], [
            'cidade' => 'Guarapuava',
            'estado' => 'PR',
            'id_proprietario' => 1,
            'id_cultivar' => 2,
            'status' => 'OK',
            'Acumulo_graus' => 153.2
        ]);
    }
}
