<form method="POST" action="{{ route('login') }}">
     @csrf
     <input type="email" name="email" placeholder="Email">
     <input type="password" name="password" placeholder="Password">
     <button type="submit">Login</button>
</form>
<div class="form-group row">
     <div class="col-md-6 offset-md-4">
          <div class="checkbox">
               <label>
                    <a href="{{ route('forget.password.get') }}">Reset Password</a>
               </label>
          </div>
     </div>
</div>