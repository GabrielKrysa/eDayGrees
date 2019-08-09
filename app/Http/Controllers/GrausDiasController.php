<?php

namespace App\Http\Controllers;

use App\Propriedade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrausDiasController extends Controller
{
    function atualizaGrausDias()
    {
        $cidadeEstadoClima = DB::table('clima')->select('id', 'cidade', 'estado', 'temperaturaMedia')->distinct('cidade')->get();
        $propriedadeCidadeEstado = DB::table('propriedade')->select('id', 'cidade', 'estado', 'Acumulo_graus')->get();

        foreach ($cidadeEstadoClima as $c) {
            for ($i = 0; $i < count($propriedadeCidadeEstado); $i++) {
                if ($propriedadeCidadeEstado[$i]->cidade == $c->cidade) {
                    $propriedadeModel = new Propriedade();
                    if ($c->temperaturaMedia >= 10) {
                        $sub = $c->temperaturaMedia - 10;
                        $calculo = $propriedadeCidadeEstado[$i]->Acumulo_graus + $sub;
                        
                    } else {
                        $calculo = $propriedadeCidadeEstado[$i]->Acumulo_graus + 0;
                    }
                    $id = $propriedadeCidadeEstado[$i]->id;

                    $propriedadeModel->atualizaGrausAcumulado($id, $calculo,$c->temperaturaMedia);

                }
            }
        }
    }
}
