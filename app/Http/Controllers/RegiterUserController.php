<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\ModelProprietario;
use App\User;

class RegiterUserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function RegisterUser(Request $req)
    {
        $data = array(
            'username' => $req->input('username'),
            'password' =>bcrypt($req->input('password')),
            'nome' => $req->input('name'),
            'sobrenome' => $req->input('lastname'),
            'CPF' => $req->input('cpf'),
            'email' => $req->input('email'),
            'cidade' => 'Guarapuava',
            'estado' => 'PR'
        );

        $user = new User();
        if($user->Register($data)){
            dd("FOI");//implementar aqui a função que diz que cadastrou e puxa a tela de cadastro de propriedade
        }else{
            dd("NAO FOI");//implementar aqui função que diz que algo deu errado na hora do cadastro e dizer o que deu errado.
        }

    }
}
