<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        .icon {
            font-size: 60px;
            color: #4CAF50;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        .countdown {
            font-size: 22px;
            font-weight: bold;
            color: #FF6347;
        }

        .message {
            font-size: 16px;
            margin-top: 10px;
            color: #555;
        }

        .spinner {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="icon">
            <i class="bi bi-arrow-down-circle"></i>
        </div>
        <h1>Your Report is Downloading...</h1>
        <p class="message">The report will start downloading shortly. You will be redirected in <span class="countdown"
                id="countdown">10</span> seconds...</p>
        <div class="spinner-border text-success spinner" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <form id="postForm" action="{{ route('download_bussiness') }}" method="POST">
            @csrf
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // Submit form for download
        document.getElementById('postForm').submit();

        // Countdown timer logic
        let countdownElement = document.getElementById('countdown');
        let countdownValue = 12;
        let countdownTimer = setInterval(function() {
            countdownValue--;
            countdownElement.textContent = countdownValue;
            if (countdownValue === 0) {
                clearInterval(countdownTimer);
            }
        }, 1000);

        // Redirect to home page after 5 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, 12000);
    </script>
</body>

</html>
