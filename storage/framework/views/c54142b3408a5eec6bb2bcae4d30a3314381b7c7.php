<?php $__env->startSection('page'); ?>
Welcome to CapabilityHr
<?php $__env->stopSection(); ?>


<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
      <!-- font awesome -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
      <!--  javascript -->
      <script src="<?php echo e(asset('assets/js/simplebar.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/uikit.js')); ?>"></script>


      <style>

#home {
 padding:220px 0;
 position:relative;
 background:url("../img/Coaching2.jpg") no-repeat center center;
 background-color:#666;
 -webkit-background-size:cover;
 -moz-background-size:cover;
 background-size:cover;
 background-color:#0D0D0D;
 min-height:600px;
 color:#FFF;
 text-shadow: 2px 2px black;
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
/*# sourceMappingURL=style.css.map */

</style>
      <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="lb-sticky-subnav lb-link-underline" data-lb-comp="sticky-subnav"  id="undernav"  data-lb-page-path="/training/" data-lb-comp-registered="true">
  <div class="container">
<div class="lb-row lb-row-max-large lb-snap">
 <div class="lb-tiny-24 lb-sticky-subnav-content">
  <div class="lb-sticky-subnav-title" style="margin: 0px auto;">
   <a class="lb-txt-none lb-none-pad lb-txt lb-current-page-link" style="padding-right:30px;" href=""> Certification</a>
   <a class="lb-txt-none lb-none-pad lb-txt" style="padding-right:30px;" href=""> Recertification</a>
   <a class="lb-txt-none lb-none-pad lb-txt" style="padding-right:30px;" href=""> Training Overview</a>
   <a class="lb-txt-none lb-none-pad lb-txt" style="padding-right:30px;" href=""> Courses </a>

   <a class="lb-txt-none lb-none-pad lb-txt" style="padding-right:30px;" href="/gallery"> Achievements</a>
   <a class="lb-txt-none lb-none-pad lb-txt" href=""> FAQs</a>
  </div>
  <div class="lb-sticky-subnav-links" style="max-height: none;">
  </div>
 </div>
</div>
</div>
</div>

<section id="home" class="home featured promo section">
  <div class="container intro text-center" id="welcome-h1">

    <h1 class="title" >Empowering people to become A-Players</h1>
    <p class="summary">To deliver quality, relevant training that will afford our trainees
    the ability to improve themselves and reach their full potential.</p>



  </div><!-- .container -->
</section>


<div class="undermain" style="min-height: 104px; background-color: #28a9e5 !important; padding: 0 0 20px;">
<div class="container" style="max-width: 1340px;">
<div class="row">
<div class="col-lg-4">
<div class="">
<img class="img-responsive" id="img-nav"  src="img/check.svg"  style="width: 80px; padding-top: 12px; Color: white; float: left;"/>
<div class="how-works text-center" >
<b style="font-size: 21px;
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
<b style="font-size: 21px;
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
<b style="font-size: 21px;
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


                <h2>Welcome To Capability</h2>
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
<h1 class="text-center">Getting Started</h1>
<p class="text-center" style="font-size: 16.65px;">Being certified in your field of expertise makes it easier to find jobs in this fast growing industry. classroom training gives you a more hands own experience in your field. Why not start now.</p>


</div>


<div class="row" style="padding-top:40px;">
 <div class="col-lg-4">
     <img src="https://www.accuray.com/wp-content/uploads/training-classroom.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
     <div class="parent" style="padding-top: 14px;">
<h2 class="text-center">Classroom Training</h2>
<p class="text-center">We provide practical classroom training to have a more hands on approach</p>


</div>
 </div>
 <div class="col-lg-4">
   <img src="img/book.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
   <div class="parent" style="padding-top: 14px;">
<h2 class="text-center">e-Learning Courses</h2>
<p class="text-center">Study online, at your own pace to upskill or become certified in your field</p>

</div>
 </div>
 <div class="col-lg-4">
   <img src="img/certificate.svg" style="width: 140px; margin: 0px auto;" class="img-responsive">
   <div class="parent" style="padding-top: 14px;">
<h2 class="text-center">Get Certified</h2>
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
<h1 class="text-center">Courses</h1>
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

                                              <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                                    <?php if($course->status != "Down"): ?>

                                                 <!-- Course   -->
                                              <div>
                                                  <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                                      <a href="/view/course/<?php echo e($course->id); ?>" class="uk-link-reset">
                                                          <img src="<?php echo e(asset('img/courses')); ?>/<?php echo e($course->course_img); ?>" class="course-img">
                                                          <div class="uk-card-body">
                                                              <h4>
                                                                <?php if(strlen($course->course_title) > '30'): ?>
                                                                   <?php echo substr($course->course_title, 0,30); ?>...
                                                                    <?php else: ?>
                                                                    <?php echo e($course->course_title); ?>

                                                                   <?php endif; ?>
                   </h4>
                                                              <p><?php if(strlen($course->course_notes) > '150'): ?>
                                                                  <?php echo substr($course->course_notes, 0,200); ?>...
                                                                  <?php else: ?>
                                                                  <?php echo $course->course_notes; ?>

                                                                  <?php endif; ?>
                                                              </p>
                                                              <p>
                                                                   <strong>Duration:</strong> <?php echo e($course->course_duration); ?>

                                                              </p>
                                                              <p>
                                                                   <strong>Time:</strong> <?php echo e($course->course_time); ?>

                                                              </p>

                                                              <hr class="uk-margin-remove-top">
                                                              <div class="uk-clearfix">
                                                                <div class="uk-float-left">

                                                                   <a href="/view/course/<?php echo e($course->id); ?>" class="btn btn-success">View More</a>



                                                                </div>
                                                              </div>
                                                          </div>
                                                      </a>
                                                  </div>
                                              </div>
                                              <?php endif; ?>


                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>