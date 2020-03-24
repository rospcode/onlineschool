<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a/visitors', function () {
  $ipdat = @json_decode(file_get_contents(
      "http://www.geoplugin.net/json.gp?ip=" . $ip));


    $data = \Location::get($ipdat->geoplugin_request);
    return view('visitors',compact('data'));
});

Route::post('/add/message','MessageController@index');


Route::get('popup', function () {

return view('popup');

});

Route::get('login', function(){
  return view('login');
});

Route::post('/u/login','LoginController@login');
