<?php

namespace App\Http\Controllers;

use App\Cadastro_cultivare;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $cultivares = Cadastro_cultivare::where('id_proprietario', Auth::user()->id)
            ->with(['cidade','estado','proprietario','cultivar'])
            ->get();

        return view('report', ['cultivares' => $cultivares]);
    }
}
