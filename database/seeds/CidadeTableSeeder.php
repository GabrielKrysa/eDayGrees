<?php

use App\Http\Controllers\GuzzleController;
use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
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
            $id = $estado["id"];
            $cidades = GuzzleController::guzzle("https://servicodados.ibge.gov.br/api/v1/localidades/estados/$id/municipios");
            foreach ($cidades as $cidade) {
                $uf = \App\Estado::where('nome', $estado['nome'])->first();
                \App\Cidade::create([
                    "state_id" => $uf->id,
                    "nome" => $cidade['nome'],
                ]);
            }
        }
    }
}
