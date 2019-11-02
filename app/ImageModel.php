<?php

namespace GoyangPensil;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    //
    protected $table = 'images';
    protected $fillable = ['id', 'path', 'image', 'ext'];

    // RELASI dari table IMAGES dengan referensi table GROUP_BLOG_IMAGE
    // belongsTo = One To Many
  	function group_image(){
    	return $this->hasMany('GoyangPensil\ImageModel','id_image');
  	}
}
