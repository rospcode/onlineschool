@extends('admin.layouts.master')
@section('page')
Add Timetable
@endsection

@section('csrf')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<?php
function randomPass($length){
  $chars = "123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
  return $str;
}

 ?>

 <div class="wrapper wrapper-content">
 <div class="row">
 <div class="col-xl-12">
   <div class="card">
     <div class="row">
     <div class="col-lg-12">
         <div class="ibox ">
             <div class="ibox-content text-center">

                 <h2><span class="text-navy">Course Timetable</span><br>
                 </h2>

                 <p>
                   upload timetable for the course: {{ $course->course_title}}
                 </p>
                 @if($course->getTimetable != "")
                    <a href="/Docs/{{$course->getTimetable->path}}" class="btn btn-success">View TimeTable</a>
                    @endif


             </div>
         </div>

   </div>
   </div>
   </div> <!-- end card -->

 </div>
 </div>
 </div>



<div class="row">
  <div class="col-md-8 offset-md-2">
    @if($course->getTimetable == "")
<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">

                    <div class="ibox-content">


                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" id="upload" action="{{ route('admin.upload.timetable') }}"  enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <div class="form-group row"><label class="col-lg-2 col-form-label">TimeTable</label>

                                                                <div class="col-lg-10">
                                                                          <input type="file" id="file" accept="image/*" name="file"  class="form-control">
                                                                  <div id="file-field" style="color: red;">

                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <input type="text" id="courses_id" hidden="hidden" name="courses_id" value="{{ $course->id}}" />




                                                          <div class="form-group row">
                                                          <label class="col-lg-2 col-form-label"></label>
                                                           <div class="col-lg-10">
                                                             <div id="uploaderrors"></div>
                                                           </div>
                                                         </div>

                                                            <div class="form-group row">
                                                                <div class="col-lg-offset-2 col-lg-10">
                                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Do you want all students under this course to receive an email of this new TimeTable?</label></div>
                                                                    <div class="i-checks"><label> <input type="radio" value="yes" name="options"> <i></i> Yes</label></div>
                                                                    <div class="i-checks"><label> <input type="radio" value="no" name="options"> <i></i> No</label></div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-offset-2 col-lg-10">
                                                                    <button class="btn btn-primary" id="uploadtimetable"  type="submit">Upload TimeTable</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                      </div>
                                                  </div>




                                              </div>




                    </div>
                </div>
              </div>



              </div>
              </div>
              @endif

            </div>
          </div>

@endsection



@section('notifications')
  @if (session('msg'))

<script type="text/javascript">

$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Successfully', "{{ session('msg') }}");

    }, 1300);
  });

    </script>
@endif
    @endsection
