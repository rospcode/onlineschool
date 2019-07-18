<?php $__env->startSection('page'); ?>
Categories | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Course Categories                <a href="/a/add_category" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Category</a>
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

                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>

                        <th>Category Code</th>
                        <th>Category Title</th>

                        <th>Courses Under</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>

                        <td><?php echo e($category->category_code); ?>

                        </td>
                        <td><?php echo e($category->category_title); ?>

                        </td>
                        <td>
                           <?php echo e(count($category->getCourses )); ?>

                        </td>
                        <td class="center">
                          <?php echo e($category->created_at); ?>

                        </td>
                        <td class="center"><div class="btn-group">
  <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <?php if( count($category->getCourses) == 0): ?>
          <a class="dropdown-item" href="/a/dump/category/<?php echo e($category->id); ?>">Delete</a>
    <?php endif; ?>

    <!-- -->


  </div>
</div></td>
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