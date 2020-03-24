@extends('admin.layouts.master')
@section('page')
User Requests | {{ auth()->user()->name }}
@endsection

@section('style')
<style>

.this_course:hover{
   cursor: pointer;
   background-color: #ececec;
   padding: 10px;
}

</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>User Viewprofile</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


<div class="wrapper wrapper-content">
  <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-fluid" src="{{ asset('user/')}}/{{ $user->avatar }}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{ $user->name }} {{ $user->surname }}</strong></h4>
                                  <p><i class="fa fa-id-card"></i> {{ $user->id_number}}</p>
                                <h5>
                                    Bio
                                </h5>
                                <p>
                                  {{ $user->bio}}
                                </p>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->phone }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Id Number</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->id_number }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->gender }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->age }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Bio</label>
                                  <div class="col-sm-10">
                                  <textarea class="form-control" disabled="disabled">
                                   {{ $user->bio }}
                                  </textarea>
                                  </div>


                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->email }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->created_at }}" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Signin Blocked</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $user->last_login }}" name="cat_title" class="form-control">
                                    </div>
                                </div>


                                <div class="user-button">
                                    <div class="row">

                                        <div class="col-md-6">
                                          @if($user->blocked == "no")
                                            <a href="/a/block/{{ $user->id}}" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Block</a>
                                            @else
                                            <a href="/a/unblock/{{ $user->id}}" class="btn btn-default btn-sm btn-block"><i class="fa fa-ban"></i> Unblock</a>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <a href="/a/edit_user/{{ $user->id }}" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>User Courses</h5>

                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     @foreach($user->getEnrolled as $enrolled)
                                    <div class="feed-element this_course" data-id="{{ $enrolled->user_id }}">
                                        <a href="" class="float-left">
                                            <img alt="image" class="rounded-circle" src="{{ asset('img/courses/')}}/{{ $enrolled->getCourse->course_img }}">
                                        </a>
                                        <div class="media-body" >
                                            <small class="float-right text-navy">{{ $enrolled->created_at->diffForHumans()}}</small>
                                            <strong>Course:</strong> {{ $enrolled->getCourse->course_title }}. <br>
                                            <small class="text-muted">{{ $enrolled->created_at }}</small>

                                        </div>
                                    </div>
                                    @endforeach



                                </div>



                            </div>

                        </div>
                    </div>

                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Courses Graduate</h5>

                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     @foreach($user->getGraduate as $graduate)
                                    <div class="feed-element">
                                        <a href="" class="float-left">
                                            <img alt="image" class="rounded-circle" src="{{ asset('img/courses/')}}/{{ $graduate->getCourse['course_img'] }}">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy">{{ $graduate->created_at->diffForHumans()}}</small>
                                            <strong>Course:</strong> {{ $graduate->getCourse['course_title'] }}. <br>
                                            <strong>Mark:</strong>


                                              @if($graduate->course_marks < 50)
                                                  <sd style="color: red;"> {{ $graduate->course_marks }}% Failed<sd><br/>
                                                 @elseif($graduate->course_marks >= 50 && $graduate->course_marks <= 100)

                                                  @if($graduate->course_marks >= 75)
                                                  <sd style="color: green;">{{ $graduate->course_marks }}% Passed Distinction</sd><br/>
                                                  @else
                                                  <sd style="color: green;">{{ $graduate->course_marks }}% Passed</sd><br/>
                                                  @endif

                                              @endif


                                             <br>
                                            <small class="text-muted">{{ $graduate->created_at }}</small><br/>
                                            <small class="text-muted">Enrollment Date: {{ $graduate->enrolled }}</small>

                                        </div>
                                    </div>
                                    @endforeach



                                </div>



                            </div>

                        </div>
                    </div>


                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Actvities</h5>

                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     @foreach($feeds as $feed)
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="{{ asset('user/')}}/{{ $user->avatar }}">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy">{{ $feed->created_at->diffForHumans()}}</small>
                                            <strong>Activity: </strong> {{ $feed->action}} <strong></strong>. <br>
                                            <small class="text-muted">{{ $feed->created_at}}</small>

                                        </div>
                                    </div>
                                    @endforeach



                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                            </div>

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

                                  <h4 class="modal-title">Register a User</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">
                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup">
                                            <p>User details</p>
                                            {{ csrf_field() }}
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">First Name</label>

                                                <div class="col-lg-10"><input type="text" name="name" id="name" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Last Name</label>

                                                <div class="col-lg-10"><input type="text" name="surname" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Last Name" class="form-control">
                                                  <div  id="surname-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>

                                                <div class="col-lg-10"><input type="email" name="email" onkeydown="clearmessage()" onclick="enableTxt(this)" id="email" placeholder="Email" class="form-control">
                                                  <div id="email-field">

                                                   </div>
                                                </div>
                                            </div>
                                          <div class="form-group row">
                                          <label class="col-lg-2 col-form-label"></label>
                                           <div class="col-lg-10">
                                             <div id="signupmessage"></div>
                                           </div>
                                         </div>

                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Manually register a user. and email will be sent to them, to create a password</label></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary" id="signupbutton" type="button">Create user</button>
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

<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


  $(".media-body").click(function(event){
    let user_id = $(this).data('id');
    $.ajax({
      type: "POST",
      url: "{{ route('getuser.test.name')}}",
      data: { id: user_id},
      success: function(response){
         console.log(response);
      },error: function(response_error){
          console.log(response_error);
      }
    });



  })
</script>
    @endsection
