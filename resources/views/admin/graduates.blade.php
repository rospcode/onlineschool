@extends('admin.layouts.master')
@section('page')
Graduates
@endsection

@section('content')
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Graduates</span><br>
                </h2>

                <p>
                  Theses students graduated for the course
                </p>
                <a href="/a/graduates_users/list" class="btn btn-success">View AS List</a>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>



<!-- register user modal -->
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Add A Question</h4>
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

<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          @foreach($graduates as $user)
            @if( count($user->getGraduate) != 0)
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="/a/profile/{{ $user->id }}">

                        <img alt="image" class="rounded-circle" src="{{ asset('user/')}}/{{ $user->avatar }}">


                        <h3 class="m-b-xs"><strong>{{ $user->name }} {{ $user->surname }}</strong></h3>

                        <div class="font-bold">{{ $user->id_number }}</div>
                        <hr/>
                        <address class="m-t-md">
                            <strong>Courses Graduated</strong><br>
                            @foreach($user->getGraduate as $course)
                            {{ $course->getCourse['course_title']}} -

                            @if($course->course_marks < 50)
                                <sd style="color: red;"> {{ $course->course_marks }}% Failed<sd><br/>
                               @elseif($course->course_marks >= 50 && $course->course_marks <= 100)

                                @if($course->course_marks >= 75)
                                <sd style="color: green;">{{ $course->course_marks }}% Passed Distinction</sd><br/>
                                @else
                                <sd style="color: green;">{{ $course->course_marks }}% Passed</sd><br/>
                                @endif

                            @endif


                            @endforeach
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a href="/a/profile/{{ $user->id }}" class="btn btn-xs btn-white"><i class="fa fa-group"></i> View Profile </a>

                        </div>
                    </div>

                </div>
            </div>
            @endif
            @endforeach





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
