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
use Carbon\Carbon;


class TestsController extends Controller
{
    public function index(){
      $tests = tests::all();
     return view('admin.tests.tests',compact('tests'));
    }

    public function view_test($id = null){
       return $id;
    }


    public function savequestions(Request $request){
            $get_section = tests::Where('id',$request->testid)->first();
            $coun = 0;

      //  return dd($request->all());


    //  return $request->all();
      if($get_section != null){

    //    $delete_questions = questions::where('quiz_id',$get_section->id)->delete();
        //saving based the type of question

        for ($z=0; $z < count($request->question_type); $z++) {


        if($request->question_type[$z] == 1){//radion button multiple choice choose 1
                  $check_question = questions::where('question',$request->question[$z])->first();



            if(!$check_question){
                $create_question = questions::create([
                  'quiz_id' => $request->testid,
                  'question' => $request->question[$z],
                  'question_type' => $request->question_type[$z],
                  'correct_answers' => 1
                ]);




                $answers = "answers".$z;
                $correct = "correct".$z;


                for ($m=0; $m < count($request->$answers); $m++) {
                       if($request->$correct[0]== $m){
                         $require_create = answers::Create([
                            'questions_id' =>  $create_question->id,
                            'answer' =>  ucfirst($request->$answers[$m]),
                            'correct' => 1,
                            'answer_code' => str_random(7)
                         ]);
                       }else{
                         $require_create = answers::Create([
                            'questions_id' =>  $create_question->id,
                            'answer' =>   ucfirst($request->$answers[$m]),
                            'correct' => '0',
                            'answer_code' => str_random(7)
                       ]);
                     }
                }



              }



        }else if($request->question_type[$z] == 2){//checkboxes button multiple choice choose 1

          $check_question = questions::where('question',$request->question[$z])->first();
              if(!$check_question){
              $create_question = questions::create([
                'quiz_id' => $request->testid,
                'question' => $request->question[$z],
                'question_type' => $request->question_type[$z]
              ]);

              $correct_answers = 0;

              $answers = "answers".$z;
              $correct = "correct".$z;
              $b = 0;


              for ($m=0; $m < count($request->$answers); $m++) {
                   if(isset($request->$correct[$b])){

                     if($request->$correct[$b] == $m){
                     $require_create = answers::Create([
                        'questions_id' =>  $create_question->id,
                        'answer' =>   ucfirst($request->$answers[$m]),
                        'correct' => 1,
                        'answer_code' => str_random(7)
                     ]);
                     $b++;
                     $correct_answers++;
                   }else{
                         $require_create = answers::Create([
                            'questions_id' =>  $create_question->id,
                            'answer' =>  ucfirst($request->$answers[$m]),
                            'correct' => 0,
                            'answer_code' => str_random(7)
                       ]);
                   }
                   }else{
                     $require_create = answers::Create([
                        'questions_id' =>  $create_question->id,
                        'answer' =>  ucfirst($request->$answers[$m]),
                        'correct' => 0,
                        'answer_code' => str_random(7)
                   ]);
                 }
              }
              $create_question->correct_answers =  $correct_answers;
              $create_question->save();
            }

        }else if($request->question_type[$z] == 3){//radion button true/false choice choose 1

          $check_question = questions::where('question',$request->question[$z])->first();

        if(!$check_question){
              $create_question = questions::create([
                'quiz_id' => $request->testid,
                'question' => $request->question[$z],
                'question_type' => $request->question_type[$z],
                'correct_answers' => 1
              ]);

              $answers = "answers".$z;
              $correct = "correct".$z;

              for ($m=0; $m < count($request->$answers); $m++) {
                     if($request->$correct[0] == $m){
                       $require_create = answers::Create([
                          'questions_id' =>  $create_question->id,
                          'answer' =>  ucfirst($request->$answers[$m]),
                          'correct' => 1,
                          'answer_code' => str_random(7)
                       ]);
                     }else{
                       $require_create = answers::Create([
                          'questions_id' =>  $create_question->id,
                          'answer' =>  ucfirst($request->$answers[$m]),
                          'correct' => 0,
                          'answer_code' => str_random(7)
                     ]);
                   }
              }
            }

        }else if($request->question_type[$z] == 4){

        }else if($request->question_type[$z] == 5){//text fill in blank choose 1

          $check_question = questions::where('question',$request->question[$z])->first();

    if(!$check_question){
              $create_question = questions::create([
                'quiz_id' => $request->testid,
                'question' => $request->question[$z],
                'question_type' => $request->question_type[$z],
                'correct_answers' => 1
              ]);

              $answers = "answers".$z;

              $require_create = answers::Create([
                 'questions_id' =>  $create_question->id,
                 'answer' =>  ucfirst($request->$answers[0]),
                 'correct' => 1,
                 'answer_code' => str_random(7)
            ]);
          }

        }else if($request->question_type[$z] == 6){//text essay


          $check_question = questions::where('question',$request->question[$z])->first();

      if(!$check_question){
              $create_question = questions::create([
                'quiz_id' => $request->testid,
                'question' => $request->question[$z],
                'question_type' => $request->question_type[$z],
                'correct_answers' => 1
              ]);

              $answers = "answers".$z;

              $require_create = answers::Create([
                 'questions_id' =>  $create_question->id,
                 'answer' =>  ucfirst($request->$answers[0]),
                 'correct' => 1,
                 'answer_code' => str_random(7)
              ]);

           }
         }


         }

      }else{
         return 'f';
      }
      return back()->with('msg','Added Questions');
    }

    public function test_menu($id = null){
      $test = tests::where('test_code',$id)->first();
      return view('admin.tests.test_main',compact('test'));
    }

    public function publish($id = null){
      $test = tests::where('test_code',$id)->first();
      return view('admin.tests.publish',compact('test'));
    }

    public function viewResults($id = null){
      $test = tests::where('test_code',$id)->first();
      $course = Courses::where('id',$test->courses_id)->first();

      $calculate = DB::SELECT("SELECT ROUND(SUM(guest_results.test_score) / count(guest_results.id), 2) as average,
(SELECT CONCAT(Min(guest_results.test_score),'% to ', Max(guest_results.test_score))) as score,
(SELECT CONCAT(Min(guest_results.minutes),' to ', Max(guest_results.minutes))) as Mini_Max,
(SELECT ROUND(SUM(guest_results.minutes) / count(guest_results.id), 2) as minutes
from guest_results
where guest_results.minutes = 0) as minutes ,
(SELECT COUNT(*) as Passed
FROM guest_results
where result = 'Passed') as Passed,
(SELECT COUNT(*) as Failed
FROM guest_results
where result = 'Failed') as Failed
from guest_results");
















DB::statement(DB::raw('SET @rownum = 0'));
 $get_test = DB::SELECT("SELECT  @rownum := @rownum + 1 as count,(case when(t.courses_id != '')
 THEN
 (SELECT courses.course_title FROM courses where id = t.courses_id)
 ELSE
   ''
 END) as course,
t.test_title as title, g.fullname, g.email,g.result,CONCAT(g.test_score,'% ',g.score) as score, g.updated_at as date
FROM guest_results g
left join tests t on t.test_code = g.test_code
Where t.test_code = :test_code",['test_code' => $id]);


      return view('admin.tests.view_results',compact('test','course','calculate','get_test'));
    }

    public function adjust($id = null){
      $test = tests::where('test_code',$id)->first();
      return view('admin.tests.adjust_setting',compact('test'));
    }

    public function question($id = null){
      $tests = tests::where('test_code',$id)->first();
      return view('admin.tests.add_question',compact('tests'));
    }

    public function maketest(Request $request){
      $validate = $this->validate($request,[
         'test' => 'required|min:5|max:300'
      ]);
      $pair = str_random(12);
      $create = tests::create([
        'test_code' => $pair,
        'test_title' => $request->test
      ]);

      return back()->with("msg","Created test Successfully");
    }





    public function admin_see_user_test($testid = null, $id = null){

      if(auth()->check() && $id && $testid && auth()->user()->role == "admin"){
        $check_course = tests::where('test_code',$testid)->first();
        $check_user = results::where('user_id',$id)->first();
        $question_for_test = questions::where("quiz_id",$check_course->id)->get();
        $get_user_guest = GuestResults::where('id',$id)->first();


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
where t.id = :id and r.user_id = :user_id",['id' => $check_course->id, 'user_id' => $id]);


$user = $id;

$get_test = $check_course;
$from_answers = DB::SELECT("SELECT questions.question, questions.question_type, results.answers, results.answer_id, (select count(*) from answers where questions_id = questions.id and correct != 0) as tot, results.answer_code, results.chosen_answer, results.correct from questions
left join tests on tests.id = questions.quiz_id
left join answers on answers.questions_id = questions.id
left join results on results.answer_id = answers.id
where results.user_id = :id and tests.test_code = :testcode",['id' => $user, 'testcode' => $testid]);


//return $check_user;
return view('onlinetests.success',compact('check_course','get_test','from_answers','get_user_guest','question_for_test'));
//return $from_answers;
//return $question_for_test;



        }else{
          return '404 here';
        }
}
}





    public function admin_see_user_test_download($testid = null, $id = null){

         if(auth()->check() && $id && $testid && auth()->user()->role == "admin"){
           $check_course = tests::where('test_code',$testid)->first();
           $check_user = results::where('user_id',$id)->first();
           $question_for_test = questions::where("quiz_id",$check_course->id)->get();
           $get_user_guest = GuestResults::where('id',$id)->first();

           return $get_user_guest;
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
 where t.id = :id and r.user_id = :user_id",['id' => $check_course->id, 'user_id' => $id]);


 $user = $id;

 $get_test = $check_course;
 $from_answers = DB::SELECT("SELECT questions.question, questions.question_type, results.answers, results.answer_id, (select count(*) from answers where questions_id = questions.id and correct != 0) as tot, results.answer_code, results.chosen_answer, results.correct from questions
 left join tests on tests.id = questions.quiz_id
 left join answers on answers.questions_id = questions.id
 left join results on results.answer_id = answers.id
 where results.user_id = :id and tests.test_code = :testcode",['id' => $user, 'testcode' => $testid]);


 //return $check_user;
 return view('onlinetests.success',compact('check_course','get_test','from_answers','get_user_guest','question_for_test'));
 //return $from_answers;
 //return $question_for_test;



           }else{
             return '404 here';
           }
  }
}










  public function editanswer(Request $request){

    if($request->type == "answers"){
      $get_answer = answers::where('id',$request->id)->first();
      if($get_answer){
        if($get_answer->answer != $request->answer){
          $get_answer->answer = $request->answer;
          $get_answer->save();
          return response()->json("success");
        }
      }
    }else if($request->type == "question"){
      $get_question = questions::where('id',$request->id)->first();
      if($get_question){
        if($get_question->question != $request->question){
          $get_question->question = $request->question;
          $get_question->save();
          return response()->json("success");
        }
      }
    }

  }
}
