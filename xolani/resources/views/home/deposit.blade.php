
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ auth()->user()->name }} {{ auth()->user()->surname }} - Deposit</title>

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
.main-menu li:hover{
    background-color: #293145;
}


    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style>.cke{visibility:hidden;}</style></head>

<body class="menu-position-side menu-side-left full-screen with-content-panel color-scheme-dark" style="">
    <div class="all-wrapper with-side-panel solid-bg-all">

      <div id="loading" class="loading" style="display: none;"></div>
        <div class="layout-w">
             <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <div class="mm-buttons">

                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>


                </div>
                <div class="menu-and-user">

                     <ul class="main-menu">

                    <li class="selected" style=" padding: 6px;">
                        <a href="/u/home">
                            <span>Home</span></a>

                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/deposit">
                            <span>Make Deposit</span></a>

                    </li>

                    <li class="" style=" padding: 6px;">
                        <a href="/u/withdraw">
                           <span>Withdraw</span></a>

                    </li>
                      <li class="" style=" padding: 6px;">
                        <a href="/u/withdrawalhistory">
                            <span>Withdrawal History</span></a>

                    </li>



                      <li class="" style=" padding: 6px;">
                        <a href="/u/transactions">
                            <span>All Transactions</span></a>

                    </li>
                    <li class="" style=" padding: 6px;">
                        <a href="/u/referrals">
                            <span>Referrals </span></a>

                    </li>

                    <li class="" style=" padding: 6px; border-bottom: 1px solid #323b57;">
                        <a href="/u/logout">
                          <span>Logout</span></a>

                    </li>
                </ul>
                </div>
                </div>




            <div class="content-w">

                <div class="top-bar color-scheme-transparent">

                    <div class="top-menu-controls">




                    </div>

                </div>

                <ul class="breadcrumb">


                </ul>

                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">
                            <div class="row">

                        </div>
                             <div class="row">
                            <div class="col-lg-2"></div>
                          <div class="col-lg-8 col-xxl-6">
                                <!--START - Money Withdraw Form-->
                                <div class="element-wrapper">
                                    <div class="element-box">
                                        <form id="form_deposit">
                                            {{ csrf_field() }}
                                            <h5 class="element-box-header" style="color: white;">Investment Deposit</h5>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label class="lighter" for="" style="color: white;">Amount</label>
                                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                            <input class="form-control" id="amount" name="amount" placeholder="Enter Amount...ZAR" type="text" >

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label class="lighter" for="" style="color: white;">Deposit Type</label>
                                                        <select class="form-control" id="paymentoption" name="paymentoption">
                                                            <option id="bank" value="Bank">Bank</option>



                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12">
                                                    <div id="messagewith1"></div>
                                                </div>
                                            </div>
                                            <div class="form-buttons-w text-right compact"><button class="btn btn-primary" id="deposit" type="button"><span>Deposit</span></button></div>
                                        </form>
                                    </div>
                                </div>
                                <!--END - Money Withdraw Form-->
                            </div>
                  <div class="col-lg-2"></div>

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
          $(function(){
        $("#deposit").click(function(){

         var amount = $("#amount").val();
         var paymentoption = $("#paymentoption").val();

        $("#deposit").hide();




           if(amount == ""){
             $("#messagewith1").html("<div class='alert alert-warning'>Please don't leave fields empty.</div>");
             $("#change").show();
              $("#loading").hide();
           }else if(amount < 500 || amount > 10000){
                $("#messagewith1").html("<div class='alert alert-warning'>Min investing amount is R500 and Max is R100 000.</div>");
             $("#deposit").show();
              $("#loading").hide();
           }
      else {
          $.ajax({
           type: "POST",
           url: "{{ route('user.deposit') }}",
           data: $("#form_deposit").serialize(),
           success: function(data){
            if(data == "success"){
               $("#messagewith1").html("<div class='alert alert-success'>Deposit Request for investment made</div>");
               $("#deposit").show();
                $("#loading").hide();
                window.location = '/u/home';

            }else if(data == "exists"){
                 $("#messagewith1").html("<div class='alert alert-success'>you already have a pending investment</div>");
                  $("#loading").hide();
            }

            else{
                $("#messagewith1").html("<div class='alert alert-warning'>Ooops Looks like something went wrong, please try again later</div>");

                $("#deposit").show();
                 $("#loading").hide();

               }
           }, error: function(errors){
            console.log(errors.responseJSON);
           }

         });

         }



 });

});

    </script>



</body></html>
