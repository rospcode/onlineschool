<?php $__env->startSection('page'); ?>
Registered Users | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>All Registered Users</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Requests</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-sm-8">
          <div class="ibox">
              <div class="ibox-content">
                  <span class="text-muted small float-right">Last Registered: <i class="fa fa-clock-o"></i> <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $useragain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php if($loop->last): ?> <?php echo e($useragain->created_at); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                  <h2>Users</h2>
                  <p>
                      These are all registered users.
                  </p>
                  <div class="input-group">
                      <input type="text" placeholder="Search client " class="input form-control">
                      <span class="input-group-append">
                              <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                      </span>
                  </div>
                  <div class="clients-list">
                  <span class="float-right small text-muted"><?php echo e(count($users)); ?> Users</span>
                  <ul class="nav nav-tabs">
                      <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>

                  </ul>
                  <div class="tab-content">
                      <div id="tab-1" class="tab-pane active">
                          <div class="full-height-scroll">
                              <div class="table-responsive">
                                  <table class="table table-striped table-hover">
                                      <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr>
                                          <td class="client-avatar"><img alt="image" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>"> </td>
                                          <td><a href="/a/profile/<?php echo e($user->id); ?>" class="client-link"><?php echo e($user->name); ?> <?php echo e($user->surname); ?></a></td>
                                          <td> <?php echo e(count($user->getenrolled)); ?> Courses Under

                                          </td>
                                          <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                          <td><?php echo e($user->email); ?></td>
                                          <?php if($user->password != ""): ?>
                                          <?php if($user->blocked == "yes"): ?>
                                          <td class="client-status"><span class="label label-warning">Blocked</span></td>
                                          <?php else: ?>
                                          <td class="client-status"><span class="label label-primary">Active</span></td>
                                          <?php endif; ?>
                                          <?php else: ?>
                                          <td class="client-status"><span class="label label-danger">Waiting Approval</span></td>
                                          <?php endif; ?>


                                      </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                  </div>

                  </div>
              </div>
          </div>
      </div>

      <div class="col-sm-4">
          <div class="ibox selected">

              <div class="ibox-content">
                  <div class="tab-content">
                      <div id="contact-1" class="tab-pane active">
                          <div class="row m-b-lg">
                              <div class="col-lg-4 text-center">
                                  <h2><?php echo e($us->name); ?> <?php echo e($us->surname); ?></h2>

                                  <div class="m-b-sm">
                                      <img alt="image" class="rounded-circle" src="<?php echo e(asset('user/')); ?>/<?php echo e($us->avatar); ?>"
                                           style="width: 62px">
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                  <br/><br/><br/><br/><br/><br/><br/>
                                  <p>
                                    <?php echo e($us->bio); ?>

                                  </p>


                                  <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                          class="fa fa-envelope"></i> Send Message
                                  </button>
                              </div>
                          </div>
                          <div class="client-detail">
                          <div class="full-height-scroll">

                              <strong>Last Signin</strong>

                              <ul class="list-group clear-list">
                                  <li class="list-group-item fist-item">
                                      <span class="float-right"> <?php echo e($us->last_login); ?> </span>

                                  </li>

                              </ul>

                              <hr/>
                              <strong>Timeline activity</strong>
                              <div id="vertical-timeline" class="vertical-container dark-timeline">
                                <?php $__currentLoopData = $getfeed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="vertical-timeline-block">
                                      <div class="vertical-timeline-icon gray-bg">
                                        <i class="fa fa-sign-in"></i>
                                      </div>
                                      <div class="vertical-timeline-content">
                                          <p><?php echo e($feed->action); ?>

                                          </p>
                                          <span class="vertical-date small text-muted"><?php echo e($feed->created_at); ?> </span>
                                      </div>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </div>
                          </div>
                          </div>
                      </div>





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