<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feed;
use App\Reminders;
use App\Categories;
use App\User;
use App\Courses;
use App\Enroll_history;
use App\Gallery;
use App\Enrolled;
use App\Files;
use App\Graduates;
use App\SignupRequests;
use App\CourseRequests;


class AdminController extends Controller
{
    public function home(){
      $signuprequests = SignupRequests::all();
      $feeds_all = feed::orderBy('created_at','desc')->paginate(1000);
      $course = Courses::all();
      $files = Files::all();
      $students = User::where('role','!=','admin')->get();
      $enrolled = Enrolled::all();
      $feeds_count = feed::count();
      $reminders = Reminders::all();


      return view('admin.home',compact('feeds_all','feeds_count','reminders','course','files','students','enrolled','signuprequests'));

    }

    public function timetable($id = null){
      $course = Courses::find($id);
      return view('admin.timetable.uploadtime',compact('course'));
    }

    public function getCoursenum(){
        $courses = Courses::all();
       return response()->json(count($courses));
    }

    public function getCoursenumrequests(){
       $courses = CourseRequests::all();
       return response()->json(count($courses));
    }

    public function getUsernum(){
        $user = User::all();
        $number = 0;
        foreach ($user as  $value) {
          if($value->role != "admin"){
             $number++;
          }
        }

       return response()->json($number);
    }

    public function getGradnum(){
        $user = Graduates::all();



       return response()->json(count($user));
    }

    public function graduates_view(){
       $signuprequests = SignupRequests::all();
       $graduates = User::orderBy('created_at','desc')->get();
       return view('admin.graduates',compact('signuprequests','graduates'));
    }

    public function graduates_list(){
       $signuprequests = SignupRequests::all();
       $graduates = User::orderBy('created_at','desc')->get();
       return view('admin.graduates_list',compact('signuprequests','graduates'));
    }

    public function getcourserequest(){
      $all_requests = CourseRequests::all();
      return view('admin.enrollment.courserequest',compact('all_requests'));
    }


    public function add_file(){
      $signuprequests = SignupRequests::all();
      $courses = Courses::all();
      return view('admin.files.add_file',compact('courses','signuprequests'));
    }

    public function view_profile($id = null){
      $signuprequests = SignupRequests::all();
      $user = User::find($id);
      $feeds = feed::where("user_id", $user->id)->get();
      return view('admin.users.viewprofile',compact('user','feeds','signuprequests'));
    }

    public function signuprequests(){

      $signuprequests = SignupRequests::all();
      return view('admin.users.signups',compact('signuprequests'));
    }

    public function view_files($id = null){
      $signuprequests = SignupRequests::all();
      $course = Courses::find($id);
      return view('admin.files.view_file',compact('course','signuprequests'));
    }

    public function requestusers(){
       $requests = SignupRequests::all();

       return view('admin.users.user_requests', compact('requests'));
    }
    public function requestusersdeleted(){
       $requests = SignupRequests::all();
       $signuprequests = SignupRequests::all();
       return view('admin.users.deleted_signuprequests', compact('requests','signuprequests'));
    }
    public function add_category(){
       $signuprequests = SignupRequests::all();
      $reminders = Reminders::all();
      return view('admin.categories.add_category',compact('reminders','signuprequests'));

    }

    ///students under course_end
     public function view_students_course($id = null){
        $signuprequests = SignupRequests::all();
       $course = Courses::where("id",$id)->first();
      return view('admin.course.viewstudents',compact('course','signuprequests'));
    }

    public function categories(){
      $signuprequests = SignupRequests::all();
      $categories = Categories::all();
      return view('admin.categories.categories',compact('categories','signuprequests'));

    }

    public function editcourse($id){
      $signuprequests = SignupRequests::all();
      $course = Courses::find($id);
      $categories = Categories::all();
      return view('admin.course.edit_file',compact('course','categories','signuprequests'));
    }

    public function enroll_history(){
      $signuprequests = SignupRequests::all();
      $enroll_ment = Enroll_history::all();
      return view('admin.enrollment.enroll_history',compact('enroll_ment','signuprequests'));

    }

    public function all_users(){
      $signuprequests = SignupRequests::all();
      $users = User::all();

      return view('admin.users.users',compact('users','signuprequests'));
    }

    public function alll_users(){
      $signuprequests = SignupRequests::all();
      $users = User::where("role","!=","admin")->get();
      $us = User::where("role","!=","admin")->first();
      $getfeed = feed::where('user_id', $us->id)->get();

      return view('admin.users.users_full',compact('users','us','getfeed','signuprequests'));
    }

    public function view_gallery(){
      $signuprequests = SignupRequests::all();
      $gallery = Gallery::all();
      return view('admin.gallery',compact('gallery','signuprequests'));
    }

    public function enroll(){
      $signuprequests = SignupRequests::all();
      $users = User::all();
      $courses = Courses::all();
      return view('admin.enrollment.user_enroll',compact('users','courses','signuprequests'));
    }

    public function edit_user($id){
      $signuprequests = SignupRequests::all();
      $user = User::find($id);
      return view('admin.users.edit_user',compact('user','signuprequests'));
    }

    public function graduates($id){
        $signuprequests = SignupRequests::all();
        $course = Courses::where("id",$id)->first();
      return view('admin.course.coursegrad',compact('signuprequests','course'));
    }


    public function add_course(){
      $categories = Categories::all();
      $signuprequests = SignupRequests::all();
      return view('admin.course.add_course',compact('categories','signuprequests'));
    }

    public function courses(){
      $courses = Courses::all();
      $categories = Categories::all();
      $signuprequests = SignupRequests::all();
      return view('admin.course.courses',compact('courses','categories','signuprequests'));
    }

    public function delete_category($id){
      $cate = Categories::where('id',$id)->first();

      $title = $cate->category_title;
      Categories::destroy($id);
      return redirect('/a/categories')->with('msg', 'Category '.$title.' deleted');
    }

    public function unblock_user($id){
      $user = User::find($id);
      $user->blocked = "no";
      $user->save();
      return back()->with('msg', 'User '.$user->name.' is now unblocked');
    }
    public function block_user($id){
      $user = User::find($id);
      $user->blocked = "yes";
      $user->save();
      return back()->with('msg', 'User '.$user->name.' is now blocked');
    }


    public function delete_user($id){
      $user = User::find($id);
      $feed = feed::Create([
        'user_id' => $user->id,
        'action' => 'User '.$user->name.' '.$user->surname.' deleted from the system'
      ]);
      $name = $user->name;

      User::destroy($id);
      return back()->with('msg', 'User '.$name.' deleted');
    }
}
