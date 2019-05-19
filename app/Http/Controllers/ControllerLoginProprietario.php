<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\ModelProprietario;


class ControllerLoginProprietario extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function login(Request $req)
    {
        $login = $req->input('loginUsuario');
        $senha = $req->input('senhaUsuario');


        $query = new ModelProprietario();
        $dados = $query->selectProprietarioLogin();

        for ($i = 0; $i < sizeof($dados); $i++) {
            if ($login == $dados[$i]->login && $senha == $dados[$i]->senha){
                $log = true;
                break;
            }else{
                $log = false;
            }
        }

        if($log == true){
            return view('relatorio');
        }else{
            return view('login');
        }
    }
}
