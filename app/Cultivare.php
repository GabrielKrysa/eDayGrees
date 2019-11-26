<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivare extends Model
{
    protected $fillable = [
        'id', 'cultivar', 'ciclo',
        'temperatura_base', 'gemaAlgodao', 'brotacao',
        'florescimento', 'aparecimentoInflorescencia', 'inicioMaturacao',
        'colheita'
    ];
}
