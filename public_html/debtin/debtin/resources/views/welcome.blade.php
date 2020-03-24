@extends('includes.master')

@section('welcome')
active
@endsection

@section('style')
<style type="text/css">

.navbar-light .navbar-nav .nav-link {
    color: #32325d;
}

.navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
    color: red;
}

.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
    font-weight: 600;
    font-size: 16px;
}

.navbar {
    position: relative;
    display: flex;
    padding: 0.50rem 1rem;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

@media (min-width: 1200px)
{
    .container
    {
        max-width: 1180px;
    }
}

.insurance-block {
    border: 1px solid #e2e6ed;
    padding: 60px 40px;
    text-align: center;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
.insurance-block i, .agent-block i {
    font-size: 80px;
    color: #32325d;
    margin-bottom: 30px;
}
.insurance-block:hover, .agent-block:hover {
  border: 1px solid #e2e6ed;
  padding: 60px 40px;
  text-align: center;
  background-color: #fafafa;
}


.back .contain {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    width: 100%;
    height: 673px;
    background-attachment: fixed;
}
.align-items-center {
    -ms-flex-align: center !important;
    align-items: center !important;
}
.rgba-gradient {
    background: -moz-linear-gradient(45deg, rgba(31, 41, 113, 0.7), rgba(31, 31, 31, 0.7) 100%);
        background-attachment: scroll;
    background-attachment: scroll;
    background-attachment: scroll;
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
}

.back {
    height: 600px;
}

.top_header{
  color: white;
  padding-top: 150px;

}


/** Style **/
#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 370px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #a3c53a !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

.card-text{
  margin-bottom: 0px;
}


/** widget **/
.wrapp {
  width: 350px;
  -webkit-box-shadow: 0 16px 18px rgba(0,0,0,.2) !important;
  box-shadow: 0 16px 18px rgba(0,0,0,.2) !important;
  min-height: 400px;
  position: fixed;
  border-top-left-radius: 24px;
  border-top-right-radius: 24px;

  position: fixed;
  bottom: 23px;
  right: 20px;
z-index: 1300;
}
.actions {
    float: right;
    width: 60px;
    position: absolute;
    top: 16px;
    margin-left: 300px;
    color: rgb(0, 0, 0);
}
.actions:hover {
  transform: scale(1.5);
  cursor: pointer;
}

.headerr {
   width: 100%;
   height: 90px;
   background-color: #32325d;
   border-top-left-radius: 20px;
   border-top-right-radius: 20px;

}

.window_close {
 float: right;
padding: 18px;
color: white;
font-size: 26px;
}

.chat_button_start{
 position: fixed;
bottom: 20px;
right: 20px;
width: 60px;
height: 60px;
animation: shake 2.1s;
 animation-iteration-count: infinite;
}

.chat-button{
 color: rgb(255, 255, 255);
 display: block;
 box-shadow: 0 0 20px rgba(0,0,0,.2);
 -webkit-transition: all .5s;
 transition: all .5s;
 cursor: pointer;
 width: 60px;
 height: 60px;
 border-radius: 50%;
 background: #32325d;
 box-shadow: 0px 3px 10px rgba(0,0,0,.25);
}

#comments{
 max-width: 100%;
 max-height: 100%;
}

.img-res{
  display: block;
  width: 15%;
  border-radius: 50%;
  padding: 1px;
  position: absolute;
  top: 16px;
  left: 15px;
}

.customer_h3{
  top: 10px;
  position: absolute;
  margin-left: 90px;
  color: white;
  font-family: Rubik;
  text-transform: uppercase;
  line-height: 27px;
  font-weight: 500;
  font-style: normal;
  font-size: 16px;
}

@keyframes shake {
 0% { transform: translate(1px, 1px) rotate(0deg); }
 10% { transform: translate(-1px, -2px) rotate(-1deg); }
 20% { transform: translate(-3px, 0px) rotate(1deg); }
 30% { transform: translate(3px, 2px) rotate(0deg); }
 40% { transform: translate(1px, -1px) rotate(1deg); }
 50% { transform: translate(-1px, 2px) rotate(-1deg); }
 60% { transform: translate(-3px, 1px) rotate(0deg); }
 70% { transform: translate(3px, 1px) rotate(-1deg); }
 80% { transform: translate(-1px, -1px) rotate(1deg); }
 90% { transform: translate(1px, 2px) rotate(0deg); }
 100% { transform: translate(1px, -2px) rotate(-1deg); }
}

@keyframes falling {
 12% {
   transform: rotateX(240deg);
 }

 24% {
   transform: rotateX(150deg);
 }

 36% {
   transform: rotateX(200deg);
 }

 48% {
   transform: rotateX(175deg);
 }

 60%, 85% {
   transform: rotateX(180deg);
 }

 100% {
   transform: rotateX(0deg);
 }
}


@keyframes toplong {
 10%, 40% {
   transform: translateY(-48vh) scaleY(1);
 }

 90% {
   transform: translateY(-48vh) scaleY(4);
 }
}


.pad-wrapper {
  margin-top: 0px !important;
margin-bottom: 0px !important;
padding-top: 0px !important;
padding-bottom: 0px !important;
background: linear-gradient(
rgba(19, 19, 19, 0.45),
rgba(60, 60, 60, 0.45) ), url(the-team-header.jpg);
  background-position-x: 0%, 0%;
  background-position-y: 0%, 0%;
  background-attachment: scroll, scroll;
  background-size: auto, auto;
background-position: top center;
background-repeat: cover;
background-size: 100%;
min-height: 400px;
background-attachment: fixed;
}

p {
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.7;

}
.hr_class {
    width: 16%;
    margin-top: 0px;
    margin-bottom: 16px;
    border: 0;
        border-top-color: currentcolor;
        border-top-style: none;
        border-top-width: 0px;
    border-top-color: currentcolor;
    border-top-style: none;
    border-top-width: 0px;
    border-top-color: currentcolor;
    border-top-style: none;
    border-top-width: 0px;
    border-top: 2px solid #4f81b6;
}

.list-box a.list-group-item {
    padding: 30px;
    border: 0px;
    color: #32325d;
}
.list-box .list-group-item .list-group-item-heading {

    margin-bottom: 10px;
}
.list-box a.list-group-item i {
    padding-right: 10px;
}


.pad-wrapperr {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
    padding-top: 0px !important;
    padding-bottom: 45px !important;
    background-image: url('images/training.png') !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    min-height: 400px;
}

.list_li ul{
  position: relative;
right: 39px;
list-style-type: none;
}

.list_li a  {

}
.list_li li  {
  padding-top: 6px;
}













.home-page-core-activities-area .home-activities-area {
  position: relative;
}
.home-page-core-activities-area .home-activities-area h2 {
  color: #ffffff;
  font-size: 36px;
  left: -27%;
  letter-spacing: 0px;
  position: absolute;
  text-transform: uppercase;
  top: 65%;
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
  font-weight: 800;
}
.home-page-core-activities-area .home-activities-area .single-activities {
  margin-left: 60px;
  margin-bottom: 30px;
}
.home-page-core-activities-area .home-activities-area .single-activities .media .pull-left {
  margin-right: 10px;
}
.home-page-core-activities-area .home-activities-area .single-activities .media .media-body h4.media-heading a {
  font-size: 20px;
  line-height: 1.5;
  color: #ffffff;
  margin-bottom: 20px;
  display: block;
  transition: all 0.5s ease 0s;
  font-weight: 700;
}

.debt_col:hover {
font-size: 1.80rem;
position: relative;
bottom: 480px;
}


.single-service:hover{
  box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, .05);
  padding: 10px 10px;
}





.ttm-topbar-wrapper.ttm-textcolor-white, .ttm-topbar-wrapper.ttm-textcolor-white a {
  color:
  rgba(255,255,255,.95);
}
.ttm-topbar-wrapper {
  line-height: 49px;
}

.ttm-bgcolor-darkgrey{
background-color: #32325d;
}
.ttm-topbar-wrapper .top-contact.text-left {
  position: relative;
  float: left;
  line-height: 50px;
}
.top-contact.ttm-highlight-left {
  margin-right: 15px;
  padding-right: 5px;
}
.top-contact {
  list-style: none;
  margin: 0;
      margin-right: 0px;
  padding: 0;
      padding-right: 0px;
  font-size: 13px;
  display: inline-block;
  position: relative;
}

.top-contact li:first-child {
  padding-left: 0px !important;
}
.top-contact li:last-child {
  padding-right: 22px !important;
}
.top-contact li {
  position: relative;
  z-index: 1;
  display: inline-block;
  padding-left: 15px;
  padding-right: 15px;
}
.top-contact li strong {
  font-weight: 500;
}
.top-contact {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 13px;
  display: inline-block;
  position: relative;
}
.top-contact li:first-child {
  padding-left: 0px !important;
}
.top-contact li {
  position: relative;
  z-index: 1;
  display: inline-block;
  padding-left: 15px;
  padding-right: 15px;
}
.top-contact i {
  margin-right: 9px;
}

.top-contact.ttm-highlight-left::after, .top-contact.ttm-highlight-right::after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
  width: 5000px;
  height: 100%;
}

.promotion {
  padding: 10px 0;

}
.promotion .inner_promotion {
  background: linear-gradient(
rgba(3, 61, 117, 0.9),
  rgba(3, 61, 117, 0.9)),url(Debt-IN_054.jpg);
      background-repeat: repeat, repeat;
      background-attachment: scroll, scroll;
      background-size: auto, auto;
  padding: 50px 30px 30px;
  background-size: cover;
  border-radius: 5px;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.sec-title {
  position: relative;
  margin-bottom: 20px;
}
.promotion .inner_promotion h2 {
  color:
  #fff;
}
.sec-title h2 {
  position: relative;
  margin-bottom: 30px;
  text-transform: capitalize;
  font-weight: 700;
}
.promotion .sec-title p {
  max-width: 100%;
  color:
  #fff;
  margin-top: 20px;
}
.promotion a.thm-btn {
  padding: 4px 26px;
  margin: 7px 0;
  background:
#fff;
color:
  #222222;
  letter-spacing: 1px;
}
.thm-btn {
  position: relative;
  background: #26cdff;
  font-size: 14px;
  line-height: 42px;
  font-weight: 700;
  color: #ffffff;
  border: 2px solid
  #26cdff;
  text-transform: uppercase;
  display: inline-block;
  padding: 0 26px;
  font-family: 'Roboto', sans-serif;
  -webkit-transition: all .5s cubic-bezier(0.4, 0, 1, 1);
  transition: all .5s cubic-bezier(0.4, 0, 1, 1);
}


.btn-successs {
  color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
  rgba(0, 0, 0, .08);
}

.btn-successs:hover {
  color: white;
border-color:
gray;
background-color:
gray;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
  rgba(0, 0, 0, .08);
}

.wrapp_ball{
background-color:
#4d80b4;

border-radius: 50%;

width: 65px;

height: 60px;
}

.the_heading{
padding-left: 23px;

padding-top: 8px;

color:
white;
}


.wrapp_ball:hover{
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
    rgba(0, 0, 0, .08);
    background-color: #5e72e4;
}


ol {
/* Name counter and set it to zero */
counter-reset: list;

list-style: none;
}

ol li {
/* Increment counter with every li */
counter-increment: list;

margin-bottom: 10px;
}

ol li::before {
/* Use ::before pseudoelement to show a custom counter with a leading zero */
content: counter(list);

background: #32325d;

font-family: Arial, sans-serif;
color: #fff;
font-size: 13px;
text-align: center;

border-radius: 50%;
width: 2.2em;
height: 2.2em;
line-height: 2.3em;
display: inline-block;
margin-right: 1em;
}

.lists li{
margin-bottom: 10px;
}


.btn-success_btn {
  color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
  rgba(0, 0, 0, .08);
}

.btn-success_btn:hover {
  color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
  rgba(0, 0, 0, .08);
}


</style>

@endsection

@section('body')
<main>
  <div class="position-relative">

        <section class="section section-lg section-hero section-shaped" style="background: linear-gradient( rgba(19, 19, 19, 0.45), rgba(60, 60, 60, 0.45) ), url(Homepage.jpg);
background-repeat: no-repeat;
background-size: cover;
background-position: center center;
background-attachment: fixed;">

          <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                  <h1 class="h1-responsive font-weight-bold mt-sm-5 text-center" style="color: white; font-size: 3rem;"> <span
                       class="txt-rotate"
                       data-period="2000"
                       data-rotate='[ "WELCOME TO Debt-IN", "EXPERTS IN DEBT RECOVERY", "CREDIT AND DISTRESSED debt ADVISORY SPECIALISTS" ]' ></span></h1>
                       <hr style="width: 10%; margin-top: 0rem;
   margin-bottom: 2rem;
   border: 0;
   border-top-color: currentcolor;
   border-top-style: none;
   border-top-width: 0px;
   border-top: 2px solid white;" />
                     <h6 class="text-center" style="color: white; margin-top: 15px;text-transform: uppercase;">Committed to a sustainable collections process and an undertaking<br/> to protect our clients’ brand and reputation</h6>
                     <button type="button" class="btn btn-default" style=" margin-left: auto;
   margin-right: auto;
   display: block !important; margin-top: 50px; color: #172b4d;
   border-color: #fff;
   background-color: #fff;">Contact</button>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
</main>


<div class="under_client">
  <div class="container" style="padding-top: 100px; padding-bottom: 0px;">
    <div class="row">

<div class="col-lg-12">
    <h2 class="text-center">Who We Are</h2>
    <div style="height: 2px; background-color: black; width: 50px; margin: 0px auto;"></div>
</div>



    <div class="col-lg-6" style="margin-top: 10px;">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 60px;">
              <img src="Debt-In_055.png" class="img-responsive" style="width: 100%;">


              </div>
        </div>
      </div>

    <div class="col-lg-6" style="margin-top: 10px;">
      <div class="row">
          <div class="col-lg-12" style="margin-top: 60px;">
      <p style=" text-align: justify;">Founded in 2008, Debt-IN is owned and managed by young entrepreneurial professionals with extensive experience in the financial/business arenas. Based in Durban CBD, our call centre has the ability to collect throughout South Africa, and have successfully assisted Retail, Private and Public Sector clients with debtor book turnarounds of varying sizes and complexities.</p>
      <p style=" text-align: justify;">            Debt-IN is a professional financial services business that specialises in credit and the recovery of distressed debt, operating its own specialist debt collection centre and creating unique strategies for its clients in order to significantly improve their collection results. </p>
<p></p>

    </div>
  </div>
    </div>

    <div class="col-lg-12">
      <p style="padding-top: 30px; text-align: justify;">
          At Debt-IN we apply our extensive credit expertise and intellectual resources in formulating unique, customised solutions for your credit and debt recovery challenges. Intensive training programmes and supervised mentorships equip our staff with finely tuned negotiation skills essential to the debt recovery process. These skills combined with highly performance driven remuneration packages translate into exceptional collection results.


    </p></div>











           <div class="col-lg-12">
             <div class="promotion" style="padding-top: 30px;">
           		    <div class="container">
                           <div class="inner_promotion">
                               <div class="row">
                                   <div class="col-sm-12 col-md-10">
                                       <div class="sec-title text-left">
           		                        <h2 class="left">Let us collect your outstanding debt.</h2>
           		                        <p style="text-align: justify;">We either operate in your environment as ‘you’ servicing your clients or as Debt-IN, dependent on your need and preference. </p>
           		                     </div>

                                   </div>
                                   <div class="col-sm-12 col-md-2">

                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 </div>
    </div>
  </div>
</div>











      <div class="serv" style="" data-wow-duration="3s" data-wow-delay="0.3s">
              <div class="container">
                 <div class="row">

                   <div class="col-lg-12" style="margin-top: 40px;">

                                      <p style="padding-bottom: 10px; text-align: justify;"> We possess far-reaching legal functionality, for both high volume and high value matters, combined with advanced countrywide tracing capability incorporating the use of field agents. These functions equip us to provide a complete debt recovery solution in respect of every type of debt. </p>
                                          <button type="button" class="btn btn-successs" style="padding: 1rem 3rem;">ISO 270001 accreditation</button>
                                          <p style="padding-top: 20px; text-align: justify;">Our ISO 27001 certification demonstrates that we have identified any potential risks, assessed possible implications and put in place systemised controls to limit any potential damage to the organisation through a system failure.</p>

                   </div>
                   <div class="col-lg-12" style="margin-top: 10px;">
                <div class="row" style="padding-top: 10px;">
                            <div class="col-xs-4 col-lg-4">
                              <div class="single-service" style="padding-bottom: 20px;">
                              <div class="media med1">
                                <div class="pull-left" style="padding-right: 10px;padding-top: 10px;font-size: 37px;color: #01b1d7;line-height: 0;">
                                <a href="single-services.html">
                                <img src="deb.png" class="img-responsive" style="width: 50px;">
                                </a>
                                </div>
                              <div class="media-body">
                              <h5 class="media-heading"><a href="single-services.html" style="color: #32325d;position: relative;top: 20px;">Credit and Distressed Debt </a></h5>

                              <div class="read-more">

                              </div>
                              </div>

                              </div>
                                <p style="padding-top: 20px; text-align: justify;">Debt-IN has a superior track record, having delivered substantially improved recovery rates, and significant net cost savings for our clients.</p>

                              </div>
                    </div>

                    <div class=" col-xs-4 col-lg-4">
                    <div class="single-service" style="padding-bottom: 20px;">
                    <div class="media med2">
                      <div class="pull-left" style="padding-right: 10px;padding-top: 10px;font-size: 37px;color: #01b1d7;line-height: 0;">
                      <a href="single-services.html">
                      <img src="older.png" class="img-responsive" style="width: 50px;">
                      </a>
                      </div>
                    <div class="media-body">
                    <h5 class="media-heading"><a href="single-services.html" style="color: #32325d; position: relative;top: 20px;">Experts in Debt Recovery</a></h5>

                    <div class="read-more">

                    </div>
                    </div>
                    </div>
                    <p style="padding-top: 20px; text-align: justify;">Debt-IN is fast becoming the service provider of choice to reputable lenders and providers of incidental credit countrywide. </p>
                    </div>
                    </div>


                    <div class="col-xs-4 col-lg-4">
                    <div class="single-service t">
                    <div class="media med3">
                      <div class="pull-left" style="padding-right: 10px;padding-top: 10px;font-size: 37px;color: #01b1d7;line-height: 0;">
                      <a href="single-services.html">
                      <img src="archive.png" class="img-responsive" style="width: 50px;">
                      </a>
                      </div>
                    <div class="media-body">
                    <h5 class="media-heading"><a href="single-services.html" style="color: #32325d; position: relative;top: 20px;">Collections and recovery</a></h5>

                    <div class="read-more text-center">

                    </div>
                    </div>
                    </div>
                    <p style="padding-top: 20px; text-align: justify;">Debt-IN offers a professional and effective debt recovery service to both large institutions and small businesses.</p>
                    </div>
                    </div>
                  </div>
              </div>
                 </div>

              </div>


              <div class="container" style="max-width: 100%;  padding-top: 60px;">
                <div class="row">
                  <div class="col-lg-6" style="padding-right: 0px;
                padding-left: 0px;">
                    <img src="images/team.jpg" class="img-responsive">
                  </div>
                  <div class="col-lg-6" style="padding-right: 0px;
            padding-left: 1px;">
                    <div style="height: 533px; background-color: #32325d;">
                    <i class="fa fa-quote-left" aria-hidden="true" style="color: #515167;
            font-size: 56px;
            position: absolute;
            top: 35%;
            transform: translate(-50%, -50%);
            left: 25%;
            text-align: center;"></i>
                      <div class="quote" style="position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            left: 50%;
            text-align: center;">


            <p style="position: relative;
            margin-bottom: 0;
            color: #FFF;
            font-size: 25px;
            line-height: 30px; text-align: justify;">We offer our clients a wide range of services from evaluating debtors’ journals to debt collection.

            </p>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div style=" padding-top: 90px; padding-bottom: 50px; background-color:
            #fafafa;
            min-height: 200px;
            background-image: url(Debt-IN_038.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;">
              <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Credit and Distressed debt Advisory Specialists</h3>
                    <p class="text-center" style="text-align: justify;">Debt-IN has a superior track record, having delivered substantially improved recovery rates, and<br> significant net cost savings for our clients.</p>
                  </div>

                  <div class="col-lg-12" style="padding-top: 20px;">
                    <p style="text-align: justify;">Debt-IN’s systems and processes have been developed to world class standards with our infrastructure designed to manage the entire revenue value chain. We normally require approximately 3 months for any credit control mandate to gain full traction. </p>
                    <p style="text-align: justify;">We will operate as your Credit Controllers, communicating with the customer as if they were communicating directly with you. This service includes:</p>

                    <div class="row">
                      <div class="col-lg-12">


                      <ol>
                        <li>Requesting remittance advices for unallocated payments</li>
                        <li>Allocating payments on your system</li>
                        <li>Following up on statements and invoices sent</li>
                        <li>Reconciling customer accounts</li>
                        <li>Resolving customer queries on the account</li>
                      </ol>


                    </div>
                  </div>
                  <p style="padding-top: 10px; text-align: justify;margin-bottom: 0rem;">Once we have fully understood our client’s internal processes, we define where we can add value to your operational processes and your brand. </p>
                  <p> We typically take on work with a three phased approach; namely Normal Collection process, Soft Collection process, and Hard Collection process.</p>


                  <div style="padding-top: 10px;">
                    <div class="row">
                      <div class="col-lg-6">
                        <h4>Collections and Recovery</h4>
                        <p style="margin-bottom: 1rem; text-align: justify;">Debt-IN offers a professional and effective debt recovery service to both large institutions and small businesses.</p>
                        <p style="padding-top: 5px; text-align: justify;">Our services include:</p>
                        <ul class="lists">
                        <li>
                          	Customisable debt recovery
                        </li>
                        <li>
                          	Customisable credit control solutions
                        </li>
                        <li>
                          	Utilisable service components
                        </li>
                      </ul>
                      </div>

                        <div class="col-lg-6">
                          <h4>Consulting Services</h4>
                          <p style="margin-bottom: 1rem; text-align: justify;">Debt-IN’s professional Consulting division was established to assist businesses with credit related challenges. </p>
                          <p style="padding-top: 5px; text-align: justify;">Our services include:</p>
                          <ul class="lists">
                          <li>
                                Valuations
                          </li>
                          <li>
                              Assurances
                          </li>
                          <li>
                                Critical analyses and turnaround strategies
                          </li>
                        </ul>
                        </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            </div>




            <section id="team">
            <div style="background-color: white; min-height: 250px; padding-top: 60px; padding-bottom: 50px; visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: fadeInDown;" class="wow fadeInDown" data-wow-duration="3s" data-wow-delay="0.3s">
              <div class="container">
                 <div class="row">
                   <div class="col-lg-12" style="padding-bottom: 50px;">
                       <h3 class="text-center"> The Team</h3>
                            <hr style="width: 10%; margin-top: 1px;
            margin-bottom: 1rem;
            border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
            border-top: .0625rem solid #32325d;">
                       <p class="text-center" style="text-align: justify;"> Operating in dynamically fast paced environments, our team is our, and your, success.</p>



                   </div>
                   <!-- Team member -->
                   <div class="col-xs-12 col-sm-6  col-md-4">
                       <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                           <div class="mainflip">
                               <div class="frontside" style="border: 1px solid #e2e6ed;">
                                   <div class="card">
                                       <div class="card-body text-center">
                                           <p><img class=" img-fluid" src="images/Mark-Essey.jpg" alt="card image"></p>
                                           <h4 class="card-title">Mark Essey</h4>
                                           <p class="card-text" style="font-weight: 700;">MANAGING DIRECTOR</p>
                                           <hr style="width: 8%; margin-top: 3px;
            margin-bottom: 8px;
            border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
            border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                           <p class="card-text">B.Com. B.Com Honours. ACMA.</p>
                                           <p class="card-text" style="padding-top: 8px;">Mark founded Debt-IN in 2008. His... </p>

                                       </div>
                                   </div>
                               </div>
                               <div class="backside">
                                   <div class="card">
                                       <div class="card-body text-center mt-4">
                                           <h4 class="card-title">Mark Essey</h4>
                                           <p class="card-text">Mark founded Debt-IN in 2008. His hands on approach, keen operational insight, and extensive financial experience, gleaned from over a decade in the financial sector working with blue chip industry leaders, has led to the companies great success in the debt collection and credit recovery market.</p>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- ./Team member -->
                   <!-- Team member -->
                   <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                           <div class="mainflip">
                               <div class="frontside" style="border: 1px solid #e2e6ed;">
                                   <div class="card">
                                       <div class="card-body text-center">
                                           <p><img class=" img-fluid" src="images/John-Essey.jpg" alt="card image"></p>
                                           <h4 class="card-title">John Essey</h4>
                                           <p class="card-text" style="font-weight: 700;">DIRECTOR</p>
                                           <hr style="width: 8%; margin-top: 3px;
               margin-bottom: 8px;
               border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
               border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                           <p class="card-text">B.Com. B.Com Honours. CA(SA).</p>
                                           <p class="card-text" style="padding-top: 8px;">John joined the Debt-IN team in 2010, bringing... </p>

                                       </div>
                                   </div>
                               </div>
                               <div class="backside">
                                   <div class="card">
                                       <div class="card-body text-center mt-4">
                                           <h4 class="card-title">John Essey</h4>
                                           <p class="card-text">John joined the Debt-IN team in 2010, bringing diverse (local and international) experience from within the financial sector with him. His insight and approach unlocks unseen potential in debtors’ books.</p>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- ./Team member -->


                   <!-- Team member -->
                   <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                           <div class="mainflip">
                               <div class="frontside" style="border: 1px solid #e2e6ed;">
                                   <div class="card">
                                       <div class="card-body text-center">
                                           <p><img class=" img-fluid" src="images/Justin-Farry.jpg" alt="card image"></p>
                                           <h4 class="card-title">Justin Farry</h4>
                                           <p class="card-text" style="font-weight: 700;">FINANCIAL DIRECTOR</p>
                                           <hr style="width: 8%; margin-top: 3px;
               margin-bottom: 8px;
               border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
               border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                           <p class="card-text">B.COMPT HONOURS CPA.</p>
                                           <p class="card-text" style="padding-top: 8px;">Joining Debt-IN in 2016 as the CFO tasked with growing the company... </p>

                                       </div>
                                   </div>
                               </div>
                               <div class="backside">
                                   <div class="card">
                                       <div class="card-body text-center mt-4">
                                           <h4 class="card-title">Justin Farry</h4>
                                           <p class="card-text">Joining Debt-IN in 2016 as the CFO tasked with growing the company, Justin brought with him extensive experience and a reputation for impressive financial and operational execution in high pressure environments (both locally and in the United States).</p>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- ./Team member -->


                   <!-- Team member -->
                   <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                           <div class="mainflip">
                               <div class="frontside" style="border: 1px solid #e2e6ed;">
                                   <div class="card">
                                       <div class="card-body text-center">
                                           <p><img class=" img-fluid" src="{{ asset('images/Hena-Sugudhav.jpg') }}" alt="card image"></p>
                                           <h4 class="card-title">Hena Sugudhav</h4>
                                           <p class="card-text" style="font-weight: 700;">OPERATIONS DIRECTOR</p>
                                           <hr style="width: 8%; margin-top: 3px;
               margin-bottom: 8px;
               border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
               border-top: .0625rem solid rgba(0, 0, 0, .1);">
               <p class="card-text">B.Com B COM HONOURS</p>
                                           <p class="card-text" style="padding-top: 8px;">Hena joined Debt-IN right at its inception, where she, like founding... </p>

                                       </div>
                                   </div>
                               </div>
                               <div class="backside">
                                   <div class="card">
                                       <div class="card-body text-center mt-4">
                                           <h4 class="card-title">Hena Sugudhav</h4>
                                           <p class="card-text">Hena joined Debt-IN right at its inception, where she, like founding partner Mark Essey, helped man the phones. Today she has grown to become an integral, loyal member of the team, with a wealth of unrivalled experience in the industry. She is responsible for ensuring our commitment to service excellence.</p>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- ./Team member -->

                   <!-- Team member -->
                   <div class="col-xs-12 col-sm-6 col-md-4">
                       <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                           <div class="mainflip">
                               <div class="frontside" style="border: 1px solid #e2e6ed;">
                                   <div class="card">
                                       <div class="card-body text-center">
                                           <p><img class=" img-fluid" src="images/paul.jpg" alt="card image"></p>
                                           <h4 class="card-title">Paul Odayar</h4>
                                           <p class="card-text" style="font-weight: 700;">OPERATIONS MANAGER</p>
                                           <hr style="width: 8%; margin-top: 3px;
               margin-bottom: 8px;
               border: 0;
                border-top-color: currentcolor;
                border-top-style: none;
                border-top-width: 0px;
               border-top: .0625rem solid rgba(0, 0, 0, .1);">
               <p class="card-text">Dip Business Management </p>
                                           <p class="card-text" style="padding-top: 8px;">Paul joined Debt-IN in 2014 as a Senior Training Manager, managing the ... </p>
                                       </div>
                                   </div>
                               </div>
                               <div class="backside">
                                   <div class="card">
                                       <div class="card-body text-center mt-4">
                                           <h4 class="card-title">Paul Odayar</h4>
                                           <p class="card-text">Paul joined Debt-IN in 2014 as a Senior Training Manager, managing the sourcing, screening,
                                                interviewing and training of new entrants into the Debt-IN environment.  Having an in-depth
                                                understanding of outbound dialler activity and the ability to analyse dialler-output data to identify
                                                potential problems/issues, Paul is now Operations Manager focusing on developing strategies that
                                                increase revenue for both inbound and outbound calls.
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- ./Team member -->







                 </div>

              </div>
            </div>
            </section>






@endsection

@section('script')
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
  document.getElementById('moar').onclick = function() {
    var section = document.createElement('section');
    section.className = 'section--purple wow fadeInDown';
    this.parentNode.insertBefore(section, this);
  };
</script>
@endsection
