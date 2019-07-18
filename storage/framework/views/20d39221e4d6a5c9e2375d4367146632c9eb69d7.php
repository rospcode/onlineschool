<?php $__env->startSection('page'); ?>
Courses | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Courses    <a href="/a/add_course" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add Course</a>
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
                        <th>Expires</th>
                        <th>Price</th>
                        <th>Graduates</th>
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
                          <?php if(count($course->getenrolled) != "0"): ?>
                             <?php echo e(count($course->getenrolled)); ?>   <a class="btn btn-sm btn-primary" href="/a/students/course/<?php echo e($course->id); ?>">View Students</a>
                          <?php else: ?>
                           <?php echo e(count($course->getenrolled)); ?>

                          <?php endif; ?>
                        </td>

                        <td>
                            <ul>
                              <?php $__currentLoopData = $course->getFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><label class="label label-success"><?php echo e($files->file_name); ?></label></li>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php if($course->getFiles != '[]'): ?>
                              <br/>
                              <a class="btn btn-sm btn-primary" href="/a/view_files/<?php echo e($course->id); ?>">View Files</a>
                              <?php endif; ?>
                            </ul>
                        </td>

                        <td class="center">
                          <?php if($course->course_status == "Available"): ?>
                          <i class="fa fa-circle" style="color: #1ab394; font-size: 21px;" ></i>
                          <?php elseif($course->course_status == "Down"): ?>
                          <i class="fa fa-circle" style="color: #FF0000; font-size: 21px;" ></i>
                          <?php endif; ?>
                        </td>
                        <td class="center"><?php if($course->course_end == null): ?>
                                            DN
                                            <?php else: ?>
                                            <?php echo e($course->course_end); ?>

                                            <?php endif; ?>
                        </td>
                        <td class="center">R5400</td>
                        <td class="center">

                          <a class="btn btn-sm btn-primary" href="/a/graduates/<?php echo e($course->id); ?>"><?php echo e(count($course->getGraduates)); ?> View Students</a>

                        </td>
                          <td class="center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>


                            <div class="dropdown-menu">
                              <?php if($course->course_status == "Available"): ?>
                            <a class="dropdown-item" href="/a/takedown/<?php echo e($course->id); ?>">TD</a>
                              <?php elseif($course->course_status == "Down"): ?>
                             <a class="dropdown-item" href="/a/takedown/<?php echo e($course->id); ?>">MA</a>
                              <?php endif; ?>

                              <?php if($course->getTimetable != ""): ?>

                                <a href="/Docs/<?php echo e($course->getTimetable->path); ?>" class="dropdown-item">View TB</a>
                                <form method="post" action="<?php echo e(route('delete.timetable')); ?>">
                                  <?php echo e(csrf_field()); ?>

                                  <input type="text" value="<?php echo e($course->getTimetable->id); ?>" id="timetable" hidden="hidden" name="timetable"/>
                                  <button  type="submit" class="dropdown-item" > Delete TB </button>

                                </form>

                                <?php else: ?>
                                <a href="/a/upload/table/<?php echo e($course->id); ?>"  class="dropdown-item">Upload TB</a>
                                <?php endif; ?>





                            </div>

                            </div>

                          </td>
                    </tr>
                    <!-- register user modal -->
                        <div class="modal inmodal" id="myModal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog  modal-lg">
                                <div class="modal-content animated flipInY">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                        <h4 class="modal-title">Upload TimeTable For: <?php echo e($course->course_title); ?></h4>
                                        <small class="font-bold"></small>
                                    </div>
                                    <div class="modal-body">
                                      <div class="col-lg-12">
                                      <div class="ibox ">

                                          <div class="ibox-content">
                                              <form method="post" id="upload<?php echo $count; ?>"  enctype="multipart/form-data">

                                                  <?php echo e(csrf_field()); ?>




                                                  <div class="form-group row"><label class="col-lg-2 col-form-label">TimeTable</label>

                                                      <div class="col-lg-10">
      <input type="file" id="file" accept="image/*" name="file"  class="form-control">
                                                        <div id="file-field" style="color: red;">

                                                         </div>
                                                      </div>
                                                  </div>




                                                <div class="form-group row">
                                                <label class="col-lg-2 col-form-label"></label>
                                                 <div class="col-lg-10">
                                                   <div id="uploaderrors"></div>
                                                 </div>
                                               </div>

                                                  <div class="form-group row">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Do you want all students under this course to receive an email of this new TimeTable?</label></div>
                                                          <div class="i-checks"><label> <input type="radio" value="yes" name="options"> <i></i> Yes</label></div>
                                                          <div class="i-checks"><label> <input type="radio" value="no" name="options"> <i></i> No</label></div>

                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button class="btn btn-primary" id="uploadtimetable" onclick="upload(<?php echo e($course->id); ?>,'upload',<?php echo $count; ?>)" type="button">Upload TimeTable</button>
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

                           <?php if($course->getTimetable != ""): ?>
                        <!-- register user modal -->
                            <div class="modal inmodal" id="myUpdate<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog  modal-lg">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                            <h4 class="modal-title">Change TimeTable For: <?php echo e($course->course_title); ?></h4>
                                            <small class="font-bold"></small>
                                        </div>
                                        <div class="modal-body">
                                          <div class="col-lg-12">
                                          <div class="ibox ">

                                              <div class="ibox-content">
                                                  <form method="post" id="courseform"  enctype="multipart/form-data">

                                                      <?php echo e(csrf_field()); ?>


                                                      <div class="form-group row"><label class="col-lg-2 col-form-label">TimeTable</label>

                                                          <div class="col-lg-10">
          <input type="file" accept="image/*" name="file"  class="form-control">
                                                            <div id="file-field">

                                                             </div>
                                                          </div>
                                                      </div>




                                                    <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label"></label>
                                                     <div class="col-lg-10">
                                                       <div id="courseerrors">Last Timetable was updated at <?php echo e($course->getTimetable->created_at); ?></div>
                                                     </div>
                                                   </div>

                                                      <div class="form-group row">
                                                          <div class="col-lg-offset-2 col-lg-10">
                                                              <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Do you want all students under this course to receive an email of this new TimeTable Update?</label></div>
                                                              <div class="i-checks"><label> <input type="radio" value="option1" name="a" checked> <i></i> Yes</label></div>
                                                              <div class="i-checks"><label> <input type="radio" value="option2" name="a"> <i></i> No</label></div>

                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <div class="col-lg-offset-2 col-lg-10">
                                                              <button class="btn btn-primary" id="signupbutton" type="button">Change TimeTable</button>
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

                    <?php endif; ?>
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

<?php $__env->startSection('script'); ?>





<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




function upload(str,hun,three){
   var file = $("#file");
   var radios = document.getElementsByName('options');
   var checked = "";

for (var i = 0, length = radios.length; i < length; i++)
{
 if (radios[i].checked)
 {
  // do whatever you want with the checked radio
  checked = radios[i].value;

  // only one radio can be logically checked, don't check the rest
  break;
 }
}

  var name = hun+""+three;

if(checked == "" || file == ""){
   alert(file);
}else{
  $.ajax({
  type: "POST",
  url: "<?php echo e(route('admin.upload.timetable')); ?>",
  data: $("#name").serialize(),
  success: function(response){
    console.log(response);

  },error: function(data){
    console.log(data);
  }

 });
}





}


function enableTxt(elem) {
    var id = $(elem).attr("id");
    $("#"+id+"-field").html("");


}
function clearmessage(){
  $("#signupmessage").html("");
}
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