@extends('includes.master')
@section('title')
Welcome to Debt-in
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

    <div class="page">

        <header id="masthead" class="header debtin-header-style-classic">

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
            </div>
            <div class="debtin-header-wrap">

                <div id="debtin-stickable-header-w" class="debtin-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner debtin-stickable-header">
                            <div class="container">

                                <div class="site-branding">
                                    <a class="home-link" href="index-2.html" title="Fondex" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo.jpg" alt="logo-img">
                                    </a>
                                </div>
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
                                         <li class="active"><a href="/">HOME</a>

                                          </li>
                                          <li><a href="about">ABOUT</a>
                                          </li>
                                          <li><a href="solutions">SOLUTIONS</a>
                                          </li>
                                          <li><a href="careers">CAREERS</a>
                                          </li>

                                          <li><a href="contactus">CONTACT US</a>
                                          </li>

                                      </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner rev_slider_4_1_height" data-version="5.4.8.1">

                <ul>
                    <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/slides/slider-mainbg-001.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{ asset('Homepage.jpg') }}"  alt="" title="home-main-sliderbg01"  width="1920" height="730" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption debtin-textcolor-skincolor tp-resizeme" id="slide-1-layer-1" data-x="['left','left','center','center']" data-hoffset="['50','50','-628','-684']" data-y="['top','top','middle','middle']" data-voffset="['159','159','-116','46']"
                        data-fontsize="['14','14','12','11']"
                        data-fontweight="['600','600','700','700']"
                          data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-visibility="['on','on','off','off']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":140,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        >WELCOME TO DEBT-IN</div>

                        <div class="tp-caption tp-resizeme"
                        id="slide-1-layer-2"
                        data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                        data-y="['top','top','middle','middle']" data-voffset="['185','185','-107','-87']"

                        data-fontsize="['60','60','50','40']"
                        data-lineheight="['75','75','75','60']"
                        data-fontweight="['700','700','700','700']"
                        data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":380,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        > CREDIT AND DISTRESSED DEBT </div>


                        <div class="tp-caption tp-resizeme"
                            id="slide-1-layer-3"
                            data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['257','257','-46','-38']"

                            data-fontsize="['60','60','50','40']"
                            data-lineheight="['75','75','75','60']"
                            data-fontweight="['700','700','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":540,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            > ADVISORY SPECIALISTS </div>


                        <div class="tp-caption tp-resizeme"
                            id="slide-1-layer-4"
                            data-x="['left','left','center','center']" data-hoffset="['50','50','-702','-702']"
                            data-y="['top','top','middle','middle']" data-voffset="['350','350','247','247']"

                            data-fontsize="['16','16','14','14']"
                            data-lineheight="['26','26','24','24']"
                            data-fontweight="['400','400','400','400']"
                            data-color="['rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)','rgb(222,222,222)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":830,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >Committed to a sustainable collections process and an undertaking to <br/>protect our clients’ brand and reputation </div>

                        <a class="tp-caption skin-flat-button tp-resizeme" href="/contactus" target="_self"
                            id="slide-1-layer-5"
                            data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['452','452','39','31']"
                            data-fontsize="['13','13','12','11']"
                            data-lineheight="['13','13','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-actions=''
                            data-responsive_offset="on"
                            data-frames='[{"delay":910,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[16,16,14,12]"
                            data-paddingright="[35,35,30,25]"
                            data-paddingbottom="[16,16,14,12]"
                            data-paddingleft="[35,35,30,25]"
                            >CONTACT US </a>


                    </li>




                </ul>
            </div>
        </div>

    <div class="site-main">




        <section class="debtin-row about-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class=" res-991-pr-0">

                            <div class="section-title res-991-pr-0 clearfix">
                                <div class="title-header">
                                    <h5>WHO WE ARE</h5>
                                    <h2 class="title">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection</h2>
                                </div>
                                <P class="title-desc">Founded in 2008, Debt-IN is owned and managed by young entrepreneurial professionals with extensive experience in the financial/business arenas. Based in Durban CBD, our call centre has the ability to collect throughout South Africa, and have successfully assisted Retail, Private and Public Sector clients with debtor book turnarounds of varying sizes and complexities. </P>
                                <p>Debt-IN is a professional financial services business that specialises in credit and the recovery of distressed debt, operating its own specialist debt collection centre and creating unique strategies for its clients in order to significantly improve their collection results. </p>
                                <p>At Debt-IN we apply our extensive credit expertise and intellectual resources in formulating unique, customised solutions for your credit and debt recovery challenges. Intensive training programmes and supervised mentorships equip our staff with finely tuned negotiation skills essential to the debt recovery process. These skills combined with highly performance driven remuneration packages translate into exceptional collection results. </p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="our-experience grey-bg sp-two" style="background-image:url(reasons-to-believe-header.jpg);">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 pr-lg-5">
                      <div class="sec-title deep">
                        <p>At Debt-IN we aim to build long-term strategic relationships with our clients through our unsurpassed commitment to service excellence. Our aim is to become the service provider of choice to reputable lenders and providers of incidental credit countrywide, in respect of unique debt recovery solutions and professional credit advisory services. </p>
                        <p>In collaboration with our clients, we develop strategies and workflow unique to each client’s operational environment. Your success is important to us. An experienced collections expert forms part of the engagement and management of your account, ensuring delivery of your strategy and desired outcomes.</p>
                        <p>Our people are at the core of everything we do. Teams receive regular account specific training in addition to continuous upskilling, calibration and side-by-side coaching, empowering them to achieve optimal outcomes.</p>
                      </div>
                  </div>
                  <div class="col-lg-6 pl-lg-5">
                      <div class="sec-title deep">
                          <div class="big-title">DEBT-IN HAS OVER</div>
                          <h1>10 Year’s of Experience</h1>
                      </div>
                      <div class="tab-box mb-30">
                          <ul class="tab-list" style="padding: 0 0 0 0px;">
                              <li><a href="#tab-one" class="active-btn tab-btn">Our Mision</a></li>
                              <li><a href="#tab-two" class="tab-btn">Our Vision</a></li>
                              <li><a href="#tab-three" class="tab-btn">Our Values</a></li>
                          </ul>
                          <div class="tab-content">
                              <div class="tab-item active-tab" id="tab-one">
                                  <div class="text">To become the number one collections agency in South Africa.</div>
                              </div>
                              <div class="tab-item" id="tab-two">
                                  <div class="text">To be the Best of the Best.</div>
                              </div>
                              <div class="tab-item" id="tab-three">
                                  <div class="text">Sincerity | Integrity | Team Spirit | Accountability | Diversity | Learning</div>
                              </div>
                          </div>
                      </div>


                  </div>
              </div>
          </div>
      </section>


        <section class="debtin-row broken-section debtin-bgcolor-grey clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative skin-border text-left">

                            <div class="debtin_single_image-wrapper with-top-border mt_12">
                                <img class="img-fluid" src="images/single-img-two.jpg" title="single-img-one" alt="single-img-one">
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">

                        <div class="debtin-bg debtin-col-bgcolor-yes debtin-bgcolor-white spacing-1 z-1">
                            <div class="debtin-col-wrapper-bg-layer debtin-bg-layer"></div>
                            <div class="layer-content">

                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>WHY CHOOSE US</h5>
                                        <h2 class="title"></h2>
                                    </div>
                                </div>
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="">
                                          <a href="single-services.html">
                                          <img src="deb.png" class="img-responsive" style="width: 50px;">
                                          </a>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Credit and Distressed Debt</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Debt-IN has a superior track record, having delivered substantially improved recovery rates, and significant net cost savings for our clients.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>

                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="">
                                          <a href="single-services.html">
                                          <img src="older.png" class="img-responsive" style="width: 50px;">
                                          </a>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Experts in debt recovery and debit control</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Debt-IN is fast becoming the service provider of choice to reputable lenders and providers of incidental credit countrywide, as well as medium sized businesses. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>

                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="">
                                          <a href="single-services.html">
                                          <img src="archive.png" class="img-responsive" style="width: 50px;">
                                          </a>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Collections and recovery</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Debt-IN offers a professional and effective debt recovery service to both large institutions and small businesses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>


                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<!-- client quotes -->
        <section class="" style="margin-top: 100px;">
            <div class="debtin-row-wrapper-bg-layer debtin-bg-layer"></div>
            <div class="fluid-container" style=" padding-top: 60px;">
              <div class="row">
                <div class="col-lg-6">
                  <img src="team.jpg" class="img-responsive">
                </div>
                <div class="col-lg-6" style="padding-left: 0px;">

          <div id="clientsquotes" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#clientsquotes" data-slide-to="0" class="active"></li>
         <li data-target="#clientsquotes" data-slide-to="1"></li>
         <li data-target="#clientsquotes" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <div style="height: 533px; background-color: #32325d;">
           <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
   font-size: 56px;
   position: absolute;
   top: 35%;
   transform: translate(-50%, -50%);
   left: 25%;
   text-align: center;"></i>
             <div class="quote" style="position: absolute;
   top: 50%;
   transform: translate(-50%, -50%);
   left: 50%;
   text-align: center;">


   <p style="position: relative;
   margin-bottom: 0;
   color: #FFF;
   font-size: 20px;
   line-height: 30px; text-align: justify;">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection.

   </p>
   <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
font-size: 56px;
position: absolute;
top: 118px;
transform: translate(-50%, -50%);
left: 93%;
text-align: center;"></i>

             </div>

           </div>
         </div>
         <div class="carousel-item">
           <div style="height: 533px; background-color: #32325d;">
           <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
   font-size: 56px;
   position: absolute;
   top: 35%;
   transform: translate(-50%, -50%);
   left: 25%;
   text-align: center;"></i>
             <div class="quote" style="position: absolute;
   top: 50%;
   transform: translate(-50%, -50%);
   left: 50%;
   text-align: center;">


   <p style="position: relative;
   margin-bottom: 0;
   color: #FFF;
   font-size: 20px;
   line-height: 30px; text-align: justify;">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection.

   </p>
   <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
font-size: 56px;
position: absolute;
top: 118px;
transform: translate(-50%, -50%);
left: 93%;
text-align: center;"></i>

             </div>

           </div>
         </div>
         <div class="carousel-item">
           <div style="height: 533px; background-color: #32325d;">
           <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
   font-size: 56px;
   position: absolute;
   top: 35%;
   transform: translate(-50%, -50%);
   left: 25%;
   text-align: center;"></i>
             <div class="quote" style="position: absolute;
   top: 50%;
   transform: translate(-50%, -50%);
   left: 50%;
   text-align: center;">


   <p style="position: relative;
   margin-bottom: 0;
   color: #FFF;
   font-size: 20px;
   line-height: 30px; text-align: justify;">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection.

   </p>

   <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
 font-size: 56px;
 position: absolute;
 top: 118px;
 transform: translate(-50%, -50%);
 left: 93%;
 text-align: center;"></i>

             </div>

           </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#clientsquotes" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#clientsquotes" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>



                </div>
              </div>
            </div>
        </section>


        <section class="debtin-row debtin-bg debtin-bgimage-yes bg-img3 team-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">

                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h2>OUR TEAM MEMBER</h2>
                                <pclass="title">Operating in dynamically fast paced environments, our team is our, and your, success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>

                <div class="row">
                    <div class="wrap-team team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="true">

                        <div class="featured-imagebox featured-imagebox-team">
                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                              <div class="mainflip">
                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                              <p><img class=" img-fluid" src="images/Mark-Essey.jpg" alt="card image"></p>
                                              <h4 class="card-title">Mark Essey</h4>
                                              <p class="card-text" style="font-weight: 700;">MANAGING DIRECTOR</p>
                                              <hr style="width: 8%; margin-top: 3px;
               margin-bottom: 8px;
               border: 0;
                   border-top-color: currentcolor;
                   border-top-style: none;
                   border-top-width: 0px;
               border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                              <p class="card-text">B.Com. B.Com Honours. ACMA.</p>
                                              <p class="card-text" style="padding-top: 8px;">Mark founded Debt-IN in 2008. His... </p>

                                          </div>
                                      </div>
                                  </div>
                                  <div class="backside">
                                      <div class="card">
                                          <div class="card-body text-center mt-4">
                                              <h4 class="card-title">Mark Essey</h4>
                                              <p class="card-text">Mark founded Debt-IN in 2008. His hands on approach, keen operational insight, and extensive financial experience, gleaned from over a decade in the financial sector working with blue chip industry leaders, has led to the companies great success in the debt collection and credit recovery market.</p>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


                        <div class="featured-imagebox featured-imagebox-team">
                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                              <div class="mainflip">
                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                              <p><img class=" img-fluid" src="images/Hena-Sugudhav.jpg" alt="card image"></p>
                                              <h4 class="card-title">Hena Sugudhav</h4>
                                              <p class="card-text" style="font-weight: 700;">OPERATIONS DIRECTOR</p>
                                              <hr style="width: 8%; margin-top: 3px;
                  margin-bottom: 8px;
                  border: 0;
                   border-top-color: currentcolor;
                   border-top-style: none;
                   border-top-width: 0px;
                  border-top: .0625rem solid rgba(0, 0, 0, .1);">
                  <p class="card-text">B.Com B COM HONOURS</p>
                                              <p class="card-text" style="padding-top: 8px;">Hena joined Debt-IN right at its inception, where she, like founding... </p>

                                          </div>
                                      </div>
                                  </div>
                                  <div class="backside">
                                      <div class="card">
                                          <div class="card-body text-center mt-4">
                                              <h4 class="card-title">Hena Sugudhav</h4>
                                              <p class="card-text">Hena joined Debt-IN right at its inception, where she, like founding partner Mark Essey, helped man the phones. Today she has grown to become an integral, loyal member of the team, with a wealth of unrivalled experience in the industry. She is responsible for ensuring our commitment to service excellence.</p>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


                        <div class="featured-imagebox featured-imagebox-team">
                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                              <div class="mainflip">
                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                              <p><img class=" img-fluid" src="images/paul.jpg" alt="card image"></p>
                                              <h4 class="card-title">Paul Odayar</h4>
                                              <p class="card-text" style="font-weight: 700;">OPERATIONS MANAGER</p>
                                              <hr style="width: 8%; margin-top: 3px;
                  margin-bottom: 8px;
                  border: 0;
                   border-top-color: currentcolor;
                   border-top-style: none;
                   border-top-width: 0px;
                  border-top: .0625rem solid rgba(0, 0, 0, .1);">
                  <p class="card-text">Dip Business Management </p>
                                              <p class="card-text" style="padding-top: 8px;">Paul joined Debt-IN in 2014 as a Senior Training Manager... </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="backside">
                                      <div class="card">
                                          <div class="card-body text-center mt-4">
                                              <h4 class="card-title">Paul Odayar</h4>
                                              <p class="card-text">Paul joined Debt-IN in 2014 as a Senior Training Manager, managing the sourcing, screening,
                                                   interviewing and training of new entrants into the Debt-IN environment.  Having an in-depth
                                                   understanding of outbound dialler activity and the ability to analyse dialler-output data to identify
                                                   potential problems/issues, Paul is now Operations Manager focusing on developing strategies that
                                                   increase revenue for both inbound and outbound calls.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


                        <div class="featured-imagebox featured-imagebox-team">
                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                              <div class="mainflip">
                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                              <p><img class=" img-fluid" src="images/Justin-Farry.jpg" alt="card image"></p>
                                              <h4 class="card-title">Justin Farry</h4>
                                              <p class="card-text" style="font-weight: 700;">FINANCIAL DIRECTOR</p>
                                              <hr style="width: 8%; margin-top: 3px;
                  margin-bottom: 8px;
                  border: 0;
                   border-top-color: currentcolor;
                   border-top-style: none;
                   border-top-width: 0px;
                  border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                              <p class="card-text">B.COMPT HONOURS CPA.</p>
                                              <p class="card-text" style="padding-top: 8px;">Joining Debt-IN in 2016 as the CFO tasked with growing the company... </p>

                                          </div>
                                      </div>
                                  </div>
                                  <div class="backside">
                                      <div class="card">
                                          <div class="card-body text-center mt-4">
                                              <h4 class="card-title">Justin Farry</h4>
                                              <p class="card-text">Joining Debt-IN in 2016 as the CFO tasked with growing the company, Justin brought with him extensive experience and a reputation for impressive financial and operational execution in high pressure environments (both locally and in the United States).</p>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>


                        <div class="featured-imagebox featured-imagebox-team">
                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                              <div class="mainflip">
                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                      <div class="card">
                                          <div class="card-body text-center">
                                              <p><img class=" img-fluid" src="images/John-Essey.jpg" alt="card image"></p>
                                              <h4 class="card-title">John Essey</h4>
                                              <p class="card-text" style="font-weight: 700;">DIRECTOR</p>
                                              <hr style="width: 8%; margin-top: 3px;
                  margin-bottom: 8px;
                  border: 0;
                   border-top-color: currentcolor;
                   border-top-style: none;
                   border-top-width: 0px;
                  border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                              <p class="card-text">B.Com. B.Com Honours. CA(SA).</p>
                                              <p class="card-text" style="padding-top: 8px;">John joined the Debt-IN team in 2010, bringing... </p>

                                          </div>
                                      </div>
                                  </div>
                                  <div class="backside">
                                      <div class="card">
                                          <div class="card-body text-center mt-4">
                                              <h4 class="card-title">John Essey</h4>
                                              <p class="card-text">John joined the Debt-IN team in 2010, bringing diverse (local and international) experience from within the financial sector with him. His insight and approach unlocks unseen potential in debtors’ books.</p>

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

        <div class="debtin-row client-section clearfix">
            <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-2"></div>
                  <div class="col-md-6 col-sm-8">

                      <div class="section-title text-center with-desc clearfix">
                          <div class="title-header">
                              <h2>OUR CLIENTS</h2>

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-2"></div>
              </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="debtin-client clients-slide owl-carousel owl-theme owl-loaded mt-5" data-item="5" data-nav="false" data-dots="true" data-auto="true">
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip">
                                        <img class="img-fluid" src="africanbank.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip" >
                                        <img class="img-fluid" src="fnb.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip">
                                        <img class="img-fluid" src="telkom.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip">
                                        <img class="img-fluid" src="standard.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip">
                                        <img class="img-fluid" src="woolworths.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box debtin-box-view-boxed-logo">
                                <div class="client">
                                    <div class="debtin-client-logo-tooltip">
                                        <img class="img-fluid" src="unnamed.png" alt="image">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


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



</div>



  @endsection

@section('script')
  <script>

  if($('.tab-box').length){

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
