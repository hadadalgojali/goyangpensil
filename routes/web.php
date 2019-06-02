<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $pdo = DB::connection()->getPdo();

  if($pdo){
     echo "Connected successfully to database ".DB::connection()->getDatabaseName();
  } else {
     echo "You are not connected to database";
  }
    // return view('pages/dashboard/index');
});
