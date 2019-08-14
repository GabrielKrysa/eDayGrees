<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request)
    {
        $credentials = $request->all();

        $this->authAttemp($credentials);
    }

    function authAttemp($credentials)
    {

        if (Auth::attempt($credentials)) {
            dd("FOI");
        } else {
            dd("NUM FOI");
        }
    }
}
