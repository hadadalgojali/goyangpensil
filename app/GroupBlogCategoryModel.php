<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupBlogCategoryModel extends Model
{
    //
    protected $table    = 'group_blog_category';
    protected $fillable = ['id', 'id_blog', 'id_category'];

    public function with_blog(){
        return $this->belongsTo('App\BlogsModel', 'id_blog');
    }

    public function with_category(){
        return $this->belongsTo('App\CategoryModel', 'id_category');
    }
}
