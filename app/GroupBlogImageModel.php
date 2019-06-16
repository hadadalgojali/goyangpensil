<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupBlogImageModel extends Model
{
    //
    protected $table    = 'group_blog_image';
    protected $fillable = ['id', 'id_image', 'id_blog'];
}
