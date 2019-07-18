<?php $__env->startSection('page'); ?>
Signup Requests | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
      <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Users                <a href="" data-toggle="modal" data-target="#myModal2" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"><i class="mdi mdi-plus"></i>Add User</a>
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

                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID Number</th>
                      <th>Date</th>

                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1; ?>
                      <?php $__currentLoopData = $signuprequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="gradeX">
                        <td><?php echo $count; ?></td>

                        <td><?php echo e($requests->getUser->name); ?> <?php echo e($requests->getUser->surname); ?>

                        </td>
                        <td>
                            <?php echo e($requests->getUser->email); ?>

                        </td>
                        <td>
                          <?php echo e($requests->getUser->>phone); ?>

                        </td>

                        <td class="center">
                      <?php echo e($requests->getUser->id_number); ?>

                        </td>
                        <td class="center">
                            <?php echo e($requests->getUser->updated_at); ?>

                        </td>
                        <td class="center">
                          <div class="btn-group">
    <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/a/edit_user/">Edit</a>
      <button class="dropdown-item" >Delete</button>


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

                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID Number</th>

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
   <script type="text/javascript">

     $(function(){
           $("#signupbutton").click(function(){

             var name = $("#name").val();
             var surname = $("#surname").val();
             var email = $("#email").val();
             $("#signupmessage").html("");



            if(email == "" || name == ""){
                $("#signupmessage").html("<div class='alert alert-warning'>Sorry, some fields are empty.</div>");

              }
         else {
           $.ajax({

          type: "POST",
          url: "<?php echo e(route('admin.signup.user')); ?>",
          data: $('#adminsignup').serialize(),
          success: function(response){
            if(response == "success"){
              $("#signupmessage").html("<div class='alert alert-success'>User Successfully Registered, email sent.</div>");
            }else{
              $("#signupmessage").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
            }

         },error: function(data){
            var errors = data.responseJSON;
            $.each(errors, function(key, message){
              $("#"+key+"-field").html("<div style='color: red;'>"+message+"</div>");
            });

         }
      });

            }


    });

   });


   function enableTxt(elem) {
       var id = $(elem).attr("id");
       $("#"+id+"-field").html("");


   }
   function clearmessage(){
     $("#signupmessage").html("");
   }
   </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>