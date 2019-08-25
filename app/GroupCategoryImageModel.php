<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupCategoryImageModel extends Model
{
    //
    protected $table    = 'group_category_image';
    protected $fillable = ['id', 'id_image', 'id_category'];

    // RELASI dari table GROUP_BLOG_IMAGE dengan referensi table BLOGS
    // belongsTo = Many To One
    function group_catgory(){
      return $this->belongsTo('App\CategoryModel','id_category');
    }

    // RELASI dari table GROUP_BLOG_IMAGE dengan referensi table IMAGES
    // belongsTo = Many To One
    function group_image(){
  	   return $this->belongsTo('App\ImageModel','id_image');
    }
}
