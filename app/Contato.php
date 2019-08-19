<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{
    function salvaContato($dados)
    {

        try {
            DB::table('contato')->insert($dados);
                return true;
        } catch (QueryException $query) {
            return false;
        }

    }
}
