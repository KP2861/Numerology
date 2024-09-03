<!DOCTYPE html>
<html>

<head>
     <title>Create Phone Numerology Record</title>
     <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <!-- jQuery Validation CSS (Optional) -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.css">
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

          <!-- Display error message -->
          @if(session('error'))
          <div class="alert alert-danger">
               {{ session('error') }}
          </div>
          @endif

          <!-- Form to create new phone numerology record -->
          <form id="numerologyForm" action="{{ route('phone_numerology.store') }}" method="POST" class="mt-4">
               @csrf
               <div class="form-group">
                    <label for="numerology_type">Numerology Type:</label>
                    <input type="number" class="form-control @error('numerology_type') is-invalid @enderror" id="numerology_type" name="numerology_type" step="1" min="1" value="{{ old('numerology_type') }}" required>
                    @error('numerology_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
               </div>

               <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                    @error('phone_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
               </div>

               <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                    @error('dob')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
               </div>

               <div class="form-group">
                    <label for="area_of_concern">Area of Concern:</label>
                    <input type="text" class="form-control @error('area_of_concern') is-invalid @enderror" id="area_of_concern" name="area_of_concern" value="{{ old('area_of_concern') }}" required>
                    @error('area_of_concern')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
               </div>

               <button type="submit" class="btn btn-primary">Save</button>
               <a href="{{ route('numerology.selectNumerology') }}" class="btn btn-secondary">Back</a>
          </form>

     </div>

     <!-- jQuery and jQuery Validation Plugin -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
     <!-- Bootstrap JS and dependencies -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script>
          $(document).ready(function() {
               $('#numerologyForm').validate({
                    rules: {
                         numerology_type: {
                              required: true,
                              number: true,
                              min: 1
                         },
                         phone_number: {
                              required: true,
                              minlength: 10,
                              digits: true
                         },
                         dob: {
                              required: true,
                              date: true
                         },
                         area_of_concern: {
                              required: true
                         }
                    },
                    messages: {
                         numerology_type: {
                              required: "Please enter a numerology type.",
                              number: "Please enter a valid number.",
                              min: "Numerology type must be at least 1."
                         },
                         phone_number: {
                              required: "Please enter your phone number.",
                              minlength: "Phone number must be at least 10 digits.",
                              digits: "Please enter only digits."
                         },
                         dob: {
                              required: "Please enter your date of birth.",
                              date: "Please enter a valid date."
                         },
                         area_of_concern: {
                              required: "Please specify the area of concern."
                         }
                    },
                    errorElement: 'div',
                    errorPlacement: function(error, element) {
                         error.addClass('invalid-feedback');
                         element.closest('.form-group').append(error);
                    },
                    highlight: function(element) {
                         $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element) {
                         $(element).removeClass('is-invalid');
                    }
               });
          });
     </script>
</body>

</html>