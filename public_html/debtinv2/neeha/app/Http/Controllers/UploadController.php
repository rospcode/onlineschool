<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class UploadController extends Controller
{
    public function upload_cv(Request $request){
      $this->validate($request, [
        'name' => 'required|max:50',
        'email' => 'required|max:100',
        'phone' => 'required|max:13',
        'cover_letter' => 'required|max:1000',
        'file' => 'required|max:200|mimes:doc,pdf,docx'
      ]);

      $image = $request->file('file');
      $name = $request->email.'_'.$image->getClientOriginalName();
      $destinationPath = public_path('/img/documents');
      $image->move($destinationPath, $name);


      $data = array( 'email' =>$request->email, 'name' => $request->name);

      Mail::send('Emails/tointerviewer', $data, function($message) use ($data)
      {
     $message->to($data['email'], '')->subject
        ('Cv submission received');
     $message->from('info@capabilityhr.co.za','Debt-in');
     });


     $datas = array( 'email' => 'prosperrsiyabonga@gmail.com', 'name' => $request->name, 'phone' => $request->phone, 'cover_letter' => $request->cover_letter, 'attach' => 'img/documents/'.$name);

     Mail::send('Emails/kaleena', $datas, function($message) use ($datas)
     {
    $message->to($datas['email'], '')->subject
       ('CV submission');
    $message->from('info@capabilityhr.co.za','Debt-in');
     $message->attach($datas['attach']);
    });

    return back()->with('success','cv success');
    }
}
