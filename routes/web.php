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

Route::get('/', 'MainController@index');

Route::group(['prefix'  => 'pages'], function(){
  Route::get('/contact', function () {
    $xmlFile = file_get_contents(storage_path('app/public/company.xml'));
    // var_dump($xmlFile);die;
    $xml = new \SimpleXMLElement($xmlFile);
    return view('pages/contact/index', [
      'company' => $xml,
    ]);
  });


  Route::get('/product-list/{id}', [
    'uses'  => 'PortofolioController@product_list'
  ]);

});
