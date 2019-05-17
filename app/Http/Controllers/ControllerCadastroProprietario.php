<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\ModelProprietario;

class ControllerCadastroProprietario extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function cadastro(Request $req)
    {
        $nome = $req->input('nomeUsuario');
        $sobrenome = $req->input('sobrenomeUsuario');
        $cpf = $req->input('cpfUsuario');
        $email = $req->input('emailUsuario');
        $login = $req->input('loginUsuario');
        $senha1 = $req->input('senhaUsuario');
        $senha2 = $req->input('senhaUsuario2');

        $data = array(
            'login' => $login,
            'senha' => $senha1,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'CPF' => $cpf,
            'cidade' => 'guarapuava',
            'estado' => 'parana'
        );


        $cadastro = new ModelProprietario();

        if($cadastro->insertProprietario($data)){
            return view('propriedade');
        }else{
            return view('registro');
        }

    }
}
