<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogsModel extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['id', 'id_user', 'title', 'project_count'];

    // RELASI dari table BLOGS dengan referensi table GROUP_BLOG_IMAGE
    // Jenis Relasi = One To Many
  	function group_blog(){
    	return $this->hasMany('App\GroupBlogImageModel','id_blog');
  	}
}
