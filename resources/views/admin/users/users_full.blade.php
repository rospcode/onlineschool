@extends('admin.layouts.master')
@section('page')
Registered Users | {{ auth()->user()->name }}
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading" style="margin-top: 30px;">
                <div class="col-lg-10">
                    <h2>All Registered Users</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>User</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Requests</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>


<div class="wrapper wrapper-content">
  <div class="row">
      <div class="col-sm-12">
          <div class="ibox">
              <div class="ibox-content">
                  <span class="text-muted small float-right">Last User Registered: <i class="fa fa-clock-o"></i> @foreach( $users as $useragain)  @if($loop->last) {{ $useragain->created_at }} @endif @endforeach</span>
                  <h2>Users</h2>
                  <p>
                      These are all registered users.
                  </p>
                  <div class="input-group">
                      <input type="text" placeholder="Search client " class="input form-control">
                      <span class="input-group-append">
                            <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                      </span>
                  </div>
                  <div class="clients-list">
                  <span class="float-right small text-muted">{{ count($users) }} Users</span>
                  <ul class="nav nav-tabs">
                      <li><a class="nav-link active" data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Contacts</a></li>
                  </ul>
                  <div class="tab-content">
                      <div id="tab-1" class="tab-pane active">
                          <div class="full-height-scroll">
                              <div class="table-responsive">
                                  <table class="table table-striped table-hover">
                                      <tbody>
                                      @foreach($users as $user)
                                      <tr>
                                          <td class="client-avatar"><img alt="image" src="{{ asset('user/')}}/{{ $user->avatar }}"> </td>
                                          <td><a href="/a/profile/{{ $user->id }}" class="client-link">{{ $user->name }} {{ $user->surname }}</a></td>
                                          <td> {{ count($user->getenrolled)}} Courses Under</td>
                                          <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                          <td>{{ $user->email }}</td>
                                          @if($user->password != "")
                                          @if($user->blocked == "yes")
                                          <td class="client-status"><span class="label label-warning">Blocked</span></td>
                                          @else
                                          <td class="client-status"><span class="label label-primary">Active</span></td>
                                          @endif
                                          @else
                                          <td class="client-status"><span class="label label-danger">Waiting Approval</span></td>
                                          @endif
                                      </tr>
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
  </div>
              </div>


              <!-- register user modal -->
                  <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                          <div class="modal-content animated flipInY">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                  <h4 class="modal-title">Register a User</h4>
                                  <small class="font-bold"></small>
                              </div>
                              <div class="modal-body">
                                <div class="col-lg-12">
                                <div class="ibox ">

                                    <div class="ibox-content">
                                        <form method="post" id="adminsignup">
                                            <p>User details</p>
                                            {{ csrf_field() }}
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">First Name</label>

                                                <div class="col-lg-10"><input type="text" name="name" id="name" onkeydown="clearmessage()" onclick="enableTxt(this)" placeholder="First Name" class="form-control">
                                                  <div id="name-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Last Name</label>

                                                <div class="col-lg-10"><input type="text" name="surname" onkeydown="clearmessage()" onclick="enableTxt(this)" id="surname" placeholder="Last Name" class="form-control">
                                                  <div  id="surname-field">

                                                   </div>
                                                </div>
                                            </div>
                                            <div class="form-group row"><label class="col-lg-2 col-form-label">Email</label>

                                                <div class="col-lg-10"><input type="email" name="email" onkeydown="clearmessage()" onclick="enableTxt(this)" id="email" placeholder="Email" class="form-control">
                                                  <div id="email-field">

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
                                                    <div class="i-checks"><label> <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Manually register a user. and email will be sent to them, to create a password</label></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary" id="signupbutton" type="button">Create user</button>
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


    @endsection
