<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{
    function salvaContato($dados){

        if(DB::table('contato')->insert($dados)){
            return true;
        }else{
            return false;
        }
    }
}
