
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ auth()->user()->name }} {{ auth()->user()->surname }} - Home</title>
    
    <meta content="ie=edge" http-equiv="x-ua-compatible">
  
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('favicon.png') }}" rel="shortcut icon">
    
   
    <link href="{{ asset('home/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <link href="{{ asset('home/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('home/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/maince5a.css?version=4.4.1') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <style type="text/css">
    .label-primary {

    background-color: #337ab7;

}
.label {

    display: inline;
    padding: .2em .6em .3em;
    font-size: 95%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;

}
        .menu-w.color-scheme-dark ul.main-menu > li > a {
    color: #fff;
}
card.card-xs {
    height: 95px;
    overflow: hidden;
}
.badge, .btn, .card:not([class*="card-outline-"]), .chip, .jumbotron, .modal-dialog.cascading-modal .modal-c-tabs .nav-tabs, .modal-dialog.modal-notify .modal-header, .navbar, .pagination .active .page-link, .z-depth-1 {
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
}
.card {
       margin-bottom: 1rem;
    box-shadow: 0 9px 23px rgba(0, 0, 0, 0.09), 0 5px 5px rgba(0, 0, 0, 0.06) !important;
    -webkit-transition: box-shadow 0.7s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    -moz-transition: box-shadow 0.7s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    -o-transition: box-shadow 0.7s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    transition: box-shadow 0.7s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
    -webkit-border-radius: 0.4167rem;
    -moz-border-radius: 0.4167rem;
    -ms-border-radius: 0.4167rem;
    -o-border-radius: 0.4167rem;
    border-radius: 0.4167rem;
}
.card, .card .card-text {
    font-weight: 400;
}
.bg-gradient {
    color: #FFFFFF !important;

    background: -moz-linear-gradient(-45deg, #07a7e3 0%, #32dac3 100%);
    background: -webkit-linear-gradient(-45deg, #07a7e3 0%, #32dac3 100%);
    background: linear-gradient(to bottom, #323c58 0%, #303950 100%);
        background-color: rgba(0, 0, 0, 0);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=$qp-color-1, endColorstr=$qp-color-2,GradientType=1 );
    -webkit-transition: opacity 0.2s ease-out;
    -moz-transition: opacity 0.2s ease-out;
    -o-transition: opacity 0.2s ease-out;
    transition: opacity 0.2s ease-out;
}
.tile-left img{
    float: left;
    width: 18%;
}
.bg-primary {
    color: #FFFFFF;
    background-color: #07a7e3 !important;
}
.card {
    border-radius: .3rem;
}
.card, .card .card-body h3, .card .card-body h4, .card .card-text {
    font-weight: 400;
}
.bg-primary {
    background-color: #4285F4 !important;
}
.text-center {
    text-align: center !important;
}
.bg-primary {
    background-color: #007bff !important;
}
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card .card-body {
    padding: 2.083rem;
    font-weight: 400;
}

.btn .fa, .card .card-body {
    position: relative;
}
.bg-dark *, .bg-danger *, .bg-warning *, .bg-info *, .bg-success *, .bg-secondary *, .bg-dark .batch-icon, .bg-danger .batch-icon, .bg-warning .batch-icon, .bg-info .batch-icon, .bg-success .batch-icon, .bg-secondary .batch-icon, .bg-primary .batch-icon {
   
}
.card .card-body .tile-left {
    position: absolute;
}
.card .batch-icon-xxl {
    opacity: 0.75;
    -webkit-transition: opacity 0.225s ease-in-out;
    -moz-transition: opacity 0.225s ease-in-out;
    -o-transition: opacity 0.225s ease-in-out;
    transition: opacity 0.225s ease-in-out;
}

.batch-icon-user-alt::before {

    content: "\F044";

}
.card .card-body .tile-right {
    text-align: right;
    line-height: 1.618;
}

.card .card-body .tile-right .tile-number {
    font-size: 2rem;
    font-weight: 400;
}

.trending-up-basic {
    color: #24b314;
    padding: 0px;
}
.trending {
    padding: 3px 10px;
    border-radius: 30px;
    display: inline-block;
    font-size: .81rem;
    vertical-align: middle;
    margin-left: 10px;
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
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style>.cke{visibility:hidden;}</style></head>

<body class="menu-position-side menu-side-left full-screen with-content-panel color-scheme-dark" style="">
    <div class="all-wrapper with-side-panel solid-bg-all">
         
 
      
        <div class="layout-w">
 
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                        <a class="mm-logo" href="/u/home"> <img src="{{ asset('logo.svg') }}" alt="" class="img-fluid pad-b-10"><span>BLACKTHORN</span></a>
                    <div class="mm-buttons">
                       
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="{{ asset('home/img/avatar1.jpg') }}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{ auth()->user()->name }} {{ auth()->user()->surname }} </div>
                            <div class="logged-user-role">Investor</div>
                        </div>
                    </div>
                     <ul class="main-menu">
                    <li class="sub-header" style=" padding: 6px;"><span>MENU</span></li>
                    <li class="selected" style=" padding: 6px;">
                        <a href="/u/home">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Home</span></a>
                       
                    </li>
                    <li class=""  style=" padding: 6px;">
                        <a href="/u/deposit">
                            <div class="icon-w">
                                <div class="os-icon os-icon-credit-card"></div>
                            </div><span>Make Deposit</span></a>
                       
                    </li>
                  
                    <li class="" style=" padding: 6px;">
                        <a href="/u/withdraw">
                            <div class="icon-w">
                                <div class="os-icon os-icon-database"></div>
                            </div><span>Withdraw</span></a>
                       
                    </li>
                      <li class="" style=" padding: 6px;">
                        <a href="/u/withdrawalhistory">
                            <div class="icon-w">
                                <div class="os-icon os-icon-database-remove"></div>
                            </div><span>Withdrawal History</span></a>
                       
                    </li>
                      <li class="" style=" padding: 6px;">
                        <a href="/u/transactions">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>All Transactions</span></a>
                       
                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/referrals">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Affiliate Program</span></a>
                       
                    </li>
                    <li class=" has-sub-menu" style=" padding: 6px;">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Settings</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Profile</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="/u/profile">Profile Settings</a></li>
                                   
                               </ul>
                            </div>
                        </div>
                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/logout">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div><span>Logout</span></a>
                       
                    </li>
                </ul>
                </div>
                </div>
           
            <div class="menu-w menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-transparent selected-menu-color-bright">
                <div class="logo-w">
                    <a class="logo" href="/u/home">
                         <div class="logo-label"> <img src="{{ asset('logo.svg') }}" alt="" class="img-fluid pad-b-10">BLACKTHORN</div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="{{ asset('home/img/avatar1.jpg') }}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{ auth()->user()->name }} {{ auth()->user()->surname }} </div>
                            <div class="logged-user-role">Investor</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="{{ asset('home/img/avatar1.jpg') }}"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">{{ auth()->user()->name }} {{ auth()->user()->surname }}</div>
                                    <div class="logged-user-role">Investor</div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                               
                                <li><a href="/u/home"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>

                                <li><a href="/u/logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
              
                </div>
             
                <h1 class="menu-page-header"></h1>
                <ul class="main-menu">
                    <li class="sub-header" style=" padding: 6px;"><span>MENU</span></li>
                    <li class="selected" style=" padding: 6px;">
                        <a href="/u/home">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Home</span></a>
                       
                    </li>
                    <li class=""  style=" padding: 6px;">
                        <a href="/u/deposit">
                            <div class="icon-w">
                                <div class="os-icon os-icon-credit-card"></div>
                            </div><span>Make Deposit</span></a>
                       
                    </li>
                  
                    <li class="" style=" padding: 6px;">
                        <a href="/u/withdraw">
                            <div class="icon-w">
                                <div class="os-icon os-icon-database"></div>
                            </div><span>Withdraw</span></a>
                       
                    </li>
                      <li class="" style=" padding: 6px;">
                        <a href="/u/withdrawalhistory">
                            <div class="icon-w">
                                <div class="os-icon os-icon-database-remove"></div>
                            </div><span>Withdrawal History</span></a>
                       
                    </li>
                      <li class="" style=" padding: 6px;">
                        <a href="/u/transactions">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>All Transactions</span></a>
                       
                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/referrals">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Affiliate Program</span></a>
                       
                    </li>
                    <li class=" has-sub-menu" style=" padding: 6px;">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Settings</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Profile</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="/u/profile">Profile Settings</a></li>
                                   
                               </ul>
                            </div>
                        </div>
                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/logout">
                            <div class="icon-w">
                                <div class="os-icon os-icon-signs-11"></div>
                            </div><span>Logout</span></a>
                       
                    </li>
                </ul>
              
            </div>
          
            <div class="content-w">
               
                <div class="top-bar color-scheme-transparent">
              
                    <div class="top-menu-controls">
                       
                      
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="{{ asset('home/img/avatar1.jpg') }}"></div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w"><img alt="" src="{{ asset('home/img/avatar1.jpg') }}"></div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">{{ auth()->user()->name }} {{ auth()->user()->surname }} </div>
                                            <div class="logged-user-role">Investor</div>
                                        </div>
                                    </div>
                                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                    <ul>
                                        <li><a href="/u/profile"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                       
                                        <li><a href="/u/logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
               
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/u/home">Home</a></li>
                  
                </ul>
               
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">
                            <div class="row">
                                     
                        </div>
                                <div class="row">
                
                <div class='col-xs-12'>

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <button type="button" class="btn btn-success">SA Bank Deposit</button>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>

               

           
                  <div class="clearfx"></div>
                  <div class="col-lg-1"></div>

               <div class="col-lg-12" style="margin: 0px auto;">
                    <section class="box has-border-left-3 no-shadow" style="padding-top: 50px; padding-bottom: 30px;">
                       
                <div class="">
                    <div class="card-header" style="padding-bottom: 30px;">
                        <h3 class="card-title color-blue title-margin">Upload Screenshot</h3>
                        Please Attach a screenshot of your payment with your User ID written on it. down below are the payment details >>> your User ID is '{{ auth()->user()->id }}'
                    </div>

          
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Name:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                  Blackthorn Group
                                </div>

                             
                            </div>
                           
                        </div>
                    </div>

                      <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Bank:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                  FNB
                                </div>

                             
                            </div>
                            
                        </div>
                    </div>

                     <!-- Language -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Account type:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                  Business Cheque
                                </div>

                             
                            </div>
                            
                        </div>
                    </div>

                     <!-- Language -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Account Number:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                  
62807148061

                                </div>

                             
                            </div>
                            
                        </div>
                    </div>

                     <!-- Language -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Branch:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                  220 126
                                </div>

                             
                            </div>
                            
                        </div>
                    </div>

                     <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-7">Deposit Amount:</div>
                            <div class="col-sm-5">
                                <div class="detail">
                                 R{{ auth()->user()->getDeposits->amount }}
                                </div>

                             
                            </div>
                           
                        </div>
                    
                     

                    
                </div>
                <br/>
                <br/>
                <br/>


              @if(auth()->user()->getDeposits->status == "Pending")

                 <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3"><h6>Upload Screenshot Image</h6> </div>
                            <div class="col-sm-7">
                                <div class="detail">
                                 <form class="deform" enctype="multipart/form-data" >
          <div class="form-group">
             <label class="label">Upload Image Of Deposit</label>
           </div>
           {{ csrf_field() }}
           <div class="form-group">
        <input type="file"  class="upload" name="file1" id="file1" />
      </div>
      <div class="form-group">
          <input type="button" id="s" class="btn btn-info btn-rounded btn-fw" value="Confirm Payment" 
          /> 
        </div>

<progress id="progressBar" value="0" max="100" style="width: 300px;"></progress>
<h3 id="status"></h3>
<p id="loaded_n_total"></p>
</form>
</div>

                                </div>

                             
                            </div>
                        </div>

                        @else

                          
                          








 <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">Payment</div>
                            <div class="col-sm-7">
                                <div class="detail">
                                  <button type="button" class="btn btn-success">Processing Proof</button>
                                </div>

                             
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="editbutton">
                                  <button type="button" name="edit" class="btn btn-link"><i class="fas fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                            @endif
                        </div>
                    
                     

                    
              
                </div>



                       
                       
                       
                  
           
                
                      
                    </div>
                   
                   </div>
           
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
   <script src="{{ asset('home/bower_components/jquery/dist/jquery.min.js') }}"></script>


 <script src="{{ asset('home/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('home/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('home/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('home/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('home/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('home/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('home/js/demo_customizerce5a.js?version=4.4.1') }}"></script>
    <script src="{{ asset('home/js/maince5a.js?version=4.4.1') }}"></script>

    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>
   <script type="text/javascript">
 $(function(){
        $("#send").click(function(){ 
  Swal.fire({
  type: 'success',
  title: 'Hey',
  text: 'Your referral email has been sent!',
  footer: ''
})

 });
          
}); 


 $(function(){
        $("#submit").click(function(){   
      
          var bank = $("#bank").val();
          var acctype = $("#banktype").val();
          var accountnum = $("#accountnumber").val();
          var branchcode = $("#branchcode").val();
       
          
         
          
        
         if(bank == "" || acctype == "" || accountnum == "" || branchcode == ""){
            Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'Some fields are empty!',
  footer: ''
})
           }
      else {
         $.post("includes/loginh.php", {bank: bank,acctype: acctype, accountnum: accountnum,branchcode: branchcode})
         .done(function(data){
          if(data == "Success"){
            Swal.fire({
  title: 'Success',
  text: "You successfully updated your banking details!",
  type: 'success',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Close!'
}).then((result) => {
  if (result.value) {
    window.location = "index.php";
  }
})
        }else{
            
            Swal.fire({
  type: 'error',
  title: 'Oops...',
  text: 'Looks like something went wrong, please try again later!',
  footer: ''
})
        }
                 
         });
           
         }
           
                      
 });
          
});      





 $(function(){
        $("#invest").click(function(){   
      
          var amount = $("#amountt").val();
          
       
          
         
          
        
         if(amount == ""){
            Swal.fire({
  type: 'error',
  title: '',
  text: 'Please insert the amount you wish to invest',
  footer: ''
})
           }
      else {
         $.post("includes/reinvest.php", {amount: amount})
         .done(function(data){
          if(data == "Success"){
            Swal.fire({
  title: 'Success',
  text: "Investment successfully made!",
  type: 'success',
  showCancelButton: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Close!'
}).then((result) => {
  if (result.value) {
    window.location = "index.php";
  }
})
        }else if(data == "amount"){

Swal.fire({
  type: 'error',
  title: '',
  text: 'Investments start from R500',
  footer: ''
})
        }else if(data == "error"){

Swal.fire({
  type: 'error',
  title: '',
  text: 'You don not have funds to continue',
  footer: ''
})
        }else{
            
            Swal.fire({
  type: 'error',
  title: '',
  text: 'Looks like something went wrong, please try again later!',
  footer: ''
})
        }
                 
         });
           
         }
           
                      
 });
          
});  
        </script>



<script type="text/javascript">
      $(function(){
        $("#s").click(function(){   
        
         
         function _(el){
        return document.getElementById(el);
    }
    
   
        var file = _("file1").files[0];
        var transaction_id = "{{ auth()->user()->getDeposits->transaction_id }}";
        var _token = document.querySelectorAll('input[name=_token]')[0].value;
        
        var formdata = new FormData();
        formdata.append("file",file);
        formdata.append("transaction_id",transaction_id);
         formdata.append("_token",_token);
        var ajax = new XMLHttpRequest();
         var ex = $("#file1").val();
        
         var extension = ex.replace(/^.*\./, '');
          extension = extension.toLowerCase();
          
          if(extension == "png" || extension == "jpg"){
             ajax.upload.addEventListener("progress", progressHandler,true);
        ajax.addEventListener("load", completeHandler,false);
        ajax.addEventListener("error", errorHandler,false);
        ajax.addEventListener("abort", abortHandler,false);
        
        ajax.open("POST", "/user/upload");
        ajax.send(formdata);
          
          }else{
         _("status").innerHTML = "Please upload an image";

          }
       
        
    
    function progressHandler(event){
      
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = percent;
        _("status").innerHTML = "Processing";
        
    }
    function completeHandler(event){
       window.location = '/u/home';
         var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = percent;
        
    }
    function errorHandler(event){
        _("status").innerHTML = "upload failed";
    }
    function abortHandler(event){
        _("status").innerHTML = "upload aborted";
      }
        
           
                      
 });
          
});

</script>




</body></html>
