@extends('admin.layouts.master')
@section('page')
All Tests | {{ auth()->user()->name }}
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

 <div class="wrapper wrapper-content">
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body">
        <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Theses are all tests created    <a href="" class="btn btn-outline-primary btn-rounded alignToTitle pull-right"  data-toggle="modal" data-target="#addtest"><i class="mdi mdi-plus"></i>Add Test</a>
    </h4>
    </div>
      </div> <!-- end card -->
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="wrapper wrapper-content">
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox ">
            <div class="ibox-title">
                <h5>All Tests</h5>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
              <th>#</th>
              <th>Test Code</th>
              <th>Test Title</th>
              <th>Date Created</th>
              <th>Date Updated</th>
              <th>Action</th>

            </tr>
            </thead>
            <tbody>
              <?php $count = 1; ?>
              @foreach($tests as $test)
            <tr class="gradeX">
                <td><?php echo $count; ?></td>
                 <td>{{ $test->test_code}}</td>
                <td>{{ $test->test_title }}</td>
                <td>{{ $test->created_at }}</td>
                <td>{{ $test->updated_at }}</td>





                <td class="center">
                  <div class="btn-group">
<button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></i></button>
<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu">

<a class="dropdown-item" href="/a/test/menu/{{  $test->test_code }}">View</a>



</div>
</div>



                </td>
            </tr>
            <?php $count++; ?>
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


  <div class="modal fade" id="addtest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <label for="test" style="font-size: 16px;">Test Title</label>
            <input type="text" style="padding: 10px 12px;" name="test" placeholder="Test Name" class="form-control" />
          </div>

          @if($errors->any())
             <div class="alert alert-danger">
          <ul style="margin-bottom: 0rem;">
            @foreach($errors->all() as $error)
            <li style="list-style-type: none;"> {{ $error}}</li>
            @endforeach
          </ul>
        </div>
          @endif

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
    @if($errors->any())
    <script type="text/javascript">
          $("#exampleModalCenter").modal();
    </script>
    @endif

    @endsection
