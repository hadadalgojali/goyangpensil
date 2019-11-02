<?php

namespace GoyangPensil;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table    = 'category';
    protected $fillable = ['id', 'category', 'icon'];

    // RELASI dari table BLOGS dengan referensi table GROUP_BLOG_IMAGE
    // Jenis Relasi = One To Many
    function group_price_category(){
  	   return $this->hasMany('GoyangPensil\GroupPriceCategory','id_category');
     }
}
