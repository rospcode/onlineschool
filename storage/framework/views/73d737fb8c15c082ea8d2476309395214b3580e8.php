<?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php echo e($c->getenrolled); ?>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
