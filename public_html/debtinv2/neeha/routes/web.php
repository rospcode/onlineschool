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
    return view('welcome');
});

Route::get('/about','FrontendController@about');

Route::get('/solutions', function () {
    return view('solutions');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/portal', function () {
    return view('portal');
});


Route::post('/contactform','EmailController@send_mail')->name('contactform');

Route::post('/uploadcv','UploadController@upload_cv')->name('uploadform');

Route::post('/form/subscribe','EmailController@subscribe');

Route::post('/form/login','EmailController@sendSmsTest')->name('login');

Route::get('/careers','CareerController@career');

Route::get('/resend/otp','EmailController@resend');
