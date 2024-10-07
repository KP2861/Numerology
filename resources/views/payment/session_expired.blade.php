<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Expired</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .alert-container {
            margin-top: 50px;
            text-align: center;
        }

        .redirect-message {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .alert-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="alert alert-danger alert-container">
                    <i class="fas fa-exclamation-triangle alert-icon"></i>
                    <h4 class="alert-heading">Session Expired</h4>
                    <p>{{ $message }}</p>
                    <hr>
                    <p class="redirect-message">
                        <i class="fas fa-spinner fa-spin"></i> You will be redirected to the home page in <span
                            id="countdown">5</span> seconds...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        // Redirect after 5 seconds
        let countdownElement = document.getElementById('countdown');
        let countdown = 5;

        const updateCountdown = () => {
            countdownElement.textContent = countdown;
            countdown -= 1;
            if (countdown < 0) {
                window.location.href = '{{ url('/') }}';
            }
        };

        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>
