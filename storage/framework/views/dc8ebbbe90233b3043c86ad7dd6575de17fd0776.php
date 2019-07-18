<?php $__env->startSection('page'); ?>
Finish Registration
 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('style'); ?>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 <style>
 #logreg-forms{
 width:412px;
 margin:1vh auto;
 background-color:#f3f3f3;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
 width: 100%;
 max-width: 410px;
 padding: 15px;
 margin: auto;
}
#logreg-forms .form-control {
 position: relative;
 box-sizing: border-box;
 height: auto;
 padding: 10px;
 font-size: 16px;
}
#logreg-forms .form-control:focus { z-index: 2; }
#logreg-forms .form-signin input[type="email"] {
 margin-bottom: -1px;
 border-bottom-right-radius: 0;
 border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
 border-top-left-radius: 0;
 border-top-right-radius: 0;
}

#logreg-forms .social-login{
 width:390px;
 margin:0 auto;
 margin-bottom: 14px;
}
#logreg-forms .social-btn{
 font-weight: 100;
 color:white;
 width:190px;
 font-size: 0.9rem;
}

#logreg-forms a{

 padding-top:10px;
 color:lightseagreen;
}

#logreg-form .lines{
 width:200px;
 border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px; }

#logreg-forms .facebook-btn{  background-color:#3C589C; }

#logreg-forms .google-btn{ background-color: #DF4B3B; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

#logreg-forms .form-signup .social-btn{ width:210px; }

#logreg-forms .form-signup input { margin-bottom: 2px;}

.form-signup .social-login{
 width:210px !important;
 margin: 0 auto;
}

/* Mobile */

@media  screen and (max-width:500px){
 #logreg-forms{
     width:370px;
 }

 #logreg-forms  .social-login{
     width:200px;
     margin:0 auto;
     margin-bottom: 10px;
 }
 #logreg-forms  .social-btn{
     font-size: 1.3rem;
     font-weight: 100;
     color:white;
     width:200px;
     height: 56px;

 }
 #logreg-forms .social-btn:nth-child(1){
     margin-bottom: 5px;
 }
 #logreg-forms .social-btn span{
     display: none;
 }
 #logreg-forms  .facebook-btn:after{
     content:'Facebook';
 }

 #logreg-forms  .google-btn:after{
     content:'Google+';
 }

}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section id="logins" style="padding-top: 72px;">
  <h1 class="ui header text-center">

 <div class="content">
   Account Signup

 </div>
 <br/>
   <div class="sub header" style="padding: 17px;">Take our courses. Signup below</div>
   <div class="sub header" id="successmessage" style=" width: 412px;
margin: 1vh auto;"><div class="alert alert-success">Hey , to finish registration please create a password for your account</div></div>
</h1>
<div id="logreg-forms">
        <form class="form-signin" id="signupform">
        <?php echo e(csrf_field()); ?>



            <div class="form-group">
              <label for="validationServer03">New Password</label>
              <input type="password" class="form-control" id="password" onkeydown="input('email')" name="password" placeholder="New Password" required>
              <span id="password-feedback">

              </span>
            </div>
            <div class="form-group">
              <label for="validationServer03">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password"  onkeydown="input('email')" name="confirm_password" placeholder="Confirm Password" required>
              <span id="confirm_password-feedback">

              </span>
            </div>


            <div class="form-group">
                <div class="g-recaptcha" style="margin: 0px auto; width: 100%;" data-sitekey="6LeG1FkUAAAAADBYpZ5YcPhTfqZSaCqNfDJTKlQr" data-callback="verifyCaptcha"></div>
            </div>
            <div class="form-group">
              <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
              <div id="signuperrors"></div>
            </div>


             <div id="finishbutton">
            <button class="btn btn-success btn-block" id="signupbutton" type="button"><i class="fas fa-sign-in-alt"></i>Change Password</button>
          </div>


            <hr>
            <!-- <p>Don't have an account!</p>  -->

            </form>


            <form action="/signup/" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>

                <p style="text-align:center">OR</p>

                <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>

    </div>
</section>

<section id="idsec" style="padding-top: 70px;">
 <div class="beng" style="">
   <div class="info-color-dark text-center py-4">
     <!--Newsletter-->
     <a id="footer-link-newsletter" href="/account/login" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Login
       <i class="fas fa fa-sign-in white-text ml-2"> </i>
     </a>
     <!--Newsletter-->
     <a id="footer-link-affiliate" href="/account/signup" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Signup
       <i class="fas  far fa-address-card white-text ml-2"> </i>
     </a>
     <!--Contact-->

     <a id="footer-link-affiliate" href="/w/courses" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block" style="color:white;">Available Courses
       <i class="fas fab fa-discourse white-text ml-2"> </i>
     </a>
     <!--GitHub-->

   </div>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(function(){
  $("#signupbutton").click(function(){

    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    var id = <?php echo e($get_user->id); ?>;
    $("#finishbutton").html("<div class='spinner-border text-light' role='status'><span class='sr-only'>Loading...</span></div>");


    $.ajax({

   type: "POST",
   url: "<?php echo e(route('reset.password')); ?>",
   data: { password: password, confirm_password: confirm_password, id: id},
   success: function(response){
    if(response == "success"){
        $("#signuperrors").html("<div class='alert alert-success'>Password changed successfully, you can login using your new password now</div>");
        $("#finishbutton").html("");
    }else{
      $("#finishbutton").html("");
        $("#signuperrors").html("<div class='alert alert-warning'>Ooops looks like something went wrong, please try again later</div>");
    }

  },error: function(data){
     var errors = data.responseJSON;
$.each(errors, function(key,message){
   $("#"+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");


});
$("#finishbutton").html("<button class='btn btn-success btn-block' id='signupbutton' type='button'><i class='fas fa-sign-in-alt'></i>Change Password</button>");

  }
});

  });

});

function input(val){
  $("#"+val+"-feedback").html("");

}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>