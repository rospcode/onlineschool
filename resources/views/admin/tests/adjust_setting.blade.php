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
</style>

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

<div class="row">
  <div class="col-md-12">
    <div class="wrapper wrapper-content">
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox ">
            <div class="ibox-title">
                <h5>This is the control panel where you can adjust settings, add questions, publish the test, and view results.</h5>
            </div>
            <div class="ibox-content">




              <h1 class="text-center">Basic Settings</h1>

              <div class="row">
                 <div class="col-md-8 offset-md-2">
                   <form method="post" action="{{ route('questions.adjustments') }}" enctype="multipart/form-data">


                     <div  style="background-color:
  #f0f0f0;
  padding: 20px;
  border-radius: 10px; margin-top: 20px;
margin-bottom: 10px;">




                       <div class="form-group  row">
                         <div class="col-sm-12 ">
                         <h2 style="font-weight: 500;">Name:</h2>
                       </div>
                           <div class="col-sm-12">
                            <input type="text" name="test_title" class="form-control" value="{{ $test->test_title }}" />

                           </div>
                       </div>


                       <div class="form-group  row">
                         <div class="col-sm-12 ">
                         <h2 style="font-weight: 500;">Introduction:</h2>
                         <h4>This text is displayed at the top of the test. You can use it to write your instructions or anything else. It can be blank.</h4>
                       </div>

                           <div class="col-sm-12">
                          <textarea name="Introduction"  class="form-control" onkeypress="cancel_errors(this.id)" id="editor"> {{ $test->introduction}}</textarea>

                           </div>


                       </div>

                       @if($test->courses_id  != null)
                        <div class="form-group  row">
                       <div class="col-sm-12 ">
                       <h2 style="font-weight: 500;">Public:</h2>
                       <h4>Making the test public means anyone can take test. else only people who are enrolled will be able to take it.</h4>
                     </div>
                             @if($test->public == null || $test->public == "no")
                             <div class="col-sm-12">
                              <label><input type="radio" name="public" value="yes" id="id_pass_fail_toggle"> Yes</label>

                             </div>

                             <div class="col-sm-12">
                              <label><input type="radio" name="public" value="no"  id="id_pass_fail_toggle" checked> No</label>

                             </div>
                             @elseif($test->public == "yes")
                             <div class="col-sm-12">
                              <label><input type="radio" name="public" value="yes"  id="id_pass_fail_toggle" checked> Yes</label>

                             </div>

                             <div class="col-sm-12">
                              <label><input type="radio" name="public" value="no"  id="id_pass_fail_toggle"> No</label>

                             </div>
                             @endif

                       </div>
                         @endif

                       <div class="form-group">
                        {{ csrf_field() }}
                       </div>

                     </div>


                     <div  style="background-color:
  #f0f0f0;
  padding: 20px;
  border-radius: 10px;margin-top: 20px;
margin-bottom: 10px;">



<h1>Review Settings</h1>
<p>These settings control what happens after the test is completed and submitted by the test taker.</p>
<div class="form-group  row">
  <div class="col-sm-12 ">
  <h3 style="font-weight: 500;">Conclusion Text:</h3>
  <h4>This text is displayed after the test is submitted.</h4>
</div>

    <div class="col-sm-12">
   <textarea name="conclusion_text"  class="form-control" onkeypress="cancel_errors(this.id)" id="editor"> {{ $test->conclusion_text }}</textarea>

    </div>
</div>

<input type="text" value="{{ $test->test_code}}" name="test_code" hidden="hidden" />


<div class="form-group  row">
  <div class="col-sm-12 ">
    <label><input type="checkbox" onclick="checkbx_func()" name="pass_fail_toggle" id="id_pass_fail_toggle_mec"> Show a custom message if the student passed or failed</label>
</div>

</div>


<div class="more_check_info" style="display: none;">
<div class="form-group row">
  <div class="col-sm-12 ">

  <h4>What is the passing score?</h4>
  <div class="passing-score-input">
                <input type="number" class="form-control" style="width: 30%; " value="{{ $test->passing_score }}" name="passing_score" step="0.01" id="id_passing_score" placeholder="%">
            </div>
</div>

</div>


<div class="form-group  row">
  <div class="col-sm-12 ">
  <h3 style="font-weight: 500;">Pass Message:</h3>
  <h4>If the student passes, this text is displayed.</h4>
</div>

    <div class="col-sm-12">
   <textarea name="pass_message"  class="form-control" onkeypress="cancel_errors(this.id)" id="editor"> {{ $test->pass_message }}</textarea>

    </div>
</div>


<div class="form-group  row">
  <div class="col-sm-12 ">
  <h3 style="font-weight: 500;">Fail Message:</h3>
  <h4>If the student fails, this text is displayed.</h4>
</div>

    <div class="col-sm-12">
   <textarea name="fail_message"  class="form-control" onkeypress="cancel_errors(this.id)" id="editor"> {{ $test->fail_message }}</textarea>

    </div>
</div>

</div>
</div>







<div  style="background-color:
#f0f0f0;
padding: 20px;
border-radius: 10px; margin-top: 20px;
margin-bottom: 10px;">



<h1>Access Control</h1>
<p>These settings control what happens after the test is completed and submitted by the test taker.</p>


<div class="form-group  row">
<div class="col-sm-12 ">
<h3 style="font-weight: 500;">How much time do test takers have to complete the test?</h3>
<p>The timer starts the moment they enter the test and continues even if they close out of the test.</p>
</div>


<div class="col-sm-12 ">
                              <label for="id_time_0"><input type="radio" name="test_time_radio" value="0" id="id_time_0" required="" checked>
   Unlimited</label>
</div>

<div class="col-sm-12 ">
    <label for="id_time_1" id="limit-time"><input type="radio" name="test_time_radio" value="1" id="id_time_1" required=""> <input type="text" value="{{ $test->time_to_complete_test}}" class="form-control" style="width: 40%; display: inline;" name="time_limit" id="id_time_limit"> minutes</label>
</div>
</div>


<div class="form-group  row">

  <div class="col-sm-12">
   <h3 style="font-weight: 500;">What should test takers enter to identify themselves?</h3>
   <p>This text appears above the field where the test taker enters their identifier. It should tell them what to enter.<br/>
<d style="font-weight: 600;">Examples:</d> "Enter your name", "Enter your student ID", or "Please enter your company email address" </p>
  </div>
<div class="col-sm-12 ">
                            <input type="text" class="form-control" name="test_identification" value="{{ $test->test_identification}}" placeholder="Enter Your full name">
</div>


</div>












</div>







<div  style="background-color:
#f0f0f0;
padding: 20px;
border-radius: 10px; margin-top: 20px;
margin-bottom: 10px;">



<h1>Notifications</h1>







<div class="form-group  row">
<div class="col-sm-12 ">
<h3 style="font-weight: 500;">Do you want to receive an email whenever someone finishes this test?</h3>

</div>


<div class="col-sm-12 ">
                              <label for="id_time_0"><input type="radio" name="email_notification" value="0" id="id_time_0" required="" checked="">
   No</label>
</div>

<div class="col-sm-12 ">
    <label for="id_time_1" id="limit-time"><input type="radio" name="email_notification" value="1" id="id_time_1" required=""> Yes, and send them to: <input type="text" class="form-control" value="{{ $test->email_notification}}" style="width: 56%; display: inline;" name="email_notification_user" id="id_time_limit">
</label>
</div>
</div>


<div class="hr-line-dashed"></div>
<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">

        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </div>
</div>



</div>



                   </form>
                 </div>
              </div>
            </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="addtest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 16px;">Test Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/maketest">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="test" style="font-size: 16px;">Test Title</label>
            <input type="text" style="padding: 10px 12px;" name="test" placeholder="Test Name" class="form-control" />
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

              <button type="submit" class="btn btn-primary">Changes</button>

          </div>
        </form>
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
        toastr.success('Successfully', "Updated Control Panel");

    }, 1300);
  });

    </script>




@endif
    @endsection


    @section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>






    <script>
      $('.clockpicker').clockpicker();
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>






    <script type="text/javascript">
         function checkbx_func(){

           var checkBox = document.getElementById("id_pass_fail_toggle_mec");



      if (checkBox.checked == true){
        $(".more_check_info").show();
      } else {
        $(".more_check_info").hide();
      }
         }
    </script>


    @if($errors->any())
    <script type="text/javascript">
          $("#exampleModalCenter").modal();
    </script>


    @endif

    @endsection
