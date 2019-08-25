<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\ImageModel;
use Illuminate\Support\Facades\DB;
use App\GroupBlogImageModel;
use App\GroupCategoryImageModel;
use App\CategoryModel;
use App\GroupPriceCategory;

class PortofolioController extends Controller{
    //
    public function product_list($id = null){
      if (!is_numeric($id)) {
        $id = CategoryModel::whereRaw('LOWER(`category`) LIKE ? ',[trim(strtolower($id)).'%'])->get()[0]->id;
      }

      $portofolio = GroupCategoryImageModel::with('group_image')->where('id_category', $id)->get();
      if (count($portofolio) == 0) {
        $portofolio = array();
      }

      $category      = CategoryModel::with('group_price_category')->where('id', $id)->get();
      // $price         = GroupPriceCategory::with('group_price_category')->where('id_category', $id)->get();

      return view('pages/product-list/filter', [
        'id'         => $id,
        'portofolio' => $portofolio,
        'category'   => $category,
        // 'price'     => $price,
      ]);
    }
}
