<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="{{ asset('home/assets/vendor/simplebar.min.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('home/assets/css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/app.rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('home/assets/css/vendor-material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('home/assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="{{ asset('home/assets/css/vendor-ion-rangeslider.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-ion-rangeslider.rtl.css') }}" rel="stylesheet">









    <!-- Flatpickr -->
    <link type="text/css" href="{{ asset('home/assets/css/vendor-flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-flatpickr.rtl.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('home/assets/css/vendor-flatpickr-airbnb.rtl.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic/semantic.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('styles/compiled.css') }}">


    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('home/assets/vendor/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    @yield('style')
    <style>
    .navbar{
       border-radius: 0px;
    }

    @media (max-width: 990px) {

      [dir="ltr"] .mdk-drawer-layout {
        display: block;
      }
      }

        </style>



</head>
<body class="layout-default">
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
      <div class="mdk-drawer-layout__content">

          <!-- Header Layout -->
          <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

              <!-- Header -->

              <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall" data-retarget-mouse-scroll="false">
                  <div class="mdk-header__content">

                      <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                          <div class="container-fluid page__container pr-0" style="max-width: 1600px;">

                              <!-- Navbar toggler -->
                              <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                                  <span class="navbar-toggler-icon"></span>
                              </button>

                            <a class="navbar-brand" href="/"><img id="logo" class="img-responsive img-fluid" src="{{ asset('img/logo.jpg') }}" style="width: 160px;

height: 48px;"></a>


                              <div class="navbar-collapse collapse" id="navbarsExample03">
                                  <ul class="nav navbar-nav">

                                      <li class="nav-item ">
                                        <form class="form-inline mr-auto" action="{{ route('course.search')}}" method="post">
                                          {{ csrf_field() }}
                                   <div class="md-form my-0">
                                     <input class="form-control" id="search-box"  type="text" style="width: 440px;" value="@yield('searchname')" name="course_name" placeholder="Search for course" aria-label="Search">
                                     <i class="fas fa-search text-white ml-3" aria-hidden="true"></i>
                                     <div id="livesearch" style="background-color: white; color: black; ">



                                     </div>
                                   </div>
                                 </form>


                                      </li>

                                      <!-- <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layouts</a>
  <div class="dropdown-menu">
    <a class="dropdown-item active" href="index">Default</a>
    <a class="dropdown-item" href="fluid-dashboard">Full Width Navs</a>
    <a class="dropdown-item" href="fixed-dashboard">Fixed Navs</a>
    <a class="dropdown-item" href="mini-dashboard">Mini Sidebar + Navs</a>
  </div>
</li> -->
                                      <li>
                                        <li class="nav-item dropdown">
                                            <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                                <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                            </a>
                                            <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                                <div class="dropdown-item d-flex align-items-center py-2">
                                                    <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                                    <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                                </div>
                                                <div class="navbar-notifications-menu__content" data-simplebar>

                                                </div>
                                                <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                            </div>
                                        </li>



                                  </ul>
                              </div>




                              <ul class="nav navbar-nav d-none d-md-flex">


                              </ul>



                          </div>
                      </div>

                  </div>
              </div>

              <!-- // END Header -->

              <!-- Header Layout Content -->
              <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">



                @yield('content')






              </div>
              <!-- // END header-layout__content -->

          </div>
          <!-- // END header-layout -->

      </div>
      <!-- // END drawer-layout__content -->

      <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
          <div class="mdk-drawer__content">
              <div class="sidebar sidebar-dark sidebar-left simplebar bg-dark-gray" data-simplebar>




                  <ul class="sidebar-menu">
                      <li class="sidebar-menu-item active">
                          <a class="sidebar-menu-button" href="index">
                              <img src="{{ asset('user/') }}/{{ auth()->user()->avatar}}" class="img-responsive rounded-circle" style=" width: 50%; margin: 0px auto;"/>

                          </a>
                          <p class="text-center">Student</p>
                          <h5 class="text-center" style="color: white;">{{ auth()->user()->name }} {{ auth()->user()->surname }}</h5>
                          <br/>
                      </li>
                  </ul>

                  <div class="sidebar-heading">My Dashboard</div>

                  <div class="sidebar-block p-0">
                      <ul class="sidebar-menu mt-0">
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/u/home">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">home</i>
                                  <span class="sidebar-menu-text">Dashboard</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/u/home">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">book</i>
                                  <span class="sidebar-menu-text">My Courses</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/u/available/courses">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue</i>
                                  <span class="sidebar-menu-text">Available Courses</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/u/profile">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                  <span class="sidebar-menu-text">Edit Account</span>
                              </a>
                          </li>
                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/u/message">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                                  <span class="sidebar-menu-text">Messages</span>
                                  <span class="label label-success sidebar-menu-icon--right" id="countmessage">0</span>

                              </a>
                          </li>



                      </ul>
                  </div>


                  <div class="sidebar-heading">Logout</div>

                  <div class="sidebar-block p-0">
                      <ul class="sidebar-menu mt-0">


                          <li class="sidebar-menu-item">
                              <a class="sidebar-menu-button" href="/logout">
                                  <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">exit_to_app</i>
                                  <span class="sidebar-menu-text">Logout</span>
                              </a>
                          </li>
                      </ul>
                  </div>




              </div>
          </div>
      </div>
  </div>










<script src="{{ asset('home/assets/vendor/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('home/assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/bootstrap.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{ asset('home/assets/vendor/simplebar.min.js') }}"></script>

<!-- DOM Factory -->
<script src="{{ asset('home/assets/vendor/dom-factory.js') }}"></script>

<!-- MDK -->
<script src="{{ asset('home/assets/vendor/material-design-kit.js') }}"></script>

<!-- Range Slider -->
<script src="{{ asset('home/assets/vendor/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('home/assets/js/ion-rangeslider.js') }}"></script>

<!-- App -->
<script src="{{ asset('home/assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('home/assets/js/check-selected-row.js') }}"></script>
<script src="{{ asset('home/assets/js/dropdown.js') }}"></script>
<script src="{{ asset('home/assets/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('home/assets/js/app.js') }}"></script>


<!-- Flatpickr -->
<script src="{{ asset('home/assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('home/assets/js/flatpickr.js') }}"></script>

<!-- Global Settings -->
<script src="{{ asset('home/assets/js/settings.js') }}"></script>

<!-- Moment.js -->
<script src="{{ asset('home/assets/vendor/moment.min.js') }}"></script>
<script src="{{ asset('home/assets/vendor/moment-range.js') }}"></script>

<script src="{{ asset('css/semantic/semantic.min.js') }}"></script>




<!-- Toastr -->
<script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

<script type="text/javascript">
var countmessage = 0;
var isMessage = "no";
$("#countmessage").html(countmessage);


var pusher = new Pusher('19ea9d89182fa1adb1f0', {
     cluster: 'us2',
     forceTLS: true
   });

   var channel = pusher.subscribe('my-user-channel');
   channel.bind('my-messagecount', function(data) {


     if(data.user == "2" && data.message == "new"){
       if(isMessage == "no"){
         countmessage++;
         $("#countmessage").html(countmessage);
       }


     $(document).ready(function() {
         setTimeout(function() {
             toastr.options = {
                 closeButton: true,
                 progressBar: true,
                 showMethod: 'slideDown',
                 timeOut: 4000
             };
             toastr.success('Message Alert', "You have a new message.");

         }, 1300);
       });

     }
   });
   </script>
@yield('notifications')

@yield('script')
</body>


</html>
