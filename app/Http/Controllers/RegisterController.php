<?php

namespace App\Http\Controllers;

use App\Http\Verifications;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Propriedade;
use App\User;
use function Symfony\Component\Console\Tests\Command\createClosure;

class RegisterController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Register(Request $req)
    {
        $data = array(
            'username' => $req->input('username'),
            'password' => bcrypt($req->input('password')),
            'nome' => $req->input('name'),
            'sobrenome' => $req->input('lastname'),
            'CPF' => $req->input('cpf'),
            'email' => $req->input('email'),
            'estado' => $req->input('selectestado'),
            'cidade' => $req->input('selectcidade'),
            'IDPergunta' => $req->input('selectpergunta'),
            'respostaPerguntaSeguranca' => $req->input('resposta')
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
        $veri = new Verifications();

        //dd($propriedade);

        if (!$veri->validaCPF($data['CPF'])) {
            return view('registro')->with('erroCpf', 'O CPF '.$data['CPF'].' é invalido');
        }

        if (!$user->verificaExistenciaCPF($data['CPF'])) {
            return view('registro')->with('erroCpfexiste', 'O CPF '.$data['CPF'].' já está cadastrado');
        }

        if ($user->verificaExistenciaEmail($data['email']) == false) {
            return view('registro')->with('erroEmail', 'Email '.$data['email'].' já cadastrado');
        }

        if ($user->verificaExistenciaUsername($user['username']) == false) {
            return view('registro')->with('erroUsername', 'Nome de usuário '.$user['username'].' já cadastrado');
        }

        if (!(strlen($req->input('password') >= 8))) {
            return view('registro')->with('erroSenhaCurta', 'Senha curta demais');
        }

        if ($req->input('password') != $req->input('repeatpassaword')) {
            return view('registro')->with('erroSenhaDif', 'Senhas não coincidem');
        }

        if ($propriedade['cultivar'] == "0") {
            return view('registro')->with('erroCultivar', 'Selecione um cultivar valido');
        }

        if ($propriedade['estado'] == "0") {
            return view('registro')->with('erroEstado', 'Selecione um estado valido');
        }

        if ($propriedade['cidade'] == "0" || $propriedade['cidade'] == null) {
            return view('registro')->with('erroCidade', 'Selecione uma cidade valida');
        }

        if ($user->Register($data)) {
            if ($prop->register($propriedade)) {
                return view('login')->with('alert', 'Usuário e propriedade cadastrados com sucesso, realize seu login!');
            }
        }
    }
}
