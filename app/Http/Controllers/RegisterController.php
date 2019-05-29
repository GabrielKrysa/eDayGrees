<?php

namespace App\Http\Controllers;
use App\Propriedade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\ModelProprietario;
use App\User;
use function Symfony\Component\Console\Tests\Command\createClosure;

class RegisterController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Register(Request $req)
    {
        $data = array(
            'username' => $req->input('username'),
            'password' =>bcrypt($req->input('password')),
            'nome' => $req->input('name'),
            'sobrenome' => $req->input('lastname'),
            'CPF' => $req->input('cpf'),
            'email' => $req->input('email'),
            'estado' => $req->input('selectestado'),
            'cidade' => $req->input('selectcidade')
        );

        $propriedade = array(
            'nomeProprietario' => $req->input('name'),
            'nomePropriedade' => $req->input('nomePropriedade'),
            'cultivar' => $req->input('tipoCultivar'),
            'estado' => $req->input('selectestado'),
            'cidade' => $req->input('selectcidade')
        );

        $user = new User();
        $prop = new Propriedade();


        echo  "<script>alert('Email enviado com Sucesso!);</script>";

        if($user->Register($data) && $prop->register($propriedade)){
            return redirect()->route('login')->with('alert-success','DEU BOA PORRA');
        }else{
            //RETORNAR ERRO PARA A VIEW
        }


    }
}
