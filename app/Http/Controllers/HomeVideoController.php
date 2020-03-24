<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoWatchTime;
use App\Course_User_watch;
use Carbon\Carbon;
use DateTime;
use DB;

class HomeVideoController extends Controller
{
  public function save_watch(Request $request){
    $this->validate($request, [
       'time' => 'required',
       'lesson_id' => 'required'
    ]);





$check_first = VideoWatchTime::where('user_id',auth()->user()->id)->where('lesson_id',$request->lesson_id)->first();

$date = new DateTime;
//$check_this = Course_User_watch::where('C_desc', $request->type)->where('created_at','>',Carbon::now())->first();
//$check_this = DB::SELECT('select * from video_watch_times where time > :time and
//user_id = :id and lesson_id = :lesson_id',['id' => auth()->user()->id, 'lesson_id' => $request->lesson_id, 'time' => $request->time]);

$request->time = round($request->time,2);
$check_this = VideoWatchTime::where('user_id',auth()->user()->id)->where('lesson_id',$request->lesson_id)->where('time','>',$request->time)->first();
if($check_this == null){

  if($check_first){
    $check_first->time = $request->time;
    $check_first->save();
  }else{
    $create = VideoWatchTime::create([
      'user_id' => auth()->user()->id,
      'lesson_id' => $request->lesson_id,
      'time' => $request->time

    ]);
  }


  return response()->json('success');
}else{

}







if($check_first){
  if($check_first->time < $request->time){
    $check_first->time = $request->time;
    $check_first->save();
  }

}else{
  $create = VideoWatchTime::create([
    'user_id' => auth()->user()->id,
    'lesson_id' => $request->lesson_id,
    'time' => $request->time

  ]);
}



  }



  public function save_watch2(Request $request){
    $this->validate($request, [
       'time' => 'required',
       'lesson_id' => 'required'
    ]);





$check_first = VideoWatchTime::where('user_id',auth()->user()->id)->where('lesson_id',$request->lesson_id)->first();

if(!$check_first){
  $create = VideoWatchTime::create([
    'user_id' => auth()->user()->id,
    'lesson_id' => $request->lesson_id,
    'time' => $request->time

  ]);

  return response()->json("success");

}else{
return response()->json($request->lesson_id);
}




  }
}
