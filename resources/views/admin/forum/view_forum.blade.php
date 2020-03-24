@extends('admin.layouts.master')
@section('page')
Questions - Forum
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('/forum/forum.css')}}" />
<link href="{{ asset('backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
<style>
#forum-filter-order select {
  display: none; /*hide original SELECT element:*/
}

.table-row:hover{
   background-color: #0c1832;
   cursor: pointer;
}
.table-row:hover .bold{ color: white; }
.table-row:hover a{ color: white; }
.table-row:hover .discussion-preview-meta-text{color: #c8c8c8;}
.table-row:hover .table-title{ color: #c8c8c8; }
.table .table-body .table-row:nth-child(2n+2):hover { background-color: #0c1832;}









/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
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


p {
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4;
}


/* Absolute Center Spinner */
.load{
  align-items: center;
 background:  white;
 display: flex;
 height: 100vh;
 justify-content: center;
 left: 0;
 position: fixed;
 top: 0;
 transition: opacity 0.3s linear;
 width: 100%;
 z-index: 9999;
}
.rotate {
  animation: spin 2s linear infinite;
}




@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
</style>
@endsection

@section('content')

<div class="load" style="display: none;">



<img src="{{ asset('hr_loader3.gif')}}" class="rotate"  style="width: 100px;" />

</div>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Course - {{ $course->course_title}}</span><br>
                </h2>

                <p>

                </p>
                <button href="/a/graduates_users/all" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Create Forum Question </button>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add A Question </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="leave_comment">
          {{ csrf_field() }}
          <input type="text" hidden="hidden" name="course" id="course" value="{{$course->course_link}}" />
          <div class="form-group">
             <input class="form-control" id="title" name="title" placeHolder="Your question's Title" />
          </div>
       <div class="form-group">
          <textarea class="form-control" id="question_add" name="question_add" placeHolder="Question" rows="3" cols="13"></textarea>

       </div>

       <div class="form-group">
          <div id="messagecomment"> </div>

       </div>

       <div class="form-group">
         <button type="button" id="submit_question" class="btn btn-primary btn-left" style="float: right;">Submit</button>
       </div>
     </form>
      </div>
    </div>
  </div>
</div>


<div class="wrapper wrapper-content">
<div class="row">
  <div class="col-lg-12">
<div class="section-filters-bar v5">
<!-- SECTION FILTERS BAR ACTIONS -->
<div class="section-filters-bar-actions">
<!-- FILTER TABS -->
<div class="filter-tabs">
<!-- FILTER TAB -->
<div class="filter-tab active">
  <!-- FILTER TAB TEXT -->
  <p class="filter-tab-text">Topics Started</p>
  <!-- /FILTER TAB TEXT -->
</div>
<!-- /FILTER TAB -->

<!-- FILTER TAB -->
<div class="filter-tab">
  <!-- FILTER TAB TEXT -->
  <p class="filter-tab-text">My Replies</p>
  <!-- /FILTER TAB TEXT -->
</div>
<!-- /FILTER TAB -->

<!-- FILTER TAB -->
<div class="filter-tab">
  <!-- FILTER TAB TEXT -->
  <p class="filter-tab-text">Liked Topics</p>
  <!-- /FILTER TAB TEXT -->
</div>
<!-- /FILTER TAB -->
</div>
<!-- /FILTER TABS -->

<!-- FORM -->
<form class="form">
<!-- FORM SELECT -->
<div class="form-select">
  <label for="forum-filter-category">Filter By</label>
  <select id="forum-filter-category" name="forum_filter_category">
    <option value="0">Topics Started</option>
    <option value="1">My Replies</option>
    <option value="2">Liked Topics</option>
  </select>
  <!-- FORM SELECT ICON -->
  <svg class="form-select-icon icon-small-arrow">
    <use xlink:href="#svg-small-arrow"></use>
  </svg>
  <!-- /FORM SELECT ICON -->
</div>
<!-- /FORM SELECT -->
</form>
<!-- /FORM -->
</div>
<!-- /SECTION FILTERS BAR ACTIONS -->

<!-- SECTION FILTERS BAR ACTIONS -->
<div class="section-filters-bar-actions">
<!-- FORM -->
<form class="form">
<!-- FORM ITEM -->
<div class="form-item split medium">
  <!-- FORM SELECT -->
  <div class="form-select small">

    <select id="" class="select_sort_by" onchange="getrevelance($(this).value)" name="forum_filter_order">
      <option value="0">Newest First</option>
      <option value="1">Oldest First</option>
    </select>
    <!-- FORM SELECT ICON -->
    <svg class="form-select-icon icon-small-arrow">
      <use xlink:href="#svg-small-arrow"></use>
    </svg>
    <!-- /FORM SELECT ICON -->
  </div>
  <!-- /FORM SELECT -->

  <!-- BUTTON -->
  <button class="btn btn-primary" type="button" id="filter_discussion">Apply Filter</button>
  <!-- /BUTTON -->
</div>
<!-- /FORM ITEM -->
</form>
<!-- /FORM -->
</div>
<!-- /SECTION FILTERS BAR ACTIONS -->
</div>

</div>
</div>
</div>


<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
      <div class="ibox ">

          <div class="ibox-content">






            <div class="table table-forum-discussion">
                    <!-- TABLE HEADER -->
                    <div class="table-header">
                      <!-- TABLE HEADER COLUMN -->
                      <div class="table-header-column">
                        <!-- TABLE HEADER TITLE -->
                        <p class="table-header-title">Discussion</p>
                        <!-- /TABLE HEADER TITLE -->
                      </div>
                      <!-- /TABLE HEADER COLUMN -->


                      <!-- TABLE HEADER COLUMN -->
                      <div class="table-header-column centered padded-medium">
                        <!-- TABLE HEADER TITLE -->
                        <p class="table-header-title">Replies</p>
                        <!-- /TABLE HEADER TITLE -->
                      </div>
                      <!-- /TABLE HEADER COLUMN -->

                      <!-- TABLE HEADER COLUMN -->
                      <div class="table-header-column padded-big-left">
                        <!-- TABLE HEADER TITLE -->
                        <p class="table-header-title">Activity</p>
                        <!-- /TABLE HEADER TITLE -->
                      </div>
                      <!-- /TABLE HEADER COLUMN -->
                    </div>
                    <!-- /TABLE HEADER -->

                    <!-- TABLE BODY -->
                    <div class="table-body">



                  @foreach($questions as $question)

                      <!-- TABLE ROW -->
                      <div class="table-row medium" data-id="{{ $question->id}}">
                        <!-- TABLE COLUMN -->
                        <div class="table-column">
                          <!-- DISCUSSION PREVIEW -->
                          <div class="discussion-preview">
                            <!-- DISCUSSION PREVIEW TITLE -->
                            <a class="discussion-preview-title" href="javascript:void(0);">{{ $question->question_title }}</a>
                            <!-- /DISCUSSION PREVIEW TITLE -->

                            <!-- DISCUSSION PREVIEW META -->
                            <div class="discussion-preview-meta">
                              <!-- DISCUSSION PREVIEW META TEXT -->
                              <p class="discussion-preview-meta-text">Started by</p>
                              <!-- /DISCUSSION PREVIEW META TEXT -->

                              <!-- USER AVATAR -->
                              <a class="user-avatar micro no-border" href="javascript:void(0);">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                  <!-- HEXAGON -->
                                  <img class="hexagon-image-18-20 " src="{{ asset('user')}}/{{$question->creator_avatar}}" style="width: 18px; height: 20px; position: relative; bottom: 10px; border-radius: 50%;" />
                                  <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                              </a>
                              <!-- /USER AVATAR -->

                              <!-- DISCUSSION PREVIEW META TEXT -->
                              <p class="discussion-preview-meta-text"><a href="javascript:void(0);">{{ $question->Fullname}}</a> {{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }} </p>
                              <!-- /DISCUSSION PREVIEW META TEXT -->
                            </div>
                            <!-- /DISCUSSION PREVIEW META -->
                          </div>
                          <!-- /DISCUSSION PREVIEW -->
                        </div>
                        <!-- /TABLE COLUMN -->


                        <!-- TABLE COLUMN -->
                        <div class="table-column centered padded-medium">
                          <!-- TABLE TITLE -->
                          <p class="table-title">{{ $question->comments}}</p>
                          <!-- /TABLE TITLE -->
                        </div>
                        <!-- /TABLE COLUMN -->

                        <!-- TABLE COLUMN -->
                        <div class="table-column padded-big-left">
                          <!-- USER STATUS -->
                          <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="javascript:void(0);">
                              <!-- USER AVATAR -->
                              <div class="user-avatar small no-outline">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                  <!-- HEXAGON -->
                                  @if($question->last_user_avatar)
                                  <img class="hexagon-image-30-32" src="{{ asset('user')}}/{{ $question->last_user_avatar}}" style="width: 30px; height: 32px; position: relative; border-radius: 50%;" />
                                  <!-- /HEXAGON -->
                                  @endif
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                  <!-- HEXAGON -->
                                  <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                  <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                  <!-- HEXAGON -->
                                  <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                  <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->


                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                  <!-- USER AVATAR BADGE BORDER -->
                                  <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                  </div>
                                  <!-- /USER AVATAR BADGE BORDER -->

                                  <!-- USER AVATAR BADGE CONTENT -->
                                  <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                  </div>
                                  <!-- /USER AVATAR BADGE CONTENT -->


                                </div>
                                <!-- /USER AVATAR BADGE -->
                              </div>
                              <!-- /USER AVATAR -->
                            </a>
                            <!-- /USER STATUS AVATAR -->

                            <!-- USER STATUS TITLE -->
                            <p class="user-status-title"><a class="bold" href="javascript:void(0);">{{ $question->last_user_comment}}</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">@if($question->date_last_comment) {{ \Carbon\Carbon::parse($question->date_last_comment)->diffForHumans() }}    @endif</p>
                            <!-- /USER STATUS TEXT -->
                          </div>
                          <!-- /USER STATUS -->
                        </div>
                        <!-- /TABLE COLUMN -->
                      </div>
                      <!-- /TABLE ROW -->

                      @endforeach
                    </div>
                    <!-- /TABLE BODY -->
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
         $("#submit_question").click(function(event){
           event.preventDefault();

           let question = $("#question_add").val();
           let course = $("#course").val();
           let title = $("#title").val();

           $(".load").show();


           if(!question || !course || !title){
               alert("sorru");
               $(".load").hide();
           }else{


             $.ajax({
            type: "POST",
            url: "{{ route('admin.comment.question') }}",
            data: $("#leave_comment").serialize(),
            success: function(response){
              if(response == "success"){
                 $(".load").hide();
                 $("#messagecomment").html("<div class='alert alert-success'>Question added to the forum</div>");
                 setTimeout(function(){  $("#messagecomment").html("<div class='alert alert-success'>Refreshing page...</div>"); }, 2000);
                 setTimeout(function(){ location.reload(); }, 3000);
              }else if(response == "exist"){

                $("#messagecomment").html("<div class='alert alert-danger'>Question already exists in the forum</div>");
                 $(".load").hide();
              }else{
                $("#messagecomment").html("<div class='alert alert-danger'>Ooops, looks like something went wrong</div>");
                 $(".load").hide();
              }
           },error: function(data){
              var errors = data.responseJSON;
               $(".load").hide();
                 console.log(errors);
              }
             });
           }
         });
      </script>



    <script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>

    <script type="text/javascript">

      $(".select2_enrol").select2();

    </script>

    <script type="text/javascript">
    $(".table-row").click(function(){
      //alert($(this).data("id"));
      let get_question_id = $(this).data("id");
      window.open('/a/forum/view/{{ $course->course_link}}/'+get_question_id,'_target');
    });


    $("#filter_discussion").click(function(){
        $(".load").show();
        let id = $(".select_sort_by").val();
        $.ajax({
          type: "get",
          url: "/a/sortby/"+id+"/{{ $course->course_link}}",
          success: function(response){
            if(response.length > 0){
               $(".table-body").html("");
               for (var i = 0; i < response.length; i++) {
                 let last_user_avatar = "";
                 let last_user_comment = "";
                 let date_last_comment = "";
                 let created_at = new Date(response[i].created_at);
                 created_at = moment(created_at, "YYYY-MM-DD HH:MM:SS").fromNow();







                 if(!response[i].date_last_comment){
                   date_last_comment = "";
                 }else{

                   date_last_comment = new Date(response[i].date_last_comment);
                   date_last_comment = moment(date_last_comment, "YYYY-MM-DD HH:MM:SS").fromNow();


                 }
                 if(!response[i].last_user_comment){
                   last_user_comment = "";
                 }else{
                   last_user_comment = response[i].last_user_comment;
                 }

                 if(!response[i].last_user_avatar){
                   last_user_avatar = "";
                 }else{
                   last_user_avatar = "<img class='hexagon-image-30-32' src='{{ asset('user')}}/"+response[i].last_user_avatar+"' style='width: 30px; height: 32px; position: relative; border-radius: 50%;' /> ";
                 }


                 $(".table-body").append("<div class='table-row medium' data-id='"+response[i].id+"'> <div class='table-column'> <div class='discussion-preview'> <a class='discussion-preview-title' href='javascript:void(0);'>"+response[i].question_title+"</a> <div class='discussion-preview-meta'> <p class='discussion-preview-meta-text'>Started by</p> <a class='user-avatar micro no-border' href='javascript:void(0);'> <div class='user-avatar-content'> <img class='hexagon-image-18-20 ' src='{{ asset('user')}}/"+response[i].creator_avatar+"' style='width: 18px; height: 20px; position: relative; bottom: 10px; border-radius: 50%;' /> </div> </a> <p class='discussion-preview-meta-text'><a href='javascript:void(0);'>"+response[i].Fullname+"</a> "+created_at+" </p> </div> </div> </div> <div class='table-column centered padded-medium'> <p class='table-title'>"+response[i].comments+"</p> </div> <div class='table-column padded-big-left'> <div class='user-status'> <a class='user-status-avatar' href='javascript:void(0);'> <div class='user-avatar small no-outline'> <div class='user-avatar-content'>            "+last_user_avatar+"</div> <div class='user-avatar-progress'> <div class='hexagon-progress-40-44' style='width: 40px; height: 44px; position: relative;'><canvas width='40' height='44' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-progress-border'> <div class='hexagon-border-40-44' style='width: 40px; height: 44px; position: relative;'><canvas width='40' height='44' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge'> <div class='user-avatar-badge-border'> <div class='hexagon-22-24' style='width: 22px; height: 24px; position: relative;'><canvas width='22' height='24' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge-content'> <div class='hexagon-dark-16-18' style='width: 16px; height: 18px; position: relative;'><canvas width='16' height='18' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> </div> </div> </a> <p class='user-status-title'><a class='bold' href='javascript:void(0);'>"+last_user_comment+"</a></p> <p class='user-status-text small'>"+ date_last_comment +"</p> </div> </div></div>");
                  $(".load").hide();

               }
            }else{

            }
          }, error: function(errors){
            console.log(errors);
          }
        })
    });



    function sortdate(date){
      var delta = Math.round((+new Date - date) / 1000);

    var minute = 60,
    hour = minute * 60,
    day = hour * 24,
    week = day * 7;

    var fuzzy;

    if (delta < 30) {
    return 'just then.';
    } else if (delta < minute) {
    return delta + ' seconds ago';
    } else if (delta < 2 * minute) {
    return 'a minute ago';
    } else if (delta < hour) {
    return Math.floor(delta / minute) + ' minutes ago.';
    } else if (Math.floor(delta / hour) == 1) {
    return '1 hour ago';
    } else if (delta < day) {
    return Math.floor(delta / hour) + ' hours ago.';
    } else if (delta < day * 2) {
    return  'yesterday';
      }
    }
  </script>



    @endsection
