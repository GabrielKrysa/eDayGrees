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
        DB::table('relatorio')->insert([
            'descricao' => 'TESTANDO TESTANDOTESTANDO TESTANDOTESTANDO TESTANDOTESTANDO TESTANDO',
            'oQueFazer'  => "nada a ser feito",
            'propriedade_id' => 1,
            'data' => "MM/DD/YY"
        ]);
    }
}
