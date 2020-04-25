<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auxiliar_clima extends Model
{
    protected $fillable = [
        'id',
        'temperatura',
        'umidade',
        'condicao',
        'cidade',
        'estado'
    ];

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'estado');
    }

    public function cidade()
    {
        return $this->hasOne(Cidade::class, 'id', 'cidade');
    }
}
