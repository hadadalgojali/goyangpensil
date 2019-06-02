<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageListModel extends Model
{
    protected $table    = 'package_list';
    protected $fillable = ['id', 'id_package', 'description', 'price'];
}
