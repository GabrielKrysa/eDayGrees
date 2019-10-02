<?php

namespace App\Http\Controllers;

use App\Http\Verifications;
use App\Relatorio;
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

    public function index()
    {
        return view("registro");
    }

    public function Register(Request $req)
    {
        $data = array(
            'username' => $req->input('username'),
            'password' => bcrypt($req->input('password')),
            'email' => $req->input('email')
        );
        $user  = new User();
        $user::create($data);

        return view('login', ["mensagem" => "cadastro efetuado, realize seu login"]);
    }
}
