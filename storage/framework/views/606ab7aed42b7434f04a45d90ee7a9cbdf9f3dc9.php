<?php $__env->startSection('page'); ?>
Courses | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses               <a href="" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Course</a>
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
                        <h5>Courses</h5>
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
                        <th>Title</th>
                        <th>Category</th>

                        <th>Enrolled Students</th>
                        <th>Files</th>
                        <th>Status</th>
                          <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>
                        <td><?php echo e($course->course_title); ?></td>
                        <td>
                          <?php echo e($course->getCategory->category_title); ?>

                        </td>

                        <td>
                            <?php echo e(count($course->getenrolled)); ?>

                        </td>
                        <td>
                            <ul>
                              <?php $__currentLoopData = $course->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><label class="label label-success"><?php echo e($files->file); ?></label></li>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php if($course->getFiles != null): ?>
                              <br/>
                              <a class="btn btn-sm btn-primary" href="/a/view/files">View Files</a>
                              <?php endif; ?>
                            </ul>
                        </td>
                        <td class="center">
                          empty
                        </td>
                        <td class="center">R5400</td>
                          <td class="center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Edit</a>
                            <a class="dropdown-item" href="/a/dump/category/<?php echo e($course->id); ?>">Delete</a>


                            </div>
                            </div>

                          </td>
                    </tr>
                    <?php $count++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </tbody>
                    <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Category</th>

                      <th>Enrolled Students</th>
                      <th>Files</th>
                      <th>Status</th>
                        <th>Price</th>
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