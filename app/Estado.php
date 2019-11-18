<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'id', 'title', 'letter', 'iso', 'slug', 'population',
    ];

    public function cidades()
    {
        return $this->hasMany(Cidade::class);
    }
}
