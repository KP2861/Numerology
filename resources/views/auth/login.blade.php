<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <!-- Add Bootstrap CSS -->
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
     <div class="container mt-5">
          <div class="row justify-content-center">
               <div class="col-md-6">
                    <form method="POST" action="{{ route('login') }}">
                         @csrf
                         <div class="form-group">
                              <label for="email">Email</label>
                              <input
                                   type="email"
                                   id="email"
                                   name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="example@gmail.com"
                                   required
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                              @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                         </div>
                         <div class="form-group">
                              <label for="password">Password</label>
                              <input
                                   type="password"
                                   id="password"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password"
                                   required>
                              @error('password')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                         </div>
                         <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="form-group row mt-3">
                         <div class="col-md-12 text-center">
                              <a href="{{ route('forget.password.get') }}" class="btn btn-link">Reset Password</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- Add Bootstrap JS and dependencies -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>