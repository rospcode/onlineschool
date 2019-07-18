<?php $__env->startSection('page'); ?>
Home
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>

<link type="text/css" href="<?php echo e(asset('home/profile.css')); ?>" rel="stylesheet">

       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>



 <div class="container-fluid page__container page__heading d-flex align-items-center border-bottom  " style="max-width: 100%;">
                         <h1 class="mb-0" style="margin: 0px auto;">Change Password</h1>
                     </div>

 <div class="container-fluid page__container">

   <div class="uk-container">
     <div class="container page__container">
   <form action="<?php echo e(route('password.change')); ?>" method="post">
       <div class="row">
           <div class="col-lg-9" >
                 <?php echo e(csrf_field()); ?>

             <div class="page-section">
               <h4></h4>
               <div class="list-group list-group-form">
                 <div class="list-group-item">
                     <div class="form-group row mb-0">
                         <label class="col-form-label col-sm-3">Current Password</label>
                         <div class="col-sm-9">
                             <input type="password" id="fields" name="current_password" class="form-control" value="" placeholder="Enter Current Password">
                             <small class="form-text text-muted">To change your password, please input the current password.</small>
                         </div>
                     </div>
                 </div>
                   <div class="list-group-item">
                       <div class="form-group row mb-0">
                           <label class="col-form-label col-sm-3">New Password</label>
                           <div class="col-sm-9">
                               <input type="password" id="fields" name="new_password" class="form-control"  placeholder="Enter New Password">

                           </div>
                       </div>
                   </div>
                   <div class="list-group-item">
                       <div class="form-group row mb-0">
                           <label class="col-form-label col-sm-3">Confirm Password</label>
                           <div class="col-sm-9">
                               <input type="password" id="fields" name="confirm_password" class="form-control"  placeholder="Confirm Password">

                           </div>
                       </div>
                   </div>
                   <div class="list-group-item">
                     <?php if($errors->any()): ?>
           <div class="alert alert-danger">
               <ul>
                   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li><?php echo e($error); ?></li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
           </div>
       <?php endif; ?>


       <?php if(session('msg')): ?>
       <div class="alert alert-success">
       <?php echo e(session('msg')); ?>

       </div>
       <?php endif; ?>

       <?php if(session('errormsg')): ?>
       <div class="alert alert-danger">
       <?php echo e(session('errormsg')); ?>

       </div>
       <?php endif; ?>
     </div>

               </div>
           </div>

           </div>

           <div class="col-lg-3 page-nav">
               <div class="page-section pt-lg-112pt">
                   <nav class="nav page-nav__menu">
                     <a class="nav-link" href="/u/basic_info">Basic Information</a>
                     <a class="nav-link" href="/u/profile">Profile</a>

                       <a class="nav-link active" active href="">Change Password</a>
                   </nav>
                   <div class="page-nav__content">
                       <button type="submit" class="btn btn-accent">Save</button>
                   </div>
               </div>
           </div>

       </div>
   </form>
</div>

</div>


   </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>