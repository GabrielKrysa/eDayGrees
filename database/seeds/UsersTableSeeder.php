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
            'username' => 'krysa',
            'password' => bcrypt('secret'),
            'nome' => 'Krysa',
            'sobrenome' => 'Krysa',
            'email' => 'teste@teste.com',
            'CPF' => Str::random(11),
            'estado' => Str::random(5),
            'cidade' => Str::random(2)
        ]);
    }
}
