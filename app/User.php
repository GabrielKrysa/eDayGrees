<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'nome',
        'sobrenome',
        'email',
        'CPF',
        'estado',
        'cidade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remenber_token'
    ];

    public function Register($user)
    {

        if ($user != null) {
            DB::table('users')->insert([
                $user
            ]);
            return true;
        } else {
            return false;
        }
    }

}
