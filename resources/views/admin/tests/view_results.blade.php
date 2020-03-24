@extends('admin.layouts.master')
@section('page')
 @if(isset($course->course_title))
  {{ $course->course_title }}
 @else
{{ $test->test_title }}

 @endif | Results
@endsection


@section('style')

<style>
.testmoz-list-item {
    width: 100%;
    display: block;
    background-color:
#fff;
padding: 10px;
display: flex;
box-shadow: #ccc 0 0 2px 0;
}
.testmoz-list-item > div:first-child {
    font-size: 36px;
    padding-right: 20px;
    justify-self: center;
}
.testmoz-list-detail h6 {
    font-size: 18px;
    font-weight: 500;
}
.testmoz-list-detail p {
    color:
    #000;
}
.testmoz-list-detail p {
    margin-bottom: 0;
}
.red {
    color:
    red;
}

.report-row-score {
    width: 170px;
    padding-left: 25px;

}
a:link, a:visited, a:hover {

    color:
    #3d577a;
}
.tick {
    background-image: url(../img/check.svg);
}
.star, .cross, .tick, .pending, .unanswered, .tick-partial {
    width: 16px;
    height: 16px;
    font-size: 0;
    background-size: 16px 16px;
    margin: auto;
}

@media print {
  tr:nth-of-type(10n){
    page-break-after: always;
  }
}

#user_results_passed{
  -webkit-transition: width 2s;
   transition: width 2s;
}

#user_results_passed:hover{
  background: linear-gradient(90deg, hsla(126.4, 95.1%, 52%, 0.3) 100%, transparent 0%);
  cursor: pointer;
}





#user_results_failed{
  -webkit-transition: width 2s;
   transition: width 2s;
}

#user_results_failed:hover{
  background: linear-gradient(90deg, hsla(32, 95%, 52%, 0.3) 100%, transparent 0%);
  cursor: pointer;
}

.table50 #table_searches_filter{
  display: none;
}
.table50 #table_searches_length{
  display: none;
}
.table50 #table_searches_info{
  display: none;
}
.table50 #table_searches_paginate{
  display: none;
}

.table50 #table_searches_wrapper{
  padding-bottom: 0px;
}

.html5buttons{
  position: relative;
top: 18px;
}
</style>
<link href="{{  ('backend/css/iCheck/custom.css') }}" rel="stylesheet">

 <link href="{{ asset('backend/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

  <link href="{{ asset('backend/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">

@endsection



@section('content')
<?php
function randomPass($length){
  $chars = "abcdefghijkmnopqrstuvwxyz0123456789";
  srand((double)microtime()*1000000);
  $str = "";
  $i = 0;

  while($i <= $length){
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $str = $str . $tmp;
    $i++;
  }
  return $str;
}

 ?>



<div class="row">
  <div class="col-md-12">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">

                        <h5 class="text-center">Average Score</h5>
                    </div>
                    <div class="ibox-content">




                        <h3 class="no-margins text-center">{{ $calculate[0]->average }}%</h3>

                        <h3 class="no-margins text-center" style="padding-top: 15px;">{{ $calculate[0]->score}}%</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
              <div class="ibox ">
                  <div class="ibox-title">

                      <h5 class="text-center">Average Time</h5>
                  </div>
                  <div class="ibox-content">
                      <h3 class="no-margins text-center">{{ $calculate[0]->minutes }}M </h3>

                      <h3 class="no-margins text-center" style="padding-top: 15px;">{{ $calculate[0]->Mini_Max}} </h3>
                  </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="ibox ">
                  <div class="ibox-title">

                      <h5 class="text-center">Passed</h5>
                  </div>
                  <div class="ibox-content" style="height: 80px;">
                      <h3 class="no-margins text-center" style="padding-top: 17px;">{{ $calculate[0]->Passed }}</h3>

                  </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="ibox ">
                  <div class="ibox-title">

                      <h5 class="text-center">Failed</h5>
                  </div>
                  <div class="ibox-content" style="height: 80px;">
                      <h3 class="no-margins text-center" style="padding-top: 17px;">{{ $calculate[0]->Failed }}</h3>

                  </div>
              </div>
            </div>

        </div>


        <div class="row">

        <div class="col-lg-12">
        <div class="ibox ">
        <div class="ibox-title">
            <h5 style="text-transform: uppercase;">Users Who have taken the Test </h5>
            <div class="ibox-tools">

            </div>
        </div>







        <div class="ibox-content">

            <div class="table-responsive">
              <div class="table50">


                 <label style="float: left;padding-right: 40px;position: relative;left: 17px; top: 2px;">Sort By Date:<input type="text" class="form-control form-control-sm" id="sortbydate" onblur="sortbydatefunction(this.value)" placeholder="" aria-controls="table_searches"></label>

                 <table class="table table-striped table-bordered table-hover actual-table" id="table_searches" style="display: none;">
                     <thead>
                     <tr class="header" style="background-color: black;">

                         <th>#</th>
                         <th>Course</th>
                         <th>Test Name</th>
                         <th>Fullname </th>
                         <th>Email</th>
                         <th>Result </th>
                         <th>Score </th>
                         <th>Date </th>



                     </tr>
                     </thead>
                     <tbody>

              @foreach($get_test as $testt)

              @if($testt->result == "Failed")
              <tr id="user_results_link" style="background-color: red;" >
                  <td>{{ $testt->count}} </td>
                  <td>{{ $testt->course }}</td>
                  <td>{{ $testt->title}}</td>
                  <td>{{ $testt->fullname }}</td>
                  <td>{{ $testt->email}}</td>
                  <td>{{ $testt->result }}</td>
                  <td>{{ $testt->score}}</td>
                  <td>{{ $testt->date }}</td>

            </tr>
              @else

              <tr id="user_results_link" style="background-color: green;" >
                <td>{{ $testt->count}} </td>
                <td>{{ $testt->course }}</td>
                <td>{{ $testt->title}}</td>
                <td>{{ $testt->fullname }}</td>
                <td>{{ $testt->email}}</td>
                <td>{{ $testt->result }}</td>
                <td>{{ $testt->score}}</td>
                <td>{{ $testt->date }}</td>

            </tr>

              @endif

                 @endforeach


                     </tbody>
                 </table>
               </div>



                <table class="table table-striped table-bordered table-hover dataTables-example" id="table_searches_1">

                    <thead>
                    <tr class="header">

                        <th>#</th>
                        <th>Name </th>
                        <th>Email</th>
                        <th>Score </th>
                        <th>Started On </th>
                        <th>Finished On </th>
                        <th>Time </th>
                        <?php $q = 1; ?>
                        @foreach($test->getQuestions as $test_q)
                        <th data-toggle="tooltip" data-placement="top" title="{{ $test_q->question}}"><?php echo $q; ?></th>
                        <?php $q++; ?>

                        @endforeach
                    </tr>
                    </thead>
                    <tbody>

                      <?php $count_inc = 1; ?>
                      <?php $test_code = ""; ?>

                      @foreach($test->getStudents as $test_details)

                            <?php $test_code = $test->test_code; ?>
                       @if($test_details->result == 'Passed')
                                <tr  id="user_results_passed" data-id="{{ $test_details->id}}" data-test="{{$test->test_code}}">
                        @else
                         <tr  id="user_results_failed" data-id="{{ $test_details->id}}" data-test="{{$test->test_code}}">
                         @endif

                        <td><?php echo $count_inc; ?>   </td>
                        <td>{{ $test_details->fullname}}</td>
                        <td>{{ $test_details->email}}</td>

                        @if($test_details->result == "Passed")
                        <td><div class="report-row-score" style="background: linear-gradient(90deg, hsla(126.4, 95.1%, 52%, 0.3) 80%, transparent 0%);" data-copy="80%	16	20">{{ $test_details->test_score }}% {{ $test_details->score }}</div></td>
                        @else
                        <td><div class="report-row-score" style="background: linear-gradient(90deg, hsla(32, 95%, 52%, 0.3) 80%, transparent 0%);" data-copy="80%	16	20">{{ $test_details->test_score }}% {{ $test_details->score }}</div></td>
                        @endif

                        <td>{{ $test_details->created_at }}</td>
                        <td>{{ $test_details->updated_at }}</td>
                        <td>{{ $test_details->minutes }} M</td>




                          <?php $coun_num_rows_down = 0;   $f = explode(',',$test_details->test_questions);


                           ?>
                      @foreach($test->getQuestions as $test_q)
                      <?php




                    if (isset($f[$coun_num_rows_down]) || isset($f[$coun_num_rows_down]) ){
                      if($f[$coun_num_rows_down] == 'P'){
                        ?>
                    <td><i class="fa fa-check" style="color: green; font-size: 17px;"></i></td>

                        <?php
                      }else{
                        ?>
                    <td><i class="fa fa-times" style="color: red; font-size: 17px;"></i></td>
                        <?php

                      }
                    }else{
                      ?>
                             <td></td>

                      <?php
                    }







                    $coun_num_rows_down++;

                        ?>
                      @endforeach



                    </tr>
                    <?php $count_inc++; ?>
                    @endforeach



                    </tbody>
                </table>









            </div>

        </div>
        </div>
        </div>

        </div>


        </div>
    </div>
  </div>





  <div class="modal fade" id="add_export_marks" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-size: 16px;">Test Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/maketest">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="test" style="font-size: 16px;">Date</label>
            <input type="text" style="padding: 10px 12px;" name="test" placeholder="Test Name" class="form-control" />
          </div>

          <div class="form-group">
            <label for="test" style="font-size: 16px;">From:</label>
            <input type="text" style="padding: 10px 12px;" name="test" placeholder="Test Name" class="form-control" />
          </div>



          <div class="form-group">
            <label for="test" style="font-size: 16px;">To:</label>
            <input type="text" style="padding: 10px 12px;" name="test" placeholder="Test Name" class="form-control" />
          </div>


          <div class="form-group">

              <button type="submit" class="btn btn-primary">Changes</button>

          </div>
        </form>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('backend/js/plugins/clockpicker/clockpicker.js') }}"></script>
    <script src="{{ asset('backend/js/iCheck/icheck.min.js') }}"></script>


            <!-- Date range picker -->
            <script src="{{ asset('backend/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

            <!-- Data picker -->
            <script src="{{ asset('backend/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

            <!-- Date range use moment.js same as full calendar plugin -->
            <script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>


            <script type="text/javascript">
              $('#sortbydate').datepicker({
                  format: "yyyy-mm-dd"
              });

              function sortbydatefunction(value){
               let date_set = $('#sortbydate').val();
               if(date_set){
                 var input, filter, table, tr, td, i, txtValue;
                input = date_set;
                filter = input.toUpperCase();
                table = document.getElementById("table_searches_1");
                tr = table.getElementsByTagName("tr");

                sortbydatefunction_1(filter);


                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[4];


                  if (td) {
                    txtValue = td.textContent || td.innerText;



                    txtValue = txtValue.substring(0, 10);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
               }
              }


              function sortbydatefunction_1(value){
               let date_set = value;
               if(date_set){
                 var input, filter, table, tr, td, i, txtValue;
                input = date_set;
                filter = input.toUpperCase();
                table = document.getElementById("table_searches");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName("td")[7];


                  if (td) {
                    txtValue = td.textContent || td.innerText;

                    console.log(txtValue.substring(0, 10));

                    txtValue = txtValue.substring(0, 10);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                    } else {
                      tr[i].style.display = "none";
                    }
                  }
                }
               }
              }









              </script>



    <script>


        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>


      <script>

      $('.buttons-excel').click(function(event){


        window.open("/a/print/user/test/<?php echo $test_code; ?>","_blank");
      });

      </script>


    <script type="text/javascript">
         function checkbx_func(){

           var checkBox = document.getElementById("id_pass_fail_toggle");

      if (checkBox.checked == true){
        $(".more_check_info").show();
      } else {
        $(".more_check_info").hide();
      }
         }
    </script>

    <script type="text/javascript">
    $(document).ready(function(){






        $('.dataTables-example').DataTable({
          initComplete : function() {

           },
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [


            ]

        });



        $('.actual-table').DataTable({
          pageLength: 25,
          responsive: true,
          dom: '<"html5buttons"B>lTfgitp',
            buttons: [


                              @if(isset($course->course_title))

                              {extend: 'excel', text: 'Export Marks', title: '{{ $course->course_title }} Results'},
                              @else


                             {extend: 'excel', text: 'Export Marks', title: '{{ $test->test_title }} Results'},

                              @endif
            ]

        });

    });
</script>


<script type="text/javascript">
  $("#table_searches_1 tr").click(function(){
    var dataId = $(this).data("id");
    var testid = $(this).data("test");
    window.location = "/a/test/"+testid+"/"+dataId;
  });
</script>



        <script type="text/javascript">
        $("#sortcal").click(function(){
          alert("okay");
        })
        </script>



    @if($errors->any())
    <script type="text/javascript">
          $("#exampleModalCenter").modal();
    </script>


    @endif

    @endsection
