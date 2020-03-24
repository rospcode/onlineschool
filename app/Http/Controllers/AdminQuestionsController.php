<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categories;
use App\User;
use App\Courses;
use App\Enrolled;
use App\Enroll_history;
use App\Files;
use App\feed;
use App\TempMarks;
use App\course_marks;
use App\SignupRequests;
use App\CourseRequests;
use App\Course_section;
use App\Course_lesson;
use App\requirements;
use App\Graduates;
use App\quiz;
use App\questions;
use App\answers;
use DateTime;
use Exporter;
use Mail;
class AdminQuestionsController extends Controller
{
    public function make($id = null){
       $get_quiz = quiz::Where('quiz_link', $id)->first();
       if($get_quiz != null){
         return view("admin.quiz.create_quiz",compact('get_quiz'));
       }
      return back()->with('msg','Ooops look like something went wrong');
    }

    public function post_question(Request $request){
       $this->validate($request, [
          'question' => 'required',
          'correct' => 'required',
          'answers' => 'required',

       ]);

        $get_section = quiz::Where('quiz_link',$request->quiz_id)->first();
         if($get_section != null){
           $create_question = questions::create([
             'quiz_id' => $get_section->id,
             'question' => $request->question
           ]);

           for ($i=0; $i < count($request->answers); $i++) {


            if(count($request->correct) != 0){
              for ($m=0; $m < count($request->correct); $m++) {
                     if($request->correct[$m] == $i){
                       $require_create = answers::Create([
                          'questions_id' =>  $create_question->id,
                          'answer' =>  $request->answers[$i],
                          'correct' => 1,
                          'answer_code' => str_random(20)
                       ]);
                     }else{
                       $require_create = answers::Create([
                          'questions_id' =>  $create_question->id,
                          'answer' =>  $request->answers[$i],
                          'correct' => 0,
                          'answer_code' => str_random(20)
                       ]);
                     }
              }


            }else{
              return back()->with("msg","The question is not allocated an answer");
            }


           }


         }else{
             return back()->with("msg","The Quiz doesn't exist, cannot add questions");
         }
    return back()->with("msg","Successfully added question and answers");

    }


    public function question_image(Request $request){


      $cat_code = str_random(20);
      $image = $request->file('imageupload');
      $name = $cat_code.'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/questions_images');
      $image->move($destinationPath, $name);



      $get_section = quiz::Where('quiz_link',$request->quiz_id)->first();
       if($get_section != null){
         $create_question = questions::create([
           'quiz_id' => $get_section->id,
           'question' => 'questions_images/'.$name
         ]);

         for ($i=0; $i < count($request->answers); $i++) {


          if(count($request->correct) != 0){
            for ($m=0; $m < count($request->correct); $m++) {
                   if($request->correct[$m] == $i){
                     $require_create = answers::Create([
                        'questions_id' =>  $create_question->id,
                        'answer' =>  $request->answers[$i],
                        'correct' => 1,
                        'answer_code' => str_random(20)
                     ]);
                   }else{
                     $require_create = answers::Create([
                        'questions_id' =>  $create_question->id,
                        'answer' =>  $request->answers[$i],
                        'correct' => 0,
                        'answer_code' => str_random(20)
                     ]);
                   }
            }


          }else{
            return back()->with("msg","The question is not allocated an answer");
          }


         }


       }else{
           return back()->with("msg","The Quiz doesn't exist, cannot add questions");
       }
  return back()->with("msg","Successfully added question and answers");


    }
}
