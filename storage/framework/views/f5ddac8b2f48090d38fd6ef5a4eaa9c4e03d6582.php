<?php $__env->startSection('page'); ?>

 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>
 <link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.css')); ?>">
       <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
       <!-- font awesome -->
       <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.css')); ?>">
       <!--  javascript -->
       <script src="<?php echo e(asset('assets/js/simplebar.js')); ?>"></script>
       <script src="<?php echo e(asset('assets/js/uikit.js')); ?>"></script>
       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>

 <!-- // END drawer-layout -->
 <div class="container-fluid page__container">


                         <div class="alert alert-success d-flex align-items-center card-margin">
                           <i class="fa fa-graduation-cap"></i>
                           <div class="text-body" style="margin-left: 10px; "> Welcome <strong><?php echo e(auth()->user()->name); ?> <?php echo e(auth()->user()->surname); ?> </strong> to your account.</div>
                           <a href="/u/profile" class="btn btn-outline-primary ml-auto">Profile</a>
                         </div>

                         <div class="row">

                             <div class="col-lg-12">



                             </div>
                         </div>
                     </div>




 <div class="container-fluid page__container">

<form action="#" class="mb-3 border-bottom pb-3">
<div class="d-flex">


<div class="form-inline ml-auto">
<div class="form-group mr-3">
   <label for="custom-select" class="form-label mr-1">My Courses</label>

</div>

</div>
</div>
</form>



<div class="row">



<?php $__currentLoopData = $get_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-12">
<div class="card">
<div class="card-body">

   <div class="d-flex flex-column flex-sm-row">
       <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
           <img src="<?php echo e(asset('img/courses')); ?>/<?php echo e($course[0]->course_img); ?>" alt="Card image cap" class="avatar-course-img">
       </a>
       <div class="flex" style="min-width: 200px;">
           <div class="d-flex">
               <div>
                   <h4 class="card-title mb-1"><a href="/u/view/course/<?php echo e($course[0]->id); ?>"><?php echo e($course[0]->course_title); ?></a></h4>
                   <p class="text-muted">
                    <?php echo substr($course[0]->course_notes, 0,230); ?>...
                   </p>
               </div>
               <div class="dropdown ml-auto">
                   <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                       <i class="material-icons">more_vert</i>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="#">Course Files <span class="badge badge-success rounded-circle badge-notifications ml-auto">
                       <?php $__currentLoopData = $course[0]->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if( $files['file_type'] == "Content"): ?>
                              <?php echo e(count($files)); ?>

                         <?php endif; ?>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </span></a>
                       <a class="dropdown-item" href="#">Course Execerises <span class="badge badge-success rounded-circle badge-notifications ml-auto">
                         <?php $__currentLoopData = $course[0]->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($files['file_type'] != "Content"): ?>
                                 <?php if($files['file_type'] == null): ?>
                                 0
                                 <?php else: ?>
                                   <?php echo e(count($files)); ?>

                                 <?php endif; ?>

                                <?php else: ?>


                           <?php endif; ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </span></a>

                   </div>
               </div>
           </div>
           <div class="d-flex align-items-end">
               <div class="d-flex flex flex-column mr-3">
                   <div class="d-flex align-items-center py-2 border-bottom">
                       <span class="mr-2"></span>
                       <small class="text-muted ml-auto"><?php echo e(count($course[0]->getFiles)); ?> FILES</small>
                   </div>
                   <div class="d-flex align-items-center py-2">
                     <button type="button" class="btn btn-primary">
                     <span class="mr-2">Start Date:</span>

    <?php echo e($course[0]->created_at->toDateString()); ?>

</button>

                   </div>
               </div>
           </div>
       </div>
   </div>

</div>
</div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






</div>

</div>
 <!-- jQuery -->



 <div class="container-fluid page__container">
 <form action="#" class="mb-3 border-bottom pb-3">
 <div class="d-flex">


 <div class="form-inline ml-auto">
 <div class="form-group mr-3">
   <label for="custom-select" class="form-label mr-1">Graduated Courses</label>

 </div>

 </div>
 </div>
 </form>



 <div class="row">



 <?php $__currentLoopData = auth()->user()->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



 <div class="col-md-12">
 <div class="card">
 <div class="card-body">

    <div class="d-flex flex-column flex-sm-row">
        <a href="#" class="avatar mb-3 w-xs-plus-down-100 mr-sm-3">
            <img src="<?php echo e(asset('img/courses')); ?>/<?php echo e($grad->getCourse->course_img); ?>" alt="Card image cap" class="avatar-course-img">
        </a>
        <div class="flex" style="min-width: 200px;">
            <div class="d-flex">
                <div>
                    <h4 class="card-title mb-1"><a href=""><?php echo e($grad->getCourse->course_title); ?></a></h4>
                    <p class="text-muted">
                     <?php echo substr($grad->getCourse->course_notes, 0,140); ?>...
                    </p>
                </div>
                <div class="dropdown ml-auto">

                </div>
            </div>
            <div class="d-flex align-items-end">
                <div class="d-flex flex flex-column mr-3">
                    <div class="d-flex align-items-center py-2 border-bottom">
                        <span class="mr-2">Start Date: <?php echo e($grad->getCourse->created_at->toDateString()); ?> <br/>End Date: <?php echo e($grad['created_at']->toDateString()); ?> </span>
                        <small class="text-muted ml-auto"><?php echo e(count($grad->getCourse->getFiles)); ?> FILES</small>
                    </div>
                    <div class="d-flex align-items-center py-2">
                      <span class="mr-2">Course Mark:</span>


                       <?php if($grad['course_marks'] < 50): ?>
                            <span class="mr-2" style="color: red;"><?php echo e($grad['course_marks']); ?>% Failed</span>
                          <?php elseif($grad['course_marks'] >= 50 && $grad['course_marks'] <= 100): ?>

                           <?php if($grad['course_marks'] >= 75): ?>
                            <span class="mr-2" style="color: green;"><?php echo e($grad['course_marks']); ?>% Distinction</span>
                           <?php else: ?>
                              <span class="mr-2" style="color: green;"><?php echo e($grad['course_marks']); ?>% Passed</span>
                           <?php endif; ?>

                       <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
    </div>

 </div>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>

 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>