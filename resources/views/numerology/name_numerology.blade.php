<!DOCTYPE html>
<html>

<head>
     <title>Add Name Numerology Record</title>
</head>

<body>
     <h1>Add Name Numerology Record</h1>

     <form action="{{ route('name_numerology.store') }}" method="POST">
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
          <button type="submit">Save</button>
     </form>
</body>

</html>