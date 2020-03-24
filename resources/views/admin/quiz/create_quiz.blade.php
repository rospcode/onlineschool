@extends('admin.layouts.master')
@section('page')
{{ $get_quiz->test_type }} | {{ auth()->user()->name }}
@endsection

@section('style')
    <link href="{{ ('/backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
    <link href="{{  ('/backend/css/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{  ('/backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
      <link href="{{  ('/backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css">
   <style type="text/css">
      .custom-file-container__image-multi-preview{
        width: 100%;
        height: 100%;
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
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses    <a href="" data-toggle="modal" data-target="#myModal2" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Course</a>
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
                        <h5>Quiz - </h5>

                    </div>
                    <div class="ibox-content">


                      <div class="row">

                        <div class="col-lg-6">
                             <form method="post" action="/a/add/question/">
                              {{ csrf_field() }}
                                <input type="hidden" name="quiz_id" value="{{ $get_quiz->quiz_link }}" class="form-control" />
                                <div class="wrapp_one">
                                  <h3 style="color: green !important;">Step 1 - enter question</h3>
                                  <br/>
                                  <br/>



                                  <div class="form-group">
                                    <div class="col-lg-12">
                                        <h5 style="font-weight: 700;">Question 1</h5>
                                      <textarea row="9" col="20" class="form-control" name="question" required></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="col-lg-12">
                                      <h5 style="font-weight: 700;">Step 2 - enter answers and tick correct answer(s)</h5>
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                      <div class="col-lg-12">
                                        <div class="row">
                                        <div class="col-lg-4">
                                          <p>Correct?</p>
                                        </div>
                                        <div class="col-lg-8">
                                          <button type="button" class="btn btn-success" id="true_n_false">True/False</button>
                                        </div>
                                      </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="col-lg-12">
                                      <div class="row">

                                         <div id="defaultAnswers" class="col-lg-12">
                                        <div class="row">
                                        <div class="col-lg-1">
                                          <br/>

                                          <div class="i-checks"><label> <input type="radio" value="0" name="correct[]" checked="checked" style="position: absolute; opacity: 0;"> <i></i>  </label></div>

                                        </div>
                                          <div class="col-lg-11">
                                            <br/>
                                             <input type="text" class="form-control" placeholder="Answer Required" name="answers[]" style="position: relative;bottom: 5px;" required>
                                          </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-lg-1">
                                          <br/>
                                             <div class="i-checks"><label> <input type="radio" value="1" name="correct[]" style="position: absolute; opacity: 0;"> <i></i>  </label></div>
                                        </div>
                                          <div class="col-lg-11">
                                            <br/>
                                             <input type="text" class="form-control" placeholder="Answer Required" name="answers[]" style="position: relative;bottom: 5px;" required>
                                          </div>
                                        </div>
                                      </div>


                                            <div id="answertab" class="col-lg-12">

                                            </div>

                                            <div class="col-lg-4">
                                              <br/>
                                               <p>No. of more answers?
                                            </div>
                                              <div class="col-lg-4">
                                                <br/>
                                                 <input type="number" id='morenumber' class="form-control" value="2" style="position: relative;bottom: 5px;">
                                              </div>
                                              <div class="col-lg-4">
                                                <br/>
                                              <button type="button" class="btn btn-success" onclick="AddAnswers()" style="position: relative;bottom: 5px;">Apply</button>
                                              </div>

                                              <div class="col-lg-12">
                                                <textarea placeholder="enter question hint optional" name="questions_optional" class="form-control" cols="20" style="padding-left: 20px;padding-top: 10px;"></textarea>
                                              </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-2">
                                    <button type="submit" id="add_question" class="btn btn-sm btn-info" style="margin-left: 15px;">Add Question</button>
                                  </div>
                                  <div class="col-lg-10">
                                    <button  data-toggle="modal" data-target="#uploadimage" type="button" class="btn btn-sm bp btn-primary" tooltip-placement="left" aria-hidden="false">Include Image</button>
                                  </div>
                                </div>
                             </form>
                           </div>


                           <div class="col-lg-6" style="border-left: 1px solid #767575;">

                             <h3 style="color: green;" class="text-center">All Questions</h3>
                             @if(count($get_quiz->getQuestions ) > 0)
                                <button type="button" class="btn btn-success">Take Test</button>
                             @endif
                             <br/>
                             <br/>
                             <br/>


                             @foreach($get_quiz->getQuestions as $questions)
                              @if(contains('PNG',$questions->question))
                                   <a href="" onclick="showmodal" class="text-center" style="padding-top: 30px;">{{ $questions->question }}</a><br/><br/>
                              @else
                                    <a href="" onclick="showmodal" class="text-center" style="padding-top: 30px;">{{ $questions->question }}  nop nop</a><br/><br/>
                              @endif

                             @endforeach
                           </div>

                           </div>

                    </div>
                </div>
              </div>



              </div>
              </div>






              <div class="modal fade" id="uploadimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Adding image question - {{ $get_quiz->quiz_title }}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                         <form method="post" enctype="multipart/form-data" action="/post_cred">
                           {{ csrf_field()}}

                             <div class="custom-file-container" data-upload-id="myUniqueUploadId">
    <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>

    <label class="custom-file-container__custom-file" >
        <input type="file" name="imageupload" class="custom-file-container__custom-file__custom-file-input" accept="jpg" aria-label="Choose File">
        <input type="hidden" name="MAX_FILE_SIZE" value="" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>

    <div class="custom-file-container__image-preview"></div>

                           </div>

                           <input type="hidden" name="quiz_id" value="{{ $get_quiz->quiz_link }}" class="form-control" />

                           <div class="row">

                              <div id="defaultAnswers" class="col-lg-12">
                             <div class="row">
                             <div class="col-lg-1">
                               <br/>

                               <div class="i-checks"><label> <input type="radio" value="0" name="correct_image[]" checked="checked" style="position: absolute; opacity: 0;"> <i></i>  </label></div>

                             </div>
                               <div class="col-lg-11">
                                 <br/>
                                  <input type="text" class="form-control" placeholder="Answer Required" name="answers_image[]" style="position: relative;bottom: 5px;" required>
                               </div>
                             </div>


                             <div class="row">
                             <div class="col-lg-1">
                               <br/>
                                  <div class="i-checks"><label> <input type="radio" value="1" name="correct_image[]" style="position: absolute; opacity: 0;"> <i></i>  </label></div>
                             </div>
                               <div class="col-lg-11">
                                 <br/>
                                  <input type="text" class="form-control" placeholder="Answer Required" name="answers_image[]" style="position: relative;bottom: 5px;" required>
                               </div>
                             </div>
                           </div>


                                 <div id="answertab_image" class="col-lg-12">

                                 </div>

                                 <div class="col-lg-4">
                                   <br/>
                                    <p>No. of more answers?
                                 </div>
                                   <div class="col-lg-4">
                                     <br/>
                                      <input type="number" id='morenumber_image' class="form-control" value="2" style="position: relative;bottom: 5px;">
                                   </div>
                                   <div class="col-lg-4">
                                     <br/>
                                   <button type="button" class="btn btn-success" onclick="AddAnswersQuestions()" style="position: relative;bottom: 5px;">Apply</button>
                                   </div>

                                   <div class="col-lg-12">
                                     <textarea placeholder="enter question hint optional" name="questions_optional_image" class="form-control" cols="20" style="padding-left: 20px;padding-top: 10px;"></textarea>
                                   </div>
                           </div>

                         </div>
                         <div class="modal-footer">

                           <button type="submit" class="btn btn-primary">Add Question</button>
                         </div>


                         </form>





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
<script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
<script src="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.js"></script>
<script>
    var upload = new FileUploadWithPreview('myUniqueUploadId')
</script>


<script src="{{ asset('backend/js/plugins/iCheck/icheck.min.js') }}"></script>

<script>
var upload = new FileUploadWithPreview('myUniqueUploadId', {
    showDeleteButtonOnImages: true,
    text: {
        chooseFile: 'Custom Placeholder Copy',
        browse: 'Custom Button Copy',
        selectedCount: 'Custom Files Selected Copy',
    },
    images: {
        baseImage: importedBaseImage,
    },
    presetFiles: [
        '../public/logo-promosis.png',
        'https://images.unsplash.com/photo-1557090495-fc9312e77b28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80',
    ],
})

</script>
    <script>


        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
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
           }else{
             let c = 2;
             for (var i = 0; i < number; i++) {
             $("#answertab_image").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='"+c+"' name='correct_image[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' placeholder='Answer Required' name='answers_image[]' style='position: relative;bottom: 5px;' required></div></div>");
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



    function AddAnswers(){
         let number = $("#morenumber").val();
         $("#answertab").html("");
         if(number != "") {
           if(isNaN(number)){
             alert("not a digit");
           }else{
              if(number == 0){
                $("#answertab").html("");
              }else{
                let c = 2;
                for (var i = 0; i < number; i++) {
                $("#answertab").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='"+c+"' name='correct[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' placeholder='Answer Required' name='answers[]' style='position: relative;bottom: 5px;' required></div></div>");
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

           $("#defaultAnswers").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='1' name='correct[]' checked='checked' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' value='True' name='answers[]' style='position: relative;bottom: 5px;' required></div></div>");

              $("#defaultAnswers").append("<div class='row'><div class='col-lg-1'><br/><div class='i-checks'><label> <input type='radio' value='1' name='correct[]' style='position: absolute; opacity: 0;'> <i></i>  </label></div></div><div class='col-lg-11'><br/><input type='text' class='form-control' value='False' name='answers[]' style='position: relative;bottom: 5px;' required></div></div>");

              $(document).ready(function () {
                  $('.i-checks').iCheck({
                      checkboxClass: 'icheckbox_square-green',
                      radioClass: 'iradio_square-green',
                  });
              });
    })
    </script>



<script type="text/javascript">

</script>

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
    <!-- all the js files -->
    <!-- bundle -->


@endsection
