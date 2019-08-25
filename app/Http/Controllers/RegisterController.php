<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('userRegister');
    }

    public function registerUser(Request $request)
    {
        $user = new User();
        $users = User::all();

        $erro_two = false;
        $erro_one = false;

        $user->fullname = $request->get('name_lastname');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        foreach ($users as $u) {
            $email = $u->email;
            if ($email == $user->email) {
                $erro_one = true;
                break;
            }
        }

        foreach ($users as $u) {
            $email = $u->fullname;
            if ($email == $user->fullname) {
                $erro_two = true;
                break;
            }
        }

        if ($erro_one && $erro_two) {
            $erro = "• Já existe um usuário cadastrado com esse nome e endereço de email, tente a opção de \"Redefinir senha\"";
            return view('userRegister')->with('erro', $erro);
        } else if ($erro_one) {
            $erro = "Endereço de email já cadastrado no sistema";
            return view('userRegister')->with('erro', $erro);
        }

        User::create($user->getAttributes());

        return view('login')->with('alert', 'usário cadastrado com sucesso, realize seu login');
    }
}
