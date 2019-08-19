<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CidadeEstado extends Model
{
    function getCidadeId($idCidade)
    {
        $users = DB::table('cidade')->select('nome')->where('id', '=', $idCidade)->get();

        return $users[0]->nome;
    }

    function getEstadoId($idEstado)
    {
        $users = DB::table('estado')->select('uf')->where('id', '=', $idEstado)->get();

        return $users[0]->uf;
    }
}
