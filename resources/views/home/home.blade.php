<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homee/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/style.min.css') }}" rel="stylesheet">

      <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">


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
.card--elevated:hover {
  box-shadow: 0 10px 70px #868686;
}
.bg-ui-general {
    background-image: url(../../homee/assets/img/header/general.png), linear-gradient(128deg,#1e6dbd,#3287db);
}
.header-title {
    color: white;
}
.header-action .nav-link {
    color: white;
}
.header-action .nav-link.active, .header-action .nav-link:hover {
    color: white;
    border-bottom-color: #a4ce3a;
}




.card, .tab-content {
    box-shadow: 0 2px 1px -1px rgba(48,56,64,.2),0 1px 1px 0 rgba(48,56,64,.14),0 1px 3px 0 rgba(48,56,64,.12);
    transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow;
}
.card,  .card-nav .tab-content {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid #ebeff2;
    border-radius: .25rem;
}
.absolute-top, .fullbleed {
   position: absolute;
   left: 0;
   top: 0;
}
.fullbleed {
   right: 0;
   bottom: 0;
}
.bg-primary {
   background-color: #2c84dd !important;
}
.h5, h5 {
    line-height: 1.5;
    text-transform: uppercase;
    color: #303840;
}
.text-white {
    color: #fff !important;
    font-weight: 600;
}
.font-weight-normal {
    font-weight: 400 !important;
}
.text-white-60 {
   color: hsla(0,0%,100%,.6) !important;
}
.mb-16pt, .my-16pt {
   margin-bottom: 1rem !important;
}
.text-white-60 {
    color: hsla(0,0%,100%,.6) !important;

    font-size: 1.2rem;
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
.course_wrapper:hover{

  -webkit-transform: translateY(-10px);
  -moz-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  -o-transform: translateY(-10px);
  transform: translateY(-10px);
  box-shadow: 0 0 17px rgba(32,46,60,.1);


  }

  .course_wrapper:hover{

    transform: translateY(-10px);
    box-shadow: 0 12px 17px 2px rgba(0,0,0,0.14), 0 5px 22px 4px rgba(0,0,0,0.12), 0 7px 8px -4px rgba(0,0,0,0.20);


    }
    .id_norm{

      display:none;

    }





  #course_img {
    width: 100%;
    height: 200px;
}


.toast-close-button{
  display: none;
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
            <a class="menu-link" href="#">
              <span class="icon ti-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/u/available/courses">
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
            <a class="menu-link" href="/u/profile">
              <span class="icon ti-settings"></span>
              <span class="title">Profile</span>
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

        <div class="topbar-divider"></div>


      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container  mdk-header-layout__content page-content">

      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
               Welcome back {{ auth()->user()->name }} {{ auth()->user()->surname }}
          </h1>
        </div>

        <div class="header-action">
          <nav class="nav">
            <a class="nav-link  active" href="">My Courses</a>
            <a class="nav-link" href="/u/available/courses">Find Course</a>
          </nav>
        </div>
      </header><!--/.header -->


      <div class="main-content">
         <div class="container">
           <div class="row">
             <div class="col-md-4 mb-32pt mb-md-0">
                 <h2 style="position: relative;
bottom: 3px;">Enrolled Courses</h2>
             </div>
             <div class="col-md-8 mb-32pt mb-md-0">

             </div>
           </div>

           <div class="row" style="padding-top: 50px;">
           @foreach($get_course as $course)
            <div class="col-lg-3">



                                        <div class="course_wrapper">
               <div class="im_holder" style="">
                 <img src="{{ asset('img/courses') }}/{{ $course[0]->course_img}}" id="course_img" class="img-responsive" style="width: 100%; border-top-right-radius: 10px;
                 border-top-left-radius: 10px;">
               </div>
               <div class="text_course" style="">
                 <h4>
                   @if(strlen($course[0]->course_title) > '30')
                       {!! substr($course[0]->course_title, 0,23) !!}...
                       @else
                       {!! $course[0]->course_title !!}
                       @endif
                 </h4>
                 <p>@if(strlen($course[0]->course_notes) > '150')
                     {!! substr($course[0]->course_notes, 0,120) !!}...
                     @else
                     {!! $course[0]->course_notes !!}
                     @endif
                   </p>


                 <a href="/u/view/course/{{ $course[0]->course_link }}" class="btn btn-success" style="border-radius: 7px;">Resume </a>
               </div>




             </div>

                  </div>
               @endforeach

                                    </div>




           </div>

           </div>






           <div class="main-content" style="padding-top: 70px; padding-bottom: 150px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 mb-32pt mb-md-0">
                      <h2 style="position: relative;
     bottom: 3px;">Completed</h2>
                  </div>
                  <div class="col-md-8 mb-32pt mb-md-0">

                  </div>
                </div>

                <div class="row" style="padding-top: 30px;">




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
    <!-- Toastr -->
        <script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('homee/assets/js/core.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>



@if(auth()->user()->login_count == 0)
    <script type="text/javascript">

    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 6000
            };
            toastr.success('Hi {{ auth()->user()->name}}', "Welcome to your new Dashboard");

        }, 2300);
      });

      </script>
      @endif



  </body>


</html>
