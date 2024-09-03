@extends("Admin.layouts.app")
@section('content')
<div class="wrapper">

<!-- Main content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-user-secret"></i>  Admin Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}" style="color:#702632">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-dark card-outline">
              <div class="card-body box-profile" style="background-color:#F2F2E3;">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ URL::asset('backend/dist/img/avatar5.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{Auth::user()->name ?? 'None'}}</h3>

                <p class="text-muted text-center">Admin</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item"  style="background-color:#F2F2E3;">
                    <b>E-Mail</b> <a class="float-right">{{Auth::user()->email ?? 'None'}}</a>
                  </li>
                  <li class="list-group-item"  style="background-color:#F2F2E3;">
                    <b>Joining</b> <a class="float-right">{{Auth::user()->created_at ?? 'None'}}</a>
                  </li>
               
                </ul>
                 <form action="{{url('admin/logout')}}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-block mb-2" style="background-color:#080705; color:#EFEFDF;">Logout</button>
                  
                </form>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2 display-flex form-inline" style="background-color:#EFEFDF">
             <div><h3 style="color:#080705">Edit Personal Info.</h3></div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body" style="background-color:#F4F4ED">
                <div class="tab-content">
                  <div class="active tab-pane"  id="personal_info">
          
                  <!-- /.tab-pane -->
               
                  <!--personal info-->
                  <div class="tab-pane">
                    <form class="form-horizontal" action="" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{Auth::user()->name ?? 'None'}}">
                          <span class="text-danger error-text name_error"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{Auth::user()->email ?? 'None'}}">
                          <span class="text-danger error-text email_error"></span>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                       <button class="btn btn-danger" type="submit"><i class="fas fa-save"></i> Save Changes</button>
                        </div> 
                      </div>
                    </form>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                      <a href="{{url('admin/profile/change_password')}}"><button class="btn btn-info" type="submit"><i class="fas fa-key"></i> Change Password</button></a>
                        </div>
                  </div>
                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->


      
    </section>
    <!-- /.content -->
  </div>
  
    <!-- /.content -->

<!-- Bootstrap 4 -->
<script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('backend/dist/js/adminlte.min.js') }}"></script>
<!-- jQuery -->
<script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>

<!--script validation-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
@endsection('content')
