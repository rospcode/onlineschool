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



    } else {
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
success: function (data) {
$("#gradnum").html(data)
},
error: function (data) {
  console.log('Error:', data);
}
});
