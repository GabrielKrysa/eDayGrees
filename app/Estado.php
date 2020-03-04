<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'id', 'sigla', 'nome',
    ];

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
}
