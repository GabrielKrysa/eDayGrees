<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class Relatorio extends Model{

    function guardaRelatorio($idPropriedade, $descricao, $oqueFazer) // id da propriedade que vai receber o aviso / descricao do aviso realizado  
    {
        if (DB::table('relatorio')->insert(['id_propriedade' => $idPropriedade, 'descricao' => $descricao, 'data' => $timeStamp, 'oqueFazer' => $oqueFazer]));
    }
    
}
