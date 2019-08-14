<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('userRegister');
    }

    public function registerUser(Request $request)
    {
        $user = new User();
        $users = DB::collection('users')->get();

        $user->name_lastname = $request->get('name_lastname');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $password_confirm = $request->get('password_confirmation');



        foreach ($users as $u) {
            if ($u['email'] == $user->email) {
                return view('userRegister')->with('alert', 'email ja cadastrado');
            }
        }

        if ($user->password != $password_confirm) {
            return view('userRegister')->with('alert', 'senhas diferentes');
        }

        $user::create($user->getAttributes());

        return view('login')->with('alert','usário cadastrado com sucesso, realize seu login');
    }
}
