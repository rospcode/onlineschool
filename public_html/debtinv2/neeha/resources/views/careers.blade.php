@extends('includes.master')

@section('title')
Careers | Debt-in
@endsection


@section('style')

<style>
.our-experience {
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.sp-two {
    padding: 120px 0 90px;
}
.pr-lg-5, .px-lg-5 {
    padding-right: 3rem !important;
}
.pl-lg-5, .px-lg-5 {
    padding-left: 3rem !important;
}
.sec-title {
    position: relative;
    margin-bottom: 50px;
    margin-top: -5px;
}
.sec-title h1 {
    font-size: 42px;
    font-weight: 700;
    line-height: 1.1em;
    text-transform: capitalize;
}
.mb-30 {
    margin-bottom: 30px !important;
}
.our-experience .tab-list {
    margin-bottom: 30px;
    border-bottom: 1px solid
    #d9d7d8;
}
.tab-list {
    position: relative;
    margin-top: 30px;
}
.our-experience .tab-list li {
    position: relative;
    margin-right: 30px;
    margin-bottom: 0px;
}
.tab-list li {
    position: relative;
    margin-bottom: 20px;
    display: inline-block;
}
.our-experience .tab-list li a {
    position: relative;

    font-size: 18px;
    font-weight: 600;
    padding-bottom: 15px;
    display: inline-block;
}
.tab-list li a.active-btn {

    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}
.our-experience .tab-list li a::before {
    position: absolute;
    content: '';
    width: 0%;
    height: 2px;
    background-color:
    #a3c53b;
    left: 0;
    bottom: 0;
    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}
.our-experience .tab-list li a.active-btn::before {
    width: 100%;
}
.our-experience .tab-list li a::before {
    position: absolute;
    content: '';
    width: 0%;
    height: 2px;
    background-color:
    #a3c53b;
    left: 0;
    bottom: 0;
    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}


/** Style **/
#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 370px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #a3c53a !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

.card-text{
  margin-bottom: 0px;
}


.sp-two {
    padding: 120px 0 90px;
}
.grey-bg {
    background-color: #f7f8f9 !important;
}
.sec-title.style-two {
    margin-top: 20px;
}
.sec-title {
    position: relative;
    margin-bottom: 50px;
    margin-top: -5px;
}

.sec-title.style-two .big-title {
    bottom: 30px;
}

.sec-title h1 {
    font-size: 42px;

    font-weight: 700;
    line-height: 1.1em;
    text-transform: capitalize;
}
.mb-80 {
    margin-bottom: 80px !important;
}
.text {
    font-size: 16px;

}
.timeline-container {
    position: relative;
    overflow: hidden;
}
.timeline-container .timeline-block {
    position: relative;
    margin-bottom: 30px;
}
.timeline-container .timeline-block::before {
    content: '';
    position: absolute;
    left: 10px;
    top: 34px;
    height: 150%;
    border-right: 3px solid
    #d4d6d9;
}
.timeline-container .timeline-block::after {
    content: '';
    position: absolute;
    left: 1.2px;
    top: 10px;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color:
    #4e81b6;
}
.timeline-container .timeline-block .inner-box {
    position: relative;
    padding-left: 70px;
    min-height: 144px;
    z-index: 1;
}
.timeline-container .timeline-block .inner-box .left-info {
    position: absolute;
    left: 0px;
    top: 15px;
    width: 200px;
    padding-left: 70px;
}
.timeline-container .timeline-block .date {
    position: absolute;
    left: 0px;
    top: 50%;
    margin-top: -15px;
    line-height: 30px;
    color:
    #4e81b6;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
}
.timeline-container .timeline-block .date strong {
    font-size: 30px;
    font-weight: 700;
    display: block;
}
.timeline-container .timeline-block .text-content {
    position: relative;
    line-height: 2em;
}
.timeline-container .timeline-block h4 {
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 5px;

}

.list-group-item{
  border: .0625rem solid white;
  padding: 0rem 1rem;
}


.media .fa {
  width: 55px;
font-size: 20px;
height: 55px;
line-height: 55px;
border-radius: 50%;
border: 1px dashed #535353;
text-align: center;
margin-right: 20px;
}

.media{
  padding: 15px 0px;
}


.debtin-topbar-wrapper.debtin-textcolor-white, .debtin-topbar-wrapper.debtin-textcolor-white a {
    color:
    rgba(255,255,255,.95);
}
.debtin-topbar-wrapper {
    line-height: 49px;
}

.debtin-bgcolor-darkgrey{
  background-color: #32325d;
}
.debtin-topbar-wrapper .top-contact.text-left {
    position: relative;
    float: left;
    line-height: 50px;
}
.top-contact.debtin-highlight-left {
    margin-right: 15px;
    padding-right: 5px;
}
.top-contact {
    list-style: none;
    margin: 0;
        margin-right: 0px;
    padding: 0;
        padding-right: 0px;
    font-size: 13px;
    display: inline-block;
    position: relative;
}



/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}




.margin-forfulltime {
    margin: 0px;
        margin-top: 0px;
    margin-top: 0px;
    margin-top: 30px;
    background-color:
    #f5f5f5;
    height: 200px;
}


.recnt-1stpart-a {
    float: left;
}
.recnt-1stpart-a img {
    margin: 30px 0px 10px 10px;
}
.recnt-1stpart-b {
    padding-left: 20px;
    padding-top: 38px;
    padding-bottom: 20px;
    float: left;
}
.recnt-1stpart-b h2 {
    color: #426c9b;
    font-family: 'Arimo', sans-serif;
    font-size: 14px;
    font-weight: 400;
    padding-bottom: 6px;
}
.recnt-1stpart-b h3 {
    color: #222222;
    font-family: 'Arimo', sans-serif;
    font-size: 20px;
    font-weight: 400;
    padding-bottom: 12px;
}
.recnt-1stpart-b h4 {
    color: #444444;
    font-family: 'Arimo', sans-serif;
    font-size: 14px;
    font-weight: 400;
}

.recnt-1stpart-full-i span {
    font-size: 16px;
    color: #444444;
    margin-top: 50px;
    display: inline-block;
    font-family: 'Arimo', sans-serif;
    font-weight: 400;
}
.recnt-1stpart-full-money span {
    color: #444444;
    font-family: 'Arimo', sans-serif;
    font-weight: 400;
    font-size: 16px;
    margin-top: 50px;
    display: inline-block;
}
.recnt-1stpart-full-butn a {
    font-family: 'Arimo', sans-serif;
    font-size: 20px;
    font-weight: 400;
    background-image: linear-gradient(to right,
#a3c53b,
#a3c53b);
-webkit-box-shadow: 0px 0px 50px 1px rgba(8, 186, 239, 0.35);
box-shadow: 0px 0px 20px 1px
rgba(210, 255, 7, 0.35);
border: 0px;
color:
    #ffffff !important;
    padding: 7px 16px;
    border-radius: 3px;
    margin-top: 58px;
    margin-left: 100px;
    display: inline-block;
}

.cmp-JobListItem-timeTag {
    position: relative;
    bottom: 29px;
    left: 55px;
}
.margin-forfulltime:hover  h3{
    color: white;
}

.margin-forfulltime:hover  h4{
    color: white;
}

.margin-forfulltime:hover{
    background-image: linear-gradient(to right, #252745, #252745);
}
.margin-forfulltime:hover .recnt-1stpart-full-i span {
    color: #fff;
}
.margin-forfulltime:hover .recnt-1stpart-full-money span {
    color: #fff;
}
.recnt-1stpart-full-butn a:hover {
    background-image: linear-gradient(to right, #00b8ef, #58d2f5);
}

.recnt-1stpart-b h2 {
    color: #00b8ef;
    font-family: 'Arimo', sans-serif;
    font-size: 14px;
    font-weight: 400;
    padding-bottom: 6px;
}


.debtin-topbar-wrapper.debtin-textcolor-white, .debtin-topbar-wrapper.debtin-textcolor-white a {
    color:
    rgba(255,255,255,.95);
}
.debtin-topbar-wrapper {
    line-height: 49px;
}

.debtin-bgcolor-darkgrey{
  background-color: #32325d;
}
.debtin-topbar-wrapper .top-contact.text-left {
    position: relative;
    float: left;
    line-height: 50px;
}
.top-contact.debtin-highlight-left {
    margin-right: 15px;
    padding-right: 5px;
}
.top-contact {
    list-style: none;
    margin: 0;
        margin-right: 0px;
    padding: 0;
        padding-right: 0px;
    font-size: 13px;
    display: inline-block;
    position: relative;
}

.top-contact li:first-child {
    padding-left: 0px !important;
}
.top-contact li:last-child {
    padding-right: 22px !important;
}
.top-contact li {
    position: relative;
    z-index: 1;
    display: inline-block;
    padding-left: 15px;
    padding-right: 15px;
}
.top-contact li strong {
    font-weight: 500;
}
.top-contact {
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 13px;
    display: inline-block;
    position: relative;
}
.top-contact li:first-child {
    padding-left: 0px !important;
}
.top-contact li {
    position: relative;
    z-index: 1;
    display: inline-block;
    padding-left: 15px;
    padding-right: 15px;
}
.top-contact i {
    margin-right: 9px;
}

.top-contact.debtin-highlight-left::after, .top-contact.debtin-highlight-right::after {
    position: absolute;
    content: "";
    right: 0;
    top: 0;
    width: 5000px;
    height: 70%;
}
.btn-success_btn {
    color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
    rgba(0, 0, 0, .08);
}

.btn-success_btn:hover {
    color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
    rgba(0, 0, 0, .08);
}

.btn-success_btn {
    color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
    rgba(0, 0, 0, .08);
}
</style>
@endsection

@section('body')

    <!--page start-->
    <div class="page">

        <!-- preloader start -->

        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header debtin-header-style-classic">
            <!-- debtin-topbar-wrapper -->
            <div class="debtin-topbar-wrapper debtin-bgcolor-darkgrey debtin-textcolor-white clearfix">
                <div class="container">
                    <div class="debtin-topbar-content">
                        <ul class="top-contact debtin-highlight-left text-left">
                            <li><i class="fa fa-clock-o"></i><strong>Working Hours:</strong> Mon - Fri 07:00 - 20:00 | Sat 09:00 - 12:00 </li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@debt-in.co.za">info@debt-in.co.za</a></li>
                                <li><i class="fa fa-phone"></i>087 351 5109</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div><!-- debtin-topbar-wrapper end -->
            <!-- debtin-header-wrap -->
            <div class="debtin-header-wrap">
                <!-- debtin-stickable-header-w -->
                <div id="debtin-stickable-header-w" class="debtin-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner debtin-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index-2.html" title="Fondex" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo.jpg" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="header-btn">
                                      <a class="btn btn-success_btn" href="/portal">CLIENT PORTAL</a>
                                    </div>

                                    <div class="debtin-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="debtin-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                      <ul class="dropdown">
                                         <li><a href="/">HOME</a>

                                          </li>
                                          <li><a href="about">ABOUT</a>
                                          </li>
                                          <li><a href="solutions">SOLUTIONS</a>
                                          </li>
                                          <li class="active"><a href="careers">CAREERS</a>
                                          </li>

                                          <li><a href="contactus">CONTACT US</a>
                                          </li>

                                      </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- debtin-stickable-header-w end-->
            </div><!--debtin-header-wrap end -->
        </header><!--header end-->


 <div class="loading" id="loading" style="display: none;">Loading&#8230;</div>

        <div class="debtin-page-title-row">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="title-box debtin-textcolor-white">
                              <div class="page-title-heading">
                                  <h1 class="title">Career Opportunities</h1>
                              </div><!-- /.page-title-captions -->
                              <div class="breadcrumb-wrapper">
                                  <span>
                                      <a title="Homepage" href="index-2.html">View the available jobs listed below. </a>
                                  </span>

                              </div>
                          </div>
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container -->
          </div>

    <!--site-main start-->
    <div class="site-main">















        <!-- client-section -->
        <div class="debtin-row client-section clearfix" style="padding-top: 120px;">
          <div class="nder_wee" style="background-color: white;
          min-height: 250px; padding-top: 110px;  padding-bottom: 100px;">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="padding-bottom: 50px;">
                    <h2 class="text-center" style="font-weight: 600; line-height: 1.2; ">AVAILABLE JOBS</h2>
                     <hr style="width: 10%; margin-top: 0.2rem;
          margin-bottom: 2rem;
          border: 0;
              border-top-color: currentcolor;
              border-top-style: none;
              border-top-width: 0px;
          border-top: 2px solid #302742;">
          <p class="text-center">All available jobs are listed below, you can apply for a job that meets our requirements<br/> we currently have {{ count($content_title)}} jobs available</p>
                 </div>
              </div>



                     @for($i = 0; $i < count($content_title); $i++)
                      <div class="row margin-forfulltime">
                                  <div class="col-lg-9 col-md-10  p-0">
                                      <div class="recnt-1stpart-full">
                                          <div class="recnt-1stpart-a">
                                            <img src="debt-in_logo.jpg" class="img-fluid" alt="fill-time-img-logo1" style="width: 100px;position: relative;top: 18px;">
                                          </div>
                                          <div class="recnt-1stpart-b">
                                              <h2>Full Time</h2>
                                              <h3 style="position: relative;bottom: 15px;">    {{ $content_title[$i][0] }}</h3>
                                              <h4 style="position: relative;
bottom: 30px;">Posted:  {!! $time_ago[$i][0] !!}</div></h4>

                                          </div>
                                          <div class="clr"></div>
                                      </div>
                                  </div>


                                  <div class="col-lg-3 col-md-2 recnt-1stpart-full-butn" style="padding-top: 18px;">
                                      <a href="https://www.indeed.co.za/viewjob?jk={{ substr($links[$i][0],0,16) }} " target="#">View Job</a>


                                  </div>
                              </div>

                              @endfor
            </div>
        </div>
        <!-- client-section end-->

    </div><!--site-main end-->
    <!-- Modal -->
    <div class="modal fade" id="cvuploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin: 0px auto;" id="exampleModalLongTitle">Why not leave your CV on our database?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form enctype="multipart/form-data" action="{{ route('uploadform') }}" method="post">

              {{ csrf_field() }}
                 <div class="form-group">
                   <label class="label for-name">Your Full Name*</label>
                   <input type="text" class="form-control" name="name"  placeholder="Your First Name" />
                   @if($errors->has('name'))
                      <div class="alert alert-danger" style="margin-top: 10px;"> {{ $errors->first('name')}}</div>
                   @endif
                 </div>

                 <div class="form-group">
                   <label class="label for-name">Your Email*</label>
                   <input type="text" class="form-control" name="email"  placeholder="Your Email" />
                      @if($errors->has('email'))
                         <div class="alert alert-danger" style="margin-top: 10px;"> {{ $errors->first('email')}}</div>
                      @endif
                 </div>

                 <div class="form-group">
                   <label class="label for-name">Your Phone Number*</label>
                   <input type="text" class="form-control" name="phone"  placeholder="Your Phone Number" />
                   @if($errors->has('phone'))
                      <div class="alert alert-danger" style="margin-top: 10px;"> {{ $errors->first('phone')}}</div>
                   @endif
                 </div>

                 <div class="form-group">
                   <label class="label for-name">Your Cover Letter*</label>
                   <textarea class="form-control" name="cover_letter" rows="7" > </textarea>
                   @if($errors->has('cover_letter'))
                      <div class="alert alert-danger" style="margin-top: 10px;"> {{ $errors->first('cover_letter')}}</div>
                   @endif
                 </div>

                 <div class="form-group">
                   <label class="label for-name">Upload your CV*</label>
                   <input type="file" name="file" class="form-control" placeholder="upload CV" />
                 </div>


                 <div class="form-group">
                   @if(session('msg'))
                   <div class="alert alert-danger">
                     {{ session('msg') }}
                   </div>
                   @endif


                   <button type="submit" id="cvsubmit" class="btn btn-success_btn">Upload</button>
            </form>

          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- end Modal -->
    </div>








    <!-- Modal -->
    <div class="modal fade" id="success_submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin: 0px auto;" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span class="alert-inner--icon"><i class="far fa-check-circle" style="font-size: 40px;"></i></span>
     <span class="alert-inner--text"><strong>CV Submission Successful!</strong> Thank you for submitting your cv!</span>

    </div>

          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- end Modal -->



    <!-- Modal -->
    <div class="modal fade" id="success_subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="margin: 0px auto;" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
     <span class="alert-inner--icon"><i class="fas fa-envelope-open-text" style="font-size: 40px;"></i></span>
     <span class="alert-inner--text"><strong>Subscription Successful!</strong> You have successfully subscribed to our job alerts!</span>

    </div>

          </div>
          <div class="modal-footer">


          </div>
        </div>
      </div>
    </div>
    <!-- end Modal -->
    <footer class="footer widget-footer clearfix" style=" padding: 0rem 0;">

        <div class="second-footer debtin-textcolor-white">
            <div class="container">
                <div class="row">



                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                        <div class="widget widget_text  clearfix">
                            <h3 class="widget-title">About Debt-in</h3>
                            <div class="textwidget widget-text">
                                Debt-IN is registered with the Debt Collections Council (030355/08) as well as with the Financial Services Board and hold a Level 3 BBBEE verification rating.
                                <br><br>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <br/>


                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Quick Links</h3>
                            <ul id="menu-footer-services">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Solutions</a></li>
                                <li><a href="#">The Team</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Debtors Portal</a></li>
                                <li><a href="#/contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                           <h3 class="widget-title">Business Hours</h3>
                           <div class="textwidget widget-text">


                                <ul class="debtin-our-location-list">
                                    <li>Monday-Friday: 07H00 - 20H00</li>
                                    <li>Saturday: 08H00 - 13H00</li>
                                </ul>
                            </div>
                            <br/>
                            <br/><br/>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text debtin-textcolor-white">
            <div class="container">
                <div class="row copyright">

                    <div class="col-md-12">
                        <div class="">
                            <span>Copyright © 2020&nbsp;<a href="#">Debt-in</a>. All rights reserved.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <span>Debtin Consultants (PTY) Reg no. 2008/003683/07</span>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

@endsection

@section('script')
<script type="text/javascript">
$("#send_mail").click(function(){
  $("#loading").show();
   let name = $("#fname").val();
   let last_name = $("#lname").val();
   let cell = $("#cell").val();
   let email = $("#email").val();
   let message = $("#actual_message").val();

   if(name == "" || last_name == "" || cell == "" || email == "" || message == ""){
       $("#message").html("<div class='alert alert-danger'>Some fields are empty</div>");
         $("#loading").hide();
   }else{
     $.ajax({
    type: "POST",
    url: "{{ route('contactform') }}",
    data: $("#contactform").serialize(),
    success: function(response){
         if(response == "success"){
            $("#message").html("<div class='alert alert-success'>Message Sent successfully</div>");
            $("#send_mail").hide();
              $("#loading").hide();
         }
        },error: function(data){
               $("#loading").hide();
               $("#message").html("<div class='alert alert-danger'>Ooops, Please try again later</div>");
           var errors = data.responseJSON;
           $.each(errors, function(key,message){
              $("."+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
           });

        }
      });

   }

})
</script>

@endsection
