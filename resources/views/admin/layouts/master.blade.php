<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('page')</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/css/plugins/switchery/switchery.css') }}" rel="stylesheet">
        @yield('csrf')
        @yield('style')

    <style>
    .rounded-circle {
    border-radius: 50% !important;
    width: 40%;
}
.swal2-cancel{
  margin-right: 4px;
}

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
</style>

</head>

<body>

  <div class="load" style="display: none;">

  <img src="{{ asset('hr_loader3.gif')}}" class="rotate"  style="width: 100px;" />

  </div>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="{{ asset('user/')}}/{{ auth()->user()->avatar }}"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{ auth()->user()->name }} {{ auth()->user()->surname}}</span>
                            <span class="text-muted text-xs block">Administrator </span>
                        </a>

                    </div>
                    <div class="logo-element">

                    </div>
                </li>
                <li class="active">
                    <a href="/a/home"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>

                </li>


                <li>
                    <a href="#"><i class="fa fa-stack-exchange"></i> <span class="nav-label">Categories</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/a/categories">Categories</a></li>
                        <li><a href="/a/add_category">Add New Category</a></li>

                    </ul>
                </li>
                <li>
                    <a href="/a/courses"><i class="fa fa-laptop"></i> <span class="nav-label">Courses </span>
                           <span class="label label-success float-right" id="coursesnum">0</span>
                    </a>


                </li>
                <li>
                    <a href="/a/course/requests"><i class="fa fa-microchip"></i><span class="nav-label">Course Requests </span>
                           <span class="label label-success float-right" id="courserequestnum">0</span>
                    </a>


                </li>
                <li>
                    <a href="/a/requests"><i class="fa fa-user-plus"></i> <span class="nav-label">Signup Requests </span>
                        <span class="label label-success float-right" id="signupreq">0</span>
                    </a>

                </li>
                <li>
                    <a href="/a/requests/removed"><i class="fa fa-user-plus"></i> <span class="nav-label">Deleted Signups </span>
                        <span class="label label-warning float-right" id="signupdel">0</span>
                    </a>

                </li>


                <li>
                    <a href="/a/users/full"><i class="fa fa-group"></i> <span class="nav-label">Users</span>
                     <span class="label label-success float-right" id="usersnum">0</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-drivers-license-o"></i> <span class="nav-label">Enrolment</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/a/enroll/history">Enrolment History</a></li>
                        <li><a href="/a/enroll/user">Enrol User</a></li>

                    </ul>
                </li>
                <li>
                    <a href="/a/graduates_users/all"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Graduates</span>
                        <span class="label label-success float-right" id="gradnum">0</span>
                     </a>
                </li>
                <li>
                    <a href="/a/sendmail"><i class="fa fa-envelope"></i> <span class="nav-label">Send Mail</span>
                        <span class="label label-success float-right" id="gradnum">0</span>
                     </a>
                </li>


                <li>
                    <a href="/a/messages"><i class="fa fa-comment"></i> <span class="nav-label">Message</span> <span class="label label-success float-right" id="countmessage">0</span></a>
                </li>
                <li>
                    <a href="/a/tests"><i class="fa fa-question"></i> <span class="nav-label">Tests</span> <span class="label label-success float-right" id="counttest">0</span></a>
                </li>
                <li>
                    <a href="/logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>



            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0; background-color: #0C1832 !important;">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm welcome-message" style="color:white;">Welcome {{ auth()->user()->name }}.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" onclick="readnotifications()" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-success" id="numnot">0</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages" id="messages_update">



                    </ul>
                </li>



                <li>
                    <a href="/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>

            </ul>

        </nav>
        </div>


        @yield("content")







        <div class="footer">
            <div class="float-right">
              <strong></strong>
            </div>
            <div>

            </div>
        </div>
        </div>

    </div>


    <!-- Mainly scripts -->
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
        <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Flot -->
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/flot/jquery.flot.time.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('backend/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('backend/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('backend/js/inspinia.js') }}"></script>


    <!-- jQuery UI -->
    <script src="{{ asset('backend/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Jvectormap -->
    <script src="{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- EayPIE -->
    <script src="{{ asset('backend/js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>


    <script src="{{ asset('backend/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="http://timeago.yarp.com/jquery.timeago.js"></script>

    <!-- Sparkline -->
    <script src="{{ asset('backend/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

        <script src="{{ asset('backend/js/plugins/select2/select2.full.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('backend/js/plugins/toastr/toastr.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
      <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('backend/js/demo/sparkline-demo.js') }}"></script>
    <!-- blueimp gallery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script src="{{ asset('backend/js/plugins/pdfjs/pdf.js') }}"></script>

<script type="text/javascript">


$.ajax({
    type: "GET",
    url: "{{ route('ajax-crud')}}",
    success: function (data) {
      if(numbers != data){
      numbers = data;
      }
      $("#signupreq").html(numbers);
      },
    error: function (data) {
      console.log('Error:', data);
      varCounter++;
      }
  });




$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function(){

    $(this).addClass('transition');
  }, function(){

    $(this).removeClass('transition');
  });
});

function askdelete(name,id){

  Swal.fire({
  title: 'Are you sure?',
  text: "Delete user "+name+"!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
     window.location = "/a/dump/user/"+id;
  }
})
}


var numbers = 0;
 var intervalId = null;
 var varCounter = 0;
 var varName = function () {
     if (varCounter == 0) {

         /* your code goes here */
         $.ajax({
    type: "GET",
    url: "{{ route('ajax-crud')}}",
    success: function (data) {
       if(numbers != data){
        numbers = data;
       }
       $("#signupreq").html(numbers);
    },
    error: function (data) {
        console.log('Error:', data);
        varCounter++;
    }
});



     } else {
         clearInterval(intervalId);
     }
 };

 function readnotifications(){

      $.ajax({
    type: "GET",
    url: "{{ route('readNotifications')}}",
    success: function (data) {
    },
    error: function (data) {
        console.log('Error:', data);

    }
});

 }


 $(document).ready(function () {
     intervalId = setInterval(varName, 2000);
 });
 var numberss = 0;
var intervalIdd = null;
var varCounterr = 0;
var varNames = function () {

    if (varCounterr == 0) {

        /* your code goes here */
        $.ajax({
   type: "GET",
   url: "{{ route('getNotifications')}}",
   success: function (data) {
       if(numberss != data.length){
           for (var i = 0; i < data.length; i++) {
               var id = $("#ord"+i).data("id");
               if(id != data[i].id){
               $("#messages_update").append("<li class='dropdown-divider'></li><li data-id='"+data[i].id+"' id='ord"+i+"'><div class='dropdown-messages-box'><div><small class='float-right text-navy'>"+jQuery.timeago(data[i].created_at)+"</small>"+data[i].action+" <br><small class='text-muted'>"+data[i].updated_at+"</small></div></div></li>");
             }
           }
       }
   },
   error: function (data) {
       console.log('Error:', data);
       varCounterr++;
   }
 });
    } else {
        clearInterval(intervalIdd);
    }
};
$(document).ready(function () {
    intervalIdd = setInterval(varNames, 2000);
});
var numbersss = 0;
var intervalIddd = null;
var varCounterrr = 0;
var varNamess = function () {
    if (varCounterrr == 0) {

        /* your code goes here */
        $.ajax({
   type: "GET",
   url: "{{ route('getnotcount')}}",
   success: function (data) {
      if(numbersss != data){
       numbersss = data;
      }
      $("#numnot").html(numbersss);
   },
   error: function (data) {
       console.log('Error:', data);
       varCounterrr++;
     }
  });
    }else{
        clearInterval(intervalIddd);
    }
};


$(document).ready(function () {
    intervalIddd = setInterval(varNamess, 2000);
});



var numbersi = 0;
 var intervalIdi = null;
 var varCounteri = 0;
 var varNamei = function () {
     if (varCounteri == 0) {

         /* your code goes here */
         $.ajax({
    type: "GET",
    url: "{{ route('ajax-crudd')}}",
    success: function (data) {


       if(numbersi != data){
        numbersi = data;
       }
       $("#signupdel").html(numbersi);

    },
    error: function (data) {
        console.log('Error:', data);
        varCounteri++;
    }
});
     } else {
         clearInterval(intervalIdi);
     }
 };
 $(document).ready(function () {
     intervalIdi = setInterval(varNamei, 2000);
 });







 //getting number of courses
  $.ajax({
  type: "GET",
  url: "{{ route('getCoursenum')}}",
  success: function (data) {
  $("#coursesnum").html(data);

  },
  error: function (data) {
    console.log('Error:', data);
  }
 });

 //getting count of course Requests
 $.ajax({
 type: "GET",
 url: "{{ route('getCoursenumrequests')}}",
 success: function (data) {
 $("#courserequestnum").html(data);


 },
 error: function (data) {
   console.log('Error:', data);
 }
});

 //getting all users
 $.ajax({
 type: "GET",
 url: "{{ route('getUsernum')}}",
 success: function (data) {
 $("#usersnum").html(data)
 },
 error: function (data) {
   console.log('Error:', data);
 }
});

//getting number of grads
$.ajax({
type: "GET",
url: "{{ route('getGradnum')}}",
success: function (data){
$("#gradnum").html(data)
},
error: function (data) {
  console.log('Error:', data);
}
});
var countmessagenumber = 0;
$.ajax({
type: "GET",
url: "{{ route('messagecount')}}",
success: function (data) {
  countmessagenumber = data;
$("#countmessage").html(countmessagenumber);
},
error: function (data) {
  console.log('Error:', data);
}
});



var pusher = new Pusher('19ea9d89182fa1adb1f0', {
     cluster: 'us2',
     forceTLS: true
   });

   var channel = pusher.subscribe('my-messages-count');
   channel.bind('my-count', function(data) {

     countmessagenumber = data.count;
   $("#countmessage").html(countmessagenumber);

     $(document).ready(function() {
         setTimeout(function() {
             toastr.options = {
                 closeButton: true,
                 progressBar: true,
                 showMethod: 'slideDown',
                 timeOut: 4000
             };
             toastr.success('Message Alert', "New message from "+data.name+" "+data.surname);

         }, 1300);
       });
   });





   var channels = pusher.subscribe('forum-notification');
   channels.bind('my-forum-notification', function(data) {



     $(document).ready(function() {
         setTimeout(function() {
             toastr.options = {
                 closeButton: true,
                 progressBar: true,
                 showMethod: 'slideDown',
                 timeOut: 4000
             };
             toastr.success('Forum Notification: '+data.date, data.notification);

         }, 1300);
       });
   });


function makeMess(str){
  $(document).ready(function() {
      setTimeout(function() {
          toastr.options = {
              closeButton: true,
              progressBar: true,
              showMethod: 'slideDown',
              timeOut: 4000
          };
          toastr.success('Notification', str);

      }, 1300);
    });
}

      $('.clockpicker').clockpicker();
    </script>
    @yield('notifications')


        @yield('script')
</body>
</html>
