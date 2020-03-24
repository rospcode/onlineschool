@extends('frontend.layouts.master')
@section('page')
Gallery
 @endsection

 @section('style')
 <style>
 #about-us-2 {
     position: absolute;
     top: 50%;
     left: 49%;
     transform: translate(-50%, -50%);
     color: white;
     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
 }
 </style>
 @endsection

 @section('content')
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

<div class="aboutUs-heading-2">
<div class="about-img-2"></div>
<div class="row justify-content-around" id="about-us-2">
  <div class="col-lg-12" style="max-width: 100%; flex: 100%;">
    <h2 style="font-size: 40px;
font-weight: 600;
line-height: 1.33;">Gallery</h2>


  </div>


</div>

</div>

<section id="gallery-view" style="padding-top: 2px;">
<!-- Page Content -->
<div class="container page-top">

<h1 class="ui header text-center">
<img src="img/school.png">
<div class="content">
 Trainee Awards Ceremony

</div>
<br/>
 <div class="sub header" style="padding: 17px;">Our Trainees were awarded with certificates upon completion of their Course.</div>
</h1>

<div class="mbr-gallery-filter container gallery-filter-active">
    <ul buttons="0">

        <li>{{ $gallery->links()}}</li>


    </ul>
</div>

   <div class="row">

        @foreach($gallery as $img)
       <div class="col-lg-3 col-md-4 col-xs-6 thumb">
           <a href="img/gallery/{{ $img->id}}.jpg" class="fancybox" data-fancybox="gallery" rel="ligthbox">
               <img  src="img/gallery/{{ $img->id}}.jpg" class="zoom img-fluid " data-fancybox="gallery"  alt="">

           </a>
       </div>
       @endforeach


  </div>




</div>
</div>








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
 @section('script')

 <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
@endsection
