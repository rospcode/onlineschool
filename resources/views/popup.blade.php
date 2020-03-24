
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Chat Popup</title>

  <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
  <!--  Social tags      -->


  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto');

          #fo-conversation-popup-wrapper {
              position: fixed;
              bottom: 135px;
              width: 365px;
              height: 300px;
              font-family: 'Roboto', sans-serif;
              border-radius: 8px;
              opacity: 0;
              transition: 0.5s;
              z-index: -1;
              display: block;
          }

          #fo-conversation-popup-wrapper.open {
              opacity: 1;
              height: 400px;
              -webkit-box-shadow: 0 5px 40px rgba(0,0,0,.16)!important;
              box-shadow: 0 5px 40px rgba(0,0,0,.16)!important;
              z-index: 1000000 !important;
          }

          #fo-iframe-wrapper {
              height: 100%;
          }

          #fo-iframe {
              width: 100%;
              height: calc(100% - 40px);
              margin-bottom: 0;
          }

          #fo-conversation-popup-header {
              display: flex;
              align-items: center;
              font-size: 16px;
              padding: 18px 15px;
       box-sizing: border-box;
         border-top-right-radius: 8px;
              border-top-left-radius: 8px;
              float: left;
              width: 100%;
          }

          #fo-conversation-popup-title {
              flex: 1;
              padding-left: 10px;
          }

          #fo-conversation-popup-close {
              width: 40px;
              height: 40px;
              display: flex;
              justify-content: center;
              align-items: center;
              color: white;
              cursor: pointer;
              /*border-left: 1px solid rgba(255,255,255,0.1);*/
          }

          .hidden {
              visibility: hidden !important;
          }

          #fo-toggle-button {
              position: fixed;
              bottom: 30px;
              border-radius: 50%;
              height: 63px;
              width: 63px;
              cursor: pointer;
              -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
              box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
              z-index: 1000000 !important;
              transition: 0.3s;
              position: absolute;
              right: 30px;
              bottom: 30px;
          }

          #fo-toggle-button:hover {
              z-index: 1000000 !important;
              -webkit-box-shadow: 0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)!important;
              box-shadow: 0 2px 8px rgba(0,0,0,.09),0 4px 40px rgba(0,0,0,.24)!important;
              opacity: 1;
          }

          #fo-toggle-button .fo-icon {
              height: 63px;
              width: 63px;
              background-size: 50% 50%;
              background-position: 50% 50%;
              background-repeat: no-repeat;
          }

          #fo-toggle-button .fo-icon.animate {
              animation: iconTurnIn 0.3s;
              animation-fill-mode: forwards;
          }

          #fo-toggle-button .fo-icon.no-animate {
              animation: iconTurnOut 0.3s;
              animation-fill-mode: forwards;
          }

          @keyframes iconTurnIn {
              0%   { background-image: url('https://fobi.io/icon.png'); transform: rotate(0) scale(1); opacity: 1  }
              15%  { background-image: url('https://fobi.io/icon.png'); transform: rotate(15deg) scale(0.8); opacity: 0.9 }
              50%  { background-image: url('https://fobi.io/icon.png'); transform: rotate(45deg) scale(0.3); opacity: 0.7  }
              51%  { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(45deg) scale(0.1); opacity: 0.7  }
              70%  { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(75deg) scale(0.2), ; opacity: 0.9 }
              100% { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(90deg) scale(0.5); opacity: 1  }
          }

          @keyframes iconTurnOut {
              0%   { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(90deg) scale(0.5); opacity: 1  }
              15%  { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(75deg) scale(0.2), ; opacity: 0.9 }
              50%  { background-image: url('http://flaticons.net/gd/makefg.php?i=icons/Mobile%20Application/Close.png&r=255&g=255&b=255'); transform: rotate(45deg) scale(0.1); opacity: 0.7  }
              51%  { background-image: url('https://fobi.io/icon.png'); transform: rotate(45deg) scale(0.3); opacity: 0.7  }
              70%  { background-image: url('https://fobi.io/icon.png'); transform: rotate(15deg) scale(0.8); opacity: 0.9 }
              100% { background-image: url('https://fobi.io/icon.png'); transform: rotate(0) scale(1); opacity: 1  }
          }



  .card-body {

    flex: 1 1 auto;
   padding: 0px;
}


.header_date:after{
  border-color: black;

border: .1111px solid #d3dfff;

height: 3px;

width: 100%;

content: " ";

display: block;

position: absolute;

height: 0px;

background: #d3dfff;

width: 27%;

left: 263px;

top: 113px;
}

.header_date:before{
  border-color: black;

border: .1111px solid #d3dfff;

height: 3px;

width: 100%;

content: " ";

display: block;

position: absolute;

height: 0px;

background: #d3dfff;

width: 27%;



top: 113px;
}

.header_date{
  padding-top: 10px;
}

.actual_body p{
  font-size: .87rem;
  font-weight: 500;
}
.actual_body{
  max-height: 250px;
overflow: auto;
    overflow-x: auto;
overflow-x: auto;
margin-top: 0px;
overflow-x: hidden;
}
.chat_box{
  display: none;
}
#fo-toggle-button-icon-in{
  display: none;
}


div#wave {
  text-align: center;

margin-left: auto;

margin-right: auto;

width: 100px;

position: relative;

top: 10px;

}
.dot {
  display:inline-block;
  width:12px;
  height:12px;
  border-radius:50%;
  margin-right:3px;
  background:#303131;
  animation: wave 1.3s linear infinite;


}
.dot:nth-child(2) {
  animation-delay: -1.1s;
}

.dot:nth-child(3) {
  animation-delay: -0.9s;
}

@keyframes wave {
	0%, 60%, 100% {
		transform: initial;
	}

	30% {
		transform: translateY(-15px);
	}
}
</style>
</head>

<body>





        <div id="app">

          <popupchat></popupchat>

          <floatingbutton></floatingbutton>
            </div>



  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="../../assets/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="../../assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min9f1e.js?v=1.1.0"></script>

     <script src="{{mix('js/app.js')}}"></script>


</body>

</html>
