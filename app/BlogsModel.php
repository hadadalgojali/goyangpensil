<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogsModel extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['id', 'id_user', 'title', 'project_count'];
}
