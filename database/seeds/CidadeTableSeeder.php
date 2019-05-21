<?php

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
        DB::unprepared(file_get_contents(dirname(__FILE__) . 'SQL Files/CidadeTableSeed.sql'));
    }
}
