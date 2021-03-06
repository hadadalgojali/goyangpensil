<?php

namespace GoyangPensil\Http\Controllers;

use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GoyangPensil\CategoryModel;
use GoyangPensil\BlogsModel;

class MainController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
		$blogs = BlogsModel::select('*', DB::raw('(SELECT count(*) FROM group_blog_image WHERE id_blog = blogs.id) as count_portofolio'))->orderBy('id', 'asc')->limit(6)->get();
        
		$popular = DB::table('blogs')
		->join('setup_blog', 'setup_blog.id_blog', '=', 'blogs.id')
		->join('group_blog_category', 'group_blog_category.id_blog', '=', 'blogs.id')
		->join('category', 'group_blog_category.id_category', '=', 'category.id')
		->select('blogs.id', 'blogs.title', 'blogs.description', 'setup_blog.app', 'setup_blog.path', 'setup_blog.file',
		DB::raw('group_concat(category.category) as category'))
		->groupBy('blogs.id','blogs.title')
		->orderBy('blogs.project_count','desc')
		->limit(3)
		->get();

		return view('pages/dashboard/index', [
			'blogs'   => $blogs,
			'popular' => $popular,
		]);
	}

	public function index_() {
		return view('index_');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create(){
		//
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request){
		//
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
