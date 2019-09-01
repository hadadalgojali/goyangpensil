<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogsModel;
use App\GroupBlogImageModel;

class BlogsController extends Controller{
    //
    public function product($id = null){
        $title = "Daftar Produk";
        $result= true;
        if (!is_numeric($id) && strlen($id) > 0) {
          // $id = BlogsModel::whereRaw('LOWER(`title`) LIKE ? ',[trim(strtolower($id)).'%'])->get()[0]->id;
          $result = BlogsModel::whereRaw('LOWER(`title`) LIKE ? ',[trim(strtolower($id)).'%']);
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
          $portofolio = BlogsModel::where('id', $id)->get();
          // $portofolio = GroupBlogImageModel::with('group_image')->where('id_blog', $id)->get();
        }else if( $result === true){
          // $portofolio = GroupBlogImageModel::with('group_image')->with('group_blog')->get();
          $portofolio = BlogsModel::get();
        }

        if (count($portofolio) == 0) {
          $portofolio = array();
        }

        return view('pages/product-list/index', [
          'id'          => $id,
          'portofolio'  => $portofolio,
          'title'       => $title,
        ]);
    }

    public function get_images(Request $request){
      $prtofolio = GroupBlogImageModel::with('group_image')->where('id_blog', $request->post('id_blog'))->skip($request->post('page'))->take(3)->get();
      echo json_encode(array(
        'message'   => "Load Success",
        'id_blog'   => $request->post('id_blog'),
        'portofolio'=> $prtofolio,
        'count'     => count($prtofolio),
      ));
    }
}
