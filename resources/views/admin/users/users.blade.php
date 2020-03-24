@extends('admin.layouts.master')
@section('page')
Users | {{ auth()->user()->name }}
@endsection

@section('content')
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Users                <a href="" data-toggle="modal" data-target="#myModal2" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add User</a>
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
                        <h5>These are all registered users</h5>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Enrolled Courses</th>
                      <th>Courses Graduated</th>
                      <th>Last Login</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      @foreach($users as $user)
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>
                        <td><img src="{{ asset('user/')}}/{{ $user->avatar }}" alt="" class="img-fluid rounded-circle img-thumbnail" style="width: 10%;" width="50" height="50"></td>
                        <td>{{ $user->name }} {{ $user->surname }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                          <ul>
                            @foreach($user->getEnrolled as $enrolled)

                           <li>{{ $enrolled->getCourse->course_title }}</li>
                           @endforeach

                          </ul>
                        </td>

                        <td class="center">
                          <ul>
                          @foreach($user->getGraduate as $graduate)
                            <li> {{ $graduate->getCourse->course_title }}</li>
                          @endforeach
                        </ul>
                        </td>
                        <td class="center">
                            {{ $user->updated_at }}
                        </td>
                        <td class="center">
                          <div class="btn-group">
    <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/a/edit_user/{{ $user->id }}">Edit</a>
      <a class="dropdown-item" href="/a/profile/{{ $user->id }}">View Profile</a>
      @if($user->blocked == "yes")
      <a href="/a/unblock/{{ $user->id}}" class="dropdown-item">Unblock User</a>
      @else
      <a href="/a/block/{{ $user->id}}" class="dropdown-item">Block User</a>
      @endif


    </div>
  </div>



                        </td>
                    </tr>
                    <?php $count++; ?>
                    @endforeach



                    </tbody>
                    <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Enrolled Courses</th>
                      <th>Courses Graduated</th>
                      <th>Last Login</th>
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                    </table>
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

     $(function(){
           $("#signupbutton").click(function(){

             var name = $("#name").val();
             var surname = $("#surname").val();
             var email = $("#email").val();
             $("#signupmessage").html("");



            if(email == "" || name == ""){
                $("#signupmessage").html("<div class='alert alert-warning'>Sorry, some fields are empty.</div>");

              }
         else {
           $.ajax({

          type: "POST",
          url: "{{ route('admin.signup.user') }}",
          data: $('#adminsignup').serialize(),
          success: function(response){
            if(response == "success"){
              $("#signupmessage").html("<div class='alert alert-success'>User Successfully Registered, email sent.</div>");
            }else{
              $("#signupmessage").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
            }

         },error: function(data){
            var errors = data.responseJSON;
            $.each(errors, function(key, message){
              $("#"+key+"-field").html("<div style='color: red;'>"+message+"</div>");
            });

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
