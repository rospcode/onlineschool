<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ForumNotifications;
use App\feed;
use App\Reminders;
use App\Categories;
use App\User;
use App\Courses;
use App\Enroll_history;
use App\Gallery;
use App\Enrolled;
use App\Files;
use App\Graduates;
use App\SignupRequests;
use App\CourseRequests;
use App\Questions_Comments;
use App\Events;
use App\QA;
use DB;

class ForumController extends Controller
{
    public function addquestion(Request $request){

      $this->validate($request, [
      'question_add' => 'required|min:3',
      'course' => 'required',
      'title' => 'required'
      ]);
      $check_course = DB::SELECT('SELECT enrolleds.*  FROM enrolleds INNER JOIN courses on enrolleds.courses_id = courses.id WHERE courses.course_link = :link AND enrolleds.user_id = :id',['link' => $request->course, 'id' => auth()->user()->id]);


      if($check_course){
        $check_q = QA::Where('courses_id',$check_course[0]->courses_id)->where('question_title',$request->title)->first();
        if(!$check_q){

          $link = str_replace(" ","-",$request->title);
          $create = QA::create([
            'user_id' => auth()->user()->id,
            'question_title' => $request->title,
            'courses_id' => $check_course[0]->courses_id,
            'question' => $request->question_add,
            'link' => $link
          ]);
          return response()->json("success");

        }else{
          return response()->json('exist');
        }
      }
      return response()->json('oops');
    }


    public function add_answer_comment(Request $request){
          $this->validate($request, [
          'answer_add' => 'required',
          'question_id' => 'required'
          ]);



           $create = Questions_Comments::create([
             'q_a_s_id' => $request->question_id,
             'User_id' => auth()->user()->id,
             'comment' => $request->answer_add,
           ]);

           $get_question = QA::Where('id',$request->question_id)->first();


           $response = array('status' => "success", 'date' => $create->created_at);
           event(new ForumNotifications('New comment from: '.$get_question->question_title,"From: ".auth()->user()->name, $create->created_at->diffForHumans()));
           return response()->json($response);
    }



    public function allcomments($id = null, $question = null){
      $commentss = DB::SELECT("SELECT users.id as id,q_a_s.question_title as title, q_a_s.question as question, questions__comments.created_at as created_at, questions__comments.comment  as comment, users.name  as name, users.surname as surname, users.avatar as avatar
      FROM questions__comments
      LEFT JOIN q_a_s on questions__comments.q_a_s_id = q_a_s.id
      LEFT JOIN users on questions__comments.user_id = users.id
      WHERE q_a_s.link = :question order by questions__comments.created_at DESC",['question' => $question]);

      $questions = QA::Where('link',$question)->first();
     $course = Courses::where('course_link',$id)->first();

     $questions->question_views = $questions->question_views + 1;
     $questions->save();


      // return $comments;
     return view('/home/comments',compact('course','commentss','questions'));
    }
}
