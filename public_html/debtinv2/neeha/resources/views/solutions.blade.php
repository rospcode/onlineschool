@extends('includes.master')

@section('title')
Solutions | Debt-in
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
                                          <li class="active"><a href="solutions">SOLUTIONS</a>
                                          </li>
                                          <li><a href="careers">CAREERS</a>
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


        <div class="debtin-page-title-row">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="title-box debtin-textcolor-white">
                              <div class="page-title-heading">
                                  <h1 class="title">Our Solutions</h1>
                              </div><!-- /.page-title-captions -->
                              <div class="breadcrumb-wrapper">
                                  <span>
                                      <a title="Homepage" href="index-2.html">Service excellence based on knowledge, performance and infrastructure.</a>
                                  </span>

                              </div>
                          </div>
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container -->
          </div>

    <!--site-main start-->
    <div class="site-main">



        <!-- about-section -->
        <section class="debtin-row about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class=" res-991-pr-0">
                            <!-- section title -->
                            <div class="section-title res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>MORE SOLUTIONS OFFERED BY DEBT-IN</h5>
                                     <h2 class="title">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection. </h2>
                                </div>
                                <P class="title-desc">Our expertise spans across industries and verticals and are able to assist Business owners and entrepreneurs, Financial Institutions, Municipalities, Telco’s to name a few.</P>
                                <p>Debt-IN’s mission is to achieve the status of preferred service provider of debt collection and related solutions to reputable large-scale credit providers and providers of incidental credit countrywide.  Furthermore, Debt-IN aims to assist its clients with solutions tailor-made to their specific business requirements, and throughout the growth of their business to maintain their unsurpassed commitment to service excellence. </p>

                            </div><!-- section title end -->


                        </div>
                    </div>

                      <div class="col-lg-6" style="margin-top: 70px;">
         <h5 style="font-weight: 600;">COLLECTIONS AND RECOVERY</h5>
        <p style="text-align: justify;">Debt-IN offers a professional and effective debt recovery service to both large institutions and small business.</p>

      <p style="font-weight: 600;">Our solution includes: </p>


<ul class="list-group list-group-flush list my--3" style="padding-top: 0px;">
    <li class="list-group-item px-0">
<div class="row align-items-center">
    <div class="col-auto">
      <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
    </div>
    <div class="col">
        <p>Customised debt recovery solutions</p>
    </div>
</div>
    </li>

    <li class="list-group-item px-0">
<div class="row align-items-center">
    <div class="col-auto">
      <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
    </div>
    <div class="col">
        <p>Customised credit control solutions</p>
    </div>
</div>
    </li>


    <li class="list-group-item px-0">
<div class="row align-items-center">
    <div class="col-auto">
      <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
    </div>
    <div class="col">
        <p>Utilisable service components</p>
    </div>
</div>
    </li>
</ul>



       </div>



     <div class="col-lg-6" style="margin-top: 70px;">
         <h5 style="font-weight: 600;">CONSULTING SERVICES</h5>
       <p style="text-align: justify;">Debt-IN’s Professional Consulting division was established to assist businesses with credit-related challenges.</p>
       <p style="font-weight: 600;">Our solution includes: </p>

       <ul class="list-group list-group-flush list my--3" style="padding-top: 0px;">
           <li class="list-group-item px-0">
       <div class="row align-items-center">
           <div class="col-auto">
             <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
           </div>
           <div class="col">
               <p>Valuations</p>
           </div>
       </div>
           </li>

           <li class="list-group-item px-0">
       <div class="row align-items-center">
           <div class="col-auto">
             <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
           </div>
           <div class="col">
               <p>Assurance</p>
           </div>
       </div>
           </li>


           <li class="list-group-item px-0">
       <div class="row align-items-center">
           <div class="col-auto">
             <i class="fa fa-arrow-right" style="position: relative;left: 10px;bottom: 6px;"></i>
           </div>
           <div class="col">
               <p>Critical analyses and turnaround strategies</p>
           </div>
       </div>
           </li>
       </ul>
       </div>


                </div>
            </div>
        </section>
        <!-- about-section end -->











    </div><!--site-main end-->

    <!--footer start-->
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


</div><!-- page end -->
@endsection

@section('script')
<script>
//Tabs
if($('.tab-box').length){
  //Tabs
  $('.tab-box .tab-list .tab-btn').on('click', function(e) {
    e.preventDefault();
    var target = $($(this).attr('href'));
    $('.tab-box .tab-list .tab-btn').removeClass('active-btn');
    $(this).addClass('active-btn');
    $('.tab-content .tab-item').fadeOut(0);
    $('.tab-content .tab-item').removeClass('active-tab');
    $(target).fadeIn(300);
    $(target).addClass('active-tab');
  });
}
</script>
@endsection
