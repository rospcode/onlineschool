<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\User;
use App\Courses;
use App\Enrolled;
use App\Enroll_history;
use App\Files;
use App\feed;
use App\SignupRequests;
use App\CourseRequests;

use App\Messages;
use Hash;
use Auth;
use Mail;



class HomeController extends Controller
{
    public function home(){
      $get_enrol = Enrolled::where('user_id', auth()->user()->id)->get();
      $get_course = array();
      for ($i=0; $i < count($get_enrol); $i++) {
          $get_course[$i] = Courses::where('id', $get_enrol[$i]->courses_id)->get();
      }

      return view('home/home',compact('get_course'));
    }




    public function courserequest(Request $request){


      if(auth()->check()){
         $check_exists = CourseRequests::where('user_id',auth()->user()->id)->where('courses_id',$request->course_id)->first();
         if($check_exists != ""){
             return back()->with('errormsg','You already made a request for this course');
         }else{
           $link = str_random(60);
           $cat = CourseRequests::Create([
             'user_id' => auth()->user()->id,
             'courses_id' => $request->course_id,
             'link' => $link
           ]);

            $course = Courses::Where("id",$request->course_id)->first();
           $data = array('name'=>auth()->user()->name, 'surname'=>auth()->user()->surname, 'link' => $link, 'id_number' => auth()->user()->id_number, 'course' => $course->course_title, 'email' => auth()->user()->email);
           Mail::send('controllemails/admin_course_request', $data, function($message)
           {
              $message->to('info@capabilityhr.co.za', '')->subject
                 ('CapabilityHr course enrolledment');
              $message->from('info@capabilityhr.co.za','CapabilityHr');
           });

          return back()->with('msg','Request for this course was successfull');

         }
      }
      return view('errors/404');
    }

    public function coursecancel(Request $request){
      if(auth()->check()){
         $check_exists = CourseRequests::where('user_id',auth()->user()->id)->where('courses_id',$request->course_id)->first();
         if($check_exists != ""){

            CourseRequests::destroy($check_exists->id);
          return back()->with('msg','Course request cancelled');
         }else{
           $cat = CourseRequests::Create([
             'user_id' => auth()->user()->id,
             'courses_id' => $request->course_id
           ]);



         }
      }
      return view('errors/404');
    }



    public function getinfo(){
      $get_not = SignupRequests::where("approved","no")->get();
      return response()->json(count($get_not));
    }
    public function getinfoo(){
      $get_not = SignupRequests::where("approved","deleted")->get();
      return response()->json(count($get_not));
    }
    public function getcourseuser($id = null){

        $users = User::all();
        $user = array();
        $count = 0;
        foreach ($users as $value) {
          $get_en = Enrolled::where("user_id", $value->id)->where("courses_id", $id)->first();
          if(count($get_en) == 0){
            $user[$count] = $value;
          }
          $count++;
        }


      return response()->json($user);
    }

    public function getnot(){
      $get_not = SignupRequests::all();
      return response()->json($get_not);
    }
    public function getnotcount(){
      $get_not = SignupRequests::where("read_feed", "no")->get();


      return response()->json(count($get_not));
    }

    public function readnot(){
      $get_not = SignupRequests::where("read_feed", "no")->get();
      foreach ($get_not as $value) {
        $value->read_feed = "yes";
        $value->save();
      }
      return 'did';

    }


    public function viewcourse($id = null){

      $course = Courses::find($id);

      return view('home/view-course',compact('course'));
    }

    public function profile(){
      return view('home/profile/profile');
    }

    public function searchcourse(Request $request){
      $this->validate($request, [
      'course_name' => 'required|min:3',

   ]);
       $search_name = $request->course_name;
       $getcourses = Courses::where('course_title','LIKE','%'.$request->course_name.'%')->get();
       if( auth()->check())
       return view('home/coursesearch',compact('getcourses','search_name'));
       else
       return view('frontend/coursesearch',compact('getcourses','search_name'));
    }



    public function password_change(){
      return view('home/profile/password');
    }
    public function basic_info(){
      return view('home/profile/basic_info');
    }




    //requestusers
    public function change_password(Request $request){
      $this->validate($request, [
      'current_password' => 'required|max:30',
      'new_password' => 'required|max:30|required_with:confirm_password|same:confirm_password',
      'confirm_password' => 'required|max:30',

   ]);
        $user = User::find(auth()->user()->id);

        if(Hash::check($request->current_password, $user->password)){
          $user->password = bcrypt($request->new_password);
          $user->save();
          return back()->with('msg','password changed');
        }else{
        return back()->with('errormsg','The old password you have entered is incorrect');
        }

      }

      public function profile_change(Request $request){
        $this->validate($request, [
        'file' => 'required|mimes:jpg,jpeg,png',
        'name' => 'required|max:30',
        'surname' => 'required|max:30',

        ]);

       $user = User::find(auth()->user()->id);
       $user->name = $request->name;
       $user->surname = $request->surname;
       $cat_code = str_random(20);

       $image = $request->file('file');
       $name = $cat_code.'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/user/img');
       $image->move($destinationPath, $name);

       $user->avatar = 'img/'.$name;
       $user->save();
       return back()->with('msg','information changed');
      }

      public function basic_change(Request $request){
        $this->validate($request, [
        'phone' => 'required|max:14',
        'bio' => 'required|max:500',
        'email' => 'required|max:30',

        ]);
         $user = User::find(auth()->user()->id);
         $user->phone = $request->phone;
         $user->bio = $request->bio;
         $user->email = $request->email;

         $user->save();
         return back()->with('msg','information change');

      }

      public function availablecourses(){
        $courses = Courses::all();
        $categories = Categories::all();
        return view('home/courses-available',compact('courses','categories'));
      }






      public function logout(){
          if(! auth()->check() ){
              return redirect('/account/login');
          }
           auth()->logout();
           return redirect('/account/login');

      }

}
