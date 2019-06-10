<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use app\Contato;


class ContatoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function salvarContato(Request $request)
    {
        $salvaContato = new Contato();

        $dados = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('Email'),
            'mensagem' => $request->input('Mensagem')
        );


        dd($dados);


        if ($salvaContato->salvaContato($dados)) {
            return view('mail')->with('messagem', 'Mensagem enviada com sucesso, lhe responderemos em até X dias por email');
        } else {
            return view('mail')->with('messagem', 'occoreu um erro, mensagem não enviada');
        }
    }
}
