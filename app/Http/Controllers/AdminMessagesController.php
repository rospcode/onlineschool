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
use App\Messages;
use App\Events\PusherMessages;
use App\Events\UserMessageNotification;
use DB;

class AdminMessagesController extends Controller
{


    public function index(){
    $users = DB::SELECT("SELECT u.name,u.id as id, u.surname, u.avatar as avatar, u.status as presence,
(SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id AND messages.admins_read = 'unseen') as count,
(SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id) as message_count
from users u
WHERE u.role != 'admin' order by (SELECT messages.created_at FROM messages WHERE messages.user_id = u.id
ORDER BY messages.created_at DESC LIMIT 1) DESC");

      return view('admin.messages.compose',compact('users'));
    }

    public function messages(Request $request){
      $getmessages = User::with('getMessages')->find($request->id);
       if(count($getmessages) > 0){
         foreach($getmessages->getMessages as $messages){
           $change = Messages::where("admins_id",auth()->user()->id)->where("token", $messages->token)->first();
           $change->admins_read = "read";
           $change->save();
         }
       }
      return response()->json($getmessages);
    }



    public function sendmessage(Request $request){
      $st = str_random(7);
       $save = Messages::create([
          'user_id' => $request->id,
          'admins_id' => auth()->user()->id,
          'message' => $request->message,
          'user_read' => 'unseen',
          'admins_read' => 'read',
          'type' => 'sent',
          'token' => $st
       ]);
       $get = Messages::where('token',$st)->first();
       event(new UserMessageNotification($request->id,'new'));
      event(new PusherMessages('admin',$request->id,$request->message,$get->updated_at));
    }

    public function readmessage(Request $request){
      $get_messages = Messages::where("user_id",$request->id)->where("admins_read","unseen")->get();
      foreach($get_messages as $message){
         $message->admins_read = "read";
         $message->save();
      }

      $users = DB::SELECT("SELECT u.name,u.id as id, u.surname, u.avatar as avatar,
       (SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id AND messages.admins_read = 'unseen') as count,
       (SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id) as message_count
       from users u
       WHERE u.id = :id",['id' => $request->id]);
     return response()->json($users);
   }

   public function incomingusermessage(Request $request){

         $users = DB::SELECT("SELECT u.name,u.id as id, u.surname, u.avatar as avatar, u.status as presence,
          (SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id AND messages.admins_read = 'unseen') as count,
          (SELECT COUNT(*) FROM messages WHERE messages.user_id = u.id) as message_count
          from users u
          WHERE u.id = :id",['id' => $request->id]);
   return response()->json($users);
   }
}
