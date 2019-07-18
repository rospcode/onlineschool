<?php $__env->startSection('page'); ?>
Graduates
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Graduates</span><br>
                </h2>

                <p>
                  Theses students graduated for the course
                </p>
                <a href="/a/graduates_users/list" class="btn btn-success">View AS List</a>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
          <?php $__currentLoopData = $graduates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if( count($user->getGraduate) != 0): ?>
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">

                        <img alt="image" class="rounded-circle" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>">


                        <h3 class="m-b-xs"><strong><?php echo e($user->name); ?> <?php echo e($user->surname); ?></strong></h3>

                        <div class="font-bold"><?php echo e($user->id_number); ?></div>
                        <hr/>
                        <address class="m-t-md">
                            <strong>Courses Graduated</strong><br>
                            <?php $__currentLoopData = $user->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($course->getCourse['course_title']); ?> -

                            <?php if($course->course_marks < 50): ?>
                                <sd style="color: red;"> <?php echo e($course->course_marks); ?>%<sd><br/>
                               <?php elseif($course->course_marks >= 50 && $course->course_marks <= 100): ?>

                                <?php if($course->course_marks >= 75): ?>
                                <sd style="color: green;"><?php echo e($course->course_marks); ?>% Passed Distinction</sd><br/>
                                <?php else: ?>
                                <sd style="color: green;"><?php echo e($course->course_marks); ?>% Passed</sd><br/>
                                <?php endif; ?>

                            <?php endif; ?>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a href="/a/profile/<?php echo e($user->id); ?>" class="btn btn-xs btn-white"><i class="fa fa-group"></i> View Profile </a>

                        </div>
                    </div>

                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('notifications'); ?>
  <?php if(session('msg')): ?>

<script type="text/javascript">

$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Successfully', "<?php echo e(session('msg')); ?>");

    }, 1300);
  });

    </script>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>