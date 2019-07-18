<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('page'); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo e(asset('styles/compiled.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('styles/style.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('stylee.css')); ?>"/>

    <link rel="stylesheet" href="<?php echo e(asset('styles/course-files.css')); ?>"/>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/semantic/semantic.min.css')); ?>">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link href="<?php echo e(asset('css/fontawesome/css/all.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <style>
  .welcome-title strong::after{
    background-color: #28a9e5 !important;
  }
  </style>

  <style>

  #ha{

  }
  #ha span {
  position: relative;
  top: 20px;
  display: inline-block;
  -webkit-animation: bounce 1.4s ease infinite alternate;

}

#ha span:nth-child(2) {
  -webkit-animation-delay: 1.8s;
}

#ha span:nth-child(3) {
  -webkit-animation-delay: 2.7s;
}

#ha span:nth-child(4) {
  -webkit-animation-delay: 2.1s;
}

#ha span:nth-child(5) {
  -webkit-animation-delay: 1.7s;
}

#ha span:nth-child(6) {
  -webkit-animation-delay: 3.1s;
}

#ha span:nth-child(7) {
  -webkit-animation-delay: 2.8s;
}

#ha span:nth-child(8) {
  -webkit-animation-delay: 1.1s;
}

#ha span:nth-child(9) {
  -webkit-animation-delay: 0.3s;
}

#ha span:nth-child(10) {
  -webkit-animation-delay: 0.4s;
}

#ha1 span:nth-child(11) {
  -webkit-animation-delay: 0.5s;
}

#ha span:nth-child(12) {
  -webkit-animation-delay: 0.6s;
}

#ha span:nth-child(13) {
  -webkit-animation-delay: 0.7s;
}

#ha span:nth-child(14) {
  -webkit-animation-delay: 0.8s;
}
@-webkit-keyframes bounce {
  100% {
    top: -20px;
    text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
      0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
      0 50px 25px rgba(0, 0, 0, 0.2);
  }
}
p{
  font-size: 16px;
}
  </style>

  <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body>


      <!--Main Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container" style="max-width: 1540px;">
      <a class="navbar-brand" href="/" style="margin: 0px auto;"><img id="logo" class="img-responsive"  src="<?php echo e(asset('img/logo.jpg')); ?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/w/courses">Courses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/w/training">Training</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/gallery">Gallery</a>
          </li>






          <form class="form-inline mr-auto" action="<?php echo e(route('course.search')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

     <div class="md-form my-0">
       <input class="form-control" id="search-box" onkeyup="getsearch(this.value)" autocomplete="false" type="text" value="<?php echo $__env->yieldContent('searchname'); ?>" name="course_name" placeholder="Search for course" aria-label="Search">
       <i class="fas fa-search text-white ml-3" aria-hidden="true"></i>
       <div id="livesearch" style="background-color: white; color: black; ">



       </div>
     </div>
   </form>
        </ul>

<a href="/account/login" class="btn  btn-default">Login</a>
      <a href="/account/signup" class="btn " style="border: 1px solid #686f7a;">Signup</a>
    </div>

    </div>


    </nav>







    <?php echo $__env->yieldContent('content'); ?>







    <!--Footer-->
    <footer>

    <div class="container">
      <div class="row" >

        <div class="col-md-offset-2" style="margin: 0px auto;">
          <h4 style="color: white;">Subscribe to our Newsletter for latest courses.</h4>
          <div id="message-newsletter"></div>
          <form name="newsletter" id="newsletter" class="form-inline">
            <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
            <button id="submit-newsletter" class=" button_outline" style="margin: 0px auto;"> Subscribe</button>
          </form>
        </div>

      </div>
    </div>
    <hr class="alert-success">


    <div class="container" id="nav-footer">
      <div class="row text-left">
        <div class="col-md-3 col-sm-3">
          <h4>Browse</h4>
          <ul>

            <li><a href="/w/courses">Courses</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contacts</a></li>
          </ul>
        </div><!-- End col-md-4 -->
        <div class="col-md-3 col-sm-3">
          <h4>Courses</h4>
          <ul>
            <li><a href="">Microsoft</a></li>
            <li><a href="">Coaching</a></li>
            <li><a href="">Customer Service</a></li>

          </ul>
        </div><!-- End col-md-4 -->
        <div class="col-md-3 col-sm-3">
          <h4>Info </h4>
          <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Apply</a></li>
            <li><a href="#">Terms and conditions</a></li>

          </ul>
        </div><!-- End col-md-4 -->
        <div class="col-md-3 col-sm-3">
          <ul id="follow_us">
            <li><a href="#"><i class="fas fa-envelope" style="margin-left: 0px;"></i></a></li>


          </ul>
          <ul>

            <li>Questions? <a href="#">questions@domain.com</a></li>
          </ul>
        </div><!-- End col-md-4 -->
      </div><!-- End row -->
    </div>
    <div id="copy_right">@ <script>
      document.write(new Date().getFullYear())</script></div>
    </footer>
      <!--Main Layout-->

    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script defer src="<?php echo e(asset('css/fontawesome/js/all.js')); ?>"></script>
    <script src="<?php echo e(asset('css/semantic/semantic.min.js')); ?>"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

        <script>
      function getsearch(str) {
          if (str.length == 0) {
              document.getElementById("livesearch").innerHTML = "";
              document.getElementById("livesearch").style.border = "0px";

              return;
          }else{
            $.ajax({
       type: "GET",
       url: "<?php echo e(route('getSearchCourse')); ?>"+'/'+str,
       success: function (data) {

         if(data.length != 0){

           $("#livesearch").html("   <hr><a href='/view/course/"+data[0].id+"' class='' style='padding: 9px;'>"+data[0].course_title+"</a><hr>");
         }else{

             document.getElementById("livesearch").innerHTML = "   <hr><p class='text-center'>no suggestion</p><hr>";
         }
       },
       error: function (data) {
           console.log('Error:', data);

       }
   });
          }



      }
  </script>
        <?php echo $__env->yieldContent('login'); ?>

    <?php echo $__env->yieldContent('script'); ?>
      </body>
    </html>
