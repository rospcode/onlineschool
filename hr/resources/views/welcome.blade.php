
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Welcome to CapabilityHR</title>



    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}" type="image/png">


  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('html/wasps/assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('html/wasps/assets/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('html/wasps/assets/css/animate.css') }}">



    <link rel="stylesheet" href="{{ asset('navbarcss.css') }}">
  <link rel="stylesheet" href="assets/css/argon.min9f1e.css?v=1.1.0" type="text/css">


    <link rel="stylesheet" href="style.css"  type="text/css">
  <!-- Google Tag Manager -->


<style>

html{
   scroll-behavior: smooth;
}
body{

}
p{
  font-weight: 350;
  font-size: 1rem;
}
.img_under_header{
  width: 50px;
  padding-top: 12px;
  Color: white;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
/* Feature Style 2 */
.feature-wrapper-2 {
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.1);
    padding: 35px 0;

    [class^="col"] {
        border-right: 1px solid $color-border;

        &:nth-child(3n) {
            border-right: none;
        }
    }
}

.tm-feature2 {
    box-shadow: none;
    padding: 25px 25px 20px 25px;

    &-icon {
        display: inline-block;
        height: 92px;
        width: 92px;
        text-align: center;
        line-height: 90px;
        border-radius: 999px;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.1);
        font-size: 40px;
        margin-bottom: 25px;
        background: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    p {
        margin-bottom: 0;
    }

    &:hover &-icon {
        background: $color-theme;
        color: #ffffff;
    }
}

@media #{$layout-tablet} {
    .feature-wrapper-2 {
        padding: 15px 0;

        [class^="col"] {
            border: none;
        }
    }
}

@media #{$layout-mobile-lg} {
    .feature-wrapper-2 {
        padding: 15px 0;

        [class^="col"] {
            border: none;
        }
    }
}

/**
 * Feature
 */

.features-area {
    position: relative;
}

.feature-image {
    position: absolute;
    left: 10%;
    bottom: 0;
    max-height: 100%;
}

.features-slider-active {
    margin-top: 28px;
    margin-bottom: 28px;

    &.slick-dotted {
        margin-bottom: 30px;
    }

    .slick-list {
        margin-left: -15px;
        margin-right: -15px;
    }
}

.features-slider-row {
    display: flex !important;
    justify-content: space-between;

    .tm-feature {
        margin: 5px 15px;
        margin: 20px 15px;
    }
}

.tm-feature {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    padding: 63px 35px;
    background: #ffffff;

    &-icon {
        display: inline-block;
        font-size: 60px;
        margin-bottom: 28px;
    }

    p {
        margin-bottom: 0;
    }

    &:hover &-icon {
        animation: rubberBand 0.5s ease-in-out 0s 1 both;
    }
}

@media #{$layout-desktop-xs} {
    .feature-image {
        left: 4%;
    }
}

@media #{$layout-laptop} {
    .features-slider-active {
        margin-top: -20px;
        margin-bottom: -20px;

        &.slick-dotted {
            margin-bottom: 40px;

            ul.slick-dots {
                top: calc(100% + 30px);
            }
        }
    }

    .feature-image {
        left: 0;
        max-width: 310px;
    }
}

@media #{$layout-notebook} {
    .features-slider-active {
        margin-top: -20px;
        margin-bottom: -20px;

        &.slick-dotted {
            margin-bottom: 40px;

            ul.slick-dots {
                top: calc(100% + 30px);
            }
        }
    }

    .tm-feature {
        padding-left: 15px;
        padding-right: 15px;
    }

    .feature-image {
        display: none;
    }
}

@media #{$layout-tablet} {
    .features-slider-active {
        margin-top: -20px;
        margin-bottom: -20px;

        &.slick-dotted {
            margin-bottom: 40px;

            ul.slick-dots {
                top: calc(100% + 30px);
            }
        }
    }

    .features-slider-row {
        flex-wrap: wrap;
        justify-content: center;

        .tm-feature {
            flex: 0 0 45%;
        }
    }

    .feature-image {
        display: none;
    }

    .tm-feature {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        padding: 40px 30px;
    }
}

@media #{$layout-mobile-lg} {
    .features-slider-active {
        margin-top: -20px;
        margin-bottom: -20px;

        &.slick-dotted {
            margin-bottom: 40px;

            ul.slick-dots {
                top: calc(100% + 30px);
            }
        }
    }

    .features-slider-row {
        flex-wrap: wrap;
        justify-content: center;

        .tm-feature {
            flex: 0 0 44%;
        }
    }

    .feature-image {
        display: none;
    }

    .tm-feature {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        padding: 20px 15px;
    }
}

@media #{$layout-mobile-sm} {
    .features-slider-row {
        flex-wrap: wrap;
        justify-content: center;

        .tm-feature {
            flex: 0 0 95%;
        }
    }
}

/* Feature Style 2 */
.feature-wrapper-2 {
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.1);
    padding: 35px 0;

    [class^="col"] {
        border-right: 1px solid $color-border;

        &:nth-child(3n) {
            border-right: none;
        }
    }
}

.tm-feature2 {
    box-shadow: none;
    padding: 25px 25px 20px 25px;

    &-icon {
        display: inline-block;
        height: 92px;
        width: 92px;
        text-align: center;
        line-height: 90px;
        border-radius: 999px;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.1);
        font-size: 40px;
        margin-bottom: 25px;
        background: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    p {
        margin-bottom: 0;
    }

    &:hover &-icon {
        background: $color-theme;
        color: #ffffff;
    }
}

@media #{$layout-tablet} {
    .feature-wrapper-2 {
        padding: 15px 0;

        [class^="col"] {
            border: none;
        }
    }
}

@media #{$layout-mobile-lg} {
    .feature-wrapper-2 {
        padding: 15px 0;

        [class^="col"] {
            border: none;
        }
    }
}

.chat-button-destroy:focus, .chat-open-dialog:focus {
    outline: none;
}


.chat-button-destroy span.fa-close:before {
    font-size: 24px;
    color: white;
    text-align: center;
    margin: -4px 0 0;
    display: block;
}

.chat-open-dialog span.fa-question:before {
  background:white;
  color:#0c1832;
  font-size: 24px;
  display:block;
  padding: 4px 8px;
  border-radius: 6px;
  opacity: 1;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}

.chat-open-dialog span.fa-question::after {
    content: '';
    width: 0;
    height: 0;
    float: right;
    border-left: 22px solid transparent;
    border-right: 0px solid transparent;
    border-top: 10px solid white;
    padding: 0;
    margin-top: -5px;
    display: inline-block;
}


button.chat-open-dialog {
  z-index: 2147483000;
  position: fixed;
  border: none;
  bottom: 20px;
  right: 40px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06), 0 2px 32px rgba(0, 0, 0, 0.16);
  background: url(/vremi_chat.png) no-repeat center #0c1832;
  background-size: 28px;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
  cursor: pointer;
}
button.chat-open-dialog.active {
  transform: rotate(90deg);
  opacity: 0;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}

button.chat-button-destroy {
  opacity: 0;
  z-index: -5;
  position: fixed;
  bottom: 20px;
  right: 40px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: none;

}
button.chat-button-destroy.active {
  opacity: 1;
  z-index: 2147483000;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06), 0 2px 32px rgba(0, 0, 0, 0.16);
  background: #0c1832;
  background-size: 14px;
  display: block;
  cursor: pointer;
  transform: rotate(180deg);
}

.chat-popup {
  position: fixed;
  bottom: 100px;
  right: 40px;
  width: 370px;
  max-height: 590px;
  height: 0;
  opacity: 0;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
background: black;
  overflow: hidden;
}
.chat-popup.active {
  opacity: 1;
  z-index: 2147483000;
  height: calc(100% - 95px - 20px);
  max-height: 384px;
  -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);
  box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);
  border-radius: 8px;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}
.chat-popup.chat-init .chat-windows {
  transform: translateX(-370px);
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}
.chat-popup .chat-windows {
  width: 200%;
}
.chat-popup .chat-windows .chat-window-one, .chat-popup .chat-windows .chat-window-two {
  float: left;
  width: 50%;
  height: 100%;
}
.chat-popup .chat-header {
  background: #0c1832;
  border-radius: 8px 8px 0 0;
  padding: 35px 0;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}
.chat-popup .chat-header h4 {
  color: white;
  text-align: center;
  font-weight: 600;
  margin: 0;
  padding: 0 0 10px;
}
.chat-popup .chat-header .chat-button-start {
  background: white;
  -webkit-border-radius: 150px;
  -moz-border-radius: 150px;
  border-radius: 150px;
  padding: 15px 25px;
  display: block;
  margin: 0 auto;
  font-size: 14px;
  border: none;
}
.chat-popup .chat-header .chat-button-start span {
  padding-left: 5px;
  font-family: "Proxima Nova", 'Montserrat', arial, sans-serif;
}
.chat-popup .chat-phone-number {
  text-align: center;
  font-size: 18px;
  letter-spacing: 1px;
  padding: 15px 0;
  background: #213560;
  color: white;
}
.chat-popup .chat-phone-number small {
  text-align: center;
  display: block;
  font-size: 13px;
  opacity: .7;
  letter-spacing: normal;
  line-height: normal;
  padding: 0 0 10px;
}
.chat-popup div#chatContainer {
  height: 100%;
  min-height: 400px;
}
.chat-popup form {
  margin: 15px 0 5px;
}
.chat-popup form table.webchat-config {
  width: 100%;
}
.chat-popup form table.webchat-config input {
  margin: 0 auto 10px;
  padding: 8px 10px;
  display: block;
  width: 70%;
  border-radius: 50px;
  text-align: center;
  font-size: 14px;
  border: none;
}

form#chatForm button.chat-button.inactive-chat.active, form#chatForm button.chat-button {
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  -ms-transition: all ease .5s;
  -o-transition: all ease .5s;
  transition: all ease .5s;
}
form#chatForm button.chat-button.inactive-chat.active {
  transform: rotate(90deg);
  background-size: 0;
}

.nap{
  border-right: 1px solid #9da9c6;
}
.default-padding {
    padding-top: 90px;
    padding-bottom: 90px;
}
footer.bg-dark .widget-title {
    color:
    #ffffff;
}
footer.bg-dark .widget-title {
    color: #ffffff;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 16px;
}
footer .widget-title {
    margin-bottom: 30px;
}
footer.bg-dark p, footer.bg-dark li, footer.bg-dark a {
    color:
    #cccccc;
  }
  footer .about ul {
    margin-top: 30px;
}
footer .about ul li {
    display: inline-block;
}
footer.bg-dark p, footer.bg-dark li, footer.bg-dark a {
    color:
    #cccccc;
}
footer.bg-dark .about ul li a {
    background:
#263442 none repeat scroll 0 0;
color:
    #ffffff;
}
footer .about ul li a {
    display: inline-block;
    height: 35px;
    line-height: 38px;
    margin-bottom: 5px;
    margin-right: 5px;
    text-align: center;
    width: 35px;
    border-radius: 3px;
}
footer form {
    margin-top: 30px;
    position: relative;
    z-index: 1;
    max-width: 300px;
}
input {
    border: 1px solid #e7e7e7;
    border-radius: inherit;
    box-shadow: inherit;
    min-height: 50px;
}
footer form button {
    position: absolute;
    right: 5px;
    top: 5px;
    height: 40px;
    width: 40px;
    border-radius: 5px;
    border: none;
    background:
#3671f2;
color:
    #ffffff;
}
footer.bg-dark p, footer.bg-dark li, footer.bg-dark a {
    color:
    #cccccc;
}
footer .link li {
    display: block;
    margin-bottom: 15px;
}
footer .recent-post .single {
    margin-bottom: 20px;
}
footer .recent-post .content a {
    display: inline-block;
    margin-bottom: 10px;
    font-weight: 500;
}
footer .recent-post .content .meta li {
    color: #3671f2;
    display: inline-block;

    font-weight: 700;
    margin: 0;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
}
footer .contact li h5 {
    text-transform: capitalize;
    font-weight: 600;
    font-size: 14px;
}
footer.bg-dark p, footer.bg-dark li, footer.bg-dark a {
    color:
    #cccccc;
}
footer .contact li {
    margin-bottom: 25px;
    width: 100%;
}
.text-ratio::after{
  content: '';
  display: block;
  width: 65px;
  height: 6px;
  background: #0c1832;
  border-radius: 3px;
  margin: 0px auto;
  margin-top: 20px;
}

.text-ratio{
  font-weight: 700;
}
.section-title {
    position: relative;
}
.section-title .title-header {
    position: relative;
    padding-left: 29px;
    margin-bottom: 29px;
}
.section-title h5 {
    text-transform: uppercase;

    margin-bottom: 2px;
    margin-top: 5px;

}

.section-title .title-header::after {
    display: block;
    content: "";
    position: absolute;
    background-color: #0c1832;
    width: 6px;
    top: 0%;
    height: 95%;
    left: 0;
    margin-left: 0;
}





.section-title2 {
    position: relative;
}
.section-title2 .title-header2 {
    position: relative;
    padding-left: 29px;
    margin-bottom: 29px;
}
.section-title2 h5 {
    text-transform: uppercase;

    margin-bottom: 2px;
    margin-top: 5px;

}

.section-title2 .title-header2::after {
    display: block;
    content: "";
    position: absolute;
    background-color: white;
    width: 6px;
    top: 0%;
    height: 95%;
    left: 0;
    margin-left: 0;
}









.ttm-row.broken-section {
    padding: 0 0;
}
.mt_70 {
    margin-top: -70px !important;
}
.ttm-bgcolor-skincolor {
    background-color:
    #0c1832;
}
.spacing-1 {
    margin-top: 70px;
    padding-top: 76px;
    padding-right: 70px;
    padding-bottom: 43px;
}
.ttm-left-span .ttm-col-wrapper-bg-layer {
    margin-left: -500px;
}
.layer-content {
    position: relative;
    z-index: 9;
    height: 100%;
}
.ttm-col-bgimage-yes, .bg-layer-equal-height .ttm-col-bgcolor-yes {
    height: 100%;
    z-index: 9;
}
.col-bg-img-one.ttm-col-bgimage-yes .ttm-col-wrapper-bg-layer {
    background-image: url(debt.jpg) !important;
    background-position: left center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}
.ttm-right-span .ttm-col-wrapper-bg-layer, .col-bg-img-one .ttm-right-span .ttm-col-wrapper-bg-layer {
    margin-right: -500px;
}
.ttm-right-span .ttm-col-wrapper-bg-layer {
    width: auto;
  margin-right: -382px;
    right: 0;
}
.ttm-bg-layer, .ttm-titlebar-wrapper .ttm-titlebar-wrapper-bg-layer {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}
.ttm-left-span .ttm-col-wrapper-bg-layer {
    margin-left: -200px;
}
.ttm-bgcolor-skincolor, .ttm-bgcolor-skincolor > .ttm-bg-layer, .tp-shapewrapper, .ttm-bg-highlight-skin, .tp-caption.skin-flatborder-button:hover, .top-contact.ttm-highlight-left::after, .top-contact.ttm-highlight-right::after, .ttm-header-icons {
    background-color:
    #0c1832;
}
.ttm-left-span .ttm-col-wrapper-bg-layer {
  margin-left: -400px;
  right: 0;
  margin-top: 70px;
  padding-right: 70px;
  height: 512px;
}


.ttm-tabs ul {
    margin: 0;
        margin-top: 0px;
    padding: 0;
}
.mt-35 {
    margin-top: 35px !important;
}
.width-64 {
    width: 64%;
}
.ttm-tabs ul.tabs li {
    display: inline-block;
}

.ttm-tabs ul.tabs li.active a .ttm-tabs.ttm-tab-style-horizontal ul.tabs li.active a, .ttm-tabs.tabs-for-single-products ul.tabs li:hover a, .ttm-box-post-date, .widget.widget-nav-menu ul li a::after, .sidebar .widget_product_categories li span, .sidebar .widget-Categories li span, .ttm-pagination .page-numbers.current {
    background-color:
    #fda12b;
}

.ttm-tabs ul.tabs li a {
    display: block;
    cursor: pointer;
    padding: 4px 20px;
    margin-bottom: 5px;
    line-height: 22px;
    width: auto;
    position: relative;
    z-index: 3;
    border-radius: 3px;
    color:
    #182333;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
}

img.zoom {
    width: 100%;
    height: 200px;
    border-radius: 5px;
    object-fit: cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
.thumb {
    margin-bottom: 30px;
}
.mbr-gallery-filter ul {
  width: 100%;
padding-left: 4px;
margin-bottom: 0;
list-style: none;
padding-top: 7px;
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


.card {
    margin-bottom: 0px;
    border: 0;
    box-shadow: 0 0 2rem 0
    rgba(136,152,170,.15);
}
.bg-dark {
    background-color:
    #0c1832 !important;
}
.navbar-brand {
    font-size: 1.25rem;
    line-height: inherit;
    display: inline-block;
    margin-right: 6rem;
    padding-top: .0625rem;
    padding-bottom: .0625rem;
    white-space: nowrap;
}

.about-section3 {
    background: url(../images/outbound3.jpg) center;
        background-size: auto;
    background-size: cover;
    height: 450px;
}


.bs-dark-example {
   color: rgba(255,255,255,.95);
}
.bs-example {

    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
}

.panel-dark-title a{
  color: white;
  font-size: 18px;
}

.panel-heading{
  padding-top: 10px;
}

.footer-dark-section {
    background: url(../images/footer/footer-bg2.jpg) center;
        background-size: auto;
    height: 462px;
    background-size: cover;
    padding-top: 110px;
}
.footer-section {
  height: 388px;
  padding-top: 80px;
background-size: cover;
background-image: url('images/CapabilityBPOback.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
}
.footer-text a.third {
    background:
    #dd4b39;
}
.footer-text a.second {
    background:
    #1da1f2;
}
.footer-text a {
    background:
#3b5998;
color:
    #fff;
    width: 50px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 12px;
    font-size: 22px;
    display: inline-block;
    margin-right: 15px;

}
.footer-text a {
    background: #3b5998;
    color:
    #fff;
    width: 50px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 12px;
    font-size: 22px;
    display: inline-block;
    margin-right: 15px;

}
.footer-nav ul {
    padding-left: 0px;
}
.footer-nav ul li {
    list-style: none;
}
.footer-nav ul li a {
    color:
    #f3fbfe;
    font-size: 1rem;

    line-height: 40px;
}

#wheel1{

  transition: 0.70s;
 -webkit-transition: 0.70s;
 -moz-transition: 0.70s;
 -ms-transition: 0.70s;
 -o-transition: 0.70s;
}

#wheel1:hover{

  transition: 0.70s;
  -webkit-transition: 0.70s;
  -moz-transition: 0.70s;
  -ms-transition: 0.70s;
  -o-transition: 0.70s;
  -webkit-transform: rotate(40deg);
  -moz-transform: rotate(40deg);
  -o-transform: rotate(40deg);
  -ms-transform: rotate(40deg);
  transform: rotate(40deg);

}


#wheel2{
  position: relative;bottom: 355px;left: 27px;
  transition: 0.70s;
 -webkit-transition: 0.70s;
 -moz-transition: 0.70s;
 -ms-transition: 0.70s;
 -o-transition: 0.70s;
}

#wheel2:hover{

  transition: 0.70s;
  -webkit-transition: 0.70s;
  -moz-transition: 0.70s;
  -ms-transition: 0.70s;
  -o-transition: 0.70s;
  -webkit-transform: rotate(-40deg);
  -moz-transform: rotate(-40deg);
  -o-transform: rotate(-40deg);
  -ms-transform: rotate(-40deg);
  transform: rotate(-40deg);

}


#wheel3{
position: relative;bottom: 654px;left: 59.5px;
  transition: 0.70s;
 -webkit-transition: 0.70s;
 -moz-transition: 0.70s;
 -ms-transition: 0.70s;
 -o-transition: 0.70s;
}

#wheel3:hover{

  transition: 0.70s;
  -webkit-transition: 0.70s;
  -moz-transition: 0.70s;
  -ms-transition: 0.70s;
  -o-transition: 0.70s;
  -webkit-transform: rotate(100deg);
  -moz-transform: rotate(100deg);
  -o-transform: rotate(100deg);
  -ms-transform: rotate(100deg);
  transform: rotate(100deg);

}

#wheel4{
  position: relative;bottom: 654px;right: 182px;
  transition: 1s;
 -webkit-transition: 1s;
 -moz-transition: 1s;
 -ms-transition: 1s;
 -o-transition: 1s;
}

#wheel4:hover{

  transition: 1s;
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -ms-transition: 1s;
  -o-transition: 1s;
  -webkit-transform: rotate(-100deg);
  -moz-transform: rotate(-100deg);
  -o-transform: rotate(-100deg);
  -ms-transform: rotate(-100deg);
  transform: rotate(-100deg);

}


#wheel5{
position: relative;bottom: 830px;left: 146px;
-webkit-transition: width 0.70s, height 0.70s; /* For Safari 3.1 to 6.0 */
 transition: width 0.70s, height 0.70s;
}
#wheel5:hover{
  width: 100px;
   height: 100px;
bottom: 832px;
}


.service-center .feature-list i {
    margin: 0 auto 30px;
}
.feature-list.border-radius i {
    border-radius: 100px 100px 100px 100px;
    -moz-border-radius: 100px 100px 100px 100px;
    -webkit-border-radius: 100px 100px 100px 100px;
    width: 80px;
    height: 80px;
    line-height: 76px;
}
.course-meta .label-primary, .feature-list i {
    background-color: #0c1832;
    border-color: #fd652b;
}
.why-us i, .feature-list i {
    font-size: 34px;
    display: block;
    width: 60px;
    line-height: 58px;
    height: 60px;
    color: #ffffff;
    text-align: center;
    border-radius: 4px 4px 4px 4px;
    -moz-border-radius: 4px 4px 4px 4px;
    -webkit-border-radius: 4px 4px 4px 4px;
}
.service-center {
    text-align: center;
}

.callout {
    border: 1px solid #dedde1;
    background-color: #edecf0;
    padding: 30px;
    margin-top: 30px;
}
.callout h4 {
    border-right: 1px solid #d1d0d4;
    padding: 0;
    margin: 0;
    font-weight: 400;
}
.blog-desc div.post-date span.month, .pagination > li > a, .pagination > li > span, .btn-primary {
    background-color: #0c1832;
    color: #ffffff !important;
    border-color: #0c1832;
}
.callout i {
    margin-top: 0;
    color: #d1d0d4;
}
.alignleft, img.alignleft {
    float: left;
    margin: 6px 20px 6px 0;
        margin-top: 6px;
    display: inline;
    border: 0px;
    background: none;
    padding: 0;
    display: block;
}

.course_wrapper {
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    background-color: white;
    width: 100%;
    box-shadow: 0 0 1px 1px rgba(20,23,28,.1),0 3px 1px 0 rgba(20,23,28,.1);
    opacity: 1;
}
.text_course {
    padding-top: 10px;
    padding: 10px 4px 5px 8px;
}


.course_wrapper:hover{
  -webkit-transform: scale(0.9);
	transform: scale(1.1);
  cursor: pointer;
}

.btn-default {
    color: #32325d;
    border-color: #e0e1e2;
    background-color: #e0e1e2;
    box-shadow: 0 4px 6px rgba(50,50,93,.11),0 1px 3px rgba(0,0,0,.08);
}
.btn-default:hover{
  cursor: default;
  color: #32325d;
  border-color: #e0e1e2;
  background-color: #e0e1e2;
}



.section_drop  .color-hover{
    height: 600px;
    padding-top: 50px;
padding-bottom: 100px;
}

.color-overlay {
    background: -moz-linear-gradient(97.07% 50% 180deg,rgba(123, 82, 161, 1) 23.12%,rgba(117, 92, 168, 1) 35.84%,rgba(101, 120, 188, 1) 57.83%,rgba(76, 166, 221, 1) 86.26%,rgba(62, 190, 238, 1) 100%);
    background: -webkit-linear-gradient(180deg, rgba(123, 82, 161, 1) 23.12%, rgba(117, 92, 168, 1) 35.84%, rgba(101, 120, 188, 1) 57.83%, rgba(76, 166, 221, 1) 86.26%, rgba(62, 190, 238, 1) 100%);
    background: -webkit-gradient(linear,97.07% 50% ,17.14% 50% ,color-stop(0.2312,rgba(123, 82, 161, 1) ),color-stop(0.3584,rgba(117, 92, 168, 1) ),color-stop(0.5783,rgba(101, 120, 188, 1) ),color-stop(0.8626,rgba(76, 166, 221, 1) ),color-stop(1,rgba(62, 190, 238, 1) ));
    background: -o-linear-gradient(180deg, rgba(123, 82, 161, 1) 23.12%, rgba(117, 92, 168, 1) 35.84%, rgba(101, 120, 188, 1) 57.83%, rgba(76, 166, 221, 1) 86.26%, rgba(62, 190, 238, 1) 100%);
    background: -ms-linear-gradient(180deg, rgba(123, 82, 161, 1) 23.12%, rgba(117, 92, 168, 1) 35.84%, rgba(101, 120, 188, 1) 57.83%, rgba(76, 166, 221, 1) 86.26%, rgba(62, 190, 238, 1) 100%);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#7B52A1', endColorstr='#3EBEEE' ,GradientType=0)";
    background: linear-gradient(-90deg, rgba(0, 0, 0, 0.5) 23.12%, rgba(32, 13, 70, 0.5) 35.84%, rgba(27, 30, 42, 0.5) 57.83%, rgba(22, 42, 55, 0.5) 86.26%, rgba(13, 44, 56, 0.5) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3EBEEE',endColorstr='#7B52A1' , GradientType=1);

  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<style type="text/css">
  #reveal1 {
    opacity: 0;
    -webkit-transform: scale(0.9);
       -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
         -o-transform: scale(0.9);
            transform: scale(0.9);
    -webkit-transition: all 1s ease-in-out;
       -moz-transition: all 1s ease-in-out;
        -ms-transition: all 1s ease-in-out;
         -o-transition: all 1s ease-in-out;
            transition: all 1s ease-in-out;
  }
  #reveal1.visible {
    opacity: 1;
    -webkit-transform: none;
       -moz-transform: none;
        -ms-transform: none;
         -o-transform: none;
            transform: none;
  }


  .btn-primary:hover {
 color:#fff;
 border-color:#1a8fcb;
 background-color:#1a8fcb;
}

.course_wrapper{
  margin-left: 40px;
width: 85%;
}

.navbar-nav{
  padding-left: 70px;
}
a.uk-link-heading:hover,
.uk-link-heading a:hover {
    color:#a3cd39;
    text-decoration: none;
}
</style>

<link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

  <!-- Navabr -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark" style="padding: 0rem .34rem; background-color: #0c1832;">
    <div class="container">
      <a class="navbar-brand" href="pages/dashboards/dashboard.html">
        <img src="logo.jpg" style="width: 180px; height: 60px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
                <img src="assets/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">

              <span class="nav-link-inner--text"> HOME</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/aboutus" class="nav-link">
              <span class="nav-link-inner--text"> ABOUT US</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="solutions" class="nav-link">
              <span class="nav-link-inner--text"> SOLUTIONS</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/course" class="nav-link">
              <span class="nav-link-inner--text"> COURSES</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/blog" class="nav-link">
              <span class="nav-link-inner--text"> BLOG</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/gallery" class="nav-link">
              <span class="nav-link-inner--text"> GALLERY</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/contact" class="nav-link">
              <span class="nav-link-inner--text"> CONTACT US</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />

      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" style="background-color: white;">
    <!-- Header -->
    <div class="header" style="padding-bottom: 9rem !important; padding-top: 0rem !important;
    background-repeat: repeat;
    background-size: auto;
background-repeat: no-repeat;
background-size: cover; background-image: url('images/CapabilityBPOback.jpg');  background-repeat: no-repeat;  background-attachment: fixed; ">
      <div class="container">
        <div class="header-body">
          <div class="row align-items-center" style="padding-top: 80px;
height: 700px;">
            <div class="col-lg-6">
              <div class="pr-5   wow fadeInLeft animated"   data-wow-duration="5.5s" data-wow-delay="4s" style="position: relative;bottom: 230px;">
                <h1 class="display-2 font-weight-bold mb-0" style="color: white;">CapabilityHR </h1>
                <h2 class="display-4 font-weight-light" style="color: white;">We specialise in Training and Development</h2>
                <p class="mt-4" style="color: white;">Instilling an environment of possibility. A place of continuous learning, development and improvement.</p>
                <div class="mt-5">
                  <a href="" class="btn btn-neutral my-2">About us</a>
                  <a href="" class="btn btn-default my-2">Tutorials</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div id="allwheels" style="position: relative;
top: 80px; left: 130px;">
              <a href=""><img src="images/wheel/who.png" id="wheel1" width="382" height="381"></a>
              <a href=""><img src="images/wheel/what.png" id="wheel2"  style="" width="328" height="328"></a>
              <a href=""><img src="images/wheel/why.png"  id="wheel3" style="" width="267" height="267"></a>
              <a href=""><img src="images/wheel/how.png"id="wheel4"  style="" width="208" height="208"></a>
              <a href=""><img src="images/wheel/contact.png" id="wheel5" style="" width="89" height="89"></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <section class=" wow fadeInLeft animated" data-wow-duration="1.5s" data-wow-delay="0s" style=" padding-top: 2rem;  padding-bottom: 2rem; position: relative;bottom:150px;">
          <div class="container">
          <div class="row" style="background-color:
    white;
    padding: 50px; box-shadow: 0 3px 20px rgba(0, 0, 0, 0.1);">
        <div class="col-lg-4 nap">
            <div class="">

                <h3 class=" " style="padding-top: 10px;">Flexible Courses</h3>
                <p class="">We bring the "fun" back into learning by making our training sessions engaging, collaborative and interactive.  </p>

            </div>
        </div>
        <div class="col-lg-4 nap">
            <div class="">

                <h3 class="" style="padding-top: 10px;">Online Study Material</h3>
                <p class="">We offer a wide range of useful online study material, helping and guiding you throughout the course. </p>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="">

                <h3 class="" style="padding-top: 10px;">Certified Instructors</h3>
                <p class="">We have the country's best instructors and facilitators giving you a helping hand through the duration of the course. </p>

            </div>
        </div>
    </div>
    </div>
        </section>


    <section id="aboutus" class="py-6 " style="padding-top: 1rem !important; background-color: white; position: relative; padding-bottom: 0rem !important;
bottom: 80px;" >
      <div class="container">
      <div class="row">
       <div class="col-lg-12">
          <div class="this_heading">
            <h1 class="text-center">Getting Started</h1>
            <p class="text-center">Being certified in your field of expertise makes it easier to find jobs in these fast growing industries. classroom training gives you a<br/> more hands own experience in your field. Why not start now.</p>

          </div>
       </div>



        </div>
        <div class="row service-center" style="padding-top: 70px;">
          <div class="col-md-4 col-sm-6">
          <div class="feature-list border-radius">
          <i class="fa fa-graduation-cap"></i>
          <p><strong>Classroom Training</strong></p>
          <p>We provide practical classroom training to have a more hands on approach.</p>
          </div>
          </div>
          <div class="col-md-4 col-sm-6">
          <div class="feature-list border-radius">
          <i class="fas fa-book-reader"></i>
          <p><strong>e-Learning Courses</strong></p>
          <p>Study online, at your own pace to upskill or become certified in your field.</p>
          </div>
          </div>
          <div class="col-md-4 col-sm-6">
          <div class="feature-list border-radius">
          <i class="fas fa-award"></i>
          <p><strong>Get Certified</strong></p>
          <p>Become a well certified, skilled individual, take our course today.</p>
          </div>
          </div>
       </div>

       <div class="callout row">
<div class="col-md-9">
<h4><i class="fa fa-graduation-cap fa-3x alignleft"></i> Being certified in your field of expertise makes it easier to find jobs in this fast growing industry. <br/>classroom training gives you a more hands own experience in your field. Why not start now.</h4>
</div>
<div class="col-md-3">
<a href="/course" class="btn btn-primary btn-block">Courses</a>
</div>
</div>
      </div>
    </section>

    <div class="sdfd">
      <div style="
      background: url(../counter-dark-bg.png) center;
          background-size: auto;
      height: 122px;
      background-size: cover;
      background-color: white;
  ">

</div>
</div>



            <section class="py-7 animated slow" data-av-animation="fadeIn" style="padding-top: 50px;
padding-bottom: 100px; background-size: cover; background-image: url('images/CapabilityBPOback.jpg');  background-repeat: no-repeat;  background-attachment: fixed; ">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 col-lg-12" style="padding-bottom: 70px;">
                         <h2 class="title text-center" style="color: white; padding-top: 17px; ">Top Rated Courses</h2>

                      </div>



                      <!--col-md-4-->
                  </div>

                  <ul class="uk-switcher switcher-container">



                      <li class="uk-active">
                          <!--  Web development -->
                          <div class="uk-container">

                              <!-- Filter course  -->


                              <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin uk-grid" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid="">



                                  @foreach($courses as $course)
                                     <!-- Course   -->
                                  <div style="" class="uk-first-column uk-scrollspy-inview uk-animation-slide-bottom-small">
                                      <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                          <a href="/view/course/7" class="uk-link-reset">
                                              <img src="{{ asset('courses/')}}/5yp3itbx2u.png " class="course-img">
                                              </a><div class="uk-card-body"><a href="/view/course/7" class="uk-link-reset">
                                                  <h4 style="font-size: 1.1rem;">
                                                    @if(strlen($course->course_title) > '30')
                                                       {!! substr($course->course_title, 0,30) !!}...
                                                        @else
                                                        {{ $course->course_title }}
                                                       @endif
                                                                          </h4>
                                                  <p>
                                                    @if(strlen($course->course_notes) > '150')
                                                        {!! substr($course->course_notes, 0,180) !!}...
                                                        @else
                                                        {!! $course->course_notes !!}
                                                        @endif
                                                                                                                    </p>


                                                  <hr class="uk-margin-remove-top">
                                                  </a><div class="uk-clearfix"><a href="/view/course/7" class="uk-link-reset">
                                                    </a><div class="uk-float-left"><a href="/view/course/7" class="uk-link-reset">

                                                    </a><a href="/course/{{ $course->course_link }}" class="btn btn-primary" >View More</a>



                                                    </div>
                                                  </div>

                                              </div>


                                      </div>

                                  </div>

                                @endforeach


















                                  <!-- Course   -->


                              </div>
                              <a href="/course" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a>
                          </div>
                      </li>

                  </ul>


                  <!--row-->
              </div>
            </section>














            <section class="py-7 aniview reallyslow" style="" data-av-animation="fadeIn">
                   <div class="container">
                     <div class="row ">
                       <div class="col-lg-12" style="padding-bottom: 90px;">
                          <h1 class="text-center">Blog Posts </h1>
                          <div class="row">
                            <div class="col-lg-12">
                                 <p class="text-center">Available articles are listed below. Read, Learn and be in the Know</p>
                            </div>
                          </div>



                       </div>

<div id="trigger1" class="spacer s0"></div>
@foreach($tutorials as $tutorial)
<div class="col-lg-4">
  <div class="av-container av-visible"><div class="featured-imagebox featured-imagebox-post box-shadow aniview animated bounce delay-3s" data-av-animation="bounce" style="opacity: 1;">
      <div class="featured-thumbnail">
          <img class="img-fluid" src="{{ asset('')}}{{ $tutorial->tutorial_avatar}}" alt="">
          <div class="featured-icon">
              <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                  <i class="ti ti-pencil"></i>
              </div>
          </div>
      </div>
      <div class="featured-content featured-content-post">
          <div class="post-title featured-title">
              <h5><a href="/tutorial/view/{{ $tutorial->tutorial_link}}">{{ $tutorial->tutorial_title }}</a></h5>
          </div>


          @if($tutorial->tutorial_title == "The Positive Attitude Deception")
          <div class="post-meta" style="padding-top: 34px;" >
              <span class="ttm-meta-line"><i class="fa fa-user"></i>By Sirisha Govender</span>
              <span class="ttm-meta-line"><i class="fa fa-calendar"></i>March 13, 2020</span>
          </div>
          @elseif($tutorial->tutorial_title == "Boardrooms and Building blocks")
          <div class="post-meta">
              <span class="ttm-meta-line"><i class="fa fa-user"></i>By Sirisha Govender</span>
              <span class="ttm-meta-line"><i class="fa fa-calendar"></i>March 13, 2020</span>
          </div>
          @else
          @if(strlen($tutorial->tutorial_title) > '31')
          <div class="post-meta">
              <span class="ttm-meta-line"><i class="fa fa-user"></i>By Sirisha Govender</span>
              <span class="ttm-meta-line"><i class="fa fa-calendar"></i>March 13, 2020</span>
          </div>
              @else
              <div class="post-meta" style="padding-top: 34px;" >
                  <span class="ttm-meta-line"><i class="fa fa-user"></i>By Sirisha Govender</span>
                  <span class="ttm-meta-line"><i class="fa fa-calendar"></i>March 13, 2020</span>
              </div>
              @endif

          @endif


      </div>
  </div></div>
</div>
@endforeach
                     </div>
                   </div>
                 </section>






                             <section class="section_drop aniview slow " data-av-animation="slideInRight" style=" background-size: cover; background-image: url('images/CapabilityBPOback1.jpg');  background-repeat: no-repeat;  background-attachment: fixed; ">
                 <div class="color-overlay">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-12 col-lg-12" style="padding-bottom: 70px;">
                                          <h5 class=" text-center" style="color: white; margin: 0;
font-size: 19px;
line-height: 28px; padding-top: 120px; padding-bottom: 70px;">Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do. </h5>
                                      <h5 class=" text-center" style="color: white; font-size: 19px;">~Pele</h5>
                                       </div>



                                       <!--col-md-4-->
                                   </div>


                                   <!--row-->
                               </div>
                             </div>
                             </section>








    <section class="py-7" style="padding-top: 7rem !important; padding-bottom: 7rem !important;" id="multiDirect">
      <div class="container">
        <div class="row" id="">


            <div class="col-md-6" style="padding-bottom: 50px;">
                  <div class="section-title clearfix">
                                          <div class="title-header">
                                              <h5 style="text-transorm: uppercase;">Operating in dynamically fast paced environments, our team is our, and your, success.</h5>
                                              <h2 class="title">Meet The Team</h2>
                                          </div>
                                      </div>

                 </div>

                 <div class="col-lg-6">
                   </div>



                                      <!-- Team member -->
                                      <div class="col-xs-12 col-sm-6 col-md-4">
                                          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                              <div class="mainflip">
                                                  <div class="frontside" style="border: 1px solid #e2e6ed;">
                                                      <div class="card">
                                                          <div class="card-body text-center">
                                                              <p><img class=" img-fluid" src="images/sirisha.png" alt="card image"></p>
                                                              <h4 class="card-title">Sirisha Govender</h4>
                                                              <p class="card-text" style="font-weight: 700;">HEAD OF TRAINING AND DEVELOPMENT</p>
                                                              <hr style="width: 8%; margin-top: 3px;
                                  margin-bottom: 8px;
                                  border: 0;
                                   border-top-color: currentcolor;
                                   border-top-style: none;
                                   border-top-width: 0px;
                                  border-top: .0625rem solid rgba(0, 0, 0, .1);">
                                                              <p class="card-text">Bachelor of Science (BS)</p>
                                                              <p class="card-text" style="padding-top: 8px;">Sirisha joined CapabilitHR... </p>

                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="backside">
                                                      <div class="card">
                                                          <div class="card-body text-center mt-4">
                                                              <h4 class="card-title">Sirisha Govender</h4>
                                                              <p class="card-text">Sirisha joined CapabilityHR as head of learning and development after running her own successful training company T3 for over 10 years. The continued desire to make a difference and add value to others as driven her to impart her knowledge and passion of training to Capability HR, their people and their clients.
                   </p>

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
                                                                                 <p class="card-text" style="padding-top: 8px;">Paul joined Debt-IN in 2014 as a Senior Training Manager... </p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="backside">
                                                                         <div class="card">
                                                                             <div class="card-body text-center mt-4">
                                                                                 <h4 class="card-title">Paul Odayar</h4>
                                                                                 <p class="card-text" id="paul">Paul joined Debt-IN in 2014 as a Senior Training Manager, managing the sourcing, screening,
                                                                                      interviewing and training of new entrants into the Debt-IN environment.  Having an in-depth
                                                                                      understanding of outbound dialler activity and the ability to analyse dialler-output data to identify
                                                                                      potential problems/issues.<button type="button" id="more_paul" class="btn btn-primary">More</button>
                                                                                 </p>
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
                                           <p><img class=" img-fluid" src="images/Hena-Sugudhav.jpg" alt="card image"></p>
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










                   </div>
      </div>
    </section>

  <!-- Footer -->
  <footer id="footer" class="footer-section footer-dark-section">
        <div class="container">
            <div class="row wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="col-md-4 footer-text">
                <h2 style="color: white;">About Us</h2>
                <p style="color: white;">Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do..</p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a class="second" href="#"><i class="fa fa-twitter"></i></a>
                <a class="third" href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <!--col-md-4-->
                <div class="col-md-3 footer-nav">
                <h2 style="color: white;">Quick Links</h2>
                <ul>
                <li><a href="#">About Us</a></li>

                <li><a href="#">Team</a></li>
                <li><a href="#">Contact</a></li>
                </ul>
                </div>
                <!--col-md-3-->
                <div class="col-md-3 footer-nav">
                <h2 style="color: white;">Quick Links</h2>
                <ul>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Gallery</a></li>
                </ul>
                </div>
                <!--col-md-3-->
                <div class="col-md-2 footer-nav">
                <h2 style="color: white;">Contact Us</h2>
                <ul>
                <li><a href="#">support@capabilityhr.co.za</a></li>
                <li><a href="#">info@capabilityhr.co.za</a></li>
                <li><a href="#">+27 61 381 7089</a></li>

                </ul>
                </div>
                <!--col-md-2-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </footer>

    <div style="background-color: #1a8fcb; padding: 7px;"><p class="text-center" style="color:white; margin-bottom: 0rem;font-size: 1rem;font-weight: 400;">Copyright and Allrights Reserved © <script type="text/javascript">document.write(new Date().getFullYear());</script></p></div>



</div>



  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

  <script src="assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="{{ asset('jquery.aniview.js') }}"></script>
  <script>
       $(document).ready(function(){
           $('.aniview').AniView();
       });
   </script>



  <!-- Argon JS -->
  <script src="assets/js/argon.min9f1e.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="assets/js/demo.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script type="text/javascript">
   $(function(){
     $("#more_paul").click(function(){
          $("#paul").fadeIn(3000);
       $("#paul").html("Paul is now Operations Manager focusing on developing strategies that increase revenue for both inbound and outbound calls.");
        $("#more_paul").hide();
     })
   })
  </script>


<script type="text/javascript">
$(document).ready(function() {
 $(".fancybox").fancybox();
});
</script>


  <script type="text/javascript">

   $(function() {
     $(".chat-open-dialog").click(function() {
       $(this).toggleClass("active");
       $('.chat-popup').toggleClass("active");
       $('.chat-button-destroy').toggleClass("active");
     });
   });


   $(function() {
     $(".chat-button-destroy").click(function() {
       $('.chat-popup').removeClass("active");
       $('.chat-open-dialog').removeClass("active");
       $(this).removeClass("active");
     });
   });



   function startEmbeddedChat() {


       let text = $("#message_whatsapp").val();
       if(text){
         window.location = "https://web.whatsapp.com/send?phone=+27721088188&text="+text;
      }
   }

 </script>



</body>
</html>
