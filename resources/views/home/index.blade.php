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
    background-image: url(../assets/img/header/general.png), linear-gradient(128deg,#1e6dbd,#3287db);
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
</style>
  </head>

  <body>




    <!-- Sidebar -->
    <aside class="sidebar sidebar-expand-lg sidebar-iconic">
      <header class="sidebar-header">
        <span class="logo">
          <a href="http://thetheme.io/theadmin/index.html"><img src="favicon-96x96.png" alt="logo"></a>
        </span>
      </header>

      <nav class="sidebar-navigation">

        <div class="sidebar-profile">
          <div class="dropdown">
            <span class="dropdown-toggle no-caret" data-toggle="dropdown"><img class="avatar" src="Mark-Essey.PNG" alt="..."></span>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
              <a class="dropdown-item" href="#"><i class="ti-help"></i> Help</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
            </div>
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
            <a class="menu-link" href="#">
              <span class="icon ti-book"></span>
              <span class="title">My Courses</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon ti-bookmark-alt"></span>
              <span class="title">Complete Courses</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon ti-email"></span>
              <span class="title">Messages</span>
              <span class="badge badge-pill badge-info">2</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="#">
              <span class="icon ti-settings"></span>
              <span class="title">Settings</span>
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
        <a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a>

        <div class="topbar-divider"></div>

        <ul class="topbar-btns">



          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="Mark-Essey.PNG" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
              <a class="dropdown-item" href="#">
                <div class="flexbox">
                  <i class="ti-email"></i>
                  <span class="flex-grow">Inbox</span>
                  <span class="badge badge-pill badge-info">5</span>
                </div>
              </a>
              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-lock"></i> Lock</a>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
            </div>
          </li>


          <!-- Notifications -->
          <li class="dropdown d-none d-md-block">
            <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
            <div class="dropdown-menu dropdown-menu-right">

              <div class="media-list media-list-hover media-list-divided media-list-xs">
                <a class="media media-new" href="#">
                  <span class="avatar bg-success"><i class="ti-user"></i></span>
                  <div class="media-body">
                    <p>New user registered</p>
                    <time datetime="2018-07-14 20:00">Just now</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                  <div class="media-body">
                    <p>New order received</p>
                    <time datetime="2018-07-14 20:00">2 min ago</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                  <div class="media-body">
                    <p>Refund request from <b>Ashlyn Culotta</b></p>
                    <time datetime="2018-07-14 20:00">24 min ago</time>
                  </div>
                </a>

                <a class="media" href="#">
                  <span class="avatar bg-primary"><i class="ti-money"></i></span>
                  <div class="media-body">
                    <p>New payment has made through PayPal</p>
                    <time datetime="2018-07-14 20:00">53 min ago</time>
                  </div>
                </a>
              </div>

              <div class="dropdown-footer">
                <div class="left">
                  <a href="#">Read all notifications</a>
                </div>

                <div class="right">
                  <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                  <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                  <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                </div>
              </div>

            </div>
          </li>
          <!-- END Notifications -->

          <!-- Messages -->
          <li class="dropdown d-none d-md-block">
            <span class="topbar-btn" data-toggle="dropdown"><i class="ti-email"></i></span>
            <div class="dropdown-menu dropdown-menu-right">

              <div class="media-list media-list-divided media-list-hover media-list-xs scrollable" style="height: 290px">
                <a class="media media-new" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-success">
                    <img src="../assets/img/avatar/1.jpg" alt="...">
                  </span>

                  <div class="media-body">
                    <p><strong>Maryam Amiri</strong> <time class="float-right" datetime="2018-07-14 20:00">23 min ago</time></p>
                    <p class="text-truncate">Authoritatively exploit resource maximizing technologies before technically.</p>
                  </div>
                </a>

                <a class="media media-new" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-warning">
                    <img src="../assets/img/avatar/2.jpg" alt="...">
                  </span>

                  <div class="media-body">
                    <p><strong>Hossein Shams</strong> <time class="float-right" datetime="2018-07-14 20:00">48 min ago</time></p>
                    <p class="text-truncate">Continually plagiarize efficient interfaces after bricks-and-clicks niches.</p>
                  </div>
                </a>

                <a class="media" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-dark">
                    <img src="../assets/img/avatar/3.jpg" alt="...">
                  </span>

                  <div class="media-body">
                    <p><strong>Helen Bennett</strong> <time class="float-right" datetime="2018-07-14 20:00">3 hours ago</time></p>
                    <p class="text-truncate">Objectively underwhelm cross-unit web-readiness before sticky outsourcing.</p>
                  </div>
                </a>

                <a class="media" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-success bg-purple">FT</span>

                  <div class="media-body">
                    <p><strong>Fidel Tonn</strong> <time class="float-right" datetime="2018-07-14 20:00">21 hours ago</time></p>
                    <p class="text-truncate">Interactively innovate transparent relationships with holistic infrastructures.</p>
                  </div>
                </a>

                <a class="media" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-danger">
                    <img src="../assets/img/avatar/4.jpg" alt="...">
                  </span>

                  <div class="media-body">
                    <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2018-07-14 20:00">Yesterday</time></p>
                    <p class="text-truncate">Collaboratively visualize corporate initiatives for web-enabled value.</p>
                  </div>
                </a>

                <a class="media" href="http://thetheme.io/theadmin/page-app/mailbox-single.html">
                  <span class="avatar status-success">
                    <img src="../assets/img/avatar/5.jpg" alt="...">
                  </span>

                  <div class="media-body">
                    <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2018-07-14 20:00">Yesterday</time></p>
                    <p class="text-truncate">Interactively reinvent standards compliant supply chains through next-generation bandwidth.</p>
                  </div>
                </a>
              </div>

              <div class="dropdown-footer">
                <div class="left">
                  <a href="#">Read all messages</a>
                </div>

                <div class="right">
                  <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                  <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                </div>
              </div>

            </div>
          </li>
          <!-- END Messages -->

        </ul>

        <div class="topbar-divider"></div>
      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container  mdk-header-layout__content page-content">

      <header class="header bg-ui-general">
        <div class="header-info">
          <h1 class="header-title">
               Welcome back Siyabonga
          </h1>
        </div>

        <div class="header-action">
          <nav class="nav">
            <a class="nav-link" href="sidebar-index.html">My Courses</a>
            <a class="nav-link active" href="">Find Course</a>
          </nav>
        </div>
      </header><!--/.header -->


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
                      <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-secondary">Microsoft</a>
                      <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">DEBT-IN</a>
                      <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary">Computer</a>
                      <a href="library-development.html" class="chip mb-16pt mb-md-0 chip-outline-secondary d-md-none d-lg-inline-flex">Excel</a>
             </div>
           </div>

           <div class="row" style="padding-top: 50px;">

            <div class="col-lg-3">
              <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal" data-partial-height="40" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="mdk-reveal,overlay" style="height: 310px;-webkit-transition: .5s;border-radius: 6px;">
                                  <a href="view-course.html" class="js-image" data-position="center" data-height="auto" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///C:/Users/SiyabongaS/Downloads/courses/tu/tu/thetheme.io/theadmin/layout/word-logo.png&quot;); background-size: cover; background-position: center center; height: 230px;"></a>
                                    <div class="mdk-reveal__content" style="transform: translateY(0px);box-shadow: 0 2px 9px #c7c7c7;"><div class="mdk-reveal__partial" style=""></div>
                                      <div class="card-body">
                                        <div class="d-flex">
                                           <div class="flex">
                                              <h6 style="">Microsoft Excel: Beginner Course Beginner Course</h6>
                                              <a href="" class="btn btn-success" style="border-radius: 7px;">Resume</a>
                                                   </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal" data-partial-height="40" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="mdk-reveal,overlay" style="height: 310px;-webkit-transition: .5s;border-radius: 6px;">
                                  <a href="view-course.html" class="js-image" data-position="center" data-height="auto" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///C:/Users/SiyabongaS/Downloads/courses/tu/tu/thetheme.io/theadmin/layout/word-logo.png&quot;); background-size: cover; background-position: center center; height: 230px;"></a>
                                    <div class="mdk-reveal__content" style="transform: translateY(0px);box-shadow: 0 2px 9px #c7c7c7;"><div class="mdk-reveal__partial" style=""></div>
                                      <div class="card-body">
                                        <div class="d-flex">
                                           <div class="flex">
                                              <h6 style="">Microsoft Excel: Beginner Course Beginner Course</h6>
                                              <a href="" class="btn btn-success" style="border-radius: 7px;">Resume</a>
                                                   </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal" data-partial-height="40" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="mdk-reveal,overlay" style="height: 310px;-webkit-transition: .5s;border-radius: 6px;">
                                  <a href="view-course.html" class="js-image" data-position="center" data-height="auto" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///C:/Users/SiyabongaS/Downloads/courses/tu/tu/thetheme.io/theadmin/layout/word-logo.png&quot;); background-size: cover; background-position: center center; height: 230px;"></a>
                                    <div class="mdk-reveal__content" style="transform: translateY(0px);box-shadow: 0 2px 9px #c7c7c7;"><div class="mdk-reveal__partial" style=""></div>
                                      <div class="card-body">
                                        <div class="d-flex">
                                           <div class="flex">
                                              <h6 style="">Microsoft Excel: Beginner Course Beginner Course</h6>
                                              <a href="" class="btn btn-success" style="border-radius: 7px;">Resume</a>
                                                   </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal" data-partial-height="40" data-toggle="popover" data-trigger="click" data-original-title="" title="" data-domfactory-upgraded="mdk-reveal,overlay" style="height: 310px;-webkit-transition: .5s;border-radius: 6px;">
                                  <a href="view-course.html" class="js-image" data-position="center" data-height="auto" data-domfactory-upgraded="image" style="display: block; position: relative; overflow: hidden; background-image: url(&quot;file:///C:/Users/SiyabongaS/Downloads/courses/tu/tu/thetheme.io/theadmin/layout/word-logo.png&quot;); background-size: cover; background-position: center center; height: 230px;"></a>
                                    <div class="mdk-reveal__content" style="transform: translateY(0px);box-shadow: 0 2px 9px #c7c7c7;"><div class="mdk-reveal__partial" style=""></div>
                                      <div class="card-body">
                                        <div class="d-flex">
                                           <div class="flex">
                                              <h6 style="">Microsoft Excel: Beginner Course Beginner Course</h6>
                                                <a href="" class="btn btn-success" style="border-radius: 7px;">Resume</a>
                                                   </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>
                                    </div>




           </div>

           </div>


           </div>




           <div class="main-content" style="padding-top: 30px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 mb-32pt mb-md-0">
                      <h2 style="position: relative;
     bottom: 3px;">Achievements</h2>
                  </div>
                  <div class="col-md-8 mb-32pt mb-md-0">

                  </div>
                </div>

                <div class="row" style="padding-top: 30px;">
                   <div class="col-lg-6">
                     <a class="card mb-0" href="#">
                                        <img src="assets/images/achievements/flinto.png" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                                        <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                        <span class="card-body fullbleed">
                                            <span class="row">
                                                <span class="col-5 text-center">
                                                    <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block" style="padding-top: 6px;">Course Complete</span>
                                                    <span class="text-white-60 d-block mb-16pt">Jun 5, 2018</span>
                                                    <img src="assets/images/illustration/achievement/128/white.png" alt="achievement">
                                                </span>
                                                <span class="col-7 d-flex flex-column">
                                                    <span class="text-right flex">
                                                      <div style="height: 50px;
width: 70px;
background-color: white;
float: right;">
<h3 style="padding-top: 9px;padding-right: 9px;color: green;">75%</h3>
</div>
                                                    </span>
                                                    <span style="padding-top: 60px;">
                                                        <span class="h4 text-white m-0 d-block">Flinto</span>
                                                        <span class="text-white-60">Introduction to The App Design Application</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                  </div>
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


  </body>


</html>
