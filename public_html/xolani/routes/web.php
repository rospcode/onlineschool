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

Route::get('/account/login', function () {
    return view('login');
});


Route::get('/account/forgot', function () {
    return view('forgot');
});

Route::get('/account/signup/{id?}','FrontendController@signup');

Route::post('/account/signuppost','FrontendController@signuppost')->name('account.signup');

Route::post('/account/loginpost','FrontendController@loginpost')->name('account.login');

Route::post('/account/forgotrecovery','FrontendController@forgotpassword')->name('account.forgot');

Route::get('/all','FrontendController@change_passwords');

Route::get('/sendmailtoeveryone','HomeRequestsController@sendemailtoeveryone');





Route::middleware('Admin')->group(function () {

	//admin side
Route::get('/a/home','AdminController@home');
Route::get('/a/block/{id?}','AdminController@block');
Route::get('/a/viewprofile/{id?}','AdminController@viewprofile');
Route::get('/a/downliners/{id?}','AdminController@downliners');
Route::get('/a/withdrawal','AdminController@withdrawal');

Route::get('/a/confirm/payment/{id?}','HomeRequestsController@confirmpayment');

Route::get('/a/sms','AdminController@sms');

Route::post('/a/sms/send','HomeRequestsController@sms')->name('send.sms');

Route::get('/a/confirm','AdminController@incoming_payments');

Route::get('/a/confirm/payment/incoming/{id?}','HomeRequestsController@confirm_incoming_payment');


});


Route::middleware('User')->group(function () {

	//user side
	
	Route::post('/u/reinvest','HomeRequestsController@reinvest');
Route::get('/u/home','HomeController@home');
Route::get('/u/deposit','HomeController@deposit');
Route::get('/u/transactions','HomeController@transactions');
Route::get('/u/withdraw','HomeController@withdrawal');
Route::get('/u/withdrawalhistory','HomeController@withdrawal_history');
Route::get('/u/referrals','HomeController@referral');
Route::get('/u/profile','HomeController@profile');
Route::get('/u/logout','HomeController@logout');

Route::get('/user/deposit/btc','HomeRequestsController@bitcoindeposit');






//payment
Route::get('/u/payment/{id?}','HomeController@complete_deposit');
Route::get('/u/deposit/cancel/{id?}','HomeRequestsController@delete_deposit');

Route::post('/user/change_profile','HomeRequestsController@profile')->name('user.change_profile');

Route::post('/user/change_profile/banking','HomeRequestsController@updatebank')->name('user.updatebank');

Route::post('/u/invitation','HomeRequestsController@invitation')->name('user.invitation');

//posts
Route::post('/user/deposit','HomeRequestsController@deposit')->name('user.deposit');


Route::post('/user/withdraw','HomeRequestsController@withdraw')->name('user.withdraw');

Route::post('/user/password','HomeRequestsController@password')->name('user.password');


Route::post('/user/upload','HomeRequestsController@upload');


});

Route::get('/daily/route','CronController@daily_job');

Route::get("/account/recovery/{id?}","FrontendController@recovery");

Route::post('/account/password','FrontendController@change_password')->name('account.change_password');

