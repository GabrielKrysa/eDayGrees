<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $fillable = [
        'id', 'descicao', 'oQueFazer', 'cultivar_cadastrado_id', 'data',
    ];
}
