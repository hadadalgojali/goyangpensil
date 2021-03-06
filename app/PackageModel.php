<?php

namespace GoyangPensil;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model{
    protected $table    = 'package';
    protected $fillable = ['id', 'id_blog', 'title', 'duration', 'description'];

    // RELASI dari table PACKAGE dengan referensi table BLOGS
    // belongsTo = Many To One
    function group_blog(){
        return $this->belongsTo('GoyangPensil\BlogsModel','id_blog');
    }
}
