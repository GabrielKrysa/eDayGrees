<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class ResetPassword extends Controller
{
    function redefinirSenha(Request $request)
    {

        $senha = $request->input('password');
        $user = new User();

        $data = array(
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'senha' => bcrypt($senha),
            'concordo' => $request->input('checkbox')
        );


        if ($user->verificaExistenciaCPF($data['cpf']) == true) {
            return view('redefinirsenha')->with('erroCPF', 'CPF não cadastrado');
        }

        if ($user->verificaExistenciaEmail($data['email']) == true) {
            return view('redefinirsenha')->with('erroEmail', 'Email não cadastrado');
        }

        if (!(strlen($senha) >= 8)) {
            return view('redefinirsenha')->with('erroSenhaCurta', 'Senha curta demais');
        }
        if ($data['concordo'] == null) {
            return view('redefinirsenha')->with('erroCheck', 'Você precisa concordar com a alteração');
        }

        if ($user->uptadeLogin($data)) {
            return view('login')->with('alert', 'Senha alterada com sucesso, realize seu login!');
        }

    }
}
