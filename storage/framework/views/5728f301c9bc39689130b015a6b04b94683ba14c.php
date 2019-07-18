<?php $__env->startSection('page'); ?>
Edit User | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Edit <?php echo e($user->name); ?>'s Profile</h5>
                        
                    </div>
                    <div class="ibox-content">
                      <div class="tabs-container">
                                              <ul class="nav nav-tabs" role="tablist">
                                                  <li><a class="nav-link active show" data-toggle="tab" href="#tab-1"> Basic Info</a></li>
                                                  <li><a class="nav-link" data-toggle="tab" href="#tab-2">Password Reset</a></li>
                                              </ul>
                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" id="adminsignup">
                                                           <?php echo e(csrf_field()); ?>

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">First Name*</label>

                                                                <div class="col-sm-10"><input type="text" onkeydown="clearmessage()" onclick="enableTxt(this)" name="name" id="name" class="form-control" value="<?php echo e($user->name); ?>">
                                                                  <div  id="name-field">

                                                                   </div>

                                                                </div>
                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Last Name*</label>
                                                                <div class="col-sm-10"><input type="text" onkeydown="clearmessage()" onclick="enableTxt(this)" name="surname" id="surname" class="form-control" value="<?php echo e($user->surname); ?>">
                                                                  <div  id="surname-field">

                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>

                                                                <div class="col-sm-10"><input type="text" onkeydown="clearmessage()" onclick="enableTxt(this)" name="email" id="email" class="form-control" value="<?php echo e($user->email); ?>">
                                                                  <div  id="email-field">

                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Avatar</label>
                                                              <div class="custom-file col-sm-10">

<img alt="image" class="rounded-circle" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>"style="width: 5%;"/>
</div>

</div>


                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2">


                                                                    <div id="editmessage"></div>
                                                                  </div>

                                                            </div>



                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2" id="button-act">


                                                                    <button class="btn btn-primary btn-sm" type="button" id="editbutton">Save changes</button>


                                                                </div>
                                                            </div>
                                                        </form>
                                                      </div>
                                                  </div>
                                                  <div role="tabpanel" id="tab-2" class="tab-pane">
                                                      <div class="panel-body">
                                                        <form method="get">

                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">User Email</label>

                                                                <div class="col-sm-10"><input type="text"  class="form-control" value="<?php echo e($user->email); ?>"></div>
                                                            </div>
                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group  row">
                                                                      <div class="col-sm-2"></div>
                                                                <label class="col-sm-10 col-form-label">If you reset the user's password, an email will be sent to <?php echo e($user->name); ?>, requesting him to change their password</label>
                                                            </div>
                                                            <p>


                                                            <div class="hr-line-dashed"></div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2">

                                                                    <button class="btn btn-primary btn-sm" type="submit">Reset</button>
                                                                      <button class="btn btn-success btn-sm" type="submit">Change default</button>
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


<?php $__env->startSection('script'); ?>
<script type="text/javascript">

 $(function(){
       $("#editbutton").click(function(){

         var name = $("#name").val();
         var surname = $("#surname").val();
         var email = $("#email").val();
         $("#editmessage").html("");
         $("#button-act").html("<button class='btn btn-primary' type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>  Loading...</button>")



        if(email == "" || name == "" || surname == ""){
            $("#editmessage").html("<div class='alert alert-warning'>Sorry, some fields are empty.</div>");
            $("#button-act").html("  <button class='btn btn-primary btn-sm' type='button' id='editbutton'>Save changes</button>");

          }
     else {
       $.ajax({

      type: "POST",
      url: "<?php echo e(route('edit.user', $user->id)); ?>",
      data: $('#adminsignup').serialize(),
      success: function(response){
        if(response == "success"){
          $("#editmessage").html("<div class='alert alert-success'>Successfully edited details.</div>");
            $("#button-act").html("  <button class='btn btn-primary btn-sm' type='button' id='editbutton'>Save changes</button>");
        }else if(response == "email"){
          $("#editmessage").html("<div class='alert alert-warning'>Email already belongs to another user</div>");
            $("#button-act").html("  <button class='btn btn-primary btn-sm' type='button' id='editbutton'>Save changes</button>");
        }else{
          $("#editmessage").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
            $("#button-act").html("  <button class='btn btn-primary btn-sm' type='button' id='editbutton'>Save changes</button>");
        }

     },error: function(data){
        var errors = data.responseJSON;
        $.each(errors, function(key, message){
          $("#"+key+"-field").html("<div style='color: red;'>"+message+"</div>");
            $("#button-act").html("  <button class='btn btn-primary btn-sm' type='button' id='editbutton'>Save changes</button>");
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
 $("#editmessage").html("");
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>