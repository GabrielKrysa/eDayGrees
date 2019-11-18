<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = [
        'id', 'state_id', 'title', 'iso', 'iso_ddd',
        'status', 'slug', 'population', 'lat', 'long',
        'income_per_capita'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estate_id', 'id');
    }
}
