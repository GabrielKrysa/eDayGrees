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
            'descricao' => 'TESTANDO TESTANDO',
            'propriedade_id' => 1
        ]);
    }
}
