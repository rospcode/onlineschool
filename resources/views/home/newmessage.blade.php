<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="sidebar, iconic">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homee/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/style.min.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet" />

<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="favicon-96x96.png">
    <link rel="icon" href="favicon-96x96.png">

    <style>
    .card-body {
    -ms-flex: 1 1 auto;
    flex: 0.50 5 auto;
    padding: 0.40rem;
}
.chip-secondary {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
}
 .chip {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    padding: .25rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 100px;
}
.chip + .chip {
    margin-left: .5rem;
}
.chip-outline-secondary {
    color: #868e96;
    border-color: #868e96;
}
.mb-md-0, .my-md-0 {
    margin-bottom: 0 !important;
}
.mr-24pt, .mx-24pt {
    margin-right: 1.5rem !important;
}
 .d-md-inline-block {
    display: inline-block !important;
}
.h5,  h5 {
    line-height: 1.5;
    text-transform: uppercase;
    color: #303840;
}
p{
  color: white;
}

.card--elevated:hover {
  box-shadow: 0 10px 70px #868686;
}
.bg-ui-general {
    background-image: url(../img/header/general.png), linear-gradient(128deg,#1e6dbd,#3287db);
}
.header-title {
    color: white;
}
.header-action .nav-link {
    color: white;
}
.header-action .nav-link.active, .header-action .nav-link:hover {
    color: white;
    border-bottom-color: #33cabb;
}
.badge-made {
    font-weight: 400;
    line-height: 1.3;
    font-size: 85%;
    position: relative;
    top: 50px;
    width: 60%;
    height: 30px;
    background-color: #15c377;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 30px;
    z-index: 50;
}
.badge-success-made{
  color: white;
  padding-top: 6px;
border-top-right-radius: 10px;
}
.header-inverse {
    background-image: url(../../../homee/assets/img/header/general.png), linear-gradient(128deg,
#1e6dbd,
    #3287db);
}

.course_wrapper {
    background-color:
white;
width: 100%;
box-shadow: 0 0 1px 1px
rgba(20,23,28,.1),0 3px 1px 0
    rgba(20,23,28,.1);
    opacity: 1;
}
.text_course {
    padding-top: 10px;
    padding: 10px 4px 5px 8px;
}
.popup-box {
   background-color: #ffffff;
    border: 1px solid #b0b0b0;
    bottom: 0;


    font-family: 'Open Sans', sans-serif;
}
.popup-box-on {
    display: block !important;
}
.popup-box .popup-head {
    background-color: #fff;
    clear: both;
    color: #7b7b7b;
    display: inline-table;
    font-size: 21px;
    padding: 7px 10px;
    width: 100%;
     font-family: Oswald;
}
.popup-box .popup-head .popup-head-right {
    margin: 11px 7px 0;
}
.popup-box .popup-messages {
}
.popup-head-left img {
    border: 1px solid #7b7b7b;
    border-radius: 50%;
    width: 44px;
}
.popup-messages-footer > textarea {
    border-bottom: 1px solid #b2b2b2 !important;
    height: 60px !important;
    margin: 7px;
    padding: 5px !important;
     border: medium none;
    width: 95% !important;
}
.popup-messages-footer {
    background: #fff none repeat scroll 0 0;
    bottom: 0;

    width: 100%;
}
.popup-messages-footer .btn-footer {
    overflow: hidden;
    padding: 2px 5px 10px 6px;
    width: 100%;
}
.simple_round {
    background: #d1d1d1 none repeat scroll 0 0;
    border-radius: 50%;
    color: #4b4b4b !important;
    height: 21px;
    padding: 0 0 0 1px;
    width: 21px;
}





.popup-box .popup-messages {
    background: #ddd none repeat scroll 0 0;
    height: 375px;
    overflow: auto;
}
.direct-chat-messages {
    overflow: auto;
    padding: 10px;
    transform: translate(0px, 0px);

}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages abbr.timestamp {
    background: #3f9684 none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}

.popup-head-right .btn-group {
    display: inline-flex;
 margin: 0 8px 0 0;
 vertical-align: top !important;
}
.chat-header-button {
    background: transparent none repeat scroll 0 0;

    border-radius: 50%;
    font-size: 14px;
    height: 30px;
    width: 30px;
}
.popup-head-right .btn-group .dropdown-menu {
    border: medium none;
    min-width: 122px;
 padding: 0;
}
.popup-head-right .btn-group .dropdown-menu li a {
    font-size: 12px;
    padding: 3px 10px;
 color: #303030;
}

.popup-messages abbr.timestamp {
    background: #3f9684  none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages .direct-chat-messages {
    height: auto;
}
.popup-messages .direct-chat-text .direct-chat-text-reply {
    background: #dfece7 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}

.popup-messages .direct-chat-timestamp {
    color: #fff;
    opacity: 0.6;
}

.popup-messages .direct-chat-name {
 font-size: 15px;
 font-weight: 600;
 margin: 0 0 0 49px !important;
 color: #fff;
 opacity: 0.9;
}
.popup-messages .direct-chat-info {
    display: block;
    font-size: 12px;
    margin-bottom: 0;
}
.popup-messages  .big-round {
    margin: -9px 0 0 !important;
}
.popup-messages  .direct-chat-img {
    border: 1px solid #fff;
 background: #3f9684  none repeat scroll 0 0;
    border-radius: 50%;
    float: left;
    height: 40px;
    margin: -21px 0 0;
    width: 40px;
}
.direct-chat-reply-name {
    color: #fff;
    font-size: 15px;
    margin: 0 0 0 10px;
    opacity: 0.9;
}
.direct-chat-img-reply-small
{
    border: 1px solid #fff;
    border-radius: 50%;
    float: left;
    height: 20px;
    margin: 0 8px;
    width: 20px;
 background:#3f9684;
}

.popup-messages .direct-chat-msg {
    margin-bottom: 10px;
    position: relative;
}

.popup-messages .doted-border::after {
 background: transparent none repeat scroll 0 0 !important;
    border-right: 2px dotted #fff !important;
 bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
  display: inline;
   z-index: -2;
}

.popup-messages .direct-chat-msg::after {
    background: #fff none repeat scroll 0 0;
    border-right: medium none;
    bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
  display: inline;
   z-index: -2;
}
.direct-chat-text::after, .direct-chat-text::before, .direct-chat-text-reply::after, .direct-chat-text-reply::before  {

    border-color: transparent #dfece7 transparent transparent;

}

.direct-chat-text::after {
    border-width: 5px;
    margin-top: -5px;
}

.direct-chat-text-reply::after {
    border-width: 5px;
    margin-top: -5px;
}
.popup-messages .direct-chat-text .direct-chat-text-reply {
    background: #dfece7 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}
.direct-chat-text {
    background: #d2d6de none repeat scroll 0 0;
    border: 1px solid #d2d6de;
    border-radius: 5px;
    color: #444;
    margin: 5px 0 0 430px;
    padding: 5px 10px;
    position: relative;
}
.direct-chat-text-reply {

    border: 1px solid #d2d6de;
    border-radius: 5px;
    color: #fff;
    margin: 5px 0 0 5px;
    padding: 5px 10px;
    position: relative;
    max-width: 40%;
}

.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #fff none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #666;
  display: block;
  font-size: 12px;
  margin: 0px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #1e6dbd none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}


.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;

  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
</style>
  </head>

  <body>




    <!-- Sidebar -->
    <aside class="sidebar sidebar-expand-lg sidebar-iconic">
      <header class="sidebar-header">
        <span class="logo">
            <a href=""><img src="{{ asset('favicon-96x96.png') }}" alt="logo"></a>
        </span>
      </header>

      <nav class="sidebar-navigation">

        <div class="sidebar-profile">
          <div class="dropdown">
            <span class="dropdown-toggle no-caret" data-toggle="dropdown"><img class="avatar" src="{{ asset('user') }}/{{ auth()->user()->avatar}}" alt="..."></span>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/u/profile"><i class="ti-user"></i> Profile</a>


              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout"><i class="ti-power-off"></i> Logout</a>
            </div>
          </div>
        </div>

        <ul class="menu">

          <li class="menu-item">
            <a class="menu-link" href="/u/home">
              <span class="icon ti-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/u/home">
              <span class="icon ti-book"></span>
              <span class="title">My Courses</span>
            </a>
          </li>

          <li class="menu-item active">
            <a class="menu-link" href="/u/message">
              <span class="icon ti-email"></span>
              <span class="title">Messages</span>

              <span class="badge badge-pill badge-info" id="countmessage">0</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/u/profile">
              <span class="icon ti-settings"></span>
              <span class="title">Profile</span>
            </a>
          </li>

          <li class="menu-item">
            <a class="menu-link" href="/logout">
              <span class="ti-power-off"></span>
              <span class="title">Logout</span>
            </a>
          </li>


        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->


    <!-- Topbar -->
    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>



        <div class="topbar-divider d-none d-md-block"></div>

        <div class="lookup d-none d-md-block topbar-search" id="theadmin-search">
          <input class="form-control w-300px" placeholder="Search for a course" type="text">
          <div class="lookup-placeholder">
            <i class="ti-search"></i>

          </div>
        </div>
      </div>

      <div class="topbar-right">


        <div class="topbar-divider"></div>

        <ul class="topbar-btns">



          <li class="dropdown">
            <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{ asset('user') }}/{{ auth()->user()->avatar}}" alt="..."></span>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>

              <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="ti-lock"></i> Lock</a>
              <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
            </div>
          </li>





        </ul>

        <div class="topbar-divider"></div>
      </div>
    </header>
    <!-- END Topbar -->


    <!-- Main container -->
    <main class="main-container  mdk-header-layout__content page-content">




      <header class="header header-inverse">
          <div class="container">
            <div class="header-info">
              <div class="left">
                <br>
                <h1 style="Color: white;" class="text-center">Messages</h1>
              <p class="text-center"> you have 0 unread messages</p>

              </div>

            </div>
          </div>

        </header>


      <div class="main-content">
         <div class="container">
           <div class="row">
            <div class="col-lg-8 offset-2">
              <div id="message-panel">
        <div class="popup-box chat-popup" id="qnimate">
            <div class="popup-head">
                <div class="popup-head-left pull-left" id="profileimage" style="color: black;"><img src="{{ asset('img/call-icon.png')}}">Ticket Chat</div>

            </div>
            <div class="popup-messages" id="yourDivID">
                <div class="direct-chat-messages">
                    <div class="msg_history" id="msg_history">

                      @foreach($messages as $message)

                        @if($message->type == "sent")
                        <div class='incoming_msg'>
                           <div class='incoming_msg_img popup-head-left'> <img src="{{ asset('img/call-icon.png')}}" alt='sunil'> </div>
                         <div class='received_msg'>
                         <div class='received_withd_msg'>
                         <p>{{ $message->message}}</p>
                           <span class='time_date'> {{$message->created_at}}</span></div>
                            </div>
                             </div>

                        @else
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>{{ $message->message}} <b class='pull-right' style='float: right;'><i class='fa fa-check'></i></b></p><span class="time_date"> {{$message->created_at}}</span> </div>
                        </div>
                        @endif

                        @endforeach

                    </div>
                </div>
            </div>
            <div class="popup-messages-footer">
                <textarea id="message-text" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
                <div class="btn-footer">
                    <button id="sendmessage" type="button"  class="btn btn-primary">Send Message</button>
                </div>
            </div>
        </div>
    </div>
            </div>
           </div>


           </div>


           </div>



      <!-- Footer -->
      <footer class="site-footer">
        <div class="row">
          <div class="col-md-6">
            <p class="text-center text-md-left">© 2019 <a href="">CapabilityHR</a>. All rights reserved.</p>
          </div>

          <div class="col-md-6">

          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->


    <!-- Scripts -->
    <script src="{{ asset('homee/assets/js/core.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>

    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
   <script type="text/javascript">

   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });

    var element = document.getElementById("yourDivID");
    element.scrollTop = element.scrollHeight;
     isMessage = "yes";

   $(function(){
     $("#sendmessage").click(function(){
       var message = $("#message-text").val();
       if(message != ""){
          document.getElementById('message-text').value = "";

          $.ajax({
          type: "POST",
          url: "{{ route('user.messages') }}",
          data: { message: message},
          success: function(response){
          },error: function(data){
            console.log(data);
          }
        });
       }
     });
   });

   var pusher = new Pusher('19ea9d89182fa1adb1f0', {
        cluster: 'us2',
        forceTLS: true
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
             var msg = $("#msg_history");
             if({{auth()->user()->id}} == data.to){
                var strip = data.date.date.split(".");
               if(data.from == "user"){
                 msg.append("<div class='outgoing_msg'><div class='sent_msg'><p>"+data.message+" <b class='pull-right' style='float: right;'><i class='fa fa-check'></i></b></p><span class='time_date'> "+strip[0]+"</span> </div></div>");
               }else if(data.from == "admin"){
                   msg.append("<div class='incoming_msg'><div class='incoming_msg_img popup-head-left'> <img src='{{ asset('img/call-icon.png') }}' > </div><div class='received_msg'><div class='received_withd_msg'><p>"+data.message+"</p><span class='time_date'>"+strip[0]+"</span></div></div></div>");
               }
                var element = document.getElementById("yourDivID");
                element.scrollTop = element.scrollHeight;
             }
      });
   </script>


   <script type="text/javascript">
   var countmessage = 0;
   var isMessage = "no";
   $("#countmessage").html(countmessage);


   var pusher = new Pusher('19ea9d89182fa1adb1f0', {
        cluster: 'us2',
        forceTLS: true
      });

      var channel = pusher.subscribe('my-user-channel');
      channel.bind('my-messagecount', function(data) {


        if(data.user == "2" && data.message == "new"){
          if(isMessage == "no"){
            countmessage++;
            $("#countmessage").html(countmessage);
          }


        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Message Alert', "You have a new message.");

            }, 1300);
          });

        }
      });
      </script>

  </body>


</html>
