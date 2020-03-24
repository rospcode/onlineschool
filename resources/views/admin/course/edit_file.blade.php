@extends('admin.layouts.master')
@section('page')
Edit Course | {{ auth()->user()->name }}
@endsection

@section('content')
<?php
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
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
                        <h5>Edit Course: {{ $course->course_title }}</h5>
                      
                    </div>
                    <div class="ibox-content">

                      <form method="post" id="courseform" action="{{ route('course.form') }}"  enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Avatar</label>

                              <div class="col-lg-10">

<input type="file" accept="image/*" name="file" id="inputImage" class="form-control">
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('file') ? $errors->first('file') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-10">
<input type="text" name="code" hidden="hidden" id="code" value="<?php echo randomPass(9); ?>"  class="form-control">

                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Title</label>

                              <div class="col-lg-10"><input type="text" name="course_title" value="{{ $course->course_title }}" id="course_title" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="Course Title" class="form-control">
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_title') ? $errors->first('course_title') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Category</label>

                              <div class="col-lg-10">
                                <select class="select2_demo_1 form-control" name="course_category" id="course_category">
                                      <option value="{{ $course->getCategory->id}}">{{ $course->getCategory->category_title }}</option>
                                  @foreach($categories as $category)

                                    @if($course->getCategory->id != $category->id)
                                    <option value="{{ $category->id}}">{{ $category->category_title }}</option>
                                    @endif

                                    @endforeach
                                </select>
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_category') ? $errors->first('course_category') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Cost</label>

                              <div class="col-lg-10">

                                <div class="input-group m-b"><span class="input-group-prepend">
                          <button type="button" class="btn btn-primary">ZAR</button> </span> <input type="text" value="{{ $course->course_cost }}" name="course_cost" id="course_cost" class="form-control">
                      </div>
                      <div id="name-field" style="color:red;">
                        {{ $errors->has('course_cost') ? $errors->first('course_cost') : ''}}
                       </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Duration</label>

                              <div class="col-lg-10"><input type="text" name="course_duration" value="{{ $course->course_duration }}" id="course_duration" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Course Duration" class="form-control">
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_duration') ? $errors->first('course_duration') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Time</label>

                              <div class="col-lg-10">
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" class="form-control" name="course_time" id="course_time" value="{{ $course->course_time }}" >
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_time') ? $errors->first('course_time') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Notes</label>

                              <div class="col-lg-10">

                                <textarea name="content" class="form-control" value="" id="editor">
                                       {{ $course->course_notes }}
                                </textarea>
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('content') ? $errors->first('content') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Venue</label>

                              <div class="col-lg-10"><input type="text" name="course_venue" value="{{ $course->course_venue }}" id="course_venue" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Course Venue" class="form-control">
                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_venue') ? $errors->first('course_venue') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Status</label>

                              <div class="col-lg-10">
                                <select class="select2_demo_1 form-control" id="course_status" name="course_status">
                                  <option value="Available" >Available</option>
                                  <option value="Down">Down</option>
                                  <option value="Expired">Expires</option>

                                </select>

                                <div id="name-field" style="color:red;">
                                  {{ $errors->has('course_status') ? $errors->first('course_status') : ''}}
                                 </div>
                              </div>
                          </div>

                        <div class="form-group row">
                        <label class="col-lg-2 col-form-label"></label>
                         <div class="col-lg-10">
                           <div id="courseerrors"></div>
                         </div>
                       </div>


                          <div class="form-group row">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <button class="btn btn-primary" type="submit">Create Course</button>
                              </div>
                          </div>

                      </form>

                    </div>
                </div>
              </div>



              </div>
              </div>




              <!-- register user modal -->
                  <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                          <div class="modal-content animated flipInY">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                  <h4 class="modal-title">Create a Course</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">

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


@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        getme(){
          alert("oka");
        }
</script>




<script type="text/javascript">

  $(function(){
        $("#signupbutton").click(function(){

          var course_title = $("#course_title").val();
          var course_category = $("#course_category").val();
          var course_cost = $("#course_cost").val();
          var course_duration = $("#course_duration").val();
          var course_time = $("#course_time").val();
          var editor = $("#editor").val();
          var course_venue = $("#course_venue").val();
          var course_status = $("#course_status").val();

          $("#courseerrors").html("");



         if(course_title == ""){
             $("#courseerrors").html("<div class='alert alert-warning'>course_title</div>");
           }else if(course_category == ""){
             $("#courseerrors").html("<div class='alert alert-warning'>course_category</div>");
           }else if(course_cost == ""){
            $("#courseerrors").html("<div class='alert alert-warning'>course_cost</div>");
           }else if(course_duration == ""){
             $("#courseerrors").html("<div class='alert alert-warning'>course_duration</div>");
           }else if(course_time == ""){
             $("#courseerrors").html("<div class='alert alert-warning'>course_time</div>");
           }else if(course_venue == ""){
             $("#courseerrors").html("<div class='alert alert-warning'>course_venue</div>");
           }else if(course_status == ""){
             $("#courseerrors").html("<div class='alert alert-warning'course_status</div>");
           }
      else {
        $.ajax({

       type: "POST",
       url: "{{ route('course.form') }}",
       data: $('#courseform').serialize(),
       success: function(response){
         if(response == "success"){
           $("#courseerrors").html("<div class='alert alert-success'>User Successfully Registered, email sent.</div>");
         }else{
           $("#courseerrors").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
         }

      },error: function(data){
         var errors = data.responseJSON;
         console.log($('#courseform').serialize());

      }
   });

         }


 });

});


function enableTxt(elem) {
    var id = $(elem).attr("id");
    $("#"+id+"-field").html("");


}
function clearmessage(){
  $("#signupmessage").html("");
}
</script>
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
