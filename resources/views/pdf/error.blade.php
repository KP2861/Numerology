<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin: 0 auto;
            max-width: 600px;
        }
        .error-message {
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Error</h1>
        @if(isset($error))
            <div class="error-message">
                <p>{{ $error }}</p>
            </div>
        @endif
    </div>
</body>
</html>
