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
    return view('frontend.homepage');
});

Auth::routes();

Route::get('/register', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', function () {
      return redirect('/cp');
  });

  Route::get('/cp', 'HomeController@index')->name('home');
  Route::get('/cp/overview', 'FolderController@index');

  Route::get('/cp/folder/open/{id}', 'FolderController@show');
  Route::get('/cp/folder/send/{id}', 'FolderController@send');
  Route::get('/cp/folder/delete/{id}', 'FolderController@destroy');


  Route::get('/cp/profile', function () {
      return view('profile');
  });

  Route::post('/cp/profile', 'HomeController@storeProfile');

  Route::post('/cp/photo/upload', 'HomeController@store');

});
