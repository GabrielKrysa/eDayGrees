<?php

use Illuminate\Database\Seeder;

class ProprietarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cont = 0;
        while ($cont < 10) {
            DB::table('proprietario')->insert([
                'login' => Str::random(5),
                'senha' => bcrypt('secret'),
                'nome' => Str::random(6),
                'sobrenome' => Str::random(6),
                'email' => Str::random(5) . '@teste.com',
                'CPF' => Str::random(11),
                'estado' => Str::random(5),
                'cidade' => Str::random(2),
            ]);
            $cont++;
        }
    }
}
