<?php

namespace App\Http\Controllers;

use App\Cadastro_cultivare;
use App\Cidade;
use App\Clima;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $cultivares = Cadastro_cultivare::where('id_proprietario', Auth::user()->id)
            ->with(['cidade', 'estado', 'proprietario', 'cultivar'])
            ->get();
        $cidades = Cadastro_cultivare::where('id_proprietario', Auth::user()->id)
            ->distinct()
            ->get('id_cidade');

        $climas = [];
        foreach ($cidades as $item) {
            $city = Cidade::where('id', $item->id_cidade)->first();
            $climas[$city->nome] = Clima::where('cidade', $item->id_cidade)->get();
        }

        return view('report', [
            'cultivares' => $cultivares,
            'climas' => $climas,
        ]);
    }
}
