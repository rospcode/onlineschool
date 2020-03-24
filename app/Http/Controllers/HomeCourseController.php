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
use App\Graduates;
use App\SignupRequests;
use App\CourseRequests;
use App\Course_section;
use App\Course_lesson;
use App\Messages;
use Hash;
use Auth;
use Mail;
use DB;

class HomeCourseController extends Controller
{
    public function read($course_link = null, $lesson_code = null){
      if($course_link == "" || $lesson_code == ""){
        return view('404/error');
      }else{ //else if the person is has thing filled
         $course = Courses::Where("course_link",$course_link)->first();
         $get_lesson = Course_lesson::Where("lesson_code",$lesson_code)->first();
         if($course == null || $get_lesson == null){
           return "Broken Link";
         }else{
           $get_information = DB::select("SELECT cl.lesson_title, c.course_title, cl.lesson_type, cl.id , 'video' as duration, cl.lesson_code, cs.section_title, IFNULL(v.time,0) as time FROM enrolleds er
           INNER JOIN courses c ON c.id = er.courses_id
           INNER JOIN course_sections cs ON cs.courses_id = c.id
           INNER JOIN course_lessons cl ON cl.course_section_id = cs.id
           LEFT JOIN video_watch_times v ON v.lesson_id = cl.id WHERE er.user_id = :id and c.course_link = :course_link order by cl.lesson_code = :lesson_code desc",['id' => auth()->user()->id, 'course_link' => $course_link,'lesson_code' => $lesson_code]);


      for($i = 0; $i < count($get_information); $i++) {
        if($get_information[$i]->lesson_type == "video"){


          $file = './capa.mp4';
          $handle = fopen($file, "r");
            ## read video file size
            $contents = fread($handle, filesize($file));
            fclose($handle);
            $make_hexa = hexdec(bin2hex(substr($contents,strlen($contents)-3)));


            $pre_duration = hexdec(bin2hex(substr($contents,strlen($contents)-$make_hexa,3))) ;
$post_duration = $pre_duration/1000;
$timehours = $post_duration/3600;
$timeminutes =($post_duration % 3600)/60;
$timeseconds = ($post_duration % 3600) % 60;
$timehours = explode(".", $timehours);
$timeminutes = explode(".", $timeminutes);
$timeseconds = explode(".", $timeseconds);
$get_information[$i]->duration = $timehours[0]. ":" . $timeminutes[0]. ":" . $timeseconds[0];





        }else{
          $get_information[$i]->duration = '1Min';
        }
      }
//  return $get_information;

    return view('home/reader',compact('course','get_lesson','lesson_code','get_information'));
         }
      }
    }

    public function get_course_by_category($id){
      $category = Categories::where('category_code',$id)->first();


      $get_course = Courses::where('categories_id',$category->id)->get();

      return response()->json($get_course);
    }
}
