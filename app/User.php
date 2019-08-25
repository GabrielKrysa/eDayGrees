<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    protected $connection = 'mysql';

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'remember_token'
    ];
}
