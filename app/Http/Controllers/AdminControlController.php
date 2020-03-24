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
use App\Events;

class AdminControlController extends Controller
{

  public function change_date(Request $request){
    $get_event = Events::Where('event_name',$request->name)->first();
    if($get_event){
      $chain = explode("T",$request->new_date);
      $get_event->event_start_date = $chain[0];
      $get_event->save();
      return response()->json("Successfully, update event date");
    }else{
      return response()->json("Sorry!, event does not exits");
    }
  }


    public function addevent($id = null){
      $signuprequests = SignupRequests::all();
      $feeds_all = feed::orderBy('created_at','desc')->paginate(1000);
      $course = Courses::all();
      $files = Files::all();
      $students = User::where('role','!=','admin')->get();
      $enrolled = Enrolled::all();
      $feeds_count = feed::count();
      $reminders = Reminders::all();
      $events = Events::all();
      //$split = explode(" ",$reminders->created_at->diffForHumans());

       return view("admin.addevent",compact('feeds_all','feeds_count','reminders','course','files','students','enrolled','signuprequests','id','events'));
    }
}
