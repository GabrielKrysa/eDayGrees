<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro_cultivare extends Model
{
    protected $fillable = [
        'id', 'id_cidade', 'id_estado', 'nome_propriedade', 'id_proprietario', 'id_cultivar', 'status', 'Acumulo_graus',
    ];

    public function cidade()
    {
        return $this->hasOne(Cidade::class, 'id', 'id_cidade');
    }

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'id_estado');
    }

    public function proprietario()
    {
        return $this->hasOne(User::class, 'id', 'id_proprietario');
    }

    public function cultivar()
    {
        return $this->hasOne(Cultivare::class, 'id', 'id_cultivar');
    }

}
