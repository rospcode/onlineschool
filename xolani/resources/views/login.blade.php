@if(auth()->check())
<?php echo "<script> window.location = '/u/home';</script>"; ?>
@endif


<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="">
    <title>Login</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.svg') }}">
        <link rel="stylesheet" href="{{ asset('frontend/common/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/common/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/backend/assets/css/admin_lte.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/backend/assets/css/template_color.css') }}">
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

      <style type="text/css">


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
  -webkit-animation: spinner 0.6s infinite;;
  -moz-animation: spinner 0.6s infinite;;
  -ms-animation: spinner 0.6s infinite;;
  -o-animation: spinner 0.6s infinite;;
  animation: spinner 0.6s infinite;;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
     transform: scale(0);
   }
   100% {
     transform: scale(1);
   }
}
@-moz-keyframes spinner {
  0% {
     transform: scale(0);
   }
   100% {
     transform: scale(1);
   }
}
@-o-keyframes spinner {
  0% {
     transform: scale(0);
   }
   100% {
     transform: scale(1);
   }
}
@keyframes  spinner {
  0% {
     transform: scale(0);
   }
   100% {
     transform: scale(1);
   }
}


.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 17px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}






.lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin: 0px auto;
display: inherit;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: black;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}



    </style>

    </head>

<body class="hold-transition login-page" style="background-color:
#293145;
color:
#ccd9e8;">


<div class="centralize-wrapper">
    <div class="centralize-inner">
        <div class="centralize-content">
                <div class="login-box">

                       <div class="lds-spinner" style="display: none;"></div>
        <div class="login-logo">
            <a href="/"> <img src="{{ asset('log.svg') }}" alt=""
                                     class="img-fluid pad-b-10" style="width: 100%;
margin-top: -10px;
height: 80px;"></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-box-msg">
                <h4>Login your account.</h4>
            </div>

            <form method="POST" action="{{ route('account.login')}}" class="validator" id="loginformsubmission">
              {{ csrf_field() }}
            <div class="form-group has-feedback ">
                <div>
                    <input class="form-control" id="email" name="email" placeholder="Enter Email" data-cval-name="The email field" data-cval-rules="required|escapeInput|email" name="fake_478" type="email">

                </div>
                <span class="validation-message cval-error"
                      data-cval-error="fake_478"></span>
            </div>



           <div class="form-group has-feedback ">
                <div>
                    <input class="form-control" id="password" name="password" placeholder="Enter password" data-cval-name="The password field" data-cval-rules="required|escapeInput|between:6,32|followedBy:password_confirmation" name="fake_477" type="password" value="">

                </div>
                <span class="validation-message cval-error"
                      data-cval-error="fake_477"></span>
            </div>



        <div class="form-group" id="displaymessage">


        </div>
            <div class="form-group">

              <div class="lds-ellipsis" id="spinme" style="display: none;"><div></div><div></div><div></div><div></div></div>


               @if ($errors->any())
     <div class="alert alert-danger">
         <ul style="    font-size: 16px;">
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif

 @if(session('errormsg'))
<div class="alert alert-danger">
       {{ session('errormsg')}}
     </div>

 @endif


  @if(session('msg'))
<div class="alert alert-danger">
       {{ session('msg')}}
     </div>

 @endif

  @if(session('successmsg'))
<div class="alert alert-success">
       {{ session('successmsg')}}
     </div>

 @endif
               <div id="signuperrors"></div>
             </div>

            <button class="btn btn-primary btn-flat btn-block form-submission-button" id="login" type="submit" value="login"> Login</button>

            </form>

            <div class="clearfix link-after-form">


            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
        </div>
    </div>
</div>
<div class="flash-message">
    <div class="centralize-wrapper">
        <div class="centralize-inner">
            <div class="centralize-content">
                <div class="flash-removable">
                    <button type="button" class="close flash-close" aria-hidden="true">×</button>
                    <div class="flash-icon"></div>
                    <p>
                                            </p>
                    <a class="flash-confirm hidden-flash-item btn btn-sm btn-info btn-flat" href="javascript:;">Confirm</a>
                    <a class="flash-close hidden-flash-item btn btn-sm btn-warning btn-flat" href="javascript:;">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- jQuery 3 -->
<script src="{{ asset('frontend/common/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/common/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/common/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/backend/assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('frontend/backend/assets/js/custom.js') }}"></script>

    <script type="text/javascript">

            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });






        </script>
    <script>
        $(document).ready(function () {
            $('.validator').cValidate();
        });
    </script>

    <script type="text/javascript">
    $("#login").click(function(ev){
      ev.preventDefault();
      $("#spinme").show();
      $("#login").hide();
      let email = $("#email").val();
      let password = $("#password").val();

      if(!email){
        $("#displaymessage").html("<div class='alert alert-danger'>Email is empty</div>");
        $("#spinme").hide();
        $("#login").show();
      }else if(!password){
        $("#displaymessage").html("<div class='alert alert-danger'>Password is empty</div>");
        $("#spinme").hide();
        $("#login").show();
      }else if(!ValidateEmail(email)){
        $("#displaymessage").html("<div class='alert alert-danger'>The entere email is invalid</div>");
        $("#spinme").hide();
        $("#login").show();
      }else{
      
      document.getElementById("loginformsubmission").submit();

    });



    function ValidateEmail(mail)
    {
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
      {
        return (true)
      }

        return (false)
    }
    </script>
</body>


</html>
