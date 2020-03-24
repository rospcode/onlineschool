
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>CapabilityHr | Forgot Password</title>


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




/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}


  </style>
</head>
<body style="background-color: #fbfbfb;">
    <!--Navbar-->
<div class="loading" id="loading" style="display: none;">Loading&#8230;</div>

<section class="login_class">
  <div class="back" style="background-image: url('/frontend/reasons-to-believe-header.jpg');
background-repeat: no-repeat;
background-size: cover;
background-position: center center;
background-attachment: fixed;">
<div class="contain rgba-gradient align-items-center">




    <div class="row">
      <div class="col-lg-7">
        <!--   <img id="logo" class="img-responsive" src="http://127.0.0.1:8000/img/logo.jpg"> -->
   </div>
   <div class="col-lg-5" style="background-color: white;
height: 1000px;
position: relative;
">
<div class="mid" style="background-color: #fbfbfb; padding-top: 30px;">
 <div class="header_contact" style="padding-bottom: 70px; padding-top: 220px;">

   <h4 class="text-center"> Reset Your Account</h4>
   <hr style="width: 10%; margin-top: 0.3rem;
margin-bottom: 0.2rem; background-color: white; border-top: 1px solid rgba(255, 255, 255, 0.1);" />
     <p class="text-center" style="font-weight: 630; margin-top: 20px;">CAPABILITYHR</p>


     <form class="form-signin" id="resetform" style="width: 90%;
padding-left: 50px;" />



           {{ csrf_field() }}

         <div class="form-group">
           <label for="validationServer03">Email address</label>
           <input type="text" class="form-control" id="resetemail" name="resetemail" placeholder="Your Email" required>
           <div class="resetemail-feedback">
           </div>
         </div>

         <div class="form-group">
           <div id="messages"></div>
         </div>


         <div id="spin">
           <button class='btn btn-success btn-block' type='button' disabled id="spin_button"><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
         <button class="btn btn-success btn-block" id="reset_button" type="button" style="color: white;"><i class="fas fa-sign-in-alt"></i>Reset</button>
       </div>
         <a href="#" id="account/signup">Register</a>
         <hr>
         <!-- <p>Don't have an account!</p>  -->

         </form>


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

  <script type="text/javascript">
  $(function(){
    $("#spin_button").hide();
    $("#reset_button").click(function(){
      $("#spin_button").show();
      $("#reset_button").hide();
      var password = $("#resetemail").val();
      if(password == ""){
        $("#spin_button").hide();
        $("#reset_button").show();
        $("#messages").html("<div class='alert alert-warning' role='alert'> Field Email Address cannot be empty </div>");
      }else{
        $.ajax({
       type: "POST",
       url: "{{ route('resetpassword') }}",
       data: $('#resetform').serialize(),
       success: function(response){
         if(response == "exists"){
           $("#spin_button").hide();
           $("#reset_button").show();
            $("#messages").html("<div class='alert alert-warning' role='alert'> invalid email address or account not approved</div>");
         }else if(response == "success"){
           $("#spin_button").hide();
           $("#reset_button").hide();
            $("#messages").html("<div class='alert alert-success' role='alert'> Password Reset Successfully, please check your emails for steps.</div>");
         }else{
           $("#spin_button").hide();
           $("#reset_button").show();
           $("#messages").html("<div class='alert alert-warning' role='alert'>Oops looks like something went wrong, please try again later</div>");
         }
           },error: function(data){
              var errors = data.responseJSON;
              $.each(errors, function(key,message){
                 $("#"+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
              });

           }
         });
      }




    });

  });
  </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Theme JS -->
  <script src="{{ asset('frontend/assets/js/argon.js') }}"></script>

  </body>
</html>
