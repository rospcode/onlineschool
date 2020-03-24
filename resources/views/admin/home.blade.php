@extends('admin.layouts.master')
@section('page')
Home | {{ auth()->user()->name }}
@endsection

@section('style')
<link href="{{ ('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">

 <link href="{{ asset('backend/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

  <link href="{{ asset('backend/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">

  <link href="{{ ('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
  <style>
  .popover{
    display: block;
    top: 166.1px;
    left: 448.333px;
    z-index: 2210;
  }

  .ibox-wrpp .ibox-content{
    height: 338px;width: 240px;background-color: white;border: 1px solid #d9d9d9;padding: 0px 0px 0px 0px;border-radius: 9px;
  }

  .ibox-wrpp .ibox-content:hover{

    cursor: pointer;
    filter: grayscale(100%);
  }

  p {
    margin-top: 0;
    margin-bottom: 0rem;
}

.cov {
  padding-top: 0px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 5px;
}
  </style>

    <script src="{{ asset('colorpicker/jscolor.js') }}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="wrapper wrapper-content">
<div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success">Number of courses</span>
                    <h5>Courses</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($course)}}</h1>
                    <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="label label-info">Enrolled students</span>
                    <h5>Enrolled Students</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($enrolled)}}</h1>
                    <div class="stat-percent font-bold text-info"><i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary ">Uploaded course Docs</span>
                    <h5>Course Files</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($files)}}</h1>
                    <div class="stat-percent font-bold text-navy"> <i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary ">Number of students</span>
                    <h5>Students</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($students)}}</h1>
                    <div class="stat-percent font-bold text-primary"><i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
       </div>
     </div>



    <div class="row">

      <div class="col-lg-3">
          <div class="ibox ">
              <div class="ibox-title">
                  <h5>Your daily feed</h5>
                  <div class="ibox-tools">
                      <span class="label label-warning-light float-right">{{ $feeds_count }}</span>
                     </div>
              </div>
              <div class="ibox-content">

                  <div>
                      <div class="feed-activity-list" style=" overflow-y: scroll; height: 400px;" id="feed">

                        @foreach($feeds_all as $feeds)

                          <div class="feed-element">

                              <div class="media-body ">
                                  <small class="float-right">{{ $feeds->created_at->diffForHumans()}}</small>
                                  <strong>Action: </strong> {{ $feeds->action }} <br>
                                  <small class="text-muted">{{ $feeds->created_at }}</small>

                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>

      </div>
    </div>
  <div class="col-lg-9">

          <div class="ibox-title">
              <h5>Courses Created</h5>
              <a class="btn btn-sm btn-success"  href="/a/addevent/create" style="float: right;position: relative;bottom: 5px;background-color: #0c1832;border-color: #0c1832;">Add Event</a>



          </div>

          <div class="row" style="padding-top: 40px;">


            @foreach($course as $courses)
            <div class="col-lg-4" id="personalID" onclick="getcourse($(this).data('course_id'), '{{$courses->course_title}}')"  style="padding-top: 10px; padding-bottom: 10px; margin-right: 30px; max-width: 240px;" data-course_id="{{ $courses->course_link}}"><!-- card -->
              <div class="ibox-wrpp" >
              <div class="ibox-content ibox-heading" style="">
                <div class="cont" style="background: url(../img/courses/{{ $courses->course_img }}) no-repeat center;z-index: 99999;width: 100%;height: 140px; border-top-left-radius: 9px; border-top-right-radius: 9px;" >

                </div>


                     @if(strlen($courses->course_title) > '50')
                      <div style="padding-top: 10px; padding-bottom: 10px;padding-left: 2px;padding-right: 2px;" class="text-center">
                        <a href="javascript:void(0);" style="font-size: 1rem;"> {{ $courses->course_title}}</a>
                         @else
                          <div style="padding-top: 20px; padding-bottom: 10px;padding-left: 2px;padding-right: 2px;" class="text-center">
                         <a href="javascript:void(0);" style="font-size: 1rem;">{{ $courses->course_title}}</a>
                         @endif

              </div>

              <div class="cov">

              <p>
                  @if(strlen($courses->course_notes) > '150')
                  {!! substr($courses->course_notes, 0,180) !!}...
                  @else
                  {!! $courses->course_notes !!}
                  @endif
              </p>
            </div>
              </div>



            </div>

            </div><!-- card -->
            @endforeach


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

                        <h4 class="modal-title">Add A Reminder</h4>
                        <small class="font-bold"></small>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-12">
                      <div class="ibox ">

                          <div class="ibox-content">
                              <form method="post" id="adminreminder" >
                                  <p></p>
                                  {{ csrf_field() }}

                                  <div class="form-group row" id="data_2">
                                      <label class="col-lg-2 col-form-label">Date Reminder</label>
                                      <div class="col-lg-10">
                                      <div class="input-group date ">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="date" id="date" class="form-control" value="03/07/2019">
                                          <div id="date-errorfield" style="color: red;">

                                           </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row input-group clockpicker" data-autoclose="true">
                                      <label class="col-lg-2 col-form-label">Reminder Time</label>
                                      <div class="col-lg-10">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                      <input type="text" class="form-control"   name="time" id="time" value="09:30" >
                                      <div id="time-errorfield" style="color: red;">

                                       </div>
                                    </div>
                                    </div>

                                  </div>

                                  <div class="form-group row"><label class="col-lg-2 col-form-label">Reminder</label>

                                      <div class="col-lg-10"><textarea type="text" name="notes" id="notes" placeholder="What do you need to be reminded of, {{ auth()->user()->name}}?" class="form-control"></textarea>
                                        <div id="notes-errorfield" style="color: red;">

                                         </div>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i>
                                             When you add a reminder, you will receive a notification via email, reminding you an before your schedule.</label></div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"></label>
                                   <div class="col-lg-10">
                                     <div id="remindermessage"></div>
                                   </div>
                                 </div>

                                  <div class="form-group row">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <button class='btn btn-primary' id="spinner" type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
                                          <button class="btn btn-primary" id="signupbutton" type="button">Add Reminder</button>
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

    <!-- Info Alert Modal -->
    <div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <h4 class="mt-2" id="course_name_here"></h4>
                        <p class="mt-3">Would you like to</p>
                        <a href="#"  class="btn btn-info my-2" id="update_forum">View Forum</a>
                        <a href="#" id="update_link" class="btn btn-success my-2">View Course</a>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




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

        @section('script')

        <!-- Date range use moment.js same as full calendar plugin -->
        <script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>

        <!-- Date range picker -->
        <script src="{{ asset('backend/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Data picker -->
        <script src="{{ asset('backend/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

        <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>





           <script type="text/JavaScript">
           var yearsAgo = new Date();
           yearsAgo.setFullYear(yearsAgo.getFullYear() - 20);

           $('#selector').datepicker('setDate', yearsAgo );


           $('#data_2 .input-group.date').datepicker({
               startView: 1,
               todayBtn: "linked",
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true,
               format: "yyyy-mm-dd"
           });
           </script>



        <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $(document).ready(function() {
           $("#spinner").hide();

                $("#signupbutton").click(function(){
                 $("#spinner").show();
                 $("#signupbutton").hide();


               var time = $("#time").val();
               var date = $("#date").val();
               var notes = $("#notes").val();



                    $.ajax({
                    type: "POST",
                    url: "{{ route('admin.add.reminder') }}",
                    data: $("#adminreminder").serialize(),
                    success: function(response){
                      $("#spinner").hide();
                      $("#signupbutton").show();
                      if(response == "success"){
                         $("#remindermessage").html("<div class='alert alert-success'>Successfully Added a reminder, refreshing page</div>");
                         var timeleft = 2;
                         var downloadTimer = setInterval(function(){

                         timeleft -= 1;
                         if(timeleft <= 0){
                         clearInterval(downloadTimer);
                         window.location = '/a/home';
                         }
                         }, 1000);
                      }else if(response == "old"){
                        $("#spinner").hide();
                        $("#signupbutton").show();
                        $("#remindermessage").html("<div class='alert alert-warning'>sorry, seems like you mistakenly entered an old date.</div>");
                      }else{
                        $("#remindermessage").html("<div class='alert alert-warning'>Ooops looks like something went wrong, please try again later.</div>");
                      }





                    },error: function(data){
                      var response = data.responseJSON;
                      $.each(response, function(key, message){
                        $("#"+key+"-errorfield").html("<div style='color: red;'>"+message+"</div>");
                        $("#spinner").hide();
                        $("#signupbutton").show();
                      });
                    }

                  });




       });
 });



             function deletereminder(val){
               alert(val);
             }


function getcourse(val,title){
  jQuery('#alert-modal').modal('show', {backdrop: 'static'});
  document.getElementById('update_link').setAttribute('href' , "/a/course/edit/"+val);
  document.getElementById('update_forum').setAttribute('href' , "/a/forum/"+val);
  $('#course_name_here').html(title);

}

        </script>
        @endsection
