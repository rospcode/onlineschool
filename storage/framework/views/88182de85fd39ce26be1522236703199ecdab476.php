<?php $__env->startSection('page'); ?>
Home
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('style'); ?>

<link type="text/css" href="<?php echo e(asset('home/profile.css')); ?>" rel="stylesheet">

       <?php $__env->stopSection(); ?>

 <?php $__env->startSection('content'); ?>



                   <div class="container-fluid page__container page__heading d-flex align-items-center border-bottom  " style="max-width: 100%;">
                                           <h1 class="mb-0" style="margin: 0px auto;">Basic Information</h1>
                                       </div>

                   <div class="container-fluid page__container">

                     <div class="uk-container">
                       <div class="container page__container">
                     <form action="<?php echo e(route('basic.change')); ?>" method="post">
                         <div class="row">
                             <div class="col-lg-9" >

                               <div class="page-section">
                                 <h4></h4>
                                 <div class="list-group list-group-form">

                                            <?php echo e(csrf_field()); ?>

                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">Cell Number</label>
                                             <div class="col-sm-9">
                                                 <input type="text" id="fields" name="phone" class="form-control" value="<?php echo e(auth()->user()->phone); ?>" placeholder="Your profile name ...">
                                                 <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">ID Number</label>
                                             <div class="col-sm-9">
                                                 <input type="text" id="fields"  class="form-control" readonly="readonly" value="<?php echo e(auth()->user()->id_number); ?>" placeholder="Your profile name ...">
                                                 <small class="form-text text-muted"></small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">Your Gender</label>
                                             <div class="col-sm-9">
                                                 <input type="text" id="fields" readonly="readonly" class="form-control" value="<?php echo e(auth()->user()->gender); ?>" placeholder="Your profile name ...">
                                                 <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">Your Bio</label>
                                             <div class="col-sm-9">
                                               <?php if(auth()->user()->bio == ""): ?>
                                                 <textarea rows="3" id="fields" name="bio" class="form-control" placeholder="About you ..."></textarea>
                                                 <?php else: ?>
                                                 <textarea rows="3" id="fields" name="bio" class="form-control" ><?php echo e(auth()->user()->bio); ?></textarea>
                                                 <?php endif; ?>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">Your DOB</label>
                                             <div class="col-sm-9">
                                                 <input type="text" id="fields" readonly="readonly" class="form-control" value="<?php echo e(auth()->user()->age); ?>" placeholder="Your profile name ...">
                                                 <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="list-group-item">
                                         <div class="form-group row mb-0">
                                             <label class="col-form-label col-sm-3">Your Email</label>
                                             <div class="col-sm-9">
                                                 <input type="text" id="fields" name="email" class="form-control" value="<?php echo e(auth()->user()->email); ?>" placeholder="Your profile name ...">
                                                 <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="list-group-item">
                                         <div class="custom-control custom-checkbox">
                                             <input type="checkbox" id="fields" class="custom-control-input" checked="" id="customCheck1">
                                             <label class="custom-control-label" for="customCheck1">ID Number cannot be changed</label>
                                             <small class="form-text text-muted">Your current ID Number cannot be changed.</small>
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

                                 </div>
                             </div>

                             </div>

                             <div class="col-lg-3 page-nav">
                                 <div class="page-section pt-lg-112pt">
                                     <nav class="nav page-nav__menu">
                                         <a class="nav-link active" href="">Basic Information</a>
                                         <a class="nav-link" href="/u/profile">Profile</a>

                                         <a class="nav-link" href="/u/password/change">Change Password</a>
                                     </nav>
                                     <div class="page-nav__content">
                                         <button type="submit" class="btn btn-success">Save</button>
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