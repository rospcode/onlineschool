@extends('admin.layouts.master')
@section('page')
All Tests | {{ auth()->user()->name }}
@endsection


@section('style')
<link href="{{  ('backend/css/iCheck/custom.css') }}" rel="stylesheet">
<link href="{{ asset('backend/skins/all.css?v=1.0.2') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<style>
.sidenav-toggler-line {

  position: relative;
  display: block;
  height: 2px;
  background-color: white;

}
.form-control {
  height: calc(1.5em + 1.25rem + 5px);
  transition: all .15s ease-in-out;
  font-size: 1rem;
  font-weight: 300;
}
.form-control {
  font-size: .875rem;
  font-weight: 400;
  line-height: 1.5;
  display: block;
  width: 100%;
  height: calc(1.5em + 1.25rem + 2px);
  padding: .625rem .75rem;
  transition: all .15s cubic-bezier(.68,-.55,.265,1.55);
  color:
#525f7f;
border-radius: .25rem;
background-color:
#f2f2f3;
background-clip: padding-box;
box-shadow: 0 3px 2px
rgba(233,236,239,.05);
border: 1px solid
  #f2f2f3;
}

.form-control:hover{
  background-color: white;
}

#fatrash:hover{
  font-size: 23px;
  cursor: pointer;
}
#fatrash{
  font-size: 19px;
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
        <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Test Name - {{ $tests->test_title }}  <a href="/a/tests" class="btn btn-outline-primary btn-rounded alignToTitle pull-right" ><i class="mdi mdi-plus"></i>Tests</a>
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




              <h1 class="text-center">Add Questions To Your Test</h1>

              <div class="row">
                 <div class="col-md-6 offset-md-3">
                   <form method="post" action="/questions/all/save" enctype="multipart/form-data">

                     {{ csrf_field() }}



                     <input type="text" value="{{ $tests->id }}" name="testid" hidden="hidden" />




                     <?php $count = 0; ?>

                     @foreach($tests->getQuestions as $test)
                     @if($test->question_type == 1)

                     <div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'>
         <div class='row'>
             <input type='text' value='1' hidden='hidden ' />
             <div class='col-lg-1'>
                 <p style='font-weight: 800;'>{{ $count}}.</p>
             </div>
             <div class='col-lg-11'>
                 <input type='text' class='form-control' id="question{{$test->id}}" value='{{ $test->question }}' onblur="editquestion({{$test->id}},'question')" style='position: relative;bottom: 11px;'> </div>
             <div class='col-lg-1'> </div>
             <div class='col-lg-11'>
                 <div class='form-group'>
                     <div class='col-lg-12'>
                         <div class='row'>
                             <div id='defaultAnswers' class='col-lg-12'>
                                 <div class='row'>
                                    <?php $rad = 0; ?>
                                     @foreach($test->getAnswers as $answer)
                                     <div class='col-lg-1'>
                                         <br/>
                                         @if($answer->correct != "0")
                                         <div class='i-checks'>
                                             <label>
                                                 <input type='radio' value='{{ $answer->answer }}' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label>
                                         </div>
                                         @else
                                         <div class='i-checks'>
                                             <label>
                                                 <input type='radio' value='{{ $answer->answer }}' style='position: absolute; opacity: 0;'> <i></i> </label>
                                         </div>
                                         @endif
                                     </div>
                                     <div class='col-lg-11'>
                                         <br/>
                                         <input type='text' class='form-control' placeholder='Answer Required' id="answer{{ $answer->id}}" onblur="editanswer({{ $answer->id}},'answers')" value="{{ $answer->answer}}"  style='position: relative;bottom: 5px;' required> </div>

                                      <?php $rad++; ?>
                                  @endforeach
                                   </div>



                             <div id='' class='col-lg-12'> </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>


                     @elseif($test->question_type == 2)
                     <div class="row">
                          <input type='text' value='2'  hidden='hidden ' />
                        <div class="col-lg-12">
                          <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                            <div class="row" style="padding-top: 0px;">
                              <div class="col-lg-12">
                                <div class="row">
                                   <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                                     <div class="col-lg-11">
                                       <div class="form-group">
                                          <input type='text' class='form-control' id="question{{$test->id}}" value='{{ $test->question }}' onblur="editquestion({{$test->id}},'question')" style='position: relative;bottom: 11px;'>

                                       </div>
                                     </div>
                                     <div class="col-lg-1"></div>
                                     <div class="col-lg-11" style="padding-top: 15px;">
                                       <div class='row'>
                                          <?php $rad = 0; ?>
                                           @foreach($test->getAnswers as $answer)
                                           <div class='col-lg-1'>
                                               <br/>
                                               @if($answer->correct != "0")
                                               <div class='i-checks'>
                                                   <label>
                                                       <input type='checkbox' value='{{ $answer->answer }}' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label>
                                               </div>
                                               @else
                                               <div class='i-checks'>
                                                   <label>
                                                       <input type='checkbox' value='{{ $answer->answer }}' style='position: absolute; opacity: 0;'> <i></i> </label>
                                               </div>
                                               @endif
                                           </div>
                                           <div class='col-lg-11'>
                                               <br/>
                                               <input type='text' class='form-control' placeholder='Answer Required' id="answer{{ $answer->id}}" onblur="editanswer({{ $answer->id}},'answers')" value="{{ $answer->answer}}"  style='position: relative;bottom: 5px;' required> </div>

                                            <?php $rad++; ?>
                                        @endforeach
                                         </div>
                                     </div>
                                </div>
                              </div>



                           </div>
                          </div>
                        </div>
                     </div>
                     @elseif($test->question_type == 3)
                     <div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'>
         <div class='row'>
             <input type='text' value='1' hidden='hidden ' />
             <div class='col-lg-1'>
                 <p style='font-weight: 800;'>{{ $count}}.</p>
             </div>
             <div class='col-lg-11'>
                 <input type='text' class='form-control' id="question{{$test->id}}" value='{{ $test->question }}' onblur="editquestion({{$test->id}},'question')" style='position: relative;bottom: 11px;'> </div>
             <div class='col-lg-1'> </div>
             <div class='col-lg-11'>
                 <div class='form-group'>
                     <div class='col-lg-12'>
                         <div class='row'>
                             <div id='defaultAnswers' class='col-lg-12'>
                                 <div class='row'>
                                    <?php $rad = 0; ?>
                                     @foreach($test->getAnswers as $answer)
                                     <div class='col-lg-1'>
                                         <br/>
                                         @if($answer->correct != "0")
                                         <div class='i-checks'>
                                             <label>
                                                 <input type='radio' value='{{ $answer->answer }}' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label>
                                         </div>
                                         @else
                                         <div class='i-checks'>
                                             <label>
                                                 <input type='radio' value='{{ $answer->answer }}' style='position: absolute; opacity: 0;'> <i></i> </label>
                                         </div>
                                         @endif
                                     </div>
                                     <div class='col-lg-11'>
                                         <br/>
                                         <input type='text' class='form-control' placeholder='Answer Required' id="answer{{ $answer->id}}" onblur="editanswer({{ $answer->id}},'answers')" value="{{ $answer->answer}}"  style='position: relative;bottom: 5px;' required> </div>

                                      <?php $rad++; ?>
                                  @endforeach
                                   </div>



                             <div id='' class='col-lg-12'> </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
                     @elseif($test->question_type == 4)

                     @elseif($test->question_type == 5)
                     <div class="row">
                          <input type='text' value='5' hidden='hidden ' />
                        <div class="col-lg-12">
                          <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                            <div class="row" style="padding-top: 0px;">
                              <div class="col-lg-12">
                                <div class="row">
                                   <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                                     <div class="col-lg-11">
                                       <div class="form-group">
                                         <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">Fill in the Blanks</p>
                                       </div>
                                     </div>
                                     <div class="col-lg-1"></div>
                                     <div class="col-lg-11">
                                       <div class="form-group">


                     <input type="text" class="form-control" id="question{{$test->id}}" value="{{ $test->question }} "  onblur="editquestion({{$test->id}},'question')" style="position: relative;bottom: 11px;">
                                       </div>
                                     </div>
                                </div>
                              </div>
                              <div class="col-lg-1">
                              </div>
                              <div class="col-lg-11">
                                      @foreach($test->getAnswers as $answer)
                                     <input type='text' value='{{ $answer->answer}}' id="answer{{ $answer->id}}" onblur="editanswer({{ $answer->id}},'answers')"  class="form-control"> <i></i>
                                      @endforeach
                               </div>

                           </div>
                          </div>
                        </div>
                     </div>
                     @elseif($test->question_type == 6)
                     <div class="row">
                          <input type='text' value='6'  hidden='hidden ' />
                        <div class="col-lg-12">
                          <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                            <div class="row" style="padding-top: 0px;">
                              <div class="col-lg-12">
                                <div class="row">
                                   <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                                     <div class="col-lg-11">
                                       <div class="form-group">
                                         <input type="text" class="form-control" id="question{{$test->id}}" value="{{ $test->question }} "  onblur="editquestion({{$test->id}},'question')" style="position: relative;bottom: 11px;">

                                       </div>
                                     </div>
                                </div>
                              </div>


                              <div class="col-lg-1">
                              </div>
                              <div class="col-lg-11">
                                  @foreach($test->getAnswers as $answer)
                                     <textarea class="form-control" cols="9" style="height: 78px;width: 100%;" rows="20"  id="answer{{ $answer->id}}" onblur="editanswer({{ $answer->id}},'answers')">{{ $answer->answer}}</textarea>
                                     @endforeach
                               </div>

                           </div>
                          </div>
                        </div>
                     </div>
                     @endif
                     <?php $count++; ?>
                     @endforeach








                          <div  id="questions_tab">

                     </div>


                     <div class="form-group">
                        <button type="submit" class="btn btn-success">Add Questions</button>
                     </div>



                   </form>

                   <div  style="background-color:
                   #0c1832;
                   padding: 20px;
                   border-radius: 10px; margin-top: 20px;
                   margin-bottom: 10px;">


                   <div class="form-group  row" style="margin-bottom: 0rem;">
                   <div class="col-sm-2">
                   <h2 class="text-white">Insert</h2>

                   </div>


                   <div class="col-sm-10 ">
                     <select name="question_type" class="form-control" onchange="add_question(this.value)" style="height: 100%; width: 50%;">
   <option value=""></option>
<optgroup label="Graded Question">
 <option selected></option>
 <option value="1">Multiple choice (choose one)</option>
 <option value="2">Multiple choice (choose many)</option>
 <option value="3">True/False</option>
  <!-- <option value="4">Matching</option>  -->
 <option value="5">Fill in the blank</option>
 <option value="6">Essay</option>
</optgroup>


</select>
                   </div>

                   </div>
                   </div>
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
        toastr.success('Successfully', "{{ session('msg') }}");

    }, 1300);
  });

    </script>




@endif
    @endsection


    @section('script')


      <script src="{{ asset('backend/js/iCheck/icheck.min.js') }}"></script>

      <script>


          $(document).ready(function () {
              $('.i-checks').iCheck({
                  checkboxClass: 'icheckbox_square-green',
                  radioClass: 'iradio_square-green',
              });
          });
      </script>


    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>




      <script type="text/javascript">
          $(function(){
            $("#create_btn").click(function(ev){
              ev.preventDefault();
              $(".load").show();
              $("#message_test").html("");
              let test_name = $("#test_name").val();
              if(test_name){
                  $.ajax({
                    type: "POST",
                    url: "/add/test",
                    data: { test_name: test_name},
                    success: function(response){
                      $(".load").hide();
                      $("#message_test").html("<div class='alert alert-success'>Successfully added test.</div>");
                    },
                    error: function(errors){
                      $(".load").hide();

                         $("#message_test").html("<div class='alert alert-danger'>Test name already exists.</div>");

                    }
                  })
              }else{
                $("#message_test").html("<div class='alert alert-danger'>Test name is empty</div>");
              }
            })
          })
      </script>

      <script type="text/javascript">

             var n = {{ $count}};
             var t = "radio";
             var c = "checkbox";
             var b = 0;



            function add_question(value){
              if(value != ""){
                if(value == 1){
                  $("#questions_tab").append("<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'><div class='row'>   <input type='text' value='"+value+"' name='question_type[]' hidden='hidden '/><div class='col-lg-1'> <p style='font-weight: 800;'>"+n+".</p> </div> <div class='col-lg-11'> <input type='text' class='form-control' value='Hello this is a question' name='question[]' style='position: relative;bottom: 11px;'> </div> <div class='col-lg-1'> </div> <div class='col-lg-11'> <div class='form-group'> <div class='col-lg-12'> <div class='row'> <div id='defaultAnswers' class='col-lg-12'> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'><label> <input type='radio' value='0' name='correct"+b+"[]' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label></div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' placeholder='Answer Required' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required> </div> </div> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'><label> <input type='radio' value='1' name='correct"+b+"[]' style='position: absolute; opacity: 0;'> <i></i> </label></div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' placeholder='Answer Required' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required> </div> </div> </div> <div id='answertab"+b+"' class='col-lg-12'> </div> <div class='col-lg-4'> <br/> <p>No. of more answers? </div> <div class='col-lg-4'> <br/> <input type='number' id='morenumber' class='form-control' value='2' style='background-color: white; position: relative;bottom: 5px;'> </div> <div class='col-lg-4'> <br/> <button type='button' class='btn btn-success' onclick='AddAnswers("+b+")' style='position: relative;bottom: 5px;'>Apply</button> </div> <div class='col-lg-12'> <textarea placeholder='enter question hint optional' name='questions_optional"+n+"' class='form-control' cols='20' style='padding-left: 20px;padding-top: 10px; background-color: white; height: 82px;'></textarea> </div> </div> </div> </div> </div> </div></div></div>");

                }else if (value == 2) {
                    $("#questions_tab").append("<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'><div class='row'><input type='text' value='"+value+"' name='question_type[]' hidden='hidden '/><div class='col-lg-1'> <p style='font-weight: 800;'>"+n+".</p> </div> <div class='col-lg-11'> <input type='text' class='form-control' value='Hello this is a question' name='question[]' style='position: relative;bottom: 11px;'> </div> <div class='col-lg-1'> </div> <div class='col-lg-11'> <div class='form-group'> <div class='col-lg-12'> <div class='row'> <div id='defaultAnswers' class='col-lg-12'> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'><label> <input type='checkbox' value='0' name='correct"+b+"[]' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label></div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' placeholder='Answer Required' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required> </div> </div> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'><label> <input type='checkbox' value='1' name='correct"+b+"[]' style='position: absolute; opacity: 0;'> <i></i> </label></div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' placeholder='Answer Required' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required> </div> </div> </div> <div id='answertab"+b+"' class='col-lg-12'> </div> <div class='col-lg-4'> <br/> <p>No. of more answers? </div> <div class='col-lg-4'> <br/> <input type='number' id='morenumber' class='form-control' value='2' style='background-color: white; position: relative;bottom: 5px;'> </div> <div class='col-lg-4'> <br/> <button type='button' class='btn btn-success' onclick='AddAnswersCheck("+b+")' style='position: relative;bottom: 5px;'>Apply</button> </div> <div class='col-lg-12'> <textarea placeholder='enter question hint optional' name='questions_optional"+b+"' class='form-control' cols='20' style='padding-left: 20px;padding-top: 10px; background-color: white; height: 82px;'></textarea> </div> </div> </div> </div> </div> </div></div></div>");
                }else if (value == 3) {
                  $("#questions_tab").append("<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'> <div class='row'> <input type='text' value='"+value+"' name='question_type[]' hidden='hidden '/><div class='col-lg-1'> <p style='font-weight: 800;'>"+n+".</p> </div> <div class='col-lg-11'> <input type='text' class='form-control' value='Hello this is a question' name='question[]' style='position: relative;bottom: 11px;'> </div> <div class='col-lg-1'> </div> <div class='col-lg-11'> <div class='form-group'> <div class='col-lg-12'> <div class='row'> <div id='defaultAnswers' class='col-lg-12'> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'> <label> <input type='radio' value='0' name='correct"+b+"[]' checked='checked' style='position: absolute; opacity: 0;'> <i></i> </label> </div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' placeholder='Answer Required' name='answers"+b+"[]' style='position: relative;bottom: 5px;' value='True' required> </div> </div> <div class='row'> <div class='col-lg-1'> <br/> <div class='i-checks'> <label> <input type='radio' value='1' name='correct"+b+"[]' style='position: absolute; opacity: 0;'> <i></i> </label> </div> </div> <div class='col-lg-11'> <br/> <input type='text' class='form-control' name='answers"+b+"[]' style='position: relative;bottom: 5px;' value='False' required> </div> </div> </div> </div> </div> </div> </div> </div></div>");

                }else if (value == 4) {

                }else if (value == 5) {
                    $("#questions_tab").append("<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'> <div class='row'> <input type='text' value='"+value+"' name='question_type[]' hidden='hidden '/><div class='col-lg-1'> <p style='font-weight: 800;'>"+n+".</p> </div> <div class='col-lg-11'> <input type='text' class='form-control' value='Hello this is a question' name='question[]' style='position: relative;bottom: 11px;'> </div> <div class='col-lg-1'> </div> <div class='col-lg-11'> <div class='form-group'> <div class='col-lg-12'> <div class='row'> <div id='defaultAnswers' class='col-lg-12'> <div class='row'> <div class='col-lg-12'> <input type='text' class='form-control' placeholder='Correct answer Text' name='answers"+b+"[]' style='position: relative;bottom: 5px; background-color: white;' value='False' required> </div> </div> </div> </div> </div> </div> </div> </div></div>");
                }else if (value == 6) {
                       $("#questions_tab").append("<div style='background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;'> <div class='row'><input type='text' value='"+value+"' name='question_type[]' hidden='hidden '/> <div class='col-lg-1'> <p style='font-weight: 800;'>"+n+".</p> </div> <div class='col-lg-11'> <input type='text' class='form-control' value='Hello this is a question' name='question[]' style='position: relative;bottom: 11px;'> </div> <div class='col-lg-1'> </div> <div class='col-lg-11'> <div class='form-group'> <div class='col-lg-12'> <div class='row'> <div id='defaultAnswers' class='col-lg-12'> <div class='row'> <div class='col-lg-12'> <textarea class='form-control' name='answers"+b+"[]' style='position: relative;bottom: 5px; background-color: white;  height: 144px;' required></textarea> </div> </div> </div> </div> </div> </div> </div> </div></div>");
                }

                $(document).ready(function () {
                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green',
                    });
                });


                  n++;
                  b++;
              }


              }


      </script>

      <script type="text/javascript">

      function AddAnswersQuestions(){
        let number = $("#morenumber_image").val();
        $("#answertab_image").html("");
        if(number != "") {
          if(isNaN(number)){
            alert("not a digit");
          }else{
             if(number == 0){
               $("#answertab_image").html("");
             }else if(number >= 5){
                 alert("cannot have more than 5 answers");
             }
               else{

               let c = 2;
               for (var i = 0; i < number; i++) {
               $("#answertab_image").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='"+c+"' name='correct_image[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><input type='text' class='form-control' placeholder='Answer Required' name='answers_image[]' style='position: relative;bottom: 5px;' required></div></div>");
               $(document).ready(function () {
                   $('.i-checks').iCheck({
                       checkboxClass: 'icheckbox_square-green',
                       radioClass: 'iradio_square-green',
                   });
               });
               c++;
               }
             }
          }
        }else{
          alert("this is empty");
        }
      }



      function AddAnswers(p){
           let number = $("#morenumber").val();
           $("#answertab"+p).html("");
           if(number != "") {
             if(isNaN(number)){
               alert("not a digit");
             }else{
                if(number == 0){
                  $("#answertab"+p).html("");
                }else if(number >= 5){
                    alert("cannot have more than 5 answers");
                }else{
                  let c = 2;
                  for (var i = 0; i < number; i++) {

                        $("#answertab"+p).append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='"+c+"' name='correct"+p+"[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' placeholder='Answer Required' name='answers"+p+"[]' style='position: relative;bottom: 5px;' required></div></div>");


                  $(document).ready(function () {
                      $('.i-checks').iCheck({
                          checkboxClass: 'icheckbox_square-green',
                          radioClass: 'iradio_square-green',
                      });
                  });
                  c++;


                  }
                }
             }
           }else{
             alert("this is empty");
           }
      }





            function AddAnswersCheck(v){


                 let number = $("#morenumber").val();
                 $("#answertab"+v).html("");
                 if(number != "") {
                   if(isNaN(number)){
                     alert("not a digit");
                   }else{
                      if(number == 0){
                        $("#answertab"+v).html("");
                      }else if(number >= 5){
                          alert("cannot have more than 5 answers");
                      }else{
                        let c = 2;
                        for (var i = 0; i < number; i++) {

                              $("#answertab"+v).append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='checkbox' value='"+c+"' name='correct"+v+"[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' placeholder='Answer Required' name='answers"+v+"[]' style='position: relative;bottom: 5px;' required></div></div>");


                        $(document).ready(function () {
                            $('.i-checks').iCheck({
                                checkboxClass: 'icheckbox_square-green',
                                radioClass: 'iradio_square-green',
                            });
                        });
                        c++;


                        }
                      }
                   }
                 }else{
                   alert("this is empty");
                 }
            }



      $("#true_n_false").click(function(ev){
         ev.preventDefault();
        $("#answertab").html("");
        $("#defaultAnswers").html("");

             $("#defaultAnswers").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='1' name='correct"+b+"[]' checked='checked' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' value='True' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required></div></div>");

                $("#defaultAnswers").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='1' name='correct"+b+"[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' value='False' name='answers"+b+"[]' style='position: relative;bottom: 5px;' required></div></div>");

                $(document).ready(function () {
                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green',
                    });
                });
      })
      </script>

      <script>
      function message(message){
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Successfully', message);

        }, 1300);
      }

      function dangermessage(message){
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.warning('Successfully', message);

        }, 1300);
      }

      </script>



      <script>
      function editanswer(id,type){
        let answer  = $("#answer"+id).val();
        if(answer){
          $.ajax({
            type: "POST",
            url: "{{ route('answer.edit') }}",
            data: { answer:answer, id: id,type: type},
            success: function(response){
             if(response == "success"){
               let mess = "updated answer";
                message(mess);
             }
            }, error: function(error){
              console.log(error);
            }
          });
        }else{
          dangermessage("answer cannot be empty");
        }

      }


      function editquestion(id,type){
        let question  = $("#question"+id).val();
        if(question){
          $.ajax({
            type: "POST",
            url: "{{ route('answer.edit') }}",
            data: { question:question, id: id,type: type},
            success: function(response){
             if(response == "success"){
               let mess = "updated question";
                message(mess);
             }
            }, error: function(error){
              console.log(error);
            }
          });
        }else{
          dangermessage("question cannot be empty");
        }

      }

      </script>




    @if($errors->any())
    <script type="text/javascript">
          $("#exampleModalCenter").modal();
    </script>


    @endif


    <script type="text/javascript">
    function add_question_select(id){

    }
    </script>

    @endsection
