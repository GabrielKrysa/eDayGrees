<?php

namespace App;

use Illuminate\Database\QueryException;
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
        try {
            if(DB::table('users')->insert([$user])){
                return true;
            }else{
                return false;
            }

        } catch (QueryException $e) {
            return view('registro')->with('erro', '');
        }

    }

    function getUsername($NameUser)
    {
        $users = DB::table('users')->select('id')->where('nome', '=', $NameUser)->get();

        return $users[0]->id;
    }

    function verificaExistenciaCPF($cpf)
    {
        $data = DB::table('users')->select('CPF')->where('CPF', '=', $cpf)->get();
        if (count($data) == 0) {
            return true;
        } else {
            return false;
        }
    }

    function verificaExistenciaEmail($email)
    {
        $data = DB::table('users')->select('email')->where('email', '=', $email)->get();
        if (count($data) == 0) {
            return true;
        } else {
            return false;
        }
    }

    function verificaExistenciaUsername($username)
    {
        $data = DB::table('users')->select('username')->where('username', '=', $username)->get();
        if (count($data) == 0) {
            return true;
        } else {
            return false;
        }
    }


    function uptadeLogin($array)
    {
        if (DB::table('users')->where('CPF', '=', $array['cpf'])->update(['password' => $array['senha']])) {
            return true;
        } else {
            return false;
        }
    }
}
