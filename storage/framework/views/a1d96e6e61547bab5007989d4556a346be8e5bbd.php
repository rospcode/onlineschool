<?php $__env->startSection('page'); ?>
Add Files | <?php echo e(auth()->user()->name); ?>

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
   <div class="card-body">
       <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Add Files
   </h4>
   </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>


<div class="row">
  <div class="col-md-6 offset-md-3">
<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Course Files</h5>

                    </div>
                    <div class="ibox-content">
                      <div class="tabs-container">
                                              <ul class="nav nav-tabs" role="tablist">
                                                  <li><a class="nav-link active show" data-toggle="tab" href="#tab-1">Add Files</a></li>

                                              </ul>
                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" action="<?php echo e(route('admin.add.files')); ?>" enctype="multipart/form-data">

                                                          <input type="text"  name="cat_code" value="<?php echo randomPass(50); ?>" hidden="hidden"  class="form-control">

                                                          <div class="form-group  row"><label class="col-sm-2 col-form-label">File Display Name*</label>

                                                              <div class="col-sm-10"><input type="text"  name="file_name" value="<?php echo e(old('file_name')); ?>" class="form-control"></div>
                                                          </div>


                                                          <div class="form-group  row"><label class="col-sm-2 col-form-label">File Upload Type*</label>

                                                              <div class="col-sm-10">
                                                                <select class="select2_demo_1 form-control" name="file_type" id="file_type">


                                                                    <option value="Content">Course Study Document</option>
                                                                        <option value="Exercise">Execerise Document</option>


                                                                </select>

                                                              </div>
                                                          </div>

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Course*</label>

                                                                <div class="col-sm-10">
                                                                  <select class="select2_demo_1 form-control" name="course" id="course">
                                                                    <option value="">Choose Course For File...</option>
                                                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                      <option value="<?php echo e($course->id); ?>"><?php echo e($course->course_title); ?> - has <?php echo e(count($course->getFiles)); ?> Document Files</option>

                                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                  </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                             <?php echo e(csrf_field()); ?>

                                                            </div>


                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">File</label>
                                                              <div class="custom-file col-sm-10">

  <input id="logo" type="file" name="file">
  <label for="logo" >Upload Thumbnail if you have one</label>
</div>

</div>


                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
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




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2">

                                                                    <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
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