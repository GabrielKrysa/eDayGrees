<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clima extends Model
{
    protected $fillable = [
        'id', 'temperaturaMaxima', 'temperaturaMinima', 'temperaturaMedia', 'condicao', 'umidadeRelativa', 'data',
        'cidade', 'estado'
    ];
}
