@extends('admin.layouts.master')
@section('page')
Send Email | {{ auth()->user()->name }}
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
                            <a>Send Mail</a>
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


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 animated fadeInRight">
                  <div class="mail-box-header">

                      <h2>
                          Compose Message
                      </h2>
                  </div>
                      <div class="mail-box">


                      <div class="mail-body">

                          <form method="post" action="{{ route('send.mail')}}" id="mailform">
                            {{ csrf_field() }}
                              <div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="to"  id="to" class="form-control" >
                                    <div id="to-field" style="color:red;">
                                      {{ $errors->has('to') ? $errors->first('to') : ''}}
                                     </div>
                                  </div>
                              </div><br/>
                              <div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="subject" id="subject" class="form-control" value="">
                                    <div id="subject-field" style="color:red;">
                                      {{ $errors->has('subject') ? $errors->first('subject') : ''}}
                                     </div>
                                  </div>
                              </div><br/>
                              <div class="form-group row"><label class="col-sm-2 col-form-label">Message:</label>

                                  <div class="col-sm-10">
                                    <textarea name="content" id="editor" class="form-control" ></textarea>
                                    <div id="content-field" style="color:red;">
                                      {{ $errors->has('content') ? $errors->first('content') : ''}}
                                     </div>

                                  </div>
                              </div>
                              <div class="form-group row"><label class="col-sm-2 col-form-label"></label>

                                  <div class="col-sm-10">




                                       <div id="mess"></div>


                                  </div>
                              </div>
                              <div class="form-group row"><label class="col-sm-2 col-form-label"></label>


                                  <div class="col-sm-10"><br/><button type="submit"  id="signupbutton" class="btn btn-success">Send mail</button></div>



                              </div>
                              </form>

                      </div>



                          <div class="clearfix"></div>



                      </div>
                </div>
                <div class="col-lg-2">
                    <div class="ibox ">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>



@endsection




    @section('notifications')
      @if(session('msg'))

    <script type="text/javascript">

    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Successfully', "eMAIL SENT");

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
           $("#signupbutton").click(function(ev){
             ev.preventDefault();

             $(".load").show();


             var to = $("#to").val();
             var subject = $("#subject").val();

             $("#signupmessage").html("");



            if(to == "" || subject == ""){
               $("#mess").html("<div class='alert alert-warning'>Some fields are empty.</div>");
                 $(".load").hide();
              }
         else {

           $.ajax({
          type: "POST",
          url: "{{ route('send.mail')}}",
          data: $('#mailform').serialize(),
          success: function(response){
          if(response == "success"){
           $("#mess").html("<div class='alert alert-success'>Your email was sent successfully.</div>");
            $(".load").hide();
          }
         },error: function(data){
            var errors = data.responseJSON;
          console.log(errors);
            $.each(errors, function(key, message){

             //console.log(message);
             console.log(message);
              $(".load").hide();

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
