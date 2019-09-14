<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthModel extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'auth';
    protected $fillable = ['id', 'username', 'password', 'ip', 'login_stat'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
