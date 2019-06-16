<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupBlogImageModel extends Model
{
    //
    protected $table    = 'group_blog_image';
    protected $fillable = ['id', 'id_image', 'id_blog'];

    // RELASI dari table GROUP_BLOG_IMAGE dengan referensi table BLOGS
    // belongsTo = Many To One
    function group_blog(){
    	return $this->belongsTo('App\BlogsModel','id_blog');
  	}

    // RELASI dari table GROUP_BLOG_IMAGE dengan referensi table IMAGES
    // belongsTo = Many To One
  	function group_image(){
    	return $this->belongsTo('App\ImageModel','id_image');
  	}
}
