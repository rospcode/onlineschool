<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


      session()->flash('msg', 'Password/Email Incorrect');
     return view('frontend.login');
  }

  $getuser = User::where('email',$request->email)->first();
  if($getuser->blocked == 'yes')
  return back()->with('msg','Your account has been blocked, please email administrator');
  else
  {
    $getuser->last_login = date('Y-m-d H:i:s');
    $getuser->save();
    if($getuser->role == "admin")
    return redirect('/a/home');
    else
    return redirect('/u/home');

  }





    }
}
