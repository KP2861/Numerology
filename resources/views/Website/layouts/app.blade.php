<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include("Website.layouts.header")
  <!-- /.navbar -->

  <!-- Main content Container -->
  @yield('content')
  
  <!-- /.content-wrapper -->
  @include("Website.layouts.footer")
  
</div>
<!-- ./wrapper -->

</body>
</html>
