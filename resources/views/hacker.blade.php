<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hacker Login Form | Demo</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<section>
  {{-- banyak span seperti di HTML asli (bisa dikurangi jika ingin) --}}
  @for ($i = 0; $i < 200; $i++)
    <span></span>
  @endfor

  <div class="signin">
    <div class="content">
      <h2>Sign In</h2>
      <div class="form">
        <div class="inputBox">
          <input type="text" required>
          <i>Username</i>
        </div>
        <div class="inputBox">
          <input type="password" required>
          <i>Password</i>
        </div>
        <div class="links">
          <a href="#">Forgot Password</a>
          <a href="#">Signup</a>
        </div>
        <div class="inputBox">
          <input type="submit" value="Login">
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
