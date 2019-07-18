<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminders;
use Carbon\Carbon;

class ReminderController extends Controller
{
    public function add_reminder(Request $request){
      $this->validate($request, [
      'date' => 'required|max:12',
      'time' => 'required|max:12',
      'notes' => 'required|max:400|unique:reminders',
   ]);

       $date = $request->date." ".$request->time;
          if($date > Carbon::now()){
            $add = Reminders::create([
              'notes' => $request->notes,
              'date' => $request->date,
              'time' => $request->time,
              'title' => '',
              'reminder_type' => ''
            ]);
             return response()->json('success');
          }else{
            return response()->json('old');
          }


    }

    public function delete_reminder($id = null){
        if($id == null){
          return view("errors.404");
        }else{
          $findreminder = Reminders::find($id);
          $findreminder->delete();

          return back()->with("msg","Successfully Removed Reminder");
        }
    }
}
