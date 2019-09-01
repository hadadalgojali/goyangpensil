<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class BlogsModel extends Model{
    //
    protected $table = 'blogs';
    protected $fillable = ['id', 'id_user', 'title', 'project_count', 'icon'];

    // RELASI dari table BLOGS dengan referensi table GROUP_BLOG_IMAGE
    // Jenis Relasi = One To Many
  	function group_image(){
    	return $this->hasMany('App\GroupBlogImageModel','id_blog');
  	}

    public function blog_by_user(){
        return $this->belongsTo('App\UsersModel', 'id_user');
    }

    public function cover_blog(){
        return $this->hasMany('App\SetupBlogModel', 'id_blog');
    }
}
