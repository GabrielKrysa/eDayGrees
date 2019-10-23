<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'email',
        'mensagem'
    ];
}
