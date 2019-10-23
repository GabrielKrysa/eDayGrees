<?php

namespace App\Http\Controllers;

use App\Adminstracao;
use App\Contato;
use App\Propriedade;
use App\User;
use Illuminate\Http\Request;

class AdministracaoController extends Controller
{
    public function index(){
        $adm = new Adminstracao();

        $data[] =  Propriedade::count();
        $data[] = User::count();
        $contatos = Contato::all();
        return view('administracao',['data' => $data, 'contatos' => $contatos]);
    }
}
