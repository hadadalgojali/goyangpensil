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
Route::get('/logout', 'AuthController@logout');

Route::post('/login/custom', [
  'uses'  => 'AuthController@login',
  'as'    => 'login.custom'
]);

Route::post('/register/custom', [
  'uses'  => 'AuthController@register',
  'as'    => 'register.custom'
]);

Route::post('/update/profil', [
  'uses'  => 'UsersController@update',
  'as'    => 'update.profil'
]);

Route::get('/login/custom/redirect/{provider}', 'AuthController@redirect')
->where('social', 'facebook|google');

Route::get('/login/custom/callback/{provider}', 'AuthController@callback')
->where('social', 'facebook|google');


Route::group(['prefix'  => 'pages'], function(){
  Route::get('/contact', function () {
    $xmlFile = file_get_contents(storage_path('app/public/company.xml'));
    $xml = new \SimpleXMLElement($xmlFile);
    return view('pages/contact/index', [
      'company' => $xml,
    ]);
  });


  Route::get('/product/{id}', [
    'uses'  => 'BlogsController@product'
  ]);

  Route::get('/product', [
    'uses'  => 'BlogsController@product'
  ]);

  Route::get('/category/{id}', [
    'uses'  => 'CategoryController@category'
  ]);

  Route::get('/category', [
    'uses'  => 'CategoryController@category'
  ]);

  Route::get('/profil', [
    'uses'  => 'UsersController@index'
  ]);

  // Route::get('/product', [
  //   'uses'  => 'BlogController@product'
  // ]);

});

Route::group(['prefix'  => 'json'], function(){
    Route::post('/image/blog', 'BlogsController@get_images');
    Route::post('/image/category', 'CategoryController@get_images');
    Route::post('/auth/check_username', 'AuthController@check_username');
    Route::post('/auth/login', 'AuthController@check_login');
    Route::post('/auth/register', 'AuthController@check_register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
