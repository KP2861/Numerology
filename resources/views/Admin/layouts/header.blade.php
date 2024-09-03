<!-- Navbar -->
<nav class=" navbar main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('admin/dashboard')}}" class="nav-link"><h5><i class="fa fa-home" aria-hidden="true"></i> Home</h5></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin/user/queries') }}" class="nav-link"><h5>user <sup><i class="fa fa-comment" aria-hidden="true"></i></sup></h5></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user-circle" style="font-size:30px; color:#702632"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center" style="background-color: #EFEFDF;">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media text-black">
            <h4>{{Auth::user()->name ?? 'Guest'}}</h4> 
            </div>

            <a href="{{url('admin/profile')}}">
            <div class="media ml-3" style="color:#40434E">
               <h5>Profile</h5> 
            </div>
            </a>

            <form action="{{url('admin/logout')}}" method="post">
              @csrf
               <button  type="submit" style="background-color: #080705; color:#EFEFDF; /* Green */
                   border: none;
                   color: white;
                   padding: 2px 2px;
                   text-align: center;
                   text-decoration: none;
                   display: inline-block;
                   border-radius:2px;
                   font-size: 16px;
                   margin: 8px 15px;
                   cursor: pointer;">Logout</button>
             </form>
            <!-- Message End -->
      </li>
 
     <!--Arrow -->
      <li class="nav-item">
        
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
        </a>
      </li>
    </ul>
  </nav>
