<?php $__env->startSection('page'); ?>
Add Category | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
  return $str;
}

 ?>

 <div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Viewing Files For: <?php echo e($course->course_title); ?> Course</span><br/>
                </h2>

                <p>
                  You can view all course files below.
                </p>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>


<div class="row">

<div class="col-lg-12">
<div class="ibox ">
<div class="ibox-title">
    <h5>Files List </h5>

</div>
<div class="ibox-content">
    <div class="row">

    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>

                <th>#</th>
                <th>File Name </th>
                <th>Date Uploaded </th>
                <th>Downloads</th>
                <th>File Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $count = 1; ?>
           <?php $__currentLoopData = $course->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo e($files->file_name); ?></td>
                <td><?php echo e($files->created_at); ?></td>
                <td><button type="button" class="btn btn-primary m-r-sm"><?php echo e($files->downloads); ?>0</button></td>

                <td><i class="fa fa-circle" style="color: #1ab394; font-size: 21px;"></i></td>

                <td>
                  
                  </td>
            </tr>
            <?php $count++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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