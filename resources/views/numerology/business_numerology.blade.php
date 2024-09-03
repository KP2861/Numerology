<!DOCTYPE html>
<html>

<head>
     <title>Create Business Numerology Record</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container">
          <h1 class="mt-5">Create Business Numerology Record</h1>

          <!-- Display success message if available -->
          @if(session('success'))
          <div class="alert alert-success mt-3">
               {{ session('success') }}
          </div>
          @endif

          <!-- Display error message -->
          @if(session('error'))
          <div class="alert alert-danger">
               {{ session('error') }}
          </div>
          @endif

          <!-- Form to create new business numerology record -->
          <form action="{{ route('business_numerology.store') }}" method="POST" class="mt-4">
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
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone_number" name="phone_number" required pattern="\d{10,}" title="Please enter at least 10 digits">
               </div>

               <div class="form-group">
                    <label for="business_name">Business Name:</label>
                    <input type="text" class="form-control" id="business_name" name="business_name" required>
               </div>

               <div class="form-group">
                    <label for="type_of_business">Type of Business:</label>
                    <input type="text" class="form-control" id="type_of_business" name="type_of_business" required>
               </div>

               <div class="form-group">
                    <label for="have_partner">Do You Have a Partner?</label>
                    <select class="form-control" id="have_partner" name="have_partner" required>
                         <option value="0">No</option>
                         <option value="1">Yes</option>
                    </select>
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