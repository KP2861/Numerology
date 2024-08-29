<!DOCTYPE html>
<html>

<head>
     <title>Create Phone Numerology Record</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container">
          <h1 class="mt-5">Create Phone Numerology Record</h1>

          <!-- Display success message if available -->
          @if(session('success'))
          <div class="alert alert-success mt-3">
               {{ session('success') }}
          </div>
          @endif

          <!-- Form to create new phone numerology record -->
          <form action="{{ route('phone_numerology.store') }}" method="POST" class="mt-4">
               @csrf
               <div class="form-group">
                    <label for="numerology_type">Numerology Type:</label>
                    <input type="number" class="form-control" id="numerology_type" name="numerology_type" step="1" min="1" required>
               </div>

               <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" required
                         pattern="\d{10,}" title="Please enter at least 10 digits">
               </div>

               <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
               </div>
               <div class="form-group">
                    <label for="area_of_concern">Area of Concern:</label>
                    <input type="text" class="form-control" id="area_of_concern" name="area_of_concern" required>
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