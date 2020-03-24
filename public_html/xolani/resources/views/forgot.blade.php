<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Recovery</title>

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
@keyframes  spinner {
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

<body class="hold-transition login-page">

  <div class="loading" id="loading" style="display: none;"></div>
<div class="centralize-wrapper">
    <div class="centralize-inner">
        <div class="centralize-content">
                <div class="login-box">

                       <div class="lds-spinner" style="display: none;"></div>
        <div class="login-logo">
            <a href="/"> <img src="{{ asset('log.svg') }}" alt=""
                                     class="img-fluid pad-b-10" style="width: 200px;height: 40px; margin-top: -10px"></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="login-box-msg">
                <p>Login your account.</p>
            </div>

            <form method="POST" action="{{ route('account.forgot')}}" class="validator">
              {{ csrf_field() }}
            <div class="form-group has-feedback ">
                <div>
                    <input class="form-control" id="email" name="email" placeholder="Enter Email" data-cval-name="The email field" data-cval-rules="required|escapeInput|email" name="fake_478" type="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <span class="validation-message cval-error"
                      data-cval-error="fake_478"></span>
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

 @if(session('errormsg'))
<div class="alert alert-danger">
       {{ session('errormsg')}}
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
                <a href="/acccount/forgot"
                   class="pull-left link-underline">Forget Password</a>
                <a href="/account/signup"
                   class="text-center pull-right link-underline">Register Account</a>
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



        $("#login").click(function(){
          $("#loading").show();


 });


        </script>
    <script>
        $(document).ready(function () {
            $('.validator').cValidate();
        });
    </script>
</body>

<!-- Mirrored from cryptomania.codemen.org/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 22:16:43 GMT -->
</html>
