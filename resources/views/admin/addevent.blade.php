@extends('admin.layouts.master')
@section('page')
Home | {{ auth()->user()->name }}
@endsection

@section('style')
<link href="{{ ('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">

 <link href="{{ asset('backend/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

  <link href="{{ asset('backend/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">



  <link href="{{ asset('backend/css/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='stylesheet' media='print'>


  <link href="{{ asset('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">

  <link href="{{ asset('backend/css/plugins/colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
  <style>
  .popover{
    display: block;
    top: 166.1px;
    left: 448.333px;
    z-index: 2210;
  }

  .ibox-wrpp .ibox-content{
    height: 250px;width: 100%;background-color: white;border: 1px solid #d9d9d9;padding: 0px 0px 0px 0px;border-radius: 9px;
  }

  .ibox-wrpp .ibox-content:hover{

    cursor: pointer;
    filter: grayscale(100%);
  }
  .fc-event, .fc-event-dot {
      background-color: #3788d8;
  }
  .fc-event {
      position: relative;
      display: block;
      font-size: 0.85em;
      line-height: 1.4;
      border-radius: 3px;
      border: 1px solid #3788d8;
  }

  .modal-lg {
    max-width: 1000px;
}
/* SHADE DAYS IN THE PAST */
   td.fc-day.fc-past {
       background-color: #EEEEEE;
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
                    <span class="label label-success float-right">Number of courses</span>
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
                    <span class="label label-info float-right">Number of enrolled students</span>
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
                    <span class="label label-primary float-right">Number of uploaded course Docs</span>
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
                    <span class="label label-primary float-right">Number of students</span>
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


  <div class="col-lg-12">

          <div class="ibox-title">
              <h5></h5>
              <a class="btn btn-sm btn-success" data-toggle="modal" data-target="#addeventmodal" style="float: right;position: relative;bottom: 5px;background-color: #0c1832; color: white; border-color: #0c1832;">Add Event</a>



          </div>

          <div class="row" style="padding-top: 40px;">

           <div class="col-lg-12">
             <div class="ibox-content">
                 <div id="calendar"></div>
             </div>
           </div>



          </div>



  </div>



    </div>
    </div>


    <!-- register user modal -->
        <div class="modal inmodal" id="addeventmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content animated flipInY">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                        <h4 class="modal-title">Add Event</h4>
                        <small class="font-bold"></small>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-12">
                      <div class="ibox ">

                          <div class="ibox-content">
                              <form method="post" id="addadminevent" class="" action="/a/addadminevent">
                                  <p></p>
                                  {{ csrf_field() }}


                                  <div class="form-group row" id="data_2">
                                      <label class="col-lg-2 col-form-label">Event Name: </label>
                                      <div class="col-lg-10">
                                      <div class="input-group date ">
                                          <input type="text" name="event_name" id="event_name" class="form-control" placeholder="e.g Our Meeting" required>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group row" id="groupdate">
                                      <label class="col-lg-2 col-form-label">Start Date</label>
                                      <div class="col-lg-4">
                                      <div class="input-group date ">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="event_start_date" id="event_start_date" class="form-control" value="2020-02-12" required>
                                          <div id="date-errorfield" style="color: red;">

                                           </div>
                                      </div>
                                    </div>


                                    <label class="col-lg-2 col-form-label">Start Time</label>
                                    <div class="col-lg-4">
                                      <div class="input-group clockpicker">
                                      <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                      </span>
                                    <input type="text" class="form-control"   name="event_start_time" id="event_start_time" value="09:48" required >
                                    <div id="time-errorfield" style="color: red;">

                                     </div>
                                  </div>
                                  </div>
                                  </div>


                                  <div class="form-group row" id="groupdate2">
                                      <label class="col-lg-2 col-form-label">End Date</label>
                                      <div class="col-lg-4">
                                      <div class="input-group date ">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="event_end_date2" id="event_end_date2" class="form-control" value="2020-02-12"  required>
                                          <div id="date-errorfield" style="color: red;">

                                           </div>
                                      </div>
                                    </div>


                                    <label class="col-lg-2 col-form-label">End Time</label>
                                    <div class="col-lg-4">
                                      <div class="input-group clockpicker">
                                      <span class="input-group-addon">
                                          <i class="fa fa-clock-o"></i>
                                      </span>
                                    <input type="text" class="form-control"   name="event_end_time2" id="event_end_time2" value="09:30" required >
                                    <div id="time-errorfield" style="color: red;">

                                     </div>
                                  </div>
                                  </div>
                                  </div>


                                  <div class="form-group row" id="data_2">
                                      <label class="col-lg-2 col-form-label">Audience</label>
                                      <div class="col-lg-4">
                                      <div class="input-group date ">
                                        <select class="sec_select form-control" name="audience" onchange="checkaudience($(this).val())" style="width: 100%; z-index: 3000" required>

                                            <option value="private">This is a private event</option>
                                            <option value="specific">Only Specific users can see this event</option>
                                            <option value="everybody">Everybody can see this event</option>

                                        </select>
                                          <div id="date-errorfield" style="color: red;">

                                           </div>
                                      </div>
                                    </div>


                                    <div class="col-lg-6">
                                      <div id="statecourse"></div>

                                    </div>



                                  </div>




                                  <div class="form-group row"><label class="col-lg-2 col-form-label">Description</label>

                                      <div class="col-lg-10"><textarea type="text" name="notes" id="notes" placeholder="Enter your short description of 500 characters {{ auth()->user()->name}}?" class="form-control" required></textarea>
                                        <div id="notes-errorfield" style="color: red;">

                                         </div>
                                      </div>
                                  </div>


                                  <div class="form-group row ">

                                       <label class="col-lg-2 col-form-label">Select Event Color</label>
                                      <div class="col-lg-4">
                                             <input type="text" id="save_color_change" name="save_color_change" class="form-control" hidden="hidden" value="" required />
                                          <a data-color="rgb(255, 255, 255)" id="demo_apidemo" class="btn btn-white btn-block colorpicker-element back-change" href="#">Event Color</a></textarea>

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
                                        <button class='btn btn-primary' id="spinner" style="display:none;" type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
                                          <button class="btn btn-primary" id="submitevent" type="submit">Add Reminder</button>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-lg-12">
                                        @if($errors->any())
                                           <div class="alert alert-danger">
                                        <ul>
                                          @foreach($errors->all() as $error)
                                          <li> {{ $error}}</li>
                                          @endforeach
                                        </ul>
                                        </div>
                                        @endif
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


        @if($errors->any())
        <script>
           $("#addeventmodal").modal("show");
        </script>
        @endif




        <!-- jQuery UI  -->
        <script src="{{ asset('backend/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>


        <!-- Date range use moment.js same as full calendar plugin -->
        <script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>


                <!-- Mainly scripts -->
                <script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>




        <!-- Date range picker -->
        <script src="{{ asset('backend/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Data picker -->
        <script src="{{ asset('backend/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

        <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>



        <script src="{{ asset('fullcalendar/vendor/rrule.js') }}"></script>
        <script src="{{ asset('fullcalendar/core/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/interaction/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/timegrid/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/list/main.js') }}"></script>
        <script src="{{ asset('fullcalendar/rrule/main.js') }}"></script>

        <!-- Color picker -->
        <script src="{{ asset('backend/js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>





        <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
/**
        var yearsAgo = new Date();
        yearsAgo.setFullYear(yearsAgo.getFullYear());

        $('#event_start_date').datepicker('setDate', yearsAgo.getDate()+"-"+yearsAgo.getMonth()+"-"+yearsAgo.getFullYear() );
        $('#event_end_date2').datepicker('setDate', yearsAgo.getDate()+"-"+yearsAgo.getMonth()+"-"+yearsAgo.getFullYear() );


        $('#event_end_date2').datepicker({
            startView: 1,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "yyyy-mm-dd"
        });


        $('#groupdate .input-group#event_start_date').datepicker({
            startView: 1,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            format: "yyyy-mm-dd"
        });

**/
        </script>


        <script type="text/javascript">


         var count_count = 0;
        @foreach($events as $event)
        count_count++;
        @endforeach


       var array_of_events = new Array(count_count);
        // alert(count_count);

        var n = 0;
        @foreach($events as $event)
         array_of_events[n] = new Array('{{$event->id }}', '{{$event->event_name }}', '{{ $event->event_start_date}}', '{{$event->event_start_time }}', '{{ $event->event_end_date2}}', '{{$event->event_end_time2 }}','{{$event->notes}}');
         n++;
        @endforeach





        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var dow = "ff";
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');

          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list', 'rrule' ],
            header: {
              left: 'prev,next today',
              center: 'addEventButton',
              right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
              customButtons: {

              },
            defaultDate: date,
            editable: true,
          eventConstraint: {
                start: moment().format('YYYY-MM-DD'),
                end: '2100-01-01' // hard coded goodness unfortunately
            },
            eventDrop: function(info) {
                alert(info.event.title + " was dropped on " + info.event.start.toISOString());

                if (!confirm("Are you sure you want to change this meeting?")) {
                  info.revert();
                  alert("meeting isn't changed");

                }else{
                  let bb = "sds";
                  $.ajax({
                    type: "post",
                    url: "{{ route('change.calendar') }}",
                    data: {name: info.event.title, new_date: info.event.start.toISOString()},
                    success: function(response){
                        alert(response);
                        console.log(response);
                    }, error: function(error_happened){
                      alert(error_happened);
                      console.log(error_happened);

                    }
                  });
                }
              },
            events: [
            @foreach($events as $event)
            {
            title: '{{$event->event_name}}',
            start: '{{$event->event_start_date}}T{{$event->event_start_time}}',
            end: '{{$event->event_start_date2}}T{{$event->event_start_time2}}',
            hey: 'dfddfdfd',
            },
            @endforeach


            ],
            eventClick: function(arg) {
              /**
              if (confirm('delete event?')) {
                arg.event.remove()
              }
              **/

              var everything = new Array(0);

              for (var i = 0; i < array_of_events.length; i++) {
                    for (var m = 0; m < array_of_events[i].length; m++) {
                      if(arg.event.title = array_of_events[i][m]){
                        everything = new Array(array_of_events[i]);
                      }
                    }
              }

              console.log(everything);
             edit_event(everything[0][0],everything[0][1],everything[0][2],everything[0][3],everything[0][4],everything[0][5],everything[0][6]);


            }

          });

          calendar.render();
        });



            function edit_event(id,event_name,start_date,start_time,end_date,end_time,notes){

              $("#event_name").val(event_name);
              $("#event_start_date").val(start_date);
              $("#event_end_date2").val(end_date);
              $("#event_start_time").val(start_time);
              $("#event_end_time2").val(end_time)
              $("#notes").val(notes);
              $("#addeventmodal").modal("show");
            }


        $('.demo1').colorpicker();

        var divStyle = $('.back-change')[0].style;

        $('#demo_apidemo').colorpicker({
            color: divStyle.backgroundColor
        }).on('changeColor', function(ev) {
                    divStyle.backgroundColor = ev.color.toHex();

                    $("#save_color_change").val(ev.color.toHex()) ;
                });


        </script>


        <script type="text/javascript">



                 function checkaudience(val){

                   if(val == "specific"){
                     $.ajax({
                       type: "get",
                       url: "/a/lookaudience",
                       success: function(response){
                         $("#statecourse").html("<select class='sec_select form-control' id='tousers' name='tousers'  style='width: 100%; z-index: 3000'>  </select>");

                       response.forEach(functions);


                         function functions(element){

                            $("#tousers").append("<option value='everybody'>"+element.course_title+"</option>");
                         }
                       }, error: function(error){
                         console.log("error:  "+error);
                       }
                     })
                   }

                 }













        </script>
        @endsection
