<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelCadastroProprietario extends Model
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
}
