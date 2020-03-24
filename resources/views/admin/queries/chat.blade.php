@extends('admin.layouts.master')
@section('page')
Ticket System | {{ auth()->user()->name }}
@endsection

@section('style')
  <link href="{{ asset('backend/css/plugins/footable/footable.core.css') }}" rel="stylesheet">
  @endsection

@section('content')
 <div class="wrapper wrapper-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
   <div class="card-body">
       <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> This is the ticketing system
   </h4>
   </div> <!-- end card body-->
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
                        <h5>Helper Chat System</h5>

                    </div>
                    <div class="ibox-content">
                      <div class="wrapper wrapper-content animated fadeInRight ecommerce">


                          <div class="ibox-content m-b-sm border-bottom">
                              <div class="row">
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                          <label class="col-form-label" for="product_name">User Name</label>
                                          <input type="text" id="Name" name="Name" value="" placeholder="Name" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                          <label class="col-form-label" for="Email">Email</label>
                                          <input type="text" id="price" name="Email" value="" placeholder="Email" class="form-control">
                                      </div>
                                  </div>

                                  <div class="col-sm-4">
                                      <div class="form-group">
                                          <label class="col-form-label" for="status">Status</label>
                                          <select name="status" id="status" class="form-control">
                                              <option value="1" selected>Enabled</option>
                                              <option value="0">Disabled</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                          </div>

                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="ibox">
                                      <div class="ibox-content">

                                          <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                              <thead>
                                              <tr>

                                                  <th data-toggle="true">User name</th>
                                                  <th data-hide="phone">Email</th>
                                                  <th data-hide="all">Message</th>

                                                  <th data-hide="phone">Status</th>
                                                  <th class="text-right" data-sort-ignore="true">Action</th>

                                              </tr>
                                              </thead>
                                              <tbody>

                                                  <td>
                                                    Siyabonga Sithole
                                                  </td>
                                                  <td>
                                                      mrprospersithole@gmail.com
                                                  </td>
                                                  <td>
                                                    Hello i have a problem with my system i cannot perform certain functions
                                                  </td>
                                                  <td>
                                                  Online
                                                  </td>

                                                  <td class="text-right">
                                                      <div class="btn-group">
                                                          <button class="btn-white btn btn-xs">View Message</button>

                                                      </div>
                                                  </td>
                                              </tr>




                                              </tbody>
                                              <tfoot>
                                              <tr>
                                                  <td colspan="6">
                                                      <ul class="pagination float-right"></ul>
                                                  </td>
                                              </tr>
                                              </tfoot>
                                          </table>

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
    <!-- FooTable -->
    <script src="{{ asset('backend/js/plugins/footable/footable.all.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
    @endsection
