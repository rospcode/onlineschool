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

//Route::get('/','HomeController@welcome');



Route::get('/','HomeController@login');

Route::get('/most-liked','HomeController@mostliked');

Route::get('/all-sdug','HomeController@allsdug');

Route::get('/up/{id?}','HomeController@uploadthis');



Route::get('/delete/this/{id?}','HomeController@delete');

Route::get('/logout','HomeController@logout');
Route::post('/login/in','LoginController@login');

Route::get('/email', function () {
  return view('email_read');
});


Route::get('/read_me', function () {
  return view('reader');
});

Route::get('/login_me', function () {
  return view('login_blade');
});



Route::get('/logout','HomeController@logout');
Route::post('/addlike','HomeController@like');
Route::post('/loadmore','HomeController@loadmore');
Route::post('/new','HomeController@filterthis')->name('get.new');
Route::post('/upload_image','HomeController@upload');
