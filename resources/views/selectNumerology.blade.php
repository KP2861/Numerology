<!DOCTYPE html>
<html>

<head>
     <title>Main Page</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container">
          <h1 class="mt-5">Select Numerology Type</h1>

          <div class="mt-4">
               <a href="{{ route('name_numerology.create') }}" class="btn btn-primary btn-lg">Name Numerology</a>
               <a href="{{ route('business_numerology.create') }}" class="btn btn-secondary btn-lg">Business Numerology</a>
               <a href="{{ route('phone_numerology.create') }}" class=" btn btn-success btn-lg">Add New Numerology</a>
          </div>
     </div>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>