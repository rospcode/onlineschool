<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Session;
use App\Events;
use App\GuestResults;
use App\QA;
use App\Questions_Comments;
use App\Courses;
use DB;

class AdminForumController extends Controller
{
    public function index($course_code = null){
      $course = Courses::Where('course_link',$course_code)->first();
      if($course){
      // return $check_course;
      $questions = DB::SELECT("SELECT *,
        (SELECT COUNT(questions__comments.id)
         FROM questions__comments WHERE q_a_s_id = s.id) as comments,
        (SELECT CONCAT(users.name, ' ', users.surname)
         FROM users WHERE users.id = s.user_id) as Fullname,
         (SELECT users.avatar
         FROM users WHERE users.id = s.user_id) as creator_avatar,
         (SELECT CONCAT(users.name, ' ', users.surname)
          FROM users
          RIGHT JOIN questions__comments ON questions__comments.user_id = users.id
          WHERE questions__comments.q_a_s_id = s.id
          ORDER BY questions__comments.id
          DESC LIMIT 1) as last_user_comment,
          (SELECT users.avatar
          FROM users
          RIGHT JOIN questions__comments ON questions__comments.user_id = users.id
          WHERE questions__comments.q_a_s_id = s.id
          ORDER BY questions__comments.id
          DESC LIMIT 1) as last_user_avatar,

        (SELECT questions__comments.created_at
         FROM questions__comments
         WHERE q_a_s_id = s.id
         ORDER BY questions__comments.id
         DESC LIMIT 1)
        as date_last_comment
        FROM q_a_s s
        WHERE s.courses_id = :id",['id' => $course->id]);
        return view('admin.forum.view_forum',compact('course','questions'));
      }else{
        return view('errors/404');
      }
    }


    public function comments($course_code = null,$questions_comments = null){
      $question = DB::SELECT("SELECT q_a_s.*, users.name as name, users.surname as surname, users.avatar as avatar FROM q_a_s LEFT JOIN users on users.id = q_a_s.user_id WHERE q_a_s.id = :id ",['id' => $questions_comments]);
      $comments = DB::table("questions__comments")
                    ->join('users','users.id','=','questions__comments.user_id')
                    ->Where('questions__comments.q_a_s_id','=',$question[0]->id)
                    ->Select('questions__comments.*','users.name','users.surname','users.avatar')
                    ->paginate(2);



    //  Questions_Comments::Where('q_a_s_id',$question[0]->id)->get();
      $course = Courses::Where('course_link',$course_code)->first();

      if($course && $question){
        return view('admin.forum.comments',compact('course','comments','question'));
      }else{
        return '404';
      }

    }


    public function getsort($id = null,$course_code = null){
      $type = "DESC";
      if($id == "1"){
        $type = "ASC";
      }

      $course = Courses::Where('course_link',$course_code)->first();
      if($course){
      // return $check_course;
      $questions = DB::SELECT("SELECT *,
        (SELECT COUNT(questions__comments.id)
         FROM questions__comments WHERE q_a_s_id = s.id) as comments,
        (SELECT CONCAT(users.name, ' ', users.surname)
         FROM users WHERE users.id = s.user_id) as Fullname,
         (SELECT users.avatar
         FROM users WHERE users.id = s.user_id) as creator_avatar,
         (SELECT CONCAT(users.name, ' ', users.surname)
          FROM users
          RIGHT JOIN questions__comments ON questions__comments.user_id = users.id
          WHERE questions__comments.q_a_s_id = s.id
          ORDER BY questions__comments.id
          DESC LIMIT 1) as last_user_comment,
          (SELECT users.avatar
          FROM users
          RIGHT JOIN questions__comments ON questions__comments.user_id = users.id
          WHERE questions__comments.q_a_s_id = s.id
          ORDER BY questions__comments.id
          DESC LIMIT 1) as last_user_avatar,

        (SELECT questions__comments.created_at
         FROM questions__comments
         WHERE q_a_s_id = s.id
         ORDER BY questions__comments.id
         DESC LIMIT 1)
        as date_last_comment
        FROM q_a_s s
        WHERE s.courses_id = :id ORDER BY s.created_at $type ",['id' => $course->id]);
        return response()->json($questions);
      }else{
        return response()->json("Ooops");
      }


    }


    public function submitreply(Request $request){
    //  return $request->all();

    //  $validate = Questions_Comments::Where('user_id', auth()->user()->id)->Where('q_a_s_id', $request->question)->Where('comment', $request->reply)->first();
       $create = Questions_Comments::Create([
         'q_a_s_id' => $request->question,
         'user_id' => auth()->user()->id,
         'comment' => $request->reply
       ]);

       $response = array('status' => "success", 'date' => $create->created_at,'comment' => $create->comment);

        
       return response()->json($response);
    }



    public function addquestion(Request $request){

      $this->validate($request, [
      'question_add' => 'required|min:3',
      'course' => 'required',
      'title' => 'required'
      ]);
      $check_course = Courses::Where('course_link',$request->course)->first();


      if($check_course){
        $check_q = QA::Where('courses_id',$check_course->courses_id)->where('question_title',$request->title)->first();
        if(!$check_q){

          $link = str_replace(" ","-",$request->title);
          $create = QA::create([
            'user_id' => auth()->user()->id,
            'question_title' => $request->title,
            'courses_id' => $check_course->id,
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
}
