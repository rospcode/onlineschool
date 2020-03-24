<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test_questions;
use App\tests;
use App\questions_content;
use App\quiz;
use App\questions;
use App\answers;
use App\GuestResults;
use App\results;
use App\Announcements;
use App\Useranswers;
use App\feed;
use DB;
use Session;
use Auth;
use DateTime;
use Mail;
use Carbon\Carbon;
class GuestTestController extends Controller
{
    public function index($id = null){
      $get_test = tests::where('test_code',$id)->first();
      $guestresults = "";

      if(!auth()->check() && $get_test->public != 'no'){
           return view('errors/404');
      }else{


      if($get_test && $get_test->published == "published"){
              if(auth()->check()){
                $guestresults = GuestResults::where('id',session::get('user_id'))->where('test_code',$get_test->test_code)->first();
                $check_email = GuestResults::where('email',auth()->user()->email)->where('test_code',$id)->first();

                if(!$check_email){
                    $time_left = "N";
                    $new_datetie = new DateTime();
                    if($get_test->time_to_complete_test != ""){
                      $current = Carbon::now();
                      $time_left =  $current->addMinutes($get_test->time_to_complete_test);
                    }

                    $fullname = auth()->user()->name." ".auth()->user()->surname;

                    $guest = GuestResults::create([
                      'fullname' => $fullname,
                      'email' => auth()->user()->email,
                      'time_left' => $time_left,
                      'test_code' => $id
                    ]);


                    $feed = feed::Create([
                      'user_id' => auth()->user()->id,
                      'action' => auth()->user()->name.', Started test '.$get_test->test_title
                    ]);

                   session::put('user_id',$guest->id);
                   session::put('fullname',$fullname);

                   Session::save();

                    $guestresults = GuestResults::where('id',session::get('user_id'))->where('test_code',$get_test->test_code)->first();

                    return view('onlinetests.guesttest',compact('get_test','guestresults'));

                }else{
                  if($check_email->result != ""){

                      $guestresultss = GuestResults::where('email',auth()->user()->email)->where('test_code',$get_test->test_code)->first();

                        $get_re = results::where('user_id', $guestresultss->id)->first();

                    $conc_message = "";
                    $verdict = $guestresultss->result;
                    $percentage = $guestresultss->test_score;
                    $answers_submitted = $get_re->answers;
                    $conc_text = "";

                    $conc_message = "";
                    $conc_text = "Congratulations on completing the test. Your Scored!!!";

                    $guest_score = $guestresultss->score;

                    if($get_test->conclusion_text != null){
                      $conc_text = $get_test->conclusion_text;
                    }

                     if($verdict == "Failed"){
                       if($get_test->fail_message != null){
                         $conc_message = $get_test->fail_message;
                       }
                     }else{
                       if($get_test->pass_message != null){
                         $conc_message = $get_test->pass_message;
                       }
                     }
                       return redirect('/test/results/user/'.$get_test->test_code);
                  }else{
                      $guestresults = GuestResults::where('email',auth()->user()->email)->where('test_code',$id)->first();

                      $get_re = results::where('user_id', $guestresults->id)->first();
                      if($guestresults->result != ""){
                            $conc_message = "";
                            $verdict = $guestresults->result;
                            $percentage = $guestresults->test_score;
                            $answers_submitted = $get_re->answers;
                            $conc_text = "";
                            $conc_message = "";
                            $conc_text = "Congratulations on completing the test. Your Scored!!!";
                              $guest_score = $guestresults->score;

                            if($get_test->conclusion_text != null){
                              $conc_text = $get_test->conclusion_text;
                            }
                             if($verdict == "Failed"){
                               if($get_test->fail_message != null){
                                 $conc_message = $get_test->fail_message;
                               }
                             }else{
                               if($get_test->pass_message != null){
                                 $conc_message = $get_test->pass_message;
                               }
                             }
                           return redirect('/test/results/user/'.$get_test->test_code);
                      }else{
                        $fullname = auth()->user()->name." ".auth()->user()->surname;
                       session::put('user_id',$check_email->id);
                       session::put('fullname',$fullname);
                       Session::save();
                       return view('onlinetests.guesttest',compact('get_test','guestresults'));
                    }
                  }
                }
              }else if(session::has('user_id')){
                $guestresults = GuestResults::where('id',session::get('user_id'))->where('test_code',$get_test->test_code)->first();
                if($guestresults){
                  return view('onlinetests.guesttest',compact('get_test','guestresults'));
                }else{
                return view('errors/404');
                }
              }else{
                return view('onlinetests.guesttest',compact('get_test'));
            }
       }
      else{
        return view('errors/404');
      }

     }
    }

    public function start_test(Request $request){
      $guestresults = GuestResults::Create([
        'fullname' => $request->name,
        'email' => $request->email
      ]);

      auth()->login($guestresults);

      return response()->json('success');
    }

    public function submitadjustments(Request $request){
      $test_find = tests::where('test_code',$request->test_code)->first();
      if($test_find){
        $test_find->introduction = $request->Introduction;
        $test_find->conclusion_text = $request->conclusion_text;
        $test_find->time_to_complete_test = $request->time_limit;
        $test_find->test_identification = $request->test_identification;
        $test_find->email_notification = $request->email_notification_user;
        $test_find->passing_score = $request->passing_score;
        $test_find->pass_message = $request->pass_message;
        $test_find->fail_message = $request->fail_message;

        if($test_find->courses_id != null)
        $test_find->public = $request->public;
        $test_find->save();
        return back()->with('msg','done inserting values');

      }
    }

    public function user_details_exam(Request $request){
      $this->validate($request, [
        'fullname' => 'required',
         'email' => 'required|email'
      ]);

      $check_email = GuestResults::where('email',$request->email)->where('test_code',$request->test_code)->first();

      if($check_email){
        return back()->with('error','Sorry you cannot take the test 2 times');
      }

      $get_test = tests::where('test_code',$request->test_code)->first();
      $time_left = "N";

      $new_datetie = new DateTime();

      if($get_test->time_to_complete_test != ""){
        $current = Carbon::now();
        $time_left =  $current->addMinutes($get_test->time_to_complete_test);
      }

      $guest = GuestResults::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'time_left' => $time_left,
        'test_code' => $request->test_code
      ]);


     session::put('user_id',$guest->id);
     session::put('fullname',$request->fullname);

     Session::save();

        return back();

    }

    public function submit(Request $request){


   if(!auth()->check() && !session::has('user_id')){
     return '404';
   }
     $get_test = tests::where('test_code', $request->only('test_code'))->first();
      $get_questions = questions::where('quiz_id',$get_test->id)->get();
      $submit_count = 0;
      $submitted = array();
      $mark = 0;
      $save_mark_assessment = "";
      $save_results = "";
      $verdict = "";



      if(session::has('user_id')){
        $save_results = GuestResults::where('id',session::get('user_id'))->first();
      }elseif(auth()->check()){
        $save_results = GuestResults::where('id',auth()->user()->id)->first();
      }



    $get_everything = DB::SELECT("SELECT answers.id as answer_id, answers.answer as answer, answers.answer_code as answer_code, answers.correct as correct, questions.question as question, questions.question_type as type, tests.test_code as test_code from answers
left join questions on questions.id = answers.questions_id
left join tests on tests.id = questions.quiz_id where
tests.test_code = :testcode",['testcode' => $get_test->test_code]);


       $submit = $request->except('test_code','_token');


       $counts = 1;

       $question = "";

      foreach ($get_questions  as $everything) {


            if($everything->question_type == "1"){

               $get_answer = Answers::where('questions_id',$everything->id)->get();
                  $answer = "answer".$counts;

                    $check_if_question_same = "";

               foreach ($get_answer as $answerr) {
                 if($answerr->answer_code == $request->$answer[0] && $answerr->correct == 1){
                        $check_if_question_same = "Passed";
                       $mark++;
                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($answerr->answer),
                       'answer_code' => $answerr->answer_code,
                       'answer_id' => $answerr->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);



                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($answerr->answer),
                       'answer_code' => $answerr->answer_code,
                       'answer_id' => $answerr->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);
                   }
                 }else{
                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($answerr->answer),
                       'answer_code' => $answerr->answer_code,
                       'answer_id' => $answerr->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);

                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($answerr->answer),
                       'answer_code' => $answerr->answer_code,
                       'answer_id' => $answerr->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);
                   }
                 }
               }


               if( $check_if_question_same != ""){
                   $save_mark_assessment = $save_mark_assessment."P,";
               }else{
                   $save_mark_assessment = $save_mark_assessment."F,";
               }





            }else if($everything->question_type == "2"){
              $get_answer = Answers::where('questions_id',$everything->id)->get();
                 $answer = "answer".$counts;




                 $a = count(Answers::where("questions_id",$everything->id)->where("correct","!=",0)->get());
                 $o = 1;


                   $my_count = 0;
                     $check_if_question_same = "";
              foreach ($get_answer as $answerr) {



                if($answerr->answer_code == $request->$answer[$my_count] && $answerr->correct == 1){

                       $check_if_question_same = "Passed";
                    $o++;
                      $mark++;
                  if(session::has('user_id')){
                    $save_results = GuestResults::where('id',session::get('user_id'))->first();
                    $save_answers = results::create([
                      'user_id' => session::get('user_id'),
                      'type' => 'Guest',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[$my_count],
                      'correct' => '1'
                    ]);

                  }elseif(auth()->check()){
                    $save_results = GuestResults::where('id',auth()->user()->id)->first();
                    $save_answers = results::create([
                      'user_id' => auth()->user()->id,
                      'type' => 'User',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[$my_count],
                      'correct' => '1'
                    ]);
                  }
                }else{





                  if(session::has('user_id')){
                    $save_results = GuestResults::where('id',session::get('user_id'))->first();
                    $save_answers = results::create([
                      'user_id' => session::get('user_id'),
                      'type' => 'Guest',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[$my_count],
                      'correct' => '0'
                    ]);

                  }elseif(auth()->check()){
                    $save_results = GuestResults::where('id',auth()->user()->id)->first();
                    $save_answers = results::create([
                      'user_id' => auth()->user()->id,
                      'type' => 'User',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[$my_count],
                      'correct' => '0'
                    ]);
                  }
                }

                 $my_count++;
              }

              if($o == $a){
                   $save_mark_assessment = $save_mark_assessment."P,";
              }else{
                   $save_mark_assessment = $save_mark_assessment."F,";
              }






            }else if($everything->question_type == "3"){
              $get_answer = Answers::where('questions_id',$everything->id)->get();
                 $answer = "answer".$counts;

                   $check_if_question_same = "";

              foreach ($get_answer as $answerr) {
                if($answerr->answer_code == $request->$answer[0] && $answerr->correct == 1){

                    $check_if_question_same = "Passed";
                    $mark++;

                  if(session::has('user_id')){
                    $save_results = GuestResults::where('id',session::get('user_id'))->first();
                    $save_answers = results::create([
                      'user_id' => session::get('user_id'),
                      'type' => 'Guest',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[0],
                      'correct' => '1'
                    ]);

                  }elseif(auth()->check()){
                    $save_results = GuestResults::where('id',auth()->user()->id)->first();
                    $save_answers = results::create([
                      'user_id' => auth()->user()->id,
                      'type' => 'User',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[0],
                      'correct' => '1'
                    ]);
                  }
                }else{

                  if(session::has('user_id')){
                    $save_results = GuestResults::where('id',session::get('user_id'))->first();
                    $save_answers = results::create([
                      'user_id' => session::get('user_id'),
                      'type' => 'Guest',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[0],
                      'correct' => '0'
                    ]);

                  }elseif(auth()->check()){
                    $save_results = GuestResults::where('id',auth()->user()->id)->first();
                    $save_answers = results::create([
                      'user_id' => auth()->user()->id,
                      'type' => 'User',
                      'answers' =>  ucfirst($answerr->answer),
                      'answer_code' => $answerr->answer_code,
                      'answer_id' => $answerr->id,
                      'chosen_answer' => $request->$answer[0],
                      'correct' => '0'
                    ]);
                  }
                }
              }

              if( $check_if_question_same != ""){
                  $save_mark_assessment = $save_mark_assessment."P,";
              }else{
                  $save_mark_assessment = $save_mark_assessment."F,";
              }

            }else if($everything->question_type == "4"){

            }else if($everything->question_type == "5"){
              $get_answer = Answers::where('questions_id',$everything->id)->first();
                 $answer = "answer".$counts;

      //           return $get_answer;

                      $check_if_question_same = "";

                 if(strtolower($get_answer->answer) == strtolower($request->$answer[0]) && $get_answer->correct == 1){

                    $check_if_question_same = "Passed";
                     $mark++;

                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);

                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);
                   }
                 }else{




                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);

                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);
                   }
                 }


                 if( $check_if_question_same != ""){
                     $save_mark_assessment = $save_mark_assessment."P,";
                 }else{
                     $save_mark_assessment = $save_mark_assessment."F,";
                 }


            }else if($everything->question_type == "6"){
              $get_answer = Answers::where('questions_id',$everything->id)->first();
                 $answer = "answer".$counts;

      //           return $get_answer;

                  $check_if_question_same = "";

                 if(strtolower($get_answer->answer) == strtolower($request->$answer[0]) && $get_answer->correct == 1){

                  $check_if_question_same = "Passed";
                     $mark++;
                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);

                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '1'
                     ]);
                   }
                 }else{


                   if(session::has('user_id')){
                     $save_results = GuestResults::where('id',session::get('user_id'))->first();
                     $save_answers = results::create([
                       'user_id' => session::get('user_id'),
                       'type' => 'Guest',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);

                   }elseif(auth()->check()){
                     $save_results = GuestResults::where('id',auth()->user()->id)->first();
                     $save_answers = results::create([
                       'user_id' => auth()->user()->id,
                       'type' => 'User',
                       'answers' =>  ucfirst($get_answer->answer),
                       'answer_code' => $get_answer->answer_code,
                       'answer_id' => $get_answer->id,
                       'chosen_answer' => $request->$answer[0],
                       'correct' => '0'
                     ]);
                   }
                 }


                 if( $check_if_question_same != ""){
                     $save_mark_assessment = $save_mark_assessment."P,";
                 }else{
                     $save_mark_assessment = $save_mark_assessment."F,";
                 }
            }

            $counts++;
      }


      $nuke = DB::SELECT("SELECT COUNT(answers.id) as count from tests
      left join questions on tests.id = questions.quiz_id
      left join answers on answers.questions_id = questions.id
      where tests.test_code = :testcode
      and answers.correct = 1", ['testcode' => $get_test->test_code]);
     $p = 0;

     foreach ($nuke as $k) {
     $p = $k->count;
     }
     $percentage = round($mark / $p * 100);




      if($get_test->passing_score != null){
        if($percentage > $get_test->passing_score){
           $verdict = "Passed";
        }else{
          $verdict = "Failed";
        }
      }else{
        if($percentage >= 50){
         $verdict = "Passed";
       }else{
         $verdict = "Failed";
       }
      }



      $save_results->result = $verdict;
      $save_results->test_score = $percentage;

      $save_results->minutes = $save_results->created_at->diffInMinutes();

      $save_mark_assessment = substr($save_mark_assessment,0,strlen($save_mark_assessment) - 1);
        $save_results->test_questions = $save_mark_assessment;

      $b = 0;
          $f = explode(',',$save_mark_assessment);
          for ($i=0; $i < count($f); $i++) {
          if($f[$i] == "P"){
                 $b++;
           }
          }

            $save_results->score = "(".$mark." / ".$p.")";
        $save_results->save();


                                                            session::put('done_id',session::get('user_id'));
                                                            Session::save();




if(auth()->check()){
  $feed = feed::Create([
    'user_id' => auth()->user()->id,
    'action' => auth()->user()->name.' '.$verdict.' test: '.$get_test->test_title.' with a '.$percentage.'% score'
  ]);

  $data = array('name'=> auth()->user()->name, 'verdict'=> $verdict, 'email' => auth()->user()->email, 'test' => $get_test->test_title, 'percentage' => $percentage);
 Mail::send('controllemails/finishedtest', $data, function($message) use ($data)
 {
    $message->to($data['email'], '')->subject
       ('Well done on completing your test ');
    $message->from('info@capabilityhr.co.za','CapabilityHr');
 });





}else if(session::has('user_id')){
  $data = array('name'=> $save_results->fullname, 'verdict'=>$verdict, 'email' =>  $save_results->email, 'test' => $get_test->test_title, 'percentage' => $percentage);
 Mail::send('controllemails/finishedtest', $data, function($message) use ($data)
 {
    $message->to($data['email'], '')->subject
       ('Well done on completing your test ');
    $message->from('info@capabilityhr.co.za','CapabilityHr');
 });
}


                                                   if(session::has('user_id')){
                                                     session::forget('user_id');
                                                    }



           return redirect('/test/results/user/'.$get_test->test_code);






  //     return redirect('/test/results/user/'.$get_test->test_code);

    }

    public function user_results($id = null){
       if($id && session::has('done_id')){
          $check_course = tests::where('test_code',$id)->first();
          $check_user = results::where('user_id',session::get('done_id'))->first();
          $question_for_test = questions::where("quiz_id",$check_course->id)->get();
          $get_user_guest = GuestResults::where('id',session::get('done_id'))->first();
          if($check_course && $check_user){
              $user_test = DB::SELECT("SELECT t.test_code, q.question_type, g.result, g.test_score, g.fullname, g.score, t.test_title, t.conclusion_text, t.pass_message, t.fail_message, q.question, r.answer_id as ID, r.answers as submitted, a.answer as answer,
(case when (r.answers = a.answer_code and a.correct != '0')
   THEN

    'YES'

   ELSE

      (case when(r.answers = a.answer and a.correct = '1')

       THEN
        'YES'

       ELSE

         'NO'
       END)
END) as correct
from tests t
inner join questions q on t.id = q.quiz_id
left join answers a on a.questions_id = q.id
inner join results r on r.answer_id = a.questions_id
inner join guest_results g on g.id = r.user_id
where t.id = :id and r.user_id = :user_id",['id' => $check_course->id, 'user_id' => session::get('done_id')]);


$user = "";
if(session::has('done_id')){
  $user = session::get('done_id');
}else if(auth()->check()){
    $user = auth()->user()->id;
}else{
  return '404 la';
}
$get_test = $check_course;
$from_answers = DB::SELECT("SELECT questions.question, questions.question_type, results.answers, results.answer_id, (select count(*) from answers where questions_id = questions.id and correct != 0) as tot, results.answer_code, results.chosen_answer, results.correct from questions
left join tests on tests.id = questions.quiz_id
left join answers on answers.questions_id = questions.id
left join results on results.answer_id = answers.id
where results.user_id = :id and tests.test_code = :testcode",['id' => $user, 'testcode' => $id]);


//return $check_user;
return view('onlinetests.success',compact('check_course','get_test','from_answers','get_user_guest','question_for_test'));
//return $from_answers;
//return $question_for_test;



          }else{
            return '404 here';
          }
       }else{
         return session::get('done_id');
       }
    }

    public function publish($id = null){
      $get_test = tests::where('test_code', $id)->first();


      $get_questions = questions::where('quiz_id',$get_test->id)->first();

      if($get_questions){
          $get_test->published = "published";
          $get_test->save();

          $annoucement_create = Announcements::create([
            'courses_id' => $get_test->courses_id,
            'statement' => 'New test available',
            'link' => $id
          ]);


          return response()->json("success");
      }else{
        return response()->json("cannot");
      }




    }

    public function expired(){
      if(session::has('user_id')){
        $save_results = GuestResults::where('id',Session::get('user_id'))->first();
           $get_test = tests::where('test_code',$save_results->test_code)->first();
           $results = "";

           if(count($get_test->getQuestions) > 0){
             foreach ($get_test->getQuestions as $value) {
               if($results == ""){
                 $results = "F";
               }else{
                 $results = $results.",F";
               }
             }
           }

        $save_results->test_questions = $results;
        $save_results->result = 'Failed';
        $save_results->test_score = '0';
        $save_results->minutes = $save_results->created_at->diffInMinutes();
        $save_results->score = "( 0 / ".count($get_test->getQuestions).") - Time";

        $save_results->save();

        session::flush('user_id');
        return redirect('test/'.$save_results->test_code);
     }
    }

    public function publish_email(Request $request){
      $email_array = explode(';',$request->email);
      foreach ($email_array as $email) {
      if($email != ""){

          $data = array('test'=> $request->test, 'test_code'=> $request->test_code, 'email' => $email);
          Mail::send('controllemails/email_to_everyone', $data, function($message) use ($data)
          {
             $message->to($data['email'], '')->subject
                ('Capabilityhr test invitation');
             $message->from('info@capabilityhr.co.za','CapabilityHr');
          });

          return response()->json('success');
        }else{
          return response()->json("empty");
        }
      }
    }
}
