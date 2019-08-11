<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'users';

    protected $fillable = [
        'name_lastname',
        'email',
    ];

    protected $hidden = [
        'password',
        'remenber_token'
    ];

}
