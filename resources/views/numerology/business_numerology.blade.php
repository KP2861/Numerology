<!DOCTYPE html>
<html>

<head>
     <title>Create Business Numerology Record</title>
</head>

<body>
     <h1>Create Business Numerology Record</h1>

     <form action="{{ route('business_numerology.store') }}" method="POST">
          @csrf
          <label for="numerology_type">Numerology Type:</label>
          <input type="text" id="numerology_type" name="numerology_type" required>
          <br>
          <label for="first_name">First Name:</label>
          <input type="text" id="first_name" name="first_name" required>
          <br>
          <label for="last_name">Last Name:</label>
          <input type="text" id="last_name" name="last_name" required>
          <br>
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>
          <br>
          <label for="phone_number">Phone Number:</label>
          <input type="text" id="phone_number" name="phone_number" required>
          <br>
          <label for="type_of_business">Type of Business:</label>
          <input type="text" id="type_of_business" name="type_of_business" required>
          <br>
          <button type="submit">Save</button>
     </form>


</body>

</html>