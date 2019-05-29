<?php

namespace App;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
    function register($array)
    {
        $user = new User();
        $cidadeEstado = new CidadeEstado();

        $array['idproprietario'] = $user->getUsername($array['nomeProprietario']);

        $colunas = array();

        $colunas['cidade'] = $cidadeEstado->getCidadeId($array['cidade']);
        $colunas['estado'] = $cidadeEstado->getEstadoId($array['estado']);
        $colunas['id_proprietario'] = $array['idproprietario'];
        $colunas['id_cultivar'] = $array['cultivar'];
        $colunas['status'] = 'OK';
        $colunas['Acumulo_graus'] = 0;

        if (DB::table('propriedade')->insert($colunas)) {
            return true;
        } else {
            return false;
        }

    }
}
