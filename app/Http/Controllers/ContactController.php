<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('mail');
    }

    public function save(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        DB::table('contatos')->insert(['nome' => $data["nome"],
            'email' => $data['Email'],
            'mensagem' => $data['Mensagem']]);

        return view('mail',["message"=>"Contato enviado com sucesso"]);
    }
}
