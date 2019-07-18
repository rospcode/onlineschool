<?php $__env->startSection('page'); ?>
Add Category | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('csrf'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
function randomPass($length){
  $chars = "123456789";
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
       <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Student                <a href="/a/users/full" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>View Users</a>
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
                        <h5>Enrollment</h5>
                        <div class="ibox-tools">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content">
                      <div class="tabs-container">
                                              <ul class="nav nav-tabs" role="tablist">
                                                  <li><a class="nav-link active show" data-toggle="tab" href="#tab-1">Enroll a user</a></li>

                                              </ul>
                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" id="enrollform" enctype="multipart/form-data">

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Enroll Code*</label>

                                                                <div class="col-sm-10"><input type="text"  readonly="readyonly" name="cat_code" value="EN<?php echo randomPass(5); ?>" class="form-control"></div>
                                                            </div>
                                                            <div class="form-group">
                                                             <?php echo e(csrf_field()); ?>

                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Course*</label>
                                                                <div class="col-sm-10">
                                                                  <select class="select2_demo_1 form-control" name="course_enroll" id="course_enroll" onchange="test(this.value)">
                                                                    <option value="">Choose Course for user...</option>
                                                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                      <option value="<?php echo e($course->id); ?>"><?php echo e($course->course_title); ?></option>

                                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                  </select>
                                                                  <span id="course_enroll-feedback">

                                                                  </span>
                                                                </div>
                                                            </div>

                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label" id="taguser"></label>
                                                                <div class="col-sm-10">
                                                                  <select class="select2_demo_1 form-control" name="user_enroll" id="user_enroll">
                                                                    <option value="">Choose User to enroll...</option>




                                                                  </select>
                                                                  <span id="user_enroll-feedback">

                                                                  </span>
                                                                </div>
                                                            </div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                              <div class="col-sm-10">
                                                              <?php if($errors->any()): ?>
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><?php echo e($error); ?></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                                              <div id="mess">



                                                              </div>

                                                              <?php if(session('error')): ?>
                                                              <div class="alert alert-warning">
                                                              <?php echo e(session('error')); ?>

                                                              </div>
                                                              <?php endif; ?>
                                                            </div>
                                                            </div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2" id="submit">

                                                                    <button class="btn btn-primary btn-sm" id="enrollsubmit" type="button">Save changes</button>
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

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $("#user_enroll").hide();



function test(str){
  if(str != ""){
  $.ajax({
  type: "POST",
  url: "<?php echo e(route('admin.get.user')); ?>",
  data: { id: str},
  success: function(response){

     var details = Object.values(response);
     $("#user_enroll").html("");
    if(details.length > 0){
      for (var i = 0; i < details.length; i++) {
              $("#user_enroll").show();
              $("#taguser").html("User*");
                 $("#mess").html();
            $("#user_enroll").append("<option value='"+details[i].id+"'>"+details[i].name+" "+details[i].surname+"</option>");

      }
    }else{
         $("#mess").html("<h3>No Available Users");
    }
  },error: function(data){
    console.log(data);
  }

});
}else{
   $("#user_enroll").html("");
   $("#taguser").html("");
   $("#user_enroll").hide("");
}
}
  $(document).ready(function() {
          $("#enrollsubmit").click(function(ev){
            ev.preventDefault();
                $("#submit").html("<button class='btn btn-primary' type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>");
               var user = $("#user_enroll").val();
               var course = $("#course_enroll").val();
               if(user == "" || course == ""){
                   $("#mess").html("<div class='alert alert-warning'> Please do not leave fields empty</div>");
                   $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit' type='button'>Save changes</button>");
               }else{
                 $.ajax({

                type: "POST",
                url: "<?php echo e(route('admin.enroll.user')); ?>",
                data: $('#enrollform').serialize(),
                success: function(response){
                  if(response == "success"){

                   $("#mess").html("<div class='alert alert-success' role='alert'> Student has been enrolled successfully. </div>");
                    $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit'  type='button'>Save changes</button>");

                  }else if("already"){
                    $("#mess").html("<div class='alert alert-warning'>User already enrolled for this course.</div>");
                     $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit' type='button'>Save changes</button>");
                  }else if("graduated"){
                    $("#mess").html("<div class='alert alert-warning'>User already graduated for this course.</div>");
                     $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit' type='button'>Save changes</button>");
                  }else{
                    $("#mess").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
                     $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit' type='button'>Save changes</button>");
                  }

               },error: function(data){
                        var errors = data.responseJSON;
                       $.each(errors, function(key,message){
                      $("#"+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
                       $("#submit").html("<button class='btn btn-primary btn-sm' id='enrollsubmit' type='button'>Save changes</button>");

                      });

                       }
                   });
               }
          });
    });

    </script>

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