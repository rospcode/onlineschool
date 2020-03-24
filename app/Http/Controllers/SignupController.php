<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SignupRequests;
use App\feed;
use Mail;

class SignupController extends Controller
{
    public function signup(Request $request){

        $this->validate($request, [
        'name' => 'required|max:20',
        'surname' => 'required|max:20',
        'email' => 'required|email|max:50|unique:users',
        'id_number' => 'required|unique:users',
        'phone' => 'required|unique:users'

        ]);

       $user = User::create([
         'avatar' => 'img/default.png',
         'name' => $request->name,
         'surname' => $request->surname,
         'id_number' => $request->id_number,
         'gender' => $request->gender,
         'age' => $request->age,
         'email' => $request->email,
         'phone' => $request->phone,
         'bio' => '',
         'last_login' => '',
         'password' => ''

       ]);
       $feed = feed::Create([
         'user_id' => $user->id,
         'action' => $user->name.', made a signup request, ID '.$user->id
       ]);
       $request = SignupRequests::create([
         'user_id' => $user->id,
         'approved' => 'no',
        'count_sent_mail' =>  '0',
        'action' => $user->name.' made a signup request',
        'link' => ''
       ]);


       $data = array('name'=>$user->name, 'surname'=>$user->surname, 'email' => $user->email);
      Mail::send('mail', $data, function($message) use ($data)
      {
         $message->to($data['email'], '')->subject
            ('Welcome to CapabilityHr');
         $message->from('info@capabilityhr.co.za','CapabilityHr');
      });

       return response()->json('success');
    }



    public function user_finish_signup(Request $request){
         $this->validate($request, [
         'password' => 'required|min:5|required_with:confirm_password|same:confirm_password',
         'confirm_password' => 'required'
         ]);

           $user_account = User::find(auth()->user()->id);

           $user_account->password = bcrypt($request->password);
           $user_account->last_login = date('Y-m-d H:i:s');
           $user_account->save();



           $con = SignupRequests::where('user_id', auth()->user()->id)->delete();
           $feeds = feed::create([
             'user_id' => auth()->user()->id,
             'action' => 'user ID: '.auth()->user()->id.' '.auth()->user()->name.' completed registration'
           ]);

           $data = array('name'=>$user_account->name, 'surname'=>$user_account->surname, 'phone' => $user_account->phone, 'date' => date('Y-m-d H:i:s'), 'email' => $user_account->email);

          Mail::send('controllemails/userregistered', $data, function($message) {
             $message->to('info@capabilityhr.co.za', '')->subject
                ('User Finished Registration');
             $message->from('info@capabilityhr.co.za','CapabilityHr');
          });

          $datas = array('name'=>$user_account->name, 'surname'=>$user_account->surname, 'email' => $user_account->email);
          Mail::send('controllemails/userfinished', $datas, function($message) use ($data)
          {
             $message->to($data['email'], '')->subject
                ('Welcome to the CapabilityHr Family');
             $message->from('info@capabilityhr.co.za','CapabilityHr');
          });

            return  redirect('u/home')->with('messa','Welcome to your new profile');
    }

}
