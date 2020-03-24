@extends('home.layouts.master')
@section('page')

 @endsection

 @section('style')
 <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
       <!-- font awesome -->
       <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
       <!--  javascript -->
       <script src="{{ asset('assets/js/simplebar.js') }}"></script>
       <script src="{{ asset('assets/js/uikit.js') }}"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">
       <style>
       #myUL {
         list-style-type: none;
         padding: 0;
         margin: 0;
       }

       #myUL li a {
         border: 1px solid #ddd;
         margin-top: -1px; /* Prevent double borders */
         background-color: #f6f6f6;
         padding: 8px;
         text-decoration: none;
         font-size: 15px;
         color: black;
         display: block
       }


       #myUL li a:hover:not(.header) {
         background-color: #eee;
       }


       .popup-box {
          background-color: #ffffff;
           border: 1px solid #b0b0b0;
           bottom: 0;


           font-family: 'Open Sans', sans-serif;
       }
       .round.hollow {
           margin: 40px 0 0;
       }
       .round.hollow a {
           border: 2px solid #1c84c6;
           border-radius: 35px;
           color: red;
           color: #1c84c6;
           font-size: 23px;
           padding: 10px 21px;
           text-decoration: none;
           font-family: 'Open Sans', sans-serif;
       }
       .round.hollow a:hover {
           border: 2px solid #000;
           border-radius: 35px;
           color: red;
           color: #000;
           font-size: 23px;
           padding: 10px 21px;
           text-decoration: none;
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
       .bg_none i {
           border: 1px solid #1c84c6;
           border-radius: 25px;
           color: #1c84c6;
           font-size: 17px;
           height: 33px;
           line-height: 30px;
           width: 33px;
       }
       .bg_none:hover i {
           border: 1px solid #000;
           border-radius: 25px;
           color: #000;
           font-size: 17px;
           height: 33px;
           line-height: 30px;
           width: 33px;
       }
       .bg_none {
           background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
           border: medium none;
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
         background: #ebebeb none repeat scroll 0 0;
         border-radius: 3px;
         color: #646464;
         font-size: 14px;
         margin: 0;
         padding: 5px 10px 5px 12px;
         width: 100%;
       }
       .time_date {
         color: #fff;
         display: block;
         font-size: 12px;
         margin: 0px 0 0;
       }
       .received_withd_msg { width: 57%;
         padding-bottom: 15px;
         padding-top: 1px;
       }
       .mesgs {
         float: left;
         padding: 30px 15px 0 25px;
         width: 60%;
       }

        .sent_msg p {
         background: #05728f none repeat scroll 0 0;
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
       @endsection

 @section('content')

 <!-- // END drawer-layout -->
 <div class="container" style="max-width: 100%; background-color: #d1f0cf;
border-color: #bfeabc; padding: 40px;">




                         <div class="row">

                             <div class="col-lg-12">
                                    <h4>Messages</h4>
                                    <p>you have 0 unread messages


                             </div>
                         </div>
                     </div>




 <!-- jQuery -->



 <div class="container-fluid page__container" style="margin-top: 0px;">
 <form action="#" class="mb-3 border-bottom pb-3">
 <div class="d-flex">



 </div>
 </form>



 <div class="row">



 <div class="col-md-8 offset-md-2">

     <div class="card-body">
          <!-- Grid column -->
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
                              <p>{{ $message->message}} <b class='pull-right' style='float: right;'><i class='fas fa-check'></i></b></p><span class="time_date"> {{$message->created_at}}</span> </div>
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
 @endsection

 @section('script')
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
              msg.append("<div class='outgoing_msg'><div class='sent_msg'><p>"+data.message+" <b class='pull-right' style='float: right;'><i class='fas fa-check'></i></b></p><span class='time_date'> "+strip[0]+"</span> </div></div>");
            }else if(data.from == "admin"){
                msg.append("<div class='incoming_msg'><div class='incoming_msg_img popup-head-left'> <img src='{{ asset('img/call-icon.png') }}' > </div><div class='received_msg'><div class='received_withd_msg'><p>"+data.message+"</p><span class='time_date'>"+strip[0]+"</span></div></div></div>");
            }
             var element = document.getElementById("yourDivID");
             element.scrollTop = element.scrollHeight;
          }
   });
</script>
 @endsection
