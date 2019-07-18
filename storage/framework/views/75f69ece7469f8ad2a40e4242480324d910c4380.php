<?php $__env->startSection('page'); ?>
Messages | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
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
    background: #3f9684 none repeat scroll 0 0;
    height: 475px;
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
.received_withd_msg { width: 57%;}
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

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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

            <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-content mailbox-content">
                            <div class="file-manager">
                              <input type="text" id="myInput" onkeyup="myFunction()" style="background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;" placeholder="Search for names.." title="Type in a name">

                            </div>
                            <div class="table-responsive" style="padding-top: 30px; overflow-y: scroll; height: 400px;">
                              <ul id="myUL">
                                <?php $count = 0; ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(count($user->getMessages) > 0): ?>
                                  <?php $__currentLoopData = $user->getMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($message->admins_read != "read"): ?>
                                      <?php $count++; ?>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                  <li><a href="#" onclick="getMessage(<?php echo e($user->id); ?>)"><img alt="image" src="<?php echo e(asset('user/')); ?>/<?php echo e($user->avatar); ?>" class="img-responsive" style="width: 30px;"><?php echo e($user->name); ?> <?php echo e($user->surname); ?> <span class="label label-success float-right" style="margin-top: 7px;" id="user<?php echo e($user->id); ?>count"><?php echo $count; ?></span></a> </li>

                                    <?php $count = 0; ?>

                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 animated fadeInRight">

                      <div class="mail-box">


                      <div class="mail-body">
                      <div id="message-panel">


                      </div>
                       </div>

                      </div>



                          <div class="clearfix"></div>



                      </div>
                </div>
            </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('notifications'); ?>
  <?php if(session('msg')): ?>

<script type="text/javascript">

$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Successfully', "<?php echo e(session('msg')); ?>");

    }, 1300);
  });

    </script>
<?php endif; ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('script'); ?>





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
          url: "<?php echo e(route('messages')); ?>",
          data: { id: str},
          success: function(response){
            var panel = $("#message-panel");

            panel.html("<div class='popup-box chat-popup' id='qnimate'><div class='popup-head'><div class='popup-head-left pull-left' id='profileimage'></div><div class='popup-head-right pull-right'><div id='removeClass' class='chat-header-button pull-right'></div></div></div><div class='popup-messages' id='yourDivID'><div class='direct-chat-messages'><div class='msg_history' id='msg_history'></div></div></div><div class='popup-messages-footer'><textarea id='message-text' placeholder='Type a message...' rows='10' cols='40' name='message'></textarea><div class='btn-footer'><button id='sendmessage' type='button' onclick='sendmessage("+response.id+")' class='btn btn-primary' >Send Message</button></div></div></div>");

                $("#profileimage").html("<img src='<?php echo e(asset('/user/')); ?>/"+response.avatar+"'> "+response.name+" "+response.surname+"");
                image = "<img src='<?php echo e(asset('/user/')); ?>/"+response.avatar+"'> ";
                $("#user"+id+"count").html("0");

                if(response.get_messages.length > 0){
                  for (var i = 0; i < response.get_messages.length; i++) {
                      var msg = $("#msg_history");
                    if(response.get_messages[i].type == "sent" ){
                      msg.append("<div class='outgoing_msg'><div class='sent_msg'><p>"+response.get_messages[i].message+" <b class='pull-right' style='float: right;'><i class='fa fa-check'></i></b></p><span class='time_date'> "+response.get_messages[i].created_at+"</span> </div></div>");
                    }else{
                      msg.append("<div class='incoming_msg'><div class='incoming_msg_img popup-head-left'> <img src='<?php echo e(asset('/user/')); ?>/"+response.avatar+"'> </div><div class='received_msg'><div class='received_withd_msg'><p>"+response.get_messages[i].message+"</p><span class='time_date'>  "+response.get_messages[i].created_at+"</span></div></div></div>")
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
           url: "<?php echo e(route('admin.message')); ?>",
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
                   url: "<?php echo e(route('admin.received')); ?>",
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

   </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>