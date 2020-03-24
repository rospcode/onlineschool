<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Categories;
use App\User;
use App\Courses;
use App\Enrolled;
use App\Enroll_history;
use App\Files;
use App\feed;
use App\TempMarks;
use App\course_marks;
use App\SignupRequests;
use App\CourseRequests;
use App\Graduates;
use Exporter;
use Mail;
class AdminRequestsController extends Controller
{
   public function edituser(Request $request, $id){
     $this->validate($request, [
     'name' => 'required|min:2',
     'surname' => 'required|min:2',
     'email' => 'required|max:30',
  ]);
  $getuser = User::where('email', $request->email)->first();
  if($request->email != null){
       $user = User::find($id);
       if($request->email != $user->email){
         return response()->json('email');
       }
     }
    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->email = $request->email;
    $user->save();
     return response()->json('success');
   }
   public function approveuserlink($id = null){
     if($id != null){
        $check_link = CourseRequests::where("link",$id)->first();
        if($check_link == null){
           return '404';
        }else{
          $check_enroll = Enrolled::where("user_id",$check_link->user_id)->where("courses_id",$check_link->courses_id)->first();
          $check_grad = Graduates::where("user_id",$check_link->user_id)->where("courses_id",$check_link->courses_id)->first();
          $user = User::where("id",$check_link->user_id)->first();
          $course = Courses::where("id",$check_link->courses_id)->first();
          if($check_enroll == "" && $check_grad == ""){
               $enrol = Enrolled::create([
                  'user_id' => $check_link->user_id,
                  'courses_id' => $check_link->courses_id
               ]);
               $data = array('name'=>$user->name, 'surname'=>$user->surname, 'course' => $course->course_title, 'email' => $user->email);
               Mail::send('controllemails/userenrollment', $data, function($message) use ($data)
               {
                  $message->to($data['email'], '')->subject
                     ('CapabilityHr course enrolledment');
                  $message->from('info@capabilityhr.co.za','CapabilityHr');
               });

                 $find_requests = CourseRequests::where("user_id",$check_link->user_id)->where("courses_id",$check_link->courses_id)->first();
                 $find_requests->delete();
                 $message = $user->name." ".$user->surname." has been successfully enrolled for: ".$course->course_title;
                 return view("frontend.approvalmessage",compact('message'));
          }else{
            $find_requests = CourseRequests::where("user_id",$check_link->user_id)->where("courses_id",$check_link->courses_id)->first();
            $find_requests->delete();
            $message = $user->name." ".$user->surname." has already been enrolled for the course: ".$course->course_title.".  or has graduated, enrollment deleted";
            return view("frontend.approvalmessage",compact('message'));
          }
        }
     }else{
        return '404';
     }
   }

    public function approvecourse($id = null,$course_id = null){
      $check_enroll = Enrolled::where("user_id",$id)->where("courses_id",$course_id)->first();
      $check_grad = Graduates::where("user_id",$id)->where("courses_id",$course_id)->first();
      if($check_enroll == "" && $check_grad == ""){
           $enrol = Enrolled::create([
              'user_id' => $id,
              'courses_id' => $course_id
           ]);
           $user = User::where("id",$id)->first();
           $course = Courses::where("id",$course_id)->first();

           $data = array('name'=>$user->name, 'surname'=>$user->surname, 'course' => $course->course_title, 'email' => $user->email);
           Mail::send('controllemails/userenrollment', $data, function($message) use ($data)
           {
              $message->to($data['email'], '')->subject
                 ('CapabilityHr course enrolledment');
              $message->from('info@capabilityhr.co.za','CapabilityHr');
           });
             $find_requests = CourseRequests::where("user_id",$id)->where("courses_id",$course_id)->first();
             $find_requests->delete();
             return back()->with("msg","User enrolled Successfully");
      }else{
        $find_requests = CourseRequests::where("user_id",$id)->where("courses_id",$course_id)->first();
        $find_requests->delete();
        return back()->with("msg","User already enrolled for the course or has graduated, enrollment deleted");
      }
    }

    public function course_requests_pay($id = null,$course_id = null){
      $find_requests = CourseRequests::where("user_id",$id)->where("courses_id",$course_id)->first();
      $find_requests->delete();
      return back()->with("msg","Request cancel, email sent to user");
    }

    public function userpws(Request $request,$id){
      $get_user = User::where('email',$request->email)->first();
      $get_user->password = bcrypt('1234567');
      $get_user->save();
      $data = array('name'=>$get_user->name, 'surname'=>$get_user->surname, 'email' => 'prosperrr@gmail.com', 'link' => 'link this');
      Mail::send('controllemails/changeddefault', $data, function($message) use ($data){
        $message->to($data['email'], '')->subject
           ('CapabilityHr');
        $message->from('info@capabilityhr.co.za','CapabilityHr');
     });
      return response()->json('success');
    }

   public function marksupload(Request $request){


     $file = fopen($request->ima, "r");
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
          $get_enroll = Enrolled::where("user_id",$nuke[0])->where("courses_id",$nuke[1])->first();
          $get_temp_marks = TempMarks::where("user_id",$nuke[0])->where("courses_id",$nuke[1])->first();
          if($get_enroll != null){
            $check_exists = TempMarks::create([
              'user_id' => $nuke[0],
              'courses_id' => $nuke[1],
              'course_marks' => $nuke[2]
            ]);
            $number++;
          }
      }
      return back()->with('msg','Done uploading student marks');
   }


   public function marksupdate($id){
      $getmarks = TempMarks::where("courses_id",$id);
      $getmarks->delete();
      return back()->with('msg','Marks deleted Successfully');
   }

   public function marksave($id){
     $get = TempMarks::where("courses_id",$id)->get();
     $cours = Courses::Where("id",$id)->first();
     $message = "";
     foreach ($get as $value) {
       $enroll = Enrolled::where("courses_id",$id)->where("user_id",$value->user_id)->first();
      $check_graduate = Graduates::where("courses_id",$id)->where("user_id",$value->user_id)->first();
      if($check_graduate != ""){
        $value->delete();
        $enroll->delete();
      }else{
         $upload = Graduates::create([
           'user_id' => $value->user_id,
           'courses_id' => $value->courses_id,
           'course_marks' => $value->course_marks,
           'enrolled' => $enroll->created_at
         ]);
         $value->delete();
         $enroll->delete();
      }
     }
    return redirect('/a/students/course/'.$cours->course_link)->with('msg','uploaded marks successfully');
   }


    public function take_down($id = null){
      $course = Courses::find($id);
     if($course->course_status == "Down"){
     $course->course_status = "Available";
     $course->save();
     return back()->with('msg','Course:'.$course->course_title.' is now up');
       }else{
     $course->course_status = "Down";
     $course->save();
     return back()->with('msg','Course:'.$course->course_title.' is now down');
     }

   }




    public function fileadd(Request $request){
      $this->validate($request, [
        'file_name' => 'required|max:40|unique:files',
        'file_type' => 'required',
      'course' => 'required',
      'file' => 'required|mimes:doc,docx,pdf'

      ]);
      $course = Courses::find($request->course);

      $image = $request->file('file');
      $name = $request->cat_code.'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img/documents');
      $image->move($destinationPath, $name);

      $file = Files::Create([
        'courses_id' => $request->course,
        'file_type' => '',
        'file_name' => $request->file_name,
        'file_type' => $request->file_type,
        'downloads' => '',
        'file' => $name
      ]);

      $feed = feed::Create([
        'user_id' => '',
        'action' => 'Uploaded Document named: '.$request->file_name.', for the course '.$course->course_title
      ]);

        return back()->with('msg',$request->file_name.' uploaded Successfully');
    }


   public function deleteuser($id){
     $user_req = SignupRequests::where("id", $id)->first();
     $user = User::find($user_req->id);
     if($user_req == null){
         return back()->with('msg',"user doesn't exist or is already approved");
     }
     $user_req->approved = "deleted";

     $user_req->save();

     $feed = feed::Create([
       'user_id' => $user_req->id,
       'action' => 'User ID: '.$user_req->id.' Account Request Deleted '
     ]);

       return back()->with('msg',"Deleted ".$user->name."'s Account");
   }


    public function approveuser($id){
      $user_req = SignupRequests::where("user_id", $id)->first();
      $user = User::find($user_req->user_id);
      if($user_req == null){
          return back()->with('msg',"user doesn't exist or is already approved");
      }
      $user_req->approved = "yes";
      $count = $user_req->count_sent_mail;
      $count++;
      $user_req->count_sent_mail = $count;
      $user_req->link = str_random(70);
      $user_req->save();
      $feed = feed::Create([
        'user_id' => $user_req->id,
        'action' => 'User ID:'.$user_req->id.' approved to signup'
      ]);

      $data = array('name'=>$user->name, 'surname'=>$user->surname, 'email' => $user->email, 'link' => $user_req->link);

     Mail::send('controllemails/welcome', $data, function($message) use ($data){
        $message->to($data['email'], '')->subject
           ('Account Approved');
        $message->from('info@capabilityhr.co.za','CapabilityHr');
     });

        return back()->with('msg',"email sent for ".$user->name." to create their passsword for the student account");
    }


    public function add_category(Request $request){
      $this->validate($request, [
      'cat_code' => 'required',
      'cat_title' => 'required|min:5|max:200',

  ]);


  if ($request->cat_thumbnail != '') {
    $this->validate($request, [
    'cat_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);
        $image = $request->file('cat_thumbnail');
        $name = $request->cat_code.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/thumbnails');
        $image->move($destinationPath, $name);


        $cat = Categories::Create([
            'category_code' => $request->cat_code,
            'category_title' => $request->cat_title,
            'category_thumbnail' =>  $name

        ]);

         return back()->with('msg', 'Successfully created a category!');
      }


    else{

      $cat = Categories::Create([
          'category_code' => $request->cat_code,
          'category_title' => $request->cat_title,
          'category_thumbnail' => '',

      ]);
    }


    return redirect('/a/add_category')->with('msg', 'Successfully created a category!');



    }

    public function coursesubmit(Request $request){
      $this->validate($request, [

      'course_title' => 'required|max:200|unique:courses',
      'course_category' => 'required|max:5',
      'course_cost' => 'required|max:200',
      'course_duration' => 'required|max:30',
      'course_time' => 'required|max:30',
      'content' => 'required|max:10000',
      'course_end' => '',
      'course_venue' => 'required|max:200',
      'course_status' => 'required|max:20'

  ]);

  $course_link = str_replace(" ","-",$request->course_title);



  if ($request->file != '') {


if($request->course_status == "Expires"){
  $this->validate($request, [
   'course_end' => 'required'

]);

  $image = $request->file('file');
  $name = $request->code.'.'.$image->getClientOriginalExtension();
  $destinationPath = public_path('/img/courses');
  $image->move($destinationPath, $name);


  $category = Courses::Create([
     'course_img' => $name,

    'course_title' => $request->course_title,
    'categories_id' => $request->course_category,
    'course_link' => $course_link,
    'course_cost' => $request->course_cost,
    'course_duration' => $request->course_duration,
    'course_time' => $request->course_time,
    'course_notes' => $request->content,
    'course_venue' => $request->course_venue,
    'course_end' => $request->course_end,
    'course_status' => $request->course_status,
    'cost_add_notes' => $request->cost_add_notes

  ]);

  if($request->a == "option1"){

    $allusers = User::all();
    foreach ($allusers as $user) {
      $data = array('name'=>$user->name, 'surname'=>$user->surname, 'email' => $user->email, 'course_title' => $request->course_title, 'price' => $request->course_cost, 'venue' => $request->course_venue, 'time' => $request->course_time, 'duration' => $request->course_duration);

        Mail::send('controllemails/new_course', $data, function($message) use ($data)
         {
        $message->to($data['email'], '')->subject
           ('New Course');
        $message->from('info@capabilityhr.co.za','CapabilityHr');
        });
    }




     return redirect('/a/courses')->with('msg', 'Successfully added a course!, emails sent to users');
  }else{
      return redirect('/a/courses')->with('msg', 'Successfully added a course!');
  }



}


    else {

      $image = $request->file('file');
      $name = $request->code.'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/img/courses');
      $image->move($destinationPath, $name);


      $category = Courses::Create([
        'course_img' => $name,
        'course_title' => $request->course_title,
        'categories_id' => $request->course_category,
        'course_link' => $course_link,
        'course_cost' => $request->course_cost,
        'course_duration' => $request->course_duration,
        'course_time' => $request->course_time,
        'course_notes' => $request->content,
        'course_venue' => $request->course_venue,
        'course_end' => '',
        'course_status' => $request->course_status,
        'cost_add_notes' => $request->cost_add_notes

      ]);


      if($request->a == "option1")
      {
        $allusers = User::where('role','user')->get();
        if(count($allusers) != 0){
          foreach ($allusers as $user) {
            $data = array('name'=>$user->name, 'surname'=>$user->surname, 'email' => $user->email, 'course_title' => $request->course_title, 'price' => $request->course_cost, 'venue' => $request->course_venue, 'time' => $request->course_time, 'duration' => $request->course_duration);

              Mail::send('controllemails/new_course', $data, function($message) use ($data)
               {
              $message->to($data['email'], '')->subject
                 ('New Course');
              $message->from('info@capabilityhr.co.za','CapabilityHr');
              });
          }
        }

        return redirect('/a/courses')->with('msg', 'Successfully added a course!, emails sent to users');

      }else{
         return redirect('/a/courses')->with('msg', 'Successfully added a course!');
      }



    }


  }else{
    $this->validate($request, [
    'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
]);
  }



    }


    public function get_users(Request $request){

      $user = User::where('role','!=','admin')->get();
      $users = array();
      $num = 0;
      for ($i=0; $i < count($user); $i++) {
        $get_enroll = Graduates::where("user_id",$user[$i]->id)->where("courses_id",$request->id)->get();
        $get_grad = Enrolled::where("user_id",$user[$i]->id)->where("courses_id",$request->id)->get();
        if(count($get_grad) == 0 && count($get_enroll) == 0){
          $users[$num] = $user[$i];
          $num++;
        }
      }
        return response()->json($users);
    }


    public function signupuser(Request $request){
      $this->validate($request, [
      'name' => 'required|max:20',
      'surname' => 'required|max:20',
      'email' => 'required|email|max:50|unique:users'
      ]);

     $user = User::create([
       'avatar' => 'img/default.png',
       'name' => $request->name,
       'surname' => $request->surname,
       'email' => $request->email,
       'password' => '',

     ]);
     return response()->json('success');
    }

    public function enroll_user(Request $request){
      $this->validate($request, [
      'user_enroll' => 'required',
      'course_enroll' => 'required',


  ]);
  $user = User::find($request->user_enroll);
  $course = Courses::find($request->course_enroll);
  $check = Enrolled::Where('user_id', $request->user_enroll)->Where('courses_id', $request->course_enroll)->first();
  $checkgrad = Graduates::where('user_id',$request->user_enroll)->Where('courses_id', $request->course_enroll)->first();
  if($check != null){
    return response()->json("already");
  }
  if($checkgrad != null){
    return response()->json("graduated");
  }


  $add_user = Enrolled::Create([
    'user_id' => $request->user_enroll,
    'courses_id' => $request->course_enroll
  ]);

  $add_history = Enroll_history::Create([
    'user_id' => $request->user_enroll,
    'note' => $course->course_title,
    'courses_id' => $course->id
  ]);

  $data = array('name'=>$user->name, 'surname'=>$user->surname, 'course' => $course->course_title, 'email' => $user->email);
  Mail::send('controllemails/userenrollment', $data, function($message) use ($data)
  {
     $message->to($data['email'], '')->subject
        ('CapabilityHr course enrolledment');
     $message->from('info@capabilityhr.co.za','CapabilityHr');
  });


    return response()->json("success");

    }
}
