@extends("Admin.layouts.app")
@section('content')
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="color:#080705;">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3 style="color:#912F40">0000</h3>

                <p style="color:#912F40">Tile1</p>
              </div>
              <div class="icon" style="color:#912F40">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer color-dark" style="color:#912F40">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#702632;">
              <div class="inner">
                <h3 style="color:#FFFFFA;">0000</h3>

                <p style="color:#FFFFFA;">Tile2</p>
              </div>
              <div class="icon" style="color:#FFFFFA;">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#912F40;">
              <div class="inner">
                <h3 style="color:#FFFFFA;">0000</h3>

                <p style="color:#FFFFFA;">Tile3</p>
              </div>
              <div class="icon" style="color:#FFFFFA;">
              <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#EFEFDF;">
              <div class="inner">
                <h3 style="color:#912F40;">0000</h3>

                <p style="color:#912F40;">Tile4</p>
              </div>
              <div class="icon" style="color:#912F40;">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer" style="color:#912F40;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>


    <!-- /.content -->
  <div class="container-fluid mt-3">
    <h3 class="ml-3">Users</h3>
     <h6 class="ml-3">Current Month <i class="fa fa-history" aria-hidden="true"></i></h6>
  </div>
 <!-- Main content -->
             <div class="card-body">
             <table id="example2" class="table table-bordered table-hover">
             <thead>
      <tr>
        <th>#</th>
        <th>Username</th>
        <th>E-mail</th>
        <th>Created At</th>
       
     
      </tr>
    </thead>
    <tbody>
      <?php
      $count =1
      ?>
    @if(!empty($recent_users))
     @foreach ($recent_users as $recent_user)
     <tr>
     
      <td>{{ $count++ }}</td>
      <td>{{ $recent_user->name }}</td> 
      <td>{{$recent_user->email}}</td> 
      <td>{{ \Carbon\Carbon::parse($recent_user->created_at)->timezone('Asia/Kolkata')->format('M d / h:i A')  }}</td>
     
     @endforeach
     @else
      <p>No data found!</p>
    @endif
    </tbody>
             </table>
             </div>
             
 

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

           <!-- <script>
                @if(count($errors) > 0)
                   @foreach($errors->all() as $error)
                   toastr.error("{{ $error }}");
                   @endforeach
                @endif
           </script> -->
@endsection
