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

// Route::get('/', function () {
//     return view('frontend.homepage');
// });

Route::get('/', 'PageController@index');

Route::get('/download/{token}', function() {
  echo 'Download';
});

Auth::routes();

Route::get('/register', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', function () {
      return redirect('/cp');
  });

  // Dashboard
  Route::get('/cp', 'HomeController@index')->name('home');

  // Overview
  Route::get('/cp/overview', 'FolderController@index');

  // Folders that are uploaded
  Route::get('/cp/folder/open/{id}', 'FolderController@show');
  Route::get('/cp/folder/send/{id}', 'FolderController@send');
  Route::get('/cp/folder/delete/{id}', 'FolderController@destroy');

  // Photo upload
  Route::get('/cp/photo', 'HomeController@create');
  Route::post('/cp/photo/upload', 'HomeController@store');

  // Profile pages
  Route::get('/cp/profile', function () {
      return view('backend.profile');
  });
  Route::post('/cp/profile', 'HomeController@storeProfile');
});
