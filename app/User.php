<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'nom_completo', 'no_cuenta', 'email', 'password', 'rol'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
