<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\ImageModel;
use Illuminate\Support\Facades\DB;
use App\GroupBlogImageModel;
use App\CategoryModel;

class PortofolioController extends Controller
{
    //
    public function product_list($id = null){
      if (!is_numeric($id)) {
        $id = CategoryModel::whereRaw('LOWER(`category`) LIKE ? ',[trim(strtolower($id)).'%'])->get()[0]->id;
      }

      $portofolio = GroupBlogImageModel::with('group_image')->where('id_blog', $id)->get();
      if (count($portofolio) == 0) {
        $portofolio = array();
      }
      $category      = CategoryModel::where('id', $id)->get();

      // $portofolio      = GroupBlogImageModel::with(['group_blog' => function($query) {
      //     $query->where('id_blog', 4);
      // }, 'group_image'])->get();

      return view('pages/product-list/index', [
        'id'         => $id,
        'portofolio' => $portofolio,
        'category'   => $category,
      ]);
    }
}
