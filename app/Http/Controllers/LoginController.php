<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login(Request $request)
    {
        $credentials = $request->all();

        $this->authAttemp($credentials);
    }

    function authAttemp($credentials)
    {
        $users = DB::collection('users')->get();
        dd($users);
        if (Auth::attempt($credentials)) {
            dd("FOI");
        } else {
            dd("NUM FOI");
        }
    }
}
