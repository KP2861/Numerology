<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Payment Not Working</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
     <div class="card text-center shadow-lg p-4 border-0" style="max-width: 400px; border-radius: 15px;">
          <div class="card-body">
               <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle text-danger" viewBox="0 0 16 16">
                         <path d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zm0 1A6 6 0 1 0 8 14 6 6 0 0 0 8 2z" />
                         <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
               </div>
               <h3 class="card-title text-danger">Payment Not Working</h3>
               <p class="card-text mt-3 text-danger fw-bold">{{ $errorMessage }}</p>
               <p class="card-text">Please try again later or contact our support team if the issue persists.</p>
               <a href="/" class="btn btn-primary mt-4">Go to Home</a>
          </div>
     </div>

     <!-- Bootstrap JS and dependencies -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>