<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CultivarSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
    }
}
