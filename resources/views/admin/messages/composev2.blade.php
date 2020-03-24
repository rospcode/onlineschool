@extends('admin.layouts.master')
@section('page')
Messages | {{ auth()->user()->name }}
@endsection
@section('style')
<style>

.container {
  margin: 0 auto;
  width: 750px;
  background: #444753;
  border-radius: 5px;
}

.people-list {
  width: 260px;
  float: left;
}
.people-list .search {
  padding: 20px;
}
.people-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: white;
  background: #6A6C75;
  width: 90%;
  font-size: 14px;
}
.people-list .fa-search {
  position: relative;
  left: -25px;
}
.people-list ul {
  padding: 20px;
  height: 770px;
}
.people-list ul li {
  padding-bottom: 20px;
}
.people-list img {
  float: left;
}
.people-list .about {
  float: left;
  margin-top: 8px;
}
.people-list .about {
  padding-left: 8px;
}
.people-list .status {
  color: #92959E;
}

.chat {
  width: 490px;
  float: left;
  background: #F2F5F8;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  color: #434651;
}
.chat .chat-header {
  padding: 20px;
  border-bottom: 2px solid white;
}
.chat .chat-header img {
  float: left;
}
.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.chat .chat-header .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.chat .chat-header .chat-num-messages {
  color: #92959E;
}
.chat .chat-header .fa-star {
  float: right;
  color: #D8DADF;
  font-size: 20px;
  margin-top: 12px;
}
.chat .chat-history {
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
  overflow-y: scroll;
  height: 575px;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #86BB71;
  border-width: 10px;
  margin-left: -10px;
}
.chat .chat-history .my-message {
  background: #86BB71;
}
.chat .chat-history .other-message {
  background: #94C2ED;
}
.chat .chat-history .other-message:after {
  border-bottom-color: #94C2ED;
  left: 93%;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message textarea {
  width: 100%;
  border: none;
  padding: 10px 20px;
  font: 14px/22px "Lato", Arial, sans-serif;
  margin-bottom: 10px;
  border-radius: 5px;
  resize: none;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}
.chat .chat-message button {
  float: right;
  color: #94C2ED;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
  background: #F2F5F8;
}
.chat .chat-message button:hover {
  color: #75b1e8;
}

.online, .offline, .me {
  margin-right: 3px;
  font-size: 10px;
}

.online {
  color: #86BB71;
}

.offline {
  color: #E38968;
}

.me {
  color: #94C2ED;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}


</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>Home</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Messages</a>
                        </li>

                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>



            <div class="container clearfix">
            <div class="people-list" id="people-list">
            <div class="search">
            <input type="text" placeholder="search">
            <i class="fa fa-search"></i>
            </div>
            <ul class="list"><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar">
            <div class="about">
            <div class="name">Vincent Porter</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar">
            <div class="about">
            <div class="name">Aiden Chavez</div>
            <div class="status">
            <i class="fa fa-circle offline"></i> left 7 mins ago
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar">
            <div class="about">
            <div class="name">Mike Thomas</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar">
            <div class="about">
            <div class="name">Erica Hughes</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar">
            <div class="about">
            <div class="name">Ginger Johnston</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar">
            <div class="about">
            <div class="name">Tracy Carpenter</div>
            <div class="status">
            <i class="fa fa-circle offline"></i> left 30 mins ago
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar">
            <div class="about">
            <div class="name">Christian Kelly</div>
            <div class="status">
            <i class="fa fa-circle offline"></i> left 10 hours ago
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar">
            <div class="about">
            <div class="name">Monica Ward</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar">
            <div class="about">
            <div class="name">Dean Henry</div>
            <div class="status">
            <i class="fa fa-circle offline"></i> offline since Oct 28
            </div>
            </div>
            </li><li class="clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar">
            <div class="about">
            <div class="name">Peyton Mckinney</div>
            <div class="status">
            <i class="fa fa-circle online"></i> online
            </div>
            </div>
            </li></ul>
            </div>
            <div class="chat">
            <div class="chat-header clearfix">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar">
            <div class="chat-about">
            <div class="chat-with">Chat with Vincent Porter</div>
            <div class="chat-num-messages">already 1 902 messages</div>
            </div>
            <i class="fa fa-star"></i>
            </div>
            <div class="chat-history">
            <ul>
            <li class="clearfix">
            <div class="message-data align-right">
            <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
            <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">
            Hi Vincent, how are you? How is the project coming along?
            </div>
            </li>
            <li>
            <div class="message-data">
            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
            <span class="message-data-time">10:12 AM, Today</span>
            </div>
            <div class="message my-message">
            Are we meeting today? Project has been already finished and I have results to show you.
            </div>
            </li>
            <li class="clearfix">
            <div class="message-data align-right">
            <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp;
            <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">
            Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
            </div>
            </li>
            <li>
            <div class="message-data">
            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
            <span class="message-data-time">10:20 AM, Today</span>
            </div>
            <div class="message my-message">
            Actually everything was fine. I'm very excited to show this to our team.
            </div>
            </li>
            <li>
            <div class="message-data">
            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
            <span class="message-data-time">10:31 AM, Today</span>
            </div>
            <i class="fa fa-circle online"></i>
            <i class="fa fa-circle online" style="color: #AED2A6"></i>
            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
            </li>

              <li class="clearfix">
                <div class="message-data align-right">
                  <span class="message-data-time">10:13 AM, Today</span> &nbsp; &nbsp;
                  <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
                </div>
                <div class="message other-message float-right">
                  i dont know yet
                </div>
              </li>

              <li>
                <div class="message-data">
                  <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                  <span class="message-data-time">10:13 AM, Today</span>
                </div>
                <div class="message my-message">
                  What is the most used language in programming? Profanity.
                </div>
              </li>

              <li class="clearfix">
                <div class="message-data align-right">
                  <span class="message-data-time">10:13 AM, Today</span> &nbsp; &nbsp;
                  <span class="message-data-name">Olia</span> <i class="fa fa-circle me"></i>
                </div>
                <div class="message other-message float-right">
                  it's working

                </div>
              </li>

              <li>
                <div class="message-data">
                  <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
                  <span class="message-data-time">10:13 AM, Today</span>
                </div>
                <div class="message my-message">
                  What is the most used language in programming? Profanity.
                </div>
              </li>
            </ul>
            </div>
            <div class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" placeholder="Type your message" rows="3"></textarea>
            <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
            <i class="fa fa-file-image-o"></i>
            <button>Send</button>
            </div>
            </div>
            </div>




@endsection

@section('notifications')
  @if (session('msg'))

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
    @endsection

    @section('script')





   <script type="text/javascript">

   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



   function myFunction() {
     // Declare variables
     var input, filter, ul, li, a, i, txtValue;
     input = document.getElementById('myInput');
     filter = input.value.toUpperCase();
     ul = document.getElementById("myUL");
     li = ul.getElementsByTagName('li');

     // Loop through all list items, and hide those who don't match the search query
     for (i = 0; i < li.length; i++) {
       a = li[i].getElementsByTagName("a")[0];
       txtValue = a.textContent || a.innerText;
       if (txtValue.toUpperCase().indexOf(filter) > -1) {
         li[i].style.display = "";
       } else {
         li[i].style.display = "none";
       }
     }
   }
   </script>


   <script type="text/javascript">
         var id = "";
         var image = "";
        function getMessage(str){
          id = str;
          $.ajax({
          type: "POST",
          url: "{{ route('messages') }}",
          data: { id: str},
          success: function(response){
            var panel = $("#message-panel");

            panel.html("<div class='popup-box chat-popup' id='qnimate'><div class='popup-head'><div class='popup-head-left pull-left' id='profileimage'></div><div class='popup-head-right pull-right'><div id='removeClass' class='chat-header-button pull-right'></div></div></div><div class='popup-messages' id='yourDivID'><div class='direct-chat-messages'><div class='msg_history' id='msg_history'></div></div></div><div class='popup-messages-footer'><textarea id='message-text' placeholder='Type a message...' rows='10' cols='40' name='message'></textarea><div class='btn-footer'><button id='sendmessage' type='button' onclick='sendmessage("+response.id+")' class='btn btn-primary' >Send Message</button></div></div></div>");

                $("#profileimage").html("<img src='{{ asset('/user/') }}/"+response.avatar+"'> "+response.name+" "+response.surname+"");
                image = "<img src='{{ asset('/user/') }}/"+response.avatar+"'> ";
                $("#user"+id+"count").html("0");

                if(response.get_messages.length > 0){
                  for (var i = 0; i < response.get_messages.length; i++) {
                      var msg = $("#msg_history");
                    if(response.get_messages[i].type == "sent" ){
                      msg.append("<div class='outgoing_msg'><div class='sent_msg'><p>"+response.get_messages[i].message+" <b class='pull-right' style='float: right;'><i class='fa fa-check'></i></b></p><span class='time_date'> "+response.get_messages[i].created_at+"</span> </div></div>");
                    }else{
                      msg.append("<div class='incoming_msg'><div class='incoming_msg_img popup-head-left'> <img src='{{ asset('/user/') }}/"+response.avatar+"'> </div><div class='received_msg'><div class='received_withd_msg'><p>"+response.get_messages[i].message+"</p><span class='time_date'>  "+response.get_messages[i].created_at+"</span></div></div></div>")
                    }
                  }
                }

                var element = document.getElementById("yourDivID");
                element.scrollTop = element.scrollHeight;
          }
        });
        }
   </script>

   <script type="text/javascript">
   function sendmessage(str){
     var message = $("#message-text").val();


       if(message != ""){
           var d = new Date();
           $.ajax({
           type: "POST",
           url: "{{ route('admin.message') }}",
           data: { id: str,message: message},
           success: function(response){
              console.log(response);

           },error: function(data){
             console.log(data);
           }

         });

          document.getElementById('message-text').value = "";

       }
   }


   </script>


   <script type="text/javascript">
   var pusher = new Pusher('19ea9d89182fa1adb1f0', {
        cluster: 'us2',
        forceTLS: true
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
             var msg = $("#msg_history");
             if(id == data.to){
                var strip = data.date.date.split(".");
               if(data.from == "admin"){
                 msg.append("<div class='outgoing_msg'><div class='sent_msg'><p>"+data.message+" <b class='pull-right' style='float: right;'><i class='fa fa-check'></i></b></p><span class='time_date'> "+strip[0]+"</span> </div></div>");
               }else if(data.from == "user"){
                   msg.append("<div class='incoming_msg'><div class='incoming_msg_img popup-head-left'> "+image+" </div><div class='received_msg'><div class='received_withd_msg'><p>"+data.message+"</p><span class='time_date'>"+strip[0]+"</span></div></div></div>");

                   $.ajax({
                   type: "POST",
                   url: "{{ route('admin.received') }}",
                   data: { id: data.to},
                   success: function(response){
                      console.log(response);
                   },error: function(data){
                     console.log(data);
                   }
                 });

               }

                var element = document.getElementById("yourDivID");
                element.scrollTop = element.scrollHeight;
             }
      });
































      (function(){

  var chat = {
    messageToSend: '',
    messageResponses: [
      'Why did the web developer leave the restaurant? Because of the table layout.',
      'How do you comfort a JavaScript bug? You console it.',
      'An SQL query enters a bar, approaches two tables and asks: "May I join you?"',
      'What is the most used language in programming? Profanity.',
      'What is the object-oriented way to become wealthy? Inheritance.',
      'An SEO expert walks into a bar, bars, pub, tavern, public house, Irish pub, drinks, beer, alcohol'
    ],
    init: function() {
      this.cacheDOM();
      this.bindEvents();
      this.render();
    },
    cacheDOM: function() {
      this.$chatHistory = $('.chat-history');
      this.$button = $('button');
      this.$textarea = $('#message-to-send');
      this.$chatHistoryList =  this.$chatHistory.find('ul');
    },
    bindEvents: function() {
      this.$button.on('click', this.addMessage.bind(this));
      this.$textarea.on('keyup', this.addMessageEnter.bind(this));
    },
    render: function() {
      this.scrollToBottom();
      if (this.messageToSend.trim() !== '') {
        var template = Handlebars.compile( $("#message-template").html());
        var context = {
          messageOutput: this.messageToSend,
          time: this.getCurrentTime()
        };

        this.$chatHistoryList.append(template(context));
        this.scrollToBottom();
        this.$textarea.val('');

        // responses
        var templateResponse = Handlebars.compile( $("#message-response-template").html());
        var contextResponse = {
          response: this.getRandomItem(this.messageResponses),
          time: this.getCurrentTime()
        };

        setTimeout(function() {
          this.$chatHistoryList.append(templateResponse(contextResponse));
          this.scrollToBottom();
        }.bind(this), 1500);

      }

    },

    addMessage: function() {
      this.messageToSend = this.$textarea.val()
      this.render();
    },
    addMessageEnter: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage();
        }
    },
    scrollToBottom: function() {
       this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
    },
    getCurrentTime: function() {
      return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
    },
    getRandomItem: function(arr) {
      return arr[Math.floor(Math.random()*arr.length)];
    }

  };

Chat.init();

  var searchFilter = {
    options: { valueNames: ['name'] },
    init: function() {
      var userList = new List('people-list', this.options);
      var noItems = $('<li id="no-items-found">No items found</li>');

      userList.on('updated', function(list) {
        if (list.matchingItems.length === 0) {
          $(list.list).append(noItems);
        } else {
          noItems.detach();
        }
      });
    }
  };

  searchFilter.init();

})();


   </script>
    @endsection
