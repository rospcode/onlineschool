<?php
use App\Events\PusherMessages;
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

//testing PUSHER_A
Route::get('/push',function(){
    return view('welcome');
});

Route::get('/sender',function(){
event(new PusherMessages());
});

Route::post('/a/send/mesage','AdminMessagesController@sendmessage')->name('admin.message');

//frontendend


Route::get('/','FrontendController@index');
Route::get('/getinfo','HomeController@getinfo')->name('ajax-crud');
Route::get('/getinfoo','HomeController@getinfoo')->name('ajax-crudd');
Route::get('/getnot','HomeController@getnot')->name('getNotifications');
Route::get('/readnot','HomeController@readnot')->name('readNotifications');
Route::get('/countnot','HomeController@getnotcount')->name('getnotcount');
Route::get('/countmessage','UserMessagesController@messagescount')->name('messagecount');
Route::get('/getcourseusers/{id?}','HomeController@getcourseuser')->name('gecoursesuserr');
Route::get('/getCoursenum','AdminController@getCoursenum')->name('getCoursenum');
Route::get('/getCoursenumrequests','AdminController@getCoursenumrequests')->name('getCoursenumrequests');
Route::get('/getUsernum','AdminController@getUsernum')->name('getUsernum');
Route::get('/getGradnum','AdminController@getGradnum')->name('getGradnum');
Route::get('/getSearchCourse/{id?}','FrontendController@getSearchCourse')->name('getSearchCourse');

//password recover
Route::post('/resetpass','FrontendController@passwordreset')->name('resetpassword');
Route::get('/user/resetpasswor/','FrontendController@resetpassword');
Route::get('/user/resetpassword/session/{id?}','FrontendController@passwordlink');
Route::post('/passwordrecover','FrontendController@passwordcovery')->name('reset.password');
Route::get('/data','FrontendController@get_data');
Route::post('/ata','FrontendController@dataposted')->name('data');

//login routes
Route::post('/login',"LoginController@login")->name('account.login');
 Route::post('/signup',"SignupController@signup")->name('account.signup');

Route::get('/account/login','FrontendController@login');
 Route::get('/account/signup', function () {
    return view('frontend/signup');
});
  Route::get('/w/training', function () {
    return view('frontend/training');
  });
  Route::get('/password/reset', function () {
    return view('frontend/password-retrieval');
  });
  Route::get('/gallery','FrontendController@gallery');
  Route::get('/w/courses','FrontendController@course');
  Route::get('/view/course/{id?}','FrontendController@view_course');
//user create password_meter
  Route::get('/user/signup/session/{id}','FrontendController@user_finish_signup');
  Route::post('/user/sign','SignupController@user_finish_signup')->name('finish.signup');
//users_b
  Route::post('/u/view/search','HomeController@searchcourse')->name('course.search');
  Route::middleware('useraccess')->group(function () {
  Route::get('/u/home','HomeController@home');
  Route::get('/u/profile','HomeController@profile');
  Route::get('/u/basic_info','HomeController@basic_info');
  Route::get('/u/password/change','HomeController@password_change');
  Route::get('/u/view/course/{id?}','HomeController@viewcourse');
  Route::post('/u/change_password','HomeController@change_password')->name('password.change');
  Route::post('/u/profile_change','HomeController@profile_change')->name('profile.change');
  Route::post('/u/basic','HomeController@basic_change')->name('basic.change');


  //user messages
  Route::get('/u/message','UserMessagesController@UserMessages');
  Route::post('/u/user/messages','UserMessagesController@sendmessages')->name('user.messages');
  //user requesting course
  Route::post('/u/requestingcourse','HomeController@courserequest')->name('request.user.course');
  Route::post('/u/requestingcoursecancel','HomeController@coursecancel')->name('cancel.user.course');
  Route::get('/u/available/courses','HomeController@availablecourses');

});

  //just users_b





    Route::get('/logout','HomeController@logout');
//admin panel
    Route::middleware('admin')->group(function () {

    Route::get('/a/home','AdminController@home');
    Route::get('/a/add_file','AdminController@add_file');
    Route::get('/a/add_category','AdminController@add_category');
    Route::get('/a/categories','AdminController@categories');

    Route::get('/a/user/course/approve/session/{id?}','AdminRequestsController@approveuserlink');

    Route::get('/a/courses','AdminController@courses');
    Route::get('/a/dump/category/{id?}','AdminController@delete_category');
    Route::get('/a/dump/user/{id?}','AdminController@delete_user');
    Route::get('/a/requests','AdminController@requestusers');
    Route::get('/a/requests/removed','AdminController@requestusersdeleted');

    //TimeTable
    Route::post('/a/uploadtimetable','TimetableController@uploadtimetable')->name('admin.upload.timetable');
    Route::post('/a/delete/timetable','TimetableController@deletetime')->name('delete.timetable');
    Route::get('/a/upload/table/{id?}','AdminController@timetable');

    Route::get('/a/view_files/{id?}','AdminController@view_files');
    Route::get('/a/profile/{id?}','AdminController@view_profile');
    Route::get('/a/edit_course/{id?}','AdminController@editcourse');
    Route::get('/a/signup/requests','AdminController@signuprequests');
    Route::get('/a/takedown/{id?}','AdminRequestsController@take_down');
    Route::get('/a/sendmail','EmailsController@index');
    Route::post('/a/sendmail','EmailsController@sendmail')->name('send.mail');
    Route::get('/a/course/requests','AdminController@getcourserequest');

    Route::get('/a/students/course/{id?}','AdminController@view_students_course');
    Route::get('/a/graduates/{id?}','AdminController@graduates');

    //reminders
    Route::post('/a/addreminder','ReminderController@add_reminder')->name('admin.add.reminder');
    Route::get('/a/reminder/delete/{id?}','ReminderController@delete_reminder');

    Route::get('/a/graduates_users/all','AdminController@graduates_view');
    Route::get('/a/graduates_users/list','AdminController@graduates_list');


    Route::get('/a/course/approve/{id?}/{course_id?}','AdminRequestsController@approvecourse');
    Route::get('/a/course_requests/delete/{id}/{course?}','AdminRequestsController@course_requests_pay');

   //uploading Marks
   Route::post('/a/marksupload','AdminRequestsController@marksupload')->name('marksupload');
   Route::get('/a/marksupdate/{id?}','AdminRequestsController@marksupdate');
   Route::get('/a/savemarks/{id?}','AdminRequestsController@marksave');

   ///Messages

    Route::get('/a/messages','AdminMessagesController@index');
    Route::post('/a/getusermessages','AdminMessagesController@messages')->name('messages');
    Route::post('/a/readmessage','AdminMessagesController@readmessage')->name('admin.received');
    //unblock or block
    Route::get('/a/block/{id?}','AdminController@block_user');
    Route::get('/a/unblock/{id?}','AdminController@unblock_user');
    //unblock or block

    Route::get('/a/users','AdminController@all_users');
    Route::get('/a/users/full','AdminController@alll_users');
    Route::get('/a/user/approve/{id?}','AdminRequestsController@approveuser');
    Route::get('/a/user/delete/{id?}','AdminRequestsController@deleteuser');
    Route::get('/a/add_course','AdminController@add_course');
    Route::get('/a/edit_user/{id?}','AdminController@edit_user');
    Route::get('/a/enroll/user','AdminController@enroll');
    Route::get('/a/enroll/history','AdminController@enroll_history');
    Route::get('/a/gallery','AdminController@view_gallery');
    Route::post('/add_category','AdminRequestsController@add_category')->name('admin.add_category');
    Route::post('/enroll','AdminRequestsController@enroll_user')->name('admin.enroll.user');
    Route::post('/enrollauser','AdminRequestsController@get_users')->name('admin.get.user');
    Route::post('/edituser/{id?}','AdminRequestsController@edituser')->name('edit.user');
    Route::post('/usersignup','AdminRequestsController@signupuser')->name('admin.signup.user');
    Route::post('/addfiles','AdminRequestsController@fileadd')->name('admin.add.files');

    //Adding a course
    Route::post('/courseform','AdminRequestsController@coursesubmit')->name('course.form');




});
