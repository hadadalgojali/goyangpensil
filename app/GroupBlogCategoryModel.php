<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupBlogCategoryModel extends Model
{
    //
    protected $table    = 'group_blog_category';
    protected $fillable = ['id', 'id_blog', 'id_category'];
}
