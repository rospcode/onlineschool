<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="sidebar, iconic">

    <title>Available Courses</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homee/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/style.min.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet" />


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
p{
  color: white;
}

.card--elevated:hover {
  box-shadow: 0 10px 70px #868686;
}
.bg-ui-general {
    background-image: url(../img/header/general.png), linear-gradient(128deg,#1e6dbd,#3287db);
}
.header-title {
    color: white;
}
.header-action .nav-link {
    color: white;
}
.header-action .nav-link.active, .header-action .nav-link:hover {
    color: white;
    border-bottom-color: #33cabb;
}
.badge-made {
    font-weight: 400;
    line-height: 1.3;
    font-size: 85%;
    position: relative;
    top: 50px;
    width: 60%;
    height: 30px;
    background-color: #15c377;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 30px;
    z-index: 50;
}
.badge-success-made{
  color: white;
  padding-top: 6px;
border-top-right-radius: 10px;
}
.header-inverse {
    background-image: url(../../../homee/assets/img/header/general.png), linear-gradient(128deg,
#1e6dbd,
    #3287db);
}

.course_wrapper {
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
    background-color:
white;
width: 100%;
box-shadow: 0 0 1px 1px
rgba(20,23,28,.1),0 3px 1px 0
    rgba(20,23,28,.1);
    opacity: 1;
}
.text_course {
    padding-top: 10px;
    padding: 10px 4px 5px 8px;
}
.course_wrapper:hover.price{
  cursor: pointer;
  -webkit-transform: translateY(-10px);
  -moz-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  -o-transform: translateY(-10px);
  transform: translateY(-10px);
  box-shadow: 0 0 17px rgba(32,46,60,.1);
  }
  .price {
    position: absolute;
    right: 8px;
    top: 180px;
    padding: 9px 20px 9px 25px;
    font: bold 16px Montserrat, sans-serif;
    color:
#fff;
background:
    #525f7f url(/price_tag_l.png) no-repeat left bottom;
}
.price span {
    position: absolute;
    right: 0px;
    top: -8px;
    width: 8px;
    height: 8px;
    background: url(/price_tag_r.png) no-repeat right top;
}
.text_course p{
  text-align: left;
color:
#525f7f;
}
#course_img {
    width: 100%;
    height: 200px;
}
.course_wrapper:hover{
  cursor: pointer;
}
</style>
  </head>

  <body>

    <!-- Sidebar -->
    <aside class="sidebar sidebar-expand-lg sidebar-iconic">
      <header class="sidebar-header">
        <span class="logo">
            <a href=""><img src="{{ asset('favicon-96x96.png') }}" alt="logo"></a>
        </span>
      </header>

      <nav class="sidebar-navigation">

        <div class="sidebar-profile">
          <div class="dropdown">
            <span class="dropdown-toggle no-caret" data-toggle="dropdown"><img class="avatar" src="{{ asset('user') }}/{{ auth()->user()->avatar}}" alt="..."></span>

          </div>
        </div>

        <ul class="menu">

          <li class="menu-item active">
            <a class="menu-link" href="/u/home">
              <span class="icon ti-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon ti-book"></span>
              <span class="title">My Courses</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/u/message">
              <span class="icon ti-email"></span>
              <span class="title">Messages</span>
              <span class="badge badge-pill badge-info">0</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/logout">
              <span class="ti-power-off"></span>
              <span class="title">Logout</span>
            </a>
          </li>

        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>



        <div class="topbar-divider d-none d-md-block"></div>

        <div class="lookup d-none d-md-block topbar-search" id="theadmin-search">
          <input class="form-control w-300px" placeholder="Search for a course" type="text">
          <div class="lookup-placeholder">
            <i class="ti-search"></i>

          </div>
        </div>
      </div>

      <div class="topbar-right">


        <ul class="topbar-btns">

        </ul>

      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container  mdk-header-layout__content page-content">




      <header class="header header-inverse">
          <div class="container">
            <div class="header-info">
              <div class="left">
                <br>
                <h1 style="Color: white;" class="text-center"> Find the right course for you</h1>
              <p>  Find the right course/s for you, to help you get the training you need to be a certified individual, we currentlt offer the courses listed below</p>

              </div>

            </div>
          </div>

          <div class="header-action">
            <nav class="nav">
              <a class="nav-link" href="/u/home">My Courses</a>
              <a class="nav-link active" href="">Find Course</a>
            </nav>
          </div>
        </header>


      <div class="main-content">
         <div class="container">
           <div class="row">
             <div class="col-md-4 mb-32pt mb-md-0">
                 <h2 style="position: relative;
bottom: 3px;">Top Courses</h2>
             </div>
             <div class="col-md-8 mb-32pt mb-md-0">
               <h5 class="mr-24pt mb-md-0 d-md-inline-block" style="position: relative;
top: 4px;">Popular topics</h5>
 <a href="javascript:;" onclick="searchcategory('all'); return false;" class="chip mb-16pt mb-md-0 chip-secondary">All</a>
 <?php $count = 1; ?>
      @foreach($categories as $category)
         <?php if($count < 4){
           ?>
             <a href="javascript:;" onclick="searchcategory('{{ $category->category_code }}'); return false;" class="chip mb-16pt mb-md-0 chip-outline-secondary">{{ $category->category_title }}</a>
             <?php
         }

         $count++;
         ?>


     @endforeach

             </div>
           </div>

           <div class="row" style="padding-top: 50px;" id="courses_show">


             @if(count(auth()->user()->getenrolled) != 0)
                           @foreach($courses as $course)
                             @foreach(auth()->user()->getenrolled as $enrolled)
                               @if($enrolled->courses_id != $course->id)
                                 @if($course->status != "Down")
            <div class="col-lg-3">

                      <div class="course_wrapper" data-id="{{ $course->course_link }}">
                        <div class="im_holder" style="">
                          <img id="course_img" src="{{ asset('img/courses') }}/{{ $course->course_img}}" class="img-responsive" style="width: 100%; border-top-right-radius: 10px;
                          border-top-left-radius: 10px; ">
                        </div>
                        <div class="text_course" style="">
                          <h4>@if(strlen($course->course_title) > '40')
                              {!! substr($course->course_title, 0,40) !!}...
                              @else
                              {!! $course->course_title !!}
                              @endif
                            </h4>

                          <p>@if(strlen($course->course_notes) > '150')
                              {!! substr($course->course_notes, 0,120) !!}...
                              @else
                              {!! $course->course_notes !!}
                              @endif
                            </p>
                        </div>
                        <div class="price">R{{$course->course_cost}}                                  <span></span></div>
                      </div>




                  </div>
       @endif
      @endif
     @endforeach
    @endforeach
 @endif

           </div>

           </div>


           </div>
         </div>
      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">© 2019 <a href="">CapabilityHR</a>. All rights reserved.</p>
          </div>

          <div class="col-md-6">

          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->





    <!-- Scripts -->
    <script src="{{ asset('homee/assets/js/core.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>

    <script type="text/javascript">

     $(document).ready(function() {
     $('.course_wrapper').click(function(e) {
       window.location = '/view/course/'+$(this).attr("data-id");
     });
 });
     </script>

     <script type="text/javascript">
        function searchcategory(category_code){
          $.ajax({
            type: 'get',
            url: '/u/getcourses_cat/'+category_code,
            success: function(resp){
               for(let i = 0; i < resp.length; i++){
                 console.log(resp[i]);
               }
            }, errors: function(response){
              console.log(response)
            }
          })
        }
     </script>
  </body>


</html>
