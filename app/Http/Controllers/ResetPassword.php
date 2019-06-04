<?php

namespace App\Http\Controllers;

use App\Http\Verifications;
use App\User;
use Illuminate\Http\Request;

class ResetPassword extends Controller
{
    function redefinirSenha(Request $request)
    {
        $verificaCPF = new Verifications();
        $senha = $request->input('password');
        $user = new User();
        $data = array(
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'senha' => bcrypt($senha),
            'concordo' => $request->input('checkbox')
        );

        //dd($data);

        if ($data['concordo'] != null) {
            if ($user->getCPF($data['cpf'])) {
                if ($user->uptadeLogin($data)) {
                    return view('login');
                } else {
                    dd("ERRO 3");
                    return view('redefinirSenha');
                }
            } else {
                dd("ERRO 2");
                return view('redefinirSenha');
            }
        } else {
            dd("ERRO 1");
            return view('redefinirSenha');
        }
    }
}
