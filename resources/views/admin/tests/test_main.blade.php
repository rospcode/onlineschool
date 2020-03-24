@extends('admin.layouts.master')
@section('page')
Test Control | {{ auth()->user()->name }}
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
box-shadow:
    #ccc 0 0 2px 0;
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
</style>

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
        <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Test Name - {{ $test->test_title }}  <a href="/a/tests" class="btn btn-outline-primary btn-rounded alignToTitle pull-right" ><i class="mdi mdi-plus"></i>Tests</a>
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
                <h5>This is the control panel where you can adjust settings, add questions, publish the test, and view results.</h5>
            </div>
            <div class="ibox-content">




              <h1>Tasks</h1>



              <div class="testmoz-list-detail" style="padding-top: 40px;">


      <a href="/a/q/settings/adjust/{{ $test->test_code }}" class="testmoz-list-item">
          <div>1.</div>
          <div>
              <h6>Adjust settings</h6>
              <p>Change the test name, description and what happens after the test is graded. </p>
          </div>
      </a>
      <a href="/a/q/add/question/{{ $test->test_code }}" class="testmoz-list-item">
          <div>2.</div>
          <div>
              <h6>Add questions</h6>
              <p>It's not much of a test if it doesn't have questions.</p>
          </div>
      </a>
      <a href="/a/q/settings/publish/{{ $test->test_code }}" class="testmoz-list-item">
          <div>3.</div>
          <div>
              <h6>Publish &amp; distribute</h6>
              <p>Publish your test, distribute it to your students and start collecting results.</p>
          </div>
      </a>
      <a href="/a/q/settings/results/{{ $test->test_code }}" class="testmoz-list-item">
          <div>4.</div>
          <div>
              <h6>View results</h6>
              <p>See how well your students did on the test.</p>
          </div>
      </a>
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
