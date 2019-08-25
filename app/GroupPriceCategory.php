<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupPriceCategory extends Model
{
    //
    protected $table    = 'group_price_category';
    protected $fillable = ['id', 'price', 'title', 'description'];

    // RELASI dari table GROUP_BLOG_IMAGE dengan referensi table BLOGS
    // belongsTo = Many To One
    function group_price_category(){
    	return $this->belongsTo('App\CategoryModel','id_category');
    }
}
