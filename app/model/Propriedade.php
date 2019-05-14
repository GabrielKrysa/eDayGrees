<?php


namespace App\model;



use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Propriedade extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nome','nome_propriedade','id_Cultivar','AcumuloAtualizado', 'status',
    ];

}
