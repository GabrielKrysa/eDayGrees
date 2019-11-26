<?php

namespace App\Http\Controllers;

use App\Cultivare;
use App\Estado;
use Illuminate\Http\Request;

class CultivarCadastradoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cultivarsRegister', ["estados" => Estado::all(), "cultivares" => Cultivare::all()]);
    }

    public function register(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
