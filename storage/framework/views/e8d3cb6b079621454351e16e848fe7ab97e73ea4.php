<?php $__env->startSection('page'); ?>
Home
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>

<link type="text/css" href="<?php echo e(asset('home/profile.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
      <!-- font awesome -->
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
      <!--  javascript -->
      <script src="<?php echo e(asset('assets/js/simplebar.js')); ?>"></script>
      <script src="<?php echo e(asset('assets/js/uikit.js')); ?>"></script>
      <style>
      [dir="ltr"] .container, [dir="ltr"] .container-fluid {
   padding-right: 1.5rem;
   padding-left: 1.5rem;
}
</style>
       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>

<?php $count = 0; ?>
<?php $__currentLoopData = auth()->user()->getEnrolled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $en): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($en->courses_id == $course->id): ?>
       <?php $count++; ?>
       <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php
  if($count == 0){
     echo "<script>window.history.back()</script>";
  }
 ?>

 <div class="course-dhashboard-2 topic1">
     <div class="uk-container course-intro-content uk-padding-remove-bottom">
         <div uk-grid="" class="uk-grid">
             <div class="uk-width-1-3@m uk-first-column">
                 <div class="uk-inline uk-visible-toggle">
                     <img src="<?php echo e(asset('img/courses')); ?>/<?php echo e($course->course_img); ?>" alt="">

                 </div>
             </div>
             <div class="uk-width-2-3@m info">
                 <h2 class="uk-light uk-text-uppercase uk-text-bold uk-text-white"> <?php echo e($course->course_title); ?>   </h2>
                 <p class="uk-light uk-text-bold">These are all the files available for this course <?php echo e(auth()->user()->name); ?> <?php echo e(auth()->user()->surname); ?>, you can view these documents for your own study gain. </p>
                 <!-- students images  -->
                 <div class="avatar-group uk-margin" uk-scrollspy="target: > img; cls:uk-animation-slide-right; delay: 200">

                     <img src="<?php echo e(asset('img/logo.jpg')); ?>" alt="" style="width: 110px; border-radius: 1px;" class="uk-scrollspy-inview uk-animation-slide-right">

                 </div>
                 <div class="uk-grid-small uk-width-2-3@m uk-grid" uk-grid="">


                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- navigation-->
 <ul class="uk-tab uk-flex-center uk-margin-remove-top uk-background-default uk-sticky" cls-active="uk-background-muted" uk-sticky="animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up ; media: @s;offset:85" uk-tab="" style="">
   <li aria-expanded="true"  class="uk-active">
       <a href="#">  About </a>
   </li>
     <li aria-expanded="false">
         <a href="#"> Course contents  </a>
     </li>

     <li aria-expanded="false">
         <a href="#"> Exercise  </a>
     </li>


 </ul><div class="uk-sticky-placeholder" style="height: 59px; margin: 0px 0px 20px -20px;" hidden=""></div>
 <ul class="uk-switcher uk-margin uk-padding-small uk-container-small uk-margin-auto  uk-margin-medium-top">

   <!-- tab 1 About the course -->
   <li class="uk-active">
     <h2>About this course</h2>
     <?php echo $course->course_notes; ?>

   </li>
   <!-- tab 3 Reveiws -->


     <!--  tab  -->
     <li >
         <ul uk-accordion="" class="uk-accordion">
             <li class="uk-open tm-course-lesson-section uk-background-default">
                 <a class="uk-accordion-title uk-padding-small" href="#"><h6> Documents</h6> <h4 class="uk-margin-remove"> Documents to get you started</h4> </a>
                 <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false">
                     <div class="tm-course-section-list">
                         <ul>
                            <?php $__currentLoopData = $course->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($files->file_type == "Content"): ?>
                           <li>
                               <i class="fas fa-file-alt uk-margin-small-right icon-medium"></i>
                               <?php echo e($files->file_name); ?>

                               <a class="uk-icon-button uk-margin-small-right uk-button-success uk-position-center-right" href="<?php echo e(asset('img/documents')); ?>/<?php echo e($files->file); ?>"> <i class="fas fa-download icon-small"></i> </a>
                           </li>
                           <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                         </ul>
                     </div>
                 </div>
             </li>

         </ul>

     </li>

     <!-- Exercise-Files  -->
     <li>
                 <ul uk-accordion="" class="uk-accordion">



                     <!-- accordion 3 -->
                     <li class="tm-course-lesson-section uk-background-default">
                         <a class="uk-accordion-title uk-padding-small" href="#"> <h6> Available </h6> <h4 class="uk-margin-remove"> Execerises</h4></a>
                         <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="true" hidden="">
                             <!-- Exerice files-->
                             <ul class="uk-active uk-background-default uk-accordion" uk-accordion="">
                                 <li class="uk-open tm-course-lesson-section">
                                     <a class="uk-accordion-title uk-padding-small uk-background-muted uk-padding-remove-bottom" href="#"> <h6> <i class="fas fa-folder"></i>   All Exercises</h6> </a>
                                     <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false">
                                         <div class="tm-course-section-list">
                                             <ul>
                                                <?php $__currentLoopData = $course->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($files->file_type == "Exercise"): ?>
                                                 <li>
                                                     <i class="fas fa-file-alt uk-margin-small-right icon-medium"></i>
                                                     <?php echo e($files->file_name); ?>

                                                     <a class="uk-icon-button uk-margin-small-right uk-button-success uk-position-center-right" href="<?php echo e(asset('img/documents')); ?>/<?php echo e($files->file); ?>"> <i class="fas fa-download icon-small"></i> </a>
                                                 </li>
                                                 <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                             </ul>
                                         </div>
                                     </div>
                                 </li>

                             </ul>
                         </div>
                     </li>

                 </ul>

     </li>


</ul>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>