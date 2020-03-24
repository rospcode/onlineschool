<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<title>@if(auth()->check()) {{ auth()->user()->fname }} | SDUG @else Welcome To SDUG @endif</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('assets/css/argon.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Icons -->
    <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

    body{
      background-color: #f8f9fe;
    }

    .d-lg-none {

    display: block !important;

}

.navbar-dark .navbar-nav .nav-link {

    color: white;
    font-weight: 600;

}

.navbar-nav .nav-link {

    padding-top: .654rem;
    padding-bottom: .654rem;
    border-radius: .25rem;

}


.bg-default {
    background-color: #0d0d0d !important;
}


.card-body {
    padding: .5rem;
    flex: 1 1 auto;
}
.card-title {
    margin-bottom: .25rem;
}



.snax-teaser-binary .snax-teaser-binary-slogan {
    width: 100%;
    margin: auto;
    position: absolute;
    z-index: 1;
    left: 0;
    right: auto;
    bottom: 0;
    font-size: 24px;
    line-height: 0;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    white-space: pre-line;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.snax-teaser-binary .snax-teaser-binary-slogan div:nth-child(1) {

    margin-bottom: 12px;
    z-index: 2;
    -webkit-transform: translateX(-50%) rotate(5deg) translateY(90%) translateZ(1px);
    -moz-transform: translateX(-50%) rotate(5deg) translateY(90%) translateZ(1px);
    -ms-transform: translateX(-50%) rotate(5deg) translateY(90%) translateZ(1px);
    -o-transform: translateX(-50%) rotate(5deg) translateY(90%) translateZ(1px);
    transform: translateX(-50%) rotate(5deg) translateY(90%) translateZ(1px);
    background: #ff5dff;
    color: #1a1a1a;

}
.snax-teaser-binary .snax-teaser-binary-slogan div {

    display: table;
    padding: 3px 6px;
    position: relative;
    left: 50%;
    line-height: 1;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;

}
.snax-teaser-binary .snax-teaser-binary-slogan div:nth-child(2) {
    margin-bottom: 10px;
    z-index: 1;
    font-size: 14px;
    -webkit-transform: translateX(-50%) translateY(60%);
    -moz-transform: translateX(-50%) translateY(60%);
    -ms-transform: translateX(-50%) translateY(60%);
    -o-transform: translateX(-50%) translateY(60%);
    transform: translateX(-50%) translateY(60%);
    background: #fff;
    color: #1a1a1a;
}
.snax-teaser-binary .snax-teaser-binary-slogan div:nth-child(3) {
    margin-bottom: 2px;
    z-index: 2;
    -webkit-transform: translateX(-50%) rotate(-5deg);
    -moz-transform: translateX(-50%) rotate(-5deg);
    -ms-transform: translateX(-50%) rotate(-5deg);
    -o-transform: translateX(-50%) rotate(-5deg);
    transform: translateX(-50%) rotate(-5deg);
    background: #5dd3ff;
    color: #1a1a1a;
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
  animation: spin 2s linear infinite;
}




@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

.like_me:hover{
    color: red;
}

.para {
  font-family: 'Francois One' ;
}

.zoom {

}

.zoom:hover {
  transform: scale(1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

@media (max-width: 1200px)
{

  #these_bars{
       display: none;
    }

    .ml-lg-auto{
      padding-top: 10px;
    }

}




/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 900px){
  #gimme{
    padding-top: 230px;
  }
}
.card{
  border: .0625rem solid #fff;
}
img.zoom {
    width: 100%;
    height: 200px;

    object-fit: cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
img.zoomed {
    width: 100%;
    height: 300px;

    object-fit: cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
.thumb {
    margin-bottom: 30px;
}

.navbar-nav .nav-link {

    padding: .625rem 0;
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
    color: white !important;

}

.navbar-collapse.collapsing, .navbar-collapse.show {

    padding: 1.5rem;
    animation: show-navbar-collapse .2s ease forwards;
    border-radius: .25rem;
    background: black;
    box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);

}
.navbar-collapse .navbar-toggler span {
    position: absolute;
    display: block;
    width: 100%;
    height: 2px;
    opacity: 1;
    border-radius: 2px;
    background: white;
}
.navbar-collapse .collapse-brand img {

    height: 36px;

}

@media (min-width: 992.98px)
{
   .navbar-nav {
       padding-left: 50px;
   }
}

.card {
  border-radius: 6px;
  background-color: #FFFFFF;
  margin-bottom: 20px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.23);
}
.card .image {
  width: 100%;
  overflow: hidden;
  height: 200px;
  border-radius: 6px 6px 0 0;
  position: relative;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.card .image img {
  width: 100%;
}
.card .filter {
  position: absolute;
  z-index: 2;
  background-color: rgba(0, 0, 0, 0.68);
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  text-align: center;
  opacity: 0;
  filter: alpha(opacity=0);
}
.card .filter .btn {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.card:hover .filter {
  opacity: 1;
  filter: alpha(opacity=100);
}
.card .btn-hover {
  opacity: 0;
  filter: alpha(opacity=0);
}
.card:hover .btn-hover {
  opacity: 1;
  filter: alpha(opacity=100);
}
.card .content {
  padding: 15px 15px 10px 15px;
}
.card .category {
  font-size: 14px;
  color: #9A9A9A;
  margin-bottom: 0px;
}
.card .category i {
  font-size: 16px;
}
.card .title {
  margin: 0 0 10px 0;
  color: #333333;
  font-weight: 300;
}
.card .avatar {
  width: 30px;
  height: 30px;
  overflow: hidden;
  border-radius: 50%;
  margin-right: 5px;
}
.card .description {
  font-size: 14px;
  color: #333;
}
.card .footer {
  padding: 0;
  background-color: transparent;
  line-height: 30px;
}
.card .footer div {
  display: inline-block;
}
.card .stats {
  margin-right: 5px;
  color: #9A9A9A;
}
.card .stats.pull-right {
  margin-left: 5px;
  margin-left: 0;
}
.card .card-link {
  color: #9A9A9A;
}
.card .author {
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
}
.card .author i {
  font-size: 14px;
}
.card h6 {
  font-size: 12px;
  margin: 0;
}
.card.card-separator:after {
  height: 100%;
  right: -15px;
  top: 0;
  width: 1px;
  background-color: #DDDDDD;
  content: "";
  position: absolute;
}

.card-user .image {
  height: 110px;
}
.card-user .image-plain {
  height: 0;
  margin-top: 110px;
}
.card-user .author {
  text-align: center;
  text-transform: none;
  margin-top: -70px;
}
.card-user .avatar {
  width: 124px;
  height: 124px;
  border: 5px solid #FFFFFF;
  position: relative;
  margin-bottom: 15px;
}
.card-user .avatar.border-gray {
  border-color: #EEEEEE;
}
.card-user .title {
  line-height: 24px;
}
.card-user .content {
  min-height: 240px;
}

.card-product .image {
  height: auto;
}
.card-product .title {
  margin: 0;
}
.card-product .price {
  font-size: 18px;
  color: #9A9A9A;
  font-weight: 300;
}
.card-product .price-old {
  text-decoration: line-through;
  font-size: 16px;
  color: #9A9A9A;
}
.card-product .price-new {
  color: #FF3B30;
}
.card-product .footer {
  line-height: 40px;
  margin: 0;
}
.card-product .carousel-control {
  width: 40px;
  text-shadow: 0 0 0;
  color: #9A9A9A;
  opacity: 0.7;
  filter: alpha(opacity=70);
}
.card-product .carousel-control.left .fa {
  left: 5px;
}
.card-product .carousel-control.right .fa {
  left: auto;
  right: 5px;
}
.card-product .carousel-control:hover, .card-product .carousel-control:focus {
  opacity: 1;
  filter: alpha(opacity=100);
}

.card-refine .header {
  padding: 10px 15px 0px 15px;
}
.card-refine .header h4 {
  line-height: 40px;
}
.card-refine .content {
  padding: 0;
}
.card-refine .panel {
  background-color: transparent;
  border-bottom: 0;
  border-top: 1px solid #DDDDDD;
}
.card-refine .panel-heading {
  padding: 0;
  box-shadow: 0 0 0;
  border-radius: 0;
}
.card-refine .panel-default > .panel-heading {
  box-shadow: 0 0 0;
  background-color: transparent;
}
.card-refine .panel-group .panel-heading + .panel-collapse .panel-body {
  border: 0;
}
.card-refine .panel-group .panel-title {
  font-size: 12px;
}
.card-refine .panel-title a {
  padding: 17px 15px;
  display: block;
}
.card-refine .slider {
  margin-top: 10px;
}
.card-refine .radio,
.card-refine .checkbox {
  margin-top: -5px;
}
.card-refine .price-left {
  float: left;
}
.card-refine .price-right {
  float: right;
}
.card-refine .panel-scroll {
  height: 273px;
  overflow-y: scroll;
}
.card-refine .panel-group .panel + .panel {
  margin: 0;
}
.card-refine .collapsed i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.card-price {
  position: relative;
}
.card-price .price {
  font-weight: 300;
  text-align: center;
  font-size: 66px;
}
.card-price .price small {
  margin-right: 4px;
  margin-left: -13px;
  color: #333333;
}
.card-price .category {
  text-align: center;
  margin-top: 10px;
}
.card-price .content {
  min-height: 330px;
}
.card-price .list-unstyled {
  padding-top: 20px;
  font-size: 14px;
  text-align: center;
  color: #9A9A9A;
}
.card-price .list-unstyled b {
  color: #333333;
}
.card-price .list-unstyled li {
  margin-bottom: 5px;
}
.card-price .list-lines {
  text-align: left;
}
.card-price .list-lines li {
  margin: 0;
  padding: 10px 0;
  border-bottom: 1px solid #E3E3E3;
}
.card-price .list-lines li:last-child {
  border: 0;
}
.card-price .fa {
  width: 26px;
  text-align: center;
  font-size: 16px;
}
.card-price.card-price-best-deal {
  margin-top: -25px;
}
.card-price.card-price-best-deal .content {
  min-height: 380px;
}

.card-background {
  position: relative;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}
.card-background .image {
  border-radius: 6px;
}
.card-background .filter {
  opacity: 0.55;
  filter: alpha(opacity=55.0);
  border-radius: 6px;
}
.card-background:hover .filter {
  opacity: 0.75;
  filter: alpha(opacity=75);
}
.card-background .title,
.card-background .stats,
.card-background .category,
.card-background .description,
.card-background small,
.card-background a {
  color: #FFFFFF;
}
.card-background small {
  font-weight: 400;
}
.card-background .title {
  margin-top: 30px;
  font-weight: 400;
}
.card-background .content,
.card-background .footer {
  position: absolute;
  z-index: 3;
  top: 0;
  left: 0;
  width: 100%;
}
.card-background .footer {
  bottom: 0;
  top: auto;
  padding: 10px 15px;
  width: 100%;
  line-height: 40px;
  color: #FFFFFF;
}
.card-background .avatar {
  border: 2px solid #FFFFFF;
  width: 32px;
  height: 32px;
}
.card-background .video {
  overflow: hidden;
  border-radius: 6px;
  position: relative;
  max-height: 300px;
}
.card-background video {
  width: 100%;
  border-radius: 6px;
  -webkit-border-radius: 6px;
}
.card-background.state-play .filter, .card-background.state-play .content, .card-background.state-play .category, .card-background.state-play .btn, .card-background.state-play .stats {
  opacity: 0;
  filter: alpha(opacity=0);
}
.card-background.state-play:hover .btn {
  opacity: 1;
  filter: alpha(opacity=100);
}
.card-background .map {
  border-radius: 6px;
  height: 300px;
}
.card-background h1.title {
  font-weight: 300;
}
.card-background .price {
  margin: 0;
  color: #FFFFFF;
}

.card-refine .btn-xs,
.card-product .btn-xs {
  margin: 8px 0;
}
.card-refine .btn-simple,
.card-product .btn-simple {
  padding-left: 0;
  padding-right: 0;
}

.card-user .footer,
.card-price .footer {
  padding: 5px 15px 10px;
}
.card-user hr,
.card-price hr {
  margin: 5px 15px;
}


.blog-page .card {
    margin-bottom: 60px;
}
.card-plain {
    background-color: transparent;
    box-shadow: none;
    border-radius: 0;
}

.card-plain .image {
  border-radius: 4px;
}

.filter.filter-white {
  background-color: rgba(255, 255, 255, 0.91);
}

.filter.filter-blue {
  background-color: rgba(9, 82, 239, 0.69);
}

.filter.filter-azure {
  background-color: rgba(0, 146, 248, 0.69);
}

.filter.filter-green {
  background-color: rgba(4, 124, 10, 0.69);
}

.filter.filter-orange {
  background-color: rgba(204, 119, 0, 0.69);
}

.filter.filter-red {
  background-color: rgba(252, 13, 0, 0.69);
}


.img_banner{
  width: 100%;
margin: 0px auto;
display: inherit;
max-width: 100%;
max-height: 100%;
display: block; height: 100%;
}

@media (max-width: 800px){
  .img_banner{

display: block; height: 140px;
  }
}



.fa-heart:hover{
  color: #ff0036;
}
</style>
  </head>
  <body>

    <div class="load" style="display: none;">



  <h2>Loading...</h2>

    </div>



    <div class="wrapper">

      <div class="">
          <div class="" >
             <div class="">
               <img style="" class="img-responsive img_banner" src="{{ asset('sdugbanner.jpg') }}">

             </div>

           </div>
      </div>

    </div>

<div class="header">

  <nav class="navbar navbar-expand-lg navbar-dark bg-default" style="padding: .100rem .100rem;">
      <div class="container">

        <i class="fa fa-bars" id="these_bars" style="color: white;"></i>



          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-default">
              <div class="navbar-collapse-header">
                  <div class="row">
                      <div class="col-6 collapse-brand">
                          <a href="">
                             <img src="{{ asset('sduggg.png') }}" class="zoom" style="width: 60px;" />
                          </a>
                      </div>
                      <div class="col-6 collapse-close">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                              <span></span>
                              <span></span>
                          </button>
                      </div>
                  </div>
              </div>

              <ul class="navbar-nav"  style="">
                  <li class="nav-item" data-nav="home" >
                      <a class="nav-link nav-link-icon" href="/">

                          <span class="nav-link-inner--text d-lg-none">HOME</span>
                      </a>
                  </li>
                  <li class="nav-item"  data-nav="new" >
                      <a class="nav-link nav-link-icon" href="most-liked">

                          <span class="nav-link-inner--text d-lg-none">MOST LIKED</span>
                      </a>
                  </li>
                  <li class="nav-item"  data-nav="top_rated" >
                      <a class="nav-link nav-link-icon" href="all-sdug">

                          <span class="nav-link-inner--text d-lg-none">ALL SDUG MEMES</span>
                      </a>
                  </li>




              </ul>



          </div>
      </div>
  </nav>




</div>





<div class="main" >


<div class="container">



</div>





<div class="main_head">
 <div class="container">
  <div class="row">
     <div class="col-lg-12">
            <h4 class="text-center" style="padding-top: 30px;">login </h4>
            <hr style="margin-top: 0rem;" />
          </div>



   <div class="col-lg-3">
   </div>

   <div class="col-lg-6">
                 <form class="form-signin" method="post" id="login_form" action="/login/in" style="width: 100%;
    margin: 0px auto;
        margin-top: 0px;
        margin-bottom: 0px;

    background-color: white;
    padding: 40px;
    border-radius: 10px;
    margin-top: 0px;
    margin-bottom: 140px;

}" >

{{ csrf_field() }}

                  <div class="form-group">

                  </div>

                     <div class="form-group">
                       <label for="validationServer03">Username</label>
                       <input type="text" class="form-control" name="username" placeholder="Your Username" value="" required>
                       <div class="invalid-feedback">
                       </div>
                     </div>

                     <div class="form-group">
                       <label for="validationServer03">Password</label>
                       <input type="password" class="form-control" name="password" placeholder="Your Password" required>
                       <div class="invalid-feedback">
                       </div>
                     </div>

                     <div class="form-group" id="this_message">



                     </div>

                     <div class="form-group">
                       @if(session('msg'))
                       <div class="alert alert-danger">
                         {{ session('msg') }}
                       </div>
                       @endif
                     </div>




                     <button class="btn btn-primary btn-block"  type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>



                     </form>
                   </div>

                      <div class="col-lg-3">
                      </div>



  </div>
 </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="form_post" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group">
            <input type="file" name="file" id="file" class="form-control"  onchange="readURL(this);" />
            <img id="blah" class="zoom" src="" style="width: 100%;
 padding-top: 20px;
 height: 100%; Display: none;" />
          </div>

          <div class="form-group">
            <progress id="progressBar" value="0" max="100" style="width: 100%;"></progress>
 <div id="status"></div>
 <p id="loaded_n_total"></p>
          </div>


          <div class="form-group">
              <button type="button" id="upload_image" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<section id="footer">
    <div class="footer-copyright text-center py-3" style="background-color: #0d0d0d !important;
color: white; font-weight: 600; padding-bottom: 0.5rem !important; padding-top: 0.5rem !important;">Copyright 2020
  </div>
   </section>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<!-- Core -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>
    <script src="{{ asset('assets/js/argon.js')}}"></script>

    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>



</body>
</html>
