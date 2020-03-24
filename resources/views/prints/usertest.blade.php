<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">



    <style>

    body{
      font-size: .656rem;
    }

    .table-striped tbody tr:nth-of-type(2n+1) {
    background-color: rgba(0,0,0,.05);
}
.table-bordered {
    border: 1px solid #EBEBEB;
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    color: white;
}

    </style>


  </head>
  <body>


                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="table_searches" style="display: none;">
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

                 @foreach($get_test as $test)

                 @if($test->result == "Failed")
                 <tr id="user_results_link" style="background-color: red;" >
                     <td>{{ $test->count}} </td>
                     <td>{{ $test->course }}</td>
                     <td>{{ $test->title}}</td>
                     <td>{{ $test->fullname }}</td>
                     <td>{{ $test->email}}</td>
                     <td>{{ $test->result }}</td>
                     <td>{{ $test->score}}</td>
                     <td>{{ $test->date }}</td>

                 </tr>
                 @else

                 <tr id="user_results_link" style="background-color: green;" >
                     <td>{{ $test->count}} </td>
                     <td>{{ $test->course }}</td>
                     <td>{{ $test->title}}</td>
                     <td>{{ $test->fullname }}</td>
                     <td>{{ $test->email}}</td>
                     <td>{{ $test->result }}</td>
                     <td>{{ $test->score}}</td>
                     <td>{{ $test->date }}</td>
                </tr>

                 @endif

                    @endforeach







                        </tbody>
                    </table>
                </div>




                <script src="{{ asset('backend/js/popper.min.js') }}"></script>
            <script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>
                <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

            <script src="{{ asset('backend/js/bootstrap.js') }}"></script>

                    <script src="{{ asset('backend/js/plugins/dataTables/datatables.min.js') }}"></script>
                    <script src="{{ asset('backend/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
                    <script src="http://timeago.yarp.com/jquery.timeago.js"></script>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $('.dataTables-example').DataTable({
                          initComplete : function() {
                             $('.buttons-excel').click();
                             window.close();
                           },
                            pageLength: 25,
                            responsive: true,
                            dom: '<"html5buttons"B>lTfgitp',
                            buttons: [

                                {extend: 'excel', title: 'Results'},

                            ]

                        });

                    });
                </script>

                <script>

                </script>


  </body>
</html>
