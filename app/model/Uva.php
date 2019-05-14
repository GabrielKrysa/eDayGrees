<?php


namespace App\model;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Uva extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nome_cultivar','ciclo','temperatura_base',
    ];

}
