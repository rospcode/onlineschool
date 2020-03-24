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
       <style>
       .price {
           position: absolute;
           right: -2px;
           top: 144px;
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

       }
       .course-img {
           width: 100%;
           height: 202px;
       }

       footer{
         margin-top: 150px;
       }
       </style>
       @endsection




 @section('content')

 <section id="gallery-view" >

 <div class="">

            <ul class="uk-switcher switcher-container">
                <li>
                    <div class="topic1 hero-bg">
                        <div uk-grid>
                            <div class="uk-width-1-2@m">
                                <h1 class="uk-animation-fade"> Available Courses   </h1>
                                <p>Find the right course/s for you, to help you get the training you need to be a certified individual, we currentlt offer the courses listed below </p>

                            </div>
                            <div class="uk-width-1-2@m uk-visible@m">
                                <img src="{{ asset('assets/images/courses/course-catagory-hero-1.jpg') }}" alt="" class="uk-align-right img-xxlarge">
                            </div>
                        </div>
                    </div>
                </li>
                <?php $count = 2; ?>
                @foreach($categories as $category)
                <li>
                    <div class="topic<?php echo $count; ?> hero-bg">
                        <h1> {{ $category->category_title }} </h1>
                        <h6> {{ count($category->getCourses)}}  {{ $category->category_title }} Course available </h6>
                    </div>
                </li>
                <?php $count++; ?>
                @endforeach


            </ul>
            <!-- mobile catagory button-->
            <button class="btn btn-success uk-hidden@m  mobile-catagory-button" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible"> Open subcatagory </button>
            <ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible">
                <li class="uk-active">
                    <a href="#"> All Courses </a>
                </li>
  @foreach($categories as $category)
  <li>
      <a href="#">{{ $category->category_title }} </a>
  </li>
  @endforeach



            </ul>
            <ul class="uk-switcher switcher-container">



                <li>
                    <!--  Web development -->
                    <div class="uk-container">
                        <div class="uk-clearfix boundary-align">
                            <div class="uk-float-left section-heading none-border">
                                <h2>Browse All CapabilityBPO courses</h2>
                                <p>Browser for a course you need</p>
                            </div>

                        </div>
                        <!-- Filter course  -->


                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid>

                            @foreach($courses as $course)
                            @if($course->course_status != "Down")
                               <!-- Course   -->
                            <div>
                                <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                    <a href="/view/course/{{$course->id}}" class="uk-link-reset">
                                        <img src="{{ asset('img/courses') }}/{{ $course->course_img}}" class="course-img">
                                        <div class="uk-card-body">
                                            <h4>
{!! substr($course->course_title, 0,30) !!}..
</h4>



                                                             <p>@if(strlen($course->course_notes) > '150')
                                                                 {!! substr($course->course_notes, 0,180) !!}...
                                                                 @else
                                                                 {!! $course->course_notes !!}
                                                                 @endif
                                                             </p>

                                            <hr class="uk-margin-remove-top">
                                            <div class="uk-clearfix">
                                              <div class="uk-float-left">

                                                  <a href="/view/course/{{ $course->course_link}}" class="btn btn-success">View More</a>
                                              </div>
                                            </div>
                                        </div>
                                    </a>
                                      <div class="price">R{{ $course->course_cost }}                                       <span></span></div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- Course   -->


                        </div>

                    </div>
                </li>














  @foreach($categories as $category)
                <li>
                    <!--  Game development -->
                    <div class="uk-container">
                        <div class="uk-clearfix boundary-align">
                            <div class="uk-float-left section-heading none-border">
                                <h2>Browse All {{ $category->category_title }} courses</h2>
                                <p>Browser for a course you need</p>
                            </div>

                        </div>
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid>
                            <!-- Course  1  -->

            @foreach($category->getCourses as $courses)
            @if($courses->course_status != "Down")
                             <div>
                                <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                  <a href="/view/course/{{$courses->id}}" class="uk-link-reset">
                                      <img src="{{ asset('img/courses') }}/{{ $courses->course_img}}" class="course-img">
                                      <div class="uk-card-body">
                                          <h4>
  {!! substr($courses->course_title, 0,30) !!}..
  </h4>



                                                           <p>@if(strlen($courses->course_notes) > '150')
                                                               {!! substr($courses->course_notes, 0,40) !!}...
                                                               @else
                                                               {!! $courses->course_notes !!}
                                                               @endif
                                                           </p>
                                                           <p>
                                                                <strong>Duration:</strong> {{$courses->course_duration}}
                                                           </p>
                                                           <p>
                                                                <strong>Time:</strong> {{ $courses->course_time}}
                                                           </p>
                                          <hr class="uk-margin-remove-top">
                                          <div class="uk-clearfix">
                                            <div class="uk-float-left">

                                                <a href="/view/course/{{ $courses->course_link}}" class="btn btn-success">View More</a>
                                            </div>
                                          </div>
                                      </div>
                                  </a>
                                    <div class="price">R{{ $course->course_cost }}                                       <span></span></div>
                                </div>
                            </div>
                            @endif
@endforeach
                            <!-- Course  5  -->

                            <!-- Course  6   -->

                        </div>

                    </div>
                </li>
                @endforeach






























            </ul>

            <!-- footer  end -->
        </div>
        <!--InfoBox starts her-->
        <div id="infoBox" class="info-box uk-background-default uk-position-bottom-right uk-position-fixed uk-animation-slide-right-medium">
            <header class="uk-background-grey">
                <h6 class="uk-margin-small-top uk-margin-small-bottom uk-text-white uk-animation-fade">  Information Center </h6>
                <div class="uk-button-group uk-position-top-right">
                    <button class="uk-visible@m" uk-toggle="target: #infoBox; cls: info-box-small" uk-tooltip="title: Minimze; pos: top-right">
                        <i class="far fa-window-maximize icon-medium"></i>
                    </button>
                    <button class="uk-visible@m" uk-toggle="target: #infoBox; cls: info-box-big" uk-tooltip="title: Resize ; pos: top-right">
                        <i class="fas fa-expand icon-medium"></i>
                    </button>
                    <button uk-toggle="target: #infoBox; cls: infoBox-active" uk-tooltip="title: Close ; pos: top-right">
                        <i class="far fa-window-close icon-medium"></i>
                    </button>
                </div>
            </header>
            <div class="info-content">
                <!-- Home tab -->
                <div id="Home-tab" class="infotabcontent tab-default-open">
                    <!-- view more -->
                    <div class="uk-position-bottom-center Veiw-more uk-animation-slide-bottom-medium uk-visible@m uk-background-muted" uk-toggle="target: #infoBox; cls: info-box-big">
                        <span> Veiw More  </span>
                    </div>
                    <div class="uk-padding-small uk-background-grey info-box-hero">
                        <h3 class="uk-text-white uk-animation-slide-bottom-medium  uk-margin-small-left"> <i class="fas fa-exclamation icon-large"></i> Knowledge Base </h3>
                        <h6 class="  uk-text-white uk-margin-small  uk-margin-small-left"> <a class="Course-tags uk-text-white" style="background: #ffffff33; border: 0" href="pages-help.html"> View more </a> </h6>
                    </div>
                    <div class="uk-padding-small  uk-padding-remove-top uk-clearfix" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 100">
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabOne')">
                            <i class="fas fa-user-shield info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Privacy </p>
                        </div>
                        <div class="uk-card-small boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabTwo')">
                            <i class="fas fa-user-plus info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Membership</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabOne')">
                            <i class="fas fa-question  info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Help</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabTwo')">
                            <i class="fas fa-comment-dots info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Terms</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabOne')">
                            <i class="fas fa-wallet info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Peyments</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabTwo')">
                            <i class="fas fa-shield-alt info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center">  Secure</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabOne')">
                            <i class="fas fa-user-shield info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center">  Privacy</p>
                        </div>
                        <div class="uk-card-small uk-text-center boxes uk-card-hover uk-padding-small uk-inline-clip border-radius-6 scale-up" onclick="InfoTabs(event, 'tabTwo')">
                            <i class="fas fa-user info-big-icon"></i>
                            <p class="uk-margin-small-top uk-margin-remove-bottom   uk-text-small uk-text-center"> Account</p>
                        </div>
                    </div>
                    <div uk-grid>
                        <div class="uk-width-1-2@m">
                            <ul class="uk-list uk-list-striped uk-text-center">
                                <li>
                                    <a href="#" class="uk-link-reset"> How do I sign up?</a>
                                </li>
                                <li>
                                    <a href="#" class="uk-link-reset">Can I remove a post? </a>
                                </li>
                                <li>
                                    <a href="#" class="uk-link-reset"> How do reviews work?</a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-1-2@m  uk-padding-remove-left uk-text-center">
                            <ul class="uk-list uk-list-striped">
                                <li>
                                    <a href="#" class="uk-link-reset"> How i can be instructure </a>
                                </li>
                                <li>
                                    <a href="#" class="uk-link-reset">Can I remove a post? </a>
                                </li>
                                <li>
                                    <a href="#" class="uk-link-reset"> How do reviews work?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="pages-faq.html" class="uk-align-center uk-text-center uk-margin-small-top"> Visit Our Faq page  </a>
                </div>
                <!-- tab One -->
                <div id="tabOne" class="infotabcontent">
                    <div class="uk-background-grey tab-subheader">
                        <a href="#" class="uk-link-reset  uk-animation-slide-right" onclick="InfoTabs(event, 'Home-tab')"><i class="fas fa-angle-left icon-medium"></i> </a>
                        PRIVACY
                    </div>
                    <div class="demo1 tab-content   uk-animation-slide-right-small  uk-margin-small-top" data-simplebar>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4 class="uk-margin-small"> Can I specify my own private key? </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4> My files are missing! How do I get them back? </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4> How can I access my account data? </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="pages-terms.html" style="margin-bottom: 130px;" lass="uk-align-center uk-text-center uk-h5 uk-link-heading"> Visit Our PRIVACY page </a>
                    </div>
                </div>
                <!-- tab Two  -->
                <div id="tabTwo" class="infotabcontent">
                    <div class="uk-background-grey tab-subheader">
                        <a href="#" class="uk-link-reset  uk-animation-slide-right" onclick="InfoTabs(event, 'Home-tab')"><i class="fas fa-angle-left icon-medium"></i> </a>
                        PAYMENTS
                    </div>
                    <div class="demo1 tab-content uk-animation-slide-right-small  uk-margin-small-top" data-simplebar>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4> Can I have an invoice for my subscription?</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4> Why did my credit card or PayPal payment fail? </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h4> Why does my bank statement show multiple charges for one upgrade? </h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="pages-terms.html" style="margin-bottom: 130px;" lass="uk-align-center uk-text-center uk-h5 uk-link-heading"> Visit Our Peyment page </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- app end -->

 </section>









 @endsection
