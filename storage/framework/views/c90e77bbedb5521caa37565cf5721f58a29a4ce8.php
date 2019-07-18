<?php $__env->startSection('page'); ?>
Home
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>

<link type="text/css" href="<?php echo e(asset('home/profile.css')); ?>" rel="stylesheet">

       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>


 <div class="container-fluid page__container page__heading d-flex align-items-center border-bottom  " style="max-width: 100%;">
                         <h1 class="mb-0" style="margin: 0px auto;">Profile Settings</h1>
                     </div>

 <div class="container-fluid page__container">

   <div class="uk-container">
     <div class="container page__container">
   <form action="<?php echo e(route('profile.change')); ?>" method="post"  enctype="multipart/form-data">
       <div class="row">
           <div class="col-lg-9" >

             <div class="page-section">
               <h4></h4>
               <div class="list-group list-group-form">
                   <div class="list-group-item">
                       <div class="form-group row mb-0">
                           <label class="col-form-label col-sm-3">Your photo</label>
                           <div class="col-sm-9 media align-items-center">
                               <a href="#" class="media-left mr-16pt">
                                   <img src="<?php echo e(asset('user/')); ?>/<?php echo e(auth()->user()->avatar); ?>" alt="people" class="rounded-circle" width="56" style="width: 40px;">
                               </a>
                               <?php echo e(csrf_field()); ?>

                               <div class="media-body">
                                   <div class="custom-file">
                                       <input type="file" name="file"  class="custom-file-input" id="inputGroupFile01">
                                       <label class="custom-file-label" id="fields" style="z-index: 1;
 height: calc(2.5rem + 2px); position: absolute;
 top: 0;
 right: 0;
 padding: .5rem .75rem;" for="inputGroupFile01">Choose file</label>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="list-group-item">
                       <div class="form-group row mb-0">
                           <label class="col-form-label col-sm-3">Profile Name</label>
                           <div class="col-sm-9">
                               <input type="text" id="fields" name="name" class="form-control" value="<?php echo e(auth()->user()->name); ?>" placeholder="Your profile name ...">
                               <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                           </div>
                       </div>
                   </div>
                   <div class="list-group-item">
                       <div class="form-group row mb-0">
                           <label class="col-form-label col-sm-3">Profile Surname</label>
                           <div class="col-sm-9">
                               <input type="text" id="fields" name="surname" class="form-control" value="<?php echo e(auth()->user()->surname); ?>" placeholder="Your profile name ...">
                               <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
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
     </div>



                   <div class="list-group-item">
                       <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="fields" class="custom-control-input" checked="" id="customCheck1">
                           <label class="custom-control-label" for="customCheck1">Change Profile Image</label>
                           <small class="form-text text-muted">You can change your profile.<picture>

                           </picture>.</small>
                       </div>
                   </div>
                   <div class="list-group-item">
                       <div class="custom-control custom-checkbox">
                           <input type="checkbox" id="fields" class="custom-control-input" checked="" id="customCheck2">
                           <label class="custom-control-label" for="customCheck2">Change Profile Information</label>
                           <small class="form-text text-muted">Change your profile information.</small>
                       </div>
                   </div>
               </div>
           </div>

           </div>

           <div class="col-lg-3 page-nav">
               <div class="page-section pt-lg-112pt">
                   <nav class="nav page-nav__menu">
                     <a class="nav-link" href="/u/basic_info">Basic Information</a>
                     <a class="nav-link active" href="">Profile</a>

                     <a class="nav-link" href="/u/password/change">Change Password</a>
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