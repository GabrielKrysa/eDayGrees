<?php

use Illuminate\Database\Seeder;

class RelatorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relatorio')->insert([[
        'descricao' => 'Usuário e propriedade cadastrados',
        'oQueFazer' => "nada a ser feito",
        'propriedade_id' => 1,
        'data' => "02/05/2019"
    ], [
        'descricao' => 'Mudança de status da cultivar para gema algodão',
        'oQueFazer' => "continuar o bom gerenciamento da planta. Proximo estádio fenologico: Brotação",
        'propriedade_id' => 1,
        'data' => "05/05/2019"
    ], [
        'descricao' => 'Mudança de status da cultivar para brotação',
        'oQueFazer' => "continuar o bom gerenciamento da planta. Proximo estádio fenologico: Aparecimento da inflorescencia",
        'propriedade_id' => 1,
        'data' => "12/05/2019"
    ], [
        'descricao' => 'SUSPEIRA DE POSSIVEL SURGIMENTO DE ESCORIOSE',
        'oQueFazer' => "Periodo com probabilidade de ocorrência de Escoriose, observar vinhedo e realizar medidas de controle, como por exemplo tratamentos preventivos",
        'propriedade_id' => 1,
        'data' => "17/05/2019"
    ], [
        'descricao' => 'Mudança de status da cultivar para aparecimento da inflorescencia',
        'oQueFazer' => "continuar o bom gerenciamento da planta. Proximo estádio fenologico: Florescimento",
        'propriedade_id' => 1,
        'data' => "19/05/2019"
    ], [
        'descricao' => 'Mudança de status da cultivar para florescimento',
        'oQueFazer' => "continuar o bom gerenciamento da planta. Proximo estádio fenologico: Maturação das bagas",
        'propriedade_id' => 1,
        'data' => "25/05/2019"
    ], [
        'descricao' => 'SUSPEIRA DE POSSIVEL SURGIMENTO DE MÍLDIO',
        'oQueFazer' => "Periodo com probabilidade de ocorrência de Míldio, observar vinhedo e realizar medidas de controle, como por exemplo tratamentos preventivos",
        'propriedade_id' => 1,
        'data' => "29/05/2019"
    ], [
        'descricao' => 'Mudança de status da cultivar para inicio maturação das bagas',
        'oQueFazer' => "continuar o bom gerenciamento da planta. Proximo estádio fenologico: COLHEITA, se prepare",
        'propriedade_id' => 1,
        'data' => "05/06/2019"
    ], [
        'descricao' => 'Mudanca de status da cultivar para videira pronta para colheita',
        'oQueFazer' => "Realize a colheita, não existe mais nenhum estadío fenologico depois daqui. Parabéns.",
        'propriedade_id' => 1,
        'data' => "15/06/2019"
    ]]);
    }
}
