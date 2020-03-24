@extends('includes.master')

@section('title')
About | Debt-in
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

.dropdown.active a{
  color: rgba(0, 0, 0, .9);
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
                                        <li class="active"><a href="about">ABOUT</a>
                                        </li>
                                        <li><a href="solutions">SOLUTIONS</a>
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
                              <h1 class="title">About Us</h1>
                          </div><!-- /.page-title-captions -->
                          <div class="breadcrumb-wrapper">
                              <span>
                                  <a title="Homepage" href="index-2.html">Reputable debit recovery solutions and professional credit advisory services</a>
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
                                <h5>LEARN MORE ABOUT DEBT-IN</h5>
                                <h2 class="title" style="font-size: 30px;">At Debt-IN we aim to build long-term strategic relationships with our clients through our unsurpassed commitment to service excellence</h2>
                            </div>
                            <P class="title-desc">Our aim is to become the service provider of choice to reputable lenders and providers of incidental credit countrywide, in respect of unique debt recovery solutions and professional credit advisory services. </P>
                            <p>In collaboration with our clients, we develop strategies and workflow unique to each client’s operational environment. Your success is important to us. An experienced collections expert forms part of the engagement and management of your account, ensuring delivery of your strategy and desired outcomes. </p>
                            <p>Our people are at the core of everything we do. Teams receive regular account specific training in addition to continuous upskilling, calibration and side-by-side coaching, empowering them to achieve optimal outcomes. </p>
                            <p>As your brand ambassadors, we are custodians of your brand ensuring each engagement with your clients are conducted professionally, ethically and consistently every time, operating from a central communication platform, we guarantee an omni-channel experience. </p>
                            <p>With an Intrinsic understanding of the receivables cycle, we are highly effective in our approach to debt collections and credit control functions, and have the ability to customise our solutions quickly, and integrate into our client’s back office systems and processes seamlessly. We deliver both bespoke reporting or vanilla reporting extracted from our systems.</p>
                            <p>We partner with our clients, operating as an extension to their own teams and engage with our clients client’s as either Debt-IN or as our client. </p>
                            <p>At Debt-IN quality assurance isn’t just part of our process but a principle entrenched in how we train our employees and conduct our operations. We observe our agent’s calls and analyse the quality of the calls when dealing with debtors in line with our clients expectations.  </p>
                            <p>At Debt-IN we do not simply “audit calls” to ascertain if collectors are collecting money effectively, we ensure that our employees comply with the law at all times.</p>
                            <p>We use  internationally recognised quality software with external and internal quality specialists  determining the effectiveness of our agents performance based on measurable benchmarks.</p>
                            <p>We regularly re-evaluate our QA strategies to stay ahead of the industry, develop and change scripts when necessary.  Through continuous coaching interventions we strive to be the Best of the Best by not only focusing on “How much money?” but “How did we get that money?.”  </p>
                            <p>Debt-IN is registered with the Debt Collections Council (030355/08) as well as with the Financial Services Board and hold a Level 3 BBBEE verification rating.</p>
                        </div><!-- section title end -->


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-section end -->





  <section class="history-section grey-bg" style="padding: 80px 0 70px; ">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="content-section history-content">

                          <div class="sec-title style-two deep">

                              <h1>Our Services</h1>
                          </div>
                          <div class="text mb-80">
                            We either operate in your environment as ‘you’ servicing your clients or as Debit-IN,<br/> dependent on your need and preference.
                          </div>

                          <!--Timeline Container-->
                          <div class="timeline-container">
                              <div class="vertical-line"></div>

                              <!--Timeline Block-->
                              <div class="timeline-block">
                                  <div class="inner-box">
                                      <div class="left-info">

                                      </div>
                                      <div class="text-content">
                                          <h4>Experts in Debt Recovery</h4>
                                          <div class="text">Debt-IN is fast becoming the service provider of choice to reputable lenders and providers of incidental credit countrywide. It is Debt-IN’s unique recovery solutions and professional credit advisory services that set us apart.</div>
                                      </div>
                                  </div>
                              </div>

                              <!--Timeline Block-->
                              <div class="timeline-block">
                                  <div class="inner-box">
                                      <div class="left-info">

                                      </div>
                                      <div class="text-content">
                                          <h4>Credit and Distressed Debit Advisory Specialists</h4>
                                          <div class="text">Debt-IN has a superior track record, having delivered substantially improved recovery rates, and significant net cost savings for our clients.</div><br/>
                                          <div class="text">Debt-IN’s systems and processes have been developed to world class standards with our infrastructure designed to manage the entire revenue value chain. We normally require approximately 3 months for any credit control mandate to gain full traction. </div><br/>
                                          <div class="text">We will operate as your Credit Controllers, communicating with the customer as if they were communicating directly with you. This service includes:</div>
                                          <div class="text">
                                            <ol style="list-style: decimal;"><li>	Requesting remittance advices for unallocated payments</li>
<li>Allocating payments on your system</li>
<li>Following up on statements and invoices sent</li>
<li>Reconciling customer accounts</li>
<li>Resolving customer queries on the account</li>
</ol>
</div><br/>
<div class="text">Once we have fully understood our client’s internal processes, we define where we can add value to your operational processes and your brand. We typically take on work with a three phased approach; namely Normal Collection process, Soft Collection process, and Hard Collection process.</div>
                                      </div>
                                  </div>
                              </div>

                              <!--Timeline Block-->
                              <div class="timeline-block">
                                  <div class="inner-box">
                                      <div class="left-info">

                                      </div>
                                      <div class="text-content">
                                          <h4>Collections and Recovery</h4>
                                          <div class="text">Debt-IN offers a professional and effective debt recovery service to both large institutions and small businesses.</div><br/>
                                          <div class="text">Our services include:</div>
                                          <div class="text">
                                          <ul style="list-style: disc;">
                                            <li>	Customisable debt recovery</li>
<li>Customisable credit control solutions</li>
<li>Utilisable service components</li>


                                            <ul>
                                              </div>
                                          <div class="row mt-25">

                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="timeline-block">
                                  <div class="inner-box">
                                      <div class="left-info">

                                      </div>
                                      <div class="text-content">
                                          <h4>Consulting Services</h4>
                                          <div class="text">Debt-IN’s professional Consulting division was established to assist businesses with credit related challenges. </div><br/>
                                          <div class="text">Our services include:</div>
                                          <div class="text">
                                          <ul style="list-style: disc;">
                                            <li>		Valuations</li>
<li>	Assurances</li>
<li>	Critical analyses and turnaround strategies</li>


                                            <ul>
                                              </div>
                                          <div class="row mt-25">

                                          </div>
                                      </div>
                                  </div>
                              </div>



                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </section>







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

                                <br/>
                            <ul class="debtin-our-location-list">
                                <li>Monday-Friday: 07H00 - 20H00</li>
                                <li>Saturday: 08H00 - 13H00</li>
                            </ul>
                        </div>

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


</div><!-- page end -->


<!-- Javascript -->
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
