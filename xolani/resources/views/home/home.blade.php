
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
       <link href="{{ asset('home/toastr/toastr.min.css') }}" rel="stylesheet">
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

.element-wrapper .element-header::after {
    content: "";
    background-color:
    #313a54;
    width: 100%;
    height: 4px;
    border-radius: 0px;
    display: block;
    position: absolute;
    bottom: -3px;
    left: 0px;
}

.main-menu li:hover{
    background-color: #293145;
}

    </style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style>.cke{visibility:hidden;}</style></head>

<body class="menu-position-side menu-side-left full-screen with-content-panel color-scheme-dark" style="">
    <div class="all-wrapper with-side-panel solid-bg-all">


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




            <div class="menu-w menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-transparent selected-menu-color-bright">


                <div class="menu-actions">

                </div>

                <h1 class="menu-page-header"></h1>


            </div>

            <div class="content-w">

                <div class="top-bar color-scheme-transparent">

                    <div class="top-menu-controls">




                    </div>

                </div>


                <div class="content-i">
                    <div class="content-box">

                        <div class="row">
                                          <script src="{{ asset('home/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
 <div class="col-sm-12">
                                <div class="element-wrapper">


                                    <div class="element-content">
                                        <div class="row">

                                              <div class="col-sm-12">
            <div class="user-profile compact">
                <div class="up-head-w" style="background-image:url(img/profile_bg1.jpg)">
                    <div class="up-social"></div>


                </div>
                <div class="up-controls">
                    <div class="row">

                        <div class="col-sm-12">
                             <div class="uprofile-buttons">
                                        <p id="p1">Welcome {{ auth()->user()->name }} {{ auth()->user()->surname }} </p>

                                    </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="value-pair">
                                <div class="label">Status:</div>
                                <div class="">Online</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="element-wrapper">

            </div>
        </div>

                                             <div class="col-sm-3 col-xxxl-3">
                                                <div class="card card-tile card-xs bg-primary bg-gradient text-center ">
                                <div class="card-body p-4">
                                    <!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
                                    <div class="tile-left">
                                      <img src="{{ asset('img/coins.png') }}" class="img-responsive">
                                    </div>
                                    <div class="tile-right">
                                        <div class="tile-number">R{{ auth()->user()->getFunds->funds }}</div>
                                        <div class="tile-description" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;"><div class="trending trending-up-basic"><span></span> </div>Available
                                      </div>
                                    </div>
                                </div>


                            </div>
                                            </div>



                                             <div class="col-sm-3 col-xxxl-3">
                                                <div class="card card-tile card-xs bg-primary bg-gradient text-center  ">
                                             <div class="card-body p-4">
                                                                       <div class="tile-left">
                                      <img src="{{ asset('img/giftbox.png') }}" class="img-responsive">
                                    </div>
                                    <div class="tile-right">
                                        <div class="tile-number">R{{ auth()->user()->getFunds->bonus }}</div>
                                        <div class="tile-description" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;"><div class="trending trending-up-basic"><span></span></div>Bonus</div>
                                    </div>
                                </div>
                                </div>
                                </div>


                                             <div class="col-sm-3 col-xxxl-3">
                                                <div class="card card-tile card-xs bg-primary bg-gradient text-center  ">
                                <div class="card-body p-4">
                                                                        <div class="tile-left">
                                      <img src="{{ asset('img/earnings.png') }}" class="img-responsive">
                                    </div>
                                    <div class="tile-right">
                                        <div class="tile-number"><span class="" style=""></span>

                                        <?php $live = 0; ?>

                                        @foreach(auth()->user()->getLive as $lives)
                                         <?php $live += $lives->amount; ?>
                                        @endforeach
                                        R{{ $live }}</div>
                                        <div class="tile-description"style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;"><div class="trending trending-up-basic"><span></span> </div>Live INV </div>
                                    </div>
                                </div>
                            </div>
                                            </div>

                                         <!--
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label" style="color: white;">Referrals</div>
                                                    <div class="value">5</div>
                                                     <div class="trending trending-up-basic"><span></span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                </a>
                                            </div>    </div>
                                              </div>
                                           -->
                                            <div class="col-sm-3 col-xxxl-3">
                                                <div class="card card-tile card-xs bg-primary bg-gradient text-center ">
                                <div class="card-body p-4">
                                    <!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
                                    <div class="tile-left">
                                      <img src="{{ asset('img/refer.png') }}" class="img-responsive">
                                    </div>
                                    <div class="tile-right">
                                        <div class="tile-number">{{ count(auth()->user()->getReferrals) }} </div>
                                        <div class="tile-description" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;" ><div class="trending trending-up-basic"><span></span> </div>Referred</div>
                                    </div>
                                </div>
                            </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>




<div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingFormModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Cancel Re-Invest</span><span class="os-icon os-icon-close"></span></button>

            <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title">Re-Invest Your Balance</h4>
                <div class="onboarding-text">You can re-invest your available funds to make 50% interest in 25 days.</div>
                <form method="post" action="/u/reinvest">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Available</label>
                                <input class="form-control" type="text" value="R{{ auth()->user()->getFunds->funds }}"  readonly="readonly" placeholder="R{{ auth()->user()->getFunds->funds }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">INV Amount</label>
                                <input class="form-control" id="amountt" name="amount" type="text" placeholder="Amount to invest">
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                            <div id="message"></div>
                        </div>
                        <div class="form-buttons-w">
                            <button type="submit" id="invest" class="btn btn-block btn-primary btn-corner right15" value="">Invest <i class="fa fa-check"></i></button>

                        </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div aria-hidden="true" class="onboarding-modal modal fade animated" id="table" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Blackthorn Investment Table</span><span class="os-icon os-icon-close"></span></button>

            <div class="onboarding-content with-gradient">
                <h4 class="onboarding-title"></h4>
                <div class="onboarding-text"></div>

                    <div class="row">
                        <div class="col-sm-12">
                          <img src="{{ asset('img/table.jpg') }}" class="img-responsive" style="width: 100%;
height: auto;">
                        </div>

                    </div>



            </div>
        </div>
    </div>
</div>                        </div>




                            <div class="row">

                        </div>
                                <div class="row">
                                       <div class="col-lg-12">
                            <div class="element-wrapper">





                                      <div class="row">

                                    @if(auth()->user()->getDeposits != "")



                                         <div class="col-lg-4">


                                              <div class="card card-tile card-xs bg-primary bg-gradient">

  <div class="card-body p-4">
<h5 class="text-center" style="color: white; padding-top: 20px;font-weight: 800; padding-bottom: 30px;"> INV TR - {{ auth()->user()->getDeposits->transaction_id }}</h5>

<h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Date Created:</h6>
<p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">{{ auth()->user()->getDeposits->created_at }}</p>
<h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Deposit Type: </h6>
<p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">{{ auth()->user()->getDeposits->paymentoption }}</p>
<h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Initial INV Amount:</h6>
<p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">R{{ auth()->user()->getDeposits->amount }}</p>

<h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">INV Status:</h6>
<p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">{{ auth()->user()->getDeposits->status }}</p>

<div class="row">
    <div class="col-lg-3">

    </div>
    <div class="col-lg-6">
        @if(auth()->user()->getDeposits->status == "Pending" )


              <a href="/u/payment/{{ auth()->user()->getDeposits->transaction_id}}" class="btn btn-primary center-block" style="width: 100%; margin-bottom: 20px; ">Pay Now</a>
            <a href="/u/deposit/cancel/{{ auth()->user()->getDeposits->transaction_id}}" class="btn btn-danger center-block" style="width: 100%; margin-bottom: 20px; margin-left: 0rem">Cancel</a>


        @endif


    </div>
    <div class="col-lg-3">

    </div>
    </div>
  </div>
</div>



</div>



                                    @endif
                                </div>





                                </div>

                    </div>



                            <div class="col-sm-12">


                                <div class="element-wrapper">

                                    <h6 class="element-header">My Investments</h6>
                                      @foreach(auth()->user()->getLive as $live)
                                    <div class="card card-tile card-xs bg-primary bg-gradient">

      <div class="card-body p-4">
    <h5 class="text-center" style="color: white; padding-top: 20px;font-weight: 800; padding-bottom: 30px;"> TR - {{ $live->transaction_id }}</h5>

    <h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Amount:</h6>
    <p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">R{{ $live->amount }}</p>
    <h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Date: </h6>
    <p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">{{ $live->created_at }}</p>
    <h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">End Date:</h6>
    <p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">{{ $live->end_date }}</p>

    <h6 class="text-center" style="color: white; font-weight: 800; font-size: 16px;">Growth:</h6>
    <p class="text-center" style="color: white; font-weight: 500;position: relative;bottom: 8px; font-size: 16px;">R{{ $live->growth }}</p>

    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">


              


        </div>
        <div class="col-lg-3">

        </div>
        </div>
      </div>
    </div>
    @endforeach



                            </div>





                            <div class="col-lg-9">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Transactions History</h6>
                                    <div class="element-box">
                                        <div class="table-responsive">
                                            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>

                                                        <th class="text-right">Amount</th>
                                                        <th class="text-right">Note</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                      <?php $count_2 = 1; ?>
                                                    @foreach(auth()->user()->getTransactions as $transaction)

                                                          <tr>
                                                            <td><?php echo $count_2; ?></td>
                                                            <td>{{ $transaction->transaction_id }}</td>
                                                            <td>{{ $transaction->created_at }}</td>

                                                            <td class="text-right">R{{ round($transaction->amount) }}</td>
                                                            <td class="text-right">{{ $transaction->quote }}</td>

                                                            <?php $count_2++; ?>
                                                          </tr>
                                                    @endforeach


                                                                      </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                        </div>
                        <div class="col-lg-3">


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
    <script src="{{ asset('home/toastr/toastr.min.js') }}"></script>


  @if(session('msg'))

<script type="text/javascript">

$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Successfully', "{{ session('msg') }}");

    }, 1300);
  });

    </script>
    @endif




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





</body></html>
