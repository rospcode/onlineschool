@extends('admin.layouts.master')
@section('page')
Add Course | {{ auth()->user()->name }}
@endsection

@section('style')
    <link href="{{ ('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
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
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses    <a href="" data-toggle="modal" data-target="#myModal2" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Course</a>
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

                      <form method="post" id="courseform" action="{{ route('course.form') }}"  enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Avatar</label>

                              <div class="col-lg-10">
<input type="file" accept="image/*" name="file" id="file" onclick="cancel_errors(this.id)" class="form-control">
                                <div id="file-field" style="color:red;">
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

                              <div class="col-lg-10"><input type="text" name="course_title" value="{{ old('course_title') }}" onkeydown="cancel_errors(this.id)" id="course_title" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="Course Title" class="form-control">
                                <div id="course_title-field" style="color:red;">
                                  {{ $errors->has('course_title') ? $errors->first('course_title') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Category</label>

                              <div class="col-lg-10">
                                <select class="select2_demo_1 form-control" name="course_category" onchange="cancel_errors(this.id)" id="course_category">
                                  <option value="">Choose Course Category...</option>
                                  @foreach($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->category_title }}</option>

                                    @endforeach
                                </select>
                                <div id="course_category-field" style="color:red;">
                                  {{ $errors->has('course_category') ? $errors->first('course_category') : ''}}
                                 </div>
                              </div>
                          </div>

                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Cost</label>

                              <div class="col-lg-10">

                                <div class="input-group m-b"><span class="input-group-prepend">
                          <button type="button" class="btn btn-primary">ZAR</button> </span> <input type="text" value="{{ old('course_cost') }}" name="course_cost" id="course_cost" onkeydown="cancel_errors(this.id,this)" class="form-control">
                      </div>
                      <div id="course_cost-field" style="color:red;">
                        {{ $errors->has('course_cost') ? $errors->first('course_cost') : ''}}
                       </div>
                              </div>
                          </div>

                          <div class="form-group row"><label class="col-lg-2 col-form-label">Cost Add Info</label>

                              <div class="col-lg-10">

                                <div class="input-group m-b">
                                  <input type="text" value="{{ old('cost_add_notes') }}" name="cost_add_notes" id="cost_add_notes" onkeydown="cancel_errors(this.id,this)" class="form-control">
                               </div>
                      <div id="course_add_notes-field" style="color:red;">
                        {{ $errors->has('course_add_notes') ? $errors->first('course_add_notes') : ''}}
                       </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Duration</label>

                              <div class="col-lg-10"><input type="text" name="course_duration" value="{{ old('course_duration') }}" onkeydown="cancel_errors(this.id)" id="course_duration" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Course Duration" class="form-control">
                                <div id="course_duration-field" style="color:red;">
                                  {{ $errors->has('course_duration') ? $errors->first('course_duration') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Time</label>

                              <div class="col-lg-10">
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" class="form-control" onclick="cancel_errors(this.id)" value="{{ old('course_time') }}" name="course_time" id="course_time" value="09:30" >
                                    <span class="input-group-addon">
                                        <span class="fa fa-clock-o"></span>
                                    </span>
                                </div>
                                <div id="course_time-field" style="color:red;">
                                  {{ $errors->has('course_time') ? $errors->first('course_time') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Notes</label>

                              <div class="col-lg-10">

                                <textarea name="content" class="form-control" onkeypress="cancel_errors(this.id)"id="editor"> {{ old('content')}}</textarea>
                                <div id="editor-field" style="color:red;">
                                  {{ $errors->has('content') ? $errors->first('content') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Venue</label>

                              <div class="col-lg-10"><input type="text" name="course_venue"  value="{{ old('course_venue') }}" id="course_venue" onkeydown="cancel_errors(this.id)" placeholder="Course Venue" class="form-control">
                                <div id="course_venue-field" style="color:red;">
                                  {{ $errors->has('course_venue') ? $errors->first('course_venue') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row"><label class="col-lg-2 col-form-label">Course Status</label>

                              <div class="col-lg-10">
                                <select class="select2_demo_1 form-control" onchange="myFunction()"  id="course_status" name="course_status">
                                  <option value="Available">Available</option>
                                  <option value="Down">Down</option>
                                  <option value="Expires" >Expires</option>

                                </select>

                                <div id="course_status-field" style="color:red;">
                                  {{ $errors->has('course_status') ? $errors->first('course_status') : ''}}
                                 </div>
                              </div>
                          </div>
                          <div class="form-group row" id="end_date"><label class="col-lg-2 col-form-label">Course End Date:</label>

                              <div class="col-lg-10">
                                <input type="text" name="course_end" id="course_end" onkeydown="cancel_errors(this.id)" placeholder="Select End Date" class="form-control">
                                <div id="course_end-field" style="color:red;">
                                     {{ $errors->has('course_end') ? $errors->first('course_end') : ''}}
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
                                  <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Do you want all users to receive an email of this new course?</label></div>
                                  <div class="i-checks"><label> <input type="radio" value="option1" name="a" checked> <i></i> Yes</label></div>
                                  <div class="i-checks"><label> <input type="radio" value="option2" name="a"> <i></i> No</label></div>

                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <button class="btn btn-primary" onclick="$('.load').show();"  type="submit">Create Course</button>
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

<script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>
<script>
  $('.clockpicker').clockpicker();
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>



@if($errors->has('course_end'))
<script type="text/javascript">
$("#end_date").show();
</script>

@else

<script type="text/javascript">
$("#end_date").hide();
</script>
@endif

<script type="text/javascript">




function myFunction() {
  var x = document.getElementById("course_status").value;
  if(x == "Expires"){
    $("#end_date").show();
  }else{
    $("#end_date").hide();
  }

}



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
function numbers(input) {
  if(str == "course_cost"){
    var code = /[^0-9]/g;
    if (input.value.match(code)) {

        alert("the cost field must have numbers only");
        str.value = str.value.replace(code, "");

    }

  }
    var code = /[^0-9]/g;
    if (input.value.match(code)) {

        alert("the cost field must have numbers only");

    }
    input.value = input.value.replace(code, "");
}
function clearmessage(){
  $("#signupmessage").html("");
}

function cancel_errors(str,input){
  $("#"+str+"-field").html("");
  if(str == "course_cost"){
    var code = /[^0-9]/g;
    if (input.value.match(code)) {
      input.value = "";

        alert("the cost field must have numbers only");

    }

  }
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
