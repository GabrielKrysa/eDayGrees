<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relatorio;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorio = new Relatorio();
        $data = $relatorio::where("propriedade_id", "=", auth()->user()->id)->get();

        return view('relatorio', ["data" => $data]);
    }
}
