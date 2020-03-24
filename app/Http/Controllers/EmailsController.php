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
use Mail;
class EmailsController extends Controller
{
    public function index(){
      return view('admin.messages.sendemails');
    }

    public function sendmail(Request $request){
      $this->validate($request, [
      'to' => 'required|email',
      'subject' => 'required',
      'content' => 'required'
     ]);
    session()->flash('msg', 'Task was successful!');

     $data = array('messages' =>$request->content, 'email' =>$request->to, 'subject' => $request->subject);

     Mail::send('controllemails/adminemail', $data, function($message) use ($data)
     {
    $message->to($data['email'], '')->subject
       ($data['subject']);
    $message->from('info@capabilityhr.co.za','CapabilityHr');
    });


       return response()->json("success");
    }
}
