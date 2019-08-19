<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $connection = 'mysql';



    protected $fillable = [
        'fullname',
        'email',
        'password',
        'remember_token'
    ];
}
