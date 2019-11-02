<?php

namespace GoyangPensil;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model{
    //
    protected $table = 'users';
    protected $fillable = ['id', 'first_name', 'last_name', 'phone', 'address', 'email', 'provider', 'provider_id'];
}
