<?php

namespace GoyangPensil;
use Illuminate\Database\Eloquent\Model;

class SetupBlogModel extends Model{
    //
    protected $table = 'setup_blog';
    protected $fillable = ['id', 'app', 'path', 'file', 'id_blog'];
}
