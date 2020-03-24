@extends('admin.layouts.master')
@section('page')
User Requests | {{ auth()->user()->name }}
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>Home</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Messages</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>






            <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                                <a class="btn btn-block btn-primary compose-mail" href="mail_compose.html">Compose Mail</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 animated fadeInRight">
                <div class="mail-box-header">

                    <form method="get" action="index.html" class="float-right mail-search">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="search" placeholder="Search email">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <h2>
                        Inbox (16)
                    </h2>

                </div>
                    <div class="mail-box">

                    <table class="table table-hover table-mail">
                    <tbody>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="mail_detail.html">Anna Smith</a></td>
                        <td class="mail-subject"><a href="mail_detail.html">Lorem ipsum dolor noretek imit set.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks" checked>
                        </td>
                        <td class="mail-ontact"><a href="mail_detail.html">Jack Nowak</a></td>
                        <td class="mail-subject"><a href="mail_detail.html">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">8.22 PM</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="mail_detail.html">Facebook</a>  </td>
                        <td class="mail-subject"><a href="mail_detail.html">Many desktop publishing packages and web page editors.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jan 16</td>
                    </tr>

                    </tbody>
                    </table>


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
