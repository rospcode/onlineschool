@extends('admin.layouts.master')
@section('page')
All Tests | {{ auth()->user()->name }}
@endsection

@section('style')
<style>
.testmoz-list-item {
    width: 100%;
    display: block;
    background-color:
#fff;
padding: 10px;
display: flex;
box-shadow:
    #ccc 0 0 2px 0;
}
.testmoz-list-item > div:first-child {
    font-size: 36px;
    padding-right: 20px;
    justify-self: center;
}
.testmoz-list-detail h6 {
    font-size: 18px;
    font-weight: 500;
}
.testmoz-list-detail p {
    color:
    #000;
}
.testmoz-list-detail p {
    margin-bottom: 0;
}
.red {
    color:
    red;
}

/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 9999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>



<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ asset('email.multiple.css') }}">
@endsection



@section('content')
<?php
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
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
        <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Test Name - {{ $test->test_title }}  <a href="/a/tests" class="btn btn-outline-primary btn-rounded alignToTitle pull-right" ><i class="mdi mdi-plus"></i>Tests</a>
    </h4>
    </div>
      </div> <!-- end card -->
    </div>
  </div>
</div>

<div id="loading" style="display: none;" class="loading"></div>

<div class="row">
  <div class="col-md-12">
    <div class="wrapper wrapper-content">
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox ">
            <div class="ibox-title">

            </div>
            <div class="ibox-content">

              @if($test->published != "published")

              <div id="publish">

              <h1 class="text-center">Publish {{ $test->test_title}}</h1>
              <h3 class="text-center">You need to publish your test to make it available for your students to take. <br/> It's OK to edit your test after you publish (but it may cause inconsistencies in the results).</h3>

              <div class="row">
                 <div class="col-md-6 offset-md-3">
                   <form>





<input type="text" id="test_code" value="{{ $test->test_code }}" hidden="hidden" />






<div  style="background-color:
#f0f0f0;
padding: 20px;
border-radius: 10px; margin-top: 20px;
margin-bottom: 10px;">



<h1 class="text-center">Ready to publish?</h1>









<div class="form-group  row">


</div>


<div class="hr-line-dashed"></div>
<div class="form-group row">
    <div class="col-sm-12">
        <div class="wrapper" style="text-align: center;">
        <button class="btn btn-primary btn-lg" id="publish" type="submit">Publish</button>
      </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class='form-group row'>
   <div class='col-sm-12'>
      <div id="messagethis"></div>
   </div>
 </div>



</div>



                   </form>
                 </div>
              </div>
            </div>

            @else


         <h1 class='text-center'>Test {{ $test->test_title}} Published</h1>
         <h3 class='text-center'>Your test has been successfully published. <br/> It's OK to edit your test after you publish (but it may cause inconsistencies in the results).</h3>
         <div class='row'>
           <div class='col-md-6 offset-md-3'>
             <form>
               <div style='background-color:#f0f0f0;padding: 20px;border-radius: 10px; margin-top: 20px;margin-bottom: 10px;'>
                 <h1 class='text-center'>Test Link</h1>
                 <div class='form-group row'>
                 </div>
                 <div class='hr-line-dashed'>
                 </div>
                 <div class='form-group row'>
                    <div class='col-sm-12'>
                      <div class='wrapper' style='text-align: center;'>
                        <h3 data-toggle="tooltip" data-placement="top" title="Click to copy link" id="p1" onclick="copyToClipboard('#p1')">{{ asset('/test/') }}/{{$test->test_code}}</h3>
                        <div id="flash_message"></div>

                        <div class='hr-line-dashed'>
                        </div>

                      <a href=""> <i class="fa fa-facebook-square" style="font-size: 25px;"></i></a>


                      <a href=""><i class="fa fa-linkedin" style="font-size: 25px;padding-left: 5px;"></i></a>
                      <a href=""><i class="fa fa-twitter-square" style="font-size: 25px;padding-left: 5px;"></i></a>


                      <div class='hr-line-dashed'>
                      </div>

                      <h2>Or</h2>
                      <div class='hr-line-dashed'>
                      </div>

                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sendemail">Email Link </button>
                       </div>
                     </div>
                   </div>


                 </div>
                </form>
              </div>
             </div>


            @endif
            </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="sendemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="" style="font-size: 16px;">Send Email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          {{ csrf_field() }}
          <div class="form-group">
            <p>You can send multiple emails to users you want to take the test</p>
            <label for="test" style="font-size: 16px;">Email Address/s:</label>
            <input type="text" style="padding: 10px 12px;" name="test" id="essai"  placeholder="Email Address" class="form-control" />

          </div>

          <div class="form-group">
           <div id="message_test"></div>
          </div>



          @if($errors->any())
             <div class="alert alert-danger">
          <ul style="margin-bottom: 0rem;">
            @foreach($errors->all() as $error)
            <li style="list-style-type: none;"> {{ $error}}</li>
            @endforeach
          </ul>
        </div>
          @endif

          <div class="form-group">

              <button type="submit" id="mail_send" class="btn btn-primary">Send Test Invite</button>

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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>




    <script type="text/javascript">
    function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");
$temp.remove();
$("#flash_message").html("<h4>link copied</h4>");
setTimeout(function(){ $("#flash_message").html("");}, 1500);
}
    </script>

    <script type="text/javascript">
       $(function(){
         $("#publish").click(function(ev){
           ev.preventDefault();
           let test_code = $("#test_code").val();
              if(test_code){
               $.ajax({
                url: "/admin/publish/"+test_code,
                type: 'GET',// added data type
                success: function(response) {
                    if(response == "success"){
                      $("#publish").html(" <h1 class='text-center'>Test {{ $test->test_title}} Published</h1> <h3 class='text-center'>Your test has been successfully published. <br/> It's OK to edit your test after you publish (but it may cause inconsistencies in the results).</h3> <div class='row'> <div class='col-md-6 offset-md-3'> <form><div style='background-color:#f0f0f0;padding: 20px;border-radius: 10px; margin-top: 20px;margin-bottom: 10px;'><h1 class='text-center'>Test Link</h1><div class='form-group row'></div><div class='hr-line-dashed'></div><div class='form-group row'> <div class='col-sm-12'> <div class='wrapper' style='text-align: center;'> <h3>{{ asset('/test/') }}/{{$test->test_code}}</h3> </div> </div></div></div> </form> </div> </div>");
                      location.reload();
                    }else{
                      $("#messagethis").html("<div class='alert alert-danger text-center'>Failed Publishing Test: No Questions available for this test</div>");
                      console.log(response);
                    }
                }, error: function(){
                  location.reload();
                }
            });
          }
         })
       })
    </script>


    <script type="text/javascript">
         function checkbx_func(){

           var checkBox = document.getElementById("id_pass_fail_toggle");

      if (checkBox.checked == true){
        $(".more_check_info").show();
      } else {
        $(".more_check_info").hide();
      }
         }
    </script>

    <script src="{{ asset('jquery.email.multiple.js') }}"></script>
    <script>
        $(document).ready(function($){
            let data = []
            $("#essai").email_multiple({
                data: data
                // reset: true
            });
        });
    </script>


    <script type="text/javascript">
      $(function(){
        $("#mail_send").click(function(ev){
          ev.preventDefault();
          let _token = document.querySelector('input[name=_token]').value;
          let test_code = '{{ $test->test_code}}';
          let test = '{{ $test->test_title}}';
          $("#loading").show();
          $.ajax({
           url: "/admin/publish/email",
           type: 'POST',
           data: { _token: _token, email: email,test_code: test_code, test: test},
           success: function(response) {
             if(response == "success"){
               $("#message_test").html("<div class='alert alert-success'>Invitations sent</div>");
               $("#loading").hide();
             }else{
               $("#message_test").html("<div class='alert alert-danger'>Empty Email Field</div>");
               $("#loading").hide();
             }
           },error: function(errors){
             $("#loading").hide();

           }
       });
     });
   });
    </script>


    @if($errors->any())
    <script type="text/javascript">
          $("#exampleModalCenter").modal();
    </script>


    @endif

    @endsection
