<!DOCTYPE html>
<html>

<head>
     <title>Add Numerology</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container">
          <h1 class="mt-5">Add Numerology Entry</h1>

          <!-- Display success message if available -->
          @if(session('success'))
          <div class="alert alert-success mt-3">
               {{ session('success') }}
          </div>
          @endif

          <!-- Form to add new numerology entry -->
          <form action="{{ route('numerology.store') }}" method="POST" class="mt-4">
               @csrf
               <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
               </div>
               <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="number" class="form-control" id="type" name="type" required>
               </div>
               <button type="submit" class="btn btn-primary">Add Numerology</button>
          </form>

     </div>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>