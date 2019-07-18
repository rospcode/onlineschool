<?php $__env->startSection('page'); ?>
Users | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Users                <a href="http://demo.academy-lms.com/admin/user_form/add_user_form" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add User</a>
  </h4>
  </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>


<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>These are all registered users</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Enrolled Courses</th>
                        <th>Courses Graduated</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td>1</td>
                        <td><img src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>" alt="" class="img-fluid rounded-circle img-thumbnail" style="width: 10%;" width="50" height="50"></td>
                        <td><?php echo e($user->name); ?> <?php echo e($user->surname); ?>

                        </td>
                        <td>
                            <?php echo e($user->email); ?>

                        </td>
                        <td>
                          <ul>
                            <?php $__currentLoopData = $user->getcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><?php echo e($courses->course_title); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                        </td>

                        <td class="center">
                          empty
                        </td>
                        <td class="center">
                          <div class="btn-group">
    <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="">Edit</a>
      <a class="dropdown-item" href="/a/dump/user/<?php echo e($user->id); ?>">Delete</a>


    </div>
  </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </tbody>
                    <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Avatar</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Enrolled Courses</th>
                      <th>Courses Graduated</th>
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
              </div>



              </div>
              </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>