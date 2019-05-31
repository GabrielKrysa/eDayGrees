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
            'username' => 'damin',
            'password' => bcrypt('admin'),
            'nome' => 'admin',
            'sobrenome' => 'admin',
            'email' => 'admin@admin.com',
            'CPF' => '000.000.000-00',
            'estado' => 'AD',
            'cidade' => 'AD'
        ]);
    }
}
