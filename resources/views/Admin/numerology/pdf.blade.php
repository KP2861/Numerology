<!DOCTYPE html>
<html>
<head>
    <title>Name Numerology Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Name Numerology Report</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Numerology Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>User Name</th>
                <th>User Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nameNumerologies as $index => $numerology)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $numerology['numerology_name'] }}</td>
                    <td>{{ $numerology['first_name'] }}</td>
                    <td>{{ $numerology['last_name'] }}</td>
                    <td>{{ $numerology['dob'] }}</td>
                    <td>{{ $numerology['gender'] }}</td>
                    <td>{{ $numerology['user_name'] }}</td>
                    <td>{{ $numerology['user_email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
