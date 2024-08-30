<!DOCTYPE html>
<html lang="en">

<head>

     <title>Home Page</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <header>
          <div class="text-center mt-5">
               <h1>Home Page</h1>
               <p>Login Your Account <a href="{{ route('login') }}">Login now</a></p>
          </div>
     </header>
     <div class="container text-center mt-5">
          <a href="{{ route('numerology.create') }}" class="btn btn-primary">Add Numerology Type</a>
     </div>

</body>

</html>