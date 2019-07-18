<?php $__env->startSection('page'); ?>
Home | <?php echo e(auth()->user()->name); ?>

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
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Edit Siyabonga's TimeLine</h5>
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
                      <div class="tabs-container">
                                              <ul class="nav nav-tabs" role="tablist">
                                                  <li><a class="nav-link active show" data-toggle="tab" href="#tab-1">Add Category</a></li>

                                              </ul>
                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" action="<?php echo e(route('admin.add_category')); ?>" enctype="multipart/form-data">

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Category Code*</label>

                                                                <div class="col-sm-10"><input type="text" name="cat_code" value="<?php echo randomPass(8); ?>" class="form-control"></div>
                                                            </div>
                                                            <div class="form-group">
                                                             <?php echo e(csrf_field()); ?>

                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Category title*</label>
                                                                <div class="col-sm-10"><input type="text" name="cat_title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Category Thumbnail</label>
                                                              <div class="custom-file col-sm-10">

  <input id="logo" type="file" name="cat_thumbnail">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>