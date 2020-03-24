@extends('admin.layouts.master')
@section('page')
Messages | {{ auth()->user()->name }}
@endsection
@section('style')
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
</style>
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
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Prosper </a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Siyabonga</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>

  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Sithole</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Jobe</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Prosper </a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Siyabonga</a></li>

  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Sithole</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Jobe</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Prosper </a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Siyabonga</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>

  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Sithole</a> <span class="label label-success float-right" style="margin-top: 15px;">*</span></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Jobe</a></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Prosper </a></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Siyabonga</a></li>

  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Sithole</a></li>
  <li><a href="#"><img alt="image" src="{{ asset('user/')}}/img/default.png" class="img-responsive" style="width: 30px;">Jobe</a></li>


</ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 animated fadeInRight">
                <div class="mail-box-header">

                    <form method="get" action="" class="float-right mail-search">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" name="search" placeholder="Search email">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                    <h2>
                        Inbox (3)
                    </h2>

                </div>
                    <div class="mail-box">

                    <table class="table table-hover table-mail">
                    <tbody>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="">Siyabonga Sithole</a></td>
                        <td class="mail-subject"><a href="">bla bl bla bla.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks" checked>
                        </td>
                        <td class="mail-ontact"><a href="">Prosper Sithole</a></td>
                        <td class="mail-subject"><a href="">bla bl bla bla.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="">Mark Sithole</a></td>
                        <td class="mail-subject"><a href="">bla bl bla bla.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>

                    </tbody>
                    </table>


                    </div>
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




   function enableTxt(elem) {
       var id = $(elem).attr("id");
       $("#"+id+"-field").html("");


   }
   function clearmessage(){
     $("#signupmessage").html("");
   }




function approving(val,name){
     const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Approve "+name+"'s account, they will receive an email with a link to create password",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: "Approve",
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
window.location.href = "/a/user/approve/"+val;
  } else if (
    // Read more about handling dismissals
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      '',
      'error'
    )
  }
})
   }





   </script>

   <script>
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
    @endsection
