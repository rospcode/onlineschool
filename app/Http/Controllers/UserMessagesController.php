<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\User;
use App\Events\PusherMessages;
use App\Events\CountUnreadAdminMessages;


class UserMessagesController extends Controller
{
    public function UserMessages(){
      $messages = Messages::where("user_id", auth()->user()->id)->get();
      if(count($messages) > 0){
        foreach($messages as $message){
          if($message->user_read != "read"){
            $change = Messages::where('user_id',$message->user_id)->where('token',$message->token)->first();
            $change->user_read = "read";
            $change->save();
          }
        }
      }
        return view('home/message',compact('messages'));
    }

    public function sendmessages(Request $request){
      $st = str_random(7);
       $save = Messages::create([
          'user_id' => auth()->user()->id,
          'admins_id' => '1',
          'message' => $request->message,
          'user_read' => 'unseen',
          'admins_read' => 'unseen',
          'type' => 'usersent',
          'token' => $st
       ]);
      $get = Messages::where('token',$st)->first();
     event(new PusherMessages('user',auth()->user()->id,$request->message,$get->updated_at));

     $get_messages = Messages::where("admins_read","!=","read")->count();
     event(new CountUnreadAdminMessages($get_messages,auth()->user()->name,auth()->user()->surname));
     return response()->json($get->user_id);
    }

    public function messagescount()
     {
       $get_messages = Messages::where("admins_read","!=","read")->count();
      return response()->json($get_messages);
    }
}
