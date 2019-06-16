<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{
    //
    protected $table = 'auth';
    protected $fillable = ['id', 'username', 'password', 'ip', 'login_stat'];
}
