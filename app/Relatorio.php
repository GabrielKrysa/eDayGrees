<?php

namespace App;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class Relatorio extends Model
{

    function guardaRelatorio($idPropriedade, $descricao, $oqueFazer) // id da propriedade que vai receber o aviso / descricao do aviso realizado
    {
        $data = date("j/m/Y");
        if (DB::table('relatorio')->insert(['propriedade_id' => $idPropriedade, 'descricao' => $descricao, 'oqueFazer' => $oqueFazer, 'data' => $data])) ;
    }

    function primeiroRelatorio($idPropriedade)
    {
        $date = date("j/m/Y");
        $data = [
            'descricao' => "Usuário e propriedade cadastrados",
            'oQueFazer' => "Nada a ser feito ainda",
            'propriedade_id' => $idPropriedade,
            'data' => $date
        ];
        DB::table('relatorio')->insert($data);
    }

    function atualizacaoGD($data)
    {
        $date = date("j/m/Y");
        DB::table('relatorio')->insert($data);
    }
}
