<!DOCTYPE html>
<html>

<head>
     <title>Add Name Numerology Record</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container">
          <h1 class="mt-5">Add Name Numerology Record</h1>

          <!-- Display success message if available -->
          @if(session('success'))
          <div class="alert alert-success mt-3">
               {{ session('success') }}
          </div>
          @endif

          <!-- Form to add new numerology record -->
          <form action="{{ route('name_numerology.store') }}" method="POST" class="mt-4">
               @csrf
               <div class="form-group">
                    <label for="numerology_type">Numerology Type:</label>
                    <input type="number" class="form-control" id="numerology_type" name="numerology_type" required>
               </div>
               <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
               </div>
               <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
               </div>
               <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
               </div>
               <div class="form-group">
                    <label>Gender:</label><br>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" id="gender_male" name="gender" value="Male" required>
                         <label class="form-check-label" for="gender_male">Male</label>
                    </div>
                    <div class="form-check">
                         <input class="form-check-input" type="radio" id="gender_female" name="gender" value="Female" required>
                         <label class="form-check-label" for="gender_female">Female</label>
                    </div>
               </div>
               <button type="submit" class="btn btn-primary">Save</button>
               <a href="{{ route('numerology.selectNumerology') }}" class="btn btn-secondary">Back</a>
          </form>

     </div>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>