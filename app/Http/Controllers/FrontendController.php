<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Courses;
use App\Categories;
use App\SignupRequests;
use App\User;
use App\PasswordRecovery;
use App\Gallery;
use Mail;
use DB;
use Illuminate\Support\Facades\Storage;
class FrontendController extends Controller
{
  public function get_data() {
   $file_n = storage_path('data2.csv');
   $file = fopen($file_n, "r");
   $all_data = array();
   $name = 0;
   while ( ($data = fgetcsv($file, 200, ",")) !==FALSE) {
      $all_data[$name] = $data[0];
      $name++;
    }
    $message = array();
    $number = 0;
    for ($i=1; $i < count($all_data); $i++) {
        $nuke = explode(';', $all_data[$i]);
        $getcourse = Courses::where("id",$nuke[1])->first();
        $getuser = User::where("id",$nuke[0])->first();
        $message[$number] = "ID of Student is: ".$nuke[0]."  Name: ".$getuser->name.", Mark for the Student: ".$nuke[2]."%, Course name: ".$getcourse->course_title;
        $number++;
    }
    return dd($message);
  }

  public function gallery(){
     $gallery = Gallery::orderBy('id','desc')->paginate(12);
     return view('frontend/gallery',compact('gallery'));
  }

  public function passwordreset(Request $request){
    $this->validate($request, [
    'resetemail' => 'required|max:30|email',
 ]);
     $get_user = User::where('email', $request->resetemail)->where('password', '!=', '')->first();
     if($get_user != null){
          $search_passwordrecovery = PasswordRecovery::where('user_id',$get_user->id)->first();
          if($search_passwordrecovery == null){
               $link = str_random(50);
               $createlink = PasswordRecovery::Create([
                'user_id' => $get_user->id,
                'link' => $link
               ]);
               $data = array('name'=>$get_user->name, 'surname'=>$get_user->surname, 'link' => $link, 'email' =>$get_user->email);
               Mail::send('controllemails/resetpassword', $data, function($message) use ($data)
               {
              $message->to($data['email'], '')->subject
                 ('Password recovery for '.$data['name']);
              $message->from('info@capabilityhr.co.za','CapabilityHr');
              });
          }else{
            $data = array('name'=>$get_user->name, 'surname'=>$get_user->surname, 'link' => $search_passwordrecovery->link, 'email' =>$get_user->email);
            Mail::send('controllemails/resetpassword', $data, function($message) use ($data)
            {
           $message->to($data['email'], '')->subject
              ('Password recovery for '.$data['name']);
           $message->from('info@capabilityhr.co.za','CapabilityHr');
           });
          }
           return response()->json('success');
     }else{
       return response()->json('exists');
     }
  }

  public function dataposted(Request $request){
      return dd($request->all());
   }

    public function coursedetails($id = null){
      return view('frontend.course');
    }

    public function getSearchCourse($id = null){
       $getcourses = Courses::where('course_title','LIKE','%'.$id.'%')->get();
       return response()->json($getcourses);
    }

    public function passwordcovery(Request $request){
      $this->validate($request, [
      'password' => 'required|min:5|required_with:confirm_password|same:confirm_password',
      'confirm_password' => 'required'
     ]);
      $user = User::find($request->id);
      $user->password = bcrypt($request->password);
      $user->save();
      $find_recovery = PasswordRecovery::where("user_id",$request->id)->first();
        $find_recovery->delete();
      return response()->json('success');
    }

    public function index(){
      $courses = Courses::orderby("created_at","desc")->paginate(3);
      return view('frontend/welcome',compact('courses'));
    }

    public function login(){
      return view('frontend.login');
    }

    public function passwordlink($id = null){
      if($id == ""){
        return back()->with('msg','error');
      }else{
        $getlink = PasswordRecovery::where('link',$id)->first();
        if($getlink == ""){
          return back()->with('msg','error');
        }else{
          $get_user = User::where("id",$getlink->user_id)->first();
          return view('frontend.resetpassword',compact('get_user'));
        }
      }
    }

    public function course(){
      $courses = Courses::all();
      $categories = Categories::all();
      return view('frontend/courses',compact('courses','categories'));
    }

    public function view_course($id = null){
      $course = Courses::where('course_link',$id)->first();
      $users = DB::Select("select * from users");
      if(! auth()->check()){
        return view('frontend/view_course',compact('course'));return view('frontend/view_course',compact('course'));
      }else{
        if(auth()->user()->role == "user"){
          return view('home/new_course_home_view',compact('course','users'));
        }else{
          return view('frontend/view_course',compact('course'));
        }
      }
    }

    public function user_finish_signup($id = null){
        $useer_cos = SignupRequests::where('link',$id)->first();
        if($useer_cos == null){
          return redirect('/account/signup');
        }else{
          $user = User::find($useer_cos->user_id);
           auth()->login($user);
          return view('frontend/new_password_account',compact('user'));
        }
    }
}
