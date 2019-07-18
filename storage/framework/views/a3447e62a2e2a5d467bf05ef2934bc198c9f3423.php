<?php $__env->startSection('page'); ?>
Results for search
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('searchname'); ?>
<?php echo e($search_name); ?>

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
       [dir="ltr"] .container, [dir="ltr"] .container-fluid {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
</style>
       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>

<section id="gallery-view" >

<div class="">

           <ul class="uk-switcher switcher-container">
               <li>
                   <div class="topic1 hero-bg">
                       <div uk-grid>
                           <div class="uk-width-1-2@m">
                               <h1 class="uk-animation-fade"> Search Results  </h1>
                               <p>we found <?php echo e(count($getcourses)); ?> results from your search: '<?php echo e($search_name); ?>' </p>
                           </div>
                           <div class="uk-width-1-2@m uk-visible@m">

                           </div>
                       </div>
                   </div>
               </li>

                   <div class="topic1 hero-bg">
                       <h1> Search Results </h1>
                       <h6><?php echo e($search_name); ?> </h6>
                   </div>
               </li>



           </ul>
           <!-- mobile catagory button-->
           <button class="uk-button uk-hidden@m  mobile-catagory-button" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible"> Open subcatagory </button>
           <ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible">
               <li class="uk-active">
                   <a href=""> Search </a>
               </li>




           </ul>
           <ul class="uk-switcher switcher-container">



               <li>
                   <!--  Web development -->
                   <div class="uk-container">
                       <div class="uk-clearfix boundary-align">
                           <div class="uk-float-left section-heading none-border">
                               <h2>Search results</h2>
                               <p>Browse for searched courses</p>
                           </div>

                       </div>
                       <!-- Filter course  -->


                       <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid>



                          <?php $__currentLoopData = $getcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getcourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <!-- Course   -->
                           <div>
                               <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                   <a href="/view/course/<?php echo e($getcourse->id); ?>" class="uk-link-reset">
                                       <img src="<?php echo e(asset('img/courses')); ?>/<?php echo e($getcourse->course_img); ?>" class="course-img">
                                       <div class="uk-card-body">
                                           <h4>
                          <?php echo e($getcourse->course_title); ?>

                          </h4>
                                           <p><?php if(strlen($getcourse->course_notes) > '150'): ?>
                                               <?php echo substr($getcourse->course_notes, 0,40); ?>...
                                               <?php else: ?>
                                               <?php echo $getcourse->course_notes; ?>

                                               <?php endif; ?>
                                           </p>
                                           <p>
                                                <strong>Duration:</strong> <?php echo e($getcourse->course_duration); ?>

                                           </p>
                                           <p>
                                                <strong>Time:</strong> <?php echo e($getcourse->course_time); ?>

                                           </p>
                                           <hr class="uk-margin-remove-top">
                                           <div class="uk-clearfix">
                                             <div class="uk-float-left">

                                                <a href="/view/course/<?php echo e($getcourse->id); ?>" class="btn btn-success">View More</a>

                                             </div>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </div>
                   </div>
               </li>
           </ul>
       </div>
</section>








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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>