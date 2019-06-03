<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopularBlogsModel extends Model
{
    //
    protected $table    = 'popular_blogs';
    protected $fillable = ['id', 'id_blog'];
}
