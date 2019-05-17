<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelProprietario extends Model
{

    function __construct()
    {

    }

    function insertProprietario(array $data)
    {
        if (DB::table('proprietario')->insert($data)) {
            return view('index');
        } else {
            return view('registro');
        }
    }

    function selectProprietarioLogin()
    {
        $data = DB::table('proprietario')->select('login', 'senha')->get();
        return $data;
    }
}
