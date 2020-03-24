<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;
use Mail;

class TimetableController extends Controller
{
    public function uploadtimetable(Request $request){


      $check_available = Timetable::where("courses_id",$request->courses_id)->first();
      if($check_available != ""){
        return back()->with('msg','This course already has a timetable, to change it, please delete the existing.');
      }



      $image = $request->file('file');
      $name = $image->getClientOriginalName();
      $destinationPath = public_path('/Docs');
      $image->move($destinationPath, $name);

      $save_db = TimeTable::create([
        'courses_id' => $request->courses_id,
        'path' => $name
      ]);


   if($request->options == "yes"){
     return back()->with('msg','Uploaded Timetable, email sent to all course Students.');
   }else{
     return back()->with('msg','Uploaded Timetable.');
   }

    }

    public function deletetime(Request $request){
      $find = TimeTable::find($request->timetable);
      $find->delete();
      return back()->with('msg','Timetable removed Successfully');
    }
}
