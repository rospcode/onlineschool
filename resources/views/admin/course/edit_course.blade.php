@extends('admin.layouts.master')
@section('page')
Edit Course | {{ auth()->user()->name }}
@endsection

@section('style')
    <link href="{{ ('/backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
    <link href="{{  ('/backend/css/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{  ('/backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <style>
    note-toolbar{
      position: relative;
    }
    .btn-info {
    -webkit-box-shadow: 0 2px 6px 0 rgba(57,175,209,.5);
    box-shadow: 0 2px 6px 0 rgba(57,175,209,.5);
}
.box {
    display: block;
    min-width: 300px;
    height: 250px;
    margin: 10px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    overflow: hidden;
}
.js--image-preview {
    height: 200px;
    width: 100%;
    position: relative;
    overflow: hidden;
    background-image: url('https://www.l-nutra.com/wp-content/uploads/2018/07/placeholder.png');
    background-color: white;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    &: :after { content: "photo_size_select_actual";
    font-family: 'Material Icons';
    position: relative;
    font-size: 4.5em;
    color: rgba(230, 230, 230, 1);
    top: calc(50% - 3rem);
    left: calc(50% - 2.25rem);
    z-index: 0;
    } &.js--no-default: :after { display: none;
    } &: nth-child(2) { background-image: url('http://bastianandre.at/giphy.gif');
    }: ;
}

.upload-options {
    cursor: pointer;
    position: relative;
    height: 50px;
    background-color: $base-color;
    cursor: pointer;
    overflow: hidden;
    text-align: center;
    transition: background-color ease-in-out 150ms;
    &: hover { background-color: lighten($base-color, 10%);
    } & input { width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
    } & label { display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    font-weight: 400;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    overflow: hidden;
    &: :after { content: 'add';
    font-family: 'Material Icons';
    position: absolute;
    font-size: 2.5rem;
    color: rgba(230, 230, 230, 1);
    top: calc(50% - 2.5rem);
    left: calc(50% - 1.25rem);
    z-index: 0;
    } & span { display: inline-block;
    width: 50%;
    height: 100%;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: middle;
    text-align: center;
    &: hover i.material-icons { color: lightgray;

}


.note-editor.note-frame .note-editing-area {
    height: 300px;
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
                        <h5>Edit Course</h5>

                    </div>
                    <div class="ibox-content">

                      <form class="required-form" action="/a/edit/whole/course/" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" name="course_link" hidden="hidden" value="{{ $get_course->course_link }}" />
                                <div id="basicwizard">
                                    <ul class="nav nav-pills nav-justified form-wizard-header mb-3" style="background-color: #0c1832;">
                                        <li class="nav-item">
                                           <a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                               <i class="mdi mdi-account-circle mr-1"></i>
                                               <span class="d-none d-sm-inline">Curriculum</span>
                                           </a>
                                       </li>
                                        <li class="nav-item">
                                            <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                                <span class="d-none d-sm-inline">Basic</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-bell-alert mr-1"></i>
                                                <span class="d-none d-sm-inline">Requirements</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-currency-cny mr-1"></i>
                                                <span class="d-none d-sm-inline">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-library-video mr-1"></i>
                                                <span class="d-none d-sm-inline">Media</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                <span class="d-none d-sm-inline">Finish</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content b-0 mb-0">
                                        <div class="tab-pane" id="curriculum">
                                            <div class="row justify-content-center">
        <div class="col-xl-12 mb-4 text-center mt-3">
            <a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1" data-toggle="modal" data-target="#addsection_modal"><i class="mdi mdi-plus"></i> Add section</a>
            <a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1"  data-toggle="modal" data-target="#addlesson_modal"><i class="mdi mdi-plus"></i> Add lesson</a>
            <a href="javascript::void(0)" class="btn btn-outline-primary btn-rounded btn-sm ml-1" data-toggle="modal" data-target="#add_quiz"><i class="mdi mdi-plus"></i> Add quiz</a>
        </div>

        <div class="col-xl-8">
            <div class="row">
                   <?php $section_count = 1; ?>

                  @foreach($get_course->getSection as $section)
                     @if($section->visible != 'n') <!-- if section is not deleted -->
                                        <div class="col-xl-12">
                          <div class="card bg-light text-seconday on-hover-action mb-5" id="section-5<?php echo $section_count; ?>">
                          <div class="card-body">
                            <h5 class="card-title" style="min-height: 35px;">
                              <span class="font-weight-light">Section <?php echo $section_count; ?></span>: {{ $section->section_title}}
                                 <div class="row justify-content-center alignToTitle float-right display-none" id="widgets-of-section-5<?php echo $section_count; ?>" style="display: none;">
                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button" onclick="showEditModal('{{ $section->section_code}}','{{ $section->section_title }}')"><i class="mdi mdi-pencil-outline"></i> Edit section</button>
                                    <button type="button" class="btn btn-outline-secondary btn-rounded btn-sm ml-1" name="button" onclick="confirm_modal('/a/section/delete/{{ $section->section_code }}');"><i class="mdi mdi-window-close"></i> Delete section</button>
                                  </div>
                            </h5>
                            <div class="clearfix"></div>
                            <?php $lesson_count = 1; ?>
                            @foreach($section->getLessons as $lesson)
                            @if($lesson->shown == "")
                            <div class="col-md-12">
                                <!-- Portlet card -->
                                <div class="card text-secondary on-hover-action mb-2" id="lesson-12<?php echo$lesson_count; ?>">
                                    <div class="card-body thinner-card-body">
                                        <div class="card-widgets display-none" id="widgets-of-lesson-12<?php echo$lesson_count; ?>" style="display: none; float: right;">

                                            <a href="javascript::" onclick="confirm_modal('/a/delete/lesson/{{ $lesson->lesson_code }}');"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h5 class="card-title mb-0">
                                            <span class="font-weight-light">
                                              <img src="{{ asset('frontend/lesson_icon')}}/{{ $lesson->lesson_type }}.png" alt="" height="16" />Lesson <?php echo $lesson_count; ?>
                                            </span>: {{ $lesson->lesson_title }}
                                        </h5>
                                    </div>
                                </div>
                                <!-- end card-->
                            </div>
                            @endif
                            <?php $lesson_count++; ?>
                            @endforeach

                               <?php $quiz_count = 1; ?>
                            @foreach($section->getTest as $quiz)
                            <div class="col-md-12">
  <!-- Portlet card -->
  <div class="card text-secondary on-hover-action mb-2" id="lesson-13<?php echo$quiz_count; ?>">
      <div class="card-body thinner-card-body">
          <div class="card-widgets display-none" id="widgets-of-lesson-13<?php echo$quiz_count; ?>" style="display: none; float: right;">

            <a href="/a/test/menu/{{$quiz->test_code}}" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="javascript::" onclick="confirm_modal('/a/delete/test/{{ $quiz->test_code }}');"><i class="fa fa-times"></i></a>
          </div>
          <h5 class="card-title mb-0">
              <span class="font-weight-light">
                    <img src="{{ asset('frontend/lesson_icon/quiz.png')}}" alt="" height="16">
                                 Quiz <?php echo $quiz_count; ?>
              </span>: {{ $quiz->test_title }}
          </h5>
      </div>
  </div>
  <!-- end card-->
</div>

                              <?php $quiz_count++; ?>
                            @endforeach


                          </div>
                          <!-- end card-body-->
                          </div>
                          <!-- end card-->
                          </div>
                          <?php $section_count++; ?>
                          @endif
                          @endforeach
                 </div>
               </div>
            </div>
                                        </div>

                                    <div class="tab-pane active" id="basic">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="course_title">Course title<span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="course_title" name="course_title" placeholder="Enter course title" value="{{ $get_course->course_title }}" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="description">Description</label>
                                                    <div class="col-md-10">
                                                      <div class="ibox-content no-padding">

                                                          <textarea class="summernote" name="course_notes" id="course_notes">
                                                                   {!! $get_course->course_notes !!}
                                                          </textarea>

                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="sub_category_id">Category<span class="required">*</span></label>
                                                    <div class="col-md-10">
                                                      <select class="category_select form-control" name="categories_id" id="categories_id">
                                                          <option value="1">{{ $get_course->getcategory->category_title}}</option>
                                                          @foreach($get_categories as $category)
                                                           @if($category->category_title != $get_course->getcategory->category_title)
                                                          <option value="2">{{ $category->category_title }}</option>
                                                          @endif
                                                          @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="level">Level</label>
                                                <div class="col-md-10">
                                                  <select class="level_select form-control" name="course_level" id="course_level">
                                                      <option value="Beginner">Beginner</option>
                                                      <option value="Intermediate">Intermediate</option>
                                                      <option value="Professional">Professional</option>

                                                  </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="language_made_in">Language made in</label>
                                                    <div class="col-md-10">
                                                      <select class="language_select form-control">
                                                          <option value="English">English</option>

                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="level">Venue</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="course_venue" name="course_venue" placeholder="Enter course title" value="{{ $get_course->course_venue}}" required="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-2 col-form-label" for="language_made_in">Course Status</label>
                                                        <div class="col-md-10">
                                                          <select class="language_select form-control" id="course_status" name="course_status">
                                                              <option value="Available">Available</option>
                                                              <option value="Offline">Offline</option>

                                                          </select>
                                                        </div>
                                                    </div>

                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- end tab pane -->

                                    <div class="tab-pane" id="requirements">
          <div class="row justify-content-center">
              <div class="col-xl-8">
                  <div class="form-group row mb-3">
                      <label class="col-md-2 col-form-label" for="requirements">Requirements</label>
                      <div class="col-md-10">
                          <div id="requirement_area">
                              <div class="d-flex mt-2">
                                  <div class="flex-grow-1 px-3">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements" >
                                      </div>
                                  </div>
                                  <div class="">
                                      <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
                                  </div>
                              </div>

                              @foreach($get_course->getRequirements as $requirements)
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1 px-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements" value="{{ $requirements->requirements}}">
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
                                    </div>
                                </div>
                                @endforeach

                              <div id="blank_requirement_field" style="display: none;">
                                  <div class="d-flex mt-2">
                                      <div class="flex-grow-1 px-3">
                                          <div class="form-group">
                                              <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements">
                                          </div>
                                      </div>
                                      <div class="">
                                          <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



                            <div class="tab-pane" id="pricing">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="form-group row mb-3">
                                            <div class="offset-md-2 col-md-10">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="is_free_course" id="is_free_course" value="1" onclick="togglePriceFields(this.id)">
                                                    <label class="custom-control-label" for="is_free_course">Check if this is a free course</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="paid-course-stuffs">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="price">Course price ZAR</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" id="course_cost" name="course_cost" min="0" placeholder="Enter course course price" value="{{ $get_course->course_cost }}">
                                                </div>
                                            </div>


                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end tab-pane -->
                            <div class="tab-pane" id="media">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                      <div class="form-group row mb-3">

                                        <div class="col-md-12">
                                          <div class="wrapper-image-preview" style="margin-left: -6px;">
                                            <div class="box" style="width: 250px; margin: 0px auto;">
                                              <div class="js--image-preview" style="background-image: url({{ asset('img/courses') }}/{{ $get_course->course_img}}); background-color: #F5F5F5;"></div>
                                              <div class="upload-options">
                                                <label for="course_thumbnail" style="padding-top: 5px;" class="btn"> <i class="mdi mdi-camera"></i> Course thumbnail <br> <small>(600 X 600)</small> </label>
                                                <input id="course_thumbnail" name="course_img" style="visibility:hidden;"  type="file" class="image-upload" name="course_thumbnail" accept="image/*">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="finish">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                            <h3 class="mt-0">Thank you !</h3>

                                            <p class="w-75 mb-2 mx-auto">You are just one click away</p>

                                            <div class="mb-3 mt-3">
                                                <button type="button" class="btn btn-primary text-center" onclick="checkRequiredFields()">Submit</button>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <ul class="list-inline mb-0 wizard text-center">
                                <li class="previous list-inline-item">
                                    <a href="javascript::" class="btn btn-info"> <i class="fa fa-arrow-circle-o-left" style="font-size: 28px;"></i> </a>
                                </li>
                                <li class="next list-inline-item">
                                    <a href="javascript::" class="btn btn-info"> <i class="fa fa-arrow-circle-o-right" style="font-size: 28px;"></i> </a>
                                </li>
                            </ul>

                        </div> <!-- tab-content -->
                    </div> <!-- end #progressbarwizard-->
                </form>
                    </div>
                </div>
              </div>



              </div>
              </div>






              <div class="modal fade show" id="addsection_modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-modal="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="scrollableModalTitle">Add new section</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body ml-2 mr-2">
                        <form action="" method="post" id="addsection_form">
                          {{ csrf_field() }}

                          <input type="text" name="course_title" hidden="hidden" value="{{ $get_course->course_link }}" />
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input class="form-control" type="text" name="section_title" id="section_title" required="">
                      <small class="text-muted">Provide a section name</small>
                  </div>

                  <div class="form-group">
                    <div id="addsection_message"></div>
                  </div>

                  <div class="text-right">
                      <button class="btn btn-success" type="submit" id="addsection_btn" name="button">Submit</button>
                  </div>


              </form>
              </div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
              </div>






              <div class="modal fade show" id="editsection_modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-modal="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="scrollableModalTitle">Edit section</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body ml-2 mr-2">
                        <form action="/a/edit/section/" method="post" id="editsection_form">
                          {{ csrf_field() }}

                          <input type="text" name="edit_section_id" id="edit_section_id" hidden="hidden"  />
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input class="form-control" type="text" name="edit_section_title" id="edit_section_title" required="">
                      <small class="text-muted">Provide a section name</small>
                  </div>

                  <div class="form-group">
                    <div id="addsection_message"></div>
                  </div>

                  <div class="text-right">
                      <button class="btn btn-success" type="submit" id="addsection_btn" name="button">Submit</button>
                  </div>


              </form>
              </div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
              </div>








              <div class="modal fade show" id="addlesson_modal"  role="dialog" aria-labelledby="" aria-modal="true">
<div class="modal-dialog modal-dialog-scrollable" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="scrollableModalTitle">Add new lesson</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body ml-2 mr-2" style="overflow:hidden;">
          <form action="/a/addlesson/" method="post" enctype="multipart/form-data">


        {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="lesson_title" id="lesson_title" class="form-control " required="">
    </div>

    <input type="hidden" name="course_id" value="{{ $get_course->id }}">

    <div class="form-group">
          <label class="col-form-label" for="level">Section</label>
            <select class="sec_select form-control" name="course_section_id" style="width: 100%; z-index: 3000">
              @foreach($get_course->getSection as $section)
                <option value="{{ $section->id }}">{{ $section->section_title }}</option>
              @endforeach
            </select>
    </div>

    <div class="form-group">
        <label class="col-form-label" for="level">Lesson Type</label>
          <select class="lesson_select form-control" id="lesson_select" name="lesson_type" style="width: 100%;" onchange="lessonfunction()">
            <option value="video" >Video url</option>
            <option value="txt">Text file</option>
            <option value="pdf">Pdf file</option>
            <option value="doc">Document file</option>
            <option value="img">Image file</option>
        </select>
    </div>





   <div id="option_void">

  </div>

    <div class="form-group">
        <label>Summary</label>
        <textarea name="summary" class="form-control"></textarea>
        </div>

        @if ($errors->has('lesson_title') || $errors->has('course_section_id') || $errors->has('lesson_type') || $errors->has('summary'))
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
    @endif
    <div class="text-center">
        <button class="btn btn-success" type="submit" >Add lesson</button>
    </div>
    </form>

</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>





<div class="modal fade show" id="add_quiz" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-modal="true">
<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document" data-select2-id="57">
    <div class="modal-content" data-select2-id="56">
        <div class="modal-header">
            <h5 class="modal-title" id="scrollableModalTitle">Add new quiz</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body ml-2 mr-2" data-select2-id="18">
          <form action="/a/add/quiz/" method="post">

            <input type="hidden" name="course_id" value="{{ $get_course->id }}">
            {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Quiz title</label>
        <input class="form-control" type="text" name="quiz_title" id="quiz_title" required="">
    </div>

    <div class="form-group">
        <label for="section_id"  selected="selected">Test Section</label>
        <select class="form-control" name="course_section_id" style="width: 100%;">
          @foreach($get_course->getSection as $section)
            <option value="{{ $section->id }}">{{ $section->section_title }}</option>
          @endforeach
        </select>
    </div>

      @if ($errors->has('quiz_title') || $errors->has('course_section_id') || $errors->has('instruction'))
<div class="alert alert-danger">
<ul>
  @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
</ul>
</div>
@endif

    <div class="text-center">
        <button class="btn btn-success" type="submit" name="button">Submit</button>
    </div>

</form>
</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>

@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

<script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>
  <script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
  <script type="text/javascript">
    function showEditModal(code,section_title){
      document.getElementById("edit_section_id").value = code;
      document.getElementById("edit_section_title").value = section_title;

      $(document).ready(function(){
        $('#editsection_modal').modal({show: true});

    });
    }



    $('#course_img').change(function () {
        alert("hey");
        });




  $(document).ready(function () {
     $("#addsection_btn").click(function(ev){
       ev.preventDefault();
       let title = $("#section_title").val();
      if(title == null){
        $("#addsection_message").html("<div class='alert alert-success'>Section Title is empty</div>");
      }else{
        $.ajax({
        type: "POST",
        url: "/a/new/section",
        data: $("#addsection_form").serialize(),
        success: function(response){
            $("#addsection_message").html("<div class='alert alert-success'>Successfully added Section</div>");
            setInterval(PageReload, 2000);
        },error: function(data){
          var errors = data.responseJSON;
           $.each(errors, function(key,message){
             console.log(message);
              $("#addsection_message").html("<div class='alert alert-danger'>"+message+"</div>");
           });
        }//end of error function
      });
    }//end of else
     })
   })


   function PageReload(){
    location.reload();
};
  </script>


   @if($errors->has('lesson_title') || $errors->has('summary'))
   <script type="text/javascript">
     $(document).ready(function(){
       $('#addlesson_modal').modal({show: true});
   });
   </script>
   @endif

   @if($errors->has('quiz_title') || $errors->has('instruction'))
   <script type="text/javascript">
     $(document).ready(function(){
       $('#add_quiz').modal({show: true});
   });
   </script>
   @endif








<script>
  $('.clockpicker').clockpicker();
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );


          $(".category_select").select2();
          $(".level_select").select2();
          $(".language_select").select2();
          $(".select_section").select2();




</script>
<script>
    $(document).ready(function(){

        $('.summernote').summernote();



        $('.instruction').summernote({
           height: 200
        });

   });
</script>


@if($errors->has('course_end'))
<script type="text/javascript">
$("#end_date").show();
</script>

@else

<script type="text/javascript">
$("#end_date").hide();
</script>
@endif



<script type="text/javascript">
  $(document).ready(function () {
    initSummerNote(['#description']);
    togglePriceFields('is_free_course');
  });
</script>

<script type="text/javascript">
var blank_outcome = jQuery('#blank_outcome_field').html();
var blank_requirement = jQuery('#blank_requirement_field').html();
jQuery(document).ready(function() {
    jQuery('#blank_outcome_field').hide();
    jQuery('#blank_requirement_field').hide();
    calculateDiscountPercentage($('#discounted_price').val());
});

function appendRequirement() {
    jQuery('#requirement_area').append(blank_requirement);
}
function removeRequirement(requirementElem) {
    jQuery(requirementElem).parent().parent().remove();
}

function calculateDiscountPercentage(discounted_price) {
    if (discounted_price > 0) {
        var actualPrice = jQuery('#price').val();
        if ( actualPrice > 0) {
            var reducedPrice = actualPrice - discounted_price;
            var discountedPercentage = (reducedPrice / actualPrice) * 100;
            if (discountedPercentage > 0) {
                jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + "%");

            }else {
                jQuery('#discounted_percentage').text('0%');
            }
        }
    }
}

$('.on-hover-action').mouseenter(function() {
    var id = this.id;
    $('#widgets-of-'+id).show();
});
$('.on-hover-action').mouseleave(function() {
    var id = this.id;
    $('#widgets-of-'+id).hide();
});
</script>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
    <!-- all the js files -->
    <!-- bundle -->
<script src="http://demo.academy-lms.com/default/assets/backend/js/app.min.js"></script>
<!-- third party js -->
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/Chart.bundle.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/jquery.dataTables.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dataTables.bootstrap4.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dataTables.responsive.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dataTables.buttons.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/buttons.html5.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/buttons.flash.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/buttons.print.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dataTables.keyTable.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dataTables.select.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/summernote-bs4.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/fullcalendar.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/pages/demo.summernote.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dropzone.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/pages/demo.dashboard.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/pages/datatable-initializer.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/font-awesome-icon-picker/fontawesome-iconpicker.min.js" charset="utf-8"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/bootstrap-tagsinput.min.js" charset="utf-8"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/bootstrap-tagsinput.min.js"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dropzone.min.js" charset="utf-8"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/ui/component.fileupload.js" charset="utf-8"></script>
<script src="http://demo.academy-lms.com/default/assets/backend/js/pages/demo.form-wizard.js"></script>
<!-- dragula js-->
<script src="http://demo.academy-lms.com/default/assets/backend/js/vendor/dragula.min.js"></script>
<!-- component js -->
<script src="http://demo.academy-lms.com/default/assets/backend/js/ui/component.dragula.js"></script>

<script src="{{ asset('backend/admin/custom.js') }}"></script>

<!-- Dashboard chart's data is coming from this file -->


<script type="text/javascript">
  $(document).ready(function() {
    $(function() {
       $('.icon-picker').iconpicker();
     });
  });
</script>

<!-- Toastr and alert notifications scripts -->
<script type="text/javascript">
function notify(message) {
  $.NotificationApp.send("Heads up!", message ,"top-right","rgba(0,0,0,0.2)","info");
}

function success_notify(message) {
  $.NotificationApp.send("Congratulations!", message ,"top-right","rgba(0,0,0,0.2)","success");
}

function error_notify(message) {
  $.NotificationApp.send("Oh snap!", message ,"top-right","rgba(0,0,0,0.2)","error");
}

function error_required_field() {
  $.NotificationApp.send("Oh snap!", "Please fill all the required fields" ,"top-right","rgba(0,0,0,0.2)","error");
}
</script>



    <script type="text/javascript">
function showAjaxModal(url, header)
{
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#scrollable-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://demo.academy-lms.com/default/assets/global/bg-pattern-light.svg" /></div>');
    jQuery('#scrollable-modal .modal-title').html('...');
    // LOADING THE AJAX MODAL
    jQuery('#scrollable-modal').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#scrollable-modal .modal-body').html(response);
            jQuery('#scrollable-modal .modal-title').html(header);
        }
    });
}
function showLargeModal(url, header)
{
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#large-modal .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="http://demo.academy-lms.com/default/assets/global/bg-pattern-light.svg" height = "50px" /></div>');
    jQuery('#large-modal .modal-title').html('...');
    // LOADING THE AJAX MODAL
    jQuery('#large-modal').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#large-modal .modal-body').html(response);
            jQuery('#large-modal .modal-title').html(header);
        }
    });
}
</script>

<!-- (Large Modal)-->
<div class="modal fade" id="large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Scrollable modal -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body ml-2 mr-2">

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
function confirm_modal(delete_url)
{
    jQuery('#alert-modal').modal('show', {backdrop: 'static'});
    document.getElementById('update_link').setAttribute('href' , delete_url);
}
</script>

<!-- Info Alert Modal -->
<div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <h4 class="mt-2">Heads up!</h4>
                    <p class="mt-3">Deleting the Section also deletes the lessons</p>
                    <button type="button" class="btn btn-info my-2" data-dismiss="modal">Cancel</button>
                    <a href="#" id="update_link" class="btn btn-danger my-2">Continue</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <script type="text/javascript">
  function togglePriceFields(elem) {
    if($("#"+elem).is(':checked')){
      $('.paid-course-stuffs').slideUp();
    }else
      $('.paid-course-stuffs').slideDown();
    }
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
      $.fn.dataTable.ext.errMode = 'throw';
      $('#course-datatable-server-side').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax":{
              "url": "http://demo.academy-lms.com/default/user/get_courses",
              "dataType": "json",
              "type": "POST",
              "data" : {selected_category_id : '',
                        selected_status : '',
                        selected_instructor_id : '',
                        selected_price : ''}
          },
          "columns": [
              { "data": "#" },
              { "data": "title" },
              { "data": "category" },
              { "data": "lesson_and_section" },
              { "data": "enrolled_student" },
              { "data": "status" },
              { "data": "price" },
              { "data": "actions" },
          ],
          "columnDefs": [{
              targets: "_all",
              orderable: false
           }]
      });
  });





  $(document).ready(function() {
    $('#addlesson_modal').on('show.bs.modal', function(e) {
      console.debug('modal shown!');
      $('.lesson_select', this).chosen({width: "350px"});
    });

    $("#addlesson_modal").modal('show');
  });


  function lessonfunction() {
  var x = document.getElementById("lesson_select").value;
  if(x != "video"){
       $("#option_void").html("<div class='' id='other_attachment'><div class='form-group'><label> Attachment</label><div class='input-group'><div class='custom-file'><input type='file' class='custom-file-input' id='attachment' name='attachment' ><label class='custom-file-label' for='attachment'>Attachment</label></div></div></div></div>");
  }else{
  $("#option_void").html("<div id='other_video'><div class='form-group'><label> Video Link</label><input type='text' name='attachment' class='form-control' required=''></div></div>");
  }
}
</script>
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
