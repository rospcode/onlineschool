<?php $__env->startSection('page'); ?>
Course Requests
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Course Requests</span><br>
                </h2>

                <p>
                  These are all students requesting for courses
                </p>



            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>

<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
      <div class="ibox ">
          <div class="ibox-title">
              <h5>Course Requests </h5>

          </div>
          <div class="ibox-content">




              <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
          <tr>
              <th>Count</th>
              <th>User-ID</th>
              <th>Avatar</th>
              <th>Name</th>
              <th>Course</th>
              <th>Date Requested</th>
              <th>Time Ago</th>
              <th>Action</th>

          </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            <?php $__currentLoopData = $all_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr class="gradeX">
            <td><?php echo $count; ?></td>

            <td><?php echo e($request->getUser->id); ?></td>
                <td class="client-avatar"><img alt="image" src="<?php echo e(asset('user/')); ?>/<?php echo e($request->getUser->avatar); ?>"> </td>
              <td>
                <?php echo e($request->getUser->name); ?> <?php echo e($request->getUser->surname); ?>

              </td>
              <td>
                  <?php echo e($request->getCourse->course_title); ?>

                 </td>
                <td class="center">
                      <?php echo e($request->created_at); ?>

               </td>
               <td>
                      <?php echo e($request->created_at->diffForHumans()); ?>

               </td>
               <td>


                          <button class="btn btn-success" onclick="approving('<?php echo e($request->getUser->id); ?>','<?php echo e($request->getUser->name); ?>','<?php echo e($request->getCourse->id); ?>')">Approve</button>

                          <a class="btn btn-success" href="/a/course_requests/delete/<?php echo e($request->getUser->id); ?>/<?php echo e($request->getCourse->id); ?>">Remove</a>

               </td>


          </tr>
          <?php $count++; ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




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



<?php $__env->startSection('script'); ?>
<script type="text/javascript">
function approving(val,name,course){
     const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Approve "+name+"'s course request, they will receive an email",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: "Approve",
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
window.location.href = "/a/course/approve/"+val+"/"+course;
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      '',
      'error'
    )
  }
})
   }
   </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>