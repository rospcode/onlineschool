@extends('admin.layouts.master')
@section('page')
User Requests | {{ auth()->user()->name }}
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>Rejected Signups</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Requests</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Signup Requests</h5>

                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                      <th>#</th>

                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID Number</th>
                      <th>Signup Created</th>

                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      @foreach($requests as $user)


                      @if($user->approved == "deleted")
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>

                        <td>{{ $user->getUser->name}} {{ $user->getUser->surname}}
                        </td>
                        <td>
                             {{ $user->getUser->email}}
                        </td>
                        <td>
                             {{ $user->getUser->phone}}
                        </td>
                        <td>
                             {{ $user->getUser->id_number}}
                        </td>
                        <td>
                        {{ $user->created_at}}
                        </td>


                        <td class="center">


<button class="btn btn-success" onclick="approving('{{$user->getUser->id}}','{{$user->getUser->name}}')">Approve</button>


                        </td>
                    </tr>
                    <?php $count++; ?>
                    @endif

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




function approving(val,name){
     const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})
swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Approve "+name+"'s account, they will receive an email with a link to create password",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: "Approve",
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
window.location.href = "/a/user/approve/"+val;
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      '',
      'error'
    )
  }
})
   }





   </script>
    @endsection
