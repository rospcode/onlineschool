@extends('admin.layouts.master')
@section('page')
Graduates
@endsection

@section('content')
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
  <div class="card">
    <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content text-center">

                <h2><span class="text-navy">Graduates</span><br>
                </h2>

                <p>
                  Theses students graduated for the course
                </p>
                <a href="/a/graduates_users/all" class="btn btn-primary">View AS Row</a>


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
              <h5>Graduates: Ordered By latest </h5>
            
          </div>
          <div class="ibox-content">




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
              <th>Date Graduated</th>

          </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            @foreach($graduates as $user)
              @if( count($user->getGraduate) != 0)
          <tr class="gradeX">
            <td><?php echo $count; ?></td>

            <td>{{ $user->id }}</td>
              <td class="client-avatar"><img alt="image" src="{{ asset('user/')}}/{{ $user->avatar }}"> </td>
              <td>{{ $user->name }} {{ $user->surname }}
              </td>
              <td>  @foreach($user->getGraduate as $course)
                {{ $course->getCourse['course_title']}}<br/>
              @endforeach </td>
                <td class="center">
                  @foreach($user->getGraduate as $course)


                  @if($course->course_marks < 50)
                      <sd style="color: red;"> {{ $course->course_marks }}%<sd><br/>
                     @elseif($course->course_marks >= 50 && $course->course_marks <= 100)

                      @if($course->course_marks >= 75)
                      <sd style="color: green;">{{ $course->course_marks }}% Passed Distinction</sd><br/>
                      @else
                      <sd style="color: green;">{{ $course->course_marks }}% Passed</sd><br/>
                      @endif

                  @endif


                  @endforeach

               </td>
               <td>
                 @foreach($user->getGraduate as $course)
                  {{ $course->getCourse['created_at']}}<br/>
                @endforeach
               </td>


          </tr>
          <?php $count++; ?>
          @endif
          @endforeach




          </tfoot>
          </table>
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
