<?php $__env->startSection('page'); ?>
Users | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
  <div class="card-body">
    <div class="col-lg-10">
                    <h2>Lightbox Gallery</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Gallery</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Lightbox Gallery</strong>
                        </li>
                    </ol>
                </div>
  </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>


<div class="wrapper wrapper-content">
              <div class="row">
                <div class="ibox ">

                    <div class="ibox-content">

                        <h2>Lightbox image gallery</h2>
                        <p>
                            <strong>blueimp Gallery</strong> is a touch-enabled, responsive and customizable image & video gallery, carousel and lightbox, optimized for both mobile and desktop web browsers.
                            It features swipe, mouse and keyboard navigation, transition effects, slideshow functionality, fullscreen support and on-demand content loading and can be extended to display additional content types.
                            Full documentation you can find at: <a href="https://github.com/blueimp/Gallery/blob/master/README.md" target="_blank">https://github.com/blueimp/Gallery/blob/master/README.md</a>
                        </p>

                        <div class="row">


                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo2.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo2.jpg')); ?>" class="zoom img-fluid "  alt="">

                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo3.jpg')); ?>"  class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo3.jpg')); ?>" class="zoom img-fluid"  alt="">
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo4.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo4.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo5.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo5.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>

                             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo6.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo6.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>

                             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo7.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo7.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>

                             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo8.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo8.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>

                             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a href="<?php echo e(asset('img/gallery/Photo9.jpg')); ?>" class="fancybox" rel="ligthbox">
                                    <img  src="<?php echo e(asset('img/gallery/Photo9.jpg')); ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>


                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                               <a href="<?php echo e(asset('img/gallery/Photo10.jpg')); ?>" class="fancybox" rel="ligthbox">
                                   <img  src="<?php echo e(asset('img/gallery/Photo10.jpg')); ?>" class="zoom img-fluid "  alt="">
                               </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                               <a href="<?php echo e(asset('img/gallery/Photo11.jpg')); ?>" class="fancybox" rel="ligthbox">
                                   <img  src="<?php echo e(asset('img/gallery/Photo11.jpg')); ?>" class="zoom img-fluid "  alt="">
                               </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                               <a href="<?php echo e(asset('img/gallery/Photo12.jpg')); ?>" class="fancybox" rel="ligthbox">
                                   <img  src="<?php echo e(asset('img/gallery/Photo12.jpg')); ?>" class="zoom img-fluid "  alt="">
                               </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                               <a href="<?php echo e(asset('img/gallery/Photo13.jpg')); ?>" class="fancybox" rel="ligthbox">
                                   <img  src="<?php echo e(asset('img/gallery/Photo13.jpg')); ?>" class="zoom img-fluid "  alt="">
                               </a>
                            </div>

                       </div>

                    </div>
                </div>



              </div>
              </div>


              <!-- register user modal -->
                  <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                          <div class="modal-content animated flipInY">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                  <h4 class="modal-title">Register a User</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup">
                                            <p>User details</p>
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-group row"><label class="col-lg-2 col-form-label">First Name</label>

                                                <div class="col-lg-10"><input type="text" name="name" id="name" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Last Name</label>

                                                <div class="col-lg-10"><input type="text" name="surname" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Last Name" class="form-control">
                                                  <div  id="surname-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>

                                                <div class="col-lg-10"><input type="email" name="email" onkeydown="clearmessage()" onclick="enableTxt(this)" id="email" placeholder="Email" class="form-control">
                                                  <div id="email-field">

                                                   </div>
                                                </div>
                                            </div>
                                          <div class="form-group row">
                                          <label class="col-lg-2 col-form-label"></label>
                                           <div class="col-lg-10">
                                             <div id="signupmessage"></div>
                                           </div>
                                         </div>

                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Manually register a user. and email will be sent to them, to create a password</label></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary" id="signupbutton" type="button">Create user</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>

                              </div>
                          </div>
                      </div>
                  </div>
              <!-- register user modal end -->

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

     $(function(){
           $("#signupbutton").click(function(){

             var name = $("#name").val();
             var surname = $("#surname").val();
             var email = $("#email").val();
             $("#signupmessage").html("");



            if(email == "" || name == ""){
                $("#signupmessage").html("<div class='alert alert-warning'>Sorry, some fields are empty.</div>");

              }
         else {
           $.ajax({

          type: "POST",
          url: "<?php echo e(route('admin.signup.user')); ?>",
          data: $('#adminsignup').serialize(),
          success: function(response){
            if(response == "success"){
              $("#signupmessage").html("<div class='alert alert-success'>User Successfully Registered, email sent.</div>");
            }else{
              $("#signupmessage").html("<div class='alert alert-warning'>Ooops looks like we down, please try again later.</div>");
            }

         },error: function(data){
            var errors = data.responseJSON;
            $.each(errors, function(key, message){
              $("#"+key+"-field").html("<div style='color: red;'>"+message+"</div>");
            });

         }
      });

            }


    });

   });


   function enableTxt(elem) {
       var id = $(elem).attr("id");
       $("#"+id+"-field").html("");


   }
   function clearmessage(){
     $("#signupmessage").html("");
   }
   </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>