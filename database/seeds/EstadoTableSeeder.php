<?php

use App\Http\Controllers\GuzzleController;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = GuzzleController::guzzle('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
        foreach ($estados as $estado) {
            \App\Estado::create([
                "sigla" => $estado["sigla"],
                "nome" => $estado["nome"],
            ]);
        }
    }
}
