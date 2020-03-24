<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title>Course Announcement</title>

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

.course_announ{
  padding-right: 20px;
padding-left: 20px;
padding-top: 25px;
border-top: 2px dashed #bcbcbc;
padding-bottom: 10px;
}


.course_announ_live{
  padding-right: 20px;
padding-left: 20px;
padding-top: 25px;
border-top: 2px dashed #bcbcbc;
background-color: #fdffe0;
padding-bottom: 10px;
cursor: pointer;
}

.course_announ:hover{
  background-color: #f5f5f5;
  cursor: pointer;
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
          <li> <a href="" class="active"><strong>Announcements</strong><span class="label label-success float-right" id="usersnum" style="font-size: 11px;background-color: #1c84c6;color: #FFFFFF;border-radius: 50%;width: 24px;position: relative;bottom: 7px;">{{ count($notifications) }}</span></a></li>
          <li> <a href="/u/view/course/q/{{$course->course_link}}"><strong>Q/A</strong></a></li>
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
              <h1 style="Color: white;" class="text-center">Announcements</h1>

              </div>

            </div>
          </div>
        </header><!--/.header -->



        <div class="main-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="text-center"><i class="fa fa-clock-o" style="color: #2c7fd2;
font-size: 39px;" aria-hidden="true"></i>
 Updates </h1>
 <div style="height: 2px;
background-color: #303840;
width: 150px;
margin: auto;
    margin-bottom: auto;
position: relative;
bottom: 2px;
margin-bottom: 17px;"></div>
 <h2 class="text-center">{{$course->course_title}}</h2>

 <div style="background-color: white;
min-height: 600px;
margin-bottom: 90px;
margin-top: 50px;
">

@foreach($notifications as $notification)
       <div class="course_announ">
         <div class="row">
           <div class="col-lg-6">
               <h6>Course Announcement →  {{ $notification->statement}}: - {{ $notification->created_at}}</h6>
           </div>
           <div class="col-lg-6">
              <h6 style="float: right;">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}  </h6>
           </div>
         </div>
           <p>Hello this is an Announcement</p>
           @if($notification->link != "")
               <p><a href="{{$notification->link}}">  {{$notification->link}}</a></p>
           @endif

       </div>
 @endforeach



</div>
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





      <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
      <!-- Quickviews -->


      <!-- Notifications -->
      <div id="qv-notifications" class="quickview">
        <header class="quickview-header quickview-header-lg">
          <h5 class="quickview-title">Notifications</h5>
          <span class="close"><i class="ti-close"></i></span>
        </header>

        <div class="quickview-body ps-container ps-theme-default ps-active-y" data-ps-id="8f00e4bf-5980-849f-31a6-455faceca65a">
          <div class="media-list media-list-hover media-list-divided media-sm">
            <a class="media media-new" href="#">
              <span class="avatar bg-success"><i class="ti-user"></i></span>
              <div class="media-body">
                <p>New user registered</p>
                <time datetime="2018-07-14 20:00">Just now</time>
              </div>
            </a>

            <a class="media media-new" href="#">
              <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
              <div class="media-body">
                <p>New order received</p>
                <time datetime="2018-07-14 20:00">2 min ago</time>
              </div>
            </a>

            <a class="media media-new" href="#">
              <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
              <div class="media-body">
                <p>Refund request from <b>Ashlyn Culotta</b></p>
                <time datetime="2018-07-14 20:00">24 min ago</time>
              </div>
            </a>

            <a class="media media-new" href="#">
              <span class="avatar bg-primary"><i class="ti-money"></i></span>
              <div class="media-body">
                <p>New payment has made through PayPal</p>
                <time datetime="2018-07-14 20:00">53 min ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-danger"><i class="ti-package"></i></span>
              <div class="media-body">
                <p>Package lost on the way!</p>
                <time datetime="2018-07-14 20:00">1 hour ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-success"><i class="ti-user"></i></span>
              <div class="media-body">
                <p>New user registered</p>
                <time datetime="2018-07-14 20:00">1 hour ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-purple"><i class="ti-comment"></i></span>
              <div class="media-body">
                <p>New review on <em>iPhone 6s</em></p>
                <time datetime="2018-07-14 20:00">3 hours ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
              <div class="media-body">
                <p>New order received</p>
                <time datetime="2018-07-14 20:00">5 hours ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-danger"><i class="fa fa-area-chart"></i></span>
              <div class="media-body">
                <p>CPU usage went above 80%</p>
                <time datetime="2018-07-14 20:00">Yesterday</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-yellow"><i class="fa fa-star"></i></span>
              <div class="media-body">
                <p>New rating on iPhone 6s, 5 star</p>
                <time datetime="2018-07-14 20:00">Yesterday</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-success"><i class="ti-user"></i></span>
              <div class="media-body">
                <p>New user registered</p>
                <time datetime="2018-07-14 20:00">Yesterday</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-primary"><i class="ti-money"></i></span>
              <div class="media-body">
                <p>New payment has made through PayPal</p>
                <time datetime="2018-07-14 20:00">2 days ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
              <div class="media-body">
                <p>New order received</p>
                <time datetime="2018-07-14 20:00">2 days ago</time>
              </div>
            </a>

            <a class="media" href="#">
              <span class="avatar bg-purple"><i class="ti-comment"></i></span>
              <div class="media-body">
                <p>New review on Samsung Galaxy S7</p>
                <time datetime="2018-07-14 20:00">Aug 17</time>
              </div>
            </a>
          </div>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 862px; right: 2px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 625px;"></div></div></div>

        <footer class="quickview-footer flexbox">
          <div>
            <a href="#">View full archive</a>
          </div>
          <div>
            <a href="#" data-provide="tooltip" title="" data-original-title="Mark all as read"><i class="fa fa-circle-o"></i></a>
            <a href="#" data-provide="tooltip" title="" data-original-title="Update"><i class="fa fa-repeat"></i></a>
            <a href="#" data-provide="tooltip" title="" data-original-title="Settings"><i class="fa fa-gear"></i></a>
          </div>
        </footer>
      </div>


      <!-- END Quickviews -->
      <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->




      <!-- Scripts -->
      <script src="{{ asset('homee//assets/js/core.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/text/javascript">
  $(document).on('ready', function() {
    $(".vertical-center-4").slick({
      dots: true,
      vertical: true,
      centerMode: true,
      slidesToShow: 4,
      slidesToScroll: 2
    });
    $(".vertical-center-3").slick({
      dots: true,
      vertical: true,
      centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
    $(".vertical-center-2").slick({
      dots: true,
      vertical: true,
      centerMode: true,
      slidesToShow: 2,
      slidesToScroll: 2
    });
    $(".vertical-center").slick({
      dots: true,
      vertical: true,
      centerMode: true,
    });
    $(".vertical").slick({
      dots: true,
      vertical: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
    $(".center").slick({
      dots: true,
      infinite: true,
      centerMode: true,
      slidesToShow: 5,
      slidesToScroll: 3
    });
    $(".variable").slick({
      dots: true,
      infinite: true,
      variableWidth: true
    });
    $(".lazy").slick({
      lazyLoad: 'ondemand', // ondemand progressive anticipated
      infinite: true
    });
  });
  </script>


  </body>


</html>
