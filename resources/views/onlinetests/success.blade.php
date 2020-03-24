<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $get_test->test_title }}</title>


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="{{ asset('test/argon/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('test/argon/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <link href="{{ asset('test/argon/css/fontawesome/css/all.css') }}" rel="stylesheet"/>
  <link rel="icon" href="{{ asset('test/html/wasps/images/wasps_images/logo.png') }}">

  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('test/argon/assets/css/argon.css') }}" rel="stylesheet">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{  ('backend/css/iCheck/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/skins/all.css?v=1.0.2') }}" rel="stylesheet">

  <style>

  body {
     background-color: white;
  }


.back {
  height: 90px;
}
.back .contain {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  width: 100%;
  height: 90px;
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
  font-size: 0px;
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
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
  border: 1px solid #bbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}


#signArea{
  width:304px;
  margin: 15px auto;
}
.sign-container {
  width: 90%;
  margin: auto;
}
.sign-preview {
  width: 10px;
  height: 0px;
  border: solid 1px #CFCFCF;
  margin: 10px 5px;
}
.tag-ingo {
  font-family: cursive;
  font-size: 12px;
  text-align: left;
  font-style: oblique;
}
.center-text {
  text-align: center;
}
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px;
  box-sizing: border-box;
  border: 26px solid #cef;
  border-color: #cef transparent #cef transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
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


p {
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4;
}


/* Absolute Center Spinner */
.load{
  align-items: center;
 background:  white;
 display: flex;
 height: 100vh;
 justify-content: center;
 left: 0;
 position: fixed;
 top: 0;
 transition: opacity 0.3s linear;
 width: 100%;
 z-index: 9999;
}
.rotate {
  animation: rotation 1s infinite linear;
}




@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}





@media (min-width: 1400px)
{
    .mid{


       margin: 0px auto;
    }
    .container {
    max-width: 1340px;
    }
}
  </style>


</head>
<body style="background-color: #fbfbfb;">
    <!--Navbar-->


<div class="loading" id="loading" style="display: none;">Loading&#8230;</div>

<div class="load" style="display: none;">



<img src="{{ asset('frontend/images/hr_loader.png')}}" class="rotate"  style="width: 100px;" />
<h3 style="position: relative;top: 100px;right: 98px;">Loading</h3>

</div>


<section class="login_class">
  <div class="container">
    <div class="row">
      <div class="col-lg-1">

      </div>

   <div class="col-lg-10" style="
height: 1000px;
position: relative;">
<div class="mid" style="background-color: #fbfbfb; padding-top: 0px;">
 <div class="header_contact" style="padding-bottom: 10px; padding-top: 10px; background-color: #0c1832;">



   <div class="row">
     <div class="col-lg-6">

       @if(auth()->check())
       <a href="{{ url()->previous() }}">
       <img src="{{ asset('logo.jpg') }}" class="img-responsive" style="width: 40%; position: relative;top: 14%;">
       </a>
       @else
       <a href="/">
       <img src="{{ asset('logo.jpg') }}" class="img-responsive" style="width: 40%; position: relative;top: 14%;">
       </a>
       @endif

     </div>
     <div class="col-lg-6">
       <div style="float: right;right: 15px;position: relative; ">
         <h5 style="color: white;font-weight: 600;">{{ $get_test->test_title }}</h5>
         <p style="color: white;font-weight: 600;">{{ $get_user_guest->fullname }}
         </div>
     </div>
   </div>
</div>




        <div class="row">
          <div class="col-lg-12">




            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 70px; background-color: white;">
<div></div><p></p>
              <span class="alert-inner--text" style="color: black; width: 100%;">{{ $get_test->conclusion_text }}   </span>


            <div></div><p></p>

             </div>





  @if($get_user_guest->result == "Passed")

  <div class="alert alert-success alert-dismissible fade show" role="alert" style="">


  <div></div><p></p>
    <span class="alert-inner--text" style="color: white; font-weight: 700;  font-size: 17px;">{{ $get_test->pass_message}} </span>
  <div></div><p></p>

   </div>




            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 70px; ">


            <p class="text-center" style="margin: 0px auto;
display: inherit;
font-weight: 700;

padding-top: 10px;
font-size: 37px;
"><strong><i class="fas fa-check-circle"></i> {{  $get_user_guest->test_score }}% Passed <br> Congratulations!!!</strong></p>
<span class="alert-inner--text">  </span>

           </div>

           @else

           <div class="alert alert-danger alert-dismissible fade show" role="alert" style="">
               <div></div><p></p>
             <span class="alert-inner--text" style="color: white;  font-weight: 700; font-size: 17px;">{{ $get_test->fail_message }} </span>
           <div></div><p></p>

            </div>


           <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 70px; ">


           <p class="text-center" style="margin: 0px auto;
display: inherit;
font-weight: 700;

font-size: 37px;
"><strong><i class="fas fa-times-circle"></i> {{ $get_user_guest->test_score }}% Failed <br> SORRY!!!</strong></p>
<span class="alert-inner--text">  </span>

          </div>

          @endif








        </div>

        <div class="col-lg-6" style="padding-top: 20px;">
          <button class="btn btn-primary btn-block" style="background-color: #0c1832; border-color: #0c1832; padding: .705rem 1.25rem;" type="button" data-toggle="collapse" data-target="#results" aria-expanded="false" aria-controls="collapseExample">
   View Results
 </button>
        </div>
        <div class="col-lg-6" style="padding-top: 20px;">
          @if($get_user_guest->result == "Failed")
          <div role="alert" class="alert alert-danger alert-sm alert-dismissible fade show" style="padding: 0.7rem 1.5rem;">

            <p class="text-center" style="margin: 0px auto;

  "> <b style="font-weight: 700;">Your scored: {{ $get_user_guest->score }}</b></p>

           </div>
           @else

           <div role="alert" class="alert alert-success alert-sm alert-dismissible fade show" style="padding: 0.7rem 1.5rem;">

             <p class="text-center" style="margin: 0px auto;

         "> <b style="font-weight: 700;">Your scored: {{ $get_user_guest->score }}</b></p>

            </div>
           @endif
        </div>
        </div>







        <div class="collapse" id="results" style="margin-top: 50px;">
          <div class="">
          <div class="card card-body">


            <?php $my_count = 0; ?>
            <?php $count = 1; $just_sure = "";


             ?>
 <?php $simple = 0; ?>
            @foreach($question_for_test as $test)
            @if($test->question_type == 1)

            <?php $count_right = 0; ?>
            <div class="row">
               <div class="col-lg-12">
                 <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                   <div class="row" style="padding-top: 0px;">
                     <div class="col-lg-12">
                       <div class="row">
                          <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                            <div class="col-lg-11">
                              <div class="form-group">
                                <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">
                                    {{ $test->question }}

                                </p>
                              </div>
                            </div>
                       </div>
                     </div>

                     <div class="col-lg-12" style="padding-top: 15px;">
                       <div class="row">

                         <?php $dd = 0; ?>

                         @foreach($test->getAnswers as $answer)

                         <?php $dd = $from_answers[$simple]->tot; ?>

                              @if($answer->id == $from_answers[$simple]->answer_id)
                                  @if($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 1)
                            <div class="col-lg-1">
                              <div class='i-checks'>
                                <label style="background-color: green;" >
                                  <input type='radio' disabled="disabled"     checked="checked"   value='' name='' style='position: absolute; opacity: 0;'> <i></i>
                                </label>
                              </div>
                            </div>
                            <div class="col-lg-11">
                                 <p style="position: relative;
                  right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                            </div>
                              <?php $count_right++; ?>

                            @elseif($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 0)



                            <div class="col-lg-1">
                              <div class='i-checks'>
                                <label   >
                                  <input type='radio'   disabled="disabled" checked="checked"  value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                </label>
                              </div>
                            </div>
                            <div class="col-lg-11">
                                 <p style="position: relative;
                  right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                            </div>


                            @else
                            <div class="col-lg-1">
                              <div class='i-checks'>
                                <label>
                                  <input type='radio' disabled="disabled" value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                </label>
                              </div>
                            </div>
                            <div class="col-lg-11">
                                 <p style="position: relative;
                  right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                            </div>


                            @endif



                            @else

                            {{  $from_answers[$simple]->answer_id}}

                            {{ $answer->id }}




                              @endif



    <?php $simple++; ?>


                         @endforeach








                      @if($count_right != 0)
                <div class="col-lg-12" style="padding-top: 15px;">
                     <p style="float: left;">Your Answer: <b style="color: green;">Correct </b></p> <p style="float: right;">({{ $count_right}}/{{ $dd}})</p>
                </div>

                @else
                <div class="col-lg-12" style="padding-top: 15px;">
                     <p style="float: left;">Your Answer: <b style="color: red;"> Incorrect </b></p> <p style="float: right;">({{ $count_right}}/{{ $dd}})</p>
                </div>
                @endif

                    </div>
                     </div>

                  </div>
                 </div>
               </div>
            </div>




            @elseif($test->question_type == 2)

                        <?php $count_right = 0; ?>
                        <div class="row">
                           <div class="col-lg-12">
                             <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                               <div class="row" style="padding-top: 0px;">
                                 <div class="col-lg-12">
                                   <div class="row">
                                      <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                                        <div class="col-lg-11">
                                          <div class="form-group">
                                            <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">
                                                {{ $test->question }}

                                            </p>
                                          </div>
                                        </div>
                                   </div>
                                 </div>

                                 <div class="col-lg-12" style="padding-top: 15px;">
                                   <div class="row">

                                     @foreach($test->getAnswers as $answer)
                                     <?php $mn = $from_answers[$simple]->tot; ?>
                                          @if($answer->id == $from_answers[$simple]->answer_id)
                                              @if($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 1)
                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label style="background-color: green;">
                                              <input type='checkbox' disabled="disabled"  checked="checked"   value='' name='' style='position: absolute; opacity: 0;'> <i></i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;
                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>

                                          <?php $count_right++; ?>

                                        @elseif($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 0)



                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label>
                                              <input type='checkbox'   disabled="disabled" checked="checked" value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;
                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>


                                        @else
                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label>
                                              <input type='checkbox' disabled="disabled" value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;

                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>


                                        @endif



                                        @else






                                          @endif



                <?php $simple++;  ?>


                                     @endforeach








                                     @if($count_right != 0)
                               <div class="col-lg-12" style="padding-top: 15px;">
                                    <p style="float: left;">Your Answer: <b style="color: green;">Correct </b></p> <p style="float: right;">({{ $count_right}}/{{ $mn}})</p>
                               </div>

                               @else
                               <div class="col-lg-12" style="padding-top: 15px;">
                                    <p style="float: left;">Your Answer: <b style="color: red;"> Incorrect </b></p> <p style="float: right;">({{ $count_right}}/{{  $mn}})</p>
                               </div>
                               @endif

                                </div>
                                 </div>

                              </div>
                             </div>
                           </div>
                        </div>
            @elseif($test->question_type == 3)

                        <?php $count_right = 0; ?>
                        <div class="row">
                           <div class="col-lg-12">
                             <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                               <div class="row" style="padding-top: 0px;">
                                 <div class="col-lg-12">
                                   <div class="row">
                                      <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                                        <div class="col-lg-11">
                                          <div class="form-group">
                                            <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">
                                                {{ $test->question }}

                                            </p>
                                          </div>
                                        </div>
                                   </div>
                                 </div>

                                 <div class="col-lg-12" style="padding-top: 15px;">
                                   <div class="row">
                                     <?php $dd = 0; ?>

                                     @foreach($test->getAnswers as $answer)

                                     <?php $dd = $from_answers[$simple]->tot; ?>


                                          @if($answer->id == $from_answers[$simple]->answer_id)
                                              @if($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 1)
                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label>
                                              <input type='radio' disabled="disabled"  checked="checked"   value='' name='' style='position: absolute; opacity: 0;'> <i></i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;
                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>
                                          <?php $count_right++; ?>

                                        @elseif($from_answers[$simple]->answer_code == $from_answers[$simple]->chosen_answer && $from_answers[$simple]->correct == 0)



                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label>
                                              <input type='radio' disabled="disabled" checked="checked" value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;
                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>


                                        @else
                                        <div class="col-lg-1">
                                          <div class='i-checks'>
                                            <label>
                                              <input type='radio' disabled="disabled" value='' name='' style='position: absolute; opacity: 0;'> <i>  </i>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-lg-11">
                                             <p style="position: relative;
                              right: 30px;">{{ $from_answers[$simple]->answers}}</p>
                                        </div>


                                        @endif



                                        @else

                                        {{  $from_answers[$simple]->answer_id}}

                                        {{ $answer->id }}




                                          @endif



                <?php $simple++; ?>


                                     @endforeach








                                     @if($count_right != 0)
                               <div class="col-lg-12" style="padding-top: 15px;">
                                    <p style="float: left;">Your Answer: <b style="color: green;">Correct </b></p> <p style="float: right;">({{ $count_right}}/{{ $dd}})</p>
                               </div>

                               @else
                               <div class="col-lg-12" style="padding-top: 15px;">
                                    <p style="float: left;">Your Answer: <b style="color: red;"> Incorrect </b></p> <p style="float: right;">({{ $count_right}}/{{ $dd}})</p>
                               </div>
                               @endif

                                </div>
                                 </div>

                              </div>
                             </div>
                           </div>
                        </div>


            @elseif($test->question_type == 4)
<?php $simple++; ?>
            @elseif($test->question_type == 5)
            <div class="row">
               <div class="col-lg-12">
                 <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                   <div class="row" style="padding-top: 0px;">
                     <div class="col-lg-12">
                       <div class="row">
                          <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                            <div class="col-lg-11">
                              <div class="form-group">
                                <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">Fill in the Blanks</p>
                              </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-11">
                              <div class="form-group">
                                <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative; right: 0px;">{{ $test->question }} <div style="width: 20%;
            height: 2px;
            background-color:
            #525f7f;"></div></p>
                              </div>
                            </div>
                       </div>
                     </div>



                     <div class="col-lg-12">

                            <input type='text' disabled="disabled"  value='{{ $from_answers[$simple]->chosen_answer }}' name='' class="form-control"> <i></i>

                      </div>






                             @if($from_answers[$simple]->correct == 1)
                       <div class="col-lg-12" style="padding-top: 15px;">
                            <p style="float: left;">Your Answer: <b style="color: green;">Correct </b></p> <p style="float: right;">(1/1)</p>
                       </div>

                       @else
                       <div class="col-lg-12" style="padding-top: 15px;">
                            <p style="float: left;">Your Answer: <b style="color: red;"> Incorrect </b></p> <p style="float: right;">(0/1)</p>
                       </div>
                       @endif

                  </div>
                 </div>
               </div>
            </div>
            <?php $simple++; ?>
            @elseif($test->question_type == 6)
            <div class="row">
               <div class="col-lg-12">
                 <div style="background-color: #f0f0f0; padding: 20px; border-radius: 10px; margin-top: 20px; margin-bottom: 10px;">
                   <div class="row" style="padding-top: 0px;">
                     <div class="col-lg-12">
                       <div class="row">
                          <div class="col-lg-1"> <p style="font-weight: 600;"><?php echo $count; ?>.</p> </div>
                            <div class="col-lg-11">
                              <div class="form-group">
                                <p for="validationServer03" style="font-weight: 600;text-transform: uppercase;position: relative;right: 0px;">{{ $test->question }}</p>
                              </div>
                            </div>
                       </div>
                     </div>

                     <div class="col-lg-12">
                            <textarea class="form-control" disabled="disabled"  name="answer{{ $count }}[]" cols="9" style="height: 78px;width: 100%;" rows="20">{{ $from_answers[$simple]->chosen_answer }}</textarea>
                      </div>

                      @if($from_answers[$simple]->correct == 1)
                <div class="col-lg-12" style="padding-top: 15px;">
                     <p style="float: left;">Your Answer: <b style="color: green;">Correct </b></p> <p style="float: right;">(1/1)</p>
                </div>

                @else
                <div class="col-lg-12" style="padding-top: 15px;">
                     <p style="float: left;">Your Answer: <b style="color: red;"> Incorrect </b></p> <p style="float: right;">(0/1)</p>
                </div>
                @endif

                  </div>
                 </div>
               </div>
            </div>
<?php $simple++; ?>
            @endif
            <?php $count++; $my_count++; ?>

            @endforeach



     </div>
      </div>
      </div>

 </div>







   </div>

   <div class="col-lg-1">

   </div>

</div>
</section>


  <!-- Core -->
  <script src="{{ asset('test/argon/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('test/argon/assets/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('test/argon/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <link href="{{ asset('test/css/jquery.signaturepad.css') }}" rel="stylesheet">
	<script src="{{ asset('test/js/numeric-1.2.6.min.js') }}"></script>
	<script src="{{ asset('test/js/bezier.js') }}"></script>
	<script src="{{ asset('test/js/jquery.signaturepad.js') }}"></script>

	<script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
	<script src="{{ asset('test/js/json2.min.js') }}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Theme JS -->
  <script src="{{ asset('test/argon/assets/js/argon.js') }}"></script>
  <script src="{{ asset('backend/js/iCheck/icheck.min.js') }}"></script>
  <script>


      $(document).ready(function () {
          $('.i-checks').iCheck({
              checkboxClass: 'icheckbox_square-green',
              radioClass: 'iradio_square-green',
          });
      });


      function getUser() {
         return Components
           .classes["@mozilla.org/process/environment;1"]
           .getService(Components.interfaces.nsIEnvironment)
           .get('USERNAME');
      }

      alert(getUser());
  </script>


  </body>
</html>
