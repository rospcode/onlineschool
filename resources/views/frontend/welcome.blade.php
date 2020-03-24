@extends('frontend.layouts.master')
@section('page')
Welcome to CapabilityHr
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
      #home {

      padding-top: 17rem;
      padding-bottom: 17rem;
      background: linear-gradient(
      rgba(96, 96, 96, 0.45),
          rgba(187, 187, 187, 0.45) ), url(debtin_background.jpg) no-repeat center center fixed;
      }
#home .intro .title,
#home .intro .summary {
 margin:0 auto 15px
}
#home .search-wrap {
 max-width:600px;
 margin-top:50px
}
.section h2.section-heading:first-child {
 margin-bottom:60px
}
#signup-promo {
 font-size:18px
}
#signup-promo a.btn {
 margin-left:10px
}
.item-list .content-area .post p {
 margin-bottom:10px
}
.item-list .post.item .entry-wrap {
 padding:20px
}
.item-list .item .entry-thumbnail .label {
 background:#2EB9DE;
 font-size:14px;
 position:absolute;
 right:-7px;
 top:15px;
 min-width:50px;
 display:inline-block;
 line-height:24px;
 height:30px;
 border-radius:4px 4px 0 4px;
 -moz-background-clip:padding;
 -webkit-background-clip:padding-box;
 background-clip:padding-box
}
.item-list .item .entry-thumbnail .label:after {
 content:"";
 display:block;
 width:0;
 height:0;
 border-color:transparent;
 border-style:solid;
 position:absolute;
 right:0;
 top:30px;
 border-width:0 0 7px 7px;
 border-left-color:#1C8FAE
}
.item-list .post .post-time,
.item-list .post .post-comments {
 display:none
}
.item-list .post .meta .post-author {
 padding-left:0
}
.item-list .post .meta .post-author:before {
 content:none
}
.post .entry-carousel .entry-demo {
 margin-top:30px
}
#itemCarousel {
 overflow:hidden
}
#itemCarousel.carousel img {
 margin:0 auto;
 max-height:450px
}
.title{

  color: white;
}
.post .entry-carousel {
 padding:10px;
 background-color:#F5F5F5;
 margin-bottom:80px;
 border-radius:4px
}
.carousel-caption {
 width:100%;
 background:rgba(0,0,0,0.5);
 left:0;
 bottom:0;
 padding:0;
 text-shadow:none
}
.carousel-caption p {
 color:#ffffff;
 margin:0 !important;
 padding:25px 10px
}
ul#itemTabs li a {
 padding:8px 12px
}
.post .tab-pane h2.critic-reviews-title,
.post .tab-pane .post-comments>h3 {
 display:none
}
.post .tab-pane img {
 max-width:100%
}
#sidebar.search-sidebar,
#sidebar.popular-sidebar {
 margin-bottom:60px
}
#sidebar .search-sidebar-wrap,
#sidebar .popular-sidebar-wrap {
 background-color:#F5F5F5;
 padding:20px;
 margin-right:20px;
 border-radius:4px
}
#sidebar .search-sidebar-wrap label {
 font-weight:normal
}
#sidebar #cta-purchase .or {
 margin:25px 0;
 height:1px;
 background-color:#dfdfdf;
 text-align:center
}
#sidebar #cta-purchase .or span {
 background-color:white;
 position:relative;
 font-style:italic;
 top:-0.75em;
 padding:0 10px;
 font-size:inherit
}
#sidebar #cta-purchase p.note {
 padding-top:10px
}
#sidebar .no-sale {
 font-style:italic
}
#sidebar #item-details ul {
 border-top:1px solid #EDEDED
}
#sidebar #item-details li {
 border-bottom:1px solid #EDEDED;
 padding:12px 0;
 margin:0;
 min-height:35px
}
#sidebar #item-details li i.fa {
 margin-right:8px
}
#sidebar #item-details li span {
 float:right;
 font-style:italic;
 color:#999
}
#sidebar #item-details li.item-admin-view {
 color:#3c763d
}
#sidebar .author-wrap {
 margin-bottom:20px
}
#sidebar .author-avatar {
 margin-right:20px
}
#sidebar #item-author p {
 font-size:14px
}
#sidebar #item-tags a,
#sidebar #item-tags a:hover,
#sidebar #item-compatibilities a,
#sidebar #item-compatibilities a:hover {
 color:#ffffff
}
#sidebar .popular-sidebar-wrap {
 margin-right:0;
 margin-left:20px
}
#sidebar .popular-wrap {
 padding:15px 0;
 line-height:1.6em;
 border-bottom:1px solid #e7eaec
}
#sidebar .popular-wrap>.pull-left {
 margin-right:15px
}
#sidebar .content-wrap {
 font-size:15px
}
#sidebar .popular-wrap span.label {
 background-color:#7dac54;
 border-color:#7dac54;
 color:#FFFFFF;
 position:absolute;
 margin:-3px 0 0 -6px;
 padding:2px 5px;
 font-size:16px
}
#sidebar .popular-meta {
 font-size:13px;
 color:#999
}
.steps {
 background:#f5f5f5;
 padding-top:80px;
 padding-bottom:120px
}
.steps .title {
 font-size:36px;
 font-weight:300;
 margin-top:0;
 margin-bottom:60px
}
.steps .step {
 padding:30px 60px;
 color:#666666
}
.steps .step .title {
 text-align:center;
 font-size:16px;
 margin-bottom:15px
}
.steps .step .title .number {
 width:90px;
 height:90px;
 display:block;
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 -ms-border-radius:50%;
 -o-border-radius:50%;
 border-radius:50%;
 -moz-background-clip:padding;
 -webkit-background-clip:padding-box;
 background-clip:padding-box;
 text-align:center;
 background:#ec6952;
 border:5px solid #f19180;
 color:#fff;
 margin:0 auto;
 padding-top:25px;
 font-size:26px;
 font-weight:bold;
 font-family:arial, sans-serif;
 margin-bottom:30px
}
.steps .step .title .text {
 color:#f19180;
 font-weight:bold;
 font-size:16px
}
.steps .btn-cta-primary {
 margin:0 auto;
 margin-top:60px;
 font-size:20px
}
@media (max-width: 767px) {
 #sidebar .search-sidebar-wrap {
  margin-right:0
 }
 .carousel-caption p {
  padding:5px;
  font-size:12px
 }
}
@media (max-width: 986px){
  #home{
    padding:60px 0;
    min-height: 400px;
  }
  #undernav{
    display: none;
  }
}

.word {
	font-family: 'Anton', sans-serif;
	perspective: 1000px;
	perspective-origin: 200px 40px;
}
.word span {
	cursor: pointer;
	display: inline-block;
	font-size: 45px;
	user-select: none;
	line-height: .8;
}

.word span:nth-child(1) {
	animation: balance 1.5s ease-out;
	transform-origin: 0% 100% 0px;
}

@keyframes balance {
	0%, 100% {
		transform: rotate(0deg);
	}

	30%, 60% {
		transform: rotate(-45deg);
	}
}

.word span:nth-child(2) {
	animation: shrinkjump 1s ease-in-out;
	transform-origin: bottom center;
}

@keyframes shrinkjump {
	10%, 35% {
		transform: scale(2, .2) translate(0, 0);
	}

	45%, 50% {
		transform: scale(1) translate(0, -150px);
	}

	80% {
		transform: scale(1) translate(0, 0);
	}
}

.word span:nth-child(3) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(4) {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}

	100% {
		transform: rotateY(360deg);
	}
}

.word span:nth-child(5) {
	animation: toplong 1.5s linear;
}

@keyframes toplong {
	10%, 40% {
		transform: translateY(-48vh) scaleY(1);
	}

	90% {
		transform: translateY(-48vh) scaleY(4);
	}
}

.word span:nth-child(6) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(7) {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}

	100% {
		transform: rotateY(360deg);
	}
}

.word span:nth-child(10) {
	animation: shrinkjump 1s ease-in-out;
	transform-origin: bottom center;
}

@keyframes shrinkjump {
	10%, 35% {
		transform: scale(2, .2) translate(0, 0);
	}

	45%, 50% {
		transform: scale(1) translate(0, -150px);
	}

	80% {
		transform: scale(1) translate(0, 0);
	}
}

.word span:nth-child(11) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}


.word span:nth-child(14) {
	animation: balance 1.5s ease-out;
	transform-origin: 0% 100% 0px;
}

@keyframes balance {
	0%, 100% {
		transform: rotate(0deg);
	}

	30%, 60% {
		transform: rotate(-45deg);
	}
}
.word span:nth-child(15) {
	animation: toplong 1.5s linear;
}

@keyframes toplong {
	10%, 40% {
		transform: translateY(-48vh) scaleY(1);
	}

	90% {
		transform: translateY(-48vh) scaleY(4);
	}
}
.word span:nth-child(16) {
	animation: balance 1.5s ease-out;
	transform-origin: 0% 100% 0px;
}

@keyframes balance {
	0%, 100% {
		transform: rotate(0deg);
	}

	30%, 60% {
		transform: rotate(-45deg);
	}
}

.word span:nth-child(17) {
	animation: shrinkjump 1s ease-in-out;
	transform-origin: bottom center;
}

@keyframes shrinkjump {
	10%, 35% {
		transform: scale(2, .2) translate(0, 0);
	}

	45%, 50% {
		transform: scale(1) translate(0, -150px);
	}

	80% {
		transform: scale(1) translate(0, 0);
	}
}

.word span:nth-child(18) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(19) {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}

	100% {
		transform: rotateY(360deg);
	}
}

.word span:nth-child(20) {
	animation: toplong 1.5s linear;
}

@keyframes toplong {
	10%, 40% {
		transform: translateY(-48vh) scaleY(1);
	}

	90% {
		transform: translateY(-48vh) scaleY(4);
	}
}

.word span:nth-child(21) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(22) {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}

	100% {
		transform: rotateY(360deg);
	}
}

.word span:nth-child(23) {
	animation: shrinkjump 1s ease-in-out;
	transform-origin: bottom center;
}

@keyframes shrinkjump {
	10%, 35% {
		transform: scale(2, .2) translate(0, 0);
	}

	45%, 50% {
		transform: scale(1) translate(0, -150px);
	}

	80% {
		transform: scale(1) translate(0, 0);
	}
}

.word span:nth-child(24) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(25) {
	animation: falling 2s ease-out;
	transform-origin: bottom center;
}

@keyframes falling {
	12% {
		transform: rotateX(240deg);
	}

	24% {
		transform: rotateX(150deg);
	}

	36% {
		transform: rotateX(200deg);
	}

	48% {
		transform: rotateX(175deg);
	}

	60%, 85% {
		transform: rotateX(180deg);
	}

	100% {
		transform: rotateX(0deg);
	}
}

.word span:nth-child(26) {
	animation: rotate 1s ease-out;
}

@keyframes rotate {
	20%, 80% {
		transform: rotateY(180deg);
	}

	100% {
		transform: rotateY(360deg);
	}
}
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
.font-weight-light {
    font-weight: 300 !important;
}
.display-4 {
    font-size: 1.6275rem;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: .5rem;
color:
#32325d;
}
</style>

      @endsection

@section('content')


<section id="home" class="home featured promo section">

<div class="container">
  <div class="row">
    <div class="col-lg-6">
    <h1 style="font-weight: 600 !important;color: #32325d; margin: 0 0 0px 0; font-size: 2.75rem;">CapabilityHR</h1>
    <h2 class="display-4 font-weight-light" style="margin-top: 0px;">A place of learning and development</h2>
    <p class="mt-4" style="color: #32325d; font-size: 1.4rem;">To deliver quality, relevant training that will afford our trainees the ability to improve themselves and reach their full potential.</p>
    <div class="mt-5">
                   <a href="pages/dashboards/dashboard.html" class="btn btn-white my-2">Signup</a>
                   <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-default my-2">Login</a>
                 </div>
    </div>
    <div class="col-lg-6">

    </div>
  </div>
</div>
</section>

<div class="undermain" style="min-height: 104px; background-color: #28a9e5 !important; padding: 0 0 20px;">
<div class="container" style="max-width: 1340px;">
<div class="row">
<div class="col-lg-4">
<div class="">
<img class="img-responsive" id="img-nav"  src="img/check.svg"  style="width: 80px; padding-top: 12px; Color: white; float: left;"/>
<div class="how-works text-center" >
<b style="font-size: 18.5px;
display: block;
font-weight: 600;
padding: 3px; color: white;
">Flexible Courses</b>
<div class="how-works__sub-title" >
Choose our Flexible Courses
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="">
<img class="img-responsive" id="img-nav" src="img/contract.svg"  style="width: 80px; padding-top: 12px; Color: white; float: left;"/>
<div class="how-works text-center" >
<b style="font-size: 18.5px;
display: block;
font-weight: 600;
padding: 3px;  color: white;
">Online Study Material</b>
<div class="how-works__sub-title" >
We provide online e-book learning
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="">
<img class="img-responsive" id="img-nav" src="img/classroom.svg"  style="width: 80px; padding-top: 12px; Color: white; float: left;"/>
<div class="how-works text-center" >
<b style="font-size: 18.5px;
display: block;
font-weight: 600;
padding: 3px;  color: white;
">Certified Teachers</b>
<div class="how-works__sub-title" >
Learn from the best
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section id="about" style="padding-top: 86px;">
<div class="container">



<div class="row">
<div class="col-xs-12 col-md-12  text-center">
  <div class="">
  <div class="" style="margin-bottom: 28px;">


                <h2>Welcome To CapabilityHR</h2>
            </div>
          <p> Due to our passion in training and development, we are committed to making a difference in our country by providing skills to individuals to either get employment opportunities, or upskilling staff to be more effective in their current roles. We offer certification off all our courses offered. our training and development's main aim is to provide skills necessary for people to get employed or upskilling staff. Businesses need employees with a wide variety of skills. Organizations need individuals with certain skills to help transform their business. Our Training and Certification helps you build and validate your skills. so you can be sure you’re learning the latest and keeping your computer skills fresh.

</p>

        </div>
</div>

</div>


</div>
</section>






<section id="log" style="padding-top: 124px;">
<div id="info">
<div class="container">
<div class="parent text-center" style="padding-top: 59px; Color: white;" >

<p style="font-size: 24px;
color: #fff;
line-height: 26px;
margin: 0px auto;
    margin-top: 0px;
    margin-bottom: 0px;">Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.

</p><br/>
<button type="button" class="btn btn-lg btn-success">Signup</button>
</div>
</div>
</div>
</section>

<section id="getting start" style="padding-top: 74px">
<div class="container">

<div class="parent">
<h2 class="text-center">Getting Started</h2>
<p class="text-center" style="font-size: 16.65px;">Being certified in your field of expertise makes it easier to find jobs in this fast growing industry. classroom training gives you a more hands own experience in your field. Why not start now.</p>


</div>


<div class="row" style="padding-top:40px;">
 <div class="col-lg-4">
     <img src="https://www.accuray.com/wp-content/uploads/training-classroom.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
     <div class="parent" style="padding-top: 14px;">
<h4 class="text-center">Classroom Training</h4>
<p class="text-center">We provide practical classroom training to have a more hands on approach</p>


</div>
 </div>
 <div class="col-lg-4">
   <img src="img/book.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
   <div class="parent" style="padding-top: 14px;">
<h4 class="text-center">e-Learning Courses</h4>
<p class="text-center">Study online, at your own pace to upskill or become certified in your field</p>

</div>
 </div>
 <div class="col-lg-4">
   <img src="img/certificate.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
   <div class="parent" style="padding-top: 14px;">
<h4 class="text-center">Get Certified</h4>
<p class="text-center">Become a well certified, skilled individual, take our course today.</p>

</div>
 </div>
</div>
</div>
</section>

<section id="coursesw" style="padding-top: 56px;">
<div class="panel-grid" id="pg-847-8"><div class="siteorigin-panels-stretch panel-row-style" data-stretch-type="full-stretched" style="margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px; border-left: 0px none; border-right: 0px none;"><div class="panel-grid-cell" id="pgc-847-8-0" style="padding-left: 0px; padding-right: 0px;">
<div class="so-panel widget widget_edupress-university-home-one-text-banner panel-first-child" id="panel-847-8-0-0" data-index="11"><div class="so-widget-edupress-university-home-one-text-banner so-widget-edupress-university-home-one-text-banner-default-d75171398898">
<section class="remaining">
<div class="container text-center">
    <span class="sow-icon-linearicons" data-sow-icon="" ></span>
  <div class="row text-center">
        <!--

          -->
           <!--
            <i class="lnr linearicons-lnr-graduation-hat"></i>
              -->

      <p>
    It has survived not only five centuries, but also the leap into electronic typesetting,<br>
remaining essentially unchanged.			</p>
    </div>
  </div>
</section></div></div><div class="so-panel widget widget_edupress-university-home-one-banner-with-button panel-last-child" id="panel-847-8-0-1" data-index="12"><div class="so-widget-edupress-university-home-one-banner-with-button so-widget-edupress-university-home-one-banner-with-button-default-d75171398898"><style>
.banner_with_btn1 {
  color:#ffffff !important;
  background:#4caf50 !important;
}
.banner_with_btn1:hover {
   color:#ffffff !important;
   background:#03a9f4 !important;
}
.banner_with_btn2 {
  color:#929ba6 !important;
  background:#ffffff !important;
}
.banner_with_btn2:hover
{
  color:#ffffff !important;
  background:#4caf50 !important;
}
</style>


</div></div></div><div></div></div></div>
</section>





<section id="getting start" style="padding-top: 74px">
<div class="container">
<h2 class="text-center">Courses</h2>
<p class="text-center">here is some of the courses we have for you, you can also view all of our courses</p>
<div class="row">


<div style="padding-top: 56px;">

                 <div class="col-md-12">
                   <div class="">


                              <!-- mobile catagory button-->

                              <ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible">


                    <li>

                    </li>




                              </ul>
                              <ul class="uk-switcher switcher-container">



                                  <li>
                                      <!--  Web development -->
                                      <div class="uk-container">

                                          <!-- Filter course  -->


                                          <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid>

                                              @foreach($courses as $course)


                                                    @if($course->status != "Down")

                                                 <!-- Course   -->
                                              <div>
                                                  <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                                      <a href="/view/course/{{$course->id}}" class="uk-link-reset">
                                                          <img src="{{ asset('img/courses') }}/{{ $course->course_img}}" class="course-img">
                                                          <div class="uk-card-body">
                                                              <h4>
                                                                @if(strlen($course->course_title) > '30')
                                                                   {!! substr($course->course_title, 0,30) !!}...
                                                                    @else
                                                                    {{ $course->course_title }}
                                                                   @endif
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
                                          <a href="/w/courses" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a>
                                      </div>
                                  </li>

                              </ul>

                              <!-- footer  end -->
                          </div>
    </div>
  </div>

 </div>

</div>
</section>

<section id="idsec" style="padding-top: 70px;">
<div class="beng" style="background-color: #f1f4f6; padding: 30px 30px;">
<div class="container">
<h2 class="text-center">Why CapabilityBPO</h2>
<div class="row">

<div class="col-lg-4">

<h4>Learn at Your Own Pace</h4>
<p>our courses give you freedom to work at your own pace, getting certified and on the field.</p>
</div>
<div class="col-lg-4">
<h4>Pick Your Course</h4>
<p>Choose the course revelant to you to help you gain more expertise in your field of choosing.</p>
</div>
<div class="col-lg-4">
<h4>Get  Certified</h4>
<p>With our reputational courses, you not only get the skills needed but also become certified.</p>
</div>
</div>
</div>
</div>
</section>
@endsection

@section('script')
<script type="text/javascript">
let spans = document.querySelectorAll('.word span');
spans.forEach((span, idx) => {
	span.addEventListener('click', (e) => {
		e.target.classList.add('active');
	});
	span.addEventListener('animationend', (e) => {
		e.target.classList.remove('active');
	});

	// Initial animation
	setTimeout(() => {
		span.classList.add('active');
	}, 750 * (idx+1))
});
</script>
@endsection
