@extends('home.layouts.master')
@section('page')
{{ $course->course_title }}
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

   <main>
       <div class="course-intro-3 topic1" style="padding-top: 1%; padding-bottom: 3%;">
           <div class="uk-container">
               <div class="uk-flex-bottom uk-grid uk-grid-stack" uk-grid="">
                   <div class="uk-width-2-3@m info uk-first-column">
                       <h2 class="uk-light uk-text-uppercase uk-text-bold uk-text-white uk-margin-top">{{ $course->course_title }} </h2>
                       <p class="uk-light uk-text-bold uk-text-small" style="font-weight: 400;
                       line-height: 1.6;
                       font-size: 17px;">
                         <i class="fas fa-star icon-small icon-rate"></i>
                         <i class="fas fa-star icon-small icon-rate"></i>
                         <i class="fas fa-star icon-small icon-rate"></i>

                          <i class="fas fa-star icon-small icon-rate"></i>
                           <i class="fas fa-star icon-small icon-rate"></i>
                         </p>
                         <p style="color: white;
font-size: 18px;">
                           <i class="fas fa-graduation-cap icon-small uk-margin-small-right"></i>
                           Course Duration: {{ $course->course_duration }}
                            <i class="fas fa-calendar icon-small uk-margin-small-right" aria-hidden="true" style="margin-left: 21px;"></i> Date Posted: 2019/02/02
                          </p>
                          <p style="color: white;
 font-size: 18px;">
                           <i class="fa fa-list-alt icon-small uk-margin-small-right" aria-hidden="true"></i>


                            Category: {{ $course-> getCategory->category_title }}

                           </p>
                       <p class="uk-light uk-text-bold uk-text-small">
                         </p>
                   </div>
               </div>
           </div>
       </div>
       <div class="uk-container">
           <div uk-grid="" class="uk-grid">
               <div class="uk-width-2-3@m uk-margin-top uk-first-column">
                   <h3 class="uk-margin-top"> About this Course</h3>
                   {!! $course->course_notes !!}
                   <div uk-grid="" class="uk-grid" style="padding-top: 10px;">
                       <div class="uk-width-expand uk-first-column">
                           Course content
</div>
                       <div class="uk-width-auto">
                           <span> {{ $course->course_duration}} :</span>
                           <span> {{ count($course->getFiles)}} Course Files </span>
                       </div>
                   </div><br/><br/>
                     <div class="alert alert-warning">To Access These Documents, You need to be a Registered User</div>
                   <ul uk-accordion="" class="uk-accordion">
                       <li class="uk-open tm-course-lesson-section uk-background-default">
                           <a class="uk-accordion-title uk-padding-small" href="#"><h6> Course Documents</h6> </a>
                           <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false">
                               <div class="tm-course-section-list">



                                     <ul uk-accordion="" class="uk-accordion">
                                         <li class="uk-open tm-course-lesson-section uk-background-default">

                                             <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false">
                                                 <div class="tm-course-section-list">
                                                     <ul>
                                                         @foreach($course->getFiles as $files)
                                                           @if($files->file_type == "Content")
                                                       <li>
                                                           <i class="fas fa-file-alt uk-margin-small-right icon-medium"></i>
                                                           {{ $files->file_name }}

                                                       </li>
                                                          @endif
                                                       @endforeach


                                                     </ul>
                                                 </div>
                                             </div>
                                         </li>

                                     </ul>




                               </div>
                           </div>
                       </li>

                   </ul>
                   <!-- Model  Preview videos-->
                   <div id="preview-video-1" uk-modal="" class="uk-modal">
                       <div class="uk-modal-dialog uk-margin-auto-vertical">
                           <button class="uk-modal-close-outside uk-close uk-icon" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
                           <div class="video-responsive">
                               <iframe src="https://www.youtube.com/embed/nOCXXHGMezU?enablejsapi=1" class="uk-padding-remove uk-responsive-width" uk-video="automute: true" allowfullscreen="" uk-responsive="" frameborder="0"></iframe>
                           </div>
                       </div>
                   </div>
                   <!-- Model  Preview videos-->
                   <div id="preview-video-2" uk-modal="" class="uk-modal">
                       <div class="uk-modal-dialog uk-margin-auto-vertical">
                           <button class="uk-modal-close-outside uk-close uk-icon" type="button" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
                           <div class="video-responsive">
                               <iframe src="https://www.youtube.com/embed/nOCXXHGMezU?enablejsapi=1" class="uk-padding-remove uk-responsive-width" uk-video="automute: true" allowfullscreen="" uk-responsive="" frameborder="0"></iframe>
                           </div>
                       </div>
                   </div>





               </div>
               <!-- Sidebar video  demo box -->
               <div class="uk-width-1-3@m uk-flex-last@s uk-flex-first">
                   <div class="course-intro-3-preview-video uk-sticky" uk-sticky="offset:160;bottom:true;animation: uk-animation-slide-top-medium; bottom ; media: @s" cls-active=" uk-box-shadow-large" style="">
                       <div class="uk-inline uk-visible-toggle">
                           <img src="{{ asset('img/courses') }}/{{ $course->course_img}}" alt="">

                       </div>
                       <div class="content-inner">
                           <p class="uk-margin-remove"> <span class="uk-text-large uk-text-bold">
  <a class="ui teal tag label">
    R{{ $course->course_cost}}
  </a>

 </span>   This Course Is Available!</p>
                           <p class="uk-margin-small "></p>
                           <hr/>
                           <div class="uk-child-width-1-2 uk-grid-small uk-grid" uk-grid="">

                             @if(auth()->check())

                             @if(auth()->user()->getCourseRequests != '[]')

                           @foreach(auth()->user()->getCourseRequests as $courserequests)
                           @if($courserequests->courses_id == $course->id)
                          <div class="uk-first-column">
                            <form method="post" action="{{ route('cancel.user.course') }}">
                              {{ csrf_field() }}
                              <input type="text" value="{{ $course->id }}" id="course_id" hidden="hidden" name="course_id"/>
                              <button type="submit" class="btn btn-danger btn-block" > Cancel </button>

                            </form>

                          </div>
                          @else
                          <form method="post" action="{{ route('request.user.course') }}">
                            {{ csrf_field() }}
                            <input type="text" value="{{ $course->id }}" id="course_id" hidden="hidden" name="course_id"/>
                            <button type="submit" class="btn btn-success btn-block" > Request </button>

                          </form>

                          @endif
                          @endforeach
                           @else
                           <div class="uk-first-column">
                             <form method="post" action="{{ route('request.user.course') }}">
                               {{ csrf_field() }}
                               <input type="text" value="{{ $course->id }}" id="course_id" hidden="hidden" name="course_id"/>
                               <button type="submit" class="btn btn-success btn-block" > Request </button>

                             </form>
                           </div>
                           @endif
                               @endif
                               <div>

                               </div>


                           </div>
                           <p class="uk-margin-small uk-text-small uk-text-bold" style="font-weight: 400;
                           line-height: 1.6;
                           font-size: 17px;"> This Course Includes: </p>
                           <div class="uk-child-width-1-2 uk-grid-small uk-text-small uk-grid" uk-grid="" style="font-size: 14px;">
                               <div class="uk-first-column">
                                   <span> FIles Access</span>
                               </div>
                               <div>
                                   <span> Course Exercises  </span>
                               </div>
                               <div class="uk-grid-margin uk-first-column">
                                   <span> Certificate:   </span>
                               </div>
                               <div class="uk-grid-margin">
                                   <span> {{ $course->course_title}}  </span>
                               </div>
                           </div>

                       </div>
                   </div><div class="uk-sticky-placeholder" style="height: 506px; margin: -260px 0px 0px;" ></div>
               </div>
           </div>
       </div>
   </main>

 </section>








 @endsection

 @section('notifications')
   @if (session('msg'))

 <script type="text/javascript">

 $(document).ready(function() {
     setTimeout(function() {
         toastr.options = {
             closeButton: true,
             progressBar: true,
             showMethod: 'slideDown',
             timeOut: 8000
         };
         toastr.success('Successfully', "{{ session('msg') }}");

     }, 1300);
   });

     </script>
 @endif
     @endsection
