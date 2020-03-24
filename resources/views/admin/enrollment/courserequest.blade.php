@extends('admin.layouts.master')
@section('page')
Course Requests
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

                <h2><span class="text-navy">Course Requests</span><br>
                </h2>

                <p>
                  These are all students requesting for courses
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
              <h5>Course Requests </h5>

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
              <th>Date Requested</th>
              <th>Time Ago</th>
              <th>Action</th>

          </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            @foreach($all_requests as $request)

          <tr class="gradeX">
            <td><?php echo $count; ?></td>

            <td>{{ $request->getUser->id }}</td>
                <td class="client-avatar"><img alt="image" src="{{ asset('user/')}}/{{ $request->getUser->avatar }}"> </td>
              <td>
                {{ $request->getUser->name }} {{ $request->getUser->surname }}
              </td>
              <td>
                  {{ $request->getCourse->course_title }}
                 </td>
                <td class="center">
                      {{ $request->created_at }}
               </td>
               <td>
                      {{ $request->created_at->diffForHumans() }}
               </td>
               <td>


                          <button class="btn btn-success" onclick="approving('{{$request->getUser->id}}','{{$request->getUser->name}}','{{$request->getCourse->id}}')">Approve</button>

                          <a class="btn btn-success" style="margin-top: 10px;" href="/a/course_requests/delete/{{$request->getUser->id}}/{{$request->getCourse->id}}">Remove</a>

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
function approving(val,name,course){
     const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false,
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Approve "+name+"'s course request, they will receive an email",
  type: 'warning',
  showCancelButton: true,
  confirmButtonText: "Approve",
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
window.location.href = "/a/course/approve/"+val+"/"+course;
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
    @endsection
