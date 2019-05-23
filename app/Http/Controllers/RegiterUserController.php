<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\ModelProprietario;

class RegiterUserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function RegisterUser(Request $req)
    {
        $data = array(
            $req->input('name'),
            $req->input('lastname'),
            $req->input('cpf'),
            $req->input('email'),
            $req->input('username'),
            $req->input('password'),
            $req->input('repeatpassaword')
        );

        
    }
}
