<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model{
    protected $table    = 'package';
    protected $fillable = ['id', 'id_blog', 'title'];
}
