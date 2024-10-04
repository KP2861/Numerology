@extends("Admin.layouts.app")
@section('content')

    <div class="col-ml-6 mt-3 ml-3">
            <div class="card">
              <div class="card-header" style="background-color:#EFEFDF;">
              <div  style="display:flex; justify-content:space-between">
              <h1 class="card-title"><b>Edit Password</b></h1>
                  <a href="{{url('admin/profile')}}"><i class="fas fa-arrow-left" style="color:#40434E;"></i></a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="background-color:#F4F4ED">
                <div class="tab-content">
                  <div class="active tab-pane" id="personal_info">
          
             <div class="tab-pane">
                    <form action="{{url('admin/profile/change_password')}}" class="form-horizontal mt-4 ml-4 mr-4" id="form"  method="post">
                    @csrf
       
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter current Password" >
                        </div>
                      </div>

                  <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter new Password">
                        </div>
                 </div>

                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Confirm New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="Retype new password">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-danger" type="submit"><i class="fas fa-save"></i> Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                  </div>
                  </div>
                <!-- /.tab-content -->
              </div>
            </div>
            <!-- /.card -->
        
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

                  <!--change password-->

                  <!--/change password-->

 <!-- /.content -->
 
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('backend/dist/js/adminlte.msize:60in.js') }}"></script>
   <!-- jQuery -->
   <script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
   
<!--script validation-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection('content')
