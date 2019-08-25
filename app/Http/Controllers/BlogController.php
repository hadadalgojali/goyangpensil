<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\GroupBlogImageModel;
use App\BlogsModel;

class BlogController extends Controller{
    //
    public function product(){
      $blog       = DB::table('blogs')
      ->join('group_blog_image', 'group_blog_image.id_blog', '=', 'blogs.id')
      ->select('blogs.id', 'blogs.title', 'blogs.description')
      ->groupBy('blogs.id', 'blogs.title', 'blogs.description')
      ->get();

      $blog_image = DB::table('blogs')
      ->leftJoin('group_blog_image', 'group_blog_image.id_blog', '=', 'blogs.id')
      ->leftJoin('images', 'images.id', '=', 'group_blog_image.id_image')
      ->select('blogs.title', 'images.path', 'images.image', 'images.ext', 'images.updated_at')
      ->get();

      if (count($blog) == 0) {
        $blog = array();
      }

      if (count($blog_image) == 0) {
        $blog_image = array();
      }

      return view('pages/product-list/index', [
        'blog' => $blog,
        'blog_image' => $blog_image,
      ]);
    }
}
