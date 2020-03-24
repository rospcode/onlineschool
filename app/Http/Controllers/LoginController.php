<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserOnline;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){
      $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
  ]);

  $data = array(
     'email' => $request->email,
     'password' => $request->password,
  );
  $data = $request->only('email','password');
  if( ! auth()->attempt($data)){
      session()->flash('msg', 'Email or Password is incorrect');
     return view('frontend.login');
  }




  $getuser = User::where('email',$request->email)->first();
  if($getuser->blocked == 'yes')
  return back()->with('msg','Your account has been blocked, please email administrator for further assistants.');
  else
  {



    $getuser->status = "Online";
    $getuser->last_login = date('Y-m-d H:i:s');
    $getuser->login_count = $getuser->login_count + 1;
    $getuser->save();
    if($getuser->role == "admin")
    return redirect('/a/home');
    else
    event(new UserOnline($getuser->id));
    return redirect('/u/home');

  }
    }
}
