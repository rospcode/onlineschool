<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribers;

class SubscriberController extends Controller
{
    public function subscribe(Request $request){
      $this->validate($request, [
      'email_newsletter' => 'required|email',
   ]);

      $check = Subscribers::where("email",$request->email_newsletter)->first();
      $message = "";
      if($check == ""){
        $save = Subscribers::create([
          'email' => $request->email_newsletter
        ]);
        $message = "Successfully subscribed, you'll receive newsletters of our recent courses.";
      }else{
        $message = "Email address already subscribed";
      }
      return response()->json($message);
    }
}
