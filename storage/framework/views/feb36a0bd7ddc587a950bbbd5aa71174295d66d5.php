<?php $__env->startSection('page'); ?>
Create an Account
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

.tick {
  background: url(images/done-tick.png) no-repeat;
  width: 20px;
  height: 20px;
  position: absolute;
  margin: 5px 20px;
  display: none;
}
</style>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section id="logins" style="padding-top: 72px;">
  <h1 class="ui header text-center">

 <div class="content">
   Signup

 </div>
 <br/>
   <div class="sub header" style="padding: 17px;">Take our courses. Signup below</div>
   <div class="sub header" id="successmessage" style=" width: 412px;
margin: 1vh auto;"><div class="alert alert-success">By signing up, an email of approval will be sent to you, to create your login password.</div></div>
</h1>
<div id="logreg-forms">
        <form class="form-signin" id="signupform">
        <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label for="validationServer03">First Name</label>
            <input type="text" class="form-control" id="name" onkeydown="input('name')" name="name" placeholder="Your First Name" required>
            <div id="name-feedback">

            </div>
          </div>
          <div class="form-group">
            <label for="validationServer03">First Name</label>
            <input type="text" class="form-control" id="surname" onkeydown="input('surname')" name="surname" placeholder="Your Last Name" required>
            <div id="surname-feedback">

            </div>
          </div>
          <div class="form-group">
            <label for="validationServer03">Cell Number</label>
            <input type="text" class="form-control" id="phone"  onkeyup="phonenumber(this)" name="phone" placeholder="Your Cell Number" required>
            <div id="phone-feedback">

            </div>
          </div>

          <div class="form-group">
            <label for="validationServer03">ID Number</label>
            <input type="text" class="form-control" id="id_number" onkeyup="idval(this)" name="id_number" placeholder="Your SA ID Number" required>
            <span class="tick"></span>
            <div id="id_number-feedback">

            </div>
          </div>
            <div class="form-group">
              <label for="validationServer03">Email address</label>
              <input type="text" class="form-control" id="email" onkeydown="input('email')" name="email" placeholder="Your Email" required>
              <span id="email-feedback">

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

              <div class="form-group">
            <div class="form-check" style="padding-top: 10px;">
          <input class="form-check-input" type="checkbox" value="yep" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">
          by signing up you agree to our <a href="">Terms</a> and <a href="">Conditions</a>
          </label>
          </div>
        </div>
        <button class='btn btn-primary btn-block' id="spinner-button" type='button' ><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
            <button class="btn btn-primary btn-block" id="signupbutton" type="submit"><i class="fas fa-sign-in-alt"></i> Sign up</button>


            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <a class="btn btn-success btn-block" href="/account/login" style="color: white;" id="btn-signup"><i class="fas fa-user-plus"></i> Sign in</a>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
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
function getDob(idNumber) {
   var Year = idNumber.substring(0, 2);
   var Month = idNumber.substring(2, 4)
   var Day = idNumber.substring(4, 6)

   var cutoff = (new Date()).getFullYear() - 2000

   var dob = (Year > cutoff ? '19' : '20') + Year + '/' + Month + '/' + Day;

   return dob;
}


  $("#spinner-button").hide();
$(function(){
  $("#signupbutton").click(function(ev){

    ev.preventDefault();

    if(document.getElementById("defaultCheck1").checked == false){
      $("#successmessage").html("<div class='alert alert-danger' role='alert'> Please agree to our Terms and Conditions</div>");


    }else {
    var name = $("#name").val();
    var surname = $("#surname").val();
    var email = $("#email").val();
    var id_number = $("#id_number").val();
    var phone = $("#phone").val();



    var correct = true;

    //Ref: http://www.sadev.co.za/content/what-south-african-id-number-made
    // SA ID Number have to be 13 digits, so check the length


    // get first 6 digits as a valid date
    var tempDate = new Date(id_number.substring(0, 2), id_number.substring(2, 4) - 1, id_number.substring(4, 6));

    var id_date = tempDate.getDate();
    var id_month = tempDate.getMonth();
    var id_year = tempDate.getFullYear();

    var fullDate = getDob(id_number);

    function isNumber(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    // get the gender
    var genderCode = id_number.substring(6, 10);
    var gender = parseInt(genderCode) < 5000 ? "Female" : "Male";

    // get country ID for citzenship
    var citzenship = parseInt(id_number.substring(10, 11)) == 0 ? "Yes" : "No";

    // apply Luhn formula for check-digits
    var tempTotal = 0;
    var checkSum = 0;
    var multiplier = 1;
    for (var i = 0; i < 13; ++i) {
        tempTotal = parseInt(id_number.charAt(i)) * multiplier;
        if (tempTotal > 9) {
            tempTotal = parseInt(tempTotal.toString().charAt(0)) + parseInt(tempTotal.toString().charAt(1));
        }
        checkSum = checkSum + tempTotal;
        multiplier = (multiplier % 2 == 0) ? 1 : 2;
    }
    if (id_number.length != 13 || !isNumber(id_number)) {
       $("#id_number-feedback").html("<div class='alert alert-warning'>Please input a valid ID number</div>");


   }
   else if (!((tempDate.getYear() == id_number.substring(0, 2)) && (id_month == id_number.substring(2, 4) - 1) && (id_date == id_number.substring(4, 6)))) {
       $("#id_number-feedback").html("<div class='alert alert-warning'>Please input a valid ID number</div>");


   }
   else if ((checkSum % 10) != 0) {
       $("#id_number-feedback").html("<div style='color:red;'>Please input a valid ID number</div>");


   } else {
$("#spinner-button").show();
$("#signupbutton").hide();
    $.ajax({

   type: "POST",
   url: "<?php echo e(route('account.signup')); ?>",
   data: { '_token': $('input[name=_token]').val(), name: name, surname: surname, email: email, phone: phone, id_number: id_number, gender: gender, age: fullDate},
   success: function(response){
     if(response == "success"){
       $('#signupform').hide();
       $("#logreg-forms").hide();

      $("#successmessage").html("<div class='alert alert-success' role='alert'> <h4 class='alert-heading'>Registration Successfull!</h4> <p>"+name+" your registeration has been Successfully, an email will be sent to you upon your account getting approved</p> <hr> <p class='mb-0'>For any query email us at capabilityhr.co.za</p></div>");

     }else if(response == "exists"){
       $("#signuperrors").html("<div class='alert alert-warning'>an account with this email has alread been created</div>");
     }else{
       $("#signuperrors").html("<div class='alert alert-warning'> Ooops looks like something went wrong, please try again later</div>");
     }

  },error: function(data){
     var errors = data.responseJSON;

$.each(errors, function(key,message){
   $("#"+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
   $("#spinner-button").hide();
   $("#signupbutton").show();

});



  }
});

}


}//if the checkbox

  });

});

function input(val){
  $("#"+val+"-feedback").html("");

}

function phonenumber(inputtxt) {

    var trimmed = inputtxt.value.replace(/\s/g, '');

    var regex = /^(\+?27|0)[6-8][0-9]{8}$/;
    if (regex.test(trimmed) == true) {
        $("#phone-feedback").html("");
        inputtxt.style.border = "1px solid #DADADA";
    } else {
        inputtxt.style.border = "1px solid red";
        $("#phone-feedback").html("<div style='color:red;'>Please input a valid Cell Number</div>");
    }
}

function idval(input) {
    var ex = /^(((\d{2}((0[13578]|1[02])(0[1-9]|[12]\d|3[01])|(0[13456789]|1[012])(0[1-9]|[12]\d|30)|02(0[1-9]|1\d|2[0-8])))|([02468][048]|[13579][26])0229))(( |-)(\d{4})( |-)(\d{3})|(\d{7}))/;
    if (ex.test(input.value) == false || input.value.length > 13) {

        input.style.border = "1px solid red";

       $("#id_number-feedback").html("<div style='color:red;'>Please input a valid ID number</div>");
    } else {
        $("#message").html("");
        input.style.border = "1px solid #ececec";
        $("#id_number-feedback").html("");


    }
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>