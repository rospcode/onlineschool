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
use App\GuestResults;
use App\Graduates;
use App\quiz;
use App\tests;
use DateTime;
use Exporter;
use Mail;
use DB;
use \PDF;

use Excel;


class AdminCourseController extends Controller
{
    public function edit_course($id = null){
      $get_course = Courses::Where('course_link',$id)->first();
      $get_categories = Categories::all();
      if($get_course != null){
        return view('admin/course/edit_course',compact('get_course','get_categories'));
      }
      return view('edit_course',compact('get_course'));
    }

    public function addsection(Request $request){
      $this->validate($request, [
      'section_title' => 'required|min:2|unique:Course_sections',
      ]);
      $get_course = Courses::Where('course_link',$request->course_title)->first();
      $section_code = str_random(10);
      $created_at = new DateTime();
      $updated_at = new DateTime();
      $cat = Course_section::Create([
          'section_code' => $section_code,
          'courses_id' => $get_course->id,
          'section_title' => $request->section_title,
          'created_at' => $created_at,
          'updated_at' => $updated_at,
      ]);

        return back()->with("msg","Section added Successfully!");
    }


    public function printtest($test = null){

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
Where t.test_code = :test_code",['test_code' => $test]);

    //  $pdf = PDF::loadView('prints.usertest',compact('get_test'));
    //   return $pdf->download('pdfview.pdf');
        //return $get_test;
     return view('prints.usertest',compact('get_test'));


/**
    return Excel::create('prints.usertest', function($excel) use ($test) {

    $excel->sheet('mySheet', function($sheet) use ($test)

    {

        $sheet->fromArray($test);

    });

})->export('XLS');

**/



    }

    public function addlesson(Request $request){
      $this->validate($request, [
      'lesson_title' => 'required|min:2|unique:Course_lessons',
      'course_section_id' => 'required|min:1',
      'lesson_type' => 'required',
      'summary' => 'required|min:2',
      ]);

      $created_at = new DateTime();
      $updated_at = $created_at;

   if($request->lesson_type != "video"){
     $cat_code = str_random(7);
     $image = $request->file('attachment');
     $name = $cat_code.'.'.$image->getClientOriginalExtension();
     $destinationPath = public_path('/backend/Course_files');
     $image->move($destinationPath, $name);
     $request->attachment = 'backend/Course_files/'.$name;
   }


      $lesson = Course_lesson::Create([
        'lesson_code' => str_random(5),
        'lesson_title' =>  $request->lesson_title,
        'course_section_id' =>  $request->course_section_id,
        'lesson_type' =>  $request->lesson_type,
        'summary' =>  $request->summary,
        'attachment' =>  $request->attachment,
        'shown' => '',
        'created_at' => $created_at,
        'updated_at' => $updated_at,
      ]);


      return back()->with("msg","Lesson Added Successfully!");
    }

    public function delete_test($id = null){
      $get_course = tests::where('test_code',$id)->first();
      $get_course->delete();
      return back()->with('msg','Successfully deleted the test');
    }


    public function addquiz(Request $request){
      $this->validate($request, [
      'quiz_title' => 'required|min:2|unique:quizzes',
      'course_section_id' => 'required|min:1',

      ]);

        $quiz_link = str_replace(" ","-",$request->quiz_title);

        $pair = str_random(12);

        $create = tests::create([
          'test_code' => $pair,
          'test_title' => $request->quiz_title,
          'courses_id' => $request->course_id,
          'course_section_id' => $request->course_section_id
        ]);


      return back()->with("msg","Quiz Added Successfully!");

    }

    public function edit_section(Request $request){

      $get_section = Course_section::Where('section_code', $request->edit_section_id)->first();
      $get_section->section_title = $request->edit_section_title;
      $get_section->save();
      return back()->with("msg","Section Edited!");

    }

    public function deletesection($id = null){
       $get_section = Course_section::Where('section_code',$id)->first();
       $get_section->visible = 'n';
       $get_section->save();
      return back()->with("msg","Section Deleted!");
    }

    public function delete_course($id = null){
      $get_lesson = Course_lesson::where("lesson_code",$id)->first();
      $get_lesson->shown = "n";
      $get_lesson->save();
    return back()->with("msg","Lesson: $get_lesson->lesson_title deleted successfully!");
    }

    public function upload_edit_course(Request $request){

      $get_course = Courses::Where("course_link",$request->course_link)->first();
      if($request->requirements != null){


       $get_requirements = requirements::where("courses_id",$get_course->id)->get();

       //adding course requirements
       if($get_requirements != null){
         $get_requirements->each->delete();

         for($i = 0; $i < count($request->requirements); $i++) {
           if($request->requirements[$i] != null){
           $require_create = requirements::Create([
              'courses_id' => $get_course->id,
              'requirements' =>  $request->requirements[$i]
           ]);
         }

          }
       }else{ //if requirements is empty
         for($i = 0; $i < count($request->requirements); $i++) {
           if($request->requirements[$i] != null){
           $require_create = requirements::Create([
              'courses_id' => $get_course->id,
              'requirements' =>  $request->requirements[$i]
           ]);
         }
          }
       }
     }


        //updating existing

      if($request->hasFile('course_img')){
        $request->code = str_random(10);
        $image = $request->file('course_img');
        $name = $request->code.'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/courses');
        $image->move($destinationPath, $name);
        $get_course->course_img = $name;
      }

       $get_course->course_title = $request->course_title;
       $get_course->course_notes = $request->course_notes;
       $get_course->categories_id = $request->categories_id;
       $get_course->course_level = $request->course_level;
       $get_course->course_venue = $request->course_venue;
       $get_course->course_cost = $request->course_cost;
       $get_course->save();

        return back()->with("msg","Successfully updated course: $request->course_title");
    }


}
