<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nome' => 'admin',
            'sobrenome' => 'admin',
            'email' => 'admin@admin.com',
            'CPF' => '000.000.000-00',
            'estado' => 'AD',
            'cidade' => 'AD',
            'IDPergunta' => 0,
            'respostaPerguntaSeguranca' => 'TESTE TESTE TESTE'
        ]);
    }
}
