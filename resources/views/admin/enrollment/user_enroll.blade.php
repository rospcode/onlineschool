@extends('admin.layouts.master')
@section('page')
User Enrollment | {{ auth()->user()->name }}
@endsection

@section('style')
    <link href="{{ asset('backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
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
   <div class="card-body">
       <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Student                <a href="/a/users/full" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>View Users</a>
   </h4>
   </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>



<div class="row">
  <div class="col-md-6 offset-md-3">
<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Enrollment</h5>

                    </div>
                    <div class="ibox-content">
                      <div class="tabs-container">



                                                        <form method="post" id="enrollform" enctype="multipart/form-data">

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Enrol Code*</label>

                                                                <div class="col-sm-10"><input type="text"  readonly="readyonly" name="cat_code" value="EN<?php echo randomPass(5); ?>" class="form-control"></div>
                                                            </div>
                                                            <div class="form-group">
                                                             {{ csrf_field() }}
                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Course*</label>
                                                                <div class="col-sm-10">
                                                                  <select class="select2_demo_1 form-control" name="course_enroll" id="course_enroll" onchange="test(this.value)">
                                                                    <option value="">Choose Course for user...</option>
                                                                    @foreach($courses as $course)
                                                                      <option value="{{ $course->id}}">{{ $course->course_title }}</option>

                                                                      @endforeach
                                                                  </select>
                                                                  <span id="course_enroll-feedback">

                                                                  </span>
                                                                </div>
                                                            </div>

                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label" id="taguser"></label>
                                                                <div class="col-sm-10">

                                                                  <select class="select2_enrol form-control" name="user_enroll" id="user_enroll">
                                                                    <option value="">Choose User to enrol...</option>




                                                                  </select>
                                                                  <span id="user_enroll-feedback">

                                                                  </span>
                                                                </div>
                                                            </div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                              <div class="col-sm-10">
                                                              @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                              <div id="mess">



                                                              </div>

                                                              @if (session('error'))
                                                              <div class="alert alert-warning">
                                                              {{ session('error') }}
                                                              </div>
                                                              @endif
                                                            </div>
                                                            </div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2" id="submit">
                                                                     <button class='btn btn-primary' id="enrolspinner" type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
                                                                    <button class="btn btn-primary btn-sm" id="enrollsubmit" type="button">Save changes</button>
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

@endsection

@section('script')
<!-- Select2 -->
<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $("#user_enroll").hide();


  $("#enrolspinner").hide();
function test(str){
  if(str != ""){

  $('.load').show();


  $.ajax({
  type: "POST",
  url: "{{ route('admin.get.user') }}",
  data: { id: str},
  success: function(response){

    $(".load").hide();

     var details = Object.values(response);
     $("#user_enroll").html("");
    if(details.length > 0){
      for (var i = 0; i < details.length; i++) {
              $("#user_enroll").show();
              $("#taguser").html("User*");
                 $("#mess").html();
            $("#user_enroll").append("<option value='"+details[i].id+"'>"+details[i].name+" "+details[i].surname+"</option>");

      }
      $(".select2_enrol").select2();
    }else{
      $("#user_enroll").hide("");
      $("#taguser").html("");
      $(".select2_enrol").select2('destroy');
         $("#mess").html("<h3>No Available Users</h3>");
    }
  },error: function(data){
    console.log(data);
    $(".load").hide();
  }

});
} else{
   $("#user_enroll").html("");
   $("#taguser").html("");
   $("#user_enroll").hide("");
   $(".select2_enrol").select2('destroy');
 }
}
  $(document).ready(function() {
          $("#enrollsubmit").click(function(ev){
            ev.preventDefault();
                  $("#enrolspinner").show();
                    $("#enrollsubmit").hide();
               var user = $("#user_enroll").val();
               var course = $("#course_enroll").val();
               if(user == "" || course == ""){
                   $("#mess").html("<div class='alert alert-warning'> Please do not leave fields empty</div>");
                   $("#enrolspinner").hide();
                     $("#enrollsubmit").show();
               }else{
                 $.ajax({

                type: "POST",
                url: "{{ route('admin.enroll.user') }}",
                data: $('#enrollform').serialize(),
                success: function(response){
                  if(response == "success"){

                   $("#mess").html("<div class='alert alert-success' role='alert'> Student has been enrolled successfully. </div>");
                   $("#enrolspinner").hide();
                     $("#enrollsubmit").show();

                  }else if("already"){
                    $("#mess").html("<div class='alert alert-warning'>User already enrolled for this course.</div>");
                    $("#enrolspinner").hide();
                      $("#enrollsubmit").show();
                  }else if("graduated"){
                    $("#mess").html("<div class='alert alert-warning'>User already graduated for this course.</div>");
                    $("#enrolspinner").hide();
                      $("#enrollsubmit").show();
                  }else{
                    $("#mess").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
                    $("#enrolspinner").hide();
                      $("#enrollsubmit").show();
                  }

               },error: function(data){
                        var errors = data.responseJSON;
                       $.each(errors, function(key,message){
                      $("#"+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
                      $("#enrolspinner").hide();
                        $("#enrollsubmit").show();

                      });

                       }
                   });
               }
          });
    });





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
