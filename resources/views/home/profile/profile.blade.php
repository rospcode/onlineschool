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

.course_wrapper {
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

          <li class="menu-item">
            <a class="menu-link" href="/u/home">
              <span class="icon ti-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/u/home">
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

          <li class="menu-item active">
            <a class="menu-link" href="#">
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

        <ul class="topbar-btns">



          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{ asset('user') }}/{{ auth()->user()->avatar}}" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right" style="">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>

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
               Profile Settings
          </h1>
        </div>

        <div class="header-action">
          <nav class="nav">
            <a class="nav-link  active" href="">Profile</a>
            <a class="nav-link" href="/u/basic_info">Basic Information</a>
            <a class="nav-link" href="/u/password/change">Change Password</a>
          </nav>
        </div>
      </header><!--/.header -->


      <div class="main-content">
         <div class="container">
           <div class="row" style="padding-top: 50px;">
             <div class="col-lg-8 offset-2">
               <form action="" method="post"  enctype="multipart/form-data">
                   <div class="row">
                       <div class="col-lg-12" >

                         <div class="page-section">
                           <h4></h4>
                           <div class="list-group list-group-form">
                               <div class="list-group-item">
                                   <div class="form-group row mb-0">
                                       <label class="col-form-label col-sm-3">Your photo</label>
                                       <div class="col-sm-9 media align-items-center">
                                           <a href="#" class="media-left mr-16pt">
                                               <img src="{{ asset('user/')}}/{{ auth()->user()->avatar}}" alt="people" class="rounded-circle" width="56" style="width: 40px;">
                                           </a>
                                           {{ csrf_field() }}
                                           <div class="media-body">
                                               <div class="custom-file">
                                                   <input type="file" name="file"  class="custom-file-input" id="inputGroupFile01">
                                                   <label class="custom-file-label" id="fields" style="z-index: 1;
             height: calc(2.5rem + 2px); position: absolute;
             top: 0;
             right: 0;
             padding: .5rem .75rem;" for="inputGroupFile01">Choose file</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="list-group-item">
                                   <div class="form-group row mb-0">
                                       <label class="col-form-label col-sm-3">Profile Name</label>
                                       <div class="col-sm-9">
                                           <input type="text" id="fields" onblur="update_profile(this.value, this.name)" name="name" class="form-control" value="{{ auth()->user()->name}}" placeholder="Your profile name ...">
                                           <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                       </div>
                                   </div>
                               </div>
                               <div class="list-group-item">
                                   <div class="form-group row mb-0">
                                       <label class="col-form-label col-sm-3">Profile Surname</label>
                                       <div class="col-sm-9">
                                           <input type="text" id="fields" onblur="update_profile(this.value, this.name)" name="surname" class="form-control" value="{{ auth()->user()->surname}}" placeholder="Your profile name ...">
                                           <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                       </div>
                                   </div>
                               </div>

                               <div class="list-group-item">
                                 @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif


                   @if (session('msg'))
                   <div class="alert alert-success">
                   {{ session('msg') }}
                   </div>
                   @endif
                 </div>


                           </div>
                       </div>

                       </div>



                   </div>
               </form>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
   function update_profile(value,name){
     $.ajax({
       type: 'get',
       url: '/u/update_profile/profile/'+name+'/'+value,
       success: function(response){
         console.log(response);
       },errors: function(error){
         console.log(error);
       }
     });
   }
   </script>




  </body>


</html>
