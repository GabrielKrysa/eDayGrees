<?php


namespace App\model;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Clima extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','temperaturaMaxima','temperaturaMinima','temperaturaMedia','precipitacao', 'umidadeRelativa', 'data',
    ];


}
