<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test_questions;
use App\tests;
use App\questions_content;
use App\quiz;
use App\questions;
use App\answers;
use App\Courses;
use App\GuestResults;
use App\results;
use App\Announcements;
use App\Useranswers;
use DB;
use Session;
use Auth;
use DateTime;
use Mail;
class Downloads extends Controller
{
    public function script($id = null){
      $check_course = tests::where('test_code',$id)->first();
      $check_user = results::where('user_id',session::get('done_id'))->first();
      $question_for_test = questions::where("quiz_id",$check_course->id)->get();
      $get_user_guest = GuestResults::where('id',session::get('done_id'))->first();

       return view('downloads.scripts');

    }
}
