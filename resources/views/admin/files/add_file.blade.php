@extends('admin.layouts.master')
@section('page')
Add Files | {{ auth()->user()->name }}
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
       <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Add Files
   </h4>
   </div> <!-- end card body-->
</div> <!-- end card -->
</div>
</div>
</div>


<div class="row">
  <div class="col-md-6 offset-md-3">
<div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Course Files</h5>

                    </div>
                    <div class="ibox-content">
                      <div class="tabs-container">
                                              <ul class="nav nav-tabs" role="tablist">
                                                  <li><a class="nav-link active show" data-toggle="tab" href="#tab-1">Add Files</a></li>

                                              </ul>
                                              <div class="tab-content">
                                                  <div role="tabpanel" id="tab-1" class="tab-pane active show">
                                                      <div class="panel-body">

                                                        <form method="post" action="{{ route('admin.add.files') }}" enctype="multipart/form-data">

                                                          <input type="text"  name="cat_code" value="<?php echo randomPass(50); ?>" hidden="hidden"  class="form-control">

                                                          <div class="form-group  row"><label class="col-sm-2 col-form-label">File Display Name*</label>

                                                              <div class="col-sm-10"><input type="text"  name="file_name" value="{{ old('file_name') }}" class="form-control"></div>
                                                          </div>


                                                          <div class="form-group  row"><label class="col-sm-2 col-form-label">Course*</label>

                                                              <div class="col-sm-10">
                                                                <select class="select2_demo_1 form-control" name="file_type" id="file_type">


                                                                    <option value="Content">Course Study Document</option>
                                                                        <option value="Exercise">Execerise Document</option>


                                                                </select>

                                                              </div>
                                                          </div>

                                                          <div class="form-group  row" style="display: none;"><label class="col-sm-2 col-form-label">Course Section*</label>

                                                              <div class="col-sm-10">
                                                                <select class="select2_demo_1 form-control" name="file_type" id="file_type">


                                                                    <option value="Content">Course Study Document</option>
                                                                        <option value="Exercise">Execerise Document</option>


                                                                </select>

                                                              </div>
                                                          </div>

                                                            <div class="form-group  row"><label class="col-sm-2 col-form-label">File*</label>

                                                                <div class="col-sm-10">
                                                                  <select class="select2_demo_1 form-control" name="course" id="course">
                                                                    <option value="">Choose Course For File...</option>
                                                                    @foreach($courses as $course)
                                                                      <option value="{{ $course->id }}">{{$course->course_title }} - has {{ count($course->getFiles) }} Document Files</option>

                                                                      @endforeach
                                                                  </select>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                             {{ csrf_field() }}
                                                            </div>


                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row"><label class="col-sm-2 col-form-label">File</label>
                                                              <div class="custom-file col-sm-10">

  <input id="logo" type="file" name="file">
  <label for="logo" >upload a document file.</label>
</div>

</div>


                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                              @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                              @if (session('msg'))
                                                              <div class="alert alert-success">
                                                              {{ session('msg') }}
                                                              </div>
                                                              @endif
                                                            </div>




                                                            <div class="hr-line-dashed"></div>
                                                            <div class="form-group row">
                                                                <div class="col-sm-4 col-sm-offset-2">

                                                                    <button class="btn btn-primary btn-sm" onclick="$('.load').show();"  type="submit">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                      </div>
                                                  </div>




                                              </div>


                                          </div>


                    </div>
                </div>
              </div>



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
