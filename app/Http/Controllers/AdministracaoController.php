<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracaoController extends Controller
{
    public function index(){
        return view('administracao');
    }
}
