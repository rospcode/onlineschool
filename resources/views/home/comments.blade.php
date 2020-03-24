<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title>Course Q&A</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homee/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/style.min.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="favicon-96x96.png">
    <link rel="icon" href="favicon-96x96.png">

    <style>
    .card-body {
    -ms-flex: 1 1 auto;
    flex: 0.50 5 auto;
    padding: 0.40rem;
}
.chip-secondary {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
}
 .chip {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    padding: .25rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 100px;
}
.chip + .chip {
    margin-left: .5rem;
}
.chip-outline-secondary {
    color: #868e96;
    border-color: #868e96;
}
.mb-md-0, .my-md-0 {
    margin-bottom: 0 !important;
}
.mr-24pt, .mx-24pt {
    margin-right: 1.5rem !important;
}
 .d-md-inline-block {
    display: inline-block !important;
}
.h5,  h5 {
    line-height: 1.5;
    text-transform: uppercase;
    color: #303840;
}

.card--elevated:hover {
  box-shadow: 0 10px 70px #868686;
}
    .topbar-inverse {

        background-color: #0c1733;
    }
    .header-inverse {
          background-image: url(../../../homee/assets/img/header/general.png), linear-gradient(128deg,#1e6dbd,#3287db);
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
 .btn-white {
    color: #212529;
    background-color: #fff;
    border-color: #fff;
}
.btn--raised {
    box-shadow: 0 6px 6px -3px rgba(48,56,64,.2),0 10px 14px 1px rgba(48,56,64,.14),0 4px 18px 3px rgba(48,56,64,.12);
}
.nav-list{
  list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
}
.nav-list li{
   float: right;

}
.nav-list li a {
  display: block;
  font-size: 17px;
  text-align: center;
  padding: 21px 20px;
  text-decoration: none;
color: rgba(48,56,64,.5);
}
.nav-list li a.active{
     color: #313944;
      border-bottom: #a4ce3a 3px solid;
}
.slider {
    width: 100%;

}

.slick-slide {
  margin: 0px 20px;
}

.slick-slide img {
  width: 100%;
}

.slick-prev:before,
.slick-next:before {
  color: black;
}


.slick-slide {
  transition: all ease-in-out .3s;
  opacity: .2;
}

.slick-active {
  opacity: .5;
}

.slick-current {
  opacity: 1;
}
.topbar-inverse.topbar-secondary .dropdown-menu, .topbar-inverse.topbar-secondary .menu > .menu-item:hover, .topbar-inverse.topbar-secondary .menu > .menu-item.active, .topbar-inverse.topbar-secondary .menu-submenu, .topbar-inverse.topbar-secondary .menu-sub-submenu, .topbar-inverse.topbar-secondary .dropdown.show .topbar-btn, .topbar-inverse.topbar-secondary .dropdown:hover .topbar-btn, .topbar-inverse.topbar-secondary .topbar-btn:hover {
  background-color: transparent;
}
.topbar-secondary {
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        border-bottom-color: rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: none;
    box-shadow: none;
    height: 61px;
}
body .topbar-secondary + .main-container, body .topbar-secondary + main {
    padding-top: 60px;
}
.header-info {
    margin: 30px 0;
    padding: 0 30px;
        padding-right: 30px;
        padding-left: 30px;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 100%;
}


.slick-slide {
  transition: all ease-in-out .3s;
  opacity: .2;
}

.slick-active {
  opacity: .5;
}

.slick-current {
  opacity: 1;
}



.card-reader{
  background-color: #f7f8fa;
}
.btn-link{
  font-size: 17px;
padding: 5px 16px;
line-height: inherit;
color: #2994ff;
letter-spacing: 1px;
border-radius: 2px;
background-color: #f7f8fa;
border: 1px solid #f7f8fa;
outline: none !important;
-webkit-transition: 0.15s linear;
transition: 0.15s linear;
}
.lesson_duration {
    border-radius: 5px;
    padding-top: 8px;
    color: #5C5D61;
    font-size: 15px;
    font-weight: 100;
}

#link-collapse:hover{
  background-color: #E6F2F5;
}
#link-collapse{
  background-color: #fff;
}
</style>
  </head>

  <body class="topbar-unfix  pace-done" data-gr-c-s-loaded="true"><div class="pace  pace-inactive"><div class="pace-progress" style="width: 100%;" data-progress-text="100%" data-progress="99">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div>
      <!-- Topbar -->
      <header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
        <div class="container">
          <div class="topbar-left">
            <span class="topbar-btn topbar-menu-toggler"><i>☰</i></span>

            <div class="topbar-brand">
              <a href="/u/home/"><img src="{{ asset('logo.jpg') }}" alt="..." style="width: 170px;"></a>
            </div>

            <div class="topbar-divider d-none d-md-block"></div>

            <nav class="topbar-navigation">
              <ul class="menu">
                <li class="menu-item active">
                  <a class="menu-link" href="/u/home">
                    <span class="title">Dashboard</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a class="menu-link" href="/u/home">
                    <span class="title">My Courses</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a class="menu-link" href="/u/message">
                    <span class="title">Messages</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a class="menu-link" href="/logout">
                    <span class="title">Logout</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="topbar-right">

            <ul class="topbar-btns">
              <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{ asset('user') }}/{{ auth()->user()->avatar}}" alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="/u/profile"><i class="ti-user"></i> Profile</a>
                  <a class="dropdown-item" href="/u/profile"><i class="ti-settings"></i> Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout"><i class="ti-power-off"></i> Logout</a>
                </div>
              </li>

            </ul>

          </div>
        </div>
      </header>
      <!-- END Topbar -->



      <!-- Main container -->
      <main class="main-container">
       <div class="under_header" style="background-color: white;
height: 70px;">
<div class="container">
   <div class="row">
     <div class="col-lg-5">
       <div class="row">
         <div class="col-lg-3" style="margin: 0;
position: absolute;
top: 50%;
-ms-transform: translateY(-50%);
transform: translateY(-50%);">
           <img src="{{ asset('img/courses')}}/{{$course->course_img}}" class="img-responsive" style="width: 60px;
       padding-top: 5px;" />
         </div>
         <div class="col-lg-9" style="margin: 0;
position: absolute;
top: 50%;
-ms-transform: translateY(-50%);
transform: translateY(-50%);">
           <h5 style="padding-top: 4%;
position: relative;
left: 80px;">{{$course->course_title}}</h5>
         </div>
       </div>


     </div>
     <div class="col-lg-7">
        <ul class="nav-list">
          <li> <a href="/u/view/course/a/{{$course->course_link}}"><strong>Announcements</strong><span class="label label-success float-right" id="usersnum" style="font-size: 11px;background-color: #1c84c6;color: #FFFFFF;border-radius: 50%;width: 24px;position: relative;bottom: 7px;">12</span></a></li>
          <li> <a href="" class="active"><strong>Q/A</strong></a></li>
          <li> <a href="/u/view/course/resources/{{$course->course_link}}"><strong>Resources</strong></a></li>
          <li> <a href="/u/view/course/{{$course->course_link}}"><strong>About</strong></a></li>
        </ul>

          </div>
     </div>
   </div>
</div>

</div>

        <header class="header header-inverse">
          <div class="container">
            <div class="header-info">
              <div class="left">
                <br>
              <h1 style="Color: white;" class="text-center">Question: {{ $questions->question_title}} ({{ count($commentss) }} Comments)</h1>
              <p style="Color: white;" class="text-center">{{ $questions->question}}</p>

              </div>

            </div>
          </div>
        </header><!--/.header -->



        <div class="main-content">
          <div class="container">
            <div class="row">

              <div class="col-lg-2">
              </div>

              <div class="col-lg-8">
                 <h3>Latest</h3>
                 <hr style="margin: 0rem 2rem 2rem auto;">

                 <div class="row" id="pushcomment">

                   @foreach($commentss as $comment)

                     <div class="col-lg-12">
                       @if($comment->id == auth()->user()->id)
                       <div class="alert alert-light" role="alert" style="padding: .75rem .75rem; margin-bottom: .434rem; background-color: #eaf7ff;">
                       @else
                       <div class="alert alert-light" role="alert" style="padding: .75rem .75rem; margin-bottom: .434rem; background-color: white;">
                       @endif

                       <div class="row">
                         <div class="col-lg-6 col-sm-6 col-xs-6">
                                <img src="{{ asset('/user/')}}/{{ $comment->avatar}}" style="width: 40px; height: 40px; float: left;" class="rounded-circle" alt="Cinque Terre">
                                @if($comment->id == auth()->user()->id)
                                <h4 style="padding-left: 60px;">Me</h4>
                                @else
                                <h4 style="padding-left: 60px;">{{ $comment->name}}</h4>
                                @endif
                         </div>

                          <div class="col-lg-6 col-sm-6 col-xs-6">
                          <p style="line-height: 2; float: right;">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                         </div>
                         <div class="col-lg-12">
                          <p style="padding-left: 60px;"> {{ $comment->comment}}</p>
                          <p style="padding-left: 60px;"> {{ $comment->created_at}}</p>
                         </div>
                       </div>
                     </div>
                    <hr style="margin: 0rem 2rem .649rem auto;">
                   </div>
                   @endforeach

                 </div>
                <form id="submit_comment_form" method="post">

                {{ csrf_field() }}
                <input type="text" hidden="hidden" name="question_id" id="question_id" value="{{ $questions->id}}" />
                  <div class="form-group">
                     <textarea class="form-control" id="answer_add" name="answer_add" placeHolder="Add Comment" rows="3" cols="13"></textarea>

                  </div>


                  <div class="form-group">
                    <div id="message"></div>

                  </div>

                  <div class="form-group">
                    <button type="button" id="submit_comment" class="btn btn-success btn-left" style="float: right; background-color: #0c1733;
border-color: #0c1733; ">Add Question</button>
                  </div>
                </form>
              </div>

                <div class="col-lg-2">
                </div>
          </div>





          </div>
        </div>

        <div class="main" style="padding-top: 30px; background-color: white;">





        <!-- Footer -->
        <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6">

              </div>

              <div class="col-md-6">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!-- END Footer -->


      </main>






      <!-- Scripts -->
      <script src="{{ asset('homee//assets/js/core.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
   $("#submit_comment").click(function(event){
     event.preventDefault();

     let answer_add = $("#answer_add").val();


     if(!answer_add){
         alert("sorru");
     }else{
       $.ajax({

      type: "POST",
      url: "{{ route('add.comment.answer') }}",
      data: $("#submit_comment_form").serialize(),
      success: function(response){
        if(response['status'] == "success"){
             $("#answer_add").value = "";
             $("#message").html("<div class='alert alert-success'>Comment Added</div>");
             $("#pushcomment").append('<div class="col-lg-12"><div class="alert alert-light" role="alert" style="padding: .75rem .75rem; margin-bottom: .434rem; background-color: #eaf7ff;"><div class="row"><div class="col-lg-6 col-sm-6 col-xs-6"><img src="{{ asset("/user/")}}/{{ auth()->user()->avatar}}" style="width: 40px; height: 40px; float: left;" class="rounded-circle" alt="Cinque Terre"><h4 style="padding-left: 60px;">Me</h4></div><div class="col-lg-6 col-sm-6 col-xs-6"><p style="line-height: 2; float: right;">Just Now</p></div><div class="col-lg-12"><p style="padding-left: 60px;"> '+ answer_add +'</p><p style="padding-left: 60px;"> '+ response['date']['date'].substring(0, 19)+'</p></div></div></div><hr style="margin: 0rem 2rem .649rem auto;"></div></div>');
        }
     },error: function(data){
        var errors = data.responseJSON;

           console.log(errors);


        }
       });
     }
   })
</script>


  </body>


</html>
