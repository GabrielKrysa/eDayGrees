<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class Clima extends Model
{
    function insertAuxClima($data)
    {
        try {
            if (DB::table('auxiliar_clima')->insert($data)) {
                return true;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }

    function deleteAuxClima()
    {
        try {
            if (DB::table('auxiliar_clima')->delete()) {
                return true;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }

    }

    function selectClimaPorCidade($cidade, $estado)
    {
        try {
            if ($dadosClimaticos = DB::table('auxiliar_clima')->select('temperatura', 'umidade', 'condicao')->where('cidade', '=', $cidade)->where('estado', '=', $estado)->get()) {
                return $dadosClimaticos;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    function selectCidadesEstados()
    {
        try {
            if ($cidadeEstado = DB::table('auxiliar_clima')->select('cidade', 'estado')->distinct()->get()) {
                return $cidadeEstado;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }

    function insertClima($dados)
    {
        try {
            if (DB::table('clima')->insert($dados)) {
                return true;
            } else {
                return false;
            }
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }
}
