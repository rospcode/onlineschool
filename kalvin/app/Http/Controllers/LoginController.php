<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
  public function login(Request $request){
          $this->validate($request, [
          'username' => 'required',
          'password' => 'required'
      ]);

      $data = array(
         'username' => $request->username,
         'password' => $request->password,
      );
      $data = $request->only('username','password');
      if( ! auth()->attempt($data)){

         return back()->with('msg','incorrect details');
      }else{


              return redirect('/');
      }


  }
}
