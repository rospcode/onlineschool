<html>
<head>
</head>
<body>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Viewing User For Course: The Complete Web Developer in 2019: Zero to Mastery Course</span><br>
                </h2>

                <p>
                  Theses students do not have marks yet for them.
                </p>


            </div>
        </div>

  </div>
  </div>
  </div> <!-- end card -->

</div>
</div>
</div>


<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-lg-12">
      <div class="ibox ">
          <div class="ibox-title">
              <h5>Users under the course: {{ $course->course_title}}</h5>

          </div>
          <div class="ibox-content">

            @if(count($course->getenrolled) == 0)
            <script>window.history.back();</script>

            @endif


               @if(count($course->getMarks) > 0)
              <a href="/a/marksupdate/{{$course->id}}" class="btn btn-success" style="margin-left: 800px;">Delete Marks</a><br/><br/>
                <a href="/a/savemarks/{{$course->id}}" class="btn btn-primary"  style="margin-left: 800px;">Save all Marks</a>
                @else
                <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal2" style="margin-left: 800px;">Upload marks</button>

                @endif
              <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
          <thead>
          <tr>
              <th>Count</th>
              <th>User-ID</th>
              <th>Avatar</th>
              <th>Name</th>
              <th>Course</th>
              <th>Course Marks</th>

          </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            @foreach($course->getenrolled as $us)
          <tr class="gradeX">
            <td><?php echo $count; ?></td>
            <td><b style="color: green">{{ $us->getUser['id'] }}</b></td>
              <td class="client-avatar"><img alt="image" src="{{ asset('user/')}}/{{ $us->getUser['avatar'] }}"> </td>
              <td>{{ $us->getUser['name'] }} {{ $us->getUser['surname'] }}
              </td>
              <td>{{ $course->course_title }} - <b style="color: green">Course ID: {{ $course->id}}</b></td>
                <td class="center">
               @foreach($course->getMarks as $marks)


               @if($marks->user_id == $us->getUser['id'])
                   @if($marks->course_marks < 50)
                     <m style="color: red;">{{ $marks->course_marks }}%  Failed</m>
                     @elseif($marks->course_marks >= 75)
                     <m style="color: green;">{{ $marks->course_marks }}%  Passed Distinction</m>
                     @else
                      <m style="color: green;">{{ $marks->course_marks }}%  Passed</m>
                      @endif




               @endif
               @endforeach
               </td>


          </tr>
          <?php $count++; ?>
          @endforeach




          </tfoot>
          </table>
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

                                  <h4 class="modal-title">Upload '{{ $course->course_title }}' - Marks</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup" action="{{ route('marksupload') }}" method="post" enctype="multipart/form-data">
                                            <p>Upload Excel File - CSV (Comma delimited) (*.csv)</p>
                                            {{ csrf_field() }}
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">File</label>

                                                <div class="col-lg-10"><input type="file" name="ima" id="ima" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

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

                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> This is how a Excel marks files should be made for the uploads</label></div>
                                                    <img src="{{ asset('how.jpg')}}" class="img-responsive" style="width: 100%;
margin: 0px auto;
    margin-left: auto;
margin-left: 55px;"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6 text-center">
                                                    <button class="btn btn-primary" id="signupbutton" type="submit">Upload Marks</button>
                                                </div>
                                                <div class=" col-lg-6 text-center">
                                                    <a class="btn btn-default" href="/Student_marks_upload.csv">Download Template</a>
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





              <!-- register user modal -->
                  <div class="modal inmodal" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                          <div class="modal-content animated flipInY">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                  <h4 class="modal-title">Change '{{ $course->course_title }}' - Marks</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup" action="" method="post" enctype="multipart/form-data">
                                            <p>Upload Excel File</p>
                                            {{ csrf_field() }}
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">File</label>

                                                <div class="col-lg-10"><input type="file" name="ima" id="ima" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

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

                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i>Remember This is how a Excel marks files should be made for the uploads</label></div>
                                                    <img src="{{ asset('how.jpg')}}" class="img-responsive" style="width: 100%;
margin: 0px auto;
    margin-left: auto;
margin-left: 55px;"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary" id="signupbutton" type="submit">Upload Marks</button>
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


              <script>

              </script>
            </body>



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
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'Excel'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    @endsection
