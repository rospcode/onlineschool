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
                <a href="/a/graduates_users/all" class="btn btn-primary">View AS Row</a>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>

<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
      <div class="ibox ">
          <div class="ibox-title">
              <h5>Graduates: Ordered By latest </h5>
            
          </div>
          <div class="ibox-content">




              <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
          <tr>
              <th>Count</th>
              <th>User-ID</th>
              <th>Avatar</th>
              <th>Name</th>
              <th>Course</th>
              <th>Course Marks</th>
              <th>Date Graduated</th>

          </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            <?php $__currentLoopData = $graduates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if( count($user->getGraduate) != 0): ?>
          <tr class="gradeX">
            <td><?php echo $count; ?></td>

            <td><?php echo e($user->id); ?></td>
              <td class="client-avatar"><img alt="image" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>"> </td>
              <td><?php echo e($user->name); ?> <?php echo e($user->surname); ?>

              </td>
              <td>  <?php $__currentLoopData = $user->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($course->getCourse['course_title']); ?><br/>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                <td class="center">
                  <?php $__currentLoopData = $user->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


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

               </td>
               <td>
                 <?php $__currentLoopData = $user->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($course->getCourse['created_at']); ?><br/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </td>


          </tr>
          <?php $count++; ?>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




          </tfoot>
          </table>
              </div>

          </div>
      </div>
  </div>
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