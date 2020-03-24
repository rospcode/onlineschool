<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CapabilityHR | Signup</title>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="{{ asset('frontend/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">

  <link href="{{ asset('frontend/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <link href="{{ asset('frontend/css/fontawesome/css/all.css') }}" rel="stylesheet"/>
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('frontend/assets/css/argon.css') }}" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>

  body {
     background-color: white;
  }
.back {
  height: 100%;
}
.back .contain {

  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  width: 100%;
  height: 100%;
  background-attachment: fixed;
}
.rgba-gradient {
  background: -moz-linear-gradient(45deg, rgba(0, 9, 75, 0.7), rgba(0, 0, 0, 0.7) 100%);
      background-attachment: scroll;
  background-attachment: scroll;
  background-attachment: scroll;
  background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
}
.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}
.hr-light {
  border-top: 1px solid #fff;
}
.mb-4, .my-4 {
  margin-bottom: 1.5rem !important;
}
.mb-4, .my-4 {
  margin-bottom: 1.5rem !important;
}
h6 {
  line-height: 1.7;
}
h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
}
.fadeInRight {
  animation-name: fadeInRight;
}
.mt-xl-5, .my-xl-5 {
  margin-top: 3rem !important;
}
.bac img, .view video {
  position: relative;
  display: block;
}
.img-fluid, .modal-dialog.cascading-modal.modal-avatar .modal-header, .video-fluid {
  max-width: 100%;
  height: auto;
}
.white-text{
color: white;
}

.navbar-dark .navbar-nav .nav-link {
  color: white;
}
.nav-item {
  padding-left: 30px;
}

h1 {
  font-family: "Playfair Display";
  line-height: 46px;
  letter-spacing: 1px;
  font-weight: 400;
  font-style: normal;
  color: #000000;
  font-size: 30px;
}

.font-weight-bold {
  font-size: 50px;
  color: #ffffff;
  line-height: 60px;
  text-align: left;
  font-weight: 500 !important;
}
.consult-button{
background-color: rgba(255, 255, 255, 0.01);
color: rgb(42, 53, 63);
border-width: 1px;
border-style: solid;
border-radius: 3px;
border-color: rgb(42, 53, 63);
display: inline-block;
vertical-align: top;
margin-bottom: 20px;
font-size: 12px;
font-weight: 400;
line-height: 20px;
color: #000;
border-width: 1px;
border-style: solid;
padding-top: 20px !important;
padding-right: 40px !important;
padding-bottom: 20px !important;
padding-left: 40px !important;
-webkit-box-shadow: 0 16px 18px rgba(0,0,0,.2) !important;
box-shadow: 0 5px 10px rgba(255, 255, 255, 0.2) !important;
}

.consult-button:hover{
background-color: rgb(26, 143, 203);
color: rgb(255, 255, 255);
border-width: :1px;
border-style: solid;
border-radius: 3px;
border-color: rgb(26, 143, 203);
cursor: pointer;
}

.consult-button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.consult-button:hover span:after {
opacity: 1;
right: 0;
}

#section_2{
  background-image: url(images/training.png);
min-height: 500px;
background-repeat: no-repeat;
background-size: cover;
background-position: center center;
background-attachment: fixed;
}
  </style>
</head>
<body style="background-color: #fbfbfb;">
    <!--Navbar-->


<section class="login_class">
  <div class="back" style="background-image: url('../how-we-do-it-header.jpg');
background-repeat: no-repeat;
background-size: cover;
background-position: center center;
background-attachment: fixed;">
<div class="contain rgba-gradient align-items-center">




    <div class="row">
      <div class="col-lg-7">
        <!--   <img id="logo" class="img-responsive" src="http://127.0.0.1:8000/img/logo.jpg"> -->
   </div>
   <div class="col-lg-5" style="background-color: #fbfbfb;
height: 1200px;
position: relative;
">
<div class="mid" style="background-color: #fbfbfb; padding-top: 30px;">
 <div class="header_contact" style="padding-bottom: 70px; padding-top: 120px;">

   <h4 class="text-center"> Create An Account</h4>
   <hr style="width: 10%; margin-top: 0.3rem;
margin-bottom: 0.2rem; background-color: white; border-top: 1px solid rgba(255, 255, 255, 0.1);" />
     <p class="text-center" style="font-weight: 630; margin-top: 20px;">CAPABILITYHR</p>


     <form class="form-signin" method="post" id="signupform" style="width: 90%;
padding-left: 50px;">

      {{ csrf_field() }}
    <div class="form-group">
      <label for="validationServer03">First Name</label>
      <input type="text" class="form-control" id="name" onkeydown="input('name')" name="name" placeholder="Your First Name" required="">
      <div id="name-feedback">

      </div>
    </div>
    <div class="form-group">
      <label for="validationServer03">First Name</label>
      <input type="text" class="form-control" id="surname" onkeydown="input('surname')" name="surname" placeholder="Your Last Name" required="">
      <div id="surname-feedback">

      </div>
    </div>
    <div class="form-group">
      <label for="validationServer03">Cell Number</label>
      <input type="text" class="form-control" id="phone" onkeyup="phonenumber(this)" name="phone" placeholder="Your Cell Number" required="">
      <div id="phone-feedback">

      </div>
    </div>

    <div class="form-group">
      <label for="validationServer03">ID Number</label>
      <input type="text" class="form-control" id="id_number" onkeyup="idval(this)" name="id_number" placeholder="Your SA ID Number" required="">
      <span class="tick"></span>
      <div id="id_number-feedback">

      </div>
    </div>
      <div class="form-group">
        <label for="validationServer03">Email address</label>
        <input type="text" class="form-control" id="email" onkeydown="input('email')" name="email" placeholder="Your Email" required="">
        <span id="email-feedback">

        </span>
      </div>


      <div class="form-group">
          <div class="g-recaptcha" style="margin: 0px auto; width: 100%;" data-sitekey="6LeG1FkUAAAAADBYpZ5YcPhTfqZSaCqNfDJTKlQr" data-callback="verifyCaptcha"></div>
      </div>
      <div class="form-group">
        @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
    </div>
    @endif
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
  <button class="btn btn-primary btn-block" id="spinner-button" type="button" style="display: none;"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...</button>
      <button class="btn btn-primary btn-block" id="signupbutton" type="submit"> Sign up</button>


      <hr>
      <!-- <p>Don't have an account!</p>  -->
      <a class="btn btn-success btn-block" href="/account/login" style="color: white;" id="btn-signup">Sign in</a>
         </form>

           <div id="successmessage" style="width: 90%;
margin: 0px auto;"></div>


 </div>
</div>
   </div>

      </div>

  </div>
  </div>
</section>

  <!-- Core -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- Optional plugins -->
  <script src="{{ asset('frontend/assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js') }}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Theme JS -->
  <script src="{{ asset('frontend/assets/js/argon.js') }}"></script>
  <script type="text/javascript">
  function getDob(idNumber) {
     var Year = idNumber.substring(0, 2);
     var Month = idNumber.substring(2, 4);
     var Day = idNumber.substring(4, 6);

     var cutoff = (new Date()).getFullYear() - 2000;

     var dob = (Year > cutoff ? '19' : '20') + Year + '-' + Month + '-' + Day;

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
     url: "{{ route('account.signup') }}",
     data: { '_token': $('input[name=_token]').val(), name: name, surname: surname, email: email, phone: phone, id_number: id_number, gender: gender, age: fullDate},
     success: function(response){
       if(response == "success"){
         $('#signupform').hide();
         $("#logreg-forms").hide();
        $("#successmessage").html("<div class='alert alert-success' role='alert'> <h6 class='alert-heading text-center'>Registration Successful!</h6> <p class='text-center'>"+name+" your registeration has been Successful, an email will be sent to you upon account approval</p></div>");
       }else if(response == "exists"){
         $("#signuperrors").html("<div class='alert alert-warning'>an account with this email has alread been created</div>");
       }else{
         $("#signuperrors").html("<div class='alert alert-warning'> Ooops looks like something went wrong, please try again later</div>");
       }

    },error: function(data){
       var errors = data.responseJSON;

  $.each(errors, function(key,message){
    console.log(message);
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
  </body>
</html>
