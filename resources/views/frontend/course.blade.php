@extends('frontend.layouts.master')
@section('page')
Available Courses
 @endsection

 @section('style')
 <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
       <!-- font awesome -->
       <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
       <!--  javascript -->
       <script src="{{ asset('assets/js/simplebar.js') }}"></script>
       <script src="{{ asset('assets/js/uikit.js') }}"></script>
       @endsection

 @section('content')


 <section id="gallery-view" >
  <div class="">

            <div class="course-intro uk-text-center topic4">
                <h2 class="uk-light uk-text-uppercase uk-text-bold uk-text-white uk-margin-top"> Microsoft Excel: Beginner Course  </h2>
                <p class="uk-light uk-text-bold">Training Manuals and a flash drive with all relevant Excel documentation.</p>

  <a class="uk-button uk-button-white" href="Course-dhashboard.html" uk-tooltip="title: Course Price is R1000 ; delay: 200 ; pos: top ;animation: uk-animation-scale-up" title="" aria-expanded="false"> <i class="cart icon"></i>  R1000</a>
                <a class="uk-button uk-button-white" href="Course-dhashboard.html" uk-tooltip="title: Start this course now ; delay: 200 ; pos: top ;animation: uk-animation-scale-up" title="" aria-expanded="false"> Enrol now</a>

                <!-- video demo model -->
                <div id="modal-sections" uk-modal="" class="uk-modal">
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-default uk-margin-small-top uk-margin-small-right uk-light uk-close uk-icon" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
                        <div class="uk-modal-header topic4 none-border">
                            <b class="uk-text-white uk-text-medium">  Preview </b>
                        </div>
                        <div class="video-responsive">
                            <iframe src="https://www.youtube.com/embed/nOCXXHGMezU?enablejsapi=1" class="uk-padding-remove uk-responsive-width" uk-video="automute: true" allowfullscreen="" uk-responsive="" frameborder="0"></iframe>
                        </div>
                        <!-- custom video
                        <video loop muted playsinline controls uk-video="autoplay: inview">
                            <source src="videos/course-intro.mp4" type="video/mp4">
                        </video>
                        -->
                        <div class="uk-modal-body">
                            <h3>
 Microsoft Excel:
 Beginner Course
 </h3>
                            <p>Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.</p>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <a href="Course-dhashboard.html">
                                <button class="uk-button uk-button-grey" type="button">Start now </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- navigation-->
            <ul class="uk-tab uk-flex-center uk-margin-remove-top uk-background-default uk-sticky" uk-sticky="animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up ; media: @s;" uk-tab="" style="">
                <li aria-expanded="true" class="uk-active">
                    <a href="#"> Course introduciton  </a>
                </li>

                <li aria-expanded="false" class="">
                    <a href="#"> Reveiws  </a>
                </li>

            </ul><div class="uk-sticky-placeholder" style="height: 59px; margin: 0px 0px 20px -20px;" hidden=""></div>
            <ul class="uk-switcher uk-margin uk-padding-small uk-container-small uk-margin-auto  uk-margin-top">
                <!-- tab 1 About the course -->
                <li class="">
                    <h3> About this Course</h3>
                    <p> Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.</p>
                    <p> Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training.  </p>
                    <p>Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.</p>
                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>


                    <ul class="uk-list uk-list-bullet">
                        <li>We can do a maximum of 10 employees if there are no laptops on site available.</li>
                        <li>We can do a maximum of 12 employees on site if they bring their own laptops (Must have Microsoft Excel on each Laptop).</li>

                    </ul>

                    <p>Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.Training Manuals and a flash drive with all relevant Excel documentation. A completion certificate on condition they pass the Excel test related to the training. Employees who did not pass the training will receive an attendance certificate.</p>
                </li>

                <!-- tab 2 About the instructor -->


                <!-- tab 3 Reveiws -->
                <li class="">

                </li>

                <!-- tab 4 Students -->

            </ul>


        </div>

 </section>








 <section id="idsec" style="padding-top: 70px;">
  <div class="beng" style="">
    <div class="info-color-dark text-center py-4">
      <!--Newsletter-->
      <a id="footer-link-newsletter" href="/account/login" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Login
        <i class="fas fa fa-sign-in white-text ml-2"> </i>
      </a>
      <!--Newsletter-->
      <a id="footer-link-affiliate" href="/account/signup" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Signup
        <i class="fas  far fa-address-card white-text ml-2"> </i>
      </a>
      <!--Contact-->

      <a id="footer-link-affiliate" href="/w/courses" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Available Courses
        <i class="fas fab fa-discourse white-text ml-2"> </i>
      </a>
      <!--GitHub-->

    </div>
 </div>
 </section>
 @endsection
