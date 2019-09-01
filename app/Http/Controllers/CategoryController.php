<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\GroupCategoryImageModel;

class CategoryController extends Controller{
    //
    public function category($id = null){
      $title = "Daftar Kategori";
      $result= true;
      if (!is_numeric($id) && strlen($id) > 0) {
        $result = CategoryModel::whereRaw('LOWER(`category`) LIKE ? ',[trim(strtolower($id)).'%']);
        if ($result->count() > 0) {
          $id = $result->get()[0]->id;
          $result = true;
        }else{
          $result = false;
          $title = "";
          $portofolio = array();
        }
      }

      if (($id!==null || strlen($id) > 0) && $result === true) {
        $title = "";
        // $portofolio = GroupCategoryImageModel::with('group_image')->with('group_catgory')->where('id_category', $id)->get();
        $portofolio = CategoryModel::where('id', $id)->get();
      }else if($result === true){
        // $portofolio = GroupBlogImageModel::with('group_image')->with('group_blog')->get();
        $portofolio = CategoryModel::get();
      }

      return view('pages/category/index', [
        'id'          => $id,
        'portofolio'  => $portofolio,
        'title'       => $title,
      ]);
    }

    public function get_images(Request $request){
      $prtofolio = GroupCategoryImageModel::with('group_image')->where('id_category', $request->post('id'))->skip($request->post('page'))->take(3)->get();
      echo json_encode(array(
        'message'   => "Load Success",
        'id_blog'   => $request->post('id'),
        'portofolio'=> $prtofolio,
        'count'     => count($prtofolio),
      ));
    }
}
