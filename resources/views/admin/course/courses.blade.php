@extends('admin.layouts.master')
@section('page')
Courses | {{ auth()->user()->name }}
@endsection

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses    <a href="/a/add_course" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Course</a>
  </h4>
  </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>


<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Courses</h5>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>

                        <th>Enrolled Students</th>
                        <th>Sections</th>
                        <th>Status</th>
                        <th>Expires</th>
                        <th>Price</th>
                        <th>Graduates</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      @foreach($courses as $course)
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>
                        <td>{{ $course->course_title }}</td>

                        <td>
                          {{ $course->getCategory->category_title }}
                        </td>

                        <td>
                          @if(count($course->getenrolled) != "0")
                               <a class="btn btn-sm btn-primary" href="/a/students/course/{{$course->course_link}}"> {{ count($course->getenrolled) }} View Students</a>
                          @else
                           {{ count($course->getenrolled) }}
                          @endif
                        </td>

                        <td>
                                  <?php $count_section = 0; $count_lesson = 0; ?>

                              @foreach($course->getSection as $section)
                              <?php $count_section++; ?>
                                    @foreach($section->getLessons as $lesson)
                                    <?php $count_lesson++; ?>
                                    @endforeach

                              @endforeach
                                <a class="btn btn-sm btn-primary" href="/a/course/edit/{{$course->course_link}}"> {{ $count_section  }} Sections - {{ $count_lesson}} Lessons</a>

                        </td>

                        <td class="center">
                          @if($course->course_status == "Available")
                          <i class="fa fa-circle" style="color: #1ab394; font-size: 21px;" ></i>
                          @elseif($course->course_status == "Down")
                          <i class="fa fa-circle" style="color: #FF0000; font-size: 21px;" ></i>
                          @endif
                        </td>
                        <td class="center">@if($course->course_end == null)
                                            DN
                                            @else
                                            {{ $course->course_end }}
                                            @endif
                        </td>
                        <td class="center">R{{ $course->course_cost}}</td>
                        <td class="center">

                          <a class="btn btn-sm btn-primary" href="/a/graduates/{{$course->id}}">{{ count($course->getGraduates) }} View Students</a>

                        </td>
                          <td class="center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>


                            <div class="dropdown-menu">
                              @if($course->course_status == "Available")
                            <a class="dropdown-item" href="/a/takedown/{{$course->id}}">TD</a>
                              @elseif($course->course_status == "Down")
                             <a class="dropdown-item" href="/a/takedown/{{$course->id}}">MA</a>
                              @endif

                              @if($course->getTimetable != "")

                                <a href="/Docs/{{$course->getTimetable->path}}" class="dropdown-item">View TB</a>
                                <form method="post" action="{{ route('delete.timetable') }}">
                                  {{ csrf_field() }}
                                  <input type="text" value="{{ $course->getTimetable->id }}" id="timetable" hidden="hidden" name="timetable"/>
                                  <button  type="submit" class="dropdown-item" > Delete TB </button>

                                </form>

                                @else
                                <a href="/a/upload/table/{{ $course->id}}"  class="dropdown-item">Upload TB</a>
                                @endif
                                <a href="/view/course/{{ $course->course_link}}"  target="_blank"  class="dropdown-item">View Course</a>
                                <a href="/a/course/edit/{{ $course->course_link}}"  class="dropdown-item">Edit</a>
                                  <a href="/a/forum/{{ $course->course_link}}"  class="dropdown-item">Forum</a>

                            </div>

                            </div>

                          </td>
                    </tr>
                    <!-- register user modal -->
                        <div class="modal inmodal" id="myModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content animated flipInY">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                        <h4 class="modal-title">Upload TimeTable For: {{ $course->course_title }}</h4>
                                        <small class="font-bold"></small>
                                    </div>
                                    <div class="modal-body">
                                      <div class="col-lg-12">
                                      <div class="ibox ">

                                          <div class="ibox-content">
                                              <form method="post" id="upload<?php echo $count; ?>"  enctype="multipart/form-data">

                                                  {{ csrf_field() }}



                                                  <div class="form-group row"><label class="col-lg-2 col-form-label">TimeTable</label>

                                                      <div class="col-lg-10">
      <input type="file" id="file" accept="image/*" name="file"  class="form-control">
                                                        <div id="file-field" style="color: red;">

                                                         </div>
                                                      </div>
                                                  </div>




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
                                                          <button class="btn btn-primary" id="uploadtimetable" onclick="upload({{ $course->id}},'upload',<?php echo $count; ?>)" type="button">Upload TimeTable</button>
                                                      </div>
                                                  </div>

                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                           @if($course->getTimetable != "")
                        <!-- register user modal -->
                            <div class="modal inmodal" id="myUpdate<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog  modal-lg">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                            <h4 class="modal-title">Change TimeTable For: {{ $course->course_title }}</h4>
                                            <small class="font-bold"></small>
                                        </div>
                                        <div class="modal-body">
                                          <div class="col-lg-12">
                                          <div class="ibox ">

                                              <div class="ibox-content">
                                                  <form method="post" id="courseform"  enctype="multipart/form-data">

                                                      {{ csrf_field() }}

                                                      <div class="form-group row"><label class="col-lg-2 col-form-label">TimeTable</label>

                                                          <div class="col-lg-10">
          <input type="file" accept="image/*" name="file"  class="form-control">
                                                            <div id="file-field">

                                                             </div>
                                                          </div>
                                                      </div>




                                                    <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label"></label>
                                                     <div class="col-lg-10">
                                                       <div id="courseerrors">Last Timetable was updated at {{$course->getTimetable->created_at }}</div>
                                                     </div>
                                                   </div>

                                                      <div class="form-group row">
                                                          <div class="col-lg-offset-2 col-lg-10">
                                                              <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Do you want all students under this course to receive an email of this new TimeTable Update?</label></div>
                                                              <div class="i-checks"><label> <input type="radio" value="option1" name="a" checked> <i></i> Yes</label></div>
                                                              <div class="i-checks"><label> <input type="radio" value="option2" name="a"> <i></i> No</label></div>

                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <div class="col-lg-offset-2 col-lg-10">
                                                              <button class="btn btn-primary" id="signupbutton" type="button">Change TimeTable</button>
                                                          </div>
                                                      </div>

                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- register user modal end -->

                    @endif
                    <?php $count++; ?>

                    @endforeach



                    </tbody>

                    </table>
                        </div>

                    </div>
                </div>
              </div>



              </div>
              </div>







@endsection
@section('notifications')
  @if(session('msg'))

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


@section('script')
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function upload(str,hun,three){
   var file = $("#file");
   var radios = document.getElementsByName('options');
   var checked = "";
for (var i = 0, length = radios.length; i < length; i++)
{
 if (radios[i].checked)
 {
  // do whatever you want with the checked radio
  checked = radios[i].value;
  // only one radio can be logically checked, don't check the rest
  break;
 }
}
var name = hun+""+three;
if(checked == "" || file == ""){
   alert(file);
}else{
  $.ajax({
  type: "POST",
  url: "{{ route('admin.upload.timetable') }}",
  data: $("#name").serialize(),
  success: function(response){
    console.log(response);

  },error: function(data){
    console.log(data);
   }
  });
 }
}

function clearmessage(){
  $("#signupmessage").html("");
}
</script>
@endsection
