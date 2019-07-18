<?php $__env->startSection('page'); ?>
User Requests | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>User Viewprofile</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


<div class="wrapper wrapper-content">
  <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-fluid" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo e($user->name); ?> <?php echo e($user->surname); ?></strong></h4>
                                  <p><i class="fa fa-id-card"></i> <?php echo e($user->id_number); ?></p>
                                <h5>
                                    Bio
                                </h5>
                                <p>
                                  <?php echo e($user->bio); ?>

                                </p>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->phone); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Id Number</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->id_number); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->gender); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->age); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Bio</label>
                                  <div class="col-sm-10">
                                  <textarea class="form-control" disabled="disabled">
                                   <?php echo e($user->bio); ?>

                                  </textarea>
                                  </div>


                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->email); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->created_at); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Signin Blocked</label>
                                    <div class="col-sm-10"><input type="text" disabled="disabled" value="<?php echo e($user->last_login); ?>" name="cat_title" class="form-control">
                                    </div>
                                </div>


                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                        </div>
                                        <div class="col-md-4">
                                          <?php if($user->blocked == "no"): ?>
                                            <a href="/a/block/<?php echo e($user->id); ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Block</a>
                                            <?php else: ?>
                                            <a href="/a/unblock/<?php echo e($user->id); ?>" class="btn btn-default btn-sm btn-block"><i class="fa fa-ban"></i> Unblock</a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="/a/edit_user/<?php echo e($user->id); ?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>
                <div class="col-md-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>User Courses</h5>

                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     <?php $__currentLoopData = $user->getEnrolled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrolled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="feed-element">
                                        <a href="" class="float-left">
                                            <img alt="image" class="rounded-circle" src="<?php echo e(asset('img/courses/')); ?>/<?php echo e($enrolled->getCourse->course_img); ?>">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy"><?php echo e($enrolled->created_at->diffForHumans()); ?></small>
                                            <strong>Course:</strong> <?php echo e($enrolled->getCourse->course_title); ?>. <br>
                                            <small class="text-muted"><?php echo e($enrolled->created_at); ?></small>

                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </div>



                            </div>

                        </div>
                    </div>

                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Courses Graduate</h5>

                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     <?php $__currentLoopData = $user->getGraduate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $graduate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="feed-element">
                                        <a href="" class="float-left">
                                            <img alt="image" class="rounded-circle" src="<?php echo e(asset('img/courses/')); ?>/<?php echo e($graduate->getCourse['course_img']); ?>">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy"><?php echo e($graduate->created_at->diffForHumans()); ?></small>
                                            <strong>Course:</strong> <?php echo e($graduate->getCourse['course_title']); ?>. <br>
                                            <strong>Mark:</strong>


                                              <?php if($graduate->course_marks < 50): ?>
                                                  <sd style="color: red;"> <?php echo e($graduate->course_marks); ?>%<sd><br/>
                                                 <?php elseif($graduate->course_marks >= 50 && $graduate->course_marks <= 100): ?>

                                                  <?php if($graduate->course_marks >= 75): ?>
                                                  <sd style="color: green;"><?php echo e($graduate->course_marks); ?>% Passed Distinction</sd><br/>
                                                  <?php else: ?>
                                                  <sd style="color: green;"><?php echo e($graduate->course_marks); ?>% Passed</sd><br/>
                                                  <?php endif; ?>

                                              <?php endif; ?>


                                             <br>
                                            <small class="text-muted"><?php echo e($graduate->created_at); ?></small>

                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </div>



                            </div>

                        </div>
                    </div>


                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Actvities</h5>
                          
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                     <?php $__currentLoopData = $feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="feed-element">
                                        <a href="#" class="float-left">
                                            <img alt="image" class="rounded-circle" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy"><?php echo e($feed->created_at->diffForHumans()); ?></small>
                                            <strong>Activity: </strong> <?php echo e($feed->action); ?> <strong></strong>. <br>
                                            <small class="text-muted"><?php echo e($feed->created_at); ?></small>

                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </div>

                                <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

              </div>


              <!-- register user modal -->
                  <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                          <div class="modal-content animated flipInY">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                  <h4 class="modal-title">Register a User</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup">
                                            <p>User details</p>
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-group row"><label class="col-lg-2 col-form-label">First Name</label>

                                                <div class="col-lg-10"><input type="text" name="name" id="name" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Last Name</label>

                                                <div class="col-lg-10"><input type="text" name="surname" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Last Name" class="form-control">
                                                  <div  id="surname-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>

                                                <div class="col-lg-10"><input type="email" name="email" onkeydown="clearmessage()" onclick="enableTxt(this)" id="email" placeholder="Email" class="form-control">
                                                  <div id="email-field">

                                                   </div>
                                                </div>
                                            </div>
                                          <div class="form-group row">
                                          <label class="col-lg-2 col-form-label"></label>
                                           <div class="col-lg-10">
                                             <div id="signupmessage"></div>
                                           </div>
                                         </div>

                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Manually register a user. and email will be sent to them, to create a password</label></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary" id="signupbutton" type="button">Create user</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>

                              </div>
                          </div>
                      </div>
                  </div>
              <!-- register user modal end -->

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

    <?php $__env->startSection('script'); ?>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>