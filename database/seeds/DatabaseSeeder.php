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
        $this->call(PerguntaSegurancaSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(CidadeTableSeeder::class);
        $this->call(CultivarSeeder::class);
        $this->call(PropriedadeSeeder::class);
        $this->call(DoencasSeeder::class);
        $this->call(RelatorioSeeder::class);
        $this->call(RelatorioSeeder::class);
        $this->call(RelatorioSeeder::class);
        $this->call(RelatorioSeeder::class);
        $this->call(RelatorioSeeder::class);
    }
}
