<?php $__env->startSection('page'); ?>
Home | <?php echo e(auth()->user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link href="<?php echo e(('backend/css/plugins/clockpicker/clockpicker.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('backend/css/plugins/datapicker/datepicker3.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('backend/css/plugins/daterangepicker/daterangepicker-bs3.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(('backend/css/plugins/clockpicker/clockpicker.css')); ?>" rel="stylesheet">
  <style>
  .popover {
    display: block;
top: 166.1px;
left: 448.333px;
z-index: 2210;
  }
  </style>

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="wrapper wrapper-content">
<div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Number of courses</span>
                    <h5>Courses</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e(count($course)); ?></h1>
                    <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>

                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-info float-right">Number of enrolled students</span>
                    <h5>Enroll Students</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e(count($enrolled)); ?></h1>
                    <div class="stat-percent font-bold text-info"><i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary float-right">Number of files</span>
                    <h5>Course Files</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e(count($files)); ?></h1>
                    <div class="stat-percent font-bold text-navy"> <i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-primary float-right">Number of students</span>
                    <h5>Students</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?php echo e(count($students)); ?></h1>
                    <div class="stat-percent font-bold text-primary"><i class="fa fa-level-up"></i></div>
                    <small></small>
                </div>
            </div>
</div>
</div>



    <div class="row">

      <div class="col-lg-6">
          <div class="ibox ">
              <div class="ibox-title">
                  <h5>Your daily feed</h5>
                  <div class="ibox-tools">
                      <span class="label label-warning-light float-right"><?php echo e($feeds_count); ?></span>
                     </div>
              </div>
              <div class="ibox-content">

                  <div>
                      <div class="feed-activity-list" style=" overflow-y: scroll; height: 400px;" id="feed">

                        <?php $__currentLoopData = $feeds_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feeds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <div class="feed-element">

                              <div class="media-body ">
                                  <small class="float-right"><?php echo e($feeds->created_at->diffForHumans()); ?></small>
                                  <strong>Action: </strong> <?php echo e($feeds->action); ?> <br>
                                  <small class="text-muted"><?php echo e($feeds->created_at); ?></small>

                              </div>
                          </div>





                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>

              </div>
          </div>

      </div>
    </div>
  <div class="col-lg-6">
      <div class="ibox ">
          <div class="ibox-title">
              <h5>My Reminders</h5>
              <button type="button" style="margin-left: 45px;" data-toggle="modal" data-target="#myModal2" class="btn btn-success">Add</button>

          </div>
          <div class="ibox-content ibox-heading">
              <h3>View Reminders!</h3>
              <small><i class="fa fa-map-marker"></i>Check your schedule.</small>
          </div>
          <div class="ibox-content inspinia-timeline">
             <div class="infinite-scroll">
              <?php $__currentLoopData = $reminders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reminder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="timeline-item">
                  <div class="row">
                      <div class="col-4 date">
                        <a href="/a/reminder/delete/<?php echo e($reminder->id); ?>" ><i class="fa fa-trash" aria-hidden="true"></i></a>

                          <?php echo e($reminder->date); ?> <br/><?php echo e($reminder->time); ?>

                          <br/>
                          <small class="text-navy"><?php echo e($reminder->created_at->diffForHumans()); ?></small>
                      </div>
                      <div class="col content no-top-border">
                          <p class="m-b-xs"><strong>Reminder </strong></p>

                          <p><?php echo e($reminder->notes); ?></p>


                      </div>
                  </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                        <h4 class="modal-title">Add A Reminder</h4>
                        <small class="font-bold"></small>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-12">
                      <div class="ibox ">

                          <div class="ibox-content">
                              <form method="post" id="adminreminder" >
                                  <p></p>
                                  <?php echo e(csrf_field()); ?>


                                  <div class="form-group row" id="data_2">
                                      <label class="col-lg-2 col-form-label">Date Reminder</label>
                                      <div class="col-lg-10">
                                      <div class="input-group date ">
                                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="date" id="date" class="form-control" value="03/07/2019">
                                          <div id="date-errorfield" style="color: red;">

                                           </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row input-group clockpicker" data-autoclose="true">
                                      <label class="col-lg-2 col-form-label">Reminder Time</label>
                                      <div class="col-lg-10">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                      <input type="text" class="form-control"   name="time" id="time" value="09:30" >
                                      <div id="time-errorfield" style="color: red;">

                                       </div>
                                    </div>
                                    </div>

                                  </div>

                                  <div class="form-group row"><label class="col-lg-2 col-form-label">Reminder</label>

                                      <div class="col-lg-10"><textarea type="text" name="notes" id="notes" placeholder="What do you need to be reminded of, <?php echo e(auth()->user()->name); ?>?" class="form-control"></textarea>
                                        <div id="notes-errorfield" style="color: red;">

                                         </div>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i>
                                             When you add a reminder, you will receive a notification via email, reminding you an before your schedule.</label></div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"></label>
                                   <div class="col-lg-10">
                                     <div id="remindermessage"></div>
                                   </div>
                                 </div>

                                  <div class="form-group row">
                                      <div class="col-lg-offset-2 col-lg-10">
                                        <button class='btn btn-primary' id="spinner" type='button' disabled><span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>Loading...</button>
                                          <button class="btn btn-primary" id="signupbutton" type="button">Add Reminder</button>
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

        <!-- Date range use moment.js same as full calendar plugin -->
        <script src="<?php echo e(asset('backend/js/plugins/fullcalendar/moment.min.js')); ?>"></script>

        <!-- Date range picker -->
        <script src="<?php echo e(asset('backend/js/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

        <!-- Data picker -->
        <script src="<?php echo e(asset('backend/js/plugins/datapicker/bootstrap-datepicker.js')); ?>"></script>

        <script src="<?php echo e(asset('backend/js/plugins/clockpicker/clockpicker.js')); ?>"></script>




           <script type="text/JavaScript">
           var yearsAgo = new Date();
           yearsAgo.setFullYear(yearsAgo.getFullYear() - 20);

           $('#selector').datepicker('setDate', yearsAgo );


           $('#data_2 .input-group.date').datepicker({
               startView: 1,
               todayBtn: "linked",
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true,
               format: "yyyy-mm-dd"
           });
           </script>



        <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        $(document).ready(function() {
           $("#spinner").hide();

                $("#signupbutton").click(function(){
                 $("#spinner").show();
                 $("#signupbutton").hide();


               var time = $("#time").val();
               var date = $("#date").val();
               var notes = $("#notes").val();



                    $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('admin.add.reminder')); ?>",
                    data: $("#adminreminder").serialize(),
                    success: function(response){
                      $("#spinner").hide();
                      $("#signupbutton").show();
                      if(response == "success"){
                         $("#remindermessage").html("<div class='alert alert-success'>Successfully Added a reminder, refreshing page</div>");
                         var timeleft = 2;
                         var downloadTimer = setInterval(function(){

                         timeleft -= 1;
                         if(timeleft <= 0){
                         clearInterval(downloadTimer);
                         window.location = '/a/home';
                         }
                         }, 1000);
                      }else if(response == "old"){
                        $("#spinner").hide();
                        $("#signupbutton").show();
                        $("#remindermessage").html("<div class='alert alert-warning'>sorry, seems like you mistakenly entered an old date.</div>");
                      }else{
                        $("#remindermessage").html("<div class='alert alert-warning'>Ooops looks like something went wrong, please try again later.</div>");
                      }





                    },error: function(data){
                      var response = data.responseJSON;
                      $.each(response, function(key, message){
                        $("#"+key+"-errorfield").html("<div style='color: red;'>"+message+"</div>");
                        $("#spinner").hide();
                        $("#signupbutton").show();
                      });
                    }

                  });




       });
 });



             function deletereminder(val){
               alert(val);
             }

        </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>