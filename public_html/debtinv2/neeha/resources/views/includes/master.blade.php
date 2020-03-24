<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>




<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/argon.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>




    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/css/settings.css') }}">



<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap_premium.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>


  button.chatbox-open {
      position: fixed;
      bottom: 0;
      right: 0;
      width: 62px;
      height: 62px;
      color:
  #fff;
  z-index: 9999;
  background-color:
  #252745;
  background-position: center center;
  background-repeat: no-repeat;
  box-shadow: 12px 15px 20px 0
      rgba(46, 61, 73, 0.15);
      border: 0;
      border-radius: 50%;
      cursor: pointer;
      margin: 16px;
  }


  button.chatbox-open {
      color:
      #fff;
      cursor: pointer;
  }

  .chatbox-popup {
      display: flex;
      position: fixed;
      box-shadow: 5px 5px 25px 0
  rgba(46, 61, 73, 0.2);
  flex-direction: column;
  display: none;
  bottom: calc(2 * 16px + 52px);
  right: 16px;
  width: 377px;
  height: auto;
  background-color:
      #fff;
      border-radius: 16px;
      z-index: 9999;
  }
  .chatbox-popup .chatbox-popup__header {
      box-sizing: border-box;
      display: flex;
      width: 100%;
      padding: 16px;
      color:
  #fff;
  background-color:
      #252745;
      align-items: center;
      justify-content: space-around;
      border-top-right-radius: 12px;
      border-top-left-radius: 12px;
  }
  .chatbox-popup .chatbox-popup__header .chatbox-popup__avatar {
      margin-top: -32px;
      background-color:
  #252745;
  border: 5px solid
      rgba(0, 0, 0, 0.1);
      border-radius: 50%;
  }
  button {
      color: inherit;
      background-color:
      transparent;
      border: 0;
      outline: 0 !important;
      cursor: pointer;
  }
  .chatbox-popup .chatbox-popup__main {
      box-sizing: border-box;
      width: 100%;
      padding: calc(2 * 16px) 16px;
      line-height: calc(16px + 16px / 2);

      text-align: center;
  }
  .chatbox-popup .chatbox-popup__main {
      line-height: calc(16px + 16px / 2);

      text-align: center;
  }
  .chatbox-popup .chatbox-popup__footer {
      box-sizing: border-box;
      display: flex;
      width: 100%;
      padding: 16px;
      border-top: 1px solid
      #ddd;
      align-items: center;
      justify-content: space-around;
      border-bottom-right-radius: 12px;
      border-bottom-left-radius: 12px;
  }
  textarea {
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      height: calc(16px + 16px / 2);
      padding: 0 calc(16px / 2);
      font-family: inherit;
      font-size: 16px;
      line-height: calc(16px + 16px / 2);
     color: #525f7f;
      background-color: none;
      border: 0;
      outline: 0 !important;
      resize: none;
      overflow: hidden;
  }


  #send:hover{
    cursor: pointer;
  }
  </style>

@yield('style')
</head>

<body>
  @yield('body')




      <button class="chatbox-open">
          <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
        </button>


      <section class="chatbox-popup">
        <header class="chatbox-popup__header">
          <aside style="flex:3">
            <img src="{{ asset('debt-in_logo.jpg')}}" style="width: 100px;" class="chatbox-popup__avatar" />

          </aside>
          <aside style="flex:8">
            <h5 style="color: white;">DEBT-IN</h5> <p>Customer Service</p>
          </aside>
          <aside style="flex:1">
            <button class="chatbox-close">
                <i class="fa fa-close fa-2x" aria-hidden="true"></i>
              </button>
          </aside>
        </header>
        <main class="chatbox-popup__main">
          We make it simple for our clients to stay <br/> connected with us. How can we help you today?
        </main>
        <footer class="chatbox-popup__footer">

          <aside style="flex:10">
            <textarea type="text" id="text" placeholder="Type your message here..." autofocus></textarea>
          </aside>
          <aside style="flex:1;text-align:center;"  id="send" onclick="message()">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
          </aside>
        </footer>
      </section>

      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/tether.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/argon.js') }}"></script>

      <script src="{{ asset('js/jquery.easing.js') }}"></script>




      <!-- Revolution Slider -->




      <!-- all slider links, from header to quotes to team to clients-->
      <script src="{{ asset('js/owl.carousel.js') }}"></script>
      <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>

      <script src="{{ asset('js/main.js') }}"></script>
      <script src="{{ asset('plugins/js/jquery.themepunch.tools.min.js') }}"></script>
      <script src="{{ asset('plugins/js/jquery.themepunch.revolution.min.js') }}"></script>
      <script src="{{ asset('plugins/js/slider.js') }}"></script>



      <script src="{{ asset('plugins/js/extensions/revolution.extension.actions.min.js') }}"></script>
      <script src="{{ asset('plugins/js/extensions/revolution.extension.carousel.min.js') }}"></script>

      <script src="{{ asset('plugins/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
      <script src="{{ asset('plugins/js/extensions/revolution.extension.parallax.min.js') }}"></script>
      <script src="{{ asset('plugins/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
      <script src="{{ asset('plugins/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script type="text/javascript">

          var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
          };

          TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
              this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
              this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
              delta = this.period;
              this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
              this.isDeleting = false;
              this.loopNum++;
              delta = 500;
            }

            setTimeout(function() {
              that.tick();
            }, delta);
          };

          window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-rotate');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
              }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
          };


          AOS.init();









          </script>


          <script type="text/javascript">



            $(".chatbox-open").click(() =>
              $(".chatbox-popup, .chatbox-close").fadeIn()
            );

            $(".chatbox-close").click(() =>
              $(".chatbox-popup, .chatbox-close").fadeOut()
            );

            $(".chatbox-maximize").click(() => {
              $(".chatbox-popup, .chatbox-open, .chatbox-close").fadeOut();
              $(".chatbox-panel").fadeIn();
              $(".chatbox-panel").css({ display: "flex" });
            });

            $(".chatbox-minimize").click(() => {
              $(".chatbox-panel").fadeOut();
              $(".chatbox-popup, .chatbox-open, .chatbox-close").fadeIn();
            });

            $(".chatbox-panel-close").click(() => {
              $(".chatbox-panel").fadeOut();
              $(".chatbox-open").fadeIn();
            });



          function message(){
            let text = $("#text").val();
            if(text != ""){
              window.location = "https://web.whatsapp.com/send?phone=+27721088188&text="+text;
           }
          }

      </script>


@yield('script')


  </body>


  </html>
