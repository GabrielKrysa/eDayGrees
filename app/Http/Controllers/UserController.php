<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function Register($user)
    {
        try {
            if(DB::table('users')->insert([$user])){
                return true;
            }else{
                return false;
            }

        } catch (QueryException $e) {
            return view('registro')->with('erro', '');
        }

    }

}
