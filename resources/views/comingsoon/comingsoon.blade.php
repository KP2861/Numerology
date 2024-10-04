<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Coming Soon</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <style>
          body {
               background: #f5f5f5;
               color: #333;
               text-align: center;
               padding-top: 100px;
          }

          .coming-soon {
               background: #fff;
               border-radius: 8px;
               box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
               padding: 40px;
               margin: 0 auto;
               max-width: 600px;
          }

          .coming-soon h1 {
               font-size: 3rem;
               margin-bottom: 20px;
          }

          .coming-soon p {
               font-size: 1.25rem;
               margin-bottom: 30px;
          }

          .coming-soon .btn {
               font-size: 1.25rem;
               padding: 10px 20px;
          }
     </style>
</head>

<body>
     <div class="container">
          <div class="coming-soon">
               <h1>Coming Soon</h1>
               <p>We are working. Stay tuned!</p>
               <a href="{{url('/')}}" class="btn btn-primary">Back</a>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>