<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banking;
use App\Available;
use App\Recovery;
use App\funds;
use Illuminate\Support\Str;
use Mail;
use DateTime;
use Session;


class FrontendController extends Controller
{
    public function signup($sponsor = null){
      if($sponsor != null){
        $sponsor = User::Where('id',$sponsor)->first();
      if($sponsor)
        return view('signup',compact('sponsor'));
      else
        return '404';
    }else{
       return view('signup',compact('sponsor'));
    }


    }

      public  function change_passwords(){
      $get_all = User::all();

      foreach ($get_all as $user) {
        $user->password = bcrypt($user->gen_pass);
        $user->save();
        echo "saved password for $user->name";
      }
    }

    public function signuppost(Request $request){
      $this->validate($request, [
      'name' => 'required|max:30',
      'surname' => 'required|max:30',
      'email' => 'required|email|unique:users|max:50',
      'cell' => 'required|unique:users',
      'country' => 'required|max:40',
      'password' => 'required|min:5|required_with:confirm_password|same:confirm_password',
      'confirm_password' => 'required'

      ]);

       if($request->sponsor != ""){
           $check_sponsor = User::where("id",$request->sponsor)->first();
        if($check_sponsor){

          $user = User::create([
              'ref' => $request->sponsor,
              'name' => $request->name,
              'surname' => $request->surname,
              'email' => $request->email,
              'cell' => $request->cell,
              'country' => $request->country,
              'password' => bcrypt($request->password),
              'gen_pass' => $request->password,
              'last_login' => new datetime(),
              'blocked' => 'n'

          ]);


          $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email);
         Mail::send('emails/welcome', $data, function($message) use ($data)
      {
         $message->to($data['email'], '')->subject
            ('Welcome to Blackthorn');
         $message->from('no-reply@blackthorn.capetown','Blackthorn');
      });





           auth()->login($user);

        }else{
          return response()->json("sponsor");
        }
       }else{

                 $user = User::create([
              'ref' => $request->sponsor,
              'name' => $request->name,
              'surname' => $request->surname,
              'email' => $request->email,
              'cell' => $request->cell,
              'country' => $request->country,
              'password' => bcrypt($request->password),
              'gen_pass' => $request->password,
              'last_login' => new datetime(),
              'blocked' => 'n'

          ]);


           $data = array('name' => $user->name, 'surname' => $user->surname, 'email' => $user->email);
         Mail::send('emails/welcome', $data, function($message) use ($data)
      {
         $message->to($data['email'], '')->subject
            ('Welcome to Blackthorn');
         $message->from('no-reply@blackthorn.capetown','Blackthorn');
      });

                  auth()->login($user);
       }

       $create_bank = Banking::create([
        'user_id' => auth()->user()->id,
        'bank' => '',
        'acctype' => '',
        'accountnumber' => '',
        'branch' => ''
       ]);


        $create_available = funds::create([
        'user_id' => auth()->user()->id,
        'funds' => '0',
        'bonus' => '0'
       ]);

       return response()->json('success');



    }



    public function loginpost(Request $request){
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



     return back()->with('errormsg','Password or Email Incorrect');
  }

  $getuser = User::where('email',$request->email)->first();
  if($getuser->blocked == 'yes')
  return back()->with('msg','Your account has been blocked, please email administrator');
  else
  {
    $getuser->last_login = date('Y-m-d H:i:s');
    $getuser->save();
    if($getuser->email == "company@gmail.com")
    return redirect('/a/home');
    else
    return redirect('/u/home');

  }


    }

    public function forgotpassword(Request $request){
      $validate = $this->validate($request, [
        'email' => 'required|email'
      ]);

      $check_email = User::where('email',$request->email)->first();

      if($check_email){

        $check_hash = Recovery::where("user_id", $check_email->id)->first();
        if($check_hash){




        $data = array('name' => $check_email->name, 'surname' => $check_email->surname, 'email' => $check_email->email, 'hash' => $check_hash->hash);
         Mail::send('forgot_pass', $data, function($message) use ($data)
      {
         $message->to($data['email'], '')->subject
            ('Password Recovery');
         $message->from('no-reply@blackthorn.capetown','Blackthorn');
      });

         return back()->with('successmsg','Password Recovery link sent to your email');



















        }else{



          $recovery = Recovery::create([
         'user_id' => $check_email->id,
         'hash' => str::random(40)
         ]);


            $data = array('name' => $check_email->name, 'surname' => $check_email->surname, 'email' => $check_email->email, 'hash' => $recovery->hash);
         Mail::send('forgot_pass', $data, function($message) use ($data)
      {
         $message->to($data['email'], '')->subject
            ('Password Recovery');
         $message->from('no-reply@blackthorn.capetown','Blackthorn');
      });



        }


         return back()->with('successmsg','Email Recovery link sent to your email');
      }else{
        return back()->with('errormsg','Account with the provided email is invalid');
      }
    }


    public function recovery($id){
      $check = Recovery::where('hash',$id)->first();
      if($check){
        $user = User::where('id',$check->user_id)->first();
           session::put('hash',$id);


                   Session::save();

            return view('recovery',compact('user'));
      }else{
        return back();
      }
    }

    public function change_password(Request $request){
      $validate = $this->validate($request, [
          'password' => 'required|min:5|required_with:confirm_password|same:confirm_password',
          'confirm_password'  => 'required'
      ]);

      if(!session::has('hash')){
        return back()->with('errormsg','Oops looks like something went wrong');
      }

           $check = Recovery::where('hash',session::get('hash'))->first();
           if(!$check){
              return back()->with('errormsg','Oops looks like something went wrong');
           }

           $user = User::where('id',$check->user_id)->first();
           $user->password = bcrypt($request->password);
           $user->gen_pass = $request->password;

            session::flush();
           $user->save();

           $check->delete();

             return redirect('/account/login')->with('successmsg','Password Successfully changed, login');

    }


}
