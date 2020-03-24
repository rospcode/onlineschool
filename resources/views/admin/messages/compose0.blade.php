@extends('admin.layouts.master')
@section('page')
Messages | {{ auth()->user()->name }}
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
                <div class="col-lg-2">
                    <div class="ibox ">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                                <a class="btn btn-block btn-primary compose-mail" href="mail_compose.html">Messages</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 animated fadeInRight">
                  <div class="mail-box-header">
                      <div class="float-right tooltip-demo">
                          <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
                          <a href="mailbox.html" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                      </div>
                      <h2>
                          Compose Message
                      </h2>
                  </div>
                      <div class="mail-box">


                      <div class="mail-body">

                          <form method="get">
                              <div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>

                                  <div class="col-sm-10"><input type="text" class="form-control" value="loope@gmail.com"></div>
                              </div>
                              <div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>

                                  <div class="col-sm-10"><input type="text" class="form-control" value=""></div>
                              </div>
                              <div class="form-group row"><label class="col-sm-2 col-form-label">Message:</label>

                                  <div class="col-sm-10"><textarea name="content" class="form-control" ></textarea></div>
                              </div>
                              </form>

                      </div>

                          

                          <div class="clearfix"></div>



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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
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
