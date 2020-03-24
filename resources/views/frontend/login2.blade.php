<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Welcome</title>


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
  height: 950px;
}
.back .contain {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  width: 100%;
  height: 950px;
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
  <div class="back" style="background-image: url('frontend/reasons-to-believe-header.jpg');
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
bottom: 70px;">
<div class="mid" style="background-color: #fbfbfb; padding-top: 30px;">
 <div class="header_contact" style="padding-bottom: 70px; padding-top: 60px;">

   <h4 class="text-center"> Login To Your Account</h4>
   <hr style="width: 10%; margin-top: 0.3rem;
margin-bottom: 0.2rem; background-color: white; border-top: 1px solid rgba(255, 255, 255, 0.1);" />
     <p class="text-center" style="font-weight: 630; margin-top: 20px;">CAPABILITYLEGALHR</p>


     <form class="form-signin" method="post" id="login_form" action="{{ route('account.login') }}" style="width: 90%;
padding-left: 50px;">

      <div class="form-group">
         {{ csrf_field() }}
      </div>

         <div class="form-group">
           <label for="validationServer03">Email address</label>
           <input type="text" class="form-control" name="email" name="email" placeholder="Your Email" required>
           <div class="invalid-feedback">

           </div>
         </div>

         <div class="form-group">
           <label for="validationServer03">Password</label>
           <input type="password" class="form-control" name="password" name="password" placeholder="Your Password" required>
           <div class="invalid-feedback">

           </div>
         </div>
         <div class="form-group">
             <div class="g-recaptcha" style="margin: 0px auto; width: 100%;" data-sitekey="6LeG1FkUAAAAADBYpZ5YcPhTfqZSaCqNfDJTKlQr" data-callback="verifyCaptcha"></div>
         </div>

         <div class="form-group">
           @if($errors->any())

           <ul>
             @foreach($errors->all() as $error)
             <li> {{ $error}}</li>
             @endforeach
           </ul>
           @endif   
         </div>

         <div class="form-group">
           @if(session('msg'))
           <div class="alert alert-danger">
             {{ $session('msg') }}
           </div>
           @endif
         </div>



         <div id="spin">
         <button class="btn btn-success btn-block" id="login_button" type="submit"<i class="fas fa-sign-in-alt"></i> Sign in</button>
       </div>
         <a href="/password/reset" id="forgot_pswd">Forgot password?</a>
         <hr>
         <!-- <p>Don't have an account!</p>  -->
         <a class="btn btn-primary btn-block" href="/account/signup" id="btn-signup" style="color: white;">Sign up New Account</a>
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


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Theme JS -->
  <script src="{{ asset('frontend/assets/js/argon.js') }}"></script>

  </body>
</html>
