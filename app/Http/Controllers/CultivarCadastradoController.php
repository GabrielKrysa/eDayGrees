<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CultivarCadastradoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cultivarsRegister');
    }

    public function register(Request $request)
    {
        $data = $request->all();

    }
}
