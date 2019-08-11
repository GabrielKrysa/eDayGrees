<?php

namespace App\Http\Controllers;

use App\User1;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    public function index(){
        return view('resetPassword');
    }

    function redefinirSenha(Request $request)
    {

        $senha = $request->input('password');
        $user = new User1();

        $data = array(
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'senha' => bcrypt($senha),
            'concordo' => $request->input('checkbox'),
            'IDPergunta' => $request->input('selectpergunta'),
            'respostaPerguntaSeguranca' => $request->input('resposta')
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

        if($user->verificaPerguntaSeguranca($data['cpf'],$data['IDPergunta'],$data['respostaPerguntaSeguranca']) == false){
            return view('redefinirsenha')->with('erroPergunta', 'Pergunta de segurança incorreta');
        }

        if ($user->uptadeLogin($data)) {
            return view('login')->with('alert', 'Senha alterada com sucesso, realize seu login!');
        }

    }
}
