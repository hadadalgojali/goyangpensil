<?php

namespace GoyangPensil\Http\Controllers;

use Illuminate\Http\Request;
use GoyangPensil\BlogsModel;
use GoyangPensil\GroupBlogImageModel;
use GoyangPensil\GroupBlogCategoryModel;
use GoyangPensil\PackageModel;
use GoyangPensil\PackageListModel;

class BlogsController extends Controller{
    //
    public function product($id = null){
        $xmlFile = file_get_contents(storage_path('app/public/company.xml'));
        $xml = new \SimpleXMLElement($xmlFile);
        $title    = "Daftar Produk";
        $result   = true;
        $category = array();
        $package  = array();
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
          if ($portofolio->count() > 0) {
            $portofolio = BlogsModel::where('id', $id)->update(['viewers' => ((int)$portofolio[0]->viewers + 1)]);

            if ($portofolio) {
              $portofolio = BlogsModel::
              with('cover_blog')
              ->with('blog_by_user')
              ->where('id', $id)
              ->get();
              $category = GroupBlogCategoryModel::with('with_category')->where('id_blog', $id)->get();
              $package  = PackageModel::where('id_blog', $id)->get();
            }
          }

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
          'category'    => $category,
          'title'       => $title,
          'package'     => $package,
          'company'     => $xml,
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

    public function get_price(Request $request){
      $count= 0;
      $data = PackageListModel::with('group_package')->where('id_package', $request->post('id'))->get();
      if ($data->count() > 0) {
        $count = $data->count();
      }

      return view('pages/product-list/price', [
        'count'         => $count,
        'data'          => $data,
      ]);
    }

    public function get_message(Request $request){
      $count= 0;
      $data = PackageModel::where('id', $request->post('id'))->get();
      if ($data->count() > 0) {
        $count = $data->count();
      }

      return view('pages/product-list/message', [
        'count'         => $count,
        'data'          => $data,
      ]);
    }
}
