<?php

namespace App\Http\Controllers;


use App\Contato;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class ContatoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function salvarContato(Request $request)
    {
        $dados = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('Email'),
            'mensagem' => $request->input('Mensagem')
        );

        $salvaContato = new Contato();

        if ($salvaContato->salvaContato($dados)) {
            return view('mail')->with('message', 'Mensagem enviada com sucesso, lhe responderemos em até X dias por email');
        } else {
            return view('mail')->with('message', 'Campo de mensagem não preenchido');
        }
    }
}
