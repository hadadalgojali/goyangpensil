<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    //
    protected $table = 'image';
    protected $fillable = ['id', 'path', 'image', 'ext'];
}
