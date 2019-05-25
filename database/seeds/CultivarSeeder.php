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
        DB::table('cultivar')->insert([[
            'cultivar' => 'Isabel/IAC 766',
            'ciclo' => 'medio',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Isabel/IAC 572',
            'ciclo' => 'medio',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Rubea/IAC 766',
            'ciclo' => 'precoce',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Rubea/IAC 572',
            'ciclo' => 'precoce',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Rubea/420-A',
            'ciclo' => 'precoce',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Chardonnay',
            'ciclo' => 'tardio',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Merlot',
            'ciclo' => 'tardio',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Pinot Noir',
            'ciclo' => 'tardio',
            'temperatura_base' => 10
        ], [
            'cultivar' => 'Tannat',
            'ciclo' => 'tardio',
            'temperatura_base' => 10
        ]]);
    }
}
