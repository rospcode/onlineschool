@extends('admin.layouts.master')
@section('page')
Question Comments
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







p {
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4;
}


/* Absolute Center Spinner */



#forum-post-text::placeholder{
  color: white;
  opacity: 1;
}
#forum-post-text:-ms-input-placeholder{
  color: white;
  opacity: 1;
}
#forum-post-text:-ms-input-placeholder {
  color: white;
  opacity: 1;
}

.quick-post-header-title{
  color: white;
}

.forum-post-paragraph{
  padding-left: 10px;
}
</style>
@endsection

@section('content')

<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
        <div class="section-filters-bar v7">
          <!-- SECTION FILTERS BAR ACTIONS -->
          <div class="section-filters-bar-actions">
            <!-- SECTION FILTERS BAR INFO -->
            <div class="section-filters-bar-info">
              <!-- SECTION FILTERS BAR TITLE -->
              <p class="section-filters-bar-title"><a href="forums.html">Forum</a><span class="separator"></span><a href="forums-discussion.html">{{ $question[0]->question_title }}</a><span class="" style="display: inline-block;
width: 10px;
height: 2px;
margin: px 12px 0px 12px;
background-color: #0c1832;
position: relative;
bottom: 5px;
left: 15px;
right: 5px;
"></span><a href="forums-discussion.html" style="padding-left: 30px;">Course</a> <span class="separator"></span> <a href="forums-discussion.html">{{ $course->course_title }}</a></p>
              <!-- /SECTION FILTERS BAR TITLE -->

              <!-- SECTION FILTERS BAR TEXT -->
              <div class="section-filters-bar-text small-space">
                Post by
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-stats" href="javascript:void(0);">
                  <!-- USER AVATAR BORDER -->
                  <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BORDER -->

                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <img class="hexagon-image-18-20" src="{{ asset('user')}}/{{ $question[0]->avatar}}" style="width: 18px; height: 20px; position: relative; border-radius: 50%;" />
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
                <a class="bold" href="" style="padding-right: 5px;">{{ $question[0]->name }} {{ $question[0]->surname }} </a>
                 {{ \Carbon\Carbon::parse($question[0]->created_at)->diffForHumans() }}     <button type="button" class="btn btn-sm btn-success" style="margin-left: 20px;">Go Back</button>
              </div>
              <!-- /SECTION FILTERS BAR TEXT -->
            </div>
            <!-- /SECTION FILTERS BAR INFO -->
          </div>
          <!-- /SECTION FILTERS BAR ACTIONS -->
        </div>
  </div>
  </div>
              </div>






              <div class="wrapper wrapper-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="forum-content">
 <!-- FORUM POST HEADER -->
 <div class="forum-post-header">

 </div>
 <!-- /FORUM POST HEADER -->

 <!-- FORUM POST LIST -->
 <div class="forum-post-list">





        @foreach($comments as $comment)

   <!-- FORUM POST -->
   <div class="forum-post">
     <!-- FORUM POST META -->
     <div class="forum-post-meta">
       <!-- FORUM POST TIMESTAMP -->
       <p class="forum-post-timestamp">{{ $comment->created_at }}</p>
       <!-- /FORUM POST TIMESTAMP -->

       <!-- FORUM POST ACTIONS -->
       <div class="forum-post-actions">

         <!-- /FORUM POST ACTION -->

         <!-- FORUM POST ACTION -->
         <p class="forum-post-action">Reply</p>
         <!-- /FORUM POST ACTION -->
       </div>
       <!-- /FORUM POST ACTIONS -->
     </div>
     <!-- /FORUM POST META -->


     <!-- FORUM POST CONTENT -->
     <div class="forum-post-content">
       <!-- FORUM POST USER -->
       <div class="forum-post-user">
         <!-- USER AVATAR -->
         <a class="user-avatar no-outline" href="javascript:void(0);">
           <!-- USER AVATAR CONTENT -->
           <div class="user-avatar-content">
             <!-- HEXAGON -->
             <img class="hexagon-image-68-74" src="{{ asset('user')}}/{{ $comment->avatar }}" style="width: 68px; height: 74px; position: relative; border-radius: 50%;" />
             <!-- /HEXAGON -->
           </div>
           <!-- /USER AVATAR CONTENT -->

           <!-- USER AVATAR PROGRESS -->
           <div class="user-avatar-progress">
             <!-- HEXAGON -->
             <div class="hexagon-progress-84-92" style="width: 84px; height: 92px; position: relative;"><canvas width="84" height="92" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
             <!-- /HEXAGON -->
           </div>
           <!-- /USER AVATAR PROGRESS -->

           <!-- USER AVATAR PROGRESS BORDER -->
           <div class="user-avatar-progress-border">
             <!-- HEXAGON -->
             <div class="hexagon-border-84-92" style="width: 84px; height: 92px; position: relative;"><canvas width="84" height="92" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
             <!-- /HEXAGON -->
           </div>
           <!-- /USER AVATAR PROGRESS BORDER -->

           <!-- USER AVATAR BADGE -->
           <div class="user-avatar-badge">
             <!-- USER AVATAR BADGE BORDER -->
             <div class="user-avatar-badge-border">
               <!-- HEXAGON -->
               <div class="hexagon-28-32" style="width: 28px; height: 32px; position: relative;"><canvas width="28" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
               <!-- /HEXAGON -->
             </div>
             <!-- /USER AVATAR BADGE BORDER -->

             <!-- USER AVATAR BADGE CONTENT -->
             <div class="user-avatar-badge-content">
               <!-- HEXAGON -->
               <div class="hexagon-dark-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
               <!-- /HEXAGON -->
             </div>
             <!-- /USER AVATAR BADGE CONTENT -->

             <!-- USER AVATAR BADGE TEXT -->
             <p class="user-avatar-badge-text"></p>
             <!-- /USER AVATAR BADGE TEXT -->
           </div>
           <!-- /USER AVATAR BADGE -->
         </a>
         <!-- /USER AVATAR -->

         <!-- USER AVATAR -->
         <a class="user-avatar small no-outline" href="profile-timeline.html">
           <!-- USER AVATAR CONTENT -->
           <div class="user-avatar-content">
             <!-- HEXAGON -->
             <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
             <!-- /HEXAGON -->
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

             <!-- USER AVATAR BADGE TEXT -->
             <p class="user-avatar-badge-text">26</p>
             <!-- /USER AVATAR BADGE TEXT -->
           </div>
           <!-- /USER AVATAR BADGE -->
         </a>
         <!-- /USER AVATAR -->

         <!-- FORUM POST USER TITLE -->
         <p class="forum-post-user-title" style="color: #0c1832;"><a href="javascript:void(0);"  style="color: #0c1832;">{{ $comment->name }} {{ $comment->surname }}</a></p>
         <!-- /FORUM POST USER TITLE -->

         <!-- FORUM POST USER TITLE -->
         <p class="forum-post-user-text"><a href="/a/profile" target="_blank" >View Profile</a></p>
         <!-- /FORUM POST USER TITLE -->

       </div>
       <!-- /FORUM POST USER -->

       <!-- FORUM POST INFO -->
       <div class="forum-post-info">
         <!-- FORUM POST PARAGRAPH -->
         <p class="forum-post-paragraph">{{ $comment->comment }}</p>
         <!-- /FORUM POST PARAGRAPH -->

       </div>
       <!-- /FORUM POST INFO -->
     </div>
     <!-- /FORUM POST CONTENT -->
   </div>
   <!-- /FORUM POST -->











   @endforeach



 </div>
 <!-- /FORUM POST LIST -->

{{ $comments->links('admin.forum.pagination') }}




 <!-- QUICK POST -->
 <div class="quick-post medium">
   <!-- QUICK POST HEADER -->
   <div class="quick-post-header">
     <!-- QUICK POST HEADER TITLE -->
     <p class="quick-post-header-title">Leave a Reply</p>
     <!-- /QUICK POST HEADER TITLE -->
   </div>
   <!-- /QUICK POST HEADER -->

   <!-- QUICK POST BODY -->
   <div class="quick-post-body">
     <!-- FORM -->
     <form class="form" method="post" id="replyform">
       <!-- FORM ROW -->
       <div class="form-row">
         <!-- FORM ITEM -->
         <div class="form-item">
           <!-- FORM TEXTAREA -->
           <div class="form-textarea" style="left: 5px; color: white;">
             {{ csrf_field() }}
             <input type="text" hidden="hidden" class="" name="question" value="{{ $question[0]->id }}" />
             <textarea id="forum-post-text" name="reply" placeholder="Hi {{ auth()->user()->name }}! Share your thoughts here..." style="width: 100%; color: white;"></textarea>
             <!-- FORM TEXTAREA LIMIT TEXT -->
             <p class="form-textarea-limit-text">998/1000</p>
             <!-- /FORM TEXTAREA LIMIT TEXT -->
           </div>
           <!-- /FORM TEXTAREA -->
         </div>
         <!-- /FORM ITEM -->
       </div>
       <!-- /FORM ROW -->
     </form>
     <!-- /FORM -->
   </div>
   <!-- /QUICK POST BODY -->

   <!-- QUICK POST FOOTER -->
   <div class="quick-post-footer">
     <!-- QUICK POST FOOTER ACTIONS -->
     <div class="quick-post-footer-actions">
       <!-- QUICK POST FOOTER ACTION -->
       <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Photo" style="position: relative;">
         <!-- QUICK POST FOOTER ACTION ICON -->
         <svg class="quick-post-footer-action-icon icon-camera">
           <use xlink:href="#svg-camera"></use>
         </svg>
         <!-- /QUICK POST FOOTER ACTION ICON -->
       <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -32px; left: 50%; margin-left: -46.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Insert Photo</p></div></div>
       <!-- /QUICK POST FOOTER ACTION -->

       <!-- QUICK POST FOOTER ACTION -->
       <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert GIF" style="position: relative; ">
         <!-- QUICK POST FOOTER ACTION ICON -->
         <p id="message"></p>
         <!-- /QUICK POST FOOTER ACTION ICON -->
       <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -32px; left: 50%; margin-left: -38.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Insert GIF</p></div></div>
       <!-- /QUICK POST FOOTER ACTION -->
     </div>
     <!-- /QUICK POST FOOTER ACTIONS -->

       <!-- QUICK POST FOOTER ACTIONS -->

       <div class="quick-post-footer-actions">


         <!-- BUTTON -->
         <p class="button post_reply secondary">Post Reply</p>
         <!-- /BUTTON -->
       </div>
       <!-- /QUICK POST FOOTER ACTIONS -->
   </div>
   <!-- /QUICK POST FOOTER -->
 </div>
 <!-- /QUICK POST -->
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


    $(".post_reply").click(function(){

      $(".load").show();

      let text_forum = $("#forum-post-text").val();


      if(text_forum){
        $.ajax({
          type: "POST",
          data: $("#replyform").serialize(),
          url: "{{ route('submitreply')}}",
          success: function(response){
              $(".load").hide();
          if(response.status == "success"){
            let date = response.date.date;
            $("#message").html("<div class='alert alert-success'>Comment Added</div>");
            document.getElementById("forum-post-text").value = "";
            $(".forum-post-list").append(" <div class='forum-post'> <div class='forum-post-meta'> <p class='forum-post-timestamp'>"+date.substring(0,19)+"</p> <div class='forum-post-actions'> <p class='forum-post-action'>Reply</p> </div> </div> <div class='forum-post-content'> <div class='forum-post-user'> <a class='user-avatar no-outline' href='javascript:void(0);'> <div class='user-avatar-content'> <img class='hexagon-image-68-74' src='{{ asset('user')}}/{{auth()->user()->avatar}}' style='width: 68px; height: 74px; position: relative; border-radius: 50%;' /> </div> <div class='user-avatar-progress'> <div class='hexagon-progress-84-92' style='width: 84px; height: 92px; position: relative;'><canvas width='84' height='92' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-progress-border'> <div class='hexagon-border-84-92' style='width: 84px; height: 92px; position: relative;'><canvas width='84' height='92' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge'> <div class='user-avatar-badge-border'> <div class='hexagon-28-32' style='width: 28px; height: 32px; position: relative;'><canvas width='28' height='32' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge-content'> <div class='hexagon-dark-22-24' style='width: 22px; height: 24px; position: relative;'><canvas width='22' height='24' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <p class='user-avatar-badge-text'></p> </div> </a> <a class='user-avatar small no-outline' href='profile-timeline.html'> <div class='user-avatar-content'> <div class='hexagon-image-30-32' data-src='img/avatar/07.jpg' style='width: 30px; height: 32px; position: relative;'><canvas width='30' height='32' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-progress'> <div class='hexagon-progress-40-44' style='width: 40px; height: 44px; position: relative;'><canvas width='40' height='44' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-progress-border'> <div class='hexagon-border-40-44' style='width: 40px; height: 44px; position: relative;'><canvas width='40' height='44' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge'> <div class='user-avatar-badge-border'> <div class='hexagon-22-24' style='width: 22px; height: 24px; position: relative;'><canvas width='22' height='24' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <div class='user-avatar-badge-content'> <div class='hexagon-dark-16-18' style='width: 16px; height: 18px; position: relative;'><canvas width='16' height='18' style='position: absolute; top: 0px; left: 0px;'></canvas></div> </div> <p class='user-avatar-badge-text'>26</p> </div> </a> <p class='forum-post-user-title' style='color: #0c1832;'><a href='javascript:void(0);' style='color: #0c1832;'>ME </a></p> <p class='forum-post-user-text'><a href='/a/profile' target='_blank' >View Profile</a></p> </div> <div class='forum-post-info'> <p class='forum-post-paragraph'>"+response.comment+"</p> </div> </div> </div>");
            }
          }, error: function(errors){
            console.log(errors);
          }
        })

      }else{
          $("#message").html("<div class='alert alert-danger'>You have an empty reply.</div>");
          $(".load").hide();
      }

    });

    </script>


    @endsection
