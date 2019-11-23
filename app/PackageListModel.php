<?php

namespace GoyangPensil;

use Illuminate\Database\Eloquent\Model;

class PackageListModel extends Model
{
    protected $table    = 'package_list';
    protected $fillable = ['id', 'id_package', 'description', 'price'];

    // RELASI dari table PACKAGE LIST dengan referensi table PACKAGE
    // belongsTo = Many To One
    function group_package(){
        return $this->belongsTo('GoyangPensil\PackageModel','id_package');
    }
}
