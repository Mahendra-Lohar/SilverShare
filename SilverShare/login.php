<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="./login_style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="./php/login.php">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="registration.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
