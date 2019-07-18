<?php $__env->startSection('page'); ?>
User Approved
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
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
display: block;
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

<div id="" style="width: 412px;
margin: 1vh auto;

transition: all 0.3s cubic-bezier(.25,.8,.25,1);">
      <div class="alert alert-success">
            <?php echo e($message); ?>

      </div>




            <br/><br/><br/><br/><br/><br/><br/><br/>

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



<?php $__env->startSection('login'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>