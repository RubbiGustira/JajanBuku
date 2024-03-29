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
    return view('index');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::group(['prefix'=>'user'], function () {
	Route::get('/mybook',function () {
		return view('user.mybook');
	});
});

Route::group(['prefix'=>'admin'], function(){

  Route::get('/',function() {
      return view('admin.index');
  });
// manajemen buku

  Route::group(['prefix'=>'buku'], function(){
    Route::get('/','BukuController@index');
    Route::get('create','BukuController@create');
    Route::post('/','BukuController@store');
    Route::get('{id}/edit','BukuController@edit');
    Route::post('{id}/update','BukuController@update');
    Route::delete('{id}','BukuController@destroy');
  });
// manajemen transaksi

  Route::group(['prefix'=>'transaksi'], function(){
    Route::get('/','TransaksiController@index');
    Route::get('create','TransaksiController@create');
    Route::post('/','TransaksiController@store');
    Route::get('{id}/edit','TransaksiController@edit');
    Route::post('{id}/update','TransaksiController@update');
    Route::delete('{id}','TransaksiController@destroy');
  });


  // manajemen user
  Route::group(['prefix'=>'user'], function(){
    Route::get('/','UserController@index');
    Route::get('create','UserController@create');
    Route::post('/','UserController@store');
    Route::get('{id}/edit','UserController@edit');
    Route::post('{id}/update','UserController@update');
    Route::delete('{id}','UserController@destroy');
  });

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
